<!DOCTYPE html>
<html>
<head>
    <title>Whiteboard</title>
</head>
<body>
    <div class="container" id="container">
    </div>
</body>
<script type="text/javascript">
    var conn = new WebSocket('ws://localhost:7000');
    var container = document.getElementById("container");
    conn.onopen = function(e) {
        container.innerHTML = "Connection Established";
    };

    conn.onmessage = function(e) {
        container.append(e.data);
    };
</script>
</html>