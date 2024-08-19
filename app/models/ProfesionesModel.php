<?php

class ProfesionesModel {
    private $db;

    public function __construct() {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function getData() {
        $result = $this->db->query("SELECT * FROM example_table");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
