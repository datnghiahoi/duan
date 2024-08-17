<div class="primary_menu_wrap ega-bg--black ega-hidden--xs ega-hidden--sm ega-hidden--md ega-hidden--lg">
	<div class="ega-container">
		<div class="ega-row">
			<div class="ega-col-lg-3">
				<div class="vermega ega-pos--relative  template-other">
					<div class="vermega__header ega-base-color">
						<svg class="ega-ic-list">
							<use xlink:href="#ega-ic-list"></use>
						</svg> DANH MỤC SẢN PHẨM
					</div>
					<div class="vermega__content">
						<ul class="ega-ul ega-menu--ver ega-color--initial ega-m--0">

						<?php
                                foreach ($showdmNavBar as $item) {
                                    extract($item);
                                    echo '
                                        <li class="ega-menu--ver__item has-child ">
                                        <a class="verlink" href="?mod=pages&act=shop&id=' . $id_dm . '">
                                            <img src="views/images/' . $anhdm . '" title="ảnh danh mục">
                                            <span class="menu_title">' . $tendm . '</span>
                                            <div class="verlink-icon">
                                                <svg class="ega-ic-caret-right">
                                                ' . $tendm . '
                                                </svg>
                                            </div>
                                        </a>
                                    
                                    </li>
                                ';
                                }
                                ?>

							<!-- <li class="ega-menu--ver__item has-child ">
								<a class="verlink" href="collections/trang-diem">
									<img src="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/mega_coll_icon_4.png?1660045194993" title="mega_coll_icon_4.png">
									<span class="menu_title">Trang điểm</span>
									<div class="verlink-icon">
										<svg class="ega-ic-caret-right">
											
										</svg>
									</div>
								</a>
								
							</li> -->

							<!-- <li class="ega-menu--ver__item has-child ">
								<a class="verlink" href="collections/cham-soc-da">
									<img src="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/mega_coll_icon_3.png?1660045194993" title="mega_coll_icon_3.png">
									<span class="menu_title">Chăm sóc da</span>
									<div class="verlink-icon">
										<svg class="ega-ic-caret-right">
											
										</svg>
									</div>
								</a>
								
							</li>

							<li class="ega-menu--ver__item has-child ">
								<a class="verlink" href="collections/thuc-pham-chuc-nang">
									<img src="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/mega_coll_icon_1.png?1660045194993" title="mega_coll_icon_1.png">
									<span class="menu_title">Thực phẩm chức năng</span>
									<div class="verlink-icon">
										<svg class="ega-ic-caret-right">
											
										</svg>
									</div>
								</a>
								
							</li>

							<li class="ega-menu--ver__item has-child ">
								<a class="verlink" href="collections/thuc-pham-the-thao">
									<img src="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/mega_coll_icon_2.png?1660045194993" title="mega_coll_icon_2.png">
									<span class="menu_title">Thực phẩm thể thao</span>
									<div class="verlink-icon">
										<svg class="ega-ic-caret-right">
											
										</svg>
									</div>
								</a>
								
							</li>
							
							<li class="ega-menu--ver__item has-child ">
								<a class="verlink" href="collections/onsale">
									<img src="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/mega_coll_icon_promotion.png?1660045194993" alt="icon_promotion">
									<span class="menu_title">Sản phẩm khuyến mãi</span>
									<div class="verlink-icon">
										<svg class="ega-ic-caret-right">
											
										</svg>
									</div>
								</a>
							
							</li> -->

							

						</ul>




					</div>
				</div>
			</div>
			<div class="ega-col-lg-9 ega-p-l--0">

				<ul id="ega-main-menu" class="ega-menu ega-ul ega-m--0">


					<li class="ega-menu__item">
						<a class="ega-menu__link" href="index.php">Trang chủ</a>
					</li>



					<li class="ega-menu__item">
						<a class="ega-menu__link" href="?mod=pages&act=gioithieu">Giới thiệu</a>
					</li>




					<li class="ega-menu__item has-child">
						<a class="ega-menu__link" href="?mod=pages&act=tintuc">Chuyên mục khỏe đẹp <svg class="ega-ic-caret-down">
								<use xlink:href="#ega-ic-caret-down"></use>
							</svg></a>
						<ul class="ega-menu ega-ul ega-menu--vertical">

							<li class="ega-menu__item">
								<a class="ega-menu__link" href="/tin-tuc">Làm đẹp</a>
							</li>

							<li class="ega-menu__item">
								<a class="ega-menu__link" href="/tin-tuc">Kiến thức khỏe đẹp</a>
							</li>

							<li class="ega-menu__item">
								<a class="ega-menu__link" href="/tin-tuc">Mẹo hay sức khỏe</a>
							</li>

							<li class="ega-menu__item">
								<a class="ega-menu__link" href="/tin-tuc">Bài tập Yoga</a>
							</li>

						</ul>
					</li>

					<li class="ega-menu__item">
						<a class="ega-menu__link" href="/san-pham-khuyen-mai">Khuyến mãi</a>
					</li>


					<li class="mega-menu ega-menu__item has-child">

						<a class="ega-menu__link" href="?mod=pages&act=shop">Sản phẩm <svg class="ega-ic-caret-down">
								
							</svg></a>
						
					</li>


					<li class="ega-menu__item">
						<a class="ega-menu__link" href="/lien-he">Liên hệ</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>