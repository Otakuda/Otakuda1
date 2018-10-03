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
                                                <?= $cargo_sort ?>
                                                <input type="hidden" value="<?= $cargo_id ?>" name="cargo_id">
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
                                                                    <div>
                                                                        <img src="<?=$input['test']?>">
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                            <ul class="imageList__22FSs">
                                                                <li class="listItem__3BRt8">
                                                                    <mark class="checkedMark__2Qoej"></mark>
                                                                    <div>
                                                                        <h3>上傳圖片</h3>
                                                                    </div>
                                                                </li>
                                                                <li class="listItem__3BRt8">
                                                                    <mark class="checkedMark__2Qoej"></mark>
                                                                    <div>
                                                                        <h3>上傳圖片</h3>
                                                                    </div>
                                                                </li>
                                                                <li class="listItem__3BRt8">
                                                                    <mark class="checkedMark__2Qoej"></mark>
                                                                    <div>
                                                                        <h3>上傳圖片</h3>
                                                                    </div>
                                                                </li>
                                                                <li class="listItem__3BRt8">
                                                                    <mark class="checkedMark__2Qoej"></mark>
                                                                    <div>
                                                                        <h3>上傳圖片</h3>
                                                                    </div>
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
                                                                <a href="<?= base_url() ?>Select_type"
                                                                   class="button-submit button-secondary btn-pad">取消</a>
                                                            </li>
                                                            <li>
                                                                <button class="button-submit button-main btn-pad" type="submit"> 確定
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


