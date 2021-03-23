<?php include('server.php')?>
<?php
if(!isset($_SESSION)) {
				session_start();
}
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Advanced Search</title>
    <link rel="shortcut icon" href="img/tube.png">
		<link rel="stylesheet" type="text/css" href="index.css">
	    <!-- <link rel="stylesheet" type="text/css" href="estilo.css"> -->

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>

		<?php include('header.html') ?>


		<div class="jumbotron text-center" style="margin-bottom: 0px;">
         <h1>Advanced Search</h1>
         <p>Can't find your cells? I bet, we can!</p>
    </div>

    <!-- Formula to enter Data for Advanced Search -->
    <div class="container">
 			 <h2>What are you looking for?</h2>
 			  <form action = "index.php">
 			     <div class="input-group">
 						 <label for="sample">Sample name: </label>
 						 <input type="text" id="Name" name="sample_name" title="Sample name"><br><br>
 			     </div>
 				</form>

 				<form action = "index.php">
 					 <div class="input-group">
 						 <label for="sample">Cell type: </label>
 						 <input type="text" id="cell_type" name="cell_type" title="Cell type"><br><br>
 					 </div>
 				</form>

        <form action = "index.php">
           <div class="input-group">
            <label for="freezer">Look in specific freezer: </label>
            <select name="freezer" id="freezer">
              <option value="all">All Freezers</option>
              <option value="freezer_id1">Freezer 01</option>
              <option value="freezer_id2">Freezer 02</option>
              <option value="freezer_id3">Freezer 03</option>
              <option value="freezer_id4">Freezer 04</option>
            </select>
          </div>
        </form>

 				<form action = "index.php">
 					 <div class="input-group">
 						 <label for="date">Frozen on the: </label>
 						 <input type="date" id="date" name="date" value="31.03.2021" title="Date"><br><br>
 					 </div>
 				</form>

 				<form action = "index.php">
 					<p>Cells available for:</p>

 						<div>
 						  <input type="radio" id="huey" name="drone" value="huey"
 						         checked>
 						  <label for="huey">Private: Just you can access the entry</label>
 						</div>

 						<div>
 						  <input type="radio" id="dewey" name="drone" value="dewey">
 						  <label for="dewey">Semi-privat: Others have to ask permission</label>
 						</div>

 						<div>
 						  <input type="radio" id="louie" name="drone" value="louie">
 						  <label for="louie">Public: Everyone may access the entry</label>
 						</div>

 						<div class="input-group">
 		 				 <input type="submit">
 		 			 </div>

 				</form>
 		</div>
