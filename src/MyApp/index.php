<!DOCTYPE html>
<html>
<head>
    <title>Whiteboard</title>
    <script type="text/javascript" src="../jquery-1.11.1.min.js"></script>
</head>
<body>
    <div class="container" id="container">

    </div>

    <input type="text" name="message" id="message">
    <!-- <button onclick="chat_loader();">Submit</button> -->
    <a href="#" onclick="chat_loader();">Ajax loader</a>
    <div id="on_send"></div>
    <div id="new_message"></div>

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
       on_send.innerHTML += JSON.parse(e.data).text+ '<br>';
       // $.ajax({
       //      type:'GET',
       //      url:'sample.php',
       //      data:{query:message.value}
       //  })
       //  .done(function(data)
       //  {
       //     on_send.innerHTML += data+ '<br>';
       //  });

    };

    function chat_loader()
    {
       
        var message=document.getElementById("message");

         var obj={

            text:message.value,
            username:"default"
        };

        conn.send(JSON.stringify(obj));
        on_send.innerHTML +=  message.value+ '<br>';


        // $.ajax({
        //     type:'GET',
        //     url:'sample.php',
        //     data:{query:message.value}
        // })
        // .done(function(data)
        // {
        //    on_send.innerHTML += data+ '<br>';
        // });
    }

</script>
</html>
