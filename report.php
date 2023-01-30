<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<title>Attendance</title>
<style type="text/css">

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
   
    margin: 0 auto;
  display: inline;
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
#butt{
  background-color:#FFC0CB;
  opacity: 0.7;
}

.con{
  display: inline;
  color:black;
  font-weight: 800;
}
a:hover {
  text-decoration:none;
  
}
#butt2{
  margin-left:700px;
  font-weight: bold;
  color: black;
  opacity: 0.7;
}
#butt2:hover {
  color:#FFF842;
  font-weight: bold;
  
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

</style>
<body>
<br>
<div class="container" style="width:700px;"> 
<h1><span class="blue">&lt;</span>Affichage<span class="blue">&gt;</span> <span class="yellow">d'absence</pan></h1>
</div>
<br>
<a data-target="#myModal4" id="butt2" data-toggle="modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
  <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z"/>
</svg> Envoyer message</a>
 <!--send message-->
 <div id="myModal4" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" style data-dismiss="modal">×</button>  
                     <h2 class="modal-title" align="center">Envoyer message</h2>  
                </div>  
                <div class="modal-body">  
                <form action="message.php" method="POST">
                     <label style="margin-left:280px; ">ID</label>  
                     <input style="width:100px; margin-left:240px;" type="text" name="id" class="form-control" /> 
                     <br>  
                     <textarea style=" margin-left:205px;" name="messa" placeholder="message"></textarea>
                     <br>
                     <button  style="margin-left:247px;" type="submit" name="submit"  class="btn btn-warning">Envoyer</button>
                </form>  
                </div>  
           </div>  
      </div>  
 </div>  
<br><br>
<table width="800"  align="center">
      <tr>
        <td><div align="center">
        <form action="" method="post">
          <table  class="container" width="606" align="center"  >
          	<tr><th colspan="3" align="center"><h3 style="color:gray;">Afficher les absences de chaque stagiaire</h3></th></tr>
            <tr>
              <td width="308"><div align="center"><strong><span >Entrez l'id</span></strong></div></td>
              <td width="140"><span class="style6">
                <input class="form-control" style=" width:50;"type="text" name="eno" />
              </span></td>
              <td width="150"><input class="btn btn-warning" type="submit" value="Rechercher" name="btnsubmit"/></td>
            </tr>
          </table>
          </form>
        </div></td>
      </tr>
		<?php
		if(isset($_POST["btnsubmit"]))
		{
            $con=mysqli_connect("localhost","root","","dev");
			extract($_POST);
			$query = "select * from `absence` where ID = ".$eno." limit 1";

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
		}
		
		?>    
	</table>
	
		
</body>
