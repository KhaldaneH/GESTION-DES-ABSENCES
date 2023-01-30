<?php
$servername = "localhost";
$database = "dev";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
}
$ID=$_POST['id'];
$nom=$_POST['nom'];
$email=$_POST['Email'];
if (isset($_POST['submit'])){
   $sql = "UPDATE `absence` SET `Fullname`='$nom',`Email`='$email' WHERE ID='$ID'";
   if (mysqli_query($conn,$sql)) {
     echo '<script> alert("la modification succès")</script>';
     require('login_gestionnair.php');
   } else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
   }
}
mysqli_close($conn);
?>


