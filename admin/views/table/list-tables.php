<?php include_once 'views/table/details-table.php' ?>
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12"> 
                        <h2>Quản lý hóa đơn</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Mã hóa đơn</th>
                                        <th>Mã khách hàng</th>
                                        <th>Mã bàn</th>
                                        <th>Ngày đặt bàn</th>
                                        <th>Giờ đặt bàn</th>
                                        <th>Ghi chú</th>
                                        <th>Chức năng</th>

                                    </tr>
                                </thead>
                              <!-- <?php echo '<pre>';
                                print_r($_SESSION['order']);
                                echo '</pre>';?>  

                                 -->
                                <tbody>
                                    <?php                             
                                $stt=0;
                                foreach($rsBill as $key => $value){
                                   $stt++;
   
                                ?>
                                
                                    <tr>
                                        <td class="table_done"><?php echo $value['ma_hoa_don'] ?></td>
                                        <td class="table_done"><?php echo $value['ma_khach_hang'] ?></td>
                                        <td class=""> <?php echo $value['ma_ban'] ?></td>
                                        <td class="table_done"><?php echo $value['ngay_dat_ban'] ?></td>
                                        <td class="table_done"><?php echo $value['gio_dat_ban'] ?></td>
                                        <td class="table_done"></td>
                                        <td>
                                           
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