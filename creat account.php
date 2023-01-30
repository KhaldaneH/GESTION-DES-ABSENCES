<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body{
            background-image: url('images/login 2.jpg'); 
    background-size: cover; 
    background-repeat: no-repeat; 
    height: 100vh; 
        }
        .card{
            background-color:#185875;
            opacity: 0.8;
            
        }
        #kh{
            color:white;
        }
        #form{
            height: 450px;
        }
        h1{
            color:gold;
            margin-bottom:5px;
            text-align:center;
        }
        #text{
            text-align:center;
        }
        a{
            
            text-decoration:none;
        }
        a:hover {
            
            text-decoration:none;
        }
    </style>
    <script>
       
$(document).ready(function () {
    
    // Validate Username
        $('#usercheck').hide();   
        let usernameError = true;
        $('#usernames').keyup(function () {
            validateUsername();
        });
         
        function validateUsername() {
          let usernameValue = $('#usernames').val();
          if (usernameValue.length == '') {
          $('#usercheck').show();
              usernameError = false;
              return false;
          }
          else if((usernameValue.length < 3)||
                  (usernameValue.length > 20)) {
              $('#usercheck').show();
              $('#usercheck').html
    ("**length of username must be between 3 and 20");
              usernameError = false;
              return false;
          }
          else {
              $('#usercheck').hide();
          }
        }
     
       // Validate Email
        const email =
            document.getElementById('email');
        email.addEventListener('blur', ()=>{
           let regex =
    /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
           let s = email.value;
           if(regex.test(s)){
              email.classList.remove(
                    'is-invalid');
              emailError = true;
            }
            else{
                email.classList.add(
                      'is-invalid');
                emailError = false;
            }
        })
         
       // Validate Password
        $('#passcheck').hide();
        let passwordError = true;
        $('#password').keyup(function () {
            validatePassword();
        });
        function validatePassword() {
            let passwordValue =
                $('#password').val();
            if (passwordValue.length == '') {
                $('#passcheck').show();
                passwordError = false;
                return false;
            }
            if ((passwordValue.length < 8)||
                (passwordValue.length > 10)) {
                $('#passcheck').show();
                $('#passcheck').html
    ("**length of your password must be between 8 and 10");
                $('#passcheck').css("color", "red");
                passwordError = false;
                return false;
            } else {
                $('#passcheck').hide();
            }
        }
             
    // Validate Confirm Password
        $('#conpasscheck').hide();
        let confirmPasswordError = true;
        $('#conpassword').keyup(function () {
            validateConfirmPassword();
        });
        function validateConfirmPassword() {
            let confirmPasswordValue =
                $('#conpassword').val();
            let passwordValue =
                $('#password').val();
            if (passwordValue != confirmPasswordValue) {
                $('#conpasscheck').show();
                $('#conpasscheck').html(
                    "**Password didn't Match");
                $('#conpasscheck').css(
                    "color", "red");
                confirmPasswordError = false;
                return false;
            } else {
                $('#conpasscheck').hide();
            }
        }
         
    // Submit button
        $('#submitbtn').click(function () {
            validateUsername();
            validatePassword();
            validateConfirmPassword();
            validateEmail();
            if ((usernameError == true) &&
                (passwordError == true) &&
                (confirmPasswordError == true) &&
                (emailError == true)) {
                return true;
            } else {
                return false;
            }
        });
    });
   
    </script>
</head>
<body><br>

<div class="container  w-50">
    <div class="card px-5 " id="form1">
      <div class="col-lg-8
           m-auto d-block">
           <h1>creer un compte </h1>
        <form id="form" method="POST">
          <div class="form-group">
              <label id="kh" for ="user">
                Username:
              </label>
              <input type="text"
                    name="username" id="usernames"
                    class="form-control"required>
              <h5 id="usercheck" style="font-size: 15px; color: red;" >
                    **Username is missing
              </h5>
          </div>
 
 
          <div class="form-group">
              <label id="kh" for="user">
                    Email:
              </label>
              <input type="email" name="email"
                id="email" required
                class="form-control">
              <small id="emailvalid" class="form-text
                text-muted invalid-feedback">
                    Your email must be a valid email
              </small>
          </div>
          <div class="form-group">
              <label id="kh" for="password">
                    Password:
              </label>
              <input type="password" name="pass"
                id="password" class="form-control"required>
              <small id="passcheck" style="font-size: 15px; color: red;">
                **Please Fill the password
              </small>
          </div>
          <div class="form-group">
              <label id="kh" for="conpassword">
                    Confirm Password:
              </label>
              <input type="password" name="compass"
                    id="conpassword" class="form-control" >
              <small id="conpasscheck" style="font-size: 15px; color: red;">
                  **Password didn't match
              </small>
          </div>
 
          <div  class="mb-3"> <button id="submitbtn" v-on:click.stop.prevent="submit" class="btn btn-warning w-100" name="creat">creer</button> </div> 
         
        </form>
      </div>
    </div>
</div>


<?php

$username = "root"; 
$password = "";
$database = new PDO("mysql:host=localhost; dbname=dev;",$username, $password);


if (isset($_POST['creat'])){
    $chek_email = $database->prepare("SELECT * FROM absence WHERE EMAIL = :Email");
    $email=$_POST['email'];
    $chek_email->bindParam("Email", $email); 
    $chek_email->execute();
    if ($chek_email->rowCount()>0){
        echo '<div class="alert alert-danger" id="text" role="alert">
        ce mail existe déjà
        </div>'; 
    }else{
    $name = $_POST['username']; 
    $email = $_POST['email']; 
    $Password = $_POST['pass'];

    $serverName = 'localhost'; 
    $userName = 'root'; 
    $password ='';
    $conn = mysqli_connect($serverName, $userName, $password);
    
    mysqli_select_db($conn, 'dev');
    $sql = "insert into absence(Fullname, Email, Password)
    Values('$name','$email','$Password')";
    $result=mysqli_query($conn,$sql);
    if (!$result){
        echo '<div class="alert alert-danger" id="text" role="alert">
        il y a une erreur
        </div>'.mysqli_error($conn);
        exit(); 
    }else{
        echo '<div class="alert alert-success" id="text" role="alert">
        compte créé avec succès <a href="login_stagiaire.php">retour a Login page</a> 
        </div>' ;
    }
    }
}

?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>