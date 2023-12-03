<?php
include ("conexiune.php");
// $sql=mysqli_query($conexiune, "SELECT * FROM `elevi`");
// $sql=mysqli_query($conexiune, "SELECT * FROM `elevi` ORDER BY `prenume` ASC");
// $sql=mysqli_query($conexiune, "SELECT * FROM elevi WHERE sex = 'm'");
// $sql=mysqli_query($conexiune, "SELECT * FROM `elevi` ORDER BY `media_bac` DESC");
// $sql=mysqli_query($conexiune, "SELECT * FROM elevi WHERE media_bac < 9 and media_bac > 7 ORDER BY media_bac DESC");
// $sql=mysqli_query($conexiune, "SELECT * FROM `elevi` ORDER BY `media_bac` ASC");
$sql=mysqli_query($conexiune, "SELECT * FROM `elevi` WHERE (YEAR(CURRENT_DATE()) - YEAR(data_nasterii)) < 20 ");
echo "<table border=1>";
echo "<tr><td>Id</td><td>Nume</td><td>Prenume</td><td>Strada</td><td>Email</td><td>Date</td><td>Sex</td><td>Media</td></tr>";
while ($row=mysqli_fetch_row($sql)) {
echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";
}
echo "</table>";
mysqli_close($conexiune);
?>