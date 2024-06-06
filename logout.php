<?php
include_once("functionconnection.php");
unset($_SESSION['key2']);
unset($_SESSION['key1']);
header("location: sign in.php");

