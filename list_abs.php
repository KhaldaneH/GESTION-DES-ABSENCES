<title>Simple Online Attendance System - Avadh Tutor</title>
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
  color: #FFF842;
}
a{
  margin-left:730px;
  color: #185875;
  text-decoration:none;
}
#butt2{
  margin-left:710px;
  font-weight: bold;
  color: black;
  opacity: 0.7;
}
#butt2:hover {
  color:#FFF842;
  font-weight: bold;
 
  
}
</style>
<body><br>
  
<script type="text/javascript">
	function getatt(value)
	{
		if(value == true)
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) - 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) + 1;
		}
		else
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) + 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) - 1;
		}
	}
</script>
<div class="container" style="width:700px;"> 
<h1><span class="blue">&lt;</span>Liste<span class="blue">&gt;</span> <span class="yellow">Absence</pan></h1>
</div>
<br>
<a href="report.php" id="butt2" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg> rapport</a>
<br><br>
<table  >

      <tr>
        <td>
        <form action="get_abs.php" method="post">
        <table width="150px" align="left" >
            	<tr>
                	<td> Select date : <br />
                   <?php 
				 		    $dt = getdate();
							$day = $dt["mday"];
							$month = date("m");
							$year = $dt["year"];
							
							echo "<select name='cdate'>";
							for($a=1;$a<=31;$a++)
							{
								if($day == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select><select name='cmonth'>";
							for($a=1;$a<=12;$a++)
							{
								if($month == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select><select name='cyear'>";
							for($a=2010;$a<=$year;$a++)
							{
								if($year == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select>";
						?>                    
                    </td>
                </tr>
             </table>	
        
          <table class="container" width="600"    style="margin-left:400px;">
            <tr>
              <td style="color:gray;" colspan="3"><div align="center"><strong><span>marquer la présences</span></strong></div></td>
            </tr>
            <tr bgcolor="#999966">
              <td width="114"><span >ID</span></td>
              <td width="152"><span >Nom</span></td>
              <td width="110"><span >présences</span></td>
            </tr>
            <?php
			$con=mysqli_connect("localhost","root","","dev");
				extract($_POST);
				$query = "select *from `absence` order by `ID`";
				$s = 0;
				$result = mysqli_query($con,$query)or die("select error");
				while($rec = mysqli_fetch_array($result))
				{
					$s = $s + 1;
					echo ' <tr>
							  <td width="114">'.$rec["ID"].'</td>
							  <td width="152">'.$rec["Fullname"].'</td>
							  <td width="110"><input type=checkbox name='.$rec["ID"].' onclick="getatt(this.checked);"/></td>
							</tr>';
				}
			?>			
            <tr>
              <td colspan="3"><div align="center">
                <input id="butt" type="submit" value="Enregistrer" name="btnsubmit"/>
                &nbsp;&nbsp;</div></td>
            </tr>
         
          </form>
          
         	<table class="con" width="100px"  >
            	<tr>
                	<td> Total Absent : <input type="text" id="txtAbsent" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
                <tr>
                	<td> Total Present : <input type="text" id="txtPresent" value="0" size="10"  disabled="disabled"/></td>
                </tr>
                <tr>
                	<td> Total stagiaires : <input type="text" id="txtStrength" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
             </table>
             </table>
             </table>
         
         </td>
      </tr>
      <h2><a id="previous" href="login_gestionnair.php" class="previous round"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5h21.5z"/>
</svg></a></h2>
    </table>
    
    </body>

