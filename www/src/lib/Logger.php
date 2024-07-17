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
    }

    private function getDefaultLogFilePath(): string
    {
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
        $callingClass = isset($backtrace[1]['class']) ? $backtrace[1]['class'] : 'default';

        return __DIR__ . '/' . basename(str_replace('\\', '/', $callingClass)) . '.log';
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

        $logMessage = sprintf(
            "[%s] [%s] [%s]: %s\n\tCalled from: %s on line %s in function %s\n",
            $timestamp,
            $logLevel->value,
            $this->getUserIP(),
            $message,
            $callerFile,
            $callerLine,
            $callerFunction
        );

        if (file_put_contents($this->logFilePath, $logMessage, FILE_APPEND) === false) {
            error_log("Failed to write to log file: {$this->logFilePath}");
        }
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
