<div class="container">
    <?php foreach ($tendm as $value): ?>
        <div class="nhomsp" style="margin-top: 15px; margin-bottom: 15px; ">
            <div class="nhomsp_title" style="font-size: 20px;">
               <span style="padding:10px;border-top-left-radius: 20px; border-bottom-right-radius: 20px; background-color: #FF4B82;"><?=$value['name'] ?></span>
            </div>
            <div class="nhomsp_items">
                <div class="row">
                    <?php foreach($spbydm as $v) : ?>
                            <div class="col-md-3">
                                <a href="<?=base_url?>index.php?module=sanpham&id=<?=$v['id']?>">
                                    <div class="sp_image">
                                        <img src="<?=$v['hinhanh']?>">
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
        </div>
    <?php endforeach ;?>
</div>