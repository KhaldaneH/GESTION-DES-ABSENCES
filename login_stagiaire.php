
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
    background-attachment:fixed
}

h1 {
  font-size:2.5em; 
  font-weight: 550;
  line-height:1.5em;
  text-align: center;
  color: #4dc3fa;
  margin-top:80px;
  background-color:black;
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
  color: #FB667A;
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
    width: 100%;
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
    font-size:4.5em; 
    padding-bottom: 0em;
    color:black;
}
.close{
    color:red;
}
.modal-content{
     background-color:#4dc3fa;
     opacity: 0.9;
}
#logout{
 color:black;
 font-weight: 550;
}
#logout:hover{
     color:yellow;
     text-decoration:none;
     
}
</style>
<body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h1 align="center">Page stagiaire</h1> <hr>    
<?php   
 session_start();  
    
                if(isset($_SESSION['username']))  
                {  
                ?>  
                <div align="center">  
                     <h1>Bienvenu le <?php echo date("d/m/y") ?></h1>
                     <h1><span class="blue">&lt;</span>Table<span class="blue">&gt;</span> <span class="yellow">Absence</pan></h1>
                     <br>
<?php
$servername = "localhost";
$database = "dev";
$username = "root";
$password = "";

$Em=$_SESSION['username'] ;

$con=mysqli_connect("localhost","root","","dev");
   extract($_POST);
   $query = "select * from `absence` where Email = '$Em'";

   $result = mysqli_query($con,$query)or die("select error error");
   while($rec = mysqli_fetch_array($result))
   {
        echo '<tr><td colspan="2"><table width="400" class="container" align="center"  >
        <tr>
          <th width="50" ><span >ID</span></th>
          <th width="100" ><span >Nom</span></th>';
          $query1 = "select * from `abs2` where `ID` = ".$rec["ID"]." order by Date";
             $result1 = mysqli_query($con,$query1)or die("select error error");
             while($rec1 = mysqli_fetch_array($result1))
             {
                    echo '<th >'.$rec1["Date"].'</th>';
             }
        echo '</tr>
        <tr>
          <td width="100"><span >'.$rec["ID"].'</span></td>
          <td width="170"><span >'.$rec["Fullname"].'</span></td>';
          $query1 = "select *from `abs2` where `ID` = ".$rec["ID"]." order by Date";
             $result1 = mysqli_query($con,$query1)or die("select error error");
             while($rec1 = mysqli_fetch_array($result1))
             {
                    echo '<td>';
                  if($rec1["Absence"]==0)
                       echo "A";
                  else
                       echo "P";
                  echo '</td>';
             }
        echo '
        </tr>
                            
     </table></td></tr>';
   }
   ?>
   <br>
<?php
$servername = "localhost";
$database = "dev";
$username = "root";
$password = "";


$Em=$_SESSION['username'] ;

  $dsn = "mysql:host=$servername;dbname=$database"; 
  $sql = "SELECT * FROM absence where Email='$Em'";
   
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
       <th style="">boit des messages</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td ><?php echo htmlspecialchars($row['Message']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
</table>
<br>

</h1><br />  
                     <a href="#" id="logout">Logout</a>  
                </div>  
                <?php  
                }  
                else 
                {  
                ?>  
                <div align="center">  
                     <a data-target="#myModal" role="button" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span>Login</a>
                </div> 
                <hr> 
                <?php  
                }  
                ?>  
           </div>  
           <br />  
             
 <div id="myModal" class="modal fade">  
      <div class="modal-dialog">  
   <!-- Modal content-->  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" style="font-size:3em;" class="btn btn-danger text-danger close" style data-dismiss="modal">×</button>  
                     <h2 class="modal-title">login</h2>  
                </div>  
                <div class="modal-body">  
                     <label class="text-primary">Email</label>  
                     <input type="email" name="username" id="username" class=" form-control" />  
                     <br />  
                     <label class="text-primary" >Password</label>  
                     <input type="password" name="password" id="password" class="form-control" />  
                     <br />  
                     <div class="text-success"><input   type="checkbox" onclick="show()"> Show Password</div>
                     <br />
                     <button type="button" name="login_button" id="login_button"class=" btn btn-warning">Login</button>
                     <a href="creat account.php"><input type="button" class="btn btn-secondary " value="creer un compte"></a> 
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('#login_button').click(function(){  
           var username = $('#username').val();  
           var password = $('#password').val();  
           if(username != '' && password != '')  
           {  
                $.ajax({  
                     url:"log2.php",  
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
                url:"log2.php",  
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
            
      </body>  
 </html>  