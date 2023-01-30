<?php
$servername = "localhost";
$database = "dev";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
};
$ID=$_POST['id'];
$nom=$_POST['nom'];
$Email=$_POST['email'];
$password=$_POST['Password'];
if (isset($_POST['submit'])){
  $sql = "INSERT INTO absence (ID, Fullname, Email, Password) VALUES ('$ID', '$nom', '$Email', '$password')";
  if (mysqli_query($conn,$sql)){
    echo '<script> alert("Nouveau enregistrement créé avec succès")</script>';
    require('login_gestionnair.php');
  } else {
    echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
 
  