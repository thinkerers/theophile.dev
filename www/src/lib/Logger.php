<?php

namespace src\lib;

enum LogLevels: string
{
    case DEBUG = 'debug';
    case INFO = 'info';
    case WARNING = 'warning';
    case ERROR = 'error';
}

class Logger
{
    public function __construct(
        public ?bool $isLogging = true,
        public ?string $logFilePath = null
    ) {
        if (!$this->logFilePath) {
            $this->logFilePath = $this->getDefaultLogFilePath();
        }

        // Check if log file exists and if it's empty
        if (!file_exists($this->logFilePath) || filesize($this->logFilePath) === 0) {
            $this->writeCsvHeaders();
        }
    }

    private function getDefaultLogFilePath(): string
    {
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
        $callingClass = isset($backtrace[1]['class']) ? $backtrace[1]['class'] : 'default';

        return __DIR__ . '/' . basename(str_replace('\\', '/', $callingClass)) . '.log';
    }

    private function writeCsvHeaders(): void
    {
        $headers = ['Timestamp', 'LogLevel', 'UserIP', 'Message', 'CallerFile', 'CallerLine', 'CallerFunction'];
        
        $logFileHandle = fopen($this->logFilePath, 'a');
        if ($logFileHandle === false) {
            error_log("Failed to open log file for writing headers: {$this->logFilePath}");
            return;
        }

        if (fputcsv($logFileHandle, $headers) === false) {
            error_log("Failed to write headers to log file: {$this->logFilePath}");
        }

        fclose($logFileHandle);
    }

    public function logMessage(string $message, LogLevels $logLevel = LogLevels::INFO): void
    {
        if (!$this->isLogging) {
            return;
        }

        $timestamp = date('Y-m-d H:i:s');
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
        $caller = $backtrace[1] ?? [];

        $callerFile = $caller['file'] ?? 'unknown file';
        $callerLine = $caller['line'] ?? 'unknown line';
        $callerFunction = $caller['function'] ?? 'unknown function';

        $logEntry = [
            $timestamp,
            $logLevel->value,
            $this->getUserIP(),
            $message,
            $callerFile,
            $callerLine,
            $callerFunction
        ];
        
        $logFileHandle = fopen($this->logFilePath, 'a');

        if ($logFileHandle === false) {
            error_log("Failed to open log file: {$this->logFilePath}");
            return;
        }

        if (fputcsv($logFileHandle, $logEntry) === false) {
            error_log("Failed to write to log file: {$this->logFilePath}");
        }

        fclose($logFileHandle);
    }

    public function getUserIP() {
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = $_SERVER['REMOTE_ADDR'];
    
        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }
    
        return $ip;
    }
    
}
