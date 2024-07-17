<?php
namespace src\model;

use src\lib\Logger;
use src\lib\LogLevels;

/**
 * Class Database
 *
 * Represents a connection to the SQLite database.
 */
class Database extends \SQLite3 {
    function __construct(
        private ?Logger $logger = new Logger()
    ) {
        try {
            $this->open(DB_PATH);
        } catch (\Exception $e) {
            $this->logMessage("Error opening database.", LogLevels::ERROR, $e);
        }
        $this->logMessage(
            message: "Database connection established.",
            logLevel: LogLevels::INFO
        );
    }

    /**
     * Logs a message to the log file.
     * 
     * @param string $message The message to log.
     * @param LogLevels $logLevel The log level to use (default: INFO).
     * @param object|null $dump The object to dump
     * @throws \Exception If the object to dump is invalid.
     */
    private function logMessage(string $message, LogLevels $logLevel = LogLevels::INFO): void
    {
        $this->logger->logMessage($message, $logLevel);
    }

    public function getTables(): array
    {
        $tables = [];
        $sql = "SELECT name FROM sqlite_master WHERE type='table' ORDER BY name";
        $result = $this->query($sql);

        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $tables[] = $row['name'];
        }

        return $tables;
    }

    public function getRows(string $table): array
    {
        $rows = [];
        $sql = "SELECT * FROM $table";
        $result = $this->query($sql);

        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $rows[] = $row;
        }

        return $rows;
    }
}