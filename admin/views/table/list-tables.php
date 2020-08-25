<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12"> 
                        <h2>Quản lý bàn ăn</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Bàn</th>
                                        <th>Loại bàn</th>
                                        <th>Trạng thái</th>
                                        <th>Thời gian còn lại</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                              <!-- <?php echo '<pre>';
                                print_r($_SESSION['order']);
                                echo '</pre>';?>  

                                 -->
                                <tbody>
                                    <?php                             

                                foreach($rsTables as $key => $value){
                                   
   
                                ?>
                                    <?php
                            
                                        if (isset($_SESSION['order'][$value['ma_ban']])) {

                                    ?>
                                        <tr>
                                        <td class="table_done"><?php echo $value['ma_ban']; ?></td>
                                        <td class="table_done"><?php echo $value['ten_loai_ban'] ?></td>
                                        <td class="">Bàn đã có người</td>
                                        <td class="table_done">00:48:30</td>
                                        <td class="table_done">
                                            <a href="index.php?page=edit-member">
                                                <button class="btn btn-primary" name="edit_member">Chi tiết</button>
                                            </a>
                                            <a href="index.php?page=list-tables&method=order&id=<?= $value['ma_ban'] ?>">
                                                <button  class="btn btn-primary" name="edit_member" >Gọi món</button>
                                            </a>
                                            <a onclick="return confirm('Bạn có thực sự muốn xóa học viên này không?');" href="index.php?page=list-member&method=del&id=<?php echo $value['id_hocvien']; ?>">
                                                <button class="btn btn-danger">Thanh toán</button>
                                            </a>
                                        </td>
                                    </tr>
                                        <?php
                                    }else{
                                        ?>
                                        <tr>
                                        <td class="table_default"><?php echo $value['ma_ban']; ?></td>
                                        <td class="table_default"><?php echo $value['ten_loai_ban'] ?></td>
                                        <td class="table_default">Bàn trống</td>
                                        <td class="table_default">00:48:30</td>
                                        <td class="table_default">
                                            <a href="index.php?page=edit-member">
                                                <button class="btn btn-primary" name="chiTiet">Chi tiết</button>
                                            </a>
                                            <a href="index.php?page=list-tables&method=order&id=<?= $value['ma_ban'] ?>">
                                                <button  class="btn btn-primary" name="order" >Gọi món</button>
                                            </a>
                                            <a onclick="return confirm('Bạn có thực sự muốn xóa học viên này không?');" href="index.php?page=list-member&method=del&id=<?php echo $value['id_hocvien']; ?>">
                                                <button class="btn btn-danger">Thanh toán</button>
                                            </a>
                                        </td>
                                    </tr>
                                        <?php
                                         }?>
                                    
                                </tbody>
                                    <?php 
                                    }?>
                            </table>
                        </div>
                    </div>
                    
                <!-- /.row -->

            </div>