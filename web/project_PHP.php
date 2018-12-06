<?php
$hostname="localhost";
$username="root";
$password="";

$conn= mysqli_connect($hostname,$username,$password);
// if(!$conn){
//  	echo "connection failed:".mysqli_connect_error();
//  }
//  else{
//  echo "connected <br>";
//  }
if($_SERVER['REQUEST_METHOD']==='POST')
if (isset($_POST["submit"])){
	$NAME = $_POST['NAME'];
	$EMAIL= $_POST['EMAIL'];
	$role =$_POST['ROLE'];
	$MOB_NO = $_POST['MOB_NO'];
	$address = $_POST['address'];
	$GITHUB = $_POST['GITHUB'];
	$LINKS = $_POST['LINKS'];
	$SKILLS = $_POST['SKILLS'];
	$about_SC = $_POST['about_SC'];
	$about_dob_SC = $_POST['about_dob_SC'];
	$about_OC = $_POST['about_OC'];
	$about_dob_OC = $_POST['about_dob_OC'];
	$DEGREE=$_POST['DEGREE'];
	$projects = $_POST['projects'];
	$JOBS = $_POST['JOBS'];
	$JOB_DESCRIPTION = $_POST['JOB_DESCRIPTION'];
	$BIOPIC = basename($_FILES['IMAGE']['name']);
		$folder="images/";
		$image_path=$folder.$BIOPIC;
		move_uploaded_file($_FILES['IMAGES'][""], destination)

	
  // $query="CREATE DATABASE RESUMEDB";
  // $res=mysqli_query($conn,$query);
  // echo "$res";

 $query="CREATE TABLE RESUMEDB.BIO(NAME varchar(100),ROLE varchar(200),CONTACT varchar(200),EMAIL varchar(100),SKILL varchar(200),BIOPIC varchar(200),ADDRESS varchar(500),GITHUB varchar(100))";
 $res =mysqli_query($conn,$query);

$query="INSERT INTO RESUMEDB.BIO(NAME,ROLE,CONTACT,SKILL,ADDRESS,EMAIL,GITHUB) VALUES('$NAME','$role','$MOB_NO','$SKILLS','$address','$EMAIL','$GITHUB')"; 
$RES = mysqli_query($conn,$query);
if ($RES){
	echo "Data Added Sucessfully";
}else{
	echo "Entry Failed".mysqli_error($conn);
}






//  $query="CREATE TABLE RESUMEDB.EDUCATION(SchoolORCollegeName varchar(200),GRADUATIONyEAR varchar(20),DEGREE varchar(200),OnlineCourseOC varchar(200),DateOfOC varchar(200))";
//  $res =mysqli_query($conn,$query);

//   if($res){
//   	echo "data adding sucessfull";
//   }
//   else{
//   	echo "data adding fail:".mysqli_error($conn);
//   }


//  $query="INSERT INTO RESUMEDB.EDUCATION(SchoolORCollegeName ,GRADUATIONyEAR ,DEGREE ,OnlineCourseOC ,DateOfOC ) VALUES('$about_SC','$about_dob_SC','$DEGREE','$about_OC','$about_dob_OC')"; 
// $RES = mysqli_query($conn,$query);
// if ($RES){
// 	echo "Data Added Sucessfully";
// }else{
// 	echo "Entry Failed".mysqli_error($conn);
// }




//  $query="CREATE TABLE RESUMEDB.WORK(JOBS varchar(500),JOB_DESCRIPTION varchar(500))";
//  $res=mysqli_query($conn,$query);

//   if($res){
//   	echo "data adding sucessfull";
//   }
//   else{
//   	echo "data adding fail:".mysqli_error($conn);
//   }

//  $query="INSERT INTO RESUMEDB.WORK(JOBS,JOB_DESCRIPTION) VALUES('$JOBS','$JOB_DESCRIPTION')"; 
// $RES = mysqli_query($conn,$query);
// if ($RES){
// 	echo "Data Added Sucessfully";
// }else{
// 	echo "Entry Failed".mysqli_error($conn);
// }






//  $query="CREATE TABLE RESUMEDB.PROJECTS(MadeProjects varchar(500))";
//  $res=mysqli_query($conn,$query);
//  if($res){
//   	echo "data adding sucessfull";
//   }
//   else{
//   	echo "data adding fail:".mysqli_error($conn);
//   }
//  $query="INSERT INTO RESUMEDB.PROJECTS(MadeProjects) VALUES('$projects')"; 
// $RES = mysqli_query($conn,$query);
// if ($RES){
// 	echo "Data Added Sucessfully";
// }else{
// 	echo "Entry Failed".mysqli_error($conn);
// }
}
?>
