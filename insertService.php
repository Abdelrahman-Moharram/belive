<?php

    session_start();
    require 'db_conn.php';
    if($_SESSION['role'] == 0)
    {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Services</title>
<style>
  body {
            margin: 0;
            padding: 0;
            background-image: url(images/449916.jpg);
             background-repeat: no-repeat;
              background-attachment: fixed;
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
            height: 100%;
        }

.container{
            align-content: center;
            width: 900px;
            height: 400px;
            background: #333333;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            top: 1px;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            margin-top: 320px;
            text-align: center;
}



  </style>
</head>
<body style="background-image: url(images/449916.jpg);">
  <div class="container">
<h3>ADD Data for Service </h3>

    
<form method="POST" action="insert.php">

  <input class="input" type="text" name="name" value="" placeholder="Enter Name" Required>
  <input class="input" type="text" name="capacity" value="" placeholder="Enter capacity" Required>
  <input class="input" type="text" name="description" value="" placeholder="Enter description" Required>
  <select class="input" name="type"   Required>
    <option value="data">Data</option>
    <option value="phone">Phone</option>
  </select>
  <br>
  
  <br>
  <input type="submit" name="add" value="Add">
  
</form>

</div>

</body>
</html>