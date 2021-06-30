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
    <th>Report To</th>
    <th>Numbers</th>
    <th>Action</th>

  </tr>
  <tr>
    <td>Admin</td>
    <td>Number of food packing: <input type="number" name="" value=""></td>
    <td><button type="button" name="button">Report</button>


  </tr>
  <tr>
    <td>Admin</td>
    <td>Number of distributed packet: <input type="number" name="" value=""></td>
    <td><button type="button" name="button">Report</button>
  </tr>
  <tr>
    <td>Admin</td>
    <td>The distributed areas: <input type="text" name="" value=""></td>
    <td><button type="button" name="button">Report</button>
  </tr>
</table>

</body>
</html>
<?php
include("../Model/foot.php");
 ?>
