<div class="modal" tabindex="-1" id="modal-detail" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="load-table-order-detail">
          <table class="table" id="table-order-detail">
            <thead>
              <tr>
                <th scope="col">Tên món ăn</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Thành tiền</th>
              </tr>
            </thead>
              <?php 
                  $_SESSION['sum']=0;
                  foreach($_SESSION['rsDetails'] as $key => $value){ 
                    $_SESSION['sum']+= $value['tong_tien'];
                  ?>
                  <tbody>
                    <td><?= $value['ten_mon_an'] ?></td>
                    <td><?= number_format($value['don_gia']).'<sup>đ</sup>'?></td>
                    <td><?= $value['so_luong']?></td>
                    <td><?= number_format($value['tong_tien']).'<sup>đ</sup>'?></td>
                  </tbody>
              <?php } ?>
              <tr>
                  <td colspan="4">Thành tiền :<?php if(isset($_SESSION['sum'])){echo number_format($_SESSION['sum']).'<sup>đ</sup>';}?></td>  
              </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thanh toán</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
  </div>
</div>