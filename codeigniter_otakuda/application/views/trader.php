<div class="yui3-u main-content order-list-pjax" id="yui_3_12_0_5_1531461571569_1106">
    <div class="yui3-u-1">
        <div class="my-breadcrumb-wrap">
            <ul class="my-breadcrumb yui3-g">
                <li class="yui3-u">
                    <span itemprop="title">訂單查詢</span>
                </li>
            </ul>
        </div>

        <div class="module-order-list" data-query-order-url="/myauc/orderListsQuery" data-order-qty="">
            <div class="empty-wrap">
                <table border="0" cellpadding="5px" cellspacing="1px"
                       style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1"
                       width="100%">
                    <tr bgcolor="#FFFFFF" style="font-weight:bold">
                        <td>Serial</td>
                        <td>商品</td>
                        <td>單價</td>
                        <td>數量</td>
                        <td>價錢</td>
                        <td>備註</td>
                        <td>選項</td>
                    </tr>
                    <?php
                    $i = 1;
                    foreach ($order as $item): ?>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td>
                            <?php echo $item['product_id']; ?>
                        </td>
                        <td>
                            <?php echo $item['quantity']; ?>
                        </td>
                        <td>
                            <?php echo $item['price']; ?>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <?php endforeach; ?>
                    </tr>
                </table>
            </div>
            <div class="buyerCompleteWlpTxTips hidden">{"img":null,"title":null,"content":null}</div>
        </div>

    </div>
</div>