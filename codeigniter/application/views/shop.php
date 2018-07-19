<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div align="center">
	<h1 align="center">Shop</h1>

	<table border="0" cellpadding="2px" width="300px">
		<?php
			foreach ($shop as $shop){
				$id = $shop['shop_id'];
				$name = $shop['shop_name'];
				$description = $shop['shop_description'];
				
		?>
    	<tr>
        	<td><img src="<?php echo $shop['picture']?>" width="200px" height="100px"/></td>
            <td><b><?php echo $name; ?></b><br />
            		<?php echo $description; ?><br />
            		<a href=product?id=<?=$id?>> <?=$name?></a>
                    
			</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td>
        <?php } ?>
    </table>
</div>
</body>
</html>