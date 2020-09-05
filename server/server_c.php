<?php 

    include_once 'server_m.php';

    class server_c extends server_m
    {
       
       	private $server;

        public function __construct()
        {
            $this->server = new server_m();
        }

        /*------------------------------
          Trả về loại bàn ăn.
       -------------------------------*/
        public function getLoaiban()
       {
          return $this->server->getLoaiban();
       }

        /*------------------------------
          Trả về mã bàn ăn.
       -------------------------------*/
       public function getma_ban_an($id)
       {
          return $this->server->getma_ban_an($id);
       }


       /*------------------------------
          Trả về thêm khách hàng.
       -------------------------------*/
        public function addKhachhang($ten_khach_hang, $so_dien_thoai, $email)
       {
          return $this->server->addKhachhang($ten_khach_hang, $so_dien_thoai, $email);
       }

       /*------------------------------
          Trả về thêm hóa đơn.
       -------------------------------*/
        public function addHoadon($ma_khach_hang, $ma_ban, $ngay_dat_ban, $gio_dat_ban)
       {
          return $this->server->addHoadon($ma_khach_hang, $ma_ban, $ngay_dat_ban, $gio_dat_ban);
       }


        /*-------------------------
        Trả vê kiểm tra khách hàng.
    	--------------------------*/
    	 public function checkMember($email, $phone)
       {
          return $this->server->checkMember($email, $phone);
       }
    }
    

?>