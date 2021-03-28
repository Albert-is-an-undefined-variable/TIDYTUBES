<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();
$samplename = $celltype = $idfreezer = $rack = $position = $amount = $frozendate = $availability = '';
$errors_registration = array('username' => '', 'email' => '', 'password_1' => '', 'password_2' => '');
// connect to the database
$db = mysqli_connect('localhost', 'albert', '/Puiyuaru1616', 'mydb');



// NEW SEARCH

//if (isset($_POST['reg_search']))
//{
//   $name = $_POST['Name'];
//
//   $query = "SELECT * FROM Sample WHERE Name = '$name' ";
//   $query_run = mysqli_query($db, $query);
//
//   while($row = mysqli_fetch_array($query_run))
//   {
//     echo $row['Name'];
//     echo $row['Cell_type'];
//     echo $row['Frozendate'];
//     echo $row['Position'];
//     echo $row['Rack'];
//     echo $row['Availability'];
//     echo $row['Comment'];
//   }
// };



  //$fields_array = array('Name','Rack');
  //$conditions = array();
  //$query = "SELECT Name FROM Sample";
  //$result = mysqli_query($db, $query);
  //print("HERE <br> HERE <br> HERE <br>HERE <br>HERE <br>HERE <br>");

    //foreach ($fields_array as $field) {
      //if (isset($_POST[$field]) && $_POST[$field] != '') { // commented:
      //  $conditions[] = "$field LIKE '%" . mysqli_real_escape_string($db, $_POST[$field]) ."%'";
      //  //print $field;
      //}
    //};

    //if(count($conditions) > 0) {
    //  $query = $query . " WHERE " . implode(' OR ', $conditions);
    //};
    //print($query);
    //mysqli_query($db, $query) or die(mysqli_error($db));

    //echo "<table border='1'>";
    //while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
      //  echo "<tr>";
      //  foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        //    echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function.
      //  }
      //  echo "</tr>";
    //}
    //echo "</table>";
  //}

  if (isset($_POST['reg_search'])) {
    //print("HERE <br> HERE <br> HERE <br>HERE <br>HERE <br>HERE <br>");

    $fields = array('Name','Rack');
    #print($fields);
    $conditions = array();

   foreach ($fields as $field){
      if(isset($_POST[$field]) && $_POST[$field] != ''){
                  $conditions[] = "$field LIKE '%" . mysqli_real_escape_string($db,$_POST[$field]) . "%'";     }
    }
          $query="SELECT * FROM Sample";
          if(count($conditions) > 0) {
         // append the conditions
         $query .= " WHERE " . implode (' OR ', $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
         #printf("$query.\n");

     }

    $result = mysqli_query($db, $query);
    while($row = mysqli_fetch_array($result))
       {
          print_r("<br><br><br><br><br><br>");
          print_r($row);

       }
     }

if (isset($_POST['reg_storage'])) {
  #print_r("<br><br><br><br><br><br>");
  #printf("INSIDE STORAGE");
  $Location = mysqli_real_escape_string($db, $_POST['Location']);
  print($Location);
  if (empty($Location)) { array_push($errors, "ID storage is required"); }
  if (count($errors) == 0) {
  	$query = "INSERT INTO Storage (Location)
  			  VALUES ('$Location')";
        }
        #print($query);
        mysqli_query($db, $query) or die(mysqli_error($db));

      }



// ----------------------------------------------------------------------------------------//
// ----------------------------------------------------------------------------------------//
//                            PRINT ALL ENTRIES OF A TABLE
// ----------------------------------------------------------------------------------------//
// ----------------------------------------------------------------------------------------//
// LILI : THIS IS CODE THAT WILL PRINT YOU ALL ENTRIES IN THE TABLE "SAMPLE"

  // if (isset($_POST['reg_search'])) {
  //   $sql = "SELECT Name FROM Sample";
  //   $result = mysqli_query($db, $sql);
  //
  //   if (mysqli_num_rows($result) > 0) {
  //     // output data of each row
  //     echo "<table><tr><th>Sample Name</th><th>Add other features here later</th></tr>";
  //     // output data of each row
  //     while($row = $result->fetch_assoc()) {
  //       echo "<tr><td>".$row["Name"]."</td><td>"."This is lili's dummy"."</td></tr>";
  //     }
  //     echo "</table>";
  //
  //   } else {
  //     echo "0 results";
  //   }
  //   // empty results
  //   $result = $free_result();

?>
