<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    

<p style="text-align:center;">
	<a href="login.html" id="Admin" > Admin login </a></p>
	<h1>Project work phase-II </h1>
	<h2>Implementation of chatbot</h2>
    <div id="container" class="container">
        
		<div id="chat" class="chat">
			<div id="messages" class="messages">
            <div class="form">
            <div class="bot-inbox inbox">
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                </div>
            </div>
        </div>
            </div>
</div>
            
		<img src="bot.png" alt="Robot cartoon" height="400vh">
	</div>
    <div class="wrapper">
    
        <div id = "chat" class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required autofocus >
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p style=\"text-align: end;\">'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $read = result
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });

            });
        });
    </script>
    <script type="text/javascript">
    const synth = window.speechSynthesis;

        function textToSpeech(read)
    {
  let voice = new SpeechSynthesisUtterance(read);
  voice.text = read;
  voice.lang = "en-IN";
  voice.volume = 1;
  voice.rate = 0;
  voice.pitch = 0; // Can be 0, 1, or 2
  synth.speak(voice);
    }
</script>
    
</body>
</html>
