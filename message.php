<?php
// connecting to database
$conn = mysqli_connect("nl-srv-web324.main-hosting.eu", "u671633553_chatbot", "Chatbot@db69", "u671633553_chatbot") or die("Database Error");

// getting user message through ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//checking user query to database query
$check_data = "SELECT replies FROM bot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// if user query matched to database query we'll show the reply otherwise it go to else statement
if(mysqli_num_rows($run_query) > 0){
    //fetching replay from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing replay to a varible which we'll send to ajax
    $replay = $fetch_data['replies'];
    echo $replay;
    // echo textToSpeech($read);

    // for ($x = 0; $x <= 0; $x++) {
    //     print '<script> textToSpeech($read); </script>';
    //  }
    
}else{
    echo 'Sorry cant be able to understand you!';
}
?>