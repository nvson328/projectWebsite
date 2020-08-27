<div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center">Những món ăn đặc biệt trong ngày.</h2>
                        <h5 class="title-caption text-center">Đây là những món ăn đặc biệt của nhà hàng lựa chọn, tin chúng tôi đi và nhà hàng Food Funday sẽ không làm các bạn thất vọng.</h5>
                    </div>
                    <div class="special-box"> 
                        <div id="owl-demo">
                        <?php
                            foreach($rs1 as $key => $val){
                            
                        ?>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            <?php echo $val['ten_mon_an'] ?>
                                           
                                            
                                            <div class="line"> </div>
                                            <div class="dit-line"><?php echo $val['gioi_thieu'] ?></div> 

                                            
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/<?php echo $val['anh_chi_tiet'] ?>" alt="sp-menu">
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <!-- end special-box  --> 
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>