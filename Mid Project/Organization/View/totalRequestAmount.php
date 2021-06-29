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
    <th>ID</th>
    <th>Date</th>
    <th>Amount</th>


  </tr>
  <tr>
    <td>101</td>
    <td>12 January 2020</td>
    <td>900</td>


  </tr>
  <tr>
    <td>102</td>
    <td>20 January 2020</td>
    <td>1000</td>
    </tr>
  <tr>
    <td>103</td>
    <td>12 February 2020</td>
    <td>1500</td>
  </tr>
  <tr>
    <td>103</td>
    <td>19 February 2020</td>
    <td>1500</td>
  </tr>
  <tr>
    <td>103</td>
    <td>28 February 2020</td>
    <td>1200</td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td>Total = 6100</td>
  </tr>
</table>

</body>
</html>
<?php
include("../Model/foot.php");
 ?>
