<?php
include('server.php');

?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<?php include('header.html') ?>

<!--  Results table from Search-->

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
</table>

<div class="input-group">
  <button class="btn" href="search.php">New Search</button>
</div>

</body>
</html>
