<?php 

require_once '../src/bootstrap.php';

echo "<h2>Log</h2>";
echo "<pre>";

echo file_get_contents(LIB_ROOT."Logger.log");