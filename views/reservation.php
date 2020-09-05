<div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
						      Reservations			
					       </h2>
                        </div>
                        <h4 class="form-title">PHIẾU ĐẶT BÀN</h4>
                        <p>VUI LÒNG ĐIỀN ĐẦY ĐỦ THÔNG TIN ĐỂ ĐẶT BÀN</p>

                        <form id="contact-form" method="post" class="reservations-box" name="contactform" action="mail.php" onsubmit="return datban();">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="name" id="name" placeholder="Họ và tên" required="required" data-error="Firstname is required.">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="email" name="email" id="email" placeholder="E-Mail" required="required" data-error="E-mail id is required.">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="phone" id="phone" placeholder="Số điện thoại">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="table" id="table" class="selectpicker">
                                        <option value="0">Chọn loại bàn</option>
                                    <?php 
                                        foreach ($rs7 as $key => $val) {
                                    ?>
                                        <option value="<?php echo $val['ma_loai_ban'] ?>"><?php echo $val['ten_loai_ban'] ?></option>
                                        <?php 
                                        }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div id="data_table">
                                    <!-- ajax jQuery -->
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="date-picker" id="date-picker" placeholder="Ngày đặt bàn" required="required" data-error="Date is required." />
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="time-picker" id="time-picker" placeholder="Thời gian" required="required" data-error="Time is required." />
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">ĐẶT BÀN</button>
                                </div>
                            </div>
                            <!-- end col -->
                        </form>
                        <!-- end form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>