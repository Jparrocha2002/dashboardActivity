<?php

include '../database/db.php';

header('Content-type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: OPTIONS, GET, POST, PUT, DELETE');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Allow-Headers: Content-type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

class UserController extends Database
{
    public function register($register)
    {
        $array = ['first_name','last_name','email','password'];

        foreach($array as $item)
        {
            if(empty($register[$item]))
            {
                return json_encode([
                    'message' => "$item is required"
                ]);
            }
        }

        $first_name = $register['first_name'] ?? '';
        $last_name = $register['last_name'] ?? '';
        $email = $register['email'] ?? '';
        $password = $register['password'] ?? '';

        $emailStmt = $this->conn->prepare("SELECT * FROM user where email = ?");
        $emailStmt->bind_param('s', $email);
        $emailStmt->execute();
        $isEmail = $emailStmt->get_result();

        if($isEmail->num_rows > 0) 
        {
            return json_encode([
                'message' => 'Email is Already Exists'
            ]);
        }

        $hashPassword = password_hash($password, PASSWORD_BCRYPT);
        $registerStmt = $this->conn->prepare("INSERT INTO user(first_name,last_name,email,password)VALUES(?,?,?,?)");
        $registerStmt->bind_param('ssss', $first_name, $last_name, $email, $hashPassword);
        $isRegister = $registerStmt->execute();

        if($isRegister)
        {
            return json_encode([
                'message' => 'Registered Successfully'
            ]);
        } else {
            return json_encode([
                'message' => 'Registered Unsuccessfully'
            ]);
        }

    }

    public function login($login)
    {
        if(empty($login['email']) || empty($login['password']))
        {
            return json_encode([
                'message' => 'Please provide both email and password'
            ]);
        }

        $email = $login['email'] ?? '';
        $password = $login['password'] ?? '';

        $stmt = $this->conn->prepare("SELECT * FROM user where email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result && $result->num_rows > 0)
        {
            $user = $result->fetch_assoc();
            $hashPassword = $user['password'];

            if(password_verify($password, $hashPassword))
            {
                return json_encode([
                    'message' => 'login successful'
                ]);
            } else {
                return json_encode([
                    'message' => 'Invalid email or password!'
                ]);
            }
        } else {
            return json_encode([
                'message' => 'Invalid email or password!'
            ]);
        }
    }

    public function getAll()
    {
        $all = $this->conn->query('SELECT * FROM user');
        if($all->num_rows > 0)
        {
            $result = $all->fetch_all(MYSQLI_ASSOC);
            return $result;
        }
    }
}

?>