<!DOCTYPE html>
<html>
<head>
    <title>Whiteboard</title>
</head>
<body>
    <div class="container" id="container">

    </div>

    <input type="text" name="message" id="message">
    <button onclick="chat_loader();">Submit</button>
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
</script>
</html>