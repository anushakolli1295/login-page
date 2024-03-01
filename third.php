<html>
<head>
    
    <title>Event Management</title>
     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightgreen;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: white;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"],
        textarea {
            width: calc(100% - 12px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
        <h1 align="center">EVENTS</h1>
        <form action="" method="POST">
           
    <form action="" method="post">
  <label for="event_name">Name:</label>
  <input type="text" id="event_name" name="event_name" required><br><br>
  
  <label for="event_description">Description:</label>
  <textarea id="event_description" name="event_description" required></textarea><br><br>
  
  <label for="event_date">Date:</label>
  <input type="date" id="event_date" name="event_date" required><br><br>
  
  <label for="event_location">Location:</label>
  <input type="text" id="event_location" name="event_location" required><br><br>
  
  <input type="submit" value="Add Event">
</form>
        </form>
    
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_error($conn))
{
    die("Connection failed".mysqli_error($conn));
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$EventName = $_POST['event_name'];
$EventDescription = $_POST['event_description'];
$EventDate = $_POST['event_date'];
$EventLocation = $_POST['event_location'];

$sql="INSERT INTO re(name,description,date,location)VALUES('$EventName','$EventDescription','$EventDate','$EventLocation')";
if(mysqli_query($conn,$sql)==TRUE){
echo "<script> alert('Event added successfully!');window.location.href='button.php';</script>";
}
else {
  echo "Error: " . $sql . "<br>" . $mysqli_error;
}
}
?>

