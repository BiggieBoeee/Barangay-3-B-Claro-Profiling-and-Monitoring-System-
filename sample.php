<?php

// connection
$connection = mysqli_connect('localhost','root','','barangaysystem');
//select database
mysqli_select_db($connection,'barangaysystem');

//SELECT query
$sql = "SELECT * FROM tblresident";

//execute the query
$records = mysqli_query($connection,$sql);
?>

<table><tr>
  <th> Last Name: </th>
  <th> First Name: </th>
  <th> Middle Name: </th>
  
</tr>

<?php

while ($row = mysqli_fetch_array($records)) 
{
  echo "<tr><form action=update.php method=post>";
  echo "<td><input type=text name=last_name  value='".$row['last_name']."'></td>";
  echo "<td><input type=text name=first_name value='".$row['first_name']."'></td>";
  echo "<td><input type=text name=middle_name value='".$row['middle_name']."'></td>";
  echo "<td><input type=hidden name=resident_ID value'".$row['resident_ID']."'>";
  echo "<td><input type=submit>";
  echo "</form></tr>:";
}


?>
