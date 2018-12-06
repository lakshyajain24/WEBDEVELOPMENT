<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
</head>
<body>
<?php
$hostname="localhost";
$username="root";
$password="";
$db_name="RESUMEDB";
$conn= mysqli_connect($hostname,$username,$password,$db_name);
 if(!$conn){
  	echo "connection failed:".mysqli_connect_error();
  }
 else{

$query="SELECT * FROM BIO";

$res= mysqli_query($conn,$query);

if(mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_assoc($result)){
		
	$NAME = $row['NAME'];
	$EMAIL= $row['EMAIL'];
	$role =$row['ROLE'];
	$MOB_NO = $row['CONTACT'];
	$address = $row['ADDRESS'];
	$GITHUB = $row['GITHUB'];
	$LINKS = $row['LINKS'];
	$SKILLS = $row['SKILL'];
	$about_SC = $row['SchoolORCollegeName'];
	$about_dob_SC = $row['GRADUATIONyEAR'];
	$about_OC = $row['OnlineCourseOC'];
	$about_dob_OC = $row['DateOfOC'];
	$DEGREE=$row['DEGREE'];
	$projects = $row['MadeProjects'];
	$JOBS = $row['JOBS'];
	$JOB_DESCRIPTION = $row['JOB_DESCRIPTION'];


		}

}
}
?>
<div>
	<div class="div1">
	<span><h1>LAKSHYA JAIN</h1><h5>WEB DEVELOPER</h5></span>
	<hr>
	<table>
		<tr>
			<td>mobile</td>
			<td>email</td>
			<td>github</td>
			<td>twiter</td>
			<td>location</td>
		</tr>
	</table>

	<img src="" width="140px" height="140px">
	<p>bssacscsacwhASNCSLCDNVWDWKCZX,ZCNDKBJDFJNKLbjdkvdscdskb</p>
	<h4>skill at glance</h4>
	<p class="">buisbcvubv<br>djsnvkdbdedcosajkcmsa<br>ncdshacsklvdfojf</p>
</div>
<div>
	<h3>WORK EXPERIANCE</h3>
</div>
<div>
	<h3>PROJECTS</h3>
</div>
<div>
	<h3>EDUCATION</h3>
</div>
<div>
	<h3>WHERE I'VE LIVED AND WORKED</h3>
</div>
<div>
<table>
	<tr class="tab"></tr>
	<tr>
		<td>mobile</td>
		<td>email</td>
		<td>github</td>
		<td>twiter</td>
		<td>location</td>	
	</tr>
</table>		
</div>

</body>
</html>