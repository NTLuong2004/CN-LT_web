<?php
	$tensanpham = filter_input(INPUT_POST, 'tensanpham');
	$giaban = filter_input(INPUT_POST, 'giaban');
	$phantramchietkhau = filter_input(INPUT_POST, 'phantramchietkhau');
	
        $sotienchietkhau = $giaban * $phantramchietkhau * .01;
        $giacuoi = $giaban - $sotienchietkhau;
        
        $list_price_f = "$".number_format($giaban, 2);
        $discount_percent_f = $phantramchietkhau."%";
        $sotienchietkhau_f = "$".number_format($sotienchietkhau, 2);
        $giacuoi_f = "$".number_format($giacuoi, 2);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($tensanpham); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($giaban); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($phantramchietkhau."%"); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $sotienchietkhau_f; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $giacuoi_f; ?></span><br>
    </main>
</body>

</html>