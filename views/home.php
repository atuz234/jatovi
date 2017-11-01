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
<?php
				
				 $total_records = count($tongdong);
				
				 	$current_page =$p;
					
       				 $limit = 2;
					 $total_page = ceil($total_records / $limit);
					if ($current_page > $total_page){
						$current_page = $total_page;
					}
					else if ($current_page < 1){
						$current_page =1;
					}
									?>
<div class="contrainer">
    <div class="spnb">
        <div class="spnb_title">
            Sản phẩm nổi bật
        </div>
        <div class="spnb_items">
            <div class="row">
            <?php if ($spnb==NULL){ echo "Không Có Sản Phẩm Bạn Tìm Kiếm"; ?>
					<?php }else { ?>
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
                        <a href="<?=base_url."index.php?module=giohang&action=themsp&id=".$value['id']?>">
                            <div class="btn btn-default">
                                Thêm vào giỏ
                            </div>
                        </a>
                    </div>
                    
                <?php endforeach; ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
 <?php
            if($total_records>2){ ?>
            <div  align="center">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG

            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
             if ($current_page > 1 && $total_page > 1){
                echo '<a href="index.php?module=quanlytintuc&action=timkiem&search='.$search.'&p='.($current_page-1).'">Prev</a>     &nbsp; ';
            }            
             //Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
               //  Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '  &nbsp;<span>'.$i.'</span>    &nbsp;  ';
                }
                else{
				   
                    echo '<a href="index.php?module=quanlytintuc&action=timkiem&search='.$search.'&p='.$i.'">'.$i.'</a>  ';
                }
            }
            
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?module=quanlytintuc&action=timkiem&search='.$search.'&p='.($current_page+1).' ">     &nbsp;Next</a> ';
				
            }		
			?>
           
        </div>
		<?php }?>