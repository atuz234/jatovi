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
<div class="container">
    <?php foreach ($nhomsp as $key => $value): ?>
        <div class="nhomsp" >
            <div class="nhomsp_title">
               <span><?=$key ?></span>
            </div>
            <div class="nhomsp_items">
                <div class="row">
                    <?php foreach($value as $v) : ?>
                            <div class="col-md-3" style="margin-top: 15px; margin-bottom: 15px;">
                                <a href="<?=base_url?>index.php?module=sanpham&id=<?=$v['id']?>">
                                    <div class="sp_image">
                                        <img src="public/images/sanpham/<?=$v['hinhanh']?>">
                                    </div>
                                    <div class="sp_name">
                                        <?=$v['ten'];?>
                                    </div>
                                </a>
                                <div class="sp_price">
                                    <span class="old_price"><?=number_format($v['giacu'])?></span>
                                    <span class="new_price" style="font-size: 18px;"><?=number_format($v['giamoi']) ?></span>  
                                </div>
                                <a href="<?=base_url."index.php?module=giohang&action=themsp&id=".$v['id']?>">
                                    <div class="btn btn-default">
                                        Thêm vào giỏ
                                    </div>
                                </a>
                            </div>
                    <?php endforeach; ?>
                </div> 
            </div>
        </div>
    <?php endforeach ;?>
</div>
