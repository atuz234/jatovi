<?php include_once BASEPATH.'controllers/tintuc.php'; ?>
 <?php
				
				 $total_records = count($tongdong);
				
				 	$current_page =$p;
					
       				 $limit = 8;
					 $total_page = ceil($total_records / $limit);

					if ($current_page > $total_page){
						$current_page = $total_page;
					} 
					else if ($current_page < 1){
						$current_page =1;
					}
									?>
                    <?php if ($list==NULL){ ?>
							<center><h3>Không có sản phẩm bạn cần tìm. </h3></center>
                            <br>
                            <br>
					<?php }else{ ?>
					<div class="nhomsp_items">
                        <div class="row">
                            <?php foreach($list as $v) : ?>
                                    <div class="col-md-3">
                                        <a href="<?=base_url?>index.php?module=sanpham&id=<?=$v['id']?>">
                                            <div class="sp_image">
                                                <img src="public/images/sanpham/<?=$v['hinhanh']?>" width="130px" height="170px" >
                                            </div>
                                            <div class="sp_name">
            
                                                <?=$v['ten'];?>
                                            </div>
                                        </a>
                                        <div class="sp_price">
                                            <span class="old_price"><?=$v['giacu']?></span>
                                            <span class="new_price"><?=$v['giamoi'] ?></span>  
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
                    <?php }?>
            <?php
            if($total_records>8){ ?>
            <div  align="center">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG

            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
             if ($current_page > 1 && $total_page > 1){
                echo '<a href="index.php?module=timkiem&action=timkiem&search='.$search.'&p='.($current_page-1).'">Prev</a>     &nbsp; ';
            }            
             //Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
               //  Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '  &nbsp;<span>'.$i.'</span>    &nbsp;  ';
                }
                else{
				   
                    echo '<a href="index.php?module=timkiem&action=timkiem&search='.$search.'&p='.$i.'">'.$i.'</a>  ';
                }
            }
            
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?module=timkiem&action=timkiem&search='.$search.'&p='.($current_page+1).' ">     &nbsp;Next</a> ';
				
            }		
			?>
           
        </div>
		<?php }?>