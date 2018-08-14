<?php
$grand_total = 0;


if ($cart = $this->cart->contents()):
	foreach ($cart as $item):
		$grand_total = $grand_total + $item['subtotal'];
	endforeach;
endif;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Billing Info</title>


</head>
<body>
<form name="billing" method="post" action="<?php echo base_url().'billing/save_order' ?>" >
    <input type="hidden" name="command" />
	<div align="center">
        <h1 align="center">Billing Info</h1>
        <table border="0" cellpadding="2px">
        	<tr><td>Order Total:</td><td><strong>$<?php echo number_format($grand_total,2); ?></strong></td></tr>
            <tr><td>Your Name:</td><td><input type="name" required name="name" /></td></tr>
            <tr><td>Address:</td><td><input type="address" required name="address" /></td></tr>
            <tr><td>Email:</td><td><input type="email" required name="email" /></td></tr>
            <tr><td>Phone:</td><td><input type="phone" required name="phone" /></td></tr>
            <tr><td><div id="paypal-button"></div></td></tr>

        </table>
	</div>
</form><script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
    paypal.Button.render({
        env: 'sandbox',
        client: {
            sandbox: 'Ab4bzEZCbm88vg2fsLxd9P9QDOk7hnw7RibUSGNyjrtBisXxeoljGGAm0VKEhRFCBtKSAdAWyJ-wUpn8'
        },

        payment: function (data, actions) {
            return actions.payment.create({
                transactions: [{
                    amount: {
                        total: 'grand_total',
                        currency: 'MYR'
                    }
                }]
            });
        },
        onAuthorize: function (data, actions) {
            return actions.payment.execute()
                .then(function () {
                    window.alert('Thank you for your purchase!');
                });
        }
    }, '#paypal-button');
</script>
</body>
</html>
