  <div class="modal" tabindex="-1" id="modal-detail" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          
        </div>
        <div class="modal-body">
          <div id="load-table-bills">
            <table class="table" id="table-bills">
              <thead>
                <tr>
                  <th scope="col">Tên món ăn</th>
                  <th scope="col">Đơn giá</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Thành tiền</th>
                </tr>
              </thead>
                <?php 
                    $_SESSION['sum_details']=0;
                    
                    foreach($_SESSION['rsDetails'] as $key => $value){ 
                      $_SESSION['sum_details']+= $value['tong_tien'];
                      
                    ?>
                    <tbody>
                      <td><?= $value['ten_mon_an'] ?></td>
                      <td><?= number_format($value['don_gia']).'<sup>đ</sup>'?></td>
                      <td><?= $value['so_luong']?></td>
                      <td><?= number_format($value['tong_tien']).'<sup>đ</sup>'?></td>
                      
                    </tbody>
                <?php } ?>
                <tr>
                    <td colspan="4" style="color:red;font-size:20px;">Tổng tiền :<?php if(isset($_SESSION['sum_details'])){echo number_format($_SESSION['sum_details']).'<sup>đ</sup>';}?></td>  

                </tr>
                <tr>
                  <td>
                  <?php if(isset(($_SESSION['rsDetails'][0]['status_hoa_don']))&&($_SESSION['rsDetails'][0]['status_hoa_don']==2)){
                              echo "Đã thanh toán";
                          }else{
                              echo "Chưa thanh toán";
                          }
                          ?>
                  </td>
                </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>