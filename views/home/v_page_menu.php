 <!-- menu-bar -->
 <div class="primary_menu_wrap ega-bg--black ega-hidden--xs ega-hidden--sm ega-hidden--md ega-hidden--lg">
     <div class="ega-container">
         <div class="ega-row">
             <div class="ega-col-lg-3">
                 <div class="vermega ega-pos--relative template-index">
                     <div class="vermega__header ega-base-color">
                         <svg class="ega-ic-list">
                             <use xlink:href="#ega-ic-list"></use>
                         </svg> DANH MỤC SẢN PHẨM
                     </div>
                     <div class="vermega__content">
                         <ul class="ega-ul ega-menu--ver ega-color--initial ega-m--1">

                             <?php
                                foreach ($showdmHome as $item) {
                                    extract($item);
                                    echo '
                                        <li class="ega-menu--ver__item has-child ">
                                        <a class="verlink" href="?mod=pages&act=sptheodm&id=' . $id_dm . '">
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

                         </ul>
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

 <header class="ega-header ega-header--mobile ega-text--center ega-hidden--xl">
     <div class="ega-header__wrap">

         <a id="logo" title="" href="/">
             <span style="display: none"></span>
             <img src="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/logo.png?1660045194993" alt="Healthy-stuff">
         </a>
         <div class="ega-overlay"></div>
         <div id="ega-menu--mb" class="ega-hidden-lg ega-text--left">
             <a href="#menu-toggle" id="menu-toggle"><i></i></a>
             <form action="/search">
                 <input type="hidden" name="type" value="product">
                 <input type="text" name="q" class="ega-form__control" placeholder="Bạn muốn tìm gì...">
                 <button><svg class="ega-ic-search">
                         <use xlink:href="#ega-ic-search"></use>
                     </svg></button>
             </form>
             <ul class="ega-menu--tree ega-ul" data-style="ega-menu">


                 <li class="ega-menu--tree__item current"><a href="index.php">Trang chủ</a></li>



                 <li class="ega-menu--tree__item "><a href="?mod=pages&act=gioithieu">Giới thiệu</a></li>



                 <li class="ega-menu--tree__item has-child "><a href="/tin-tuc">Chuyên mục khỏe đẹp<span>+</span></a>
                     <ul class="ega-menu--tree ega-ul ega-p-l--2">


                         <li class="ega-menu--tree__item "><a href="/tin-tuc">
                                 <div>Làm đẹp</div>
                             </a></li>



                         <li class="ega-menu--tree__item "><a href="/tin-tuc">
                                 <div>Kiến thức khỏe đẹp</div>
                             </a></li>



                         <li class="ega-menu--tree__item "><a href="/tin-tuc">
                                 <div>Mẹo hay sức khỏe</div>
                             </a></li>



                         <li class="ega-menu--tree__item "><a href="/tin-tuc">
                                 <div>Bài tập Yoga</div>
                             </a></li>


                     </ul>
                 </li>



                 <li class="ega-menu--tree__item "><a href="/san-pham-khuyen-mai">Khuyến mãi</a></li>



                 <li class="ega-menu--tree__item has-child "><a href="/collections/all">Sản phẩm<span>+</span></a>
                     <ul class="ega-menu--tree ega-ul ega-p-l--2">


                         <li class="ega-menu--tree__item "><a href="/thuc-pham-chuc-nang">Thực phẩm chức
                                 năng<span>+</span></a>
                             <ul class="ega-menu--tree ega-ul ega-p-l--2">


                                 <li class="ega-menu--tree__item "><a href="/thuc-pham-chuc-nang">
                                         <div>Thực phẩm giảm cân</div>
                                     </a></li>



                                 <li class="ega-menu--tree__item "><a href="/thuc-pham-chuc-nang">
                                         <div>Tim mạch &amp; huyết áp</div>
                                     </a></li>



                                 <li class="ega-menu--tree__item "><a href="/thuc-pham-chuc-nang">
                                         <div>Giải độc gan</div>
                                     </a></li>


                             </ul>
                         </li>



                         <li class="ega-menu--tree__item "><a href="/thuc-pham-the-thao">Thực phẩm thể
                                 thao<span>+</span></a>
                             <ul class="ega-menu--tree ega-ul ega-p-l--2">


                                 <li class="ega-menu--tree__item "><a href="/thuc-pham-the-thao">
                                         <div>Tăng cân, nở cơ</div>
                                     </a></li>



                                 <li class="ega-menu--tree__item "><a href="/thuc-pham-the-thao">
                                         <div>Tăng cơ, giảm mở</div>
                                     </a></li>



                                 <li class="ega-menu--tree__item "><a href="/thuc-pham-the-thao">
                                         <div>Giảm mở, cắt nét</div>
                                     </a></li>


                             </ul>
                         </li>



                         <li class="ega-menu--tree__item "><a href="/thiet-bi-cham-soc-ca-nhan">Thiết bị chăm sóc cá
                                 nhân<span>+</span></a>
                             <ul class="ega-menu--tree ega-ul ega-p-l--2">


                                 <li class="ega-menu--tree__item "><a href="/cham-soc-da">
                                         <div>Bộ sản phẩm chăm sóc cơ thể</div>
                                     </a></li>



                                 <li class="ega-menu--tree__item "><a href="/trang-diem">
                                         <div>Chăm sóc răng miệng</div>
                                     </a></li>



                                 <li class="ega-menu--tree__item "><a href="/thiet-bi-cham-soc-ca-nhan">
                                         <div>Mẹ và bé</div>
                                     </a></li>



                                 <li class="ega-menu--tree__item "><a href="/thiet-bi-cham-soc-ca-nhan">
                                         <div>Thiết bị tập thể thao</div>
                                     </a></li>


                             </ul>
                         </li>


                     </ul>
                 </li>



                 <li class="ega-menu--tree__item "><a href="/lien-he">Liên hệ</a></li>


             </ul>
         </div>

         <script>
             $("#menu-toggle, .ega-overlay").click(function(e) {
                 e.preventDefault();
                 let $menu = $('#ega-menu--mb, .ega-overlay');
                 $menu.toggleClass("ega-show");
             });

             $('#ega-menu--mb ul a span').click(function(e) {
                 e.preventDefault();
                 $(this).parent().next().toggle(200);
                 if ($(this).text() == '+') {
                     $(this).text('-');
                 } else {
                     $(this).text('+');
                 }
             });
         </script>

         <div class="top-cart-mb">
             <div class="ega-top-cart" data-style="ega-top-cart">
                 <a href="/cart" id="ega-top-cart__trigger" class="ega-color--black">
                     <svg class="ega-ic-shopping-cart">
                         <use xlink:href="#ega-ic-shopping-cart"></use>
                     </svg>
                     <span class="ega-top-cart__qty">0</span>
                 </a>
                 <div class="ega-top-cart__content ega-text--left">

                     <div class="ega-top-cart__header ega-text--center">Chưa có sản phẩm trong giỏ!</div>
                     <div class="ega-top-cart__footer">
                         <div class="ega-top-cart__action ega-text--center">
                             <a class="ega-btn ega-btn--square ega-m--0 ega-border--0 ega-p-l--5 ega-p-r--5" href="/collections/all"><span class="text">VÀO CỬA HÀNG</span></a>
                         </div>
                     </div>

                 </div>
             </div>
             <div class="top-bar-mb ega-d--i-block">
                 <svg class="ega-ic-ellipsis-v">
                     <use xlink:href="#ega-ic-ellipsis-v"></use>
                 </svg>
             </div>
         </div>
         <div class="top-links ega-text--right">
             <div class="top-link">
                 <ul class="ega-ul ega-m--0">
                     <li class="top-link__contact">
                         <strong>Số điện thoại: <a href="tel:19001267">19001267</a></strong>
                     </li>
                     <li class="top-link__contact">
                         <strong>Email: <a href="mailto:support@egany.com">support@egany.com</a></strong>
                     </li>



                     <li><a href="/gioi-thieu">Giới thiệu</a></li>



                     <li><a href="#">Tuyển dụng</a></li>



                     <li><a href="/lien-he">Liên hệ</a></li>



                     <li><a href="/xmas">Landing page</a></li>



                     <li><a href="http://egany.com/dang-ki-nhan-qua-2016-tu-egany">Quà tặng 2016</a></li>




                     <li><a href="?mod=users&act=login">Đăng nhập / Đăng ký</a></li>

                 </ul>
             </div>
         </div>
     </div>
 </header>

 <script>
     $(document).ready(function() {
         let $topCart = $('.ega-top-cart');
         $(".ega-header--mobile #ega-top-cart__trigger").click(function(e) {
             if ($(window).width() <= 1024) {
                 $topCart.toggleClass('ega-top-cart--open');
                 e.stopPropagation();
                 e.preventDefault();
             }
         });

         $('.top-bar-mb').click(function(e) {
             e.stopPropagation();
             e.preventDefault();
             let $toplinks = $(this).parents('.ega-header').find('.top-links');
             $toplinks.toggle();
         })
     })
 </script>
 <!-- menu-bar -->