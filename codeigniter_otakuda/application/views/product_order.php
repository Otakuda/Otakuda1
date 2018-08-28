<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Shopping Cart</title>
    <script>
        function clear_cart() {
            var result = confirm('你確定要刪除全部嗎?');

            if (result) {
                window.location = "<?php echo base_url(); ?>Product_order/remove/all";
            } else {
                return false; // cancel button
            }
        }
    </script>
</head>
<body>
<!--<form action="--><? //= base_url() ?><!--billing" method="post">-->
<div style="margin:0px auto; width:600px;">
    <div style="padding-bottom:10px">
        <h1 align="center">購物車</h1>
        <input type="button" value="繼續逛街" onclick="window.location='map'"/>
    </div>
    <div style="color:#F00"><?php echo $message ?></div>
    <table border="0" cellpadding="5px" cellspacing="1px"
           style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1" width="100%">
        <?php if ($cart = $this->cart->contents()): ?>
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
            $grand_total = 0;
            $i = 1;

            foreach ($cart as $item):
                echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                echo form_hidden('cart[' . $item['id'] . '][remark]', $item['remark']);
                ?>
                <tr bgcolor="#FFFFFF">
                <td>
                    <?php echo $i++; ?>
                </td>
                <td>
                    <?php echo $item['name']; ?>
                </td>
                <td>
                    $ <?php echo number_format($item['price'], 2); ?>
                </td>
                <td>
                    <?php echo $item['qty']; ?>
                </td>
                <?php $grand_total = $grand_total + $item['subtotal']; ?>
                <td>
                    $ <?php echo number_format($item['subtotal'], 2) ?>
                </td>
                <td>
                    <?php echo $item['remark']; ?>
                </td>
                <?php $item['shop_id']; ?>
                <td>
                    <?php echo anchor('Product_order/remove/' . $item['rowid'], '刪除'); ?>
                </td>
            <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>總價錢: $<?php echo number_format($grand_total, 2); ?></b></td>
                <td></td>
                <td colspan="5" align="right">
                    <input type="button" value="清除" onclick="clear_cart()">
                    <!--                    <input type="submit" value="Update Cart">-->
                    <?php echo form_close(); ?>
                    <input type="submit" value="下單" onclick="window.location='billing'"></td>
            </tr>
        <?php endif; ?>
    </table>
</div>
<!--</form>-->
</div>
</body>
</html>