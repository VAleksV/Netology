<?php
session_start();
if (isset($_SESSION['user']))
{
    echo 'Привет ' . $_SESSION['user'];
    echo ' <br/>';
    echo '<a href="exit.php">Выход</a>';
} else
{
    include "html.txt";
}