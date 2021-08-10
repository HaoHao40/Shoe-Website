<?php
    session_start();
    session_destroy();
    ?>
    <script>
        alert("You have logged out succesfully");
    </script>
    <?php
    header("Refresh:1 url=index.php");