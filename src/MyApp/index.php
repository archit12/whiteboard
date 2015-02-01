<!DOCTYPE html>
<html>
<head>
    <title>Whiteboard</title>
    <script type="text/javascript" src="jquery-1.11.1.min.js"></script>
</head>
<body>
    <div class="container" id="container">

    </div>

    <input type="text" name="message" id="message">
    <button onclick="chat_loader();">Submit</button>
    <a href="sample.php">Ajax loader</a>
    <div id="on_send"></div>

</body>
<script type="text/javascript">
    var conn = new WebSocket('ws://localhost:7000');
    var container = document.getElementById("container");
    var on_send=document.getElementById("on_send");
    conn.onopen = function(e) {
        container.innerHTML = "Connection Established";
    };

    // conn.onmessage = function(e) {

        
    // };
    conn.onmessage = function (e)
    {
       on_send.innerHTML += e.data+ '<br>';
    };

    function chat_loader()
    {
        var message=document.getElementById("message");
        conn.send(message.value);
    }

    function ajax_loader()
    {
        var new_message=document.getElementById("message");
        $.ajax({
            type:'GET',
            url:'sample.php',
            data:{query:new_message}
        })
        .done(function(data)
        {
            //to do
        });
    }
</script>
</html>
