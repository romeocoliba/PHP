<?php
$targetDirectory = "uploads/";
$files = glob($targetDirectory . "*");

function getDownloadCount($file) {
      $filePath = "download_counts/" . $file . "_downloads.txt";
  
      if (file_exists($filePath)) {
          $count = (int)file_get_contents($filePath);
          return $count;
      } else {
          return 0;
      }
  }

foreach ($files as $file) {
    $fileName = basename($file);
    $downloadCount = getDownloadCount($fileName); 

    echo "<li><a href='download.php?file=" . $fileName . "'>" . $fileName . "</a> Descărcări: " . $downloadCount . "</li>";
}
?>
