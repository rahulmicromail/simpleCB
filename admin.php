<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Chatbot Store Data</title>
   </head>
   <body>
      <center>
      <p style="text-align:center;">
	<a href="bot.php" id="Admin" > Go Home</a></p>
         <h1>Storing data into Chatbot Database</h1>
         <form action="insert.php" method="post">
             
<p>
               <label for="queries">Queries</label>
               <input type="text" name="queries" id="queries">
            </p>
 
             
<p>
               <label for="replies">Replies:</label>
               <input type="text" name="replies" id="replies">
            </p>
 
    
 
            <input type="submit" value="Submit">
         </form style= "padding-bottom: 20px;">
         <?php
         $hostName = "nl-srv-web324.main-hosting.eu";
$username = "u671633553_chatbot";
$password = "Chatbot@db69";
$databaseName = "u671633553_chatbot";
$conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {

$query = "SELECT id, queries, replies FROM bot";
$result = $conn->query($query);
 ?>
 <table border="1" cellpadding="10" cellspacing="0">
 <?php
 $sn=1;
 while($data = $result->fetch(PDO::FETCH_ASSOC)) {
   
   ?>
    <tr>
    <td><?php echo $data['id']; ?> </td>
   <td><?php echo $data['queries']; ?> </td>
   <td><?php echo $data['replies']; ?> </td>
   
    </tr>
    <?php
  }
  ?>
</table>
  <?php
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}?>
      </center>
   </body>
</html>
