<?php
$targetDirectory = "uploads/";

function updateDownloadCount($file) {
    $filePath = "download_counts/" . $file . "_downloads.txt";
    
    if (file_exists($filePath)) {
        $count = (int)file_get_contents($filePath);
        $count++;

        file_put_contents($filePath, $count);
    } else {
        file_put_contents($filePath, "1");
    }
}

if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $filePath = $targetDirectory . $file;

    if (file_exists($filePath)) {
        updateDownloadCount($file);

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        echo "Fișierul nu există.";
    }
}
?>

