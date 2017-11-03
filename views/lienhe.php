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
                                <input type="text" name="ten" class="formcontrol" placeholder="Họ tên" style="width: 100%;" required="required">
                            </div>
                            <div class="col-md-6  wow fadeInLeftBig" >
                                <input type="text" name="email" class="formcontrol" placeholder="Địa chỉ Email" style="width: 100%;" required="required">
                            </div>
                        </div>
                        <div class="form-group  wow fadeInUpBig">
                            <input type="text" name="tieude" class="formcontrol" placeholder="Tiêu đề" style="width: 100%; margin-top:10px; ">
                        </div>
                        <div class="form-group  wow fadeInUp">
                            <textarea name="noidung" id="message" class="formcontrol" placeholder="Phản hồi của bạn" required="required"></textarea>
                        </div>
                        <div class="form-group  wow fadeInDownBig">
                            <button type="submit" class="btn-submit">Gửi</button>
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
                        <iframe
  width="600"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6690368481177!2d105.80255191549104!3d21.005899893932803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca21ce102a9%3A0x471dbfe615777d0d!2zVHJ1bmcgdMOibSDEkMOgbyB04bqhbyBDTlRUIC0gU-G7nyBUVFRUIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1509649100653" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
</iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>