<?php
session_destroy();
ob_clean();
header('Location: ' . $_SERVER['HTTP_REFERER']);


?>