<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<?php
    $name = filter_input(INPUT_POST, 'product_description');
    $price = filter_input(INPUT_POST, 'list_price');
    $priceFormat = number_format($price, 2);
    $discount_percent = filter_input(INPUT_POST, 'discount_percent');
    $discount_mount = $discount_percent * ($price/100);
    $discount_mountFormat = number_format($discount_mount, 2);
    $discountp_price = $price - $discount_mount;
    $discountp_priceFormat = number_format($discountp_price, 2);
?>

<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $name; ?></span><br>

        <label>List Price:</label>
        <span><?php echo "$".$priceFormat; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent."%";?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo "$".$discount_mountFormat; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo "$".$discountp_priceFormat; ?></span><br>
    </main>
</body>
</html>