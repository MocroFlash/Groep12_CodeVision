<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "skyhigh";

try {
    $dbh = new PDO("mysql:host=$dbhost;dbname=skyhigh",$dbuser , $dbpass);
    /*** echo a message saying we have connected ***/
    $params = explode("?", strtolower($_SERVER['REQUEST_URI']))[0];
    $uri = explode('/', $params);
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($uri[1] === 'signup') {
//            die('signup');
            $stmt = $dbh->prepare("INSERT INTO users(user_name, password) VALUES (:user_name, :password);");
            $stmt->bindValue(':user_name', $_REQUEST['user_name']);
            $stmt->bindValue(':password', $_REQUEST['password']);

            if ($stmt->execute()) {
                header("Location: /login.php");
                die();
            } else {
                echo "user failed to save";
                die();
            }
        }
        if ($uri[1] === 'login') {
//            die('login');
            $stmt = $dbh->prepare('SELECT * FROM users WHERE user_name = :user_name ');
            $stmt->bindParam(':user_name', $_POST['user_name']);

            if ($stmt->execute()) {

                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $rows = $stmt->fetch();

                if ($rows) {
                    $_SESSION['user_id'] = $rows['id'];
                    $_SESSION['user_name'] = $rows['user_name'];

                    header("Location: /index.php");
                    die();
                }
            }else {
                echo("failed.");
            }

        }
    }
    if ($uri[1] === 'logout')
    {
        session_destroy();
        header("Location: /index.php");
    };


}
catch(PDOException $e)
{
    echo $e->getMessage();
}

?>
