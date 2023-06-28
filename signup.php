<?php

include ("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Content">
    <meta name="keywords" content="Keywords">
    <meta name="author" content="Mounir Jouhri">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<title>Signub</title>

<body>
<style type="text/css">
    #text{
        height: 10px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
    }

    #button{
        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }

    #box{
        background-color: #aaaaaa;
        margin: auto;
        width: 300px;
        padding: 20px;
    }
</style>

<div id="box">

    <form action="/signup" method="post"
    <div style="font-size: 20px;margin: 10px; color: white">Singup</div>

    <input id="text" type="text" name="user_name"><br><br>
    <input id="text" type="password" name="password"><br><br>

    <input id="button" type="submit" value="Signup"><br><br>

    <a href="login.php">Click to Login</a><br><br>
    </form>
</div>

</body>

