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
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="../css/slick.css" />
	<link type="text/css" rel="stylesheet" href="../css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="../css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="../css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css/style.css" />
<title>Products</title>
</head>
<body>
	
<div align="center">
	<h1 align="center">Products</h1>

	<table border="0" cellpadding="2px" width="600px">
		<?php
			foreach ($products as $product)
			{
				$product_id = $product['product_id'];
				$product_name = $product['product_name'];
				$product_brief = $product['product_brief'];
				$product_price = $product['product_price'];
		?>
    	<tr>
        	<td><img width="200px" height="100%" src="<?php echo $product['product_image']?>" /></td>
            <td><b><?php echo $product_name; ?></b><br />
            		<?php echo $product_brief; ?><br />
                    Price:<big style="color:green">
                    $<?php echo $product_price; ?></big><br /><br />
                <input type="qty" name="qty" id="qty" maxlength="1" size="1">
                <input type="submit" name="checkout" id="checkout" onclick="select()" >
            </td>

        <tr><td colspan="2"><hr size="1" /></td>
        <?php } ?>
    </table>
</div>
</body>
<script type="text/javascript">
    function select()
    {

        var qty = document.getElementById("qty").value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            }

        };
        xmlhttp.open("Post", "cart/add", true);
        xmlhttp.send(qty);// JavaScript Document
    }
</script>
</html>
