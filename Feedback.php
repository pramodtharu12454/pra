<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Feedback Form</title>
<link rel="stylesheet" href="styles.css">
<
  
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
 
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
 
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

h2 {
    text-align: center;
    margin-top: 20px;
    color: #333;
}

form {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

</style>
<body>

<h2>Feedback Form</h2>
<form action="submit_feedback.php" method="post">

<label for="name">Name:</label>
<input type="text" id="name" name="name" required><br><br>

<label for="email">Email:</label>
<input type="email" id="email" name="email" required><br><br>


<label for="feedback">Feedback:</label><br>
<textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea><br><br>
<input type="submit" value="Submit">

</form>

<footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2024 <a class="grey-text text-lighten-4" href="#" target="_blank">Sujal Pramod</a> All rights reserved.</span>
        
        </div>
    </div>
  </footer>

<script>
    document.getElementById('feedbackForm').addEventListener('submit', function(event) {
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var feedback = document.getElementById('feedback').value.trim();

    if (name === '' || email === '' || feedback === '') {
        event.preventDefault();
        alert('Please fill in all fields.');
    }
});

</script>

</body>
</html>
