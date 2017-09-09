<?php 
	include_once BASEPATH.'models/phanquyen.php';
	$phanquyen = new phanquyen();
	$chucnang = $phanquyen->getrole($_SESSION['userID']);
	$menu = array();
	foreach ($chucnang as $p) {
		if ($p['id_parent']==0) {
			$child=array();
			foreach ($chucnang as $p2) {
				if ($p2['id_parent']==$p['id']) {
					$child[]=$p2;
				}
			}
			$menu[]=array(
				'parent'=>$p,
				'child'=>$child
			);
		}
	}
?>
<nav class="sidenav" id="mySidenav">
	<h3>Chức Năng</h3>
	<?php foreach($menu as $value): ?>
		<ul class="sidenav">
			<li>
				<a>
					<i class="<?=$value['parent']['icon']?>"></i>
					<?php echo $value['parent']['ten']; ?>
					<span class="fa fa-chevron-down"></span>
				</a>
				<ul>
					<?php foreach($value['child'] as $child): ?>
						<li class="<?=$child['hienthi']==0?"hidden":""?>">
							<a href="<?=base_url.$child['url']?>">
								<?=$child['ten']?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</li>
		</ul>
	<?php endforeach; ?>
</nav>
