<?php
include("../Model/head.php");
 ?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>Name</th>
    <th>Contact</th>
    <th>Address</th>
    <th>Action</th>

  </tr>
  <tr>
    <td>Ramisa Anjum Oishi</td>
    <td>+01740-986584</td>
    <td>Bashabo</td>
    <td><button type="button" name="button">Edit</button>    <button type="button" name="button">Delete</button></td>


  </tr>
  <tr>
    <td>Rakib Raihan</td>
    <td>+01740-326584</td>
    <td>Gazipur</td>
    <td><button type="button" name="button">Edit</button>    <button type="button" name="button">Delete</button></td>
  </tr>
  <tr>
    <td>Omi Rozario</td>
    <td>+01631-773566</td>
    <td>Savar,Dhaka</td>
    <td><button type="button" name="button">Edit</button>    <button type="button" name="button">Delete</button></td>
  </tr>
  
  
</table>

</body>
</html>
<?php
include("../Model/foot.php");
 ?>
