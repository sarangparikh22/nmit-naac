<?php
    session_start();

    if(isset($_SESSION['username'])) {
    //echo $_SESSION['username']."-".$_SESSION['role'];
    //header('Location: user.php');
  } else {
       header('Location: ../index.php');
      // die();
  }

  include("../config.php"); //config.php

  $sql = "SELECT * FROM `1.1.2`";
$result = mysqli_query($dbCon, $sql);
$tableData = "";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $pc = $row['Programme Code'];
        $pn = $row['Programme name'];
        $notd = $row['Name of the Department'];
        $yoi = $row['Year of Introduction'];
        $rev = $row['Revision Last 5 Years'];
        $yor = $row['Year of revision'];
        $perSy = $row['Percentage of Syllabus content added or replaced'];
        $lord = $row['Link of the relevant document'];
        $submitted_by = $row['submitted-by'];
        if($submitted_by == $_SESSION['dept'] || $_SESSION['dept'] == "admin"){
        $tableData = $tableData . "<tr>
        <td>$pc</td>
        <td>$pn</td>
        <td>$notd</td>
        <td>$yoi</td>
        <td>$rev</td>
        <td>$yor</td>
        <td>$perSy</td>
        <td>$lord</td>
        <td>$submitted_by</td>
        <td><button class='btn btn-primary' onClick='editData()'>Edit</td>
      </tr>";
        }
    }
} else {
    echo "0 results";
}
echo '<table class="table table-hover table-responsive">
<thead>
  <tr>
    <th scope="col">Programme Code</th>
    <th scope="col">Programme name</th>
    <th scope="col">Name of the Department</th>
    <th scope="col">Year of Introduction</th>
    <th scope="col">If revision has been carried out in the syllabus during last 5</th>
    <th scope="col">Year of Revision</th>
    <th scope="col">Percentage of Syllabus content added or replaced</th>
    <th scope="col">Link of the relevant document</th>
    <th scope="col">Submitted By</th>
    <th scope="col">Edit</th>
     
  </tr>
</thead>
<tbody>' . $tableData .'
</tbody>
</table>';

mysqli_close($dbCon);
?>