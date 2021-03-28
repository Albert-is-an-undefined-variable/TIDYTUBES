<?php include('server.php') ?>

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
     <form action="search.php" method="post">
       <div class="input-group">
         <label>Sample name: </label>
         <input type="text" name="Name" value="">
       </div>
       <div class="input-group">
         <label>Ra: </label>
				 <input type="text" name="Rack" value="">
       </div>
       <div class="input-group">
   	  	<button type="submit" class="btn" name="reg_search">search</button>
   		</div>

</form>
 </body>
 </html>
