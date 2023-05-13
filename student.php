<?php

include 'database.php';
include 'manipulate.php';
include 'general.php';

// class Student extends Manipulate implements General

class Student extends Manipulate implements General {
    protected $conn;
    private $table = 'student';
    private $prepared;

    public function __construct($dbname = 'barrientos') {
        $this->conn = Database::connect($dbname);
        $this->conn->query("CREATE TABLE IF NOT EXISTS $this->table (
            id int auto_increment primary key not null,
            last_name varchar(100) not null,
            first_name varchar(100),
            age int,
            course varchar(100) not null,
            year int not null
        )");

        $this->prepared = $this->conn->prepare("INSERT INTO $this->table (last_name, first_name, age, course, year) VALUES (?, ?, ?, ?, ?)");
    }

    public function insert(array $params) {
        $this->prepared->bind_param("ssisi", $params['last_name'], $params['first_name'], $params['age'], $params['course'], $params['year']);
        return $this->prepared->execute();
    }

    public function update(array $params) {
        $id = $params['id'];
        unset($params['id']);
        foreach($params as $column => $new_data) {
            if(!$this->conn->query("UPDATE $this->table SET $column = \"$new_data\" WHERE ID = $id")) {
                return 0;
            }
        }
        return 1;
    }

    public function delete($id) {
        return $this->conn->query("DELETE FROM $this->table WHERE ID = $id");
    }

    public function all($id = -1) {
        if($id == -1) {
            $list = $this->conn->query("SELECT * FROM $this->table ORDER BY id desc");
            return $list->fetch_all(MYSQLI_ASSOC);
        } else {
            $student = $this->conn->query("SELECT * FROM $this->table WHERE id = $id");
            return $student->fetch_assoc();
        }
    }

}

$handler = new Student();

?>