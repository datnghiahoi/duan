<?php include 'v_page_header.php' ?>
<?php include 'v_page_navBar.php' ?>
<!-- section -->
<section id="ega-breadcrumb" class="ega-p-t--3 ega-p-b--3">
  <div class="ega-container">
    <ul class="ega-menu ega-ul ega-menu--breadcrumb ega-m--0">
      <li class="ega-menu__item"><a href="index.php">Trang chủ</a></li>
      <!-- <li class="ega-menu__item"><a href="/collections/all">Danh mục</a></li> -->
      <li class="ega-menu__item">
        <a href="?mod=pages&act=shop">Trang sản phẩm</a>
      </li>
      </li>
    </ul>
  </div>
  <!-- section -->

  <!-- product -->
  <div class="ega-col-xl-12 ega-col-lg-12 ega-col-12">
    <div id="result">
      <div class="ega-row">
        
        <?php
        // $getAllProducts = array_merge($showsp1, $showsp2, $showsp3);
        foreach ($sptheodm as $item) {

          extract($item);
          echo ' <div class="ega-col-lg-4 ega-col-sm-4 ega-col-6">
      <div class="pd-item__wrapper">
        <div data-style="ega-product" class="ega-pro ega-pro--style2 ega-pro-item ega-text--center">
         <div class="ega-pro__img">
         <a href="?mod=pages&act=chitietsp&id='.$id_sp.'" class="ega-text--no-underline">
          <img src="views/images/' . $anhsp . '"width="150px">
         </a>
         <div class="ega-pro__overlay">
          <div class="ega-row">
            <div class="ega-col-6">
              <a href="" class="ega-pro__action ega-tooltip ega-color--black" data-ega-tooltip="Lựa chọn">
                <svg class="ega-ic-shopping-cart">
                  <use xlink:href="#ega-ic-shopping-cart"></use>
                </svg>
              </a>
            </div>
            <div class="ega-col-6">
              <a href="?mod=pages&act=chitietsp&id='.$id_sp.'" class="ega-pro__action ega-tooltip ega-color--black" data-ega-tooltip="Xem nhanh" data-ega-role="quickview">
                <svg class="ega-ic-eye">
                  <use xlink:href="#ega-ic-eye"></use>
                </svg>
              </a>
            </div>
          </div>
        </div> 
      </div>
      <div class="ega-pro__content">
        <h3 class="ega-pro__title ega-m-t--0 ega-h5">
          <a href="" class="ega-text--no-underline">
          ' . $tensp . '
          </a>
        </h3>
        <div class="ega-pro__price-group">

          <ins class="ega-pro__price ega-text--no-underline ega-color--danger">' . $giasp . '</ins>
        </div>
      </div>

    </div>
  </div>
</div>';
        }
        ?>
        <!-- <div class="ega-col-lg-4 ega-col-sm-4 ega-col-6">
          <div class="pd-item__wrapper">
            <div data-style="ega-product" class="ega-pro ega-pro--style2 ega-pro-item ega-text--center">
              <div class="ega-pro__img">
                <a href="" class="ega-text--no-underline">

                  <img src="">
                </a>
                <div class="ega-pro__overlay">
                  <div class="ega-row">
                    <div class="ega-col-6">
                      <a href="/son-mong-tay-revlon" class="ega-pro__action ega-tooltip ega-color--black" data-ega-tooltip="Lựa chọn">
                        <svg class="ega-ic-shopping-cart">
                          <use xlink:href="#ega-ic-shopping-cart"></use>
                        </svg>
                      </a>
                    </div>
                    <div class="ega-col-6">
                      <a href="#" class="ega-pro__action ega-tooltip ega-color--black" data-ega-tooltip="Xem nhanh" data-ega-role="quickview" data-handle="son-mong-tay-revlon">
                        <svg class="ega-ic-eye">
                          <use xlink:href="#ega-ic-eye"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ega-pro__content">
                <h3 class="ega-pro__title ega-m-t--0 ega-h5">
                  <a href="" class="ega-text--no-underline">
                    Sơn móng tay Revlon Nail Enamel
                  </a>
                </h3>
                <div class="ega-pro__price-group">

                  <ins class="ega-pro__price ega-text--no-underline ega-color--danger">160.000₫</ins>
                </div>
              </div>

            </div>
          </div>
        </div> -->

        <!-- <div class="ega-col-lg-4 ega-col-sm-4 ega-col-6">
          <div class="pd-item__wrapper">
            <div data-style="ega-product" class="ega-pro ega-pro--style2 ega-pro-item ega-text--center">
              <div class="ega-pro__img">
                <a href="/thuoc-giam-can-lishou-xanh-phuc-linh" class="ega-text--no-underline">
                  <img src="//bizweb.dktcdn.net/thumb/large/100/093/224/themes/799083/assets/ega-product-empty.jpg?1660045194993" class="lazyloaded" data-srcset="//bizweb.dktcdn.net/thumb/medium/100/093/224/products/1-65246c53-9a12-4c2c-94c7-203a9739d920.jpg?v=1468833532890 767w,//bizweb.dktcdn.net/thumb/medium/100/093/224/products/1-65246c53-9a12-4c2c-94c7-203a9739d920.jpg?v=1468833532890" alt="Thuốc giảm cân Lishou" srcset="
                          //bizweb.dktcdn.net/thumb/medium/100/093/224/products/1-65246c53-9a12-4c2c-94c7-203a9739d920.jpg?v=1468833532890 767w,
                          //bizweb.dktcdn.net/thumb/medium/100/093/224/products/1-65246c53-9a12-4c2c-94c7-203a9739d920.jpg?v=1468833532890
                        " />
                </a>
                <div class="ega-pro__overlay">
                  <div class="ega-row">
                   
                    <div class="ega-col-6">
                      <a href="#" class="ega-pro__action ega-tooltip ega-color--black" data-ega-role="addtocart" data-quantity="1" data-variant-id="4398223" data-ega-tooltip="Thêm vào giỏ">
                        <svg class="ega-ic-shopping-cart">
                          <use xlink:href="#ega-ic-shopping-cart"></use>
                        </svg>
                      </a>
                    </div>

                    <div class="ega-col-6">
                      <a href="#" class="ega-pro__action ega-tooltip ega-color--black" data-ega-tooltip="Xem nhanh" data-ega-role="quickview" data-handle="thuoc-giam-can-lishou-xanh-phuc-linh">
                        <svg class="ega-ic-eye">
                          <use xlink:href="#ega-ic-eye"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ega-pro__content">
                <h3 class="ega-pro__title ega-m-t--0 ega-h5">
                  <a href="/thuoc-giam-can-lishou-xanh-phuc-linh" class="ega-text--no-underline">
                    Thuốc giảm cân Lishou
                  </a>
                </h3>
                <div class="ega-pro__price-group">
                  <ins class="ega-pro__price ega-text--no-underline ega-color--danger">500.000₫</ins>

                  <del class="ega-pro__price-del ega-small ega-color--secondary">600.000₫</del>
                </div>
              </div>

              <div class="ega-pro__sale-tag style2">
                <span>-17%</span>
              </div>
            </div>
          </div>
        </div>

        <div class="ega-col-lg-4 ega-col-sm-4 ega-col-6">
          <div class="pd-item__wrapper">
            <div data-style="ega-product" class="ega-pro ega-pro--style2 ega-pro-item ega-text--center">
              <div class="ega-pro__img">
                <a href="/tam-trang-manh-pure-snow-white-id6-snow-white-id6" class="ega-text--no-underline">
                  <img src="//bizweb.dktcdn.net/thumb/large/100/093/224/themes/799083/assets/ega-product-empty.jpg?1660045194993" class="lazyloaded" data-srcset="//bizweb.dktcdn.net/thumb/medium/100/093/224/products/1-576ac55b-4e1f-49d0-b2a5-cf36e8e1d1af.jpg?v=1468833164927 767w,//bizweb.dktcdn.net/thumb/medium/100/093/224/products/1-576ac55b-4e1f-49d0-b2a5-cf36e8e1d1af.jpg?v=1468833164927" alt="Tắm trắng mạnh Pure Snow White" srcset="
                          //bizweb.dktcdn.net/thumb/medium/100/093/224/products/1-576ac55b-4e1f-49d0-b2a5-cf36e8e1d1af.jpg?v=1468833164927 767w,
                          //bizweb.dktcdn.net/thumb/medium/100/093/224/products/1-576ac55b-4e1f-49d0-b2a5-cf36e8e1d1af.jpg?v=1468833164927
                        " />
                </a>
                <div class="ega-pro__overlay">
                  <div class="ega-row">
                   
                    <div class="ega-col-6">
                      <a href="#" class="ega-pro__action ega-tooltip ega-color--black" data-ega-role="addtocart" data-quantity="1" data-variant-id="4397298" data-ega-tooltip="Thêm vào giỏ">
                        <svg class="ega-ic-shopping-cart">
                          <use xlink:href="#ega-ic-shopping-cart"></use>
                        </svg>
                      </a>
                    </div>

                    <div class="ega-col-6">
                      <a href="#" class="ega-pro__action ega-tooltip ega-color--black" data-ega-tooltip="Xem nhanh" data-ega-role="quickview" data-handle="tam-trang-manh-pure-snow-white-id6-snow-white-id6">
                        <svg class="ega-ic-eye">
                          <use xlink:href="#ega-ic-eye"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ega-pro__content">
                <h3 class="ega-pro__title ega-m-t--0 ega-h5">
                  <a href="/tam-trang-manh-pure-snow-white-id6-snow-white-id6" class="ega-text--no-underline">
                    Tắm trắng mạnh Pure Snow White
                  </a>
                </h3>
                <div class="ega-pro__price-group">
                  <ins class="ega-pro__price ega-text--no-underline ega-color--danger">55.000₫</ins>

                  <del class="ega-pro__price-del ega-small ega-color--secondary">60.000₫</del>
                </div>
              </div>

              <div class="ega-pro__sale-tag style2">
                <span>-8%</span>
              </div>
            </div>
          </div>
        </div>

        <div class="ega-col-lg-4 ega-col-sm-4 ega-col-6">
          <div class="pd-item__wrapper">
            <div data-style="ega-product" class="ega-pro ega-pro--style2 ega-pro-item ega-text--center">
              <div class="ega-pro__img">
                <a href="/kem-chong-nang-innisfree-dgf3534" class="ega-text--no-underline">
                  <img src="//bizweb.dktcdn.net/thumb/large/100/093/224/themes/799083/assets/ega-product-empty.jpg?1660045194993" class="lazyloaded" data-srcset="//bizweb.dktcdn.net/thumb/medium/100/093/224/products/1.jpg?v=1468832939357 767w,//bizweb.dktcdn.net/thumb/medium/100/093/224/products/1.jpg?v=1468832939357" alt="Kem chống nắng Innisfree - DGF3534" srcset="
                          //bizweb.dktcdn.net/thumb/medium/100/093/224/products/1.jpg?v=1468832939357 767w,
                          //bizweb.dktcdn.net/thumb/medium/100/093/224/products/1.jpg?v=1468832939357
                        " />
                </a>
                <div class="ega-pro__overlay">
                  <div class="ega-row">
                   
                    <div class="ega-col-6">
                      <a href="#" class="ega-pro__action ega-tooltip ega-color--black" data-ega-role="addtocart" data-quantity="1" data-variant-id="4397718" data-ega-tooltip="Thêm vào giỏ">
                        <svg class="ega-ic-shopping-cart">
                          <use xlink:href="#ega-ic-shopping-cart"></use>
                        </svg>
                      </a>
                    </div>

                    <div class="ega-col-6">
                      <a href="#" class="ega-pro__action ega-tooltip ega-color--black" data-ega-tooltip="Xem nhanh" data-ega-role="quickview" data-handle="kem-chong-nang-innisfree-dgf3534">
                        <svg class="ega-ic-eye">
                          <use xlink:href="#ega-ic-eye"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ega-pro__content">
                <h3 class="ega-pro__title ega-m-t--0 ega-h5">
                  <a href="/kem-chong-nang-innisfree-dgf3534" class="ega-text--no-underline">
                    Kem chống nắng Innisfree - DGF3534
                  </a>
                </h3>
                <div class="ega-pro__price-group">
                  <ins class="ega-pro__price ega-text--no-underline ega-color--danger">149.000₫</ins>

                  <del class="ega-pro__price-del ega-small ega-color--secondary">180.000₫</del>
                </div>
              </div>

              <div class="ega-pro__sale-tag style2">
                <span>-17%</span>
              </div>
            </div>
          </div>
        </div>

        <div class="ega-col-lg-4 ega-col-sm-4 ega-col-6">
          <div class="pd-item__wrapper">
            <div data-style="ega-product" class="ega-pro ega-pro--style2 ega-pro-item ega-text--center">
              <div class="ega-pro__img">
                <a href="/multipro-32x-200-vien-vitamin-khoang-chat-cho-nam-gioi" class="ega-text--no-underline">
                  <img src="//bizweb.dktcdn.net/thumb/large/100/093/224/themes/799083/assets/ega-product-empty.jpg?1660045194993" class="lazyloaded" data-srcset="//bizweb.dktcdn.net/thumb/medium/100/093/224/products/20100104-228.jpg?v=1465374624323 767w,//bizweb.dktcdn.net/thumb/medium/100/093/224/products/20100104-228.jpg?v=1465374624323" alt="MultiPro 32X 200 viên" srcset="
                          //bizweb.dktcdn.net/thumb/medium/100/093/224/products/20100104-228.jpg?v=1465374624323 767w,
                          //bizweb.dktcdn.net/thumb/medium/100/093/224/products/20100104-228.jpg?v=1465374624323
                        " />
                </a>
                <div class="ega-pro__overlay">
                  <div class="ega-row">
                    
                    <div class="ega-col-6">
                      <a href="/multipro-32x-200-vien-vitamin-khoang-chat-cho-nam-gioi" class="ega-pro__action ega-tooltip ega-color--black" data-ega-tooltip="Lựa chọn">
                        <svg class="ega-ic-shopping-cart">
                          <use xlink:href="#ega-ic-shopping-cart"></use>
                        </svg>
                      </a>
                    </div>

                    <div class="ega-col-6">
                      <a href="#" class="ega-pro__action ega-tooltip ega-color--black" data-ega-tooltip="Xem nhanh" data-ega-role="quickview" data-handle="multipro-32x-200-vien-vitamin-khoang-chat-cho-nam-gioi">
                        <svg class="ega-ic-eye">
                          <use xlink:href="#ega-ic-eye"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ega-pro__content">
                <h3 class="ega-pro__title ega-m-t--0 ega-h5">
                  <a href="/multipro-32x-200-vien-vitamin-khoang-chat-cho-nam-gioi" class="ega-text--no-underline">
                    MultiPro 32X 200 viên
                  </a>
                </h3>
                <div class="ega-pro__price-group">
                  <ins class="ega-pro__price ega-text--no-underline ega-color--danger">800.000₫</ins>

                  <del class="ega-pro__price-del ega-small ega-color--secondary">850.000₫</del>
                </div>
              </div>

              <div class="ega-pro__sale-tag style2">
                <span>-6%</span>
              </div>
            </div>
          </div>
        </div>

        <div class="ega-col-lg-4 ega-col-sm-4 ega-col-6">
          <div class="pd-item__wrapper">
            <div data-style="ega-product" class="ega-pro ega-pro--style2 ega-pro-item ega-text--center">
              <div class="ega-pro__img">
                <a href="/sun-nang-mui-han-quoc" class="ega-text--no-underline">
                  <img src="//bizweb.dktcdn.net/thumb/large/100/093/224/themes/799083/assets/ega-product-empty.jpg?1660045194993" class="lazyloaded" data-srcset="//bizweb.dktcdn.net/thumb/medium/100/093/224/products/1-34e84bf8-c458-4d5b-9e84-8063722ac487.jpg?v=1468833274447 767w,//bizweb.dktcdn.net/thumb/medium/100/093/224/products/1-34e84bf8-c458-4d5b-9e84-8063722ac487.jpg?v=1468833274447" alt="Sụn Nâng Mũi Hàn Quốc" srcset="
                          //bizweb.dktcdn.net/thumb/medium/100/093/224/products/1-34e84bf8-c458-4d5b-9e84-8063722ac487.jpg?v=1468833274447 767w,
                          //bizweb.dktcdn.net/thumb/medium/100/093/224/products/1-34e84bf8-c458-4d5b-9e84-8063722ac487.jpg?v=1468833274447
                        " />
                </a>
                <div class="ega-pro__overlay">
                  <div class="ega-row">
                   
                    <div class="ega-col-6">
                      <a href="#" class="ega-pro__action ega-tooltip ega-color--black" data-ega-role="addtocart" data-quantity="1" data-variant-id="4402046" data-ega-tooltip="Thêm vào giỏ">
                        <svg class="ega-ic-shopping-cart">
                          <use xlink:href="#ega-ic-shopping-cart"></use>
                        </svg>
                      </a>
                    </div>

                    <div class="ega-col-6">
                      <a href="#" class="ega-pro__action ega-tooltip ega-color--black" data-ega-tooltip="Xem nhanh" data-ega-role="quickview" data-handle="sun-nang-mui-han-quoc">
                        <svg class="ega-ic-eye">
                          <use xlink:href="#ega-ic-eye"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ega-pro__content">
                <h3 class="ega-pro__title ega-m-t--0 ega-h5">
                  <a href="/sun-nang-mui-han-quoc" class="ega-text--no-underline">
                    Sụn Nâng Mũi Hàn Quốc
                  </a>
                </h3>
                <div class="ega-pro__price-group">
                  <ins class="ega-pro__price ega-text--no-underline ega-color--danger">149.000₫</ins>

                  <del class="ega-pro__price-del ega-small ega-color--secondary">200.000₫</del>
                </div>
              </div>

              <div class="ega-pro__sale-tag style2">
                <span>-26%</span>
              </div>
            </div>
          </div>
        </div>

        <div class="ega-col-lg-4 ega-col-sm-4 ega-col-6">
          <div class="pd-item__wrapper">
            <div data-style="ega-product" class="ega-pro ega-pro--style2 ega-pro-item ega-text--center">
              <div class="ega-pro__img">
                <a href="/white-plus-renew-original-cream-50ml" class="ega-text--no-underline">
                  <img src="//bizweb.dktcdn.net/thumb/large/100/093/224/themes/799083/assets/ega-product-empty.jpg?1660045194993" class="lazyloaded" data-srcset="//bizweb.dktcdn.net/thumb/medium/100/093/224/products/4-ea525338-f81b-4d96-a2c2-cac72248cdae.jpg?v=1469435158127 767w,//bizweb.dktcdn.net/thumb/medium/100/093/224/products/4-ea525338-f81b-4d96-a2c2-cac72248cdae.jpg?v=1469435158127" alt="White Plus Renew Original Cream  50Ml" srcset="
                          //bizweb.dktcdn.net/thumb/medium/100/093/224/products/4-ea525338-f81b-4d96-a2c2-cac72248cdae.jpg?v=1469435158127 767w,
                          //bizweb.dktcdn.net/thumb/medium/100/093/224/products/4-ea525338-f81b-4d96-a2c2-cac72248cdae.jpg?v=1469435158127
                        " />
                </a>
                <div class="ega-pro__overlay">
                  <div class="ega-row">
                    
                    <div class="ega-col-6">
                      <a href="/white-plus-renew-original-cream-50ml" class="ega-pro__action ega-tooltip ega-color--black" data-ega-tooltip="Lựa chọn">
                        <svg class="ega-ic-shopping-cart">
                          <use xlink:href="#ega-ic-shopping-cart"></use>
                        </svg>
                      </a>
                    </div>

                    <div class="ega-col-6">
                      <a href="#" class="ega-pro__action ega-tooltip ega-color--black" data-ega-tooltip="Xem nhanh" data-ega-role="quickview" data-handle="white-plus-renew-original-cream-50ml">
                        <svg class="ega-ic-eye">
                          <use xlink:href="#ega-ic-eye"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ega-pro__content">
                <h3 class="ega-pro__title ega-m-t--0 ega-h5">
                  <a href="/white-plus-renew-original-cream-50ml" class="ega-text--no-underline">
                    White Plus Renew Original Cream 50Ml
                  </a>
                </h3>
                <div class="ega-pro__price-group">
                  <ins class="ega-pro__price ega-text--no-underline ega-color--danger">1.200.000₫</ins>
                </div>
              </div>
            </div>
          </div>
        </div> -->

      </div>
    </div>
    <div id="pagination" class="ega-text--center">
      <div class="ega-d--i-block">
        <div class="ega-pagi"></div>
      </div>
    </div>
  </div>

  <div id="ega-collection">

    <div class="ega-container">

      <input type="hidden" id="collection_id" value="432903" />

      <div class="collection-wrapper">

        <div class="ega-row">

        </div>

      </div>
    </div>
  </div>
  <!-- product -->
  <?php include 'v_page_footer.php' ?>