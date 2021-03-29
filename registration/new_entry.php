<?php

include('server.php');

// NEW ENTRY
if (isset($_POST['reg_entry'])) {
  // receive all input values from the entry form
  $samplename = mysqli_real_escape_string($db, $_POST['samplename']);
  $celltype = mysqli_real_escape_string($db, $_POST['celltype']);
<<<<<<< HEAD
  // $idfreezer = mysqli_real_escape_string($db, $_POST['idfreezer']);
=======
  $storagename = mysqli_real_escape_string($db, $_POST['Storagename']);
  $rack = mysqli_real_escape_string($db, $_POST['rack']);
>>>>>>> ff05ecd91cf393d8e1c986ae9eb43eaeca013eb5
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
  if (empty($position)) { array_push($errors, "Position is required"); }
  // if (empty($amount)) { array_push($errors, "Amount is required"); }
  if (empty($frozendate)) { array_push($errors, "Frozen date is required"); }

  // Finally, add the new entry in the sample table
  if (count($errors) == 0) {
<<<<<<< HEAD
  	$query = "INSERT INTO Sample (Name, Cell_type, Position, Frozendate, Availability, Comment, idUser)
  			  VALUES('$samplename', '$celltype', '$position', '$frozendate', '$availability', '$comment','".$_SESSION["userdata"]["idUser"]."')";
=======
  	$query = "INSERT INTO Sample (Name, Cell_type, Rack, Position, Frozendate, Amount, Availability, Comment, idUser)
  			  VALUES('$samplename', '$celltype', '$rack', '$position', '$frozendate', '$amount', '$availability', '$comment','".$_SESSION["userdata"]["idUser"]."')";
>>>>>>> ff05ecd91cf393d8e1c986ae9eb43eaeca013eb5
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
		          <h1>New Entry <img style="width:75px;"  src="img/eppp.png" alt=""> </h1>
		          <p>Add your tubes to the system, before you forget where you put them!</p>
		      </div>

					<div class="container">
						<form method="post" action="new_entry.php">
							<?php include('error.php'); ?>
							<h2>Enter the details of your sample</h2>
<<<<<<< HEAD
                                    <div class="row">
                                      <div class="col-sm-3 d-sm-flex align-items-center">
                                        <label class="m-sm-0">Tube name</label>
                                        <input
                                          type="text"
                                          name="samplename"
                                          class="form-control ml-sm-2"
                                          placeholder="E.coli-LB-AMX50"
                                          value="<?php echo $samplename; ?>"
                                        >
                                    </div>
                                    <div class="col-sm-3 d-sm-flex align-items-center">
                                      <label class="m-sm-0">Cell type</label>
                                      <input
                                        type="text"
                                        name="celltype"
                                        class="form-control ml-sm-2"
                                        placeholder="(Optional)"
                                        value="<?php echo $celltype; ?>"
                                        >
                                    </div>
                                    <div class="col-sm-1 d-sm-flex align-items-center">
                                      <label class="m-sm-0">Amount</label>
                                      <input
                                        type="number"
                                        name="amount"
                                        class="form-control ml-sm-2"
                                        placeholder="1"
                                        value="<?php echo $amount; ?>"
                                        >
                                    </div>
                                    <div class="col-sm-3 d-sm-flex align-items-center">
                                        <label class="m-sm-0">For who are these tubes?</label>
                                        <select name="availability" class="custom-select"
                                            <option selected>Private</option>
                                            <option value="1">Private</option>
                                            <option value="2">Ask me first</option>
                                            <option value="3">Public</option>
                                          </select>
                                    </div>
                                </div>

                                <div class="row">
                                <div class="col-sm-3 d-sm-flex align-items-center">
                                  <label class="m-sm-0">Position</label>
                                  <input
                                    type="text"
                                    name="position"
                                    class="form-control ml-sm-2"
                                    placeholder="rack 9, 7A // left side // first drawer"
                                    value="<?php echo $position; ?>"
                                    >
                                </div>

                                <div class="col-sm-3 d-sm-flex align-items-center">
                                  <label class="m-sm-0">Date</label>
                                  <input
                                    type="text"
                                    name="frozendate"
                                    class="form-control ml-sm-2"
                                    placeholder="dd/mm/yyyy"
                                    value="<?php echo $frozendate;?>"
                                    >
                                </div>

                                <div class="input-group">
                                    <br>

                                   <label for="Storage">Select Storage / Freezer</label>
                                   <?php
                                       $sql = "Select * from Storage";
                                       $result = mysqli_query($db, $sql);
                                       echo "<select name='unitid'>";
                                       echo "<option value='empty'></option>";
                                       while ($row = mysqli_fetch_array($result)) {
                                            echo "<option value='" .$row['idStorage']."'> ".$row['Storagename']. "</option>"; #   We could add this here to print not just Storagename but also location: $row['Location'] .
                                       }
                                       echo "</select>";
                                           ?>
                               </div>

                                <div class="px-sm-2 col-sm-7 d-sm-flex align-items-center mt-2 mt-sm-0">
                                  <label for="exampleFormControlTextarea1">Comments</label>
                                  <textarea class="form-control"
                                  rows="10"
                                  name="comment"
                                  value="<?php echo $comment; ?>"
                                  placeholder="Use that one protocol that works better, place it in the fridge at the end of the corridor, position right, IMPORTANT I NEED THIS TO BE DONE BY 15:30"
                                  ></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="input-group">
                            <button type="submit" class="btn btn-success " name="reg_entry">Add entry
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
                              <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                              <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                            </svg></button>
                            <br>
                            <br>
                            <button style="position: relative;"type="button" class="btn btn-warning " data-toggle="modal" data-target="#myModal">Add Storage
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                              <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            </svg></button>
					      <div id="myModal" class="modal fade" role="dialog">
					            <div class="modal-dialog">



=======
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
                     echo "<option value='" .$row['idStorage']."'> ".$row['Storagename'] . "</option>";
                  }
                  echo "</select>";
           					?>
        			</div>

							<button type="button" class="btn" data-toggle="modal" data-target="#myModal">Add Storage</button>
					      <div id="myModal" class="modal fade" role="dialog">
					            <div class="modal-dialog">
>>>>>>> ff05ecd91cf393d8e1c986ae9eb43eaeca013eb5
					              <!-- Modal content-->
					              <div class="modal-content">
					                <div class="modal-header">
					                  <button type="button" class="close" data-dismiss="modal">&times;</button>
<<<<<<< HEAD
					                  <h5 class="modal-title">Add storage</h5>
					                </div>
					                <div class="modal-body">
					                  <input type="text" name="Location" value="<?php echo $Location; ?>">
					                  <button type="submit" class="btn" name="reg_storage">Add</button>
					                </div>
					              </div>
					            </div>
                            </div>
					          </div>
                          </div>
=======
					                  <h5 class="modal-title">Add new Storage</h5>
					                </div>
					                <div class="modal-body">
					                  <input type="text" name="Storagename" value="<?php echo $storagename; ?>">
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
>>>>>>> ff05ecd91cf393d8e1c986ae9eb43eaeca013eb5

  		</form>
  	</div>
		<div class="container">
			<h3>How it works:</h3>
				<p>Use this form to add the tubes you froze. You can choose, how others see your entries in the search field. <br>
				<strong>Private:</strong> Just you can access the entry<br>
				<strong>Ask me first:</strong> Others have to ask permission<br>
				<strong>Public:</strong> Everyone may access the entry</p>
                <p><button type="submit" class="btn btn-success " name="reg_entry" disabled>Add entry
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
                  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                </svg></button> : adds a new tube to an existing freezer
                <p><button type="button" class="btn btn-warning " data-toggle="modal" data-target="#myModal" disabled>Add Storage</button> : Creates a new space to hold tubes or whatever you like</p>

		</div>

        <?php include('footer.html') ?>

  </div>

</body>
</html>
