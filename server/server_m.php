<?php 
    include_once 'server_config.php';



    class server_m extends Connect
    {
        function __construct()
        {
            parent::__construct();
        }

        public function getLoaiban()
    {
        $sql = "SELECT * FROM tbl_loaiban";
        $pre = $this->pdo->prepare($sql);
        $pre->execute();

        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }


    public function addKhachhang($ten_khach_hang, $so_dien_thoai, $email)
    {
        $sql = "INSERT INTO tbl_khachhang (ten_khach_hang, so_dien_thoai, email) VALUES (:ten_khach_hang, :so_dien_thoai, :email)";

        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':ten_khach_hang', $ten_khach_hang);
        $pre->bindParam(':so_dien_thoai', $so_dien_thoai);
        $pre->bindParam(':email', $email);
        
        $pre->execute();
        $_SESSION['lastID'] = $this->pdo->lastInsertId();
    }

    public function addHoadon($ma_khach_hang, $ma_ban, $ngay_dat_ban, $gio_dat_ban)
    {
        $sql = "INSERT INTO tbl_hoadon (ma_khach_hang, ma_ban, ngay_dat_ban, gio_dat_ban) VALUES (:ma_khach_hang, :ma_ban, :ngay_dat_ban, :gio_dat_ban)";

        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':ma_khach_hang', $ma_khach_hang);
        $pre->bindParam(':ma_ban', $ma_ban);
        $pre->bindParam(':ngay_dat_ban', $ngay_dat_ban);
        $pre->bindParam(':gio_dat_ban', $gio_dat_ban);
        
        $pre->execute();
        $_SESSION['id_hoadon'] = $this->pdo->lastInsertId();
    }

    public function getma_ban_an($id) {
        $sql = "SELECT * FROM tbl_banan WHERE ma_loai_ban = :id";

        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':id', $id, PDO::PARAM_INT);

        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);

    }


    /*-------------------------
        kiểm tra khách hàng.
    --------------------------*/
    public function checkMember($email, $phone)
    {
        $sql = "SELECT * 
            FROM tbl_khachhang
            WHERE email = :email OR so_dien_thoai = :phone";

        $pre = $this->pdo->prepare($sql);
        $pre->bindParam(':email', $email, PDO::PARAM_STR);
        $pre->bindParam(':phone', $phone, PDO::PARAM_STR);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

    // Chi tiết hóa đơn dựa vào ID.
    public function getBill_Id($id)
    {
        $sql = "
            SELECT 
                tbl_hoadon.ngay_dat_ban, tbl_hoadon.gio_dat_ban,
                tbl_khachhang.ten_khach_hang,tbl_khachhang.email,tbl_banan.ten_ban
            FROM 
                tbl_hoadon,tbl_khachhang,tbl_banan
            WHERE 
                tbl_khachhang.ma_khach_hang = tbl_hoadon.ma_khach_hang
            AND
                tbl_banan.ma_ban = tbl_hoadon.ma_ban
            AND
                tbl_hoadon.ma_hoa_don = :id";

            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(':id', $id, PDO::PARAM_INT);
            $pre->execute();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

}
    

?>