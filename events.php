<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: white;
      margin: 0;
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #ddd;
    }
.apply-link {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
    }

    .apply-link:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_error($conn)) {
  die("Connection failed: " . mysqli_error($conn));
}
$sql = "SELECT * FROM event";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  echo "<table>";
  echo "<tr>
    <th>Name</th>
    <th>Date</th>
    <th>Slot</th>
    <th>Location</th>
    </tr>";
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>
    <td>".$row["Name"]."</td>
    <td>".$row["Date"]."</td>
    <td>".$row["Slot"]."</td>
    <td>".$row["Location"]."</td>
    </tr>";
  }
  echo "</table>";
} else {
  echo "No record";
}
?>
<a href="regii.php" class=apply-link>REGISTER FOR THE EVENT</a>
</body>
</html>