<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "betecdb"; 
      
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        // collect value of input field
        
        $Name = $_REQUEST['Name'];
        $Price = $_REQUEST['Price'];
        $CatID = $_REQUEST['CatID'];
        
        
        $sqlquery = "INSERT INTO products (PName, PPrice, Cat ID) VALUES ('$Name','$Price' ,'$CatID')";
        
        if ($conn->query($sqlquery) == TRUE) {
            echo "Product inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }  

   }

?>