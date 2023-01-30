<?php
$servername = "localhost";
$database = "dev";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
}
$id=$_POST['id'];
if (isset($_POST['submit'])){
   $sql = "DELETE FROM `absence` WHERE ID='$id'";
   if (mysqli_query($conn, $sql)) {
     echo '<script> alert("suprimer par succès")</script>';
     include_once('login_gestionnair.php');
   } else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
   }
}


mysqli_close($conn);
?>