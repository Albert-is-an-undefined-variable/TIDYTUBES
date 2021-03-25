<?php
include('server.php');

// COMMENT LILI: 	there are 2 ways to end up here:
// 											a. over simple keyword search from Index
//											b. over Advanced Search
// 								The following if statement will process the $_POST variables accordingly
// 								The query search and the result presentation is the same for both cases.

// SIMPLE SEARCH with KEYWORD from INDEX PAGE ----------------------------------
if (isset($_POST['simple_search'])) {
	$searchword = mysqli_real_escape_string($db, $_POST['keyword']); //keyword by user
	// create search query with keyword
	$query = "SELECT * FROM Sample
						WHERE Name LIKE '%$searchword%'
						OR Cell_type LIKE '%$searchword%'
						OR Frozendate LIKE '%$searchword%'
						OR Availability LIKE '%$searchword%'
						OR Position LIKE '%$searchword%'
						OR Rack LIKE '%$searchword%'
						OR Amount LIKE '%$searchword%'
						OR Comment LIKE '%$searchword%'
					";
} // ADVANCED SEARCH -------------------------------------------------------------
elseif (isset($_POST['reg_search'])) {
	//receive all input variables from the serach form
	$samplename = mysqli_real_escape_string($db, $_POST['samplename']);
	$celltype = mysqli_real_escape_string($db, $_POST['celltype']);
	// $location = mysqli_real_escape_string($db, $_POST['Location']);		########## STORAGE STILL MISSING !!!!!! #########
	$rack = mysqli_real_escape_string($db, $_POST['rack']);
	$position = mysqli_real_escape_string($db, $_POST['position']);
	$amount = mysqli_real_escape_string($db, $_POST['amount']);
	$frozendate = mysqli_real_escape_string($db, $_POST['frozendate']);
	$availability = mysqli_real_escape_string($db, $_POST['availability']);
	$comment = mysqli_real_escape_string($db, $_POST['comment']);

	// create the search query using the fields from above (empty if not provided by user)
	$query = "SELECT *
						FROM Sample
						WHERE ( IF(LENGTH('$samplename') > 0, Name LIKE '%$samplename%' , 0)
				    OR IF(LENGTH('$celltype') > 0, Cell_type LIKE '%$celltype%', 0)
				    OR IF(LENGTH('$frozendate') > 0, Frozendate LIKE '%$frozendate%' , 0)
				    OR IF(LENGTH('$availability') > 0, Availability LIKE '%$availability%', 0)
						OR IF(LENGTH('$position') > 0, Position LIKE '%$position%' , 0)
						OR IF(LENGTH('$rack') > 0, Rack LIKE '%$rack%' , 0)
						OR IF(LENGTH('$amount') > 0, Amount LIKE '%$amount%' , 0)
						OR IF(LENGTH('$comment') > 0, Comment LIKE '%$comment%' , 0)
					)";

	// print($query);
} else {
	echo "Something went wrong! Please try again";
}

//search in db
$results = mysqli_query($db, $query) or die(mysqli_error($db));
// print ($query);

// GENERATE RESULT TABLE AND STORE IN '$table'
if ($results->num_rows > 0) {
	echo "<table border='1' cellspacing='5' cellpadding='4' id='resultTable' style='width:80%'>
					<thead>
						<tr>
							<th>Name</th>
							<th>Cell Type</th>
							<th>Freezer</th>
							<th>Rack</th>
							<th>Position</th>
							<th>Date<th>Amount</th>
							<th>Availability</th>
							<th>Comment</th>
						</tr>
					</thead>
					<tbody>";

	while($row = $results->fetch_assoc()) {
		$table .= "<tr>";
		$table .= "<td>".$row["Name"] . 				"</td>";
		$table .= "<td>" . $row["Cell_type"] . "</td>";
		$table .= "<td>MISSING</td>";
		$table .= "<td>" . $row["Rack"] . 			"</td>";
		$table .= "<td>" . $row["Position"] .	"</td>";
		$table .= "<td>" . $row["Frozendate"] . "</td>";
		$table .= "<td>" . $row["Amount"] . "</td>";
		$table .= "<td>" . $row["Availability"] . 		"</td>";
		$table .= "<td>" . $row["Comment"] . 	"</td>";
		$table .= "</tr>";
	}
	$table .= "</tbody> </table>";

}
$table .= "</ol>";


?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<?php include('header.html') ?>

	<div class="hero">
    <div class="jumbotron text-center" style="margin-bottom: 0px;">
         <h1>Search Results</h1>
         <p>Look what we found for you!</p>
		</div>
	</div>

	<div class="container">
			<h2>Search Results</h2>
			<div class="content">
				<h4> Matching Entries found: <?= mysqli_num_rows($results) ?></h4>
			</div>
			<!-- RESULT TABLE -->
			<div>
				<?php echo $table ?>
			</div>

			<form method="post" action="search.php">
				<div class="input-group">
					<button class="btn btn-success" href="search.php">New advanced Search</button>
					<button class="btn btn-success" href="index.php">Back to Home</button>
				</div>
			</form>
	</div>
	<?php include('footer.html') ?>

</body>
</html>
