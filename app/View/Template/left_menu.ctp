<!-- START X-NAVIGATION -->
<ul class="x-navigation">
    <li class="xn-logo">
        <a href="index-dashboard.html"></a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile">
        <a href="#" class="profile-mini">
            <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
        </a>
        <div class="profile">
            <div class="profile-image">
                <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
            </div>
            <div class="profile-data">
                <div class="profile-data-name">TNI ADMINISTRATOR</div>
                <div class="profile-data-title">Superadmin</div>
            </div>
            <div class="profile-controls">
                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
            </div>
        </div>
    </li>
    <li class="xn-title">Main Menu</li>
    <li class="active">
        <a href="index-dashboard.html"><span class="fa fa-desktop"></span> <span class="xn-text">Beranda</span></a>
    </li>
    <li class="xn-openable">
        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Data Form Studi</span></a>
        <ul>
            <li><a href="list-form-studi.html"><span class="fa fa-list"></span> List Pendidikan</a></li>
            <li><a href="form-pendidikan.html"><span class="fa fa-edit"></span> Tambah Pendidikan</a></li>
        </ul>
    </li>
    <li class="xn-openable">
        <a href="#"><span class="fa fa-file-o"></span> <span class="xn-text">Data Program Studi</span></a>
        <ul>
            <li><a href="list-program-studi.html"><span class="fa fa-list"></span> List Program Pendidikan</a></li>
            <li><a href="form-program-pendidikan.html"><span class="fa fa-edit"></span> Tambah Program Pendidikan</a></li>
        </ul>
    </li>
    <li class="xn-openable">
        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Data Personel</span></a>
        <ul>
            <li><a href="list-personel.html"><span class="fa fa-list"></span> List Personel</a></li>
            <li><a href="form-personel.html"><span class="fa fa-edit"></span> Tambah Personel</a></li>
        </ul>
    </li>
    <li class="xn-openable">
        <a href="#"><span class="fa fa-map-marker"></span> <span class="xn-text">Data Lokasi Studi</span></a>
        <ul>
            <li><a href="#"><span class="fa fa-list"></span> List Lokasi Studi</a></li>
            <li><a href="#"><span class="fa fa-edit"></span> Tambah Lokasi Studi</a></li>
        </ul>
    </li>
    <li class="xn-openable">
        <a href="#"><span class="fa fa-book"></span> <span class="xn-text">Berita</span></a>
        <ul>
            <li><a href="#"><span class="fa fa-list"></span> List Berita</a></li>
            <li><a href="#"><span class="fa fa-edit"></span> Tambah Berita</a></li>
        </ul>
    </li>
    <li class="xn-openable">
        <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Lain-Lain</span></a>
        <ul>
            <li><a href="#"><span class="fa fa-list"></span> List Pangkat</a></li>
            <li><a href="#"><span class="fa fa-list"></span> Tambah Korps</a></li>
            <li><a href="#"><span class="fa fa-list"></span> Tambah Matra</a></li>
        </ul>
    </li>
    <li class="xn-openable">
        <a href="#"><span class="fa fa-gear"></span> <span class="xn-text">Setting</span></a>
        <ul>
            <li><a href="#"><span class="fa fa-list"></span> List Administrator</a></li>
        </ul>
    </li>
</ul>
<!-- END X-NAVIGATION -->

<!--ul id="menu" class="nav">
    <?php /*foreach($menu as $menu):
		$current	=	($menu["CmsMenu"]["id"] == $lft_menu_category_id ) ? "active" : "";
		$expand		=	(!empty($menu["CmsSubmenu"])) ? " exp " : "";
	?>
		<li class="<?php echo $menu["CmsMenu"]["class"]?>">

			<a href="<?php echo $this->webroot . $menu["CmsMenu"]["url"]?>" title="<?php echo $menu["CmsMenu"]["name"]?>" class="<?php echo $current.$expand?>"><span><?php echo $menu["CmsMenu"]["name"]?></span>
				<?php
					if(!empty($menu["CmsSubmenu"])) {
						echo "<strong>".count($menu['CmsSubmenu'])."</strong>";
					}
				*/?>
			</a>

			<?php /*if(!empty($menu["CmsSubmenu"])):?>
				<ul class="sub">
					<?php foreach($menu["CmsSubmenu"] as $Submenu):?>
						<li class="last">
							<a href="<?php echo $this->webroot . $Submenu["url"]?>" title="<?php echo $Submenu["name"]?>"><?php echo $Submenu["name"]?><strong></strong></a>
						</li>
					<?php endforeach;?>
				</ul>
			<?php endif;?>
		</li>
	<?php endforeach;*/?>
</ul-->
