<?php
	session_start();
    session_destroy();
    header('location:index?action=logout&message=success');
?>