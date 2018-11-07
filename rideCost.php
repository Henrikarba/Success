<html>
<head>
    <link rel="stylesheet" type="text/css" href="design.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="functions.js"></script>
</head>
<body onload="javascript:map_resize();">
    <div>
        <?php
            include'navbar.php';
        ?>
        <img src="Images/Map/Map_1.png" class="pildike" id="pilt" onclick="javascript:setTimeout(map_cycler, 100);" ></img>
        <br>
        <br>
    </div>
    <?php include'footer.php'; ?>
</body>
</html>