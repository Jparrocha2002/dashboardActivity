<?php

include '../controller/UserController.php';

$register = new UserController();
echo $register->register($_POST);

?>  