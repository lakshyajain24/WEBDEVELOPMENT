<!DOCTYPE html>
<html>
<head>
	<title>Index Page</title>
	<style type="text/css">
		.maxheight{
			height:100px;  
		}
		hr{
			height:10px;
			background-color: #00284d;
		}

		p{
			position: absolute;
			margin-left: 15em;
			margin-top: 0em;
		}
		
		.int{
			width:50%;
			position: relative; 
		}
		h4{
			position: absolute;
			margin-left: 15em;
			margin-top: 0em;
		}
		body{
			background-image: url("images1.png");
		}
		.sub{
			margin-left: 25%;
			margin-top: 10px;
			border-radius: 30%;
			background-color: #1ab2ff;
			width: 100px;
			height: 50px;
			font-size:20px; 
		}
	</style>
</head>
<body>
<center><H1>RESUME</H1></center>	

<!-- INFORMATION ABOUT THE USER --><hr>
<div>
<form action="project_PHP.php" method="post"><center>
	<span><p>BIOPIC:</p><input type="file" name="IMAGE" class="image"></span><br><br>
	<span><p>NAME:</p><input type="text" name="NAME" class="int" required placeholder="FULL NAME"></span><br><br>
	<span><p>E-MAIL:</p><input type="text" name="EMAIL" class="int" required placeholder="E-MAIL ADDRESS"></span><br><br>
	<span><p>CONTACT:</p><input type="text" name="MOB_NO" class="int" required placeholder="MOBILE NUMBER"></span><br><br>
	<span><p>ADDRESS:</p><input type="text"  class="maxheight int" name="address" placeholder="TOTAL ADDRESS WITH PINCODE" required ></span><br><br>
	<span><p>GITHUB:</p><input type="text" name="GITHUB" class="int" required placeholder="ENTER THE GUITHUB LINK"></span><br><br>
	<h4>ENTER YOUR OTHER SOCIAL LINKS:-</h4><br><br>
	<input type="text"  class="maxheight int" name="LINKS" placeholder="GIVE YOUR SOCIAL SITES LINK AND IN EVERY LINK GIVE A '/' BETWEEN THEM" ><br><br>
	<h4>YOUR SKILLS:-</h4><br><br>
	<input type="text"  class="maxheight int" name="SKILLS" placeholder="ABOUT YOUR SKILLS" required ><br><br>

	<h4>ABOUT YOUR EDUCATION:-</h4><br><br>
	<input type="text" class="maxheight int" name="about_SC" placeholder="ENTER YOUR SCHOOL OR COLLEGE NAME WITH ADDRESS" required ><br><br>
	<input type="text" class="int" name="about_dob_SC" placeholder="ENTER THE YEAR OF COMPLETING THE COURSE" ><br><br>
	<input type="text" class="maxheight int" name="about_OC" placeholder="ENTER YOUR ONILNE COURSE NAME IF YOU HAVE DONE ANY" ><br><br>
	<input type="text" class="int" name="about_dob_OC" placeholder="ENTER THE YEAR OF COMPLETING THE COURSE" ><br><br>
	<input type="text" class="maxheight int" name="DEGREE" placeholder="ENTER YOUR ALL DEGREES" ><br><br>
	<h4>PROJECTS:-</h4><br><br>
	<input type="text" class="maxheight int" name="projects" placeholder="TELL US ABOUT YOUR PROJECTS"><br><br>
	<h4>ABOUT PREVIOUS JOBS:-</h4><br><br>
	<input type="text" class="maxheight int" name="JOBS" placeholder="ENTER NAME OF YOUR COMPANY"><br><br>
	<input type="text" class="int" name="ROLE" placeholder="ENTER ROLE IN YOUR PREVIOUS COMPANY"><br><br>
	<input type="text" class="maxheight int" name="JOB_DESCRIPTION" placeholder="DESCRIBE ABOUT YOUR PREVIOUS COMPANIES"><br><br>
</center>
	<input type="submit" class="sub" name="submit" value="SUBMIT" >
</form>
</div>


</body>
</html>