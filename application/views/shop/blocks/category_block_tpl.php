<?php
	function printChildren($arr, $level = 0, $vars = []) {

		$obj = &get_instance();
		extract($vars, EXTR_OVERWRITE);

		$this_level = '';

		if ($level > 0 && count($arr) >0) {
			$this_level .= "<ul>\n";
		}

		foreach ($arr as $item => $key) {
			$this_level .= '<li><a href="'.site_url('shop/catalog/index/'. $obj->category_model->get_category_slug($item));
			$this_level .= '" >' . $obj->category_model->get_category_name($item)."</a>\n";
		}

		if ($level > 0 && count($arr) > 0) {
			$this_level .= "</li>\n";
			$this_level .= "</ul>\n";
		}

		return $this_level;
	}


	function printOptions($arr, $category_id, $level = 0, $vars = []) {
		$obj = &get_instance();

		$parent = [];
		$children = [];
		$current = null;
		$item = null;

		extract($vars, EXTR_OVERWRITE);

		$this_level = '';

		if ($level > 0 && count($arr) >0) {
			$this_level .= "<ul id='ul$level$category_id'>\n";
		}

		foreach ($arr as $item => $key){
			if(count($parent) > 0 && $parent[0] === $item) {
				foreach($parent as $cur_parent) {
					$this_level .= "<ul>\n";
					$this_level .= '<li><a href="' .site_url('shop/catalog/index/'. $obj->category_model->get_category_slug($cur_parent));
					$this_level .= ' ">' .$obj->category_model->get_category_name($cur_parent) . "</a>\n";
					$this_level .= "</li>\n";
					$this_level .= "</ul>\n";
				}
				$this_level .= '<li><a href="' .site_url('shop/catalog/index/'. $obj->category_model->get_category_slug($current));
				$this_level .= ' ">' .$obj->category_model->get_category_name($current) . "</a>\n";
				$this_level .= printChildren($children, 0, $vars);
				$this_level .= "</li>\n";
			}
			elseif($current === $item) {
				$this_level .= '<li><a href="' .site_url('shop/catalog/index/'. $obj->category_model->get_category_slug($current));
				$this_level .= ' ">' .$obj->category_model->get_category_name($current) . "</a>\n";
				$this_level .= printChildren($children, 0, $vars);
				$this_level .= "</li>\n";
			}
			else {
				$this_level .= '<li><a href="' .site_url('shop/catalog/index/'. $obj->category_model->get_category_slug($item));
				$this_level .= '" >' .$obj->category_model->get_category_name($item) . "</a>\n";
			}
			$this_level .= "</li>\n";

		}

		if ($level > 0 && count($arr) >0) {
			$this_level .= "</li>\n";
			$this_level .= "</ul>\n";
		}

		return $this_level;
	}
?>
<div class="box_top">
	<h2><?= $this->lang->line('main_categories') ?></h2>
</div>
<div class="box">
	<div class="menu">
		<ul>
			<li><a href="<?= site_url('shop/catalog/') ?>"><?= $this->lang->line('main_all') ?></a></li>
			<?= printOptions($categories_arr ?? [], 0, 0, compact('current', 'parent', 'children')) ?>
		</ul>
	</div>
</div>
<div class="box_bottom"></div>
