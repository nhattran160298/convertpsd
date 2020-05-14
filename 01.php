<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chòm sao của bạn là gì</title>
	<link rel="stylesheet" href="1.css" type="text/css">
</head>
<body>
	<div class="content">
		<h1>Chòm sao của bạn là gì?</h1>
		<form action="#" method="post" name="main-form">
			<div class="row">
				<span>Ngày sinh</span>
				<input type="text" name="ngay" value="<?php echo $day; ?>">
			</div>
			<div class="row">
				<span>Tháng sinh</span>
				<input type="text" name="ngay" value="<?php echo $mon; ?>">
			</div>
			<div class="row">
				<input type="submit" value="Lấy chòm sao" name="submit"/>
			</div>
		</form>
	</div>
</body>
</html>