<div class="module-order-list" data-query-order-url="/myauc/orderListsQuery" data-order-qty="">
    <div class="empty-wrap">

        <table border="0" cellpadding="5px" cellspacing="1px"
               style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1"
               width="100%">

            <tr bgcolor="#FFFFFF" style="font-weight:bold">
                <td>#</td>
                <td>商品</td>
                <td>單價</td>
                <td>數量</td>
                <td>價錢</td>
                <td>備註</td>
            </tr>
            <?php
            $i = 1;
            foreach ($order as $product) { ?>
                <tr bgcolor="#FFFFFF">
                    <td>
                        <?php echo $i++; ?>
                    </td>
                    <td>
                        <?php echo $product['product_name']; ?>
                    </td>
                    <td>
                        <?php echo $product['product_price']; ?>
                    </td>
                    <td>
                        <?php echo $product['quantity']; ?>
                    </td>
                    <td>
                        <?php echo $product['price']; ?>
                    </td>
                    <td>
                        <?php echo $product['remark']; ?>
                    </td>
                </tr>
            <?php }
            ?>
            <tr bgcolor="#FFFFFF">
                <td colspan="7" align="center">
                    <a href="<?= base_url() ?>order_toDestination/updateAccepter/<?php echo $product['order_id']; ?>">
                        <button>確定</button>
                    </a>
                    <button>取消</button>
                </td>
            </tr>

        </table>
    </div>
</div>