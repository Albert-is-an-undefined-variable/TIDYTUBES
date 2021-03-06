<?php

include('server.php');

// NEW ENTRY
if (isset($_POST['reg_request'])) {
  // receive all input values from the entry form
  $samplename = mysqli_real_escape_string($db, $_POST['samplename']);
  $celltype = mysqli_real_escape_string($db, $_POST['celltype']);
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $comment = mysqli_real_escape_string($db, $_POST['comment']);

  // entry validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($samplename)) { array_push($errors, "Sample name is required"); }
  if (empty($celltype)) { array_push($errors, "Cell type is required"); }
  // if (empty($idfreezer)) { array_push($errors, "Freezer is required"); }
  #if (empty($Storage)) { array_push($errors, "Storage is required"); }
  #if (empty($position)) { array_push($errors, "Position is required"); }
  if (empty($amount)) { array_push($errors, "Amount is required"); }

  // Finally, add the new entry in the sample table
  if (count($errors) == 0) {
  	$query = "INSERT INTO Request (Name, Cell_type, Amount, Comment)
  			  VALUES('$samplename', '$celltype', '$amount', '$comment')";
    print($query);
    mysqli_query($db, $query) or die(mysqli_error($db));

  }
}
if (isset($_POST['see_request'])) {
  $query = "SELECT * FROM Request";
  $result = mysqli_query($db,$query);
  echo "<table>";
  while ($row = mysqli_fetch_array($result)){
    echo"<tr>>td>".$row['Name']."</td><td>".$row['Comment']. "</td></tr>";
  }
  echo"</table>";
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
		          <h1>New Request</h1>
		          <p>Add a new request and the technicians will fulfill it!</p>
		      </div>
					<div class="container">
						<form method="post" action="request.php">
							<?php include('error.php'); ?>
							<h2>Enter the details of your sample</h2>
                            <div class="row">
                              <div class="col-sm-3 d-sm-flex align-items-center">
                                <label class="m-sm-0">Tube name</label>
                                <input
                                  type="text"
                                  name="samplename"
                                  id="title"
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
                                id="cell_type"
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
                                id="amount"
                                class="form-control ml-sm-2"
                                placeholder="1"
                                value="<?php echo $amount; ?>"
                                >
                            </div>
                            <div class="col-sm-3 d-sm-flex align-items-center">
                                <label class="m-sm-0">For who are these tubes?</label>
                                <select class="custom-select" id="owner">
                                    <option selected>Private</option>
                                    <option value="1">Private</option>
                                    <option value="2">Ask me first</option>
                                    <option value="3">Public</option>
                                  </select>
                            </div>
                        </div>
                    <div class="row">
                        <div class="px-sm-2 col-sm-7 d-sm-flex align-items-center mt-2 mt-sm-0">
                          <label for="exampleFormControlTextarea1">Comments</label>
                          <textarea class="form-control"
                          id="description"
                          rows="10"
                          name="comment"
                          value="<?php echo $comment; ?>"
                          placeholder="Use that one protocol that works better, place it in the fridge at the end of the corridor, position right, IMPORTANT I NEED THIS TO BE DONE BY 15:30"
                          ></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-1 d-sm-flex justify-content-end mt-2 mt-sm-0">
                      <button name="reg_request" type="button" class="btn btn-success btn-block" id="add">
                        Add +
                      </button>
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
                <div class="mt-5">
                  <table class="table table-striped" id="table">
                    <thead>
                      <tr>
                        <th scope="col">Tube name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Amount</th>
                        <th scope="col">This tube will be</th>
                        <th scope="col">
                          <div class="d-flex justify-content-center">
                            Completed
                          </div>
                        </th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Content generated with JS -->
                    </tbody>
                  </table>
                </div>

        <?php include('footer.html') ?>
        <script src="index.js" type="module"></script>
  </div>

</body>
</html>
