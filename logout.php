<?php
    require_once "classes/UserService.php";
    $user = new UserService();
    $user->logout();
    header('Location: index.php');
?>