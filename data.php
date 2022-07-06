<?php
 // include("database.php");

$hostName = "nl-srv-web324.main-hosting.eu";
$username = "u671633553_chatbot";
$password = "Chatbot@db69";
$databaseName = "u671633553_chatbot";
$conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {

$query = "SELECT queries, replies, id FROM bot";
$result = $conn->query($query);
 ?>
 <table border="1" cellpadding="10" cellspacing="0">
 <?php
 $sn=1;
 while($data = $result->fetch(PDO::FETCH_ASSOC)) {
   
   ?>
    <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['queries']; ?> </td>
   <td><?php echo $data['replies']; ?> </td>
   <td><?php echo $data['id']; ?> </td>
    </tr>
    <?php
  }
  ?>
</table>
  <?php
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}