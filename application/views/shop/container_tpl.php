<?php
	$navigation = ['main_home' => 'shop/home', 'main_catalog' => 'shop/catalog', 'main_news' => 'shop/news', 'main_contact' => 'shop/contact'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="description" content="<?= $this->lang->line('main_meta_description') ?>" />
	<meta name="keywords" content="<?= $this->lang->line('main_meta_keywords') ?><?= isset($meta_keywords) ? ', ' . $meta_keywords : '' ?>" />
	<meta name="robots" content="index,follow" />
	<link rel="stylesheet" href="<?= base_url() ?>theme/default/style.css" type="text/css" />
	<link href="<?= base_url() ?>assets/fontawesome/css/all.css" rel="stylesheet">
	<title><?php if (isset($pagename) && $this->lang->line($pagename)) {echo $this->lang->line($pagename) . ' - ';} if ( ! empty($title)) {echo $title . ' - ';} ?>SimpleCiShop</title>
	<?= $scripts ?? '' ?>
</head>
<body>
	<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
	<div class="content">
		<div class="header">
			<div style="clear: both;"></div>
			<div class="sf_right">
				<div id="logo"><a href="<?= site_url() ?>">SimpleCiShop</a></div>
				<div id="slogan"><?= $this->lang->line('main_slogan') ?></div>
			</div>
		</div>
		<div class="bottom">
			<div style="clear: both;"></div>
			<div id="content-float-holder">
				<div id="center-wrap">
					<div id="center">
						<div id="center_contents"><div id="center_contents_leftbg"><?= $contents ?? '' ?></div></div>
					</div>
				</div>
				<div id="right">
					<?= $blocks_right ?? '' ?>
					<?php $this->load->view('shop/blocks/random_product_tpl'); ?>
					<div style="text-align:center;">
						<a href="https://nikospapagiannopoulos.com">
							<span class="fa-stack fa-2x">
								<i class="fas fa-certificate fa-stack-2x"></i>
								<span class="fas fa-stack-1x" style="color: white; font-size: .5em">Blog</span>
							</span>
						</a>
					</div>
				</div>
				<div id="left">
					<?= $blocks_left ?? '' ?>
					<?php $this->load->view('shop/blocks/'.$this->language_library->get_language().'/home_tpl'); ?>
				</div>
			</div>
			<div style="clear: both;"></div>
		</div>
		<div class="header_bottom"></div>
		<div class="footer">
			<p>&copy; Copyright <?= date ('Y') ?> SimpleCiShop</p>
		</div>
	</div>
</body>
</html>
