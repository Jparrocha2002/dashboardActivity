<?php

include '../controller/UserController.php';

$register = new UserController();
echo $register->login($_POST);

?>  