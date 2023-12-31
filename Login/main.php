<?php
// Your PHP logic or authentication code can go here

// Assuming the user is authenticated successfully, display the welcome message
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>WELCOME USER</h1>';

// Redirect to the index.html page after a few seconds
echo '<p>You will be redirected to the index page shortly...</p>';
echo '<script>
    setTimeout(function() {
        window.location.href = "http://localhost/edusite-master/index.html";
    }, 3000); // Redirect after 3 seconds
</script>';

echo '</body>
</html>';
?>
