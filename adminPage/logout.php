<?php
session_destroy();
ob_clean();
header('Location: index.php');


?>