<div id="bd" class="yui3-g">
    <div class="yui3-u-1 stepBar-wrap" id="yui_3_12_0_4_1531808580258_2035">

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

        <div class="preview-wrap "><input type="button" value="快速預覽" class="button-submit button-main"
                                          data-url="/partner/merchandise/ajax_item_preview"></div>
    </div>
    <div class="yui3-u-1" id="yui_3_12_0_4_1531808580258_2515">
        <div class="yui3-u-1" id="yui_3_12_0_4_1531808580258_2514">
            <div class="select-category mod-shadow" id="yui_3_12_0_4_1531808580258_320">
                <form class="submit-product-category submit-flow-set mod-shadow"
                      action="<?=base_url()?>Product_preview" method="post" id="yui_3_12_0_4_1531808580258_2513"><h3
                            class="subject">選擇商品類型</h3>
                    <div class="decorations"><em>block</em> <em class="arrow">arrow</em></div>
                    <input type="hidden" name="_crumb" value="IkhlFZ/lLpv"> <input type="hidden" name="action"
                                                                                   value="back"> <input type="hidden"
                                                                                                        name="op"
                                                                                                        value="add">
                    <input type="hidden" name="rememberLocation" value="on">
                    <fieldset class="product-type hidden" id="yui_3_12_0_4_1531808580258_369"><h3 class="title hide">
                            選擇商品類型</h3>
                        <ul class="input-error hidden">
                            <li>請選擇商品類型</li>
                        </ul>

                    </fieldset>
                    <div class="selected-product-category" id="yui_3_12_0_4_1531808580258_2512">
                        <div class="caption">商品分類：</div>
                        <div class="value"><?= $show['cargo_name'] ?>
                        </div>
                    </div>
                    <fieldset class="product-category hidden" id="yui_3_12_0_4_1531808580258_323"><h3 class="title">
                            選擇商品分類</h3>
                        <ul class="input-error hidden">
                            <li>請選擇商品分類</li>
                        </ul>
                    </fieldset>
                    <div class="remindar un-changed hidden" id="submit-select-category-button-confirm"
                         data-rapid="general"><h3 class="caption">注意事項</h3>
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
                                               <input class="button-submit button-main button-disabled" type="submit" value="儲存" disabled=""
                               data-rapid_p="132"> <input class="button-cancel button-secondary" type="button"
                                                          value="取消" data-rapid_p="133"
                                                          id="yui_3_12_0_4_1531808580258_2519"></div>
                </form>
            </div>


        </div>

    </div>
    <div class="yui3-u-1" id="yui_3_12_0_4_1531808580258_2478">
        <div class="module-item-edit " id="module-item-edit">
            <div id="main">
                <form action="" method="post" name="product" id="product"
                      data-info="{&quot;isUpdate&quot;:&quot;&quot;, &quot;isBidden&quot;: &quot;&quot;, &quot;isOldAuctionItem&quot;: &quot;&quot;, &quot;isOldAuctionItemEver&quot;: &quot;&quot;}"
                      autocomplete="off"> <!-- 產品規格介紹 --> <input type="hidden" name="_crumb" value="IkhlFZ/lLpv"> <input
                            type="hidden" name="action" value="preview"> <input type="hidden" name="mtype"
                                                                                value="basic"> <input type="hidden"
                                                                                                      name="op"
                                                                                                      value="add">
                    <input type="hidden" name="cid" value="2092106469"> <input type="hidden" name="mid" value=""> <input
                            type="hidden" name="isNew" value="1"> <input type="hidden" name="isISBN" value=""
                                                                         class="isISBN"> <input type="hidden"
                                                                                                name="isOldAuctionItem"
                                                                                                value="">
                    <div class="field-wrapper" id="yui_3_12_0_4_1531808580258_1227">
                        <div class="fieldset-basic submit-flow-set mod-shadow" id="yui_3_12_0_4_1531808580258_1226"><h3
                                    class="subject">商品資訊與規格</h3>
                            <div class="decorations"><em>block</em> <em class="arrow">arrow</em></div>
                            <div class="attributes-json hidden">[]</div>
                            <fieldset class="d-form-fields submit-basic" id="yui_3_12_0_4_1531808580258_1225">
                                <legend class="head"> 商品資訊與規格</legend>
                                <div class="row-wrap item-title">
                                    <div class="caption"><span>標題名稱</span></div>
                                    <div class="form-field-input"><input type="text" name="itemTitle"
                                                                         maxlength="60"></div>
                                </div>
                                <div class="row-wrap summary" id="yui_3_12_0_1_1531884359549_23">
                                    <div class="caption" id="yui_3_12_0_1_1531884359549_22"><span>商品簡述</span> <span class="hint-font">(非必填)</span></div>
                                    <div class="form-field-input"><input type="text" class="description"
                                                                         name="itemBrief" value="" maxlength="50"></div>
                                </div>
                                <div class="row-wrap hash-tag-row">
                                    <div class="caption"><span>標籤</span> <span class="hint-font">(非必填)</span></div>
                                    <div class="form-field-input"><input type="text" class="description"
                                                                         name="itemBrief" value="" maxlength="50">
                                                <div class="vanquish"></div>
                                            </hash-tag-t>
                                            <input type="hidden" name="isHashtagActive" value="1"> </label>
                                        <p class="htag-warn">message</p></div>
                                </div>
                                <div class="row-wrap">
                                    <div class="caption"><span>商品图片</span> </div>
                                    <div class="form-field-input upload-image-wrap">
                                        <div class="illuTrans-wrap ver2" id="yui_3_12_0_4_1531808580258_2448">
                                            <div class="trigger-wrap"><label class="yui3-u trigger"
                                                                             for="illuTrans-auc-inputOrigin953">选择图片</label>

                                            </div>
                                            <section class="illuTrans basic" id="illuTrans-auc90"><h3>illuTrans</h3>
                                                <ul class="yui3-g" id="yui_3_12_0_4_1531808580258_2202">
                                                    <li class="yui3-u  main" id="illusTrans-list-15318085813522033">
                                                        <div>
                                                            <div class="irwrap">
                                                                <div class="irens"><img
                                                                            id="yui_3_12_0_4_1531808580258_45"
                                                                            src="https://s.yimg.com/ma/newauctions/img/transparent.gif">
                                                                </div>
                                                            </div>
                                                            <a href="#delete" class="delete ep"
                                                               title="delete this image">delete</a> <a href="#view"
                                                                                                       class="view ep"
                                                                                                       title="take a preview">view</a>
                                                            <div class="vanquish"></div>
                                                            <p>progress</p></div>
                                                    </li>
                                                    <li class="yui3-u" id="illusTrans-list-15318085813521218">
                                                        <div>
                                                            <div class="irwrap">
                                                                <div class="irens"><img
                                                                            id="yui_3_12_0_4_1531808580258_49"
                                                                            src="https://s.yimg.com/ma/newauctions/img/transparent.gif">
                                                                </div>
                                                            </div>
                                                            <a href="#delete" class="delete ep"
                                                               title="delete this image">delete</a> <a href="#view"
                                                                                                       class="view ep"
                                                                                                       title="take a preview">view</a>
                                                            <div class="vanquish"></div>
                                                            <p>progress</p></div>
                                                    </li>
                                                    <li class="yui3-u" id="illusTrans-list-1531808581352523">
                                                        <div>
                                                            <div class="irwrap">
                                                                <div class="irens"><img
                                                                            id="yui_3_12_0_4_1531808580258_53"
                                                                            src="https://s.yimg.com/ma/newauctions/img/transparent.gif">
                                                                </div>
                                                            </div>
                                                            <a href="#delete" class="delete ep"
                                                               title="delete this image">delete</a> <a href="#view"
                                                                                                       class="view ep"
                                                                                                       title="take a preview">view</a>
                                                            <div class="vanquish"></div>
                                                            <p>progress</p></div>
                                                    </li>
                                                    <li class="yui3-u" id="illusTrans-list-15318085813527828">
                                                        <div>
                                                            <div class="irwrap">
                                                                <div class="irens"><img
                                                                            id="yui_3_12_0_4_1531808580258_57"
                                                                            src="https://s.yimg.com/ma/newauctions/img/transparent.gif">
                                                                </div>
                                                            </div>
                                                            <a href="#delete" class="delete ep"
                                                               title="delete this image">delete</a> <a href="#view"
                                                                                                       class="view ep"
                                                                                                       title="take a preview">view</a>
                                                            <div class="vanquish"></div>

                                                            <p>progress</p></div>
                                                    </li>
                                                    <li class="yui3-u" id="illusTrans-list-15318085813523159">
                                                        <div>
                                                            <div class="irwrap">
                                                                <div class="irens"><img
                                                                            id="yui_3_12_0_4_1531808580258_61"
                                                                            src="https://s.yimg.com/ma/newauctions/img/transparent.gif">
                                                                </div>
                                                            </div>
                                                            <a href="#delete" class="delete ep"
                                                               title="delete this image">delete</a> <a href="#view"
                                                                                                       class="view ep"
                                                                                                       title="take a preview">view</a>
                                                            <div class="vanquish"></div>
                                                            <p>progress</p></div>
                                                    </li>

                                                </ul>
                                                <div class="vanquish"><input type="file"
                                                                             accept="image/jpg,image/jpeg,image/tif,image/tiff,image/png"
                                                                             multiple=""
                                                                             id="illuTrans-auc-inputOrigin953"></div>
                                                <div class="blocker"><p>Drop image here.</p></div>
                                               </section>
                                            <aside class="multi-image-promote"><h3>multiimage promote</h3>
                                                <div class="ens"><p></p>  <img
                                                            src="https://s.yimg.com/ma/migrate/newauctions/images/item/multi-pic.gif">
                                                </div>
                                            </aside>

                                        </div>
                                    </div>
                                </div>
                                <div class="row-wrap item-qty-wrap" id="yui_3_12_0_1_1531884359549_20">
                                    <div class="caption"><span>數量</span></div>
                                    <div class="form-field-input" id="yui_3_12_0_1_1531884359549_19">
                                        <div class="single-qty-wrap" id="yui_3_12_0_1_1531884359549_18"><input
                                                    type="hidden" name="originalTotalQuantity" value="" maxlength="3">
                                            <input type="text" name="totalQuantity" id="totalQuantity"
                                                   class="int-only small-input column-left"  maxlength="3"
                                                   autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="row-wrap sale-price-wrap">
                                    <div class="caption"><span>定價</span></div>
                                    <div class="form-field-input"><input type="text" id="salePrice"
                                                                         class="price-only small-input column-left"
                                                                         name="salePrice" value="" maxlength="9"
                                                                         autocomplete="off">
                                        <div class="column-left set-promotion-price"></div>
                                    </div>
                                </div>
                                <div class="row-wrap promo-price-wrap hidden">
                                    <div class="caption"><span>促銷價</span></div>
                                    <div class="form-field-input"><input type="text" id="promoPrice"
                                                                         class="price-only small-input column-left"
                                                                         name="promoPrice" value="" maxlength="9"
                                                                         autocomplete="off"></div>
                                </div>


                                <div class="row-wrap html-edit-wrap" data-original-desc-length=""
                                     id="yui_3_12_0_4_1531808580258_1224">
                                    <div class="caption"><span>詳細介紹</span>
                                    </div>
                                    <div class="form-field-input"><input type="text" name="itemTitle"
                                                                         ></div>

                                </div>
                                <div class="row-wrap hidden">
                                    <div class="caption"><span>更多介紹</span> <a href="#coachs"
                                                                              data-coach="{&quot;title&quot;:&quot;\u4ec0\u9ebc\u662f\u66f4\u591a\u4ecb\u7d39&quot;,&quot;desc&quot;:&quot;\u66f4\u591a\u4ecb\u7d39\u88dc\u5145\u5546\u54c1\u5404\u7a2e\u4e0d\u540c\u7684\u5c6c\u6027\u503c\uff0c\u5176\u4e2d\u6709\u5fc5\u586b\u6b04\u4f4d\u4e5f\u6709\u975e\u5fc5\u586b\u6b04\u4f4d\u3002\u901a\u5e38\u4ee53C\u7522\u54c1\u7684\&quot;\u66f4\u591a\u4ecb\u7d39\&quot;\u5167\u5bb9\u6703\u8f03\u591a\uff0c\u8209\u4f8b\u50cf\u667a\u6167\u578b\u624b\u6a5f\u7522\u54c1\u9700\u8981\u8aaa\u660e\u7167\u76f8\u6a5f\u529f\u80fd\u3001\u5132\u5b58\u5bb9\u91cf\u3001\u983b\u7387\u7cfb\u7d71\u7b49\u7b49\u3002&quot;,&quot;img&quot;:&quot;https:\/\/s.yimg.com\/qs\/auc\/new_auction\/submit\/more_item_page_attribute_3.jpg&quot;}">show
                                            coach page</a></div>
                                    <div class="form-field-input attributes-obj" id="yui_3_12_0_4_1531808580258_1542">
                                        <div class="attributes-wrap"></div>
                                        <div class="specs-attributes-templates hidden"
                                             id="yui_3_12_0_4_1531808580258_1545">
                                            <xmp class="attribute">
                                                <div class="attribute-wrap" id="attribute-wrap-{{id}}"
                                                     data-index="{{index}}" data-id="{{id}}" data-type="{{type}}">
                                                    <input type="hidden" name="catAttributesName[{{id}}]"
                                                           value="{{name}}">
                                                    <div class="border">
                                                        <div class="caption">{{name}}</div>
                                                        {{#if isBidden}}
                                                        <div class="attribute-values-wrap multi-select-wrap">
                                                            {{#if checkbox}}
                                                            {{#if specValue}}
                                                            <div class="show-attribute-value">
                                                                <span>{{.}}</span>
                                                            </div>
                                                            {{else}}
                                                            <div class="show-attribute-value">
                                                                {{#each selectedValue}}
                                                                {{#each option}}
                                                                {{#if isSelected}}<span>{{value}}</span>{{/if}}
                                                                {{/each}}
                                                                {{/each}}
                                                            </div>
                                                            {{/if}}
                                                            {{else}}{{#if radiobox}} <!-- else if -->
                                                            <div class="text">
                                                                {{#each option}}
                                                                <span>{{#if isSelected}}{{value}} {{/if}}</span>
                                                                {{/each}}
                                                            </div>
                                                            {{else}}
                                                            <div class="text">
                                                                {{value}}
                                                            </div>
                                                            {{/if}}{{/if}}
                                                        </div>
                                                        {{else}}
                                                        <div class="attribute-values-wrap{{#if checkbox}} multi-select-wrap{{/if}}">
                                                            {{#if checkbox}}

                                                            {{#if specValue}}
                                                            <div class="show-attribute-value">
                                                                {{#each specValue}}
                                                                <span>{{.}}</span>
                                                                <input type="hidden" name="catAttributes[{{../id}}]"
                                                                       value="{{.}}">
                                                                {{/each}}
                                                            </div>
                                                            {{else}}
                                                            <div class="button-add-wrap">
                                                                <a href="#"
                                                                   class="button-add{{#unless showAddButton}} disabled{{/unless}}">+新增</a>
                                                            </div>
                                                            {{#each selectedValue}}
                                                            {{#if option}}
                                                            <div class="attribute-value-chose common-spec">
                                                                <div class="select-wrap">
                                                                    <div class="icon-arrow"></div>
                                                                    <label>
                                                                        <select name="catAttributes[{{../../id}}]">
                                                                            <option value="">請選擇{{../../name}}</option>
                                                                            {{#each option}}
                                                                            <option value="{{value}}" {{#if
                                                                                    isSelected}}selected{{
                                                                            /if}}>{{value}}</option>
                                                                            {{/each}}
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                                <a href="#"
                                                                   class="button-delete{{#unless showDeleteButton}} hidden{{/unless}}">移除</a>
                                                                {{#unless required}}
                                                                <span class="not-required">非必填</span>
                                                                {{/unless}}
                                                            </div>
                                                            {{/if}}
                                                            {{/each}}
                                                            {{/if}}

                                                            {{else}}{{#if radiobox}} <!-- else if -->
                                                            <div class="attribute-value-chose attribute-value-radiobox">

                                                                <div class="select-wrap">
                                                                    <div class="icon-arrow"></div>
                                                                    <label>
                                                                        <select name="catAttributes[{{id}}]">
                                                                            <option value="">請選擇{{name}}</option>
                                                                            {{#each option}}
                                                                            <option value="{{value}}" {{#if
                                                                                    isSelected}}selected{{
                                                                            /if}}>{{value}}</option>
                                                                            {{/each}}
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                                {{#unless required}}
                                                                <span class="not-required">非必填</span>
                                                                {{/unless}}
                                                            </div>
                                                            {{else}}
                                                            <div class="attribute-value-chose">
                                                                <input type="text" name="catAttributes[{{id}}]"
                                                                       value="{{value}}" {{#if placeholder}}
                                                                       placeholder="{{placeholder}}" {{/if}} />
                                                                {{#unless required}}
                                                                <span class="not-required">非必填</span>
                                                                {{/unless}}
                                                            </div>
                                                            {{/if}}{{/if}}
                                                        </div>
                                                        {{/if}}
                                                    </div>
                                                </div>

                                            </xmp>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <em>
                            <div class="fieldset-advance submit-flow-set mod-shadow"><h3 class="subject">進階設定選項 <span
                                            class="optional">( 非必填 )</span></h3>
                                <div class="decorations"><em>block</em> <em class="arrow">arrow</em></div>
                                <fieldset class="d-form-fields">
                                    <legend class="head"><span class="main-info">進階設定選項</span> <span
                                                class="hint">(非必要)</span></legend>
                                    <div class="row-wrap">
                                        <div class="caption"><span class="main-info">多件優惠</span></div>
                                        <div class="form-field-input item-promotion-wrap">
                                            <div class="item-promotion"><input type="checkbox" name="privilege"
                                                                               id="item-promotion" value="1"> <label
                                                        for="item-promotion">設定一次購買多件享優惠價</label>
                                                <ol class="options-wrap">
                                                    <li class="option"> 一次購買 <input class="int-only qty" type="text"
                                                                                    value=""
                                                                                    name="itemPromotion[0][buynum]">
                                                        件以上，每件 <input class="price-only price" type="text" value=""
                                                                      name="itemPromotion[0][rebate]" placeholder="$"> 元
                                                        <div class="error-wrap">
                                                            <div class="error-qty"></div>
                                                            <div class="error-price"></div>
                                                        </div>
                                                    </li>
                                                    <li class="option"> 一次購買 <input class="int-only qty" type="text"
                                                                                    value=""
                                                                                    name="itemPromotion[1][buynum]">
                                                        件以上，每件 <input class="price-only price" type="text" value=""
                                                                      name="itemPromotion[1][rebate]" placeholder="$"> 元
                                                        <div class="error-wrap">
                                                            <div class="error-qty"></div>
                                                            <div class="error-price"></div>
                                                        </div>
                                                    </li>
                                                    <li class="option"> 一次購買 <input class="int-only qty" type="text"
                                                                                    value=""
                                                                                    name="itemPromotion[2][buynum]">
                                                        件以上，每件 <input class="price-only price" type="text" value=""
                                                                      name="itemPromotion[2][rebate]" placeholder="$"> 元
                                                        <div class="error-wrap">
                                                            <div class="error-qty"></div>
                                                            <div class="error-price"></div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-wrap quantity-limit-wrap">
                                        <div class="caption"><span>購買數量限制</span></div>
                                        <div class="form-field-input"><input type="text" name="quantityLimit"
                                                                             id="quantityLimit"
                                                                             class="int-only medium-input column-left"
                                                                             value="" maxlength="3" autocomplete="off">
                                        </div>
                                    </div>


                                </fieldset>
                            </div>
                            <div class="fieldset-ads submit-flow-set1 mod-shadow" id="yui_3_12_0_4_1531808580258_1757">
                                <!-- <h3 class="subject">增加商品曝光機會 <span class="optional">( 非必填 )</span></h3> <div class="decorations"> <em>block</em> <em class="arrow">arrow</em> </div> -->


                                <!-- <div class="example"> 善用廣告，增加買氣 <a href="https://tw.bid.yahoo.com/help/new_auc/fee/AdFee.html" target="_blank">廣告說明</a> | <a href="https://tw.bid.yahoo.com/help/new_auc/fee/AdFee.html" target="_blank">看範例</a> </div> -->

                            </div>
                            <xmp class="template-ads hidden">


                                {{/with}}
                                {{/if}}

                                {{#if adList.mSearchResultAd}}
                                {{#with adList.mSearchResultAd}}
                                <div class="row-wrap search-result-ad">
                                    <div class="caption">
                                        <input type="checkbox" name="selectMSearchResultAd"
                                               id="selectMSearchResultAd" {{#unless enableBuy}} disabled{{/unless}}{{#if
                                        isSelected}} checked{{/if}} value="1"/>
                                        <label for="selectMSearchResultAd">行動優先排序</label>
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/MobileSearchResultAdfee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                    </div>
                                    <div class="right-part">
                                        {{#if promote}}
                                        <p class="promote-tips{{#if promote.type}} sign-{{promote.type}}{{/if}}">
                                            {{promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{noticeMessage}}}</p>
                                        {{else}}
                                        <div class="form-field-input">
                                            {{#each options}}
                                            <div class="ads-option">
                                                <input type="radio" name="mSearchResultAdFeeAndDuration"
                                                       id="mSearchResultAdFeeAndDuration_{{days}}" value="{{days}}"
                                                       data-price="{{price}}" {{#if isSelected}}checked{{/if}}
                                                {{#unless ../enableBuy}}disabled{{/unless}}/>
                                                <label for="mSearchResultAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                        </div>
                                        {{/if}}
                                    </div>
                                </div>
                                {{/with}}
                                {{/if}}

                                {{#if adList.mBackgroundAd}}
                                {{#with adList.mBackgroundAd}}
                                <div class="row-wrap background-ad">
                                    <div class="caption">
                                        {{#if unlimitedDuration}}
                                        <input type="checkbox" name="selectDurationMBackgroundAd"
                                               id="selectDurationMBackgroundAd" {{#unless enableBuy}} disabled{{/unless}}{{#if
                                        isSelected}} checked{{/if}} value="1"/>
                                        {{else}}
                                        <input type="checkbox" name="selectMBackgroundAd" id="selectMBackgroundAd"
                                               {{#unless enableBuy}} disabled{{/unless}}{{#if isSelected}}
                                        checked{{/if}} value="1"/>
                                        {{/if}}
                                        <label for="selectMBackgroundAd">行動出色標題</label>
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/MobileBackgroundAdfee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                    </div>
                                    <div class="right-part">
                                        {{#if promote}}
                                        <p class="promote-tips{{#if promote.type}} sign-{{promote.type}}{{/if}}">
                                            {{promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{noticeMessage}}}</p>
                                        {{else}}
                                        {{#if unlimitedDuration}}
                                        <div class="form-field-input">
                                            {{#if enableBuy}}
                                            {{#each options}}
                                            <div class="ads-option">
                                                <input type="radio" name="mBackgroundAdFeeAndDuration"
                                                       id="mBackgroundAdFeeAndDuration_{{days}}" value="{{days}}"
                                                       data-price="{{price}}" {{#if isSelected}}checked{{/if}} />
                                                <label for="mBackgroundAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{else}}
                                            {{#each options}}
                                            <div class="ads-option">
                                                <input type="radio" name="mBackgroundAdFeeAndDuration"
                                                       id="mBackgroundAdFeeAndDuration_{{days}}" value="{{days}}"
                                                       data-price="{{price}}" {{#if isSelected}}checked{{/if}}
                                                disabled />
                                                <label for="mBackgroundAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{/if}}

                                        </div>
                                        {{else}}
                                        每筆 {{{priceLabel}}}
                                        {{/if}}
                                        {{/if}}
                                    </div>
                                </div>
                                {{/with}}
                                {{/if}}

                                {{#if adList.mPrioritySearchResultAd}}
                                {{#with adList.mPrioritySearchResultAd}}
                                <div class="row-wrap priority-search-result-ad">
                                    <div class="caption">
                                        <input class="must-have-image" type="checkbox"
                                               name="selectMPrioritySearchResultAd"
                                               id="selectMPrioritySearchResultAd" {{#unless enableBuy}} disabled{{/unless}}{{#if
                                        isSelected}} checked{{/if}} value="1"/>
                                        <label for="selectMPrioritySearchResultAd">行動超優先排序</label>
                                        <!--
                                        <span class="notice">(需商品主圖)</span>
                                        -->
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/MobilePrioritySearchResultAdfee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                    </div>
                                    <div class="right-part">
                                        {{#if promote}}
                                        <p class="promote-tips{{#if promote.type}} sign-{{promote.type}}{{/if}}">
                                            {{promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{noticeMessage}}}</p>
                                        {{else}}
                                        <div class="form-field-input">
                                            {{#each options}}
                                            <div class="ads-option">
                                                <input type="radio" name="mPrioritySearchResultAdFeeAndDuration"
                                                       id="mPrioritySearchResultAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} {{#unless
                                                ../enableBuy}}disabled{{/unless}}/>
                                                <label for="mPrioritySearchResultAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                        </div>
                                        {{/if}}

                                        {{#unless ../../isAdditionalAd}}
                                        <div class="guide hidden"><span class="icon"></span><span class="message">請上傳上方的<a
                                                        class="go-to-upload-image" href="#">商品主圖</a></span></div>
                                        {{/unless}}
                                        {{#if ../error.message.mPrioritySearchResultAdFeeAndDuration}}
                                        {{#with ../../error.message.mPrioritySearchResultAdFeeAndDuration}}
                                        {{#each .}}
                                        <div class="p-error-hint">
                                            <span class="msg-error-notice">{{{.}}}</span>
                                        </div>
                                        {{/each}}

                                        {{/with}}
                                        {{/if}}
                                    </div>
                                </div>
                                {{/with}}
                                {{/if}}

                                {{#if adList.mItemAdvertisingAd}}
                                <div class="row-wrap item-advertising-ad">
                                    <div class="caption">
                                        <input class="must-have-image" type="checkbox"
                                               name="selectMItemAdvertisingAd" id="selectMItemAdvertisingAd"
                                               {{#unless adList.mItemAdvertisingAd.enableBuy}} disabled{{/unless}}{{#if
                                        adList.mItemAdvertisingAd.isSelected}} checked{{/if}} value="1"/>
                                        <label for="selectMItemAdvertisingAd">行動任意門</label>
                                        {{#if coach4ItemAdvertisingAd}}
                                        <a href="#coachs" data-coach="{{coach4MItemAdvertisingAd}}">show coach
                                            page</a>
                                        {{/if}}
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/MobileItemAdfee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                    </div>
                                    <div class="right-part">
                                        {{#if adList.mItemAdvertisingAd.promote}}
                                        <p class="promote-tips{{#if adList.mItemAdvertisingAd.promote.type}} sign-{{adList.mItemAdvertisingAd.promote.type}}{{/if}}">
                                            {{adList.mItemAdvertisingAd.promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if adList.mItemAdvertisingAd.noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{adList.mItemAdvertisingAd.noticeMessage}}}
                                        </p>
                                        {{else}}
                                        <div class="form-field-input">
                                            {{#if adList.mItemAdvertisingAd.enableBuy}}
                                            {{#each adList.mItemAdvertisingAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="mItemAdvertisingAdFeeAndDuration"
                                                       id="mItemAdvertisingAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} />
                                                <label class="promote-tips"
                                                       for="mItemAdvertisingAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{else}}
                                            {{#each adList.mItemAdvertisingAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="mItemAdvertisingAdFeeAndDuration"
                                                       id="mItemAdvertisingAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} disabled />
                                                <label class="promote-tips"
                                                       for="mItemAdvertisingAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{/if}}

                                        </div>
                                        {{/if}}

                                        {{#unless isAdditionalAd}}
                                        <div class="guide hidden"><span class="icon"></span><span class="message">請上傳上方的<a
                                                        class="go-to-upload-image" href="#">商品主圖</a></span></div>
                                        {{/unless}}
                                        {{#if error.message.mItemAdvertisingAdFeeAndDuration}}
                                        {{#with error.message.mItemAdvertisingAdFeeAndDuration}}
                                        {{#each .}}
                                        <div class="p-error-hint">
                                            <span class="msg-error-notice">{{{.}}}</span>
                                        </div>
                                        {{/each}}

                                        {{/with}}
                                        {{/if}}
                                        {{#unless noSlogan}}
                                        <div class="form-field-input ad-slogan">
                                            <label class="promote-tips" for="mItemAdvertisingAdSlogan">廣告文案</label>
                                            <div class="slogan-input-wrap">
                                                <input type="text" name="mItemAdvertisingAdSlogan"
                                                       id="mItemAdvertisingAdSlogan"
                                                       value="{{{adList.mItemAdvertisingAd.slogan}}}" maxlength="18"
                                                       {{#unless
                                                       adList.mItemAdvertisingAd.isSelected}}disabled="true" {{/unless}}
                                                class="{{#unless
                                                adList.mItemAdvertisingAd.isSelected}}disabled{{/unless}}{{#if
                                                error.message.mItemAdvertisingAdSlogan}} error-highlight{{/if}}"
                                                autocomplete="off"/>
                                                <div class="ad-comment-wrap">
                                                    <span class="length">{{#if adList.mItemAdvertisingAd.lengthOfSlogan}}{{adList.mItemAdvertisingAd.lengthOfSlogan}}{{else}}0{{/if}}/18</span>
                                                    <!--(<a href="https://tw.bid.yahoo.com/help/new_auc/fee/ItemAdvertisingAdfee.html" target="_blank">說明</a>)-->
                                                </div>
                                                {{#if error.message.mItemAdvertisingAdSlogan}}
                                                {{#with error.message.mItemAdvertisingAdSlogan}}
                                                {{#each .}}
                                                <div class="p-error-hint">
                                                    <span class="msg-error-notice">{{{.}}}</span>
                                                </div>
                                                {{/each}}

                                                {{/with}}
                                                {{/if}}
                                            </div>
                                            <input type="button"
                                                   class="button-apply-to-all{{#unless adList.mItemAdvertisingAd.isSelected}} disabled{{/unless}}"
                                                   value="套用到所有文案" {{#unless
                                                   adList.mItemAdvertisingAd.isSelected}}disabled="true" {{/unless}}>
                                        </div>
                                        {{/unless}}

                                    </div>
                                </div>
                                {{/if}}

                                {{#if adList.mHomepageAdvertisingAd}}
                                <div class="row-wrap item-advertising-ad">
                                    <div class="caption">
                                        <input class="must-have-image" type="checkbox"
                                               name="selectmHomepageAdvertisingAd" id="selectmHomepageAdvertisingAd"
                                               {{#unless adList.mHomepageAdvertisingAd.enableBuy}} disabled{{/unless}}{{#if
                                        adList.mHomepageAdvertisingAd.isSelected}} checked{{/if}} value="1"/>
                                        <label class="promote-tips"
                                               for="selectmHomepageAdvertisingAd">mHomepage</label>
                                        {{#if coach4ItemAdvertisingAd}}
                                        <a href="#coachs" data-coach="{{coach4mHomepageAdvertisingAd}}">show coach
                                            page</a>
                                        {{/if}}
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/MobileItemAdfee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                    </div>
                                    <div class="right-part">
                                        {{#if adList.mHomepageAdvertisingAd.promote}}
                                        <p class="promote-tips{{#if adList.mHomepageAdvertisingAd.promote.type}} sign-{{adList.mHomepageAdvertisingAd.promote.type}}{{/if}}">
                                            {{adList.mHomepageAdvertisingAd.promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if adList.mHomepageAdvertisingAd.noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{adList.mHomepageAdvertisingAd.noticeMessage}}}
                                        </p>
                                        {{else}}
                                        <div class="form-field-input">
                                            {{#if adList.mHomepageAdvertisingAd.enableBuy}}
                                            {{#each adList.mHomepageAdvertisingAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="mHomepageAdvertisingAdFeeAndDuration"
                                                       id="mHomepageAdvertisingAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} />
                                                <label class="promote-tips"
                                                       for="mHomepageAdvertisingAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{else}}
                                            {{#each adList.mHomepageAdvertisingAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="mHomepageAdvertisingAdFeeAndDuration"
                                                       id="mHomepageAdvertisingAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} disabled />
                                                <label class="promote-tips"
                                                       for="mHomepageAdvertisingAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{/if}}

                                        </div>
                                        {{/if}}

                                        {{#unless isAdditionalAd}}
                                        <div class="guide hidden"><span class="icon"></span><span class="message">請上傳上方的<a
                                                        class="go-to-upload-image" href="#">商品主圖</a></span></div>
                                        {{/unless}}
                                        {{#if error.message.mHomepageAdvertisingAdFeeAndDuration}}
                                        {{#with error.message.mHomepageAdvertisingAdFeeAndDuration}}
                                        {{#each .}}
                                        <div class="p-error-hint">
                                            <span class="msg-error-notice">{{{.}}}</span>
                                        </div>
                                        {{/each}}

                                        {{/with}}
                                        {{/if}}
                                        {{#unless noSlogan}}
                                        <div class="form-field-input ad-slogan">
                                            <label class="promote-tips"
                                                   for="mHomepageAdvertisingAdSlogan">廣告文案</label>
                                            <div class="slogan-input-wrap">
                                                <input type="text" name="mHomepageAdvertisingAdSlogan"
                                                       id="mHomepageAdvertisingAdSlogan"
                                                       value="{{{adList.mHomepageAdvertisingAd.slogan}}}"
                                                       maxlength="18" {{#unless
                                                       adList.mHomepageAdvertisingAd.isSelected}}disabled="true" {{/unless}}
                                                class="{{#unless
                                                adList.mHomepageAdvertisingAd.isSelected}}disabled{{/unless}}{{#if
                                                error.message.mHomepageAdvertisingAdSlogan}} error-highlight{{/if}}"
                                                autocomplete="off"/>
                                                <div class="ad-comment-wrap">
                                                    <span class="length">{{#if adList.mHomepageAdvertisingAd.lengthOfSlogan}}{{adList.mHomepageAdvertisingAd.lengthOfSlogan}}{{else}}0{{/if}}/18</span>
                                                    <!--(<a href="https://tw.bid.yahoo.com/help/new_auc/fee/ItemAdvertisingAdfee.html" target="_blank">說明</a>)-->
                                                </div>
                                                {{#if error.message.mHomepageAdvertisingAdSlogan}}
                                                {{#with error.message.mHomepageAdvertisingAdSlogan}}
                                                {{#each .}}
                                                <div class="p-error-hint">
                                                    <span class="msg-error-notice">{{{.}}}</span>
                                                </div>
                                                {{/each}}

                                                {{/with}}
                                                {{/if}}
                                            </div>
                                            <input type="button"
                                                   class="button-apply-to-all{{#unless adList.mHomepageAdvertisingAd.isSelected}} disabled{{/unless}}"
                                                   value="套用到所有文案" {{#unless
                                                   adList.mHomepageAdvertisingAd.isSelected}}disabled="true" {{/unless}}>
                                        </div>
                                        {{/unless}}

                                    </div>
                                </div>
                                {{/if}}

                                {{#if adList.mCategoryAdvertisingAd}}
                                <div class="row-wrap item-advertising-ad">
                                    <div class="caption">
                                        <input class="must-have-image" type="checkbox"
                                               name="selectmCategoryAdvertisingAd" id="selectmCategoryAdvertisingAd"
                                               {{#unless adList.mCategoryAdvertisingAd.enableBuy}} disabled{{/unless}}{{#if
                                        adList.mCategoryAdvertisingAd.isSelected}} checked{{/if}} value="1"/>
                                        <label class="promote-tips"
                                               for="selectmCategoryAdvertisingAd">mCategory</label>
                                        {{#if coach4ItemAdvertisingAd}}
                                        <a href="#coachs" data-coach="{{coach4mCategoryAdvertisingAd}}">show coach
                                            page</a>
                                        {{/if}}
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/MobileItemAdfee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                    </div>
                                    <div class="right-part">
                                        {{#if adList.mCategoryAdvertisingAd.promote}}
                                        <p class="promote-tips{{#if adList.mCategoryAdvertisingAd.promote.type}} sign-{{adList.mCategoryAdvertisingAd.promote.type}}{{/if}}">
                                            {{adList.mCategoryAdvertisingAd.promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if adList.mCategoryAdvertisingAd.noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{adList.mCategoryAdvertisingAd.noticeMessage}}}
                                        </p>
                                        {{else}}
                                        <div class="form-field-input">
                                            {{#if adList.mCategoryAdvertisingAd.enableBuy}}
                                            {{#each adList.mCategoryAdvertisingAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="mCategoryAdvertisingAdFeeAndDuration"
                                                       id="mCategoryAdvertisingAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} />
                                                <label class="promote-tips"
                                                       for="mCategoryAdvertisingAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{else}}
                                            {{#each adList.mCategoryAdvertisingAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="mCategoryAdvertisingAdFeeAndDuration"
                                                       id="mCategoryAdvertisingAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} disabled />
                                                <label class="promote-tips"
                                                       for="mCategoryAdvertisingAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{/if}}

                                        </div>
                                        {{/if}}

                                        {{#unless isAdditionalAd}}
                                        <div class="guide hidden"><span class="icon"></span><span class="message">請上傳上方的<a
                                                        class="go-to-upload-image" href="#">商品主圖</a></span></div>
                                        {{/unless}}
                                        {{#if error.message.mCategoryAdvertisingAdFeeAndDuration}}
                                        {{#with error.message.mCategoryAdvertisingAdFeeAndDuration}}
                                        {{#each .}}
                                        <div class="p-error-hint">
                                            <span class="msg-error-notice">{{{.}}}</span>
                                        </div>
                                        {{/each}}

                                        {{/with}}
                                        {{/if}}
                                        {{#unless noSlogan}}
                                        <div class="form-field-input ad-slogan">
                                            <label class="promote-tips"
                                                   for="mCategoryAdvertisingAdSlogan">廣告文案</label>
                                            <div class="slogan-input-wrap">
                                                <input type="text" name="mCategoryAdvertisingAdSlogan"
                                                       id="mCategoryAdvertisingAdSlogan"
                                                       value="{{{adList.mCategoryAdvertisingAd.slogan}}}"
                                                       maxlength="18" {{#unless
                                                       adList.mCategoryAdvertisingAd.isSelected}}disabled="true" {{/unless}}
                                                class="{{#unless
                                                adList.mCategoryAdvertisingAd.isSelected}}disabled{{/unless}}{{#if
                                                error.message.mCategoryAdvertisingAdSlogan}} error-highlight{{/if}}"
                                                autocomplete="off"/>
                                                <div class="ad-comment-wrap">
                                                    <span class="length">{{#if adList.mCategoryAdvertisingAd.lengthOfSlogan}}{{adList.mCategoryAdvertisingAd.lengthOfSlogan}}{{else}}0{{/if}}/18</span>
                                                    <!--(<a href="https://tw.bid.yahoo.com/help/new_auc/fee/ItemAdvertisingAdfee.html" target="_blank">說明</a>)-->
                                                </div>
                                                {{#if error.message.mCategoryAdvertisingAdSlogan}}
                                                {{#with error.message.mCategoryAdvertisingAdSlogan}}
                                                {{#each .}}
                                                <div class="p-error-hint">
                                                    <span class="msg-error-notice">{{{.}}}</span>
                                                </div>
                                                {{/each}}

                                                {{/with}}
                                                {{/if}}
                                            </div>
                                            <input type="button"
                                                   class="button-apply-to-all{{#unless adList.mCategoryAdvertisingAd.isSelected}} disabled{{/unless}}"
                                                   value="套用到所有文案" {{#unless
                                                   adList.mCategoryAdvertisingAd.isSelected}}disabled="true" {{/unless}}>
                                        </div>
                                        {{/unless}}

                                    </div>
                                </div>
                                {{/if}}

                                {{#if adList.fbAd}}
                                <a href="{{adList.fbAd.link}}" target="auction">
                                    <h4 class="fb-ad">{{adList.fbAd.title}}</h4>
                                    <ul>
                                        {{#each adList.fbAd.slogans}}
                                        <li>{{.}}</li>
                                        {{/each}}
                                    </ul>
                                </a>
                                {{/if}}
                                <h4>【電腦版廣告專區】您購買的廣告將顯示在電腦版網頁</h4>
                                {{#if adList.powerDoorSearchResultAd}}
                                {{#with adList.powerDoorSearchResultAd}}
                                <div class="row-wrap priority-search-result-ad">
                                    <div class="caption">
                                        <input class="must-have-image" type="checkbox"
                                               name="selectPowerDoorSearchResultAd"
                                               id="selectPowerDoorSearchResultAd" {{#unless enableBuy}} disabled{{/unless}}{{#if
                                        isSelected}} checked{{/if}} value="1"/>
                                        <label for="selectPowerDoorSearchResultAd">搜尋無敵門</label>
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/PowerDoorSearchResultAdfee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                    </div>
                                    <div class="right-part">
                                        {{#if promote}}
                                        <p class="promote-tips{{#if promote.type}} sign-{{promote.type}}{{/if}}">
                                            {{promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{noticeMessage}}}</p>
                                        {{else}}
                                        <div class="form-field-input">
                                            {{#each options}}
                                            <div class="ads-option">
                                                <input type="radio" name="powerDoorSearchResultAdFeeAndDuration"
                                                       id="powerDoorSearchResultAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} {{#unless
                                                ../enableBuy}}disabled{{/unless}}/>
                                                <label for="powerDoorSearchResultAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                        </div>
                                        {{/if}}

                                        {{#unless ../../isAdditionalAd}}
                                        <div class="guide hidden"><span class="icon"></span><span class="message">請上傳上方的<a
                                                        class="go-to-upload-image" href="#">商品主圖</a></span></div>
                                        {{/unless}}
                                        {{#if ../error.message.powerDoorSearchResultAdFeeAndDuration}}
                                        {{#with ../../error.message.powerDoorSearchResultAdFeeAndDuration}}
                                        {{#each .}}
                                        <div class="p-error-hint">
                                            <span class="msg-error-notice">{{{.}}}</span>
                                        </div>
                                        {{/each}}

                                        {{/with}}
                                        {{/if}}
                                    </div>
                                </div>
                                {{/with}}
                                {{/if}}

                                {{#if adList.searchResultAd}}
                                {{#with adList.searchResultAd}}
                                <div class="row-wrap search-result-ad">
                                    <div class="caption">
                                        {{#if unlimitedDuration}}
                                        <input type="checkbox" name="selectDurationSearchResultAd"
                                               id="selectDurationSearchResultAd" {{#unless enableBuy}} disabled{{/unless}}{{#if
                                        isSelected}} checked{{/if}} value="1"/>
                                        {{else}}
                                        <input type="checkbox" name="selectSearchResultAd" id="selectSearchResultAd"
                                               {{#unless enableBuy}} disabled{{/unless}}{{#if isSelected}}
                                        checked{{/if}} value="1"/>
                                        {{/if}}
                                        <label for="selectSearchResultAd">優先排序</label>
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/SearchResultAdfee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                    </div>
                                    <div class="right-part">
                                        {{#if promote}}
                                        <p class="promote-tips{{#if promote.type}} sign-{{promote.type}}{{/if}}">
                                            {{promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{noticeMessage}}}</p>
                                        {{else}}
                                        {{#if unlimitedDuration}}
                                        <div class="form-field-input">
                                            {{#if enableBuy}}
                                            {{#each options}}
                                            <div class="ads-option">
                                                <input type="radio" name="searchResultAdFeeAndDuration"
                                                       id="searchResultAdFeeAndDuration_{{days}}" value="{{days}}"
                                                       data-price="{{price}}" {{#if isSelected}}checked{{/if}} />
                                                <label for="searchResultAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{else}}
                                            {{#each options}}
                                            <div class="ads-option">
                                                <input type="radio" name="searchResultAdFeeAndDuration"
                                                       id="searchResultAdFeeAndDuration_{{days}}" value="{{days}}"
                                                       data-price="{{price}}" {{#if isSelected}}checked{{/if}}
                                                disabled />
                                                <label for="searchResultAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{/if}}

                                        </div>
                                        {{else}}
                                        每筆 {{{priceLabel}}}
                                        {{/if}}
                                        {{/if}}
                                    </div>
                                </div>
                                {{/with}}
                                {{/if}}

                                {{#if adList.prioritySearchResultAd}}
                                {{#with adList.prioritySearchResultAd}}
                                <div class="row-wrap priority-search-result-ad">
                                    <div class="caption">
                                        <input class="must-have-image" type="checkbox"
                                               name="selectPrioritySearchResultAd" id="selectPrioritySearchResultAd"
                                               {{#unless enableBuy}} disabled{{/unless}}{{#if isSelected}}
                                        checked{{/if}} value="1"/>
                                        <label for="selectPrioritySearchResultAd">超優先排序</label>
                                        <!--
                                        <span class="notice">(需商品主圖)</span>
                                        -->
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/PrioritySearchResultAdfee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                    </div>
                                    <div class="right-part">
                                        {{#if promote}}
                                        <p class="promote-tips{{#if promote.type}} sign-{{promote.type}}{{/if}}">
                                            {{promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{noticeMessage}}}</p>
                                        {{else}}
                                        <div class="form-field-input">
                                            {{#each options}}
                                            <div class="ads-option">
                                                <input type="radio" name="prioritySearchResultAdFeeAndDuration"
                                                       id="prioritySearchResultAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} {{#unless
                                                ../enableBuy}}disabled{{/unless}}/>
                                                <label for="prioritySearchResultAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                        </div>
                                        {{/if}}

                                        {{#unless ../../isAdditionalAd}}
                                        <div class="guide hidden"><span class="icon"></span><span class="message">請上傳上方的<a
                                                        class="go-to-upload-image" href="#">商品主圖</a></span></div>
                                        {{/unless}}
                                        {{#if ../error.message.prioritySearchResultAdFeeAndDuration}}
                                        {{#with ../../error.message.prioritySearchResultAdFeeAndDuration}}
                                        {{#each .}}
                                        <div class="p-error-hint">
                                            <span class="msg-error-notice">{{{.}}}</span>
                                        </div>
                                        {{/each}}

                                        {{/with}}
                                        {{/if}}
                                    </div>
                                </div>
                                {{/with}}
                                {{/if}}

                                {{#if adList.itemAdvertisingAd}}
                                <div class="row-wrap item-advertising-ad">
                                    <div class="caption">
                                        <input class="must-have-image" type="checkbox"
                                               name="selectItemAdvertisingAd" id="selectItemAdvertisingAd" {{#unless
                                               adList.itemAdvertisingAd.enableBuy}} disabled{{/unless}}{{#if
                                        adList.itemAdvertisingAd.isSelected}} checked{{/if}} value="1"/>
                                        <label for="selectItemAdvertisingAd">賣場任意門</label>
                                        {{#if coach4ItemAdvertisingAd}}
                                        <a href="#coachs" data-coach="{{coach4ItemAdvertisingAd}}">show coach
                                            page</a>
                                        {{/if}}
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/ItemAdvertisingAdfee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                    </div>
                                    <div class="right-part">
                                        {{#if adList.itemAdvertisingAd.promote}}
                                        <p class="promote-tips{{#if adList.itemAdvertisingAd.promote.type}} sign-{{adList.itemAdvertisingAd.promote.type}}{{/if}}">
                                            {{adList.itemAdvertisingAd.promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if adList.itemAdvertisingAd.noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{adList.itemAdvertisingAd.noticeMessage}}}
                                        </p>
                                        {{else}}
                                        <div class="form-field-input">
                                            {{#if adList.itemAdvertisingAd.enableBuy}}
                                            {{#each adList.itemAdvertisingAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="itemAdvertisingAdFeeAndDuration"
                                                       id="itemAdvertisingAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} />
                                                <label class="promote-tips"
                                                       for="itemAdvertisingAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{else}}
                                            {{#each adList.itemAdvertisingAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="itemAdvertisingAdFeeAndDuration"
                                                       id="itemAdvertisingAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} disabled />
                                                <label class="promote-tips"
                                                       for="itemAdvertisingAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{/if}}

                                        </div>
                                        {{/if}}

                                        {{#unless isAdditionalAd}}
                                        <div class="guide hidden"><span class="icon"></span><span class="message">請上傳上方的<a
                                                        class="go-to-upload-image" href="#">商品主圖</a></span></div>
                                        {{/unless}}
                                        {{#if error.message.itemAdvertisingAdFeeAndDuration}}
                                        {{#with error.message.itemAdvertisingAdFeeAndDuration}}
                                        {{#each .}}
                                        <div class="p-error-hint">
                                            <span class="msg-error-notice">{{{.}}}</span>
                                        </div>
                                        {{/each}}

                                        {{/with}}
                                        {{/if}}
                                        {{#unless noSlogan}}
                                        <div class="form-field-input ad-slogan">
                                            <label class="promote-tips" for="itemAdvertisingAdSlogan">廣告文案</label>
                                            <div class="slogan-input-wrap">
                                                <input type="text" name="itemAdvertisingAdSlogan"
                                                       id="itemAdvertisingAdSlogan"
                                                       value="{{{adList.itemAdvertisingAd.slogan}}}" maxlength="18"
                                                       {{#unless
                                                       adList.itemAdvertisingAd.isSelected}}disabled="true" {{/unless}}
                                                class="{{#unless
                                                adList.itemAdvertisingAd.isSelected}}disabled{{/unless}}{{#if
                                                error.message.itemAdvertisingAdSlogan}} error-highlight{{/if}}"
                                                autocomplete="off"/>
                                                <div class="ad-comment-wrap">
                                                    <span class="length">{{#if adList.itemAdvertisingAd.lengthOfSlogan}}{{adList.itemAdvertisingAd.lengthOfSlogan}}{{else}}0{{/if}}/18</span>
                                                    <!--(<a href="https://tw.bid.yahoo.com/help/new_auc/fee/ItemAdvertisingAdfee.html" target="_blank">說明</a>)-->
                                                </div>
                                                {{#if error.message.itemAdvertisingAdSlogan}}
                                                {{#with error.message.itemAdvertisingAdSlogan}}
                                                {{#each .}}
                                                <div class="p-error-hint">
                                                    <span class="msg-error-notice">{{{.}}}</span>
                                                </div>
                                                {{/each}}

                                                {{/with}}
                                                {{/if}}
                                            </div>
                                            <input type="button"
                                                   class="button-apply-to-all{{#unless adList.itemAdvertisingAd.isSelected}} disabled{{/unless}}"
                                                   value="套用到所有文案" {{#unless
                                                   adList.itemAdvertisingAd.isSelected}}disabled="true" {{/unless}}>
                                        </div>
                                        {{/unless}}

                                    </div>
                                </div>
                                {{/if}}

                                {{#if adList.backgroundAd}}
                                {{#with adList.backgroundAd}}
                                <div class="row-wrap background-ad">
                                    <div class="caption">
                                        {{#if unlimitedDuration}}
                                        <input type="checkbox" name="selectDurationBackgroundAd"
                                               id="selectDurationBackgroundAd" {{#unless enableBuy}} disabled{{/unless}}{{#if
                                        isSelected}} checked{{/if}} value="1"/>
                                        {{else}}
                                        <input type="checkbox" name="selectBackgroundAd" id="selectBackgroundAd"
                                               {{#unless enableBuy}} disabled{{/unless}}{{#if isSelected}}
                                        checked{{/if}} value="1"/>
                                        {{/if}}
                                        <label for="selectBackgroundAd">出色標題</label>
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/BackgroundAdfee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                    </div>
                                    <div class="right-part">
                                        {{#if promote}}
                                        <p class="promote-tips{{#if promote.type}} sign-{{promote.type}}{{/if}}">
                                            {{promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{noticeMessage}}}</p>
                                        {{else}}
                                        {{#if unlimitedDuration}}
                                        <div class="form-field-input">
                                            {{#if enableBuy}}
                                            {{#each options}}
                                            <div class="ads-option">
                                                <input type="radio" name="backgroundAdFeeAndDuration"
                                                       id="backgroundAdFeeAndDuration_{{days}}" value="{{days}}"
                                                       data-price="{{price}}" {{#if isSelected}}checked{{/if}} />
                                                <label for="backgroundAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{else}}
                                            {{#each options}}
                                            <div class="ads-option">
                                                <input type="radio" name="backgroundAdFeeAndDuration"
                                                       id="backgroundAdFeeAndDuration_{{days}}" value="{{days}}"
                                                       data-price="{{price}}" {{#if isSelected}}checked{{/if}}
                                                disabled />
                                                <label for="backgroundAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{/if}}

                                        </div>
                                        {{else}}
                                        每筆 {{{priceLabel}}}
                                        {{/if}}
                                        {{/if}}
                                    </div>
                                </div>
                                {{/with}}
                                {{/if}}

                                {{#if adList.homepageHotSaleAd}}
                                <div class="row-wrap homepage-hotSale-ad">
                                    <div class="caption">
                                        <input class="must-have-image" type="checkbox"
                                               name="selectHomepageHotSaleAd" id="selectHomepageHotSaleAd" {{#unless
                                               adList.homepageHotSaleAd.enableBuy}} disabled{{/unless}}{{#if
                                        adList.homepageHotSaleAd.isSelected}} checked{{/if}} value="1"/>
                                        <label for="selectHomepageHotSaleAd">首頁熱銷搶搶滾</label>
                                        {{#if coach4HomepageHotSaleAd}}
                                        <a href="#coachs" data-coach="{{coach4HomepageHotSaleAd}}">show coach
                                            page</a>
                                        {{/if}}
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/AdFee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                        <!--
                                        <span class="notice">(需商品主圖)</span>
                                        -->
                                    </div>
                                    <div class="right-part">
                                        {{#if adList.homepageHotSaleAd.promote}}
                                        <p class="promote-tips{{#if adList.homepageHotSaleAd.promote.type}} sign-{{adList.homepageHotSaleAd.promote.type}}{{/if}}">
                                            {{adList.homepageHotSaleAd.promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if adList.homepageHotSaleAd.noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{adList.homepageHotSaleAd.noticeMessage}}}
                                        </p>
                                        {{else}}
                                        <div class="form-field-input">
                                            {{#if adList.homepageHotSaleAd.enableBuy}}
                                            {{#each adList.homepageHotSaleAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="homepageHotSaleAdFeeAndDuration"
                                                       id="homepageHotSaleAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} />
                                                <label for="homepageHotSaleAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{else}}
                                            {{#each adList.homepageHotSaleAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="homepageHotSaleAdFeeAndDuration"
                                                       id="homepageHotSaleAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} disabled />
                                                <label for="homepageHotSaleAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{/if}}

                                        </div>
                                        {{/if}}

                                        {{#unless isAdditionalAd}}
                                        <div class="guide hidden"><span class="icon"></span><span class="message">請上傳上方的<a
                                                        class="go-to-upload-image" href="#">商品主圖</a></span></div>
                                        {{/unless}}
                                        {{#if error.message.homepageHotSaleAdFeeAndDuration}}
                                        {{#with error.message.homepageHotSaleAdFeeAndDuration}}
                                        {{#each .}}
                                        <div class="p-error-hint">
                                            <span class="msg-error-notice">{{{.}}}</span>
                                        </div>
                                        {{/each}}

                                        {{/with}}
                                        {{/if}}
                                        {{#unless noSlogan}}
                                        <div class="form-field-input ad-slogan">
                                            <label for="homepageHotSaleAdSlogan">廣告文案</label>
                                            <div class="slogan-input-wrap">
                                                <input type="text" name="homepageHotSaleAdSlogan"
                                                       id="homepageHotSaleAdSlogan"
                                                       value="{{{adList.homepageHotSaleAd.slogan}}}" maxlength="18"
                                                       {{#unless
                                                       adList.homepageHotSaleAd.isSelected}}disabled="true" {{/unless}}
                                                class="{{#unless
                                                adList.homepageHotSaleAd.isSelected}}disabled{{/unless}}{{#if
                                                error.message.homepageHotSaleAdSlogan}} error-highlight{{/if}}"
                                                autocomplete="off"/>
                                                <div class="ad-comment-wrap">
                                                    <span class="length">{{#if adList.homepageHotSaleAd.lengthOfSlogan}}{{adList.homepageHotSaleAd.lengthOfSlogan}}{{else}}0{{/if}}/18</span>
                                                </div>
                                                {{#if error.message.homepageHotSaleAdSlogan}}
                                                {{#with error.message.homepageHotSaleAdSlogan}}
                                                {{#each .}}
                                                <div class="p-error-hint">
                                                    <span class="msg-error-notice">{{{.}}}</span>
                                                </div>
                                                {{/each}}

                                                {{/with}}
                                                {{/if}}
                                            </div>
                                            <input type="button"
                                                   class="button-apply-to-all{{#unless adList.homepageHotSaleAd.isSelected}} disabled{{/unless}}"
                                                   value="套用到所有文案" {{#unless
                                                   adList.homepageHotSaleAd.isSelected}}disabled="true" {{/unless}}>
                                        </div>
                                        {{/unless}}

                                    </div>
                                </div>
                                {{/if}}

                                {{#if adList.homepagePromotionAd}}
                                <div class="row-wrap homepage-promotion-ad">
                                    <div class="caption">
                                        <input type="checkbox" name="selectHomepagePromotionAd"
                                               id="selectHomepagePromotionAd" {{#unless
                                               adList.homepagePromotionAd.enableBuy}}disabled{{/unless}} {{#if
                                        adList.homepagePromotionAd.isSelected}}checked{{/if}} value="1">
                                        <label for="selectHomepagePromotionAd">首頁搶鮮曝光</label>
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/HomepagePromotionAdfee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                    </div>
                                    <div class="right-part">
                                        {{#if adList.homepagePromotionAd.promote}}
                                        <p class="promote-tips{{#if adList.homepagePromotionAd.promote.type}} sign-{{adList.homepagePromotionAd.promote.type}}{{/if}}">
                                            {{adList.homepagePromotionAd.promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if adList.homepagePromotionAd.noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{adList.homepagePromotionAd.noticeMessage}}}
                                        </p>
                                        {{else}}
                                        <div class="form-field-input">
                                            {{#if adList.homepagePromotionAd.enableBuy}}
                                            {{#each adList.homepagePromotionAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="homepagePromotionAdFeeAndDuration"
                                                       id="homepagePromotionAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}}/>
                                                <label for="homepagePromotionAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{else}}
                                            {{#each adList.homepagePromotionAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="homepagePromotionAdFeeAndDuration"
                                                       id="homepagePromotionAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} disabled/>
                                                <label for="homepagePromotionAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{/if}}

                                        </div>
                                        {{/if}}

                                        {{#if error.message.homepagePromotionAdFeeAndDuration}}
                                        {{#with error.message.homepagePromotionAdFeeAndDuration}}
                                        {{#each .}}
                                        <div class="p-error-hint">
                                            <span class="msg-error-notice">{{{.}}}</span>
                                        </div>
                                        {{/each}}

                                        {{/with}}
                                        {{/if}}

                                        {{#unless adList.homepagePromotionAd.noSlogan}}
                                        <div class="form-field-input ad-slogan">
                                            <label for="homepagePromotionAdSlogan">廣告文案</label>
                                            <div class="slogan-input-wrap">
                                                <input type="text" name="homepagePromotionAdSlogan"
                                                       id="homepagePromotionAdSlogan"
                                                       value="{{{adList.homepagePromotionAd.slogan}}}"
                                                       maxlength="10" {{#unless
                                                       adList.homepagePromotionAd.isSelected}}disabled="true" {{/unless}}
                                                class="{{#unless
                                                adList.homepagePromotionAd.isSelected}}disabled{{/unless}}{{#if
                                                error.message.homepagePromotionAdSlogan}} error-highlight{{/if}}"
                                                autocomplete="off"/>
                                                <div class="ad-comment-wrap">
                                                    <span class="length">{{#if adList.homepagePromotionAd.lengthOfSlogan}}{{adList.homepagePromotionAd.lengthOfSlogan}}{{else}}0{{/if}}/10</span>
                                                </div>
                                                {{#if error.message.homepagePromotionAdSlogan}}
                                                {{#with error.message.homepagePromotionAdSlogan}}
                                                {{#each .}}
                                                <div class="p-error-hint">
                                                    <span class="msg-error-notice">{{{.}}}</span>
                                                </div>
                                                {{/each}}

                                                {{/with}}
                                                {{/if}}
                                            </div>
                                            <input type="button"
                                                   class="button-apply-to-all{{#unless adList.homepagePromotionAd.isSelected}} disabled{{/unless}}"
                                                   value="套用到所有文案" {{#unless
                                                   adList.homepagePromotionAd.isSelected}}disabled="true" {{/unless}}>
                                        </div>
                                        {{/unless}}
                                    </div>
                                </div>
                                {{/if}}

                                {{#if adList.homepageAdvertisingAd}}
                                <div class="row-wrap homepage-advertising-ad">
                                    <div class="caption">
                                        <input class="must-have-image" type="checkbox"
                                               name="selectHomepageAdvertisingAd" id="selectHomepageAdvertisingAd"
                                               {{#unless adList.homepageAdvertisingAd.enableBuy}}disabled{{/unless}}
                                        {{#if adList.homepageAdvertisingAd.isSelected}}checked{{/if}} value="1">
                                        <label for="selectHomepageAdvertisingAd">首頁有料曝光</label>
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/HomepageAdvertisingAdfee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                        <!--
                                        <span class="notice">(需商品主圖)</span>
                                        -->
                                    </div>
                                    <div class="right-part">
                                        {{#if adList.homepageAdvertisingAd.promote}}
                                        <p class="promote-tips{{#if adList.homepageAdvertisingAd.promote.type}} sign-{{adList.homepageAdvertisingAd.promote.type}}{{/if}}">
                                            {{adList.homepageAdvertisingAd.promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if adList.homepageAdvertisingAd.noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{adList.homepageAdvertisingAd.noticeMessage}}}
                                        </p>
                                        {{else}}
                                        <div class="form-field-input">
                                            {{#if adList.homepageAdvertisingAd.enableBuy}}
                                            {{#each adList.homepageAdvertisingAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="homepageAdvertisingAdFeeAndDuration"
                                                       id="homepageAdvertisingAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} />
                                                <label for="homepageAdvertisingAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{else}}
                                            {{#each adList.homepageAdvertisingAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="homepageAdvertisingAdFeeAndDuration"
                                                       id="homepageAdvertisingAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} disabled />
                                                <label for="homepageAdvertisingAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{/if}}

                                        </div>
                                        {{/if}}

                                        {{#unless isAdditionalAd}}
                                        <div class="guide hidden"><span class="icon"></span><span class="message">請上傳上方的<a
                                                        class="go-to-upload-image" href="#">商品主圖</a></span></div>
                                        {{/unless}}
                                        {{#if error.message.homepageAdvertisingAdFeeAndDuration}}
                                        {{#with error.message.homepageAdvertisingAdFeeAndDuration}}
                                        {{#each .}}
                                        <div class="p-error-hint">
                                            <span class="msg-error-notice">{{{.}}}</span>
                                        </div>
                                        {{/each}}

                                        {{/with}}
                                        {{/if}}

                                        {{#unless noSlogan}}
                                        <div class="form-field-input ad-slogan">
                                            <label for="homepageAdvertisingAdSlogan">廣告文案</label>
                                            <div class="slogan-input-wrap">
                                                <input type="text" name="homepageAdvertisingAdSlogan"
                                                       id="homepageAdvertisingAdSlogan"
                                                       value="{{{adList.homepageAdvertisingAd.slogan}}}"
                                                       maxlength="18" {{#unless
                                                       adList.homepageAdvertisingAd.isSelected}}disabled="true" {{/unless}}
                                                class="{{#unless
                                                adList.homepageAdvertisingAd.isSelected}}disabled{{/unless}}{{#if
                                                error.message.homepageAdvertisingAdSlogan}} error-highlight{{/if}}"
                                                autocomplete="off"/>
                                                <div class="ad-comment-wrap">
                                                    <span class="length">{{#if adList.homepageAdvertisingAd.lengthOfSlogan}}{{adList.homepageAdvertisingAd.lengthOfSlogan}}{{else}}0{{/if}}/18</span>
                                                </div>
                                                {{#if error.message.homepageAdvertisingAdSlogan}}
                                                {{#with error.message.homepageAdvertisingAdSlogan}}
                                                {{#each .}}
                                                <div class="p-error-hint">
                                                    <span class="msg-error-notice">{{{.}}}</span>
                                                </div>
                                                {{/each}}

                                                {{/with}}
                                                {{/if}}
                                            </div>
                                            <input type="button"
                                                   class="button-apply-to-all{{#unless adList.homepageAdvertisingAd.isSelected}} disabled{{/unless}}"
                                                   value="套用到所有文案" {{#unless
                                                   adList.homepageAdvertisingAd.isSelected}}disabled="true" {{/unless}}>
                                        </div>
                                        {{/unless}}
                                    </div>
                                </div>
                                {{/if}}

                                {{#if adList.categoryHotSaleAd}}
                                <div class="row-wrap category-hotSale-ad">
                                    <div class="caption">
                                        <input class="must-have-image" type="checkbox"
                                               name="selectCategoryHotSaleAd" id="selectCategoryHotSaleAd" {{#unless
                                               adList.categoryHotSaleAd.enableBuy}} disabled{{/unless}}{{#if
                                        adList.categoryHotSaleAd.isSelected}} checked{{/if}} value="1"/>
                                        <label for="selectCategoryHotSaleAd">分類熱銷搶搶滾</label>
                                        {{#if coach4CategoryHotSaleAd}}
                                        <a href="#coachs" data-coach="{{coach4CategoryHotSaleAd}}">show coach
                                            page</a>
                                        {{/if}}
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/AdFee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                        <!--
                                        <span class="notice">(需商品主圖)</span>
                                        -->
                                    </div>
                                    <div class="right-part">
                                        {{#if adList.categoryHotSaleAd.promote}}
                                        <p class="promote-tips{{#if adList.categoryHotSaleAd.promote.type}} sign-{{adList.categoryHotSaleAd.promote.type}}{{/if}}">
                                            {{adList.categoryHotSaleAd.promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if adList.categoryHotSaleAd.noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{adList.categoryHotSaleAd.noticeMessage}}}
                                        </p>
                                        {{else}}
                                        <div class="form-field-input">
                                            {{#if adList.categoryHotSaleAd.enableBuy}}
                                            {{#each adList.categoryHotSaleAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="categoryHotSaleAdFeeAndDuration"
                                                       id="categoryHotSaleAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} />
                                                <label for="categoryHotSaleAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{else}}
                                            {{#each adList.categoryHotSaleAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="categoryHotSaleAdFeeAndDuration"
                                                       id="categoryHotSaleAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} disabled />
                                                <label for="categoryHotSaleAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{/if}}

                                        </div>
                                        {{/if}}

                                        {{#unless isAdditionalAd}}
                                        <div class="guide hidden"><span class="icon"></span><span class="message">請上傳上方的<a
                                                        class="go-to-upload-image" href="#">商品主圖</a></span></div>
                                        {{/unless}}
                                        {{#if error.message.categoryHotSaleAdFeeAndDuration}}
                                        {{#with error.message.categoryHotSaleAdFeeAndDuration}}
                                        {{#each .}}
                                        <div class="p-error-hint">
                                            <span class="msg-error-notice">{{{.}}}</span>
                                        </div>
                                        {{/each}}

                                        {{/with}}
                                        {{/if}}
                                        {{#unless noSlogan}}
                                        <div class="form-field-input ad-slogan">
                                            <label for="categoryHotSaleAdSlogan">廣告文案</label>
                                            <div class="slogan-input-wrap">
                                                <input type="text" name="categoryHotSaleAdSlogan"
                                                       id="categoryHotSaleAdSlogan"
                                                       value="{{{adList.categoryHotSaleAd.slogan}}}" maxlength="18"
                                                       {{#unless
                                                       adList.categoryHotSaleAd.isSelected}}disabled="true" {{/unless}}
                                                class="{{#unless
                                                adList.categoryHotSaleAd.isSelected}}disabled{{/unless}}{{#if
                                                error.message.categoryHotSaleAdSlogan}} error-highlight{{/if}}"
                                                autocomplete="off"/>
                                                <div class="ad-comment-wrap">
                                                    <span class="length">{{#if adList.categoryHotSaleAd.lengthOfSlogan}}{{adList.categoryHotSaleAd.lengthOfSlogan}}{{else}}0{{/if}}/18</span>
                                                </div>
                                                {{#if error.message.categoryHotSaleAdSlogan}}
                                                {{#with error.message.categoryHotSaleAdSlogan}}
                                                {{#each .}}
                                                <div class="p-error-hint">
                                                    <span class="msg-error-notice">{{{.}}}</span>
                                                </div>
                                                {{/each}}

                                                {{/with}}
                                                {{/if}}
                                            </div>
                                            <input type="button"
                                                   class="button-apply-to-all{{#unless adList.categoryHotSaleAd.isSelected}} disabled{{/unless}}"
                                                   value="套用到所有文案" {{#unless
                                                   adList.categoryHotSaleAd.isSelected}}disabled="true" {{/unless}}>
                                        </div>
                                        {{/unless}}

                                    </div>
                                </div>
                                {{/if}}

                                {{#if adList.categoryPromotionAd}}
                                <div class="row-wrap category-promotion-ad">
                                    <div class="caption">
                                        <input type="checkbox" name="selectCategoryPromotionAd"
                                               id="selectCategoryPromotionAd" {{#unless
                                               adList.categoryPromotionAd.enableBuy}}disabled{{/unless}} {{#if
                                        adList.categoryPromotionAd.isSelected}}checked{{/if}} value="1">
                                        <label for="selectCategoryPromotionAd">分類搶鮮曝光</label>
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/CategoryPromotionAdfee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                    </div>
                                    <div class="right-part">
                                        {{#if adList.categoryPromotionAd.promote}}
                                        <p class="promote-tips{{#if adList.categoryPromotionAd.promote.type}} sign-{{adList.categoryPromotionAd.promote.type}}{{/if}}">
                                            {{adList.categoryPromotionAd.promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if adList.categoryPromotionAd.noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{adList.categoryPromotionAd.noticeMessage}}}
                                        </p>
                                        {{else}}
                                        <div class="form-field-input">
                                            {{#if adList.categoryPromotionAd.enableBuy}}
                                            {{#each adList.categoryPromotionAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="categoryPromotionAdFeeAndDuration"
                                                       id="categoryPromotionAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} />
                                                <label for="categoryPromotionAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{else}}
                                            {{#each adList.categoryPromotionAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="categoryPromotionAdFeeAndDuration"
                                                       id="categoryPromotionAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} disabled />
                                                <label for="categoryPromotionAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{/if}}

                                        </div>
                                        {{/if}}

                                        {{#if error.message.categoryPromotionAdFeeAndDuration}}
                                        {{#with error.message.categoryPromotionAdFeeAndDuration}}
                                        {{#each .}}
                                        <div class="p-error-hint">
                                            <span class="msg-error-notice">{{{.}}}</span>
                                        </div>
                                        {{/each}}

                                        {{/with}}
                                        {{/if}}

                                        {{#unless noSlogan}}
                                        <div class="form-field-input ad-slogan">
                                            <label for="categoryPromotionAdSlogan">廣告文案</label>
                                            <div class="slogan-input-wrap">
                                                <input type="text" name="categoryPromotionAdSlogan"
                                                       id="categoryPromotionAdSlogan"
                                                       value="{{{adList.categoryPromotionAd.slogan}}}"
                                                       maxlength="10" {{#unless
                                                       adList.categoryPromotionAd.isSelected}}disabled="true" {{/unless}}
                                                class="{{#unless
                                                adList.categoryPromotionAd.isSelected}}disabled{{/unless}}{{#if
                                                error.message.categoryPromotionAdSlogan}} error-highlight{{/if}}"
                                                autocomplete="off"/>
                                                <div class="ad-comment-wrap">
                                                    <span class="length">{{#if adList.categoryPromotionAd.lengthOfSlogan}}{{adList.categoryPromotionAd.lengthOfSlogan}}{{else}}0{{/if}}/10</span>
                                                </div>
                                                {{#if error.message.categoryPromotionAdSlogan}}
                                                {{#with error.message.categoryPromotionAdSlogan}}
                                                {{#each .}}
                                                <div class="p-error-hint">
                                                    <span class="msg-error-notice">{{{.}}}</span>
                                                </div>
                                                {{/each}}

                                                {{/with}}
                                                {{/if}}
                                            </div>
                                            <input type="button"
                                                   class="button-apply-to-all{{#unless adList.categoryPromotionAd.isSelected}} disabled{{/unless}}"
                                                   value="套用到所有文案" {{#unless
                                                   adList.categoryPromotionAd.isSelected}}disabled="true" {{/unless}}>
                                        </div>
                                        {{/unless}}
                                    </div>
                                </div>
                                {{/if}}

                                {{#if adList.categoryAdvertisingAd}}
                                <div class="row-wrap category-advertising-ad">
                                    <div class="caption">
                                        <input class="must-have-image" type="checkbox"
                                               name="selectCategoryAdvertisingAd" id="selectCategoryAdvertisingAd"
                                               {{#unless adList.categoryAdvertisingAd.enableBuy}}disabled{{/unless}}
                                        {{#if adList.categoryAdvertisingAd.isSelected}}checked{{/if}} value="1">
                                        <label for="selectCategoryAdvertisingAd">分類有料曝光</label>
                                        <a href="https://tw.bid.yahoo.com/help/new_auc/fee/CategoryAdvertisingAdfee.html"
                                           target="_blank"><span class="sign">(</span>說明<span class="sign">)</span></a>
                                        <!--
                                        <span class="notice">(需商品主圖)</span>
                                        -->
                                    </div>
                                    <div class="right-part">
                                        {{#if adList.categoryAdvertisingAd.promote}}
                                        <p class="promote-tips{{#if adList.categoryAdvertisingAd.promote.type}} sign-{{adList.categoryAdvertisingAd.promote.type}}{{/if}}">
                                            {{adList.categoryAdvertisingAd.promote.slogan}}
                                        </p>
                                        {{/if}}
                                        {{#if adList.categoryAdvertisingAd.noticeMessage}}
                                        <p class="notice-message"><span class="icon"></span>{{{adList.categoryAdvertisingAd.noticeMessage}}}
                                        </p>
                                        {{else}}
                                        <div class="form-field-input">
                                            {{#if adList.categoryAdvertisingAd.enableBuy}}
                                            {{#each adList.categoryAdvertisingAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="categoryAdvertisingAdFeeAndDuration"
                                                       id="categoryAdvertisingAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} />
                                                <label for="categoryAdvertisingAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{else}}
                                            {{#each adList.categoryAdvertisingAd.options}}
                                            <div class="ads-option">
                                                <input type="radio" name="categoryAdvertisingAdFeeAndDuration"
                                                       id="categoryAdvertisingAdFeeAndDuration_{{days}}"
                                                       value="{{days}}" data-price="{{price}}" {{#if
                                                       isSelected}}checked{{/if}} disabled />
                                                <label for="categoryAdvertisingAdFeeAndDuration_{{days}}">{{{priceLabel}}}
                                                    <span class="ad-unit">/{{days}}天</span></label>
                                            </div>
                                            {{/each}}
                                            {{/if}}

                                        </div>
                                        {{/if}}

                                        {{#unless isAdditionalAd}}
                                        <div class="guide hidden"><span class="icon"></span><span class="message">請上傳上方的<a
                                                        class="go-to-upload-image" href="#">商品主圖</a></span></div>
                                        {{/unless}}
                                        {{#if error.message.categoryAdvertisingAdFeeAndDuration}}
                                        {{#with error.message.categoryAdvertisingAdFeeAndDuration}}
                                        {{#each .}}
                                        <div class="p-error-hint">
                                            <span class="msg-error-notice">{{{.}}}</span>
                                        </div>
                                        {{/each}}

                                        {{/with}}
                                        {{/if}}

                                        {{#unless adList.categoryAdvertisingAd.noSlogan}}
                                        <div class="form-field-input ad-slogan">
                                            <label for="categoryAdvertisingAdSlogan">廣告文案</label>
                                            <div class="slogan-input-wrap">
                                                <input type="text" name="categoryAdvertisingAdSlogan"
                                                       id="categoryAdvertisingAdSlogan"
                                                       value="{{{adList.categoryAdvertisingAd.slogan}}}"
                                                       maxlength="18" {{#unless
                                                       adList.categoryAdvertisingAd.isSelected}}disabled="true" {{/unless}}
                                                class="{{#unless
                                                adList.categoryAdvertisingAd.isSelected}}disabled{{/unless}}{{#if
                                                error.message.categoryAdvertisingAdSlogan}} error-highlight{{/if}}"
                                                autocomplete="off"/>
                                                <div class="ad-comment-wrap">
                                                    <span class="length">{{#if adList.categoryAdvertisingAd.lengthOfSlogan}}{{adList.categoryAdvertisingAd.lengthOfSlogan}}{{else}}0{{/if}}/18</span>
                                                </div>
                                                {{#if error.message.categoryAdvertisingAdSlogan}}
                                                {{#with error.message.categoryAdvertisingAdSlogan}}
                                                {{#each .}}
                                                <div class="p-error-hint">
                                                    <span class="msg-error-notice">{{{.}}}</span>
                                                </div>
                                                {{/each}}

                                                {{/with}}
                                                {{/if}}
                                            </div>
                                            <input type="button"
                                                   class="button-apply-to-all{{#unless adList.categoryAdvertisingAd.isSelected}} disabled{{/unless}}"
                                                   value="套用到所有文案" {{#unless
                                                   adList.categoryAdvertisingAd.isSelected}}disabled="true" {{/unless}}>
                                        </div>
                                        {{/unless}}
                                    </div>
                                </div>
                                {{/if}}

                                {{/if}}
                                </fieldset>
                                <!--
                                <div class="example">
                                    善用廣告，增加買氣 <a href="https://tw.bid.yahoo.com/help/new_auc/fee/AdFee.html" target="_blank">廣告說明</a> | <a href="https://tw.bid.yahoo.com/help/new_auc/fee/AdFee.html" target="_blank">看範例</a>
                                </div>
                                -->

                                {{#if promoteStep2-1}}
                                <div class="promote-step2-1">
                                    <a href="{{promoteStep2-1.link}}" target="{{promoteStep2-1.target}}">
                                        <img src="{{promoteStep2-1.imgPath}}">
                                    </a>
                                </div>
                                {{/if}}
                            </xmp>
                            <div class="fieldset-pricing submit-flow-set mod-shadow"><h3 class="subject">商品刊登費用明細</h3>
                                <div class="decorations"><em>block</em> <em class="arrow">arrow</em></div>
                                <section class="pricing-wrap"
                                         data-updateurl="/partner/merchandise/ajax_query_item_fee_summary?mtype=basic&amp;cid=2092106469&amp;op=add&amp;action=edit&amp;mid=0">
                                    <h2 class="head">商品刊登費用明細</h2>
                                    <div class="price-table-wrap">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th class="buy-items">購買項目</th>
                                                <th class="units">數量/單位</th>
                                                <th class="price">小計</th>
                                                <th class="right-side">注意事項</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td colspan="3">
                                                    <div class="content nofee">尚未產生費用</div>
                                                </td>
                                                <td class="right-side price-help"><h3>溫馨小提醒</h3>
                                                    <div class="content">1. 2017/12/21起，拍賣提供賣家「<a
                                                                href="https://auchelp.tumblr.com/c2cpay_intro"
                                                                target="_blank">輕鬆付餘額自動扣款</a>」方式繳費。以後拍賣繳費設定更簡單，不必等出帳通知就能自動繳費。<br>2.
                                                        交易手續費尚未包含在上述明細中，此費用將於買賣雙方交易完成才進行收取。
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                <div class="browser-btn" id="submit-edit-confirm-button" data-rapid="general"><input
                                            type="submit" value="下一步" class="button-submit button-main btn-pad"
                                            data-rapid_p="1">
                                    <a href="<?=base_url()?>Select_type"
                                       class="button-submit button-secondary btn-pad" data-rapid_p="2">取消</a></div>
                            </div>
                        </em></div>
                    <em> </em></form>
            </div>
            <em>


            </em></div>
        <em>

        </em></div>
    <em>
    </em></div>