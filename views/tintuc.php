<?php include_once BASEPATH.'controllers/tintuc.php'; ?>
<div class="row">
	<div class="col-md-12">
<table class="table table-striped">
			<thead>
					<tr>
						<th>Tiêu Đề </th>
						<th>Hình Ảnh</th>
						<th>Nội Dung</th>
					</tr>
				</thead>
 <?php
				
				 $total_records = count($tongdong);
				
				 	$current_page =$p;
					
       				 $limit = 4;
					 $total_page = ceil($total_records / $limit);
					if ($current_page > $total_page){
						$current_page = $total_page;
					}
					else if ($current_page < 1){
						$current_page =1;
					}
									?>
                        <?php if ($list==NULL){ ?>
						<tr>
							<td colspan="15">Không Có Tin Tức </td>
						</tr>
					<?php }else { ?>
					<?php foreach ($list as $value): 
					$mota = explode('.',$value['noidung']);
					?>

                    <?php $a = explode('|', $value['hinhanh']);?>
						<tr>
                        
							<td><?=$value['tieude']?></td>
							<td><img width="150px" height="150px" src="admin/public/images/tintuc/<?=$a[0]?>"/>
                            </td>
							<td><?=$mota[0]. ".".$mota[1].".<br>"?><a href="<?=base_url."index.php?module=tintuc&action=chitiet&id=".$value['id_tintuc']?>">Xem Chi Tiet</a></td>
								</tr>
					<?php endforeach;?>
                    <?php }?>
				</tbody>
			</table>
		</div>
	</div>
            <?php
            if($total_records>4){ ?>
            <div  align="center">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG

            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
             if ($current_page > 1 && $total_page > 1){
                echo '<a href="index.php?module=tintuc&p='.($current_page-1).'">Prev</a>     &nbsp; ';
            }            
             //Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
               //  Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '  &nbsp;<span>'.$i.'</span>    &nbsp;  ';
                }
                else{
				   
                    echo '<a href="index.php?module=tintuc&p='.$i.'">'.$i.'</a>  ';
                }
            }
            
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?module=tintuc&p='.($current_page+1).' ">     &nbsp;Next</a> ';
				
            }		
			?>
           
        </div>
		<?php }?>