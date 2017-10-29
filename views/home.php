<!-- Slider Revolution Start -->
<div class="container">
    <div class="slideshow-container">
        <div class="mySlides slide_fade">
            <div class="numbertext">1 / 3</div>
            <img src="public/images/site/slider/slide2.jpg" />
            <div class="text">Sản phẩm 1</div>
        </div>
        <div class="mySlides slide_fade">
            <div class="numbertext">2 / 3</div>
            <img src="public/images/site/slider/slide3.jpg" />
            <div class="text">Sản phẩm 2</div>
        </div>
        <div class="mySlides slide_fade">
            <div class="numbertext">3 / 3</div>
            <img src="public/images/site/slider/slide4.jpg" />
            <div class="text">Sản phẩm 3</div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</div>
<div class="contrainer">
    <div class="spnb">
        <div class="spnb_title">
            Sản phẩm nổi bật
        </div>
        <div class="spnb_items">
            <div class="row">
                <?php foreach($spnb as $key=>$value) : ?>
                    
                    <div class="col-md-3">
                        <a href="<?=$value['url']?>">
                            <div class="spnb_image">
                                <img src="<?=$value['hinhanh']?>">
                            </div>
                            <div class="spnb_name">
                                <?=$value['ten'];?>
                            </div>
                        </a>
                        <div class="spnb_price">
                            <span class="old_price"><?=$value['giacu']?></span>
                            <span class="new_price"><?=$value['giamoi'] ?></span>  
                        </div>
                        <a href="#">
                            <div class="btn btn-default">
                                Thêm vào giỏ
                            </div>
                        </a>
                    </div>
                    
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>