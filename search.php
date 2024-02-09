<?php
    $servername = "purebeauty-server.mysql.database.azure.com";
    $username = "qrgmzwjmgb";
    $password = "438X8VRAXI5OV7X6$";
    $dbname = "purebeauty-database"; 
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
        
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        // collect value of input field
        
        $searchWord = $_REQUEST['searchWord'];
    
        $sqlquery = "select * from products where PName= '$searchWord'";
    
        $result = $conn->query($sqlquery);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["PID"]. " - Name: " . $row["PName"]. " , Price: " . $row["PPrice"]. "<br>";
        }
        } else {
            echo "0 results";
        }
        $conn->close();
   
    }
?>
