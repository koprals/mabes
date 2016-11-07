<?php foreach($menu as $menu):
  $current	=	($menu["CmsMenu"]["id"] == $lft_menu_category_id ) ? "active" : "";
  $expand		=	(!empty($menu["CmsSubmenu"])) ? " xn-openable " : "";
  $current  = ($menu["CmsMenu"]["id"] == $lft_menu_category_id ) ? "current" : "";
?>
  <li class="<?php echo $current.$expand?>">
      <a href="<?php echo $this->webroot . $menu["CmsMenu"]["url"]?>" id="<?php echo $current; ?>"><span class="<?php echo $menu["CmsMenu"]["class"]?>"></span>
        <span class="xn-text"><?php echo $menu["CmsMenu"]["name"]; ?></span>
      </a>
      <?php debug($menu["CmsSubmenu"]);?>
      <?php if(!empty($menu["CmsSubmenu"])):?>
				<ul>
					<?php foreach($menu["CmsSubmenu"] as $Submenu):?>
						<li>
							<a href="<?php echo $this->webroot.$Submenu["url"]?>"><span class="<?php echo $Submenu["class"]?>"></span> <?php echo $Submenu["name"]?></a>
						</li>
					<?php endforeach;?>
				</ul>
			<?php endif;?>
		</li>
	<?php endforeach;?>
