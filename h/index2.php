<?php
	session_start();
	if (entry($_SESSION['aid'])) {
		echo "Access Denied" ;
		exit;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ธิชาดา สีทอน - น้ำตาล</title>
</head>

<body>
<h1>หน้าหลักแอดมิน</h1>

<?php echo "แอดมิน: ". $_SESSION['a_name'];?><br>

<ul>
	<a href="product.php"><li>จัดการสินค้า</li></a>
    <a href="orders.php"><li>จัดการออเดอร์</li></a>
	<a href="customer.php"><li>จัดการลูกค้า</li></a>
    <a href="logout.php"><li>ออกจากระบบ</li></a>
</ul>
</body>
</html>