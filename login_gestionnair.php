<!DOCTYPE html>  
<html>  
<head>  
<title>login</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>  
<style>
@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-image: url('images/login 2.jpg'); 
    background-size: cover; 
    background-repeat: no-repeat; 
    height: 100vh; 
    background-attachment:fixed;
}

h1 {
  font-size:2.5em; 
  font-weight: 550;
  line-height:1.5em;
  text-align: center;
  color: #4DC3FA;
  background-color:black;
  margin-top:80px;
  opacity: 0.7;
  border-radius:10px;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #185875;
  text-align:center;

}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
     font-weight: bold;
     font-size: 1em;
     text-align: left;
     color: #185875;
}

.container td {
    font-weight: normal;
    font-size: 1em;
    -webkit-box-shadow: 0 2px 2px -2px #0E1119;
     -moz-box-shadow: 0 2px 2px -2px #0E1119;
     box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
    text-align: left;
    overflow: hidden;
    width: 90%;
    margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
    padding-bottom: 2%;
    padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
    background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
    background-color: #2C3446;
}

.container th {
    background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
     -moz-box-shadow: 0 6px 6px -6px #0E1119;
          box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
    transition-duration: 0.4s;
    transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
.modal-title{
     font-weight: bold;
     font-size:3em; 
    padding-bottom: 0em;
    color:black;
}
.modal-content{
     background-color:#4dc3fa;
     opacity: 0.9;
}
.close{
    color:red;
    font-size:3em;

}
ul{
  margin-left:130px;
}
a:hover{
  text-decoration:none;
}

#butt:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(3px, -3px, 0);
  
  transition-delay: 0s;
    transition-duration: 0.4s;
    transition-property: all;
  transition-timing-function: line;

}
.dd{
     background-color: #185875;
}
#butt2{
  background-color:black;
  opacity: 0.7;
}
#logout{
 color:black;
 font-weight: 550;
}
#logout:hover{
     color:yellow;
     
}

</style>
<body>  
           <br/>  
          <div class="container" style="width:700px;">  
                <h1 align="center">Page gestionnaire</h1> 
          <hr> 
<?php 
//page gestionnair  
 session_start();  
    
                if(isset($_SESSION['username']))  
                {  
                ?>  

                <div align="center">
                     <h1>Bienvenu le<?php echo date("d/m/y") ?></h1>
                     <h1><span class="blue">&lt;</span>Table<span class="blue"></span>&gt;<span class="yellow">Stagiaires</pan></h1>
<!--buttons-->
<ul class="nav nav-pills mb-3 w-100 "  id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
  <a data-target="#myModal2" id="butt2"   data-toggle="modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
  </svg> Ajouter</a>
  </li>
  <li class="nav-item" role="presentation">
  <a data-target="#myModal3" id="butt2"   data-toggle="modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"/>
</svg> Modifier</a>
  </li>
  <li class="nav-item" role="presentation">
  <a data-target="#myModal4" id="butt2"   data-toggle="modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg> Suprimer</a>
  </li>
  <li class="nav-item" role="presentation">
  <a href="list_abs.php" id="butt2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-columns" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 0 .5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2A.5.5 0 0 1 .5 2h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2A.5.5 0 0 1 .5 4h10a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2A.5.5 0 0 1 .5 6h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2A.5.5 0 0 1 .5 8h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-13 2a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5Zm13 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z"/>
</svg> List d'absence</a>
  </li>
</ul>
<!--ajouter-->
<div id="myModal2" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" style data-dismiss="modal">×</button>  
                     <h2 class="modal-title">Ajouter un stagiaire</h2>  
                </div>  
                <div class="modal-body">  
                <form action="Add.php" method="POST">
                     <label>ID</label>  
                     <input type="text" name="id" class="form-control"/>  
                     <br />  
                     <label>Nom Complet</label>  
                     <input type="text" name="nom" class="form-control"/>  
                     <br>
                     <label>Email</label>  
                     <input type="text" name="email" class="form-control"/> 
                     <br>
                     <label>Password</label>  
                     <input type="text" name="Password" class="form-control"/>
                     <br>
                     <button type="submit" name="submit"  class="btn btn-warning">Ajouter</button>
                </form>  
                </div>  
           </div>  
      </div>  
 </div>  
 <!--modifier-->
 <div id="myModal3" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" style data-dismiss="modal">×</button>  
                     <h2 class="modal-title">Modifier les donner</h2>  
                </div>  
                <div class="modal-body">  
                <form action="modify.php" method="POST">
                     <label>ID</label>  
                     <input style="width:100px;" type="text" name="id" class="form-control" />  
                     <br />  
                     <label>Nom Complet</label>  
                     <input type="text" name="nom" class="form-control" />  
                     <br>
                     <label>Email</label>  
                     <input type="email" name="Email" class="form-control" />
                     <br>
                     <button type="submit" name="submit"  class="btn btn-warning">Modifier</button>
                </form>  
                </div>  
           </div>  
      </div>  
 </div>  
 <!--suprimer-->
 <div id="myModal4" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button"  class="close " style data-dismiss="modal">×</button>  
                     <h2 class="modal-title">suprimer</h2>  
                </div>  
                <div class="modal-body">  
                <form action="del.php" method="POST">
                     <label>ID</label>  
                     <input style="width:100px;" type="text" name="id" class="form-control" />  
                     <br />  
                     <button type="submit" name="submit"  class="btn btn-warning">suprimer</button>
                </form>  
                </div>  
           </div>  
      </div>  
 </div>  
 

<br>
   <!--table stagaires-->  
  <?php
  $host = 'localhost';
  $dbname = 'dev';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  $sql = "SELECT * FROM absence ORDER BY ID ASC";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>
<table class="container">
  <thead>
    <tr>
      <th style="width:90px;">ID <a style="margin-left:2px;" data-target="#myModal6" id="butt"   data-toggle="modal"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"/>
</svg></a></th>
      <th style="width:150px;">Nom <a style="margin-left:10px;" data-target="#myModal7" id="butt"   data-toggle="modal"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"/>
</svg></a></th>
      <th style="width:300px;">Email <a style="margin-left:10px;" data-target="#myModal8" id="butt"   data-toggle="modal"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"/>
</svg></a></th>
      <th style="width:300px;">filier</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
    <tr>
      <td  align="center"><?php echo htmlspecialchars($row['ID']);?></td>
      <td><?php echo htmlspecialchars($row['Fullname']);?></td>
      <td><?php echo htmlspecialchars($row['Email']); ?></td>
      <td>Developemment digital</td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</h1><br /> 
                     <a href="#" id="logout">Logout</a>  
                </div>  
                <?php  
                }  
                else 
                {  
                ?>  
                <!--alert login form-->
                <div align="center">  
                     <a data-target="#myModal" role="button" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>Login</a>
                </div> 
                <hr> 
                <?php  
                }  
                ?>  
           </div>  
           <br />  
           <!--login form-->      
 <div id="myModal" class="modal fade">  
      <div class="modal-dialog">   
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" style data-dismiss="modal">×</button>  
                     <h2 class="modal-title">login</h2>  
                </div>  
                <div class="modal-body">  
                     <label>Email</label>  
                     <input type="email" name="username" id="username" class="form-control"/>  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" id="password" class="form-control"/>  
                     <br />  
                     <div class="text-success"><input  type="checkbox" onclick="show()"> Show Password</div>
                     <br />
                     <button style="margin-left:250px;" type="button" name="login_button" id="login_button" class="btn btn-warning">Login</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <!--modifier l'id-->
 <div id="myModal6" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" style data-dismiss="modal">×</button>  
                     <h2 class="modal-title">Modifier l'id</h2>  
                </div>  
                <div class="modal-body">  
                <form action="modify_id.php" method="POST">
                     <label style="margin-left:245px; ">ID</label>  
                     <input style="width:100px; margin-left:200px;" type="text" name="id" class="form-control" /> 
                     <br>
                     <label style="margin-left:215px; ">Noveau ID</label>  
                     <input type="text" style="width:100px; margin-left:200px;" name="id2" class="form-control" />
                     <br>
                     <button style="margin-left:210px;" type="submit" name="submit"  class="btn btn-warning">Modifier</button>
                </form>  
                </div>  
           </div>  
      </div>  
 </div>  
  <!--modifier le nom-->
  <div id="myModal7" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" style data-dismiss="modal">×</button>  
                     <h2 class="modal-title">Modifier le nom</h2>  
                </div>  
                <div class="modal-body">  
                <form action="modify_nom.php" method="POST">
                     <label style="margin-left:245px; ">ID</label>  
                     <input style="width:100px; margin-left:200px;" type="text" name="id" class="form-control" /> 
                     <br>
                     <label style="margin-left:215px; ">Noveau nom</label>  
                     <input type="text"  name="nom" class="form-control" />
                     <br>
                     <button style="margin-left:210px;"type="submit" name="submit"  class="btn btn-warning">Modifier</button>
                </form>  
                </div>  
           </div>  
      </div>  
 </div>  
 <!--modifier l'email-->
 <div id="myModal8" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" style data-dismiss="modal">×</button>  
                     <h2 class="modal-title">Modifier l'email</h2>  
                </div>  
                <div class="modal-body">  
                <form action="modify_email.php" method="POST">
                     <label style="margin-left:245px; ">ID</label>  
                     <input style="width:100px; margin-left:200px;" type="text" name="id" class="form-control" /> 
                     <br>
                     <label style="margin-left:215px; ">Noveau email</label>  
                     <input type="text" name="email" class="form-control" />
                     <br>
                     <button style="margin-left:210px; "type="submit" name="submit"  class="btn btn-warning">Modifier</button>
                </form>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script> 
 //login system
 $(document).ready(function(){  
      $('#login_button').click(function(){  
           var username = $('#username').val();  
           var password = $('#password').val();  
           if(username != '' && password != '')  
           {  
                $.ajax({  
                     url:"log1.php",  
                     method:"POST",  
                     data: {username:username, password:password},  
                     success:function(data)  
                     {  
                          //alert(data);  
                          if(data == 'No')  
                          {  
                               alert("Wrong Data");  
                          }  
                          else 
                          {  
                               $('#loginModal').hide();  
                               location.reload();  
                          }  
                     }  
                });  
           }  
           else 
           {  
                alert("Both Fields are required");  
           }  
      });  
      $('#logout').click(function(){  
           var action = "logout";  
           $.ajax({  
                url:"log1.php",  
                method:"POST",  
                data:{action:action},  
                success:function()  
                {  
                     location.reload();  
                }  
           });  
      });  
 });  

 //show password
function show() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
 </script> 
 <style>
     #butt2:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(3px, -3px, 0);
  
  transition-delay: 0s;
  transition-duration: 0.4s;
  transition-property: all;
  transition-timing-function: line;
}
 </style>
            
  </body>  
 </html>  