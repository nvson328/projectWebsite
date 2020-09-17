<?php include_once 'views/table/details-table.php' ?>
<div class="container-fluid">
    <div class="row">
        <form class="form-inline" method="post">
            <input type="number"  name="key" class="form-control mb-2 mr-sm-2" placeholder="Nhập số điện thoại" value="<?php if(isset($_POST['key'])){ echo $_POST['key'] ; } ?>">
        <button type="submit" name="submit_search" class="btn btn-primary mb-2">Tìm kiếm</button>
        </form>
    </div>
                <div class="row">
                    <div class="col-lg-12"> 
                        <h2>Gọi món</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
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
                              <!-- <?php echo '<pre>';
                                print_r($_SESSION['order']);
                                echo '</pre>';?>  

                                 -->
                                <tbody>
                                    <?php                             
                                $stt=0;
                                foreach($rsSearch as $key => $value){
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
                                           
                                                <button class="btn btn-danger" onclick="detailsBill(<?= $value['ma_hoa_don']?>)" id="btn_details_<?= $value['ma_hoa_don']?>" value="<?= $value['ma_hoa_don']?>" data-toggle="modal" data-target="#modal-detail" name="details-table">Chi tiết</button>
                                         
                                            <a href="index.php?page=list-tables&method=order&id=<?= $value['ma_hoa_don'] ?>">
                                                <button  class="btn btn-primary" name="order_food" >Gọi món</button>
                                            </a>
                                        </td>
                                    </tr>  
                                    <?php 
                                    }?>   
                                </tbody>
                                    
                            </table>
                        </div>
                    </div>
                <!-- /.row -->

            </div>