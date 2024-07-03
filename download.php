<?php
$id = $_GET['id'];
$file = __DIR__ . "/data/" . basename($id) . ".csv"; // Ensure the path is correct

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
} else {
    echo "File not found.";
}
?>
