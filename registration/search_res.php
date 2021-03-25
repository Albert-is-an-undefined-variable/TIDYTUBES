<?php
include('server.php');

// SIMPLE SEARCH with KEYWORD from INDEX PAGE
if (isset($_POST['simple_search'])) {
	//print("<br><br><br><br>");
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
	//search in db
	$results = mysqli_query($db, $query) or die(mysqli_error($db));
	// print ($query);

	if ($results->num_rows > 0) {
		echo "<table style='width:100%'>
							<tr>
								<th>Name</th>
								<th>Cell Type</th>
								<th>Freezer</th>
								<th>Rack</th>
								<th>Position</th>
								<th>Date<th>Amount</th>
								<th>Availability</th>
								<th>Comment</th>
							</tr>";

		$table = "<h2>Search Results</h2><ol>";

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
		$table .= "</table>";

	}
	$table .= "</ol>";
} else {
	echo "Something went wrong! Please try again";
}

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

	<div>
		<?php echo $table ?> Num Hits: <?= mysqli_num_rows($results) ?>
	</div>

	<!-- start a new search -->
	<form method="post" action="search.php">
		<div class="input-group">
		  <button class="btn btn-success" href="search.php">New advanced Search</button>
		</div>
	</form>


<!--  Results table from Search-->
<!--
Num Hits: <?= mysqli_num_rows($results) ?>
<table border="0" cellspacing="2" cellpadding="4" id="dataTable">
    <thead>
        <tr>
            <th>Name</th>
            <th>Cell Type</th>
            <th>Freezer (not yet)</th>
            <th>Rack</th>
            <th>Position</th>
            <th>Date</th>
            <th>Availability</th>
            <th>Amount</th>
            <th>Comment</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($results)) { ?>
        <tr>
            <td><?= $row['Name'] ?></td>
            <td><?= $row['Cell_type'] ?></td>
            <td>MISSING!</td>
            <td><?= $row['Rack'] ?></td>
            <td><?= $row['Position'] ?></td>
            <td><?= $row['Frozendate'] ?></td>
            <td><?= $row['Availability'] ?></td>
            <td><?= $row['Amount'] ?></td>
            <td><?= $row['Comment'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table> -->


</body>
</html>
