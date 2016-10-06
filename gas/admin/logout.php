<?php
session_start();
session_unset($_session["user_id"]);
session_destroy();

header("location:index.php");
?>