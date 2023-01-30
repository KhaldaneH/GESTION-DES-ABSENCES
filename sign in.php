<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <title>Document</title>
    <style>
        fieldset{
            height:50px;
            
            
             
        }
        p{
            margin-top: 20px;
        }
        nav{
        
        text-align: center;
        border-radius: 150px;
        height: 50px;
        background-color:gray;
        opacity: 0.8;
        }
        h1{
            opacity: 1;
        }
        *{
        margin: 0; 
        padding: 0;
        }
    body{
    background-image: url('images/login 2.jpg'); 
    background-size: cover; 
    background-repeat: no-repeat; 
    height: 100vh; 
    }
    .logo{
        width:50px;
        height: 50px;
        margin-right:0.5%;
    }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
	  <div class="container-fluid">
      <img class="logo" src="images/ofpptlogo.png" alt="hhhh">
		<a class="navbar-brand " href="#">OFPPT</a>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  
			  <h1 style="margin-right:12%;" class="nav-item text-center text-white" >Gestion d'absence </h1>
						
		  
		</div>
	  </div>
  </nav>
<br>
<form>   
<fieldset class="text-center">
    <legend><b>Sign in</b></legend>
    <a class="btn btn-primary " href="login_stagiaire.php">Stagiaire</a><br> <br>
    <a class="btn btn-primary" href="login_gestionnair.php">Gestionnair</a>
</fieldset>
</form>
<br>
<br>
<br>



</body>
</html>