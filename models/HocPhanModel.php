<?php
class HocPhanModel
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function getAllHocPhan()
    {
        $query = "SELECT * FROM HocPhan";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSoLuongDuKien($maHP)
    {
        $query = "SELECT SoLuongDuKien FROM HocPhan WHERE MaHP = :maHP";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['maHP' => $maHP]);
        return $stmt->fetchColumn();
    }

    public function giamSoLuongDuKien($maHP)
    {
        $query = "UPDATE HocPhan SET SoLuongDuKien = SoLuongDuKien - 1 WHERE MaHP = :maHP";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute(['maHP' => $maHP]);
    }

    public function tangSoLuongDuKien($maHP)
    {
        $query = "UPDATE HocPhan SET SoLuongDuKien = SoLuongDuKien + 1 WHERE MaHP = :maHP";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute(['maHP' => $maHP]);
    }
}
