<?php
include('server.php');

// DELETE AN ENTRY
print("<br><br><br><br>");
echo "DIGGA WO IST DIE SCHEISS SAMPLE ID ICH KRIEG NEN ANFALL.";
if(isset($_POST['delete_entry'])){
  print("<br><br>DELETE PUSHED");

  if(isset($_POST['idSample'])) {
    print("<br><br>idSAMPLE:");
    print($_POST['idSample']);

    $idSample = $_POST['idSample'];
    echo "DELETE FROM Sample WHERE idSample =".$idSample;
  } else{
    echo "idSample not given??!!";
  }
}else {
  echo "Did you push the delete button to get here? Don't think so. Go Back";
}

?>

<!DOCTYPE html>
<html>
<head>
  <?php include('header.html') ?>
</head>
<body>

  <div class="hero">
    <div class="jumbotron text-center" style="margin-bottom: 0px;">
        <h1>Deletion successful</h1>
        <p>Your entry has been removed from the Storage!</p>
    </div>
  </div>

  <div class="container">
			<h2>Search Results</h2>
			<div class="content">
				<h4>The following Entry has been successfully removed:</h4>
			</div>
			<!-- RESULT TABLE -->
			<div>
				<?php echo $table ?>

			</div>

			<form method="post" action="search.php">
				<div class="input-group">
					<button class="btn btn-success" href="search.php">New advanced Search</button>
					<button class="btn btn-success" href="index.html">Back to Home</button>
				</div>
			</form>
	</div>
	<?php include('footer.html') ?>

</body>
</html>
