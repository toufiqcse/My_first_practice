<!DOCTYPE html>
    <head>
    <title>Get Data</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="right">
   <table class="table table-striped table-bordered span5" width="90%">
 <thead>
 <th>ID</th>
 <th>First Name</th>
 <th>Last Name</th>
 <th>Middle Name</th>
 <th>Age</th>
 <th>Gender</th>
 <th>Address</th>
 </thead>
   <?php 
   $conn=mysql_connect('localhost','root','');
mysql_select_db("getdata",$conn);

$query1 = "select * from info";
$get=mysql_query($query1);
while($row=mysql_fetch_array($get)){
   ?>
 <tr>
 <td><?php echo $row['pid'] ?></td>
 <td><?php echo $row['fname'] ?></td>
 <td><?php echo $row['lname'] ?></td>
 <td><?php echo $row['mi'] ?></td>
 <td><?php echo $row['age'] ?></td>
  <td><?php echo $row['gender'] ?></td>
 <td><?php echo $row['address'] ?></td>
 </tr>
   <?php }?>
   <tr>
   <td colspan="7"><a href="index.php" class="btn btn-primary">Add Entry</a></td>
   </tr>
</table>
    
</div>
    </body>
    </html>