<!DOCTYPE html>
<html>
<head>
    <title>Feedback Data</title>
   
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
 
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
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
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>Feedback Data</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Feedback</th>
            <th>Created At</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "food";

        $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM Feedback";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
     
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"]. "</td>";
                echo "<td>" . $row["email"]. "</td>";
                echo "<td>" . $row["feedback"]. "</td>";
                echo "<td>" . $row["created_at"]. "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>";
        }

        $conn->close();
        ?>
    </table>

  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2024 <a class="grey-text text-lighten-4" href="#" target="_blank">Sujal Pramod</a> All rights reserved.</span>
        
        </div>
    </div>
  </footer>

</body>
</html>
