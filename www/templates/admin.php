<?php
echo "<h2>Database tables</h2>";


foreach($this->db->getTables() as $table) {
    echo "<h3>$table</h3>";

    echo "<pre>";
    print_r($this->db->getRows($table)[0] ?? []);
    echo "</pre>";
}

echo "<h2>Log file</h2>";
echo "<pre>";

echo file_get_contents(LIB_ROOT."Logger.log");