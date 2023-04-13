<?php
    if (isset($_POST["submitCreate"]))
    {   
        require("DBconnect.php");
        $login = $_POST["textLog"];
        $password = $_POST["textPass"];
        $request = "SELECT * FROM logg WHERE login = ? AND password = ?";
        $result = $pdo->prepare($request);
        $result ->execute([$login, $password]);
        if ($row = $result -> fetch())
        {
            session_start();
            $_SESSION['login'] = $row['login'];
            header("Location: hid.php");
        }
        else
        {
            echo "error";
        }
    }


?>