<?php
$logFilePath = "../src/lib/Logger.log";

echo "<h1>Log File</h1>";
echo "<a href='log.php?download'>download as csv</a><br><br>";
echo "<a href='log.php?delete'>delete log file</a><br><br>";
// Function to display CSV as an HTML table
function displayCsvAsTable($filePath) {
    if (!file_exists($filePath) || !is_readable($filePath)) {
        echo "Log file not found or not readable.";
        return;
    }

    echo '<table border="1">';
    if (($handle = fopen($filePath, 'r')) !== false) {
        // Add table headers if available
        $header = fgetcsv($handle);
        if ($header) {
            echo '<tr>';
            foreach ($header as $cell) {
                echo '<th>' . htmlspecialchars($cell) . '</th>';
            }
            echo '</tr>';
        }

        // Add table rows
        while (($data = fgetcsv($handle)) !== false) {
            echo '<tr>';
            foreach ($data as $cell) {
                echo '<td>' . htmlspecialchars($cell) . '</td>';
            }
            echo '</tr>';
        }
        fclose($handle);
    }
    echo '</table>';
}

// Check if the user wants to download the CSV file
if (isset($_GET['download'])) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="log.csv"');
    readfile($logFilePath);
    exit;
}

//delete log file
if (isset($_GET['delete'])) {
    unlink($logFilePath);
    echo "Log file deleted.";
    //redirect to clear the GET parameters
    header("Location: log.php");
}

// Display the CSV as an HTML table
displayCsvAsTable($logFilePath);
?>