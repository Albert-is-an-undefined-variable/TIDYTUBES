<!DOCTYPE html>
<html>
<head>
	<title>New Search</title>

</head>
<body>

	<?php include('header.html') ?>

   <div class="hero">
     <div class="jumbotron text-center" style="margin-bottom: 0px;">
         <h1>New Search</h1>
         <p>Give us some hints and we're going to find what you need</p>
     </div>
     <form action="search.php" method="post">
       <div class="input-group">
         <label>Sample name: </label>
         <input type="text" name="search" value="">
       </div>
       <div class="input-group">
         <label>Choose a freezer: </label>

       </div>
       <div class="input-group">
   	  	<button type="submit" class="btn" name="reg_entry">search</button>
   		</div>

</form>
 </body>
 </html>

 <?php
 if (isset($_POST['reg_entry'])) {
 $search_value=$_POST["search"];
 $con=new mysqli("localhost","tidytubes","Welcome123%","mydb");
 if($con->connect_error){
     echo 'Connection Faild: '.$con->connect_error;
     }else{
         $sql="select * from sample where samplename like '%$search_value%'";

         $res=$con->query($sql);

         while($row=$res->mysqli_fetch_assoc()){
             echo 'Samplename:  '.$row["idfreezer"];


             }

         }}
 ?>
