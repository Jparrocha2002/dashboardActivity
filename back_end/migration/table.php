<?php

include '../database/db.php';

class Table extends Database
{
    public function createTable()
    {
        $sql = "CREATE TABLE IF NOT EXISTS user(
            id int primary key auto_increment,
            first_name varchar(255) not null,
            last_name varchar(255) not null,
            email varchar(40) not null unique,
            password varchar(255) not null
        )engine=InnoDB";

        $isCreated = $this->conn->query($sql);

        if($isCreated)
        {
            return json_encode([
                'message' => 'Table Created Successfully'
            ]);
        } else {
            return json_encode([
                'message' => 'Error'
            ]);
        }
    }
}
?>