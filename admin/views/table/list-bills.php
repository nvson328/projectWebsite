<?php 
    if (isset($_SESSION['stt']) && $_SESSION['stt']==2) {
        header('Location: index.php');
    }
 ?>

<?php include_once 'views/table/detail-bills.php' ?>
<div class="container-fluid">
    <div class="row">
        <form class="form-inline" method="post">
            <input type="number"  name="key" class="form-control mb-2 mr-sm-2" placeholder="Nhập số điện thoại" value="<?php if(isset($_POST['key'])){ echo $_POST['key'] ; } ?>">
            <button type="submit" name="submit_search" class="btn btn-primary mb-2">Tìm kiếm</button>
        </form>
    </div>
                <div class="row">
                    <div class="col-lg-12"> 
                        <h2 style="color:black;font-weight: bold;">Quản lý hóa đơn</h2>
                        <h4>Có <span style="color: #e75b1e;"><?php echo count($_SESSION['rslistBill']); ?> </span> đã được thanh toán</h4>
                        <div class="table-responsive">
                            <table id="table_order" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;padding-top:15px;">Mã hóa đơn</th>
                                        <th style="text-align:center;padding-top:15px;">Tên khách hàng</th>
                                        <th style="text-align:center;padding-top:15px;">Số điện thoại</th>
                                        <th style="text-align:center;padding-top:15px;">Mã bàn</th>
                                        <th style="text-align:center;padding-top:15px;">Ngày đặt bàn</th>
                                        <th style="text-align:center;padding-top:15px;">Giờ đặt bàn</th>                                     
                                        <th style="text-align:center;padding-top:15px;">Chức năng</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                             
                                $stt=0;
                                foreach($rslistBill as $key => $value){
                                   $stt++;
   
                                ?>
                                
                                    <tr>
                                        <td class="table_done" style="position: relative;text-align:center;padding-top:15px;"><?php echo $value['ma_hoa_don'] ?></td>
                                        <td class="table_done" style="position: relative;text-align:center;padding-top:15px;"><?php echo $value['ten_khach_hang'] ?></td>
                                        <td style="text-align:center;padding-top:15px;"><?php echo $value['so_dien_thoai'] ?></td>
                                        <td class="" style="position: relative;text-align:center;padding-top:15px;"> <?php echo $value['ma_ban'] ?></td>
                                        <td class="table_done" style="position: relative;text-align:center;padding-top:15px;"><?php echo $value['ngay_dat_ban'] ?></td>
                                        <td class="table_done" style="position: relative;text-align:center;padding-top:15px;"><?php echo $value['gio_dat_ban'] ?></td>
                                        
                                        <td style="text-align:center;padding-top:15px;">
                                           
                                                <button class="" style="backgroud-color:transparent; border: none;width: 30px; height: 30px; position:relative;" onclick="bills(<?= $value['ma_hoa_don']?>)" id="btn_detailsBill_<?= $value['ma_hoa_don']?>" value="<?= $value['ma_hoa_don']?>" data-toggle="modal" data-target="#modal-detail" name="details-bills"><img style="width: 30px; height: 30px;position:absolute;left:-2px;top:-2px; " src="../images/icon_details.png" alt=""></button>
                                         
                                          
                                        </td>
                                    </tr>  
                                    <?php 
                                    }?>   
                                </tbody>
                                    
                            </table>
                            <?php
                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $sum_day=0;
                                $date = date('d/m/Y');
                                $time_day = strtotime(date('d')-date('m')-date('Y'));
                                // echo $time_day;
                                foreach ($_SESSION['doanhthu'] as $key => $value) {
                                    $time_day = strtotime(date('d').'-'.date('m').'-'.date('Y'));
                                    $time_order = strtotime($value['ngay_dat_ban']);
                                    if ($time_day - $time_order==0) {
                                    $sum_day += $value['tong_tien'];

                                }
                                } ?>
                                <h3 style="text-align:right;">Doanh thu trong ngày <?php echo date('d').'/'. date('m') ?>: <span style="color:#e75b1e;"><?php echo number_format($sum_day).'<sup>đ</sup>'; ?></span></h3>
                        </div>
                    <!--Phan trang -->
                        <!-- <div style="text-align: center;">
                        <ul class="pagination">
                            
                            <?php
                                $bill = $this->table->getHoadon();
                                $bill_count = count($bill);
                                $bill_page = ceil($bill_count/5);
                                // echo $bill_count.',,';
                                // echo $bill_page.',,';
                                
                                for($i=1;$i<= $bill_page;$i++){
                                    // echo '<a style="margin:0 5px;" href="index.php?page=list-tables&method=list&trang='.$i.'">'.$i.'</a>';
                                    echo '<li class="page-item"><a class="page-link" href="index.php?page=list-tables&method=list&trang='.$i.'">'.$i.'</a></li>';
        
                                }
                            
                            ?>
                            
                            </ul>
                        </div> -->
                    </div>
                </div>
                    
                <!-- /.row -->

            </div>
