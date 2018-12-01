<?php
session_start();
if (!isset($_SESSION['id']))
{
    require 'index.php';
}
 ?>
