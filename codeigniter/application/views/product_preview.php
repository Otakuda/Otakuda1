
    <div class="yui3-g">
        <div id="bd" class="yui3-g">
            <div class="yui3-u-1">
                <div class="step-bar">
                    <ol class="step-list">
                        <li class="step done"><span class="step-number">1</span> <span
                                    class="step-name">選擇商品類型及分類</span> <span
                                    class="icon-next-step"></span></li>
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
                            <form action="<?=base_url()?>Product_upload/doUpload" method="post">
                            <div  class="pageRoot__2VRqJ " data-reactroot="">
                                <div class="pageRowBox__3xNZf">
                                    <section class="previewInfoWrap__3L8oc">
                                        <div class="inner__1kUlf">
                                            <h2 class="title__3SBcO">商品刊登預覽</h2>
                                            <div class="decorations__27qQx"><em></em>
                                                <em class="arrow__C5DDd"></em>
                                            </div>
                                            <ul>
                                                <li class="previewRow__1HXjq">
                                                    <span class="caption__1FjF1">商品分類：<?= $cargo_sort ?></span>
                                                    <input type="hidden" value="<?= $cargo_id ?>" name="cargo_id">
                                                </li>
                                            </ul>
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
                                                                    <img class="focusedImage__3HmoX " name="images"
                                                                         src="<?php echo base_url() . $image_path; ?>">
                                                                </figure>
                                                            </div>
                                                            <ul class="imageList__22FSs">
                                                                <li class="listItem__3BRt8">
                                                                    <mark class="checkedMark__2Qoej"></mark>
                                                                    <img src="<?php echo base_url() . $image_path; ?>"
                                                                         class="image__3l8Vh">
                                                                    <input type="hidden" name="product_image"
                                                                           id="'product_image"
                                                                           value="<?= $image_path ?> "
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
                                                                        <button class="qtyButton__2r29Y qtyMinusButton__2isH0">
                                                                            <i class="fi-minus qtyButtonIcon__2LVNb"></i>
                                                                        </button>
                                                                        <input type="number" class="qtyInput__1dbgq "
                                                                               min="1" max="<?= $product_quantity ?>"
                                                                               value="1">
                                                                        <input type="hidden" class="qtyInput__1dbgq "
                                                                               name="product_quantity"
                                                                               value="<?= $product_quantity ?>">
                                                                        <button class="qtyButton__2r29Y qtyPlusButton__2NOnk">
                                                                            <i class="fi-plus qtyButtonIcon__2LVNb"></i>
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
                                                                    </div>
                                                                </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </main>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="action-wrap">
                        <ul id="submit-preview-confirm-button">
                            <li>
                                <a href="<?= base_url() ?>Select_type" class="button-submit button-secondary btn-pad"
                                   data-rapid_p="2">取消</a>
                            </li>
                            <li>
                                <button class="button-submit button-main btn-pad"
                                        data-rapid_p="2">確定</button>
                            </li>
                        </ul>
                        </form>
                    </div>



