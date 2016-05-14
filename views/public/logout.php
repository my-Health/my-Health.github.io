<?php
    session_start();
?>
<!doctype html>
<html>

<body>
    <?php 
        session_destroy();
        header('location: index.php');
    ?>
</body>
</html>
