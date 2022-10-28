<!DOCTYPE html>
    <head>
    <title>Get Data</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
<div class="left">

     <form class="span4" action="" method="post">
     
  <fieldset>
    <legend>Data Entry</legend>

   <label>First Name <span class="required">*</span></label>
    <input type="text" name="fname" placeholder="First Name">
     <label>Last Name<span class="required">*</span></label>
     <input type="text" name="lname" placeholder="Last Name">
     <label>Middle Name<span class="required">*</span></label>
     <input type="text" name="mi" placeholder="Middle Name">
     <label>Age<span class="required">*</span></label>
     <input type="text" name="age" class="input-small" placeholder="Age">
    <br/>
    <label>Gender</label>
   <label class="radio">
  <input type="radio" name="gender" id="optionsRadios1" value="Male" checked>
  Male
</label>
<label class="radio">
  <input type="radio" name="gender" id="optionsRadios2" value="Femal">
  Female
</label>

 <label>Address<span class="required">*</span></label>
     <input type="text" name="address" class="input-xlarge" placeholder="Address">
         <?php
if(isset($_POST['getdata'])){
$conn=mysql_connect('localhost','root','');
mysql_select_db("getdata",$conn);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mi=$_POST['mi'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$address=$_POST['address'];

if(empty($fname) || empty($lname) || empty($mi) || empty($age) || empty($address)){
	echo "<label class='err'>All field is required</label>";
	}

elseif(!is_numeric($age)){
	echo "<label class='err'>Age must be numeric</label>";
	}
		else{
$insert="Insert into info(fname,lname,mi,age,gender,address)
 values('".$fname."','".$lname."','".$mi."','".$age."','".$gender."','".$address."')";

$rs=mysql_query($insert) or die(mysql_error());

?>
<script>alert('Data Entry Saved!');</script>";
<?php }
}
 ?>
<br/>    <button type="submit" name="getdata" class="btn">Submit</button>
<a href="data.php" class="btn btn-primary">View Data</a>
  </fieldset>
</form>

   </div>
   <?php 
   function save(){
	
	
	}
   ?>
    </body>
    </html>