<div class="container">
    <div class="col-md-3">
        <div style="color: white; background-color: #FF4B82; text-align: center; font-weight: bold; font-size: 20px">
            Danh mục sản phẩm
        </div>
        <div>
            <?php 
                include_once BASEPATH.'models/danhmucside_model.php';
                $danhmuc=$danhmucside_model->select_danhmuc();
                foreach ($danhmuc as $key => $value) {
            ?>
                <div style="font-size: 15px;padding-top: 10px; border-bottom: dotted 1px black;"><a href="<?=$value['dm_url']?>"><?=$value['name']?></a></div>
            <?php
                }
            ?>
        </div>
    </div>
    <div class="col-md-9">
        <?php foreach ($tendm as $value): ?>
            <div class="nhomsp" style="margin-top: 15px; margin-bottom: 15px; ">
                <div class="nhomsp_title" style="font-size: 20px;margin-bottom: 20px;">
                   <span style="padding:10px;border-top-left-radius: 20px; border-bottom-right-radius: 20px; background-color: #FF4B82;"><?=$value['name'] ?></span>
                </div>
                <div class="nhomsp_items" style="margin-bottom: 10px;">
                    <div class="row">
                        <?php foreach($spbydm as $v) : ?>
                                <div class="col-md-3">
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
                                        <span class="new_price"><?=number_format($v['giamoi']) ?></span>  
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
        
</div>