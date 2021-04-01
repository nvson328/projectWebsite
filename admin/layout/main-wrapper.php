<?php include_once"controller/table_c.php"; ?>
<div class="container-fluid" style="background-image:url('../images/banner.jpg')">
     <!-- Page Heading -->
                <!-- /.row -->
                <div class="row" style="height:840px;padding-top:50px;">
                    <div class="col-lg-4 col-md-4"  >
                        <div class="panel panel-info">
                            <div class="panel-heading" style="background-color: #202020; color: white">
                                <div class="row">
                                    <div class="col-xs-4" >
                                        <img style="border-radius:50px;" src="../images/icon_table.png" alt="">
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge" ><?php if(isset($_SESSION['count_table'][0]['count'])){echo $_SESSION['count_table'][0]['count'];} ?></div>
                                        <div>Bàn</div>
                                    </div>
                                </div>
                            </div>
                            <a href="index.php?page=list-tables&method=list">
                                <div class="panel-footer" style="background-color: #e75b1e">
                                    <span class="pull-left" style="color: white;" >Xem chi tiết</span>
                                    <span class="pull-right" style="color:white;"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="panel panel-info ">
                        <div class="panel-heading" style="background-color: #202020; color: white">
                                <div class="row">
                                    <div class="col-xs-4">
                                    <img src="../images/icon_mon_an.png" alt="">
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php if(isset($_SESSION['count_food'][0]['count'])){ echo $_SESSION['count_food'][0]['count']; } ?></div>
                                        <div>Món ăn</div>
                                    </div>
                                </div>
                            </div>
                            <a href="index.php?page=list-foods&method=list">
                            <div class="panel-footer" style="background-color: #e75b1e">
                                    <span class="pull-left" style="color: white;">Xem chi tiết</span>
                                    <span class="pull-right" style="color: white;"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="panel panel-info ">
                        <div class="panel-heading" style="background-color: #202020; color: white">
                                <div class="row">
                                    <div class="col-xs-4">
                                    <img src="../images/icon_hoa_don.png" alt="">
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php if(isset($_SESSION['count_bill'][0]['COUNT'])){ echo $_SESSION['count_bill'][0]['COUNT']; } ?>
                                        </div>
                                        <div>Hóa đơn đã thanh toán</div>
                                    </div>
                                </div>
                            </div>
                            <a href="index.php?page=list-tables&method=bills">
                            <div class="panel-footer" style="background-color: #e75b1e">
                                    <span class="pull-left" style="color: white;">Xem chi tiết</span>
                                    <span class="pull-right" style="color: white;"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                   
                </div>
                <!-- /.row -->

            </div>