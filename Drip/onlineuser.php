<?php
session_start();
if(!isset($_["names"]))
{
    header('location:login.php');
}