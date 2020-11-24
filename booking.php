<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <script type="text/javascript">
            document.write(localStorage.getItem("Year"));
            document.write(localStorage.getItem("Make"));
            document.write(localStorage.getItem("Model"));
        </script>
    </body>
</html>
