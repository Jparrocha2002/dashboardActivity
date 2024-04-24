<?php

include '../controller/UserController.php';

$register = new UserController();
$call = $register->getAll($_GET);
echo json_encode($call);

?>  