<?php
require_once './models/SinhVienModel.php';
require_once './models/NganhHocModel.php';

class StudentController
{
    private $sinhVienModel;
    private $nganhHocModel;

    public function __construct($db)
    {
        session_start();
        // Kiểm tra đăng nhập
        if (!isset($_SESSION['maSV'])) {
            header("Location: index.php?controller=auth&action=login");
            exit();
        }
        $this->sinhVienModel = new SinhVienModel($db);
        $this->nganhHocModel = new NganhHocModel($db);
    }

    public function index()
    {
        $sinhViens = $this->sinhVienModel->getAllSinhVien();
        require_once './views/students/index.php';
    }

    public function create()
    {
        $nganhHocs = $this->nganhHocModel->getAllNganhHoc();
        require_once './views/students/create.php';
    }

    public function store()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = [
                'maSV' => $_POST['maSV'],
                'hoTen' => $_POST['hoTen'],
                'gioiTinh' => $_POST['gioiTinh'],
                'ngaySinh' => $_POST['ngaySinh'],
                'hinh' => $_POST['hinh'] ?? '/Content/images/default.jpg',
                'maNganh' => $_POST['maNganh']
            ];
            $this->sinhVienModel->createSinhVien($data);
            header("Location: index.php?controller=student&action=index");
            exit();
        }
    }

    public function edit($maSV)
    {
        $sinhVien = $this->sinhVienModel->getSinhVienByMaSV($maSV);
        $nganhHocs = $this->nganhHocModel->getAllNganhHoc();
        require_once './views/students/edit.php';
    }

    public function update($maSV)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = [
                'hoTen' => $_POST['hoTen'],
                'gioiTinh' => $_POST['gioiTinh'],
                'ngaySinh' => $_POST['ngaySinh'],
                'hinh' => $_POST['hinh'] ?? '/Content/images/default.jpg',
                'maNganh' => $_POST['maNganh']
            ];
            $this->sinhVienModel->updateSinhVien($maSV, $data);
            header("Location: index.php?controller=student&action=index");
            exit();
        }
    }

    public function delete($maSV)
    {
        $this->sinhVienModel->deleteSinhVien($maSV);
        header("Location: index.php?controller=student&action=index");
        exit();
    }

    public function detail($maSV)
    {
        $sinhVien = $this->sinhVienModel->getSinhVienByMaSV($maSV);
        require_once './views/students/detail.php';
    }
}
