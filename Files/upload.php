<?php
$targetDirectory = "uploads/";

// Verifică dacă s-a trimis un fișier
if(isset($_POST["submit"])) {
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Verifică tipul fișierului și mărimea
    if($fileType != "pdf") {
        echo "Doar fișiere PDF sunt permise.";
    } elseif ($_FILES["fileToUpload"]["size"] > 1000000) {
        echo "Fișierul este prea mare. Limita este de 1MB.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Fișierul " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " a fost încărcat.";
            header("Location: http://localhost/Mapa/Files/index.php");
            die();
        } else {
            echo "A apărut o eroare la încărcare.";
        }
    }
}



?>
