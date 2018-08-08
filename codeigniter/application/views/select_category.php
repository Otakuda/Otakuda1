<div id="bd" class="yui3-g">
    <div class="yui3-u-1">
        <div class="step-bar">
            <ol class="step-list">
                <li class="step current"><span class="step-number">1</span> <span class="step-name">選擇商品類型及分類</span>
                    <span class="icon-next-step"></span></li>
                <li class="step"><span class="step-number">2</span> <span class="step-name">商品資訊與規格</span> <span
                            class="icon-next-step"></span></li>
                <li class="step"><span class="step-number">3</span> <span class="step-name">預覽</span> <span
                            class="icon-next-step"></span></li>
                <li class="step"><span class="step-number">4</span> <span class="step-name">完成</span></li>
            </ol>
        </div>

    </div>
    <div class="yui3-u-1">
        <div class="yui3-u-1">
            <div class="select-category mod-shadow" id="yui_3_12_0_4_1531796242960_256">
                <form class="submit-product-category submit-flow-set mod-shadow"
                      action="<?= base_url() ?>product_edit" method="post"><h3 class="subject">選擇商品類型</h3>
                    <div class="decorations"></div>
                    <fieldset class="product-type " id="yui_3_12_0_4_1531796242960_272">
                        <h3 class="title hide">選擇商品類型</h3>
                        <ul class="input-error hidden">
                            <li>請選擇商品類型</li>
                        </ul>
                    </fieldset>

                    <fieldset class="product-category " id="yui_3_12_0_4_1531796242960_259">
                        <h3 class="title">選擇商品分類</h3>
                        <div>
                            <div>
                                <select id='sel_category' name="sel_category">
                                    <option>-- 请选择商品種類 --</option>
                                    <?php
                                    foreach ($categorys as $category) {
                                        echo "<option value='" . $category['cargo_id'] . "'>" . $category['cargo_sort'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <div class="remindar" id="submit-select-category-button-confirm" data-rapid="general">
                        <input class="button-submit button-main" type="submit" value="下一步">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
