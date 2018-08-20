<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/dropzone/dropzone.min.css">
<style>
    /*.inputfile {*/
    /*width: 0.1px;*/
    /*height: 0.1px;*/
    /*opacity: 0;*/
    /*overflow: hidden;*/
    /*position: absolute;*/
    /*z-index: -1;*/
    /*}*/

    /*.inputfile:focus + label {*/
    /*outline: 1px dotted #000;*/
    /*outline: -webkit-focus-ring-color auto 5px;*/
    /*}*/

    /*.inputfile + label * {*/
    /*pointer-events: none;*/
    /*}*/

    /*img {*/
    /*width: 80px;*/
    /*}*/

    .dropzone {
        background: #fff;
        border: 2px dashed #ddd;
        border-radius: 5px;
        /*width:80px;*/
    }

    .dz-message {
        color: #999;
    }

    .dz-message:hover {
        color: #464646;
    }

    .dz-message h3 {
        font-size: 200%;
        margin-bottom: 10px;
    }
</style>
<div id="bd">
    <div id="yui_3_12_0_4_1531808580258_2035">
        <div class="step-bar">
            <ol class="step-list">
                <li class="step done"><span class="step-number">1</span> <span class="step-name">選擇商品類型及分類</span> <span
                            class="icon-next-step"></span></li>
                <li class="step current"><span class="step-number">2</span> <span class="step-name">商品資訊與規格</span> <span
                            class="icon-next-step"></span></li>
                <li class="step"><span class="step-number">3</span> <span class="step-name">預覽</span> <span
                            class="icon-next-step"></span></li>
                <li class="step"><span class="step-number">4</span> <span class="step-name">完成</span></li>
            </ol>
        </div>

        <div class="preview-wrap ">
            <input type="button" value="快速預覽" class="button-submit button-main"
                   data-url="/partner/merchandise/ajax_item_preview">
        </div>
    </div>

    <div class="yui3-u-1" id="yui_3_12_0_4_1531808580258_2515">
        <div class="yui3-u-1" id="yui_3_12_0_4_1531808580258_2514">
            <div class="select-category mod-shadow" id="yui_3_12_0_4_1531808580258_320">
                <form class="submit-product-category submit-flow-set mod-shadow"
                      action="<?= base_url() ?>Product_preview" method="post" id="yui_3_12_0_4_1531808580258_2513">
                    <h3 class="subject">選擇商品類型</h3>
                    <div class="selected-product-category">
                        <div class="caption">商品分類：</div>
                        <div class="value">
                            <?= $show['cargo_sort'] ?>
                            <input type="hidden" name="cargo_sort" value="<?= $show['cargo_sort'] ?>" readonly>
                            <input type="hidden" name="cargo_id" value="<?= $show['cargo_id'] ?>" readonly>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="yui3-u-1" id="yui_3_12_0_4_1531808580258_2478">
        <div class="module-item-edit " id="module-item-edit">
            <div id="main">
                <div class="field-wrapper" id="yui_3_12_0_4_1531808580258_1227">
                    <div class="fieldset-basic submit-flow-set mod-shadow" id="yui_3_12_0_4_1531808580258_1226">
                        <h3 class="subject">商品資訊與規格</h3>
                        <fieldset class="d-form-fields submit-basic" id="yui_3_12_0_4_1531808580258_1225">
                            <legend class="head"> 商品資訊與規格</legend>
                            <div class="row-wrap item-title">
                                <div class="caption"><span>商品名稱*</span></div>
                                <div class="form-field-input">
                                    <input type="text" name="product_name" maxlength="60">
                                </div>
                            </div>
                            <div class="row-wrap summary" id="yui_3_12_0_1_1531884359549_23">
                                <div class="caption" id="yui_3_12_0_1_1531884359549_22">
                                    <span>商品簡述</span>
                                </div>
                                <div class="form-field-input">
                                    <input type="text" class="description" name="product_brief" placeholder="簡單介紹商品">
                                </div>
                            </div>
                            <div class="row-wrap hash-tag-row">
                                <div class="caption">
                                    <span>標籤</span>
                                </div>
                                <div class="form-field-input">
                                    <input type="text" class="description" name="product_brief_detail"
                                           placeholder="例子：今日最便宜">
                                </div>
                            </div>
                            <div class="row-wrap">
                                <div class="caption">
                                    <span>商品圖片</span>
                                </div>
                                <div id="content">
                                    <div id="my-dropzone" class="dropzone">
                                        <div class="dz-message">
                                            <h3>上傳圖片</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            foreach(glob('./temp_image/*$temp_name*') as $total_image){
                            echo $total_image;
                            }
                            ?>
                            <div class="row-wrap item-qty-wrap" id="yui_3_12_0_1_1531884359549_20">
                                <div class="caption">
                                    <span>數量</span>
                                </div>
                                <div class="form-field-input" id="yui_3_12_0_1_1531884359549_19">
                                    <div class="single-qty-wrap" id="yui_3_12_0_1_1531884359549_18">
                                        <input type="text" name="product_quantity" id="product_quantity"
                                               class="int-only small-input column-left" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row-wrap sale-price-wrap">
                                <div class="caption">
                                    <span>定價(RM)</span>
                                </div>
                                <div class="form-field-input">
                                    <input type="text" id="product_price"
                                           class="price-only small-input column-left"
                                           name="product_price" autocomplete="off">
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="fieldset-advance submit-flow-set mod-shadow">
                        <h3 class="subject">進階設定選項<span class="optional">( 可選擇填或者不填 )</span></h3>
                        <div class="decorations"></div>
                        <fieldset class="d-form-fields">
                            <legend class="head">
                                <span class="main-info">進階設定選項</span>
                            </legend>
                            <div class="row-wrap">
                                <div class="caption">
                                    <span class="main-info">多件優惠</span>
                                </div>
                                <div class="form-field-input item-promotion-wrap">
                                    <div class="item-promotion item-promotion-on"
                                         id="yui_3_12_0_4_1532326529175_2570">
                                        <input type="checkbox" name="privilege" id="promotion" value="1">
                                        <label for="item-promotion">設定一次購買多件享優惠價</label>
                                        <ol class="options-wrap" id="yui_3_12_0_4_1532326529175_2587">
                                            <li class="option" id="yui_3_12_0_4_1532326529175_2586"> 一次購買
                                                <input class="int-only qty" type="text" value=""
                                                       name="product_total_quantity"
                                                       id="product_total_quantity" disabled> 件以上，每件RM
                                                <input class="price-only price" type="text" value=""
                                                       name="product_total_price" id="product_total_price" disabled>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="row-wrap quantity-limit-wrap">
                                <div class="caption"><span>購買數量限制</span></div>
                                <div class="form-field-input">
                                    <input type="text" name="quantityLimit" id="quantityLimit"
                                           class="int-only medium-input column-left"
                                           value="" maxlength="3" autocomplete="off">
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="browser-btn" id="submit-edit-confirm-button" data-rapid="general">
                        <input type="submit" value="下一步" class="button-submit button-main btn-pad">
                        <a href="<?= base_url() ?>Select_type" class="button-submit button-secondary btn-pad"
                           data-rapid_p="2">取消</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/dropzone/dropzone.min.js"></script>
<script>
    var total_image_array = [];
    $(document).ready(function () {
        Dropzone.autoDiscover = false;

        $("#my-dropzone").dropzone({
            addRemoveLinks: true,
            maxFiles: 5,
            url: "<?php echo site_url("Product_edit/upload") ?>",

            init: function () {
                this.on("success", function (file, response) {
                    var data = JSON.parse(response);
                    var file_name = data.file_name;
                    total_image_array.push(file_name);
                    console.log(total_image_array);
                    file.serverId = response;
                });
                this.on("removedFile", function (file) {
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
                });

            }

        });

    });
</script>
