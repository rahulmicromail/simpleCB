<!DOCTYPE html>
<html>
 
<head>
    <title>Insert data into Chatbot</title>
</head>
 
<body>
    <center>
    <p style="text-align:center;">
	<a href="admin.php" id="Admin" > Go Back </a></p>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("nl-srv-web324.main-hosting.eu", "u671633553_chatbot", "Chatbot@db69", "u671633553_chatbot");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $queries =  $_REQUEST['queries'];
        $replies = $_REQUEST['replies'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO bot VALUES ( '','$queries',
            '$replies')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Data stored in a Chatbot database successfully.";
 
            echo nl2br("\nquery: $queries\n Reply: $replies\n ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
        
    </center>
</body>
 
</html>