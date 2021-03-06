<div id="orta" class="sola">
	<h1 id="sayfa_baslik"><?php echo $baslik; ?></h1>
	<?php
		$information_type = config('information_types');
		$i = 0;
		foreach($information_detail as $id) {
			$i = $i+1;
			$bul = array( 
				'{Daynex_Resim_Url}',
				'{Daynex_Js_Url}',
				'{Daynex_Site_Url}',
				'{Daynex_Flash_Url}',
			);
			$degis = array(
				site_resim(),
				site_js(),
				site_url(),
				site_flash(),
			);
			echo '
				<a class="icerik sola" href="'. site_url(strtr($information_type[$id->type]['url'], array('{url}' => $id->seo))) .'">
					<span class="ic_baslik">'. character_limiter($id->title, 200) .'</span>
					<span class="ic_kisa">'. character_limiter(str_replace($bul, $degis, strip_tags($id->description)), 350) .'</span>
				</a>
			';
			if($i == 2) {
				$i = 0;
				echo '<div class="clear"></div>';
			}
		}
	?>
</div>