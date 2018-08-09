<?php
$grand_total = 0;

if ($cart = $this->cart->contents()):
	foreach ($cart as $item):
		$grand_total = $grand_total + $item['subtotal'];
	endforeach;
endif;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products</title>
</head>
<body>
	
<div align="center">
	<h1 align="center">Products</h1>

	<table border="0" cellpadding="2px" width="600px">
		<?php
			foreach ($products as $product){
				$id = $product['id'];
				$name = $product['name'];
				$description = $product['description'];
				$price = $product['price'];
		?>
    	<tr>
        	<td><img src="<?php echo $product['picture']?>" /></td>
            <td><b><?php echo $name; ?></b><br />
            		<?php echo $description; ?><br />
                    Price:<big style="color:green">
                    $<?php echo $price; ?></big><br /><br />
                    <?php
					echo form_open('cart/add');
					echo form_hidden('id', $id);
					echo form_hidden('name', $name);
					echo form_hidden('price', $price);
					echo form_submit('action', 'Add to Cart');
					echo form_close();
					?>
			</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td>
        <?php } ?>
    </table>
</div>
</body>
</html>
