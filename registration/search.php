<?php

include('server.php');

// ADVANCED SEARCH
if (isset($_POST['reg_search'])) {
	//receive all input variables from the serach form
	$samplename = mysqli_real_escape_string($db, $_POST['samplename']); //Cell2
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

	//search in db
	$results = mysqli_query($db, $query)or print mysqli_error($mysqli);

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
			$table .= "</tr>"; }
		  $table .= "</table>";

		}
		$table .= "</ol>";
	} else {
		echo "0 results";
	}
//
// 	// PRINT RESULTS
// 	if ($results->num_rows > 0) {
//   	echo "<table>v<tr><th>Name</th><th>Cell Type<th>Date</tr>";
//   // output data of each row
//   while($row = $results->fetch_assoc()) {
//     echo "<tr>";
// 		echo "<td>".$row["Name"] . 				"</td>";
// 		echo "<td>" . $row["Cell_type"] . "</td>";
// 		echo "<td>" . $row["Rack"] . 			"</td>";
// 		echo "<td>" . $row["Position"] .	"</td>";
// 		echo "<td>" . $row["Frozendate"] . "</td>";
// 		echo "<td>" . $row["Availability"] . "</td>";
// 		echo "<td>" . $row["Amount"] . 		"</td>";
// 		echo "<td>" . $row["Comment"] . 	"</td>";
// 		echo "</tr>"; }
// 	  echo "</table>";
// 	} else {
// 	  echo "0 results";
// 	}
// }

?>
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
         <p>Can't find your cells? I bet, we can!</p>
    </div>
    <form method="post" action="search.php">
			 <?php include('error.php'); ?>
			 <h2>What are you looking for?</h2>
			 <div class="input-group">
				 <label>Sample name:</label>
				 <input type="text" name="samplename" value="<?php echo $samplename; ?>">
			 </div>

			 <div class="input-group">
				 <label>Cell Type:</label>
				 <input type="text" name="celltype" value="<?php echo $celltype; ?>">
			 </div>

			 <div class="input-group">
				 <label>Position:</label>
				 <input type="text" name="position" value="<?php echo $position; ?>">
			 </div>

			 <div class="input-group">
				 <label>Rack:</label>
				 <input type="text" name="rack" value="<?php echo $rack; ?>">
			 </div>

			 <div class="input-group">
				 <label>Quantity of tubes:</label>
				 <input type="number" name="amount" value="<?php echo $amount; ?>">
			 </div>

			 <div class="input-group">
				 <label>Frozen on the: </label>
				 <input type="text" name="frozendate" value="<?php echo $frozendate; ?>">
			 </div>

			 <div class="input-group">
				 <label>Select the availability for your tubes</label>
				 <select name="availability">
					 <option value="empty"></option>
					 <option value="privat">Privat</option>
					 <option value="semiprivat">Semiprivat</option>
					 <option value="public">Public</option>
				 </select>
		 	</div>

			 <div class="input-group">
				 <label>Keyword in Comment:</label>
				 <textarea input type="text" rows="10" cols="50" name="comment" value="<?php echo $comment; ?>"></textarea>
		 	</div>

			<div class="input-group">
				<label for="Storage">Type</label>
				<?php
					$sql = "Select * from Storage";
					$result = mysqli_query($db, $sql);
					echo "<select name='unitid'>";
					while ($row = mysqli_fetch_array($result)) {
						 echo "<option value='" .$row['idStorage']."'> ".$row['Location'] . "</option>";
					}
					echo "</select>";
						?>
			</div>

      <div class="input-group">
   	  	<button type="submit" class="btn" name="reg_search">search</button>
				<?php echo $table ?>
   		</div>

		</div>

		</form>
 </body>
 </html>
