<?php
session_start();
if (!empty($_POST['login']))
{
    $_SESSION['user'] = $_POST['login'];
}
header(header: sprintf("Location: %s", $_SERVER['HTTP_REFERER']));
