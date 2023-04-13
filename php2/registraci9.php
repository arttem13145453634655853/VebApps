<?php
    
    if (isset($_POST["submitCreate"]))
    {   
        require("DBconnect.php");
        
        $login = $_POST["textLog"];
        $password = $_POST["textPass"];

        $request = "INSERT INTO logg(login, password) VALUES (?, ?)";

        $result = $pdo->prepare($request);
        try
        {

            $result ->execute([$login, $password]);

            if ($result)
            {
                header("Location: aut.php");
            }
            else
            {
                echo "Введите значения";
            }
        }
        catch(Exception $e)
        {
            echo 'Такой логин уже существует';
        }
}
?>