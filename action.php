<?php
session_start();
$_SESSION['username'] = htmlspecialchars($_POST['username']);
$_SESSION['role'] = htmlspecialchars($_POST['role']);

if ($_SESSION['role'] == "Admin") {
    header('Location: page2.php');
} elseif ($_SESSION['role'] == "User") {
    header('Location: page3.php');
} elseif ($_SESSION['role'] == "Super Admin") {
    header('Location: page4.php');
} else {
    header('Location: index.php');
}
exit();
