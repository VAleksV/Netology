<?php
session_start();
unset($_SESSION['user']);
header(header: sprintf("Location: %s", $_SERVER['HTTP_REFERER']));
exit;