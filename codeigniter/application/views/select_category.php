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
                      action="<?= base_url() ?>cargo_edit" method="post"><h3 class="subject">選擇商品類型</h3>
                    <div class="decorations"><em>block</em> <em class="arrow">arrow</em></div>
                    <input type="hidden" name="_crumb" value="IkhlFZ/lLpv"> <input type="hidden" name="action"
                                                                                   value="edit"> <input type="hidden"
                                                                                                        name="op"
                                                                                                        value="add">
                    <input type="hidden" name="rememberLocation" value="on">
                    <fieldset class="product-type " id="yui_3_12_0_4_1531796242960_272"><h3 class="title hide">
                            選擇商品類型</h3>
                        <ul class="input-error hidden">
                            <li>請選擇商品類型</li>
                        </ul>

                    </fieldset>
                    <fieldset class="product-category " id="yui_3_12_0_4_1531796242960_259"><h3 class="title">
                            選擇商品分類</h3>
                        <ul class="input-error hidden">
                            <li>請選擇商品分類</li>
                        </ul>

                        <div>
                            <div>

                                <div></div>
                                <select id='sel_category' name="sel_category">
                                    <option>-- 请选择地区 --</option>
                                    <?php
                                    foreach ($categorys as $category) {
                                        echo "<option value='" . $category['cargo_id'] . "'>" . $category['cargo_name'] . "</option>";
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>

                    </fieldset>
                    <div class="remindar" id="submit-select-category-button-confirm" data-rapid="general"><h3
                                class="caption">注意事項</h3>
                        <ul class="property-submit-reminder">
                            <li>商品刊登後將不能更改類別（ 技巧教學：<a
                                        href="https://tw.bid.yahoo.com/phtml/auc/tw/classroom/advanced/advanced_sell_cate.html"
                                        target="_blank" data-rapid_p="1">選擇分類</a> ）
                            </li>
                            <li>若商品刊錯類別，會降低商品的曝光率！<a href="https://tw.bid.yahoo.com/university/lesson/marketing/17"
                                                     target="_blank" data-rapid_p="2">詳細說明</a></li>
                            <li class="emphasize">請注意，若您繼續刊登動作，視同您已經同意「Yahoo奇摩拍賣使用規範！」<a
                                        href="http://tw.bid.yahoo.com/phtml/auc/tw/auction_tos.html" target="_blank"
                                        data-rapid_p="3">使用規範說明</a></li>
                        </ul>
                        <ul class="category-submit-reminder">
                            <li class="MERCHANDISE_RULEMESSAGE_23000">
                                <ul class="note">
                                    <li>嚴禁刊登仿冒品等侵害他人著作權、商標、專利等權利之侵權物品（<a
                                                href="https://tw.bid.yahoo.com/help/auct/policy/item/copyright.html"
                                                target="_blank" data-rapid_p="4">詳細說明</a>），嚴重違規者將立即停權。
                                    </li>

                                    <li>刊登費用：刊登商品時，須支付刊登費用，商品若賣出，須支付交易手續費（<a
                                                href="https://tw.bid.yahoo.com/help/new_auc/fee/FeeHome.html"
                                                target="_blank" data-rapid_p="5">詳見費用說明</a>）。
                                    </li>

                                    <li>刊登前請注意<a href="https://tw.bid.yahoo.com/help/new_auc/policy/tos.html"
                                                 target="_blank" data-rapid_p="6">拍賣使用規範</a>，除了勿進行<a
                                                href="https://tw.bid.yahoo.com/help/new_auc/policy/listing/index.html"
                                                target="_blank" data-rapid_p="7">違規刊登行為</a>，同時刊登前請確認商品是否為<a
                                                href="https://tw.bid.yahoo.com/help/new_auc/policy/item/exam.html"
                                                target="_blank" data-rapid_p="8">應施檢商品並檢驗合格</a>，禁止<a
                                                href="https://tw.bid.yahoo.com/help/new_auc/policy/item/index.html"
                                                target="_blank" data-rapid_p="9">刊登違規及違法商品</a>。
                                    </li>
                                </ul>
                            </li>
                            <li class="MERCHANDISE_RULEMESSAGE_2092101501">
                                <ul class="note">


                                    <li>嚴禁刊登仿冒品等侵害他人著作權、商標、專利等權利之侵權物品（<a
                                                href="https://tw.bid.yahoo.com/help/auct/policy/item/copyright.html"
                                                target="_blank" data-rapid_p="10">詳細說明</a>），嚴重違規者將立即停權。
                                    </li>
                                    <li>刊登費用：刊登商品時，須支付刊登費用，商品若賣出，須支付交易手續費（<a
                                                href="https://tw.bid.yahoo.com/help/new_auc/fee/FeeHome.html"
                                                target="_blank" data-rapid_p="11">詳見費用說明</a>）。
                                    </li>
                                    <li>刊登前請注意<a href="https://tw.bid.yahoo.com/help/new_auc/policy/tos.html"
                                                 target="_blank" data-rapid_p="12">拍賣使用規範</a>，除了勿進行<a
                                                href="https://tw.bid.yahoo.com/help/new_auc/policy/listing/index.html"
                                                target="_blank" data-rapid_p="13">違規刊登行為</a>，同時刊登前請確認商品是否為<a
                                                href="https://tw.bid.yahoo.com/help/new_auc/policy/item/exam.html"
                                                target="_blank" data-rapid_p="14">應施檢商品並檢驗合格</a>，禁止<a
                                                href="https://tw.bid.yahoo.com/help/new_auc/policy/item/index.html"
                                                target="_blank" data-rapid_p="15">刊登違規及違法商品</a>。
                                    </li>
                                </ul>
                            </li>

                        </ul>

                        <input class="button-submit button-main" type="submit" value="下一步">

                    </div>

                </form>
            </div>


        </div>

    </div>
</div>
