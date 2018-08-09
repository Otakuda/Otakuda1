<style>
    .input-number-group {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    <
    <
    <
    <
    <
    <
    <
    HEAD
    .input-number-group input[type=number]::-webkit-inner-spin-button,
    .input-number-group input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        appearance: none;
    }

    .input-number-group .input-group-button {
        line-height: calc(80px / 2 - 5px);
    }

    .input-number-group .input-number {
        width: 80px;
        padding: 0 12px;
        vertical-align: top;
        text-align: center;
        outline: none;
        display: block;
        margin: 0;
    }

    .input-number-group .input-number,
    .input-number-group .input-number-decrement,
    .input-number-group .input-number-increment {
        border: 1px solid #cacaca;
        height: 40px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border-radius: 0;
    }

    .input-number-group .input-number-decrement,
    .input-number-group .input-number-increment {
        display: inline-block;
        width: 40px;
        background: #e6e6e6;
        color: #0a0a0a;
        text-align: center;
        font-weight: bold;
        cursor: pointer;
        font-size: 2rem;
        font-weight: 400;
    }

    .input-number-group .input-number-decrement {
        margin-right: 0.3rem;
    }

    .input-number-group .input-number-increment {
        margin-left: 0.3rem;
    }
</style>
<div class="yui3-g">
    <div id="bd" class="yui3-g">
        <div class="yui3-u-1">
            <div class="step-bar">
                <ol class="step-list">
                    <li class="step done">
                        <span class="step-number">1</span>
                        <span class="step-name">選擇商品類型及分類</span>
                        <span class="icon-next-step"></span></li>
                    <li class="step done"><span class="step-number">2</span> <span class="step-name">商品資訊與規格</span>
                        <span
                                class="icon-next-step"></span></li>
                    <li class="step current"><span class="step-number">3</span> <span class="step-name">預覽</span>
                        <span
                                class="icon-next-step"></span></li>
                    <li class="step"><span class="step-number">4</span> <span class="step-name">完成</span></li>
                </ol>
            </div>
            <div class="item-preview">
                <div>
                    <div>
                        <form action="<?= base_url() ?>Product_upload/doUpload" method="post">
                            <div class="pageRoot__2VRqJ " data-reactroot="">
                                <div class="pageRowBox__3xNZf">
                                    <section class="previewInfoWrap__3L8oc">
                                        <div class="inner__1kUlf">
                                            <h2 class="title__3SBcO">商品刊登預覽</h2>
                                            <div class="decorations__27qQx"><em></em>
                                                <em class="arrow__C5DDd"></em>
                                                =======

                                                <div id="bd" class="yui3-g">
                                                    <div class="yui3-u-1 stepBar-wrap"
                                                         id="yui_3_12_0_4_1531808580258_2035">

                                                        <div class="step-bar">
                                                            <ol class="step-list">
                                                                <li class="step done"><span class="step-number">1</span>
                                                                    <span class="step-name">選擇商品類型及分類</span> <span
                                                                            class="icon-next-step"></span></li>
                                                                <li class="step done"><span class="step-number">2</span>
                                                                    <span class="step-name">商品資訊與規格</span> <span
                                                                            class="icon-next-step"></span></li>
                                                                <li class="step current"><span
                                                                            class="step-number">3</span> <span
                                                                            class="step-name">預覽</span> <span
                                                                            class="icon-next-step"></span></li>
                                                                <li class="step"><span class="step-number">4</span>
                                                                    <span class="step-name">完成</span></li>
                                                            </ol>
                                                        </div>

                                                        <div>
                                                            <div id="isoredux-root">
                                                                <div id="itemPreview" class="pageRoot__2VRqJ "
                                                                     data-reactroot="">
                                                                    <div class="pageRowBox__3xNZf">
                                                                        <section class="previewInfoWrap__3L8oc">
                                                                            <div class="inner__1kUlf"><h2
                                                                                        class="title__3SBcO">商品刊登預覽</h2>
                                                                                <div class="decorations__27qQx">
                                                                                    <em></em><em
                                                                                            class="arrow__C5DDd"></em>
                                                                                </div>
                                                                                <ul>
                                                                                    <li class="previewRow__1HXjq"><span
                                                                                                class="caption__1FjF1">商品類型：</span><span
                                                                                                class="value__yfL74">直購商品</span>
                                                                                    </li>
                                                                                    <li class="previewRow__1HXjq"><span
                                                                                                class="caption__1FjF1">商品分類：</span><span
                                                                                                class="value__yfL74"><span
                                                                                                    class="breadcrumbList__1eEyf">男性精品與服飾</span><span
                                                                                                    class="breadcrumbList__1eEyf">男裝</span><span
                                                                                                    class="breadcrumbList__1eEyf">品牌T恤</span><span
                                                                                                    class="breadcrumbList__1eEyf">8-Style</span></span>
                                                                                    </li>
                                                                                    <li class="previewRow__1HXjq"><span
                                                                                                class="caption__1FjF1">上架類型：</span><span
                                                                                                class="value__yfL74">立即刊登</span>
                                                                                    </li>
                                                                                    <li class="previewRow__1HXjq"><span
                                                                                                class="caption__1FjF1">刊登費用：</span><span
                                                                                                class="value__yfL74">0
                                                                                            <!-- --> </span></li>
                                                                                    <li class="previewRow__1HXjq"><span
                                                                                                class="note__WSPwk">注意事項：建議您送出本商品頁前再檢視一次刊登費用金額，商品成功上架後將產生相關費用。</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                    <div class="itemPageModule__1UoRD">
                                                                        <main class="main__3C2yn">
                                                                            <div class="pure-g flexContainer__jnSOl">

                                                                                <div class="pure-u-1 sellerInfo__1dtNK">

                                                                                </div>
                                                                                <div class="pure-u-1 firstFoldWrap__3LZTE">
                                                                                    <div class="pure-g firstFold__1T18d">
                                                                                        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-2-5 itemImages__1firo">
                                                                                            <section
                                                                                                    class="wrap__bGMYC">
                                                                                                <div>
                                                                                                    <figure class="focusedImageFigure__c4PVd">
                                                                                                        <img
                                                                                                                src="https://s.yimg.com/xd/api/res/1.2/ut8DUzdILRH3WXmh5ouATw--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00ODA7cT04NTtyb3RhdGU9YXV0bzt3PTQ4MA--/https://s.yimg.com/ma/f4e5/frontend/b7b6d0d2-88f9-49e6-a4fa-2faebec20209.jpg.cf.jpg"
                                                                                                                class="focusedImage__3HmoX ">
                                                                                                    </figure>
                                                                                                    >>>>>>>
                                                                                                    8987446d231e554a49338a398c28ef505a9fa455
                                                                                                </div>
                                                                                                <ul class="imageList__22FSs">
                                                                                                    <li class="listItem__3BRt8">
                                                                                                        <mark class="checkedMark__2Qoej"></mark>
                                                                                                        <img src="https://s.yimg.com/xd/api/res/1.2/wwfhNdInA_Cvi4vZrcKXaA--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7Zmk9ZmlsbDtoPTkwO3E9ODU7cm90YXRlPWF1dG87dz05MA--/https://s.yimg.com/ma/f4e5/frontend/b7b6d0d2-88f9-49e6-a4fa-2faebec20209.jpg.cf.jpg"
                                                                                                             class="image__3l8Vh">
                                                                                                    </li>
                                                                                                    <li class="listItem__3BRt8">
                                                                                                        <img
                                                                                                                src="https://s.yimg.com/xd/api/res/1.2/TiUA.61fmDcd_D1qBofGXw--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7Zmk9ZmlsbDtoPTkwO3E9ODU7cm90YXRlPWF1dG87dz05MA--/https://s.yimg.com/ma/ae07/frontend/0910d3a9-da36-400d-a871-2c9d0018ac9c.png.cf.jpg"
                                                                                                                class="image__3l8Vh">
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <<<<<<< HEAD
                                                                                        </div>
                                    </section>
                                </div>
                                <div class="itemPageModule__1UoRD">
                                    <main class="main__3C2yn">
                                        <div class="pure-g flexContainer__jnSOl">
                                            <div class="pure-u-1 firstFoldWrap__3LZTE">
                                                <div class="pure-g firstFold__1T18d">
                                                    <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-2-5 itemImages__1firo">
                                                        <section class="wrap__bGMYC">
                                                            <div>
                                                                <figure class="focusedImageFigure__c4PVd">
                                                                    <div class="dz-message">
                                                                        <h3>上傳圖片</h3>
                                                                    </div>
                                                                    <!--                                                                    <img class="focusedImage__3HmoX"-->
                                                                    <!--                                                                         src="-->
                                                                    <? //= $image_path ?><!--">-->
                                                                </figure>
                                                            </div>
                                                            <ul class="imageList__22FSs">
                                                                <li class="listItem__3BRt8">
                                                                    <mark class="checkedMark__2Qoej"></mark>
                                                                    <div class="dz-message">
                                                                        <h3>上傳圖片</h3>
                                                                    </div>
                                                                    <!--                                                                    <img src="-->
                                                                    <? //= $image_path ?><!--"-->
                                                                    <!--                                                                         class="image__3l8Vh" id="productUpload_image">-->
                                                                    <!--                                                                    <input type="hidden" name="image_path"-->
                                                                    <!--                                                                           id="image_path" value="-->
                                                                    <? //= $image_path ?><!--">-->
                                                                </li>
                                                            </ul>
                                                        </section>
                                                    </div>
                                                    <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5 itemBasic__mAugX">
                                                        <section class="wrap__3MZRM">
                                                            <h1 class="title__3wBva"><?= $product_name ?></h1>
                                                            <input type="hidden" value="<?= $product_name ?>"
                                                                   name="product_name">
                                                            <div class="tagsRow__3AkOv">
                                                                <a class="previewDisableAction hashTag__Bhj5J"
                                                                   href="">#<?= $product_brief_detail ?>
                                                                    <input type="hidden"
                                                                           value="<?= $product_brief_detail ?>"
                                                                           name="product_brief_detail">
                                                                </a>
                                                            </div>
                                                            <p class="subtitle__3NvAJ"><?= $product_brief ?></p>
                                                            <input type="hidden" value="<?= $product_brief ?>"
                                                                   name="product_brief">
                                                            <div class="row__-8aqS">
                                                                <div class="caption__2IQBR">定價</div>
                                                                <div class="content__3X3yq">
                                                                    <em class="price__2f7Jw"><?= $product_price ?></em>
                                                                    <input type="hidden" value="<?= $product_price ?>"
                                                                           name="product_price">
                                                                    <span class="soldQuantity__1So65">/ 已售出 <em>0</em> 件</span>
                                                                </div>
                                                            </div>
                                                            <div class="row__1kjJO row__-8aqS">
                                                                <div class="caption__xNd14 caption__2IQBR">
                                                                    <span>數量</span>
                                                                </div>
                                                                <div class="content__36o8N content__3X3yq">
                                                                    <div class="input-group">
                                                                        <div class="input-group input-number-group">
                                                                            <div class="input-group-button">
                                                                                <span class="input-number-decrement">-</span>
                                                                            </div>
                                                                            <input class="input-number" type="number"
                                                                                   value="1" min="1"
                                                                                   max="<?= $product_quantity ?>">
                                                                            <div class="input-group-button">
                                                                                <span class="input-number-increment">+</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" class="qtyInput__1dbgq "
                                                                           name="product_quantity"
                                                                           value="<?= $product_quantity ?>">
                                                                </div>
                                                            </div>
                                                            <input type="text" value="<?= $temp_name ?>">
                                                            <input type="hidden" name="user_id"
                                                                   value="<?= $this->session->userdata('user_id') ?>">
                                                            <div class="row__-8aqS actionButtons__GoaRG">
                                                                <div class="purchaseButtons__2RKKR">
                                                                    <button class="buyNowButton__1aR87 actionButton__2aXKn button__yn_TD primaryButtonType2__m1h-8">
                                                                        立即購買
                                                                    </button>
                                                                    <button class="addToCartButton__39VJh actionButton__2aXKn button__yn_TD secondaryButtonType2__3QWSM">
                                                                        加入購物車
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        =======

                                                        </section>
                                                    </div>
                                                    <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5 itemBasic__mAugX">
                                                        <section class="wrap__3MZRM"><h1 class="title__3wBva">qqq</h1>

                                                            <div class="tagsRow__3AkOv">
                                                                <mark class="typeMark__2awkm typeMark__2TVs- basic__3d_3_ typeMarkBasic__1mnI3 false">
                                                                    直購
                                                                </mark>
                                                                <a class="previewDisableAction hashTag__Bhj5J"
                                                                   href="https://tw.bid.yahoo.com/search/auction/product?ht=qqq">#
                                                                    <!-- -->
                                                                    qqq</a></div>
                                                            <p class="subtitle__3NvAJ">qqq</p>
                                                            <div class="row__-8aqS">
                                                                <div class="caption__2IQBR">定價</div>
                                                                <div class="content__3X3yq"><em
                                                                            class="price__2f7Jw">$11</em><span
                                                                            class="soldQuantity__1So65">/ 已售出 <em>0</em> 件</span>
                                                                </div>
                                                            </div>
                                                            <form id="addCartForm"><input type="hidden" name="listingId"
                                                                                          value=""><input
                                                                        type="hidden" name="productId"
                                                                        value="PREVIEW_DUMMY_PRODUCT_ID"><input
                                                                        type="hidden" name="modelId"
                                                                        value="newSpecId-newOptionId"><input
                                                                        type="hidden" name="cartType"
                                                                        value="normal"><input type="hidden"
                                                                                              name="wssid"
                                                                                              value="">
                                                                <ul class="specList__3TA_I"></ul>
                                                                <div class="row__1kjJO row__-8aqS">
                                                                    <div class="caption__xNd14 caption__2IQBR">
                                                                        <span>數量</span></div>
                                                                    <div class="content__36o8N content__3X3yq">
                                                                        <button class="qtyButton__2r29Y qtyMinusButton__2isH0">
                                                                            <i
                                                                                    class="fi-minus qtyButtonIcon__2LVNb"></i>
                                                                        </button>
                                                                        <input type="number" class="qtyInput__1dbgq "
                                                                               min="1" max="1"
                                                                               name="quantity" value="1">
                                                                        <button class="qtyButton__2r29Y qtyPlusButton__2NOnk">
                                                                            <i
                                                                                    class="fi-plus qtyButtonIcon__2LVNb"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="row__-8aqS actionButtons__GoaRG">
                                                                    <div class="purchaseButtons__2RKKR">
                                                                        <button class="buyNowButton__1aR87 actionButton__2aXKn button__yn_TD primaryButtonType2__m1h-8">
                                                                            立即購買
                                                                        </button>
                                                                        <button class="addToCartButton__39VJh actionButton__2aXKn button__yn_TD secondaryButtonType2__3QWSM">
                                                                            加入購物車
                                                                        </button>
                                                                        >>>>>>> 8987446d231e554a49338a398c28ef505a9fa455
                                                                    </div>
                                                                    <div class="imButtonBox__3f_5J"><a
                                                                                class="imButton__1KNVm actionButton__2aXKn button__yn_TD secondaryButtonType2__3QWSM"
                                                                                href="/chat?mid="><i
                                                                                    class="fi-conversations imButtonIcon__gn49J"></i><span
                                                                                    class="imButtonText__1h_FG">即時通</span></a>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                            <div class="row__-8aqS shippings__gTcnd">

                                                                <div class="content__3X3yq shippingContent__2GBVR">
                                                                    <ul>


                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="thinRow__1zsU9">


                                                            </div>

                                                            <div class="guaranteeSloganBox__2LMJD yahooGuarantee__3dn9n">

                                                            </div>
                                                            <ul class="functionList__2dnPV">
                                                                <li class="functionListItem__31GHt"><a target="_blank"
                                                                                                       class="previewDisableAction tip--wrap__3Sbrx"
                                                                                                       href="https://www.facebook.com/sharer/sharer.php?u=https://tw.bid.yahoo.com/item/&amp;amp;src=sdkpreparse"><i
                                                                                class="fi-facebook functionIcon__2C0Zx facebook__V-dPm"
                                                                                title="分享到Facebook"></i><i
                                                                                class="tip--wrap__i__1GRRH">分享到
                                                                            Facebook</i></a></li>
                                                                <li class="functionListItem__31GHt"><a target="_blank"
                                                                                                       class="previewDisableAction tip--wrap__3Sbrx"
                                                                                                       href="https://timeline.line.me/social-plugin/share?url=https://tw.bid.yahoo.com/item/"><i
                                                                                class="functionIcon__2C0Zx line__2x7KL"
                                                                                title="分享到Line"></i><i
                                                                                class="tip--wrap__i__1GRRH">分享到 Line</i></a>
                                                                </li>
                                                                <li class="functionListItem__31GHt"><a href="#copy-link"
                                                                                                       class="previewDisableAction copyItemUrl tip--wrap__3Sbrx"
                                                                                                       data-clipboard-text="https://tw.bid.yahoo.com/item/"><i
                                                                                class="fi-link functionIcon__2C0Zx"
                                                                                title="複製商品網址"></i><i
                                                                                class="tip--wrap__i__1GRRH">複製商品網址</i></a>
                                                                </li>
                                                                <li class="functionListItem__31GHt"><a
                                                                            class="reportAbuse__2eDPG tip--wrap__3Sbrx"
                                                                            target="_blank"
                                                                            href="/item/abuse?aid="><i
                                                                                class="fi-flag functionIcon__2C0Zx"
                                                                                title="檢舉商品"></i><i
                                                                                class="tip--wrap__i__1GRRH">檢舉商品</i></a>
                                                                </li>
                                                            </ul>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                            <<<<<<< HEAD
                                        </div>
                                </div>
                                <div class="action-wrap">
                                    <ul id="submit-preview-confirm-button">
                                        <li>
                                            <a href="<?= base_url() ?>Select_type"
                                               class="button-submit button-secondary btn-pad"
                                               data-rapid_p="2">取消</a>
                                        </li>
                                        <li>
                                            <button class="button-submit button-main btn-pad"
                                                    data-rapid_p="2" id="submit"> 確定
                                            </button>
                                        </li>
                                    </ul>
                        </form>
                    </div>
                    <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
                    <script src="<?php echo base_url(); ?>vendor/dropzone/dropzone.min.js"></script>
                    <script>
                        $('.input-number-increment').click(function () {
                            var $input = $(this).parents('.input-number-group').find('.input-number');
                            var val = parseInt($input.val(), 10);
                            $input.val(val + 1);
                        });

                        $('.input-number-decrement').click(function () {
                            var $input = $(this).parents('.input-number-group').find('.input-number');
                            var val = parseInt($input.val(), 10);
                            $input.val(val - 1);
                        })

                        Dropzone.autoDiscover = false;
                        var myDropzone = new Dropzone("#my-dropzone", {
                            url: "<?php echo site_url("Product_edit/upload") ?>",
                            acceptedFiles: "image/*",
                            addRemoveLinks: true,
                            removedfile: function (file) {
                                var name = file.name;

                                $.ajax({
                                    type: "post",
                                    url: "<?php echo site_url("Product_edit/remove") ?>",
                                    data: {file: name},
                                    dataType: 'html'
                                });

                                // remove the thumbnail
                                var previewElement;
                                return (previewElement = file.previewElement) != null ? (previewElement.parentNode.removeChild(file.previewElement)) : (void 0);
                            }
//                        ,
//                        init: function () {
//                            var me = this;
//                            $.get("<?php //echo site_url("Product_edit/list_files") ?>//", function (data) {
//                                // if any files already in server show all here
//                                if (data.length > 0) {
//                                    $.each(data, function (key, value) {
//                                        var mockFile = value;
//                                        me.emit("addedfile", mockFile);
//                                        me.emit("thumbnail", mockFile, "<?php //echo base_url(); ?>//uploads/" + value.name);
//                                        me.emit("complete", mockFile);
//                                    });
//                                }
//                            });
//                        }
                        });
                    </script>
                    =======
                    <div class="pure-u-1 secondFoldWrap__1oTok">
                        <div class="pure-g secondFold__1xeXs">
                            <div class="pure-u-1 sidebar__1nBjh">
                                <div class="sidebarWrap__1U9Kr">
                                    <div class="lazyLoad loaded">

                                    </div>

                                </div>
                                <div class="lazyLoad loaded"></div>
                            </div>
                        </div>
                        <div class="pure-u-1 itemDetail__3YtJ1">
                            <div id="itemDetail">
                                <div class="detailWrap__1T6Ns">
                                    <ul class="pure-g tabs__16tqH" data-mode="info">
                                        <li class="pure-u-1-2 tabItem__1vv45 active__30sNy"><a
                                                    class="tabLink__3_BL- active__30sNy" href="#">商品資訊</a></li>
                                        <li class="pure-u-1-2 tabItem__1vv45 "><a class="tabLink__3_BL- "
                                                                                  href="#">問與答</a></li>
                                    </ul>
                                    <section class="modInfo__A9Mas active__30sNy"><h3>商品資訊</h3>
                                        <div class="lazyLoad loaded">
                                            <aside class="itemImageWrap"><img class="detailImage__3go3q"
                                                                              alt="qqq"
                                                                              src="https://s.yimg.com/xd/api/res/1.2/pR2mugg8bLphtH0SWfIrWQ--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00ODAuMDtxPTg1O3JvdGF0ZT1hdXRvO3c9NDgwLjA-/https://s.yimg.com/ma/f4e5/frontend/b7b6d0d2-88f9-49e6-a4fa-2faebec20209.jpg.cf.jpg"
                                                                              data-lazyload="https://s.yimg.com/xd/api/res/1.2/pR2mugg8bLphtH0SWfIrWQ--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00ODAuMDtxPTg1O3JvdGF0ZT1hdXRvO3c9NDgwLjA-/https://s.yimg.com/ma/f4e5/frontend/b7b6d0d2-88f9-49e6-a4fa-2faebec20209.jpg.cf.jpg"><img
                                                        class="detailImage__3go3q" alt="qqq"
                                                        src="https://s.yimg.com/xd/api/res/1.2/vNjwQX738SjTxcxmHPvhsQ--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD0zMDAuMDtxPTg1O3JvdGF0ZT1hdXRvO3c9MzAyLjA-/https://s.yimg.com/ma/ae07/frontend/0910d3a9-da36-400d-a871-2c9d0018ac9c.png.cf.jpg"
                                                        data-lazyload="https://s.yimg.com/xd/api/res/1.2/vNjwQX738SjTxcxmHPvhsQ--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD0zMDAuMDtxPTg1O3JvdGF0ZT1hdXRvO3c9MzAyLjA-/https://s.yimg.com/ma/ae07/frontend/0910d3a9-da36-400d-a871-2c9d0018ac9c.png.cf.jpg">
                                            </aside>
                                        </div>
                                        <div class="lazyLoad loaded">
                                            <div class="previewDisableAction itemDetailInfo"><h3>商品資訊</h3>
                                                <div class="itemInfo__1QaTG">qqq</div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="mod-qna modQna__1CPlL "><h3>問與答</h3>
                                        <div><p class="qna-empty__3dHbV">沒有人對此商品提出問題</p>
                                            <div class="item-qna-comments__2hLjP" data-mode="seller"
                                                 data-node="item-qna-comments">
                                                <div class="item-qna-loader-wrap__T5mdB"><a href="#qnaLoader"
                                                                                            class="item-qna-loader__3XxWJ"
                                                                                            data-mode="qna-loader">顯示更多問與答</a>
                                                </div>
                                            </div>
                                            <p class="imNotify__1aVGp">等等！請到更方便的「<a href="/chat?mid="
                                                                                    target="auction">拍賣即時通</a>」功能聯絡賣家，可以一對一傳訊息和圖片，還會通知新訊息喲！
                                            </p></div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </main>
        </div>
    </div>
</div>
<div id="isoredux-data"
     data-state="{&quot;uh&quot;:{&quot;myaccount&quot;:{&quot;loginUrl&quot;:&quot;https://login.yahoo.com/config/login?.intl=tw&amp;.lang=zh-Hant-TW&quot;,&quot;logoutUrl&quot;:&quot;https://login.yahoo.com/config/login?logout=1&amp;.direct=2&amp;.src=&amp;.intl=tw&amp;.lang=zh-Hant-TW&quot;,&quot;avatar&quot;:&quot;https://s.yimg.com/zq/ecimg/uh_default_user.png&quot;,&quot;nickname&quot;:&quot;&quot;,&quot;ecid&quot;:&quot;&quot;},&quot;cart&quot;:{&quot;cartItems&quot;:[]},&quot;search&quot;:{&quot;query&quot;:{&quot;keyword&quot;:&quot;&quot;,&quot;categoryId&quot;:0,&quot;categoryLevel&quot;:0},&quot;placeholder&quot;:&quot;&quot;},&quot;core&quot;:{&quot;isMobileSearchOn&quot;:false,&quot;isScrollingEffect&quot;:true,&quot;theme&quot;:{&quot;personaIcon&quot;:&quot;uhAuction__personaIcon___2xIba&quot;,&quot;ylogo&quot;:&quot;uhAuction__ylogo___24dQ9&quot;,&quot;icoLoader&quot;:&quot;uhAuction__icoLoader___215SN&quot;,&quot;count&quot;:&quot;uhAuction__count___HJkkK&quot;,&quot;personaCount&quot;:&quot;uhAuction__personaCount___PlpVJ&quot;,&quot;loginBtn&quot;:&quot;uhAuction__loginBtn___2wZwO&quot;,&quot;menuLinkRow&quot;:&quot;uhAuction__menuLinkRow___qXspG&quot;,&quot;menuButtonRow&quot;:&quot;uhAuction__menuButtonRow___1d_-I&quot;,&quot;mainBar&quot;:&quot;uhAuction__mainBar___3MaQf&quot;,&quot;searchWrap&quot;:&quot;uhAuction__searchWrap___37VNk&quot;},&quot;user&quot;:{&quot;isLogin&quot;:true,&quot;alias&quot;:&quot;johnson780727&quot;,&quot;guid&quot;:&quot;HIXDZLNQDUJFC66DBK52M7X3AR&quot;}}},&quot;bid&quot;:{&quot;bidRecords&quot;:{&quot;deletingRecordId&quot;:&quot;&quot;,&quot;detail&quot;:[],&quot;highestBidders&quot;:[],&quot;isDeleting&quot;:false,&quot;isFetching&quot;:false,&quot;isInitialized&quot;:{&quot;detail&quot;:false,&quot;summary&quot;:false},&quot;mode&quot;:&quot;summary&quot;,&quot;summary&quot;:[],&quot;totalRecords&quot;:{&quot;detail&quot;:0,&quot;summary&quot;:0}}},&quot;category&quot;:{&quot;categoryPaths&quot;:[{&quot;id&quot;:&quot;2092072041&quot;,&quot;isLeaf&quot;:false,&quot;listingDuration&quot;:&quot;20&quot;,&quot;showNccMsg&quot;:&quot;&quot;,&quot;title&quot;:&quot;男性精品與服飾&quot;,&quot;url&quot;:&quot;/tw/男性精品與服飾-2092072041-category.html?.r=1532074029&quot;},{&quot;id&quot;:&quot;5299020&quot;,&quot;isLeaf&quot;:false,&quot;listingDuration&quot;:&quot;20&quot;,&quot;showNccMsg&quot;:&quot;&quot;,&quot;title&quot;:&quot;男裝&quot;,&quot;url&quot;:&quot;/tw/男裝-5299020-category.html?.r=1532074029&quot;},{&quot;id&quot;:&quot;2092106468&quot;,&quot;isLeaf&quot;:false,&quot;listingDuration&quot;:&quot;20&quot;,&quot;showNccMsg&quot;:&quot;&quot;,&quot;title&quot;:&quot;品牌T恤&quot;,&quot;url&quot;:&quot;/tw/品牌T恤-2092106468-category.html?.r=1532074029&quot;},{&quot;id&quot;:&quot;2092106469&quot;,&quot;isLeaf&quot;:true,&quot;listingDuration&quot;:&quot;20&quot;,&quot;showNccMsg&quot;:&quot;&quot;,&quot;title&quot;:&quot;8-Style&quot;,&quot;url&quot;:&quot;/tw/2092106469-category-leaf.html?.r=1532074029&quot;}]},&quot;item&quot;:{&quot;id&quot;:&quot;itempreview_HIXDZLNQDUJFC66DBK52M7X3AR_1532073475.60783C5P8A&quot;,&quot;images&quot;:[{&quot;id&quot;:0,&quot;isSpecImage&quot;:false,&quot;md&quot;:{&quot;src&quot;:&quot;https://s.yimg.com/xd/api/res/1.2/pR2mugg8bLphtH0SWfIrWQ--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00ODAuMDtxPTg1O3JvdGF0ZT1hdXRvO3c9NDgwLjA-/https://s.yimg.com/ma/f4e5/frontend/b7b6d0d2-88f9-49e6-a4fa-2faebec20209.jpg.cf.jpg&quot;,&quot;w&quot;:480,&quot;h&quot;:480},&quot;lg&quot;:{&quot;src&quot;:&quot;https://s.yimg.com/xd/api/res/1.2/ut8DUzdILRH3WXmh5ouATw--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00ODA7cT04NTtyb3RhdGU9YXV0bzt3PTQ4MA--/https://s.yimg.com/ma/f4e5/frontend/b7b6d0d2-88f9-49e6-a4fa-2faebec20209.jpg.cf.jpg&quot;,&quot;w&quot;:480,&quot;h&quot;:480},&quot;sm&quot;:{&quot;src&quot;:&quot;https://s.yimg.com/xd/api/res/1.2/wwfhNdInA_Cvi4vZrcKXaA--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7Zmk9ZmlsbDtoPTkwO3E9ODU7cm90YXRlPWF1dG87dz05MA--/https://s.yimg.com/ma/f4e5/frontend/b7b6d0d2-88f9-49e6-a4fa-2faebec20209.jpg.cf.jpg&quot;,&quot;w&quot;:90,&quot;h&quot;:90}},{&quot;id&quot;:1,&quot;isSpecImage&quot;:false,&quot;md&quot;:{&quot;src&quot;:&quot;https://s.yimg.com/xd/api/res/1.2/vNjwQX738SjTxcxmHPvhsQ--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD0zMDAuMDtxPTg1O3JvdGF0ZT1hdXRvO3c9MzAyLjA-/https://s.yimg.com/ma/ae07/frontend/0910d3a9-da36-400d-a871-2c9d0018ac9c.png.cf.jpg&quot;,&quot;w&quot;:302,&quot;h&quot;:300},&quot;lg&quot;:{&quot;src&quot;:&quot;https://s.yimg.com/xd/api/res/1.2/CYKvnKdXO_vnN8KsXxeJhg--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD0zMDA7cT04NTtyb3RhdGU9YXV0bzt3PTMwMg--/https://s.yimg.com/ma/ae07/frontend/0910d3a9-da36-400d-a871-2c9d0018ac9c.png.cf.jpg&quot;,&quot;w&quot;:302,&quot;h&quot;:300},&quot;sm&quot;:{&quot;src&quot;:&quot;https://s.yimg.com/xd/api/res/1.2/TiUA.61fmDcd_D1qBofGXw--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7Zmk9ZmlsbDtoPTkwO3E9ODU7cm90YXRlPWF1dG87dz05MA--/https://s.yimg.com/ma/ae07/frontend/0910d3a9-da36-400d-a871-2c9d0018ac9c.png.cf.jpg&quot;,&quot;w&quot;:90,&quot;h&quot;:90}}],&quot;isBargain&quot;:false,&quot;listingId&quot;:&quot;&quot;,&quot;price&quot;:&quot;11&quot;,&quot;title&quot;:&quot;qqq&quot;,&quot;type&quot;:1,&quot;watchlistCount&quot;:0,&quot;catAttribute&quot;:[],&quot;catId&quot;:&quot;2092106469&quot;,&quot;condition&quot;:&quot;1&quot;,&quot;description&quot;:&quot;qqq&quot;,&quot;hashTags&quot;:[&quot;qqq&quot;],&quot;listingDuration&quot;:7105,&quot;pageView&quot;:0,&quot;presaleShipping&quot;:{&quot;afterDays&quot;:0,&quot;ondate&quot;:0,&quot;type&quot;:0},&quot;sellerId&quot;:&quot;Y9627232110&quot;,&quot;soldQuantity&quot;:0,&quot;startTime&quot;:1532074029235,&quot;status&quot;:2,&quot;subtitle&quot;:&quot;qqq&quot;,&quot;url&quot;:&quot;https://tw.bid.yahoo.com/item/preview?previewKey=itempreview_HIXDZLNQDUJFC66DBK52M7X3AR_1532073475.60783C5P8A&quot;,&quot;video&quot;:{&quot;height&quot;:0,&quot;thumbnail&quot;:&quot;&quot;,&quot;type&quot;:&quot;&quot;,&quot;urlEmbeded&quot;:&quot;&quot;,&quot;width&quot;:0,&quot;player&quot;:{&quot;domId&quot;:&quot;&quot;}},&quot;isR18&quot;:false,&quot;listingPromotions&quot;:[],&quot;location&quot;:&quot;台東縣&quot;,&quot;originPrice&quot;:null,&quot;payments&quot;:[{&quot;id&quot;:&quot;.pctc&quot;,&quot;type&quot;:&quot;cash&quot;,&quot;gateway&quot;:&quot;YAHOO_C2C&quot;,&quot;title&quot;:&quot;ATM轉帳 / Famiport / 輕鬆付帳戶餘額&quot;,&quot;order&quot;:10}],&quot;shippings&quot;:[{&quot;id&quot;:&quot;.srm&quot;,&quot;name&quot;:&quot;郵寄掛號&quot;,&quot;outline&quot;:&quot;單件運費$11&quot;,&quot;rules&quot;:[]},{&quot;id&quot;:&quot;.sh&quot;,&quot;name&quot;:&quot;宅配/貨運&quot;,&quot;outline&quot;:&quot;單件運費$11&quot;,&quot;rules&quot;:[]}],&quot;models&quot;:[{&quot;id&quot;:&quot;newSpecId-newOptionId&quot;,&quot;specCombination&quot;:&quot;newSpecId:newOptionId&quot;,&quot;qty&quot;:1,&quot;customId&quot;:&quot;&quot;,&quot;barcode&quot;:&quot;&quot;,&quot;isbn&quot;:&quot;&quot;}],&quot;productId&quot;:&quot;PREVIEW_DUMMY_PRODUCT_ID&quot;,&quot;specs&quot;:[],&quot;bidInfo&quot;:{&quot;autoBidIncrement&quot;:0,&quot;closeBidEarly&quot;:false,&quot;currentPrice&quot;:0,&quot;endTime&quot;:0,&quot;isAutoExtensionSet&quot;:false,&quot;isBuyNowPriceSet&quot;:false,&quot;minAcceptPrice&quot;:0,&quot;totalBids&quot;:0,&quot;totalQuantity&quot;:3,&quot;status&quot;:0,&quot;barcode&quot;:&quot;&quot;,&quot;bidType&quot;:0,&quot;buyNowPrice&quot;:0,&quot;bidQuantity&quot;:0,&quot;canBuyNow&quot;:false,&quot;highestBidders&quot;:[],&quot;isbn&quot;:&quot;&quot;,&quot;isCancelled&quot;:false,&quot;isLowerThanReservedPrice&quot;:false,&quot;isHighest&quot;:false,&quot;isWinner&quot;:false,&quot;itemNumber&quot;:&quot;&quot;,&quot;lastBidPrice&quot;:0,&quot;maxBidPrice&quot;:0,&quot;transactionStatus&quot;:{&quot;code&quot;:0,&quot;dueTs&quot;:0,&quot;orderId&quot;:&quot;&quot;,&quot;text&quot;:&quot;&quot;},&quot;winQuantity&quot;:0,&quot;wonBidders&quot;:[]},&quot;sellerItemStatus&quot;:{},&quot;preview&quot;:{&quot;submitFee&quot;:&quot;0&quot;,&quot;submitTypeLabel&quot;:&quot;立即刊登&quot;,&quot;operation&quot;:&quot;add&quot;},&quot;bidWonToCartUrl&quot;:&quot;&quot;,&quot;checkedImageId&quot;:0,&quot;formFields&quot;:{},&quot;isAddingCart&quot;:false,&quot;isWatching&quot;:false,&quot;isFetching&quot;:false,&quot;mode&quot;:&quot;modInfo&quot;,&quot;qna&quot;:{&quot;isInitialized&quot;:false,&quot;total&quot;:null,&quot;loader&quot;:{&quot;isFetching&quot;:false,&quot;nextOffset&quot;:0},&quot;posts&quot;:[],&quot;askQuestion&quot;:{&quot;pasteArgs&quot;:{}},&quot;autoFillAsk&quot;:&quot;&quot;},&quot;previewMode&quot;:true,&quot;qtyInput&quot;:1,&quot;submitBidResult&quot;:{&quot;error&quot;:[],&quot;status&quot;:&quot;&quot;},&quot;htagRelated&quot;:[],&quot;relatedListings&quot;:[],&quot;custCatId&quot;:&quot;0&quot;,&quot;previewKey&quot;:&quot;itempreview_HIXDZLNQDUJFC66DBK52M7X3AR_1532073475.60783C5P8A&quot;},&quot;seller&quot;:{&quot;avatar&quot;:&quot;https://ct.yimg.com/cy/1768/39361574426_98028a_192sq.jpg&quot;,&quot;category&quot;:{&quot;isInitialized&quot;:false,&quot;isFetching&quot;:false,&quot;totalItemCount&quot;:&quot;-&quot;,&quot;categories&quot;:[]},&quot;favoriteSeller&quot;:{&quot;isInitialized&quot;:false,&quot;isFetching&quot;:false,&quot;isFavorite&quot;:false},&quot;id&quot;:&quot;Y9627232110&quot;,&quot;isStore&quot;:false,&quot;isSuspended&quot;:false,&quot;isYapeeVerified&quot;:false,&quot;lastLoginTimestamp&quot;:1532073429000,&quot;name&quot;:&quot;Y9627232110&quot;,&quot;listingPromotions&quot;:{&quot;promotions&quot;:[],&quot;isInitialized&quot;:false},&quot;rating&quot;:{&quot;positive&quot;:0,&quot;negative&quot;:0,&quot;neutral&quot;:0,&quot;count&quot;:&quot;-&quot;,&quot;positiveRatio&quot;:0,&quot;isInitialized&quot;:false,&quot;isFetching&quot;:false},&quot;recommendation&quot;:{&quot;listings&quot;:[],&quot;isInitialized&quot;:false,&quot;isFetching&quot;:false},&quot;storeLogo&quot;:&quot;&quot;,&quot;unrepliedListingQna&quot;:{&quot;isInitialized&quot;:false,&quot;isFetching&quot;:false,&quot;count&quot;:&quot;-&quot;,&quot;qnas&quot;:[]},&quot;listings&quot;:{&quot;total&quot;:0,&quot;hits&quot;:[],&quot;category&quot;:[],&quot;cateTree&quot;:[],&quot;cateInfo&quot;:{}},&quot;screenName&quot;:&quot;Y9627232110&quot;},&quot;sidebar&quot;:{&quot;adList&quot;:{&quot;adListings&quot;:[],&quot;adListingsLoaded&quot;:false,&quot;isInitialized&quot;:false,&quot;isFetching&quot;:false,&quot;sellerListings&quot;:[],&quot;sellerListingsLoaded&quot;:false},&quot;stickerAds&quot;:{&quot;isInitialized&quot;:false,&quot;isFetching&quot;:false,&quot;list&quot;:[]}},&quot;cmsAd&quot;:{&quot;waterMark&quot;:{}},&quot;toggle&quot;:{&quot;shippingFeePromotion&quot;:{&quot;name&quot;:&quot;&quot;,&quot;isActive&quot;:false,&quot;start&quot;:1505865600000,&quot;end&quot;:1505865600000,&quot;paymentTypes&quot;:[],&quot;shippingTypes&quot;:[]}},&quot;page&quot;:{&quot;bucket&quot;:&quot;none_rwd&quot;,&quot;clientInfo&quot;:{&quot;browser&quot;:&quot;chrome&quot;,&quot;browserVersion&quot;:&quot;67.0&quot;,&quot;os&quot;:&quot;windows nt&quot;,&quot;inOfficialApp&quot;:false,&quot;isInApp&quot;:false,&quot;isMobile&quot;:false},&quot;crumb&quot;:{},&quot;envConf&quot;:{&quot;billingHost&quot;:&quot;https://tw.billing.yahoo.com&quot;,&quot;buyerHost&quot;:&quot;https://tw.bid.yahoo.com&quot;,&quot;checkoutHost&quot;:&quot;https://tw.billing.bid.yahoo.com&quot;,&quot;featureEnableIM&quot;:true,&quot;featureEnableBlocking&quot;:true,&quot;liveMessageHost&quot;:&quot;wss://tw.bid.yahoo.com&quot;,&quot;partnerAccountId&quot;:&quot;tw.bid.yahoo.com&quot;,&quot;searchHost&quot;:&quot;https://tw.search.bid.yahoo.com&quot;,&quot;sampleRate&quot;:100},&quot;env&quot;:&quot;production&quot;,&quot;errorBox&quot;:{&quot;content&quot;:&quot;&quot;,&quot;title&quot;:&quot;&quot;,&quot;toBeDisplayed&quot;:false,&quot;primaryButtonText&quot;:&quot;&quot;,&quot;secondaryButtonText&quot;:&quot;&quot;,&quot;redirectUrl&quot;:&quot;&quot;,&quot;forcedRedirectUrl&quot;:&quot;&quot;},&quot;renderErrorPageMessage&quot;:&quot;&quot;,&quot;imagesLightBox&quot;:{&quot;active&quot;:false,&quot;zoomIn&quot;:false,&quot;images&quot;:[],&quot;checkedImageId&quot;:0},&quot;redirectToUrl&quot;:null,&quot;route&quot;:{&quot;name&quot;:&quot;itemPreview&quot;,&quot;url&quot;:&quot;/item/preview?previewKey=itempreview_HIXDZLNQDUJFC66DBK52M7X3AR_1532073475.60783C5P8A&quot;,&quot;path&quot;:&quot;/item/preview&quot;,&quot;params&quot;:{},&quot;query&quot;:{&quot;previewKey&quot;:&quot;itempreview_HIXDZLNQDUJFC66DBK52M7X3AR_1532073475.60783C5P8A&quot;}},&quot;popupModal&quot;:{&quot;active&quot;:false},&quot;promoInfo&quot;:{},&quot;scroll&quot;:{&quot;isActive&quot;:false,&quot;params&quot;:{},&quot;targetDomId&quot;:&quot;&quot;},&quot;user&quot;:{&quot;isLogin&quot;:true,&quot;alias&quot;:&quot;johnson780727&quot;,&quot;guid&quot;:&quot;HIXDZLNQDUJFC66DBK52M7X3AR&quot;,&quot;ecid&quot;:&quot;Y9627232110&quot;,&quot;nickname&quot;:&quot;Y9627232110&quot;},&quot;pjax&quot;:{&quot;pjaxReq&quot;:{},&quot;handlePushState&quot;:false,&quot;pjaxFetching&quot;:false},&quot;toast&quot;:{&quot;active&quot;:false,&quot;content&quot;:&quot;&quot;,&quot;enableAutoDismiss&quot;:true,&quot;iconType&quot;:&quot;accept-fill&quot;,&quot;moduleName&quot;:&quot;INIT&quot;,&quot;type&quot;:&quot;normal&quot;},&quot;wssid&quot;:&quot;&quot;}}"></div>
</div>
</div>
>>>>>>> 8987446d231e554a49338a398c28ef505a9fa455

