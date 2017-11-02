<script>
	function camon(){
		alert("Cảm Ơn Bạn Đã Giúp Chúng Tôi Phát Triển !");
		document.getElementById("feedback-form").submit();		
		}
</script>
 <section id="contact" >
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="text-center text-white">
                                <h2>
                                    Liên hệ với chúng tôi
                                </h2>
                                <p>
                                    Hãy liên hệ trực tiếp với chúng tôi để được hỗ trợ tốt nhất
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <form id="feedback-form" action="<?=base_url."index.php?module=lienhe&action=them"?>" method="post">
                                    <div class="row">
                                        <div class="col-md-6  wow fadeInRightBig">
                                            <input type="text" name="ten" class="formcontrol" placeholder="Họ tên" style="width: 100%;">
                                        </div>
                                        <div class="col-md-6  wow fadeInLeftBig" >
                                            <input type="text" name="email" class="formcontrol" placeholder="Địa chỉ Email" style="width: 100%;">
                                        </div>
                                    </div>
                                    <div class="form-group  wow fadeInUpBig">
                                        <input type="text" name="tieude" class="formcontrol" placeholder="Tiêu đề" style="width: 100%; margin-top:10px; ">
                                    </div>
                                    <div class="form-group  wow fadeInUp">
                                        <textarea name="noidung" id="message" class="formcontrol" placeholder="Phản hồi của bạn"></textarea>
                                    </div>
                                    <div class="form-group  wow fadeInDownBig">
                                        <button type="button" onclick="camon()" class="btn-submit">Gửi</button>
                                    </div>
                                </form>
								</div>
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <p></p>
                                    <ul class="address">
                                        <li>
                                            <i class="fa fa-map-marker">
                                                <span>
                                                    Địa chỉ:
                                                </span>
                                              ITPlus Academy, 1 Hoàng Đạo Thúy, Trung Hòa Nhân Chính, Nhân Chính, Thanh Xuân, Hà Nội, Việt Nam
                                            </i>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone">
                                                <span>
                                                    Điện thoại:
                                                </span>
                                                0964 474 680
                                            </i>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope">
                                                <span>
                                                    Email:
                                                </span>
                                                <a href="#">
                                                    Support_jatovi@gmail.com
                                                </a>
                                            </i>
                                        </li>
                                        <li>
                                            <i class="fa fa-globe">
                                                <span>
                                                    Website:
                                                </span>
                                                <a href="#">
                                                    www.jatovi.com
                                                </a>
                                            </i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>