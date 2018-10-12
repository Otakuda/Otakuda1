<script src="<?= base_url() ?>js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {

        var jssor_1_SlideshowTransitions = [
            {$Duration: 800, $Opacity: 2}
        ];

        var jssor_1_options = {
            $AutoPlay: 1,
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 980;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    });
</script>
<style>
    .input-number-group {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

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

    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    /*jssor slider bullet skin 051 css*/
    .jssorb051 .i {
        position: absolute;
        cursor: pointer;
    }

    .jssorb051 .i .b {
        fill: #fff;
        fill-opacity: 0.5;
    }

    .jssorb051 .i:hover .b {
        fill-opacity: .7;
    }

    .jssorb051 .iav .b {
        fill-opacity: 1;
    }

    .jssorb051 .i.idn {
        opacity: .3;
    }

    /*jssor slider arrow skin 051 css*/
    .jssora051 {
        display: block;
        position: absolute;
        cursor: pointer;
    }

    .jssora051 .a {
        fill: none;
        stroke: #fff;
        stroke-width: 360;
        stroke-miterlimit: 10;
    }

    .jssora051:hover {
        opacity: .8;
    }

    .jssora051.jssora051dn {
        opacity: .5;
    }

    .jssora051.jssora051ds {
        opacity: .3;
        pointer-events: none;
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
                        <span class="icon-next-step"></span>
                    </li>
                    <li class="step done">
                        <span class="step-number">2</span>
                        <span class="step-name">商品資訊與規格</span>
                        <span class="icon-next-step"></span>
                    </li>
                    <li class="step current">
                        <span class="step-number">3</span>
                        <span class="step-name">預覽</span>
                        <span class="icon-next-step"></span>
                    </li>
                    <li class="step">
                        <span class="step-number">4</span>
                        <span class="step-name">完成</span>
                    </li>
                </ol>
            </div>
            <div class="item-preview">
                <div>
                    <div>
                        <form action="<?= base_url() ?>Product_upload/doUpload" method="post">
                            <div class="pageRoot__2VRqJ ">
                                <div class="pageRowBox__3xNZf">
                                    <section class="previewInfoWrap__3L8oc">
                                        <div class="inner__1kUlf">
                                            <h2 class="title__3SBcO">商品刊登預覽</h2>
                                            <div class="caption">商品分類：
                                                <?php echo $this->session->userdata('cargo_sort'); ?>
                                                <input type="hidden" value="<?= $cargo_id ?>" name="cargo_id">
                                                <input type="hidden"
                                                       value="<?php echo $this->session->userdata('shop_id'); ?>"
                                                       name="shop_id">
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div>
                                    <main class="main__3C2yn">
                                        <div class="pure-g flexContainer__jnSOl">
                                            <div class="pure-u-1 firstFoldWrap__3LZTE">
                                                <div class="pure-g firstFold__1T18d">
                                                    <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-2-5 itemImages__1firo">
                                                        <section class="wrap__bGMYC">
                                                            <div>
                                                                <figure class="focusedImageFigure__c4PVd">
                                                                    <div id="jssor_1"
                                                                         style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                                                                        <div data-u="slides"
                                                                             style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                                                                            <?php
                                                                            foreach ($image_url as $img){
                                                                                ?>
                                                                                <div>
                                                                                    <img data-u="image"
                                                                                         src="<?= "temp_image/" . $img ?>">
                                                                                </div>
                                                                                <input type="hidden" name="img_path[]"
                                                                                       value="<?= $img ?>" >
                                                                            <?php } ?>

                                                                        </div>
                                                                        <div data-u="navigator" class="jssorb051"
                                                                             style="position:absolute;bottom:12px;right:12px;}"
                                                                             data-autocenter="1" data-scale="0.5"
                                                                             data-scale-bottom="0.75">
                                                                            <div data-u="prototype" class="i"
                                                                                 style="width:16px;height:16px;">
                                                                                <svg viewbox="0 0 16000 16000"
                                                                                     style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                                                    <circle class="b" cx="8000"
                                                                                            cy="8000" r="5800"></circle>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <div data-u="arrowleft" class="jssora051"
                                                                             style="width:55px;height:55px;top:0px;left:25px;"
                                                                             data-autocenter="2" data-scale="0.75"
                                                                             data-scale-left="0.75">
                                                                            <svg viewbox="0 0 16000 16000"
                                                                                 style="position:absolute;top:0;left:0;width:100%;height:100%;background-color:black;">
                                                                                <polyline class="a"
                                                                                          points="11040,1920 4960,8000 11040,14080 "></polyline>
                                                                            </svg>
                                                                        </div>
                                                                        <div data-u="arrowright" class="jssora051"
                                                                             style="width:55px;height:55px;top:0px;right:25px;"
                                                                             data-autocenter="2" data-scale="0.75"
                                                                             data-scale-right="0.75">
                                                                            <svg viewbox="0 0 16000 16000"
                                                                                 style="position:absolute;top:0;left:0;width:100%;height:100%;background-color:black;">
                                                                                <polyline class="a"
                                                                                          points="4960,1920 11040,8000 4960,14080 "></polyline>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </figure>
                                                            </div>

                                                            <!--                                                            <ul class="imageList__22FSs">-->
                                                            <!--                                                                --><?php
                                                            //                                                                foreach($image_url as $img):
                                                            //                                                                    ?>
                                                            <!--                                                                <li class="listItem__3BRt8">-->
                                                            <!--                                                                    <mark class="checkedMark__2Qoej"></mark>-->
                                                            <!--                                                                    <div>-->
                                                            <!--                                                                        -->
                                                            <!--                                                                    </div>-->
                                                            <!--                                                                </li>-->
                                                            <!--                                                                --><?php //endforeach; ?>
                                                            <!---->
                                                            <!--                                                            </ul>-->
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
                                                    </div>
                                                    <div class="action-wrap">
                                                        <ul>
                                                            <li>
                                                                <a href=""
                                                                <button class="button-submit button-secondary btn-pad">
                                                                    取消
                                                                </button>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <button class="button-submit button-main btn-pad"
                                                                        type="submit"> 確定
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </main>
                                </div>
                        </form>
                    </div>
                </div>
            </div>


