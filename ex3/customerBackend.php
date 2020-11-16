<html>
	<head>
		<title>Web store</title>
	</head>
	<body>
    <center>
    <?php
	echo "<br>Thanks</br>";
	$password = $_POST["password"];
	$k70 = $_POST["num_k70"];
	$k95 = $_POST["num_k95"];
	$k100 = $_POST["num_k100"];
	$price_k70 = 129.00 * $k70;
	$price_k95 = 199.00 * $k95;
	$price_k100= 229.00 * $k100;
	$shipping = $_POST["cost"];
	$shipping2 = "";
	$totalCost = $price_k70 + $price_k95 + $price_k100+ $shipping;
	
    if($shipping == 0) 
    {
		$shipping2 = "7 day";
	}

    else if($shipping == 50) 
    {
		$shipping2 = "Over night";
    } 
    else 
    {
		$shipping2 = "Three days";
	}

	echo "<br>Your password is " . $password . "</br><br></br>";
    echo "<table bgcolor=#40c0ff border=1>
    
        <tr>
        <td></td>
        <td>Quantity</td>
        <td>Cost Per Item</td>
        <td>Sub Total</td>
        </tr>
        <tr>
    
        <td>Corsair K70</td>
        <td>$k70</td>
        <td>$129.00</td>
        <td>$$price_k70</td>
        </tr>

        <tr>
        <td>Corsair K95</td>
        <td>$k95</td>
        <td>$199.00</td>
        <td>$$price_k95</td>
        </tr>

        <tr>
        <td>Corsair K100</td>
        <td>$k100</td>
        <td>$229.00</td>
        <td>$$price_k100</td>
        </tr>

        <tr>
        <td>Shipping</td>
        <td colspan=2>$shipping2</td>
        <td>$$shipping</td>
        </tr>

        <tr>
        <td align=center colspan=3>Total Cost</td>
        <td >$$totalCost</td>
        </tr>

    </table>";
	?>
    </center>
	</body>
</html>