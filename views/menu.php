<div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Our Menu 	
					</h2>
                        <p class="title-caption text-center">Đây là những món ăn ưa thích được khách bình chọn tại cửa hàng</p>
                    </div>
                    <div class="tab-menu">
                        <div class="slider slider-nav">
                            <div class="tab-title-menu">
                                <h2>KHAI VỊ</h2>
                                <p> <i class="flaticon-canape"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>MÓN CHÍNH</h2>
                                <p> <i class="flaticon-dinner"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>TRÁNG MIỆNG</h2>
                                <p> <i class="flaticon-desert"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>ĐỒ UỐNG</h2>
                                <p> <i class="flaticon-coffee"></i> </p>
                            </div>
                        </div>
                        <div class="slider slider-single">
                            <div>
                            <?php 
                            foreach ($rs2 as $key => $val) {
                                
                            ?>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/<?php echo $val['anh_chi_tiet'] ?>" alt="" class="img-responsive">

                                        <div>
                                            <h3><?php echo $val['ten_mon_an'] ?></h3>
                                            <p class="show">
                                                <?php echo $val['gioi_thieu'] ?>
                                            </p>
                                        </div>
                                        <span style="font-size: 20px;" class="offer-price"><?php echo number_format( $val['gia_tien'])."đ" ?></span>
                                    </div>
                                </div>
                            <?php 
                            }
                            ?>
                            </div>
                            <div>
                                <?php 
                                    foreach ($rs3 as $key => $val) {
                                ?>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/<?php echo $val['anh_chi_tiet'] ?>" alt="" class="img-responsive">
                                        <div>
                                            <h3><?php echo $val['ten_mon_an'] ?></h3>
                                            <p class="show">
                                                <?php echo $val['gioi_thieu'] ?>    
                                            </p>
                                        </div>
                                        <span  style="font-size: 20px;" class="offer-price"><?php echo number_format( $val['gia_tien'])."đ" ?></span>
                                    </div>
                                </div>
                                <?php 
                                    }
                                ?>
                            </div>
                            <div>
                                <?php 
                                    foreach ($rs4 as $key => $val) {
                                ?>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/<?php echo $val['anh_chi_tiet'] ?>" alt="" class="img-responsive">
                                        <div>
                                            <h3><?php echo $val['ten_mon_an'] ?></h3>
                                            <p class="show">
                                                <?php echo $val['gioi_thieu'] ?>
                                            </p>
                                        </div>
                                        <span  style="font-size: 20px;" class="offer-price"><?php echo number_format( $val['gia_tien'])."đ" ?></span>
                                    </div>
                                </div>
                                <?php 
                                    }
                                ?>
                            </div>
                            <div>
                                <?php 
                                    foreach ($rs5 as $key => $val) {
                                ?>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/<?php echo $val['anh_chi_tiet'] ?>" alt="" class="img-responsive">
                                        <div>
                                            <h3><?php echo $val['ten_mon_an'] ?></h3>
                                            <p class="show" >
                                                <?php echo $val['gioi_thieu'] ?>
                                            </p>
                                        </div>
                                        <span  style="font-size: 20px;" class="offer-price"><?php echo number_format( $val['gia_tien'])."đ" ?></span>
                                    </div>
                                </div>
                                <?php 
                                    }
                                ?>
                                <!-- end col -->
                            </div>
                        </div>
                    </div>
                    <!-- end tab-menu -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>