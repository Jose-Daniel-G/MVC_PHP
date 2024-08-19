<?php

class DashboardModel {
    private $db;

    public function __construct() {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function getTotalUsuarios() {
        $result = $this->db->query("SELECT COUNT(*) AS total FROM usuarios");
        return $result->fetch_assoc()['total'];
    }

    public function getTotalVentas() {
        $result = $this->db->query("SELECT SUM(monto) AS total FROM ventas");
        return $result->fetch_assoc()['total'];
    }

    public function getVentasRecientes() {
        $result = $this->db->query("SELECT * FROM ventas ORDER BY fecha DESC LIMIT 5");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getUsuarios() {
        $result = $this->db->query("SELECT * FROM usuarios");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
