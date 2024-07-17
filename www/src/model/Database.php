<?php
namespace src\model;

/**
 * Class Database
 *
 * Represents a connection to the SQLite database.
 */
class Database extends \SQLite3 {
    function __construct() {
        try {
            $this->open(DB_PATH);
        } catch (\Exception $e) {
            die("Error opening database."); 
        }
    }
}