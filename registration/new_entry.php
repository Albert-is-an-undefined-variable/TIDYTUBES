<?php

include('server.php');

// NEW ENTRY
if (isset($_POST['reg_entry'])) {
  // receive all input values from the entry form
  $samplename = mysqli_real_escape_string($db, $_POST['samplename']);
  $celltype = mysqli_real_escape_string($db, $_POST['celltype']);
  $location = mysqli_real_escape_string($db, $_POST['Location']);
  $rack = mysqli_real_escape_string($db, $_POST['rack']);
  $position = mysqli_real_escape_string($db, $_POST['position']);
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $frozendate = mysqli_real_escape_string($db, $_POST['frozendate']);
  $availability = mysqli_real_escape_string($db, $_POST['availability']);
  $comment = mysqli_real_escape_string($db, $_POST['comment']);

  // entry validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($samplename)) { array_push($errors, "Sample name is required"); }
  if (empty($celltype)) { array_push($errors, "Cell type is required"); }
  // if (empty($idfreezer)) { array_push($errors, "Freezer is required"); }
  if (empty($rack)) { array_push($errors, "Rack is required"); }
  if (empty($position)) { array_push($errors, "Position is required"); }
  // if (empty($amount)) { array_push($errors, "Amount is required"); }
  if (empty($frozendate)) { array_push($errors, "Frozen date is required"); }

  // Finally, add the new entry in the sample table
  if (count($errors) == 0) {
  	$query = "INSERT INTO Sample (Name, Cell_type, Rack, Position, Frozendate, Amount, Availability, Comment, idUser)
  			  VALUES('$samplename', '$celltype', '$rack', '$position', '$frozendate', '$amount', '$availability', '$comment','".$_SESSION["userdata"]["idUser"]."')";
    print($query);
    mysqli_query($db, $query) or die(mysqli_error($db));

  }
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
		          <h1>New Entry</h1>
		          <p>Add your tubes to the system, before you forget where you put them!</p>
		      </div>

					<div class="container">
						<form method="post" action="new_entry.php">
							<?php include('error.php'); ?>
							<h2>Enter the details of your sample</h2>
							<div class="input-group">
								<label>Sample name:</label>
								<input type="text" name="samplename" value="<?php echo $samplename; ?>">
							</div>

							<div class="input-group">
								<label>Cell Type:</label>
								<input type="text" name="celltype" value="<?php echo $celltype; ?>">
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

							<button type="button" class="btn" data-toggle="modal" data-target="#myModal">Add Storage</button>
					      <div id="myModal" class="modal fade" role="dialog">
					            <div class="modal-dialog">
					              <!-- Modal content-->
					              <div class="modal-content">
					                <div class="modal-header">
					                  <button type="button" class="close" data-dismiss="modal">&times;</button>
					                  <h5 class="modal-title">Add new Storage</h5>
					                </div>
					                <div class="modal-body">
					                  <input type="text" name="Location" value="<?php echo $location; ?>">
					                  <button type="submit" class="btn btn-success" name="reg_storage">Add</button>
					                </div>
					              </div>
					            </div>
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
								<option value="privat">Privat</option>
								<option value="semiprivat">Semiprivat</option>
								<option value="public">Public</option>
							</select>
  				</div>

					<div class="input-group">
  	  			<label>Add a note:</label>
						<textarea input type="text" rows="10" cols="50" name="comment" value="<?php echo $comment; ?>">Protocol, genetically modified, project XY ...</textarea>
  			</div>

    		<div class="input-group">
    	  	<button type="submit" class="btn btn-success" name="reg_entry">Add entry</button>
    		</div>

  		</form>
  	</div>
		<div class="container">
			<h3>How it works:</h3>
				<p>Use this form to add the tubes you froze. You can choose, how others see your entries in the search field. <br>
				<strong>Private:</strong> Just you can access the entry<br>
				<strong>Semi-privat:</strong> Others have to ask permission<br>
				<strong>Public:</strong> Everyone may access the entry</p>
		</div>

        <?php include('footer.html') ?>

  </div>

</body>
</html>
