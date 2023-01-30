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
$ABS=$_POST['Absence'];
if (isset($_POST['submit'])){
   $sql = "UPDATE `absence` SET `Absence`='$ABS' WHERE ID='$ID'";
   if (mysqli_query($conn,$sql)) {
     echo '<script> alert("la modification succès")
     </script>';
     require('list_abs.php');
   } else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
   }
}
mysqli_close($conn);
?>