<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "your_base";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        
        if (!$conn) {
            die("Error with base: " . mysqli_connect_error());
        }

        
        $username1 = $_POST["username1"];
        $password1 = $_POST["password1"];
        

        
        $sql = "INSERT INTO table_one (username1, password1) VALUES ('$username1', '$password1')";
        if (mysqli_query($conn, $sql)) {
            echo "Connection is succed.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        
        mysqli_close($conn);
    }
?>