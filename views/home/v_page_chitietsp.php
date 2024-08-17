<?php include 'v_page_header.php' ?>
<?php include 'v_page_navBar.php' ?>


<!-- section -->
<section id="ega-breadcrumb" class="ega-p-t--3 ega-p-b--3">
    <div class="ega-container">
        <ul class="ega-menu ega-ul ega-menu--breadcrumb ega-m--0">
            <li class="ega-menu__item"><a href="index.php">Trang chủ</a></li>
            <li class="ega-menu__item"><a href="">Chi tiết sản phẩm</a></li>
        </ul>
    </div>
</section>
<!-- section -->

<!-- style -->

<link href="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/bootstrap.css?1660045194993" rel="stylesheet" type="text/css" media="all">

<link href="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/slick.css?1660045194993" rel="stylesheet" type="text/css" media="all">

<link href="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/jgrowl.css?1660045194993" rel="stylesheet" type="text/css" media="all">

<link href="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/styles.scss.css?1660045194993" rel="stylesheet" type="text/css" media="all">

<link href="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/healthy-food.scss.css?1660045194993" rel="stylesheet" type="text/css" media="all">

<link href="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/custom_styles.scss.css?1660045194993" rel="stylesheet" type="text/css" media="all">




<!-- style -->

<!-- detail -->
<div id="chitietsp">

    <?php
    if ($chitietsp == 0) {
        echo 'ko có sp';
    } else {
        $id_sp = $chitietsp['id_sp'];
        $anhsp = $chitietsp['anhsp'];
        $tensp = $chitietsp['tensp'];
        $giasp = $chitietsp['giasp'];


    ?>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="product-page">
                        <div class="single-product">
                            <form action="index.php?mod=pages&act=addcart" method="post" enctype="multipart/form-data" id="ProductDetailsForm">
                                <div class="product">
                                    <div style="margin-bottom: 25px;">
                                        <div class="col-md-6 noleftpadding">
                                            <div class="product-image product-main-image">
                                                <div class="slider-wrap">

                                                    <div class="pd_slide col-sm-10 nopadding slick-initialized slick-slider">

                                                        <div aria-live="polite" class="slick-list draggable">
                                                            <div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 463px;" tabindex="-1" role="option" aria-describedby="slick-slide00">
                                                                <div class="img">

                                                                    <img src="views/images/<?= $anhsp ?>" alt="sản phẩm" width="500px">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div id="extwaiokist" style="display:none" v="fcoon" q="3d7c89d9" c="186.8" i="193" u="2.326" s="03292422" sg="svr_09102316-ga_03292422-bai_03202416" d="1" w="false" e="" a="2" m="BMe=" vn="3gtra">
                                                        <div id="extwaigglbit" style="display:none" v="fcoon" q="3d7c89d9" c="186.8" i="193" u="2.326" s="03292422" sg="svr_09102316-ga_03292422-bai_03202416" d="1" w="false" e="" a="2" m="BMe="></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 norightpadding pd_desc_wrapper">
                                            <div class="product-desc fix-view">
                                                <div class="page_title">
                                                    <h2><?= $tensp ?></h2>
                                                </div>
                                                <div class="pd_sale_wrapper">
                                                    <div class="product-price col-sm-12 col-md-6 noleftpadding">
                                                        <ins><?= $giasp ?></ins> 
                                                        
                                                        <h4>Số lượng:</h4>
                                                        <div class="">

                                                            <input type="number" id="product_quantity" name="slsp" value="1" min="1" max="50">

                                                            <!-- <input type="button" class="desc-btn fleft minus" value="-"> -->

                                                            <!-- <input type="button" class="asc-btn fleft plus" value="+"> -->
                                                        </div>
                                                    </div>



                                                    <input type="submit" data-role="addtocart" name="addcart" value="THÊM VÀO GIỎ" class="add-to-cart addtocart button pdpage nomargin col-xs-12 col-md-7 nopadding">
                                                    <!-- <svg class="ega-ic-user">
                                                        <use xlink:href="#ega-ic-shopping-cart"></use>
                                                        </svg>  -->
                                                    <div class="ab_quantitybreak_infor" style="display: none;"></div>
                                                    <div id="bizweb-qty-msg" style="display: none;"></div>

                                                    <input type="submit" data-role="buynow" name="addcart" value="MUA NGAY" class="button col-xs-7 nopadding buynow">
                                                    <!-- <svg class="ega-ic-credit-card">
                                                            <use xlink:href="#ega-ic-credit-card"></use>
                                                        </svg> MUA NGAY -->

                                                </div>
                                                <div class="clear"></div>

                                                <input type="hidden" value="<?= $id_sp ?>" name="id_sp">
                                                <input type="hidden" value="<?= $anhsp ?>" name="anhsp">
                                                <input type="hidden" value="<?= $tensp ?>" name="tensp">
                                                <input type="hidden" value="<?= $giasp ?>" name="giasp">

                                                <div class="pd_policies_wrapper">

                                                    <div class="clear hidden-sm"></div>
                                                    <div class="line hidden-sm"></div>
                                                    <div class="pd_policies style_2">
                                                        <h2>
                                                            Bộ sản phẩm chuẩn
                                                        </h2>
                                                        <ul class="unstyled">

                                                            <li class="" data-toggle="tooltip" data-placement="top" title="Sản phẩm bảo hành 1 năm, phụ kiện kèm theo bảo hành 6 tháng">
                                                                <img src="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/pd_policies_1.png?1660045194993">
                                                                Thùng gồm có: <b>Sách hướng dẫn, phụ kiện</b>
                                                            </li>




                                                            <li class="" data-toggle="tooltip" data-placement="top" title="Dùng thử sản phẩm 7 ngày, nếu không ưng ý bạn sẽ đổi hoặc trả sản phẩm mà không tốn phí">
                                                                <img src="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/pd_policies_2.png?1660045194993">
                                                                Bảo hành chính hãng: <b>Sản phẩm bảo hành 1 năm, phụ kiện kèm
                                                                    theo bảo hành 6 tháng</b> <a href="/bao-hanh" title="Xem chi tiết thông tin bảo hành">(xem điểm bảo
                                                                    hành)</a>
                                                            </li>


                                                            <li class="" data-toggle="tooltip" data-placement="top" title="Thanh toán khi nhận hàng, thanh toán online hoặc tại cửa hàng bất kì">
                                                                <img src="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/pd_policies_3.png?1660045194993">
                                                                Nhận hàng miễn phí <b>48 tiếng</b> <a href="/giao-hang" target="_blank">(xem chính sách giao hàng toàn quốc)</a>
                                                            </li>

                                                            <li class="" data-toggle="tooltip" data-placement="top" title="Để lại số điện thoại, chúng tôi sẽ gọi lại bạn trong vòng 5 phút">
                                                                <img src="//bizweb.dktcdn.net/100/093/224/themes/799083/assets/pd_policies_4.png?1660045194993">
                                                                Đổi sản phẩm lỗi miễn phí trong <b>1 tháng.</b>
                                                            </li>


                                                        </ul>
                                                    </div>


                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </form>
                            <div class="clear"></div>
                          
                            <!-- <div class="col-md-8 nopadding" style="margin-top: 30px;">
                                <div class="pd_description tabs clearfix nobottommargin  ui-tabs ui-widget ui-widget-content ui-corner-all" id="tab-1">



                                    <ul class="tab-nav clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                                        <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><span class=""> MÔ TẢ</span></a></li>

                                    </ul>

                                    <div class="tab-container">
                                        <div class="tab-content clearfix  ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-1" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
                                            <div id="ega-uti-editable-content" data-platform="sapo" data-id="5343547">
                                                <p>Thỏa thích làm điệu cùng Sơn Móng Tay Revlon Nail Enamel</p>
                                                <p>- Nhiều màu sắc đa dạng, không gây hư tổn móng</p>
                                                <p>- Thương hiệu nổi tiếng của Mỹ.</p>
                                                <p>- Sơn móng tay Revlon Nail Enamel là thương hiệu nổi tiếng của Mỹ, được hàng
                                                    triệu phụ nữ khắp nơi trên thế giới tin dùng.</p>
                                                <p>- Sơn có 5 mã màu: 020 Pure Pearl, 440 Siren, 925 Gold Coin, 271 Extravagant,
                                                    571 Posh, tha hồ để bạn lựa chọn theo sở thích.</p>
                                                <p>- Màu sắc tươi tắn, nổi bật, phù hợp với xu hướng nail đang thịnh hành.</p>
                                                <p>- Lâu bong tróc. Đặc biệt không gây vàng, khô, gẫy móng.</p>
                                            </div>
                                        </div>
                                        <div class="tab-content clearfix  ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-2" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true" style="display: none;">

                                            <div id="fb-root" class=" fb_reset">
                                                <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                                                    <div></div>
                                                </div>
                                            </div>


                                            <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="http://healthy-food-1.mysapo.net/son-mong-tay-revlon" data-numposts="1" width="100%" data-colorscheme="light" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;color_scheme=light&amp;container_width=0&amp;height=100&amp;href=http%3A%2F%2Fhealthy-food-1.mysapo.net%2Fson-mong-tay-revlon&amp;locale=vi_VN&amp;numposts=1&amp;sdk=joey&amp;version=v2.0&amp;width=" style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 0px;"><iframe name="fb02e82158c8d4482" width="1000px" height="100px" data-testid="fb:comments Facebook Social Plugin" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.0/plugins/comments.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dffd79ede4764cee7b%26domain%3Dhealthy-food-1.mysapo.net%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fhealthy-food-1.mysapo.net%252Ff61e97726f5c35de3%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=0&amp;height=100&amp;href=http%3A%2F%2Fhealthy-food-1.mysapo.net%2Fson-mong-tay-revlon&amp;locale=vi_VN&amp;numposts=1&amp;sdk=joey&amp;version=v2.0&amp;width=" style="border: none; visibility: visible; width: 100%; height: 0px;" class=""></iframe></span></div>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel-group hidden-lg hidden-sm hidden-xs hidden-md pd_description" id="accordion">
                                    <div class="panel panel-default ">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="width: 100%; display: block;">
                                                    <i class="fa fa-align-justify"></i><span class=""> Mô tả</span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <p>Thỏa thích làm điệu cùng Sơn Móng Tay Revlon Nail Enamel</p>
                                                <p>- Nhiều màu sắc đa dạng, không gây hư tổn móng</p>
                                                <p>- Thương hiệu nổi tiếng của Mỹ.</p>
                                                <p>- Sơn móng tay Revlon Nail Enamel là thương hiệu nổi tiếng của Mỹ, được hàng
                                                    triệu phụ nữ khắp nơi trên thế giới tin dùng.</p>
                                                <p>- Sơn có 5 mã màu: 020 Pure Pearl, 440 Siren, 925 Gold Coin, 271 Extravagant,
                                                    571 Posh, tha hồ để bạn lựa chọn theo sở thích.</p>
                                                <p>- Màu sắc tươi tắn, nổi bật, phù hợp với xu hướng nail đang thịnh hành.</p>
                                                <p>- Lâu bong tróc. Đặc biệt không gây vàng, khô, gẫy móng.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default ">
                                        <div class="panel-heading" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a style="width: 100%; display:block;" class="collapsed" data-toggle="collapse" href="#collapseTwo">
                                                    <i class="icon-info-sign"></i><span class=""> Bình luận</span>
                                                </a>
                                            </h4>
                                        </div>

                                        <div id="collapseTwo" class="panel-collapse collapse in " role="tabpanel">
                                            <div class="panel-body">
                                                <div id="fb-root"></div>


                                                <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="http://healthy-food-1.mysapo.net/son-mong-tay-revlon" data-numposts="1" width="100%" data-colorscheme="light" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;color_scheme=light&amp;container_width=0&amp;height=100&amp;href=http%3A%2F%2Fhealthy-food-1.mysapo.net%2Fson-mong-tay-revlon&amp;locale=vi_VN&amp;numposts=1&amp;sdk=joey&amp;version=v2.0&amp;width=" style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 0px;"><iframe name="f18b6a86a2ae537b8" width="1000px" height="100px" data-testid="fb:comments Facebook Social Plugin" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.0/plugins/comments.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dff28420bea5cb1752%26domain%3Dhealthy-food-1.mysapo.net%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fhealthy-food-1.mysapo.net%252Ff61e97726f5c35de3%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=0&amp;height=100&amp;href=http%3A%2F%2Fhealthy-food-1.mysapo.net%2Fson-mong-tay-revlon&amp;locale=vi_VN&amp;numposts=1&amp;sdk=joey&amp;version=v2.0&amp;width=" style="border: none; visibility: visible; width: 100%; height: 0px;" class=""></iframe></span></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div id="pd_promotion">
                                    <h4 style="margin: 20px 0;"> </h4>

                                </div>
                            </div> -->



                        </div>
                    </div>
                </div>
            </div>


        </section>
</div>
<?php } ?>
<!-- detail -->

<?php include 'v_page_footer.php' ?>