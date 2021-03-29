<?php
include('server.php');
?>

<!-- COMMENT LILI: 		This page only contains the search form.
											The php script with the sql search is in search_res
											where the reuslts are displayed 											-->

<!DOCTYPE html>
<html>
<head>
	<title>Advanced Search</title>

</head>
<body>
	<?php include('header.html') ?>

  <div class="hero">
    <div class="jumbotron text-center" style="margin-bottom: 0px;">
<<<<<<< HEAD
         <h1>Advanced Search <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
	   <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
	 </svg></h1>
=======
         <h1>Advanced Search</h1>
>>>>>>> ff05ecd91cf393d8e1c986ae9eb43eaeca013eb5
         <p>Can't find your cells? I bet, we can!</p>
    </div>

  	<form method="post" action="search_res.php">
			 <?php include('error.php'); ?>
			 <div class="container">
				 <h2>Enter the Details of your Search</h2>

<<<<<<< HEAD
				 <div class="row">
				   <div class="col-sm-3 d-sm-flex align-items-center">
					 <label class="m-sm-0">Tube name</label>
					 <input
					   type="text"
					   name="samplename"
					   class="form-control ml-sm-2"
					   placeholder="E.coli"
					   value="<?php echo $samplename; ?>"
					 >
				 </div>
				 <div class="col-sm-3 d-sm-flex align-items-center">
				   <label class="m-sm-0">Cell type</label>
				   <input
					 type="text"
					 name="celltype"
					 class="form-control ml-sm-2"
					 placeholder="MDCK"
					 value="<?php echo $celltype; ?>"
					 >
				 </div>

				 </div>
				 <div class="col-sm-3 d-sm-flex align-items-center">
					 <label class="m-sm-0">Owner</label>
					 <select class="custom-select"
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
				 placeholder="rack 9 - 7A "
				 value="<?php echo $position; ?>"
				 >
			 </div>

			 <div class="col-sm-3 d-sm-flex align-items-center">
			   <label class="m-sm-0">Rack</label>
			   <input
				 type="text"
				 name="celltype"
				 class="form-control ml-sm-2"
				 placeholder="MDCK"
				 value="<?php echo $celltype; ?>"
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


			</div>




				 <div class="input-group">
					 <label>Rack:</label>
					 <input type="text" name="rack" value="<?php echo $rack; ?>">
				 </div>

				 <div class="input-group">
					 <label>Frozen on the: </label>
					 <input type="text" name="frozendate" value="<?php echo $frozendate; ?>">
				 </div>

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
					 <label for="idStorage">Storage:</label>
					 <?php
						 $sql = "Select * from Storage";
						 $result = mysqli_query($db, $sql);

						 echo "<select name='idStorage'>
						 <option value=''></option>";

						 while ($row = mysqli_fetch_array($result)) {
								echo "<option value='" .$row['idStorage']."'> ".$row['Storagename'] . "</option>";
						 }
						 echo "</select>";
							 ?>
				 </div><<<<<<< joui_branch
				 

				 <div class="input-group">
					 <label>Position:</label>
					 <input type="text" name="position" value="<?php echo $position; ?>">
				 </div>

				 <div class="input-group">
					 <label>Rack:</label>
					 <input type="text" name="rack" value="<?php echo $rack; ?>">
				 </div>

				 <div class="input-group">
					 <label>Frozen on the: </label>
					 <input type="text" name="frozendate" value="<?php echo $frozendate; ?>">
				 </div>

>>>>>>> ff05ecd91cf393d8e1c986ae9eb43eaeca013eb5
				 <div class="input-group">
					 <label>Select the availability of the tubes</label>
					 <select name="availability">
						 <option value="empty"></option>
						 <option value="privat">Privat</option>
						 <option value="semiprivat">Semiprivat</option>
						 <option value="public">Public</option>
					 </select>
			 	</div>

				<div class="input-group">
					<label>Quantity of tubes:</label>
					<input type="number" name="amount" value="<?php echo $amount; ?>">
				</div>

				 <div class="input-group">
					 <label>Keyword in Comment:</label>
					 <textarea input type="text" rows="10" cols="50" name="comment" value="<?php echo $comment; ?>"></textarea>
			 	</div>

	      <div class="input-group">
<<<<<<< HEAD
	   	  	<button type="submit" class="btn btn-success" name="reg_search">Search
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
			  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
			</svg></button>
=======
	   	  	<button type="submit" class="btn btn-success" name="reg_search">Search</button>
>>>>>>> ff05ecd91cf393d8e1c986ae9eb43eaeca013eb5
	   		</div>
			</div>
		</form>
	</div>
		<?php include('footer.html') ?>

 </body>
 </html>


 <div class="input-group">
	 <label>Select the availability for your tubes</label>
	 <select name="availability">
		 <option value="privat">Privat</option>
		 <option value="semiprivat">Semiprivat</option>
		 <option value="public">Public</option>
	 </select>
 </div>
