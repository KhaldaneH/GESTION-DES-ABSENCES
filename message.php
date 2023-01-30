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
$mess=$_POST['messa'];
if (isset($_POST['submit'])){
   $sql = "UPDATE `absence` SET `Message`='$mess' WHERE ID='$ID'";
   if (mysqli_query($conn,$sql)) {
     echo '<script> alert("message envoyer par succès")
     </script>';
     require('report.php');
   } else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
   }
}
mysqli_close($conn);
?>