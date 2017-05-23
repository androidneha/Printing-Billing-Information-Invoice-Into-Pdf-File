<?php
include('create_bill.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Create a PDF invoice with PHP</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div id="content">
		<div><center><img src="img/yocabz.png"></center></div>
		<div id="title" align="center">Create Bill As PDF</div>
		<div id="body">
			<form action="" method="post" enctype="multipart/form-data">
				<div id="body_l">
					<div id="name"><input name="company" placeholder="Insert here your Company Name" type="text" /></div>
					<div id="name"><input name="address" placeholder="Insert here your Company Address" type="text" /></div>
					<div id="name"><input name="email" placeholder="Insert here your Email" type="text" /></div>
					<div id="name"><input name="telephone" placeholder="Insert here your telephone number" type="text" /></div>
					<div id="name"><input name="number" placeholder="Invoice number" type="text" /></div>
					<div id="name"><input name="item" placeholder="Item" type="text" /></div>
				</div>
				<div id="body_r">
					<div id="name"><input name="price" placeholder="Insert here price" type="text" /></div>
					<div id="name"><input name="vat" placeholder="Insert here your VAT" type="text" /></div>
					<div id="name"><input name="bank" placeholder="Insert the name of your Bank" type="text" /></div>
					<div id="name"><input name="iban" placeholder="Insert here your IBAN number" type="text" /></div>
					<div id="name"><input name="paypal" placeholder="Insert here your PayPal address" type="text" /></div>
					<div id="name"><input name="com" placeholder="Add a comment" type="text" /></div>
				</div>
				<div id="up" align="center"><input name="file"  type="file" /></div>
				<div id="up" align="center"><input name="submit" style="margin-top:60px;" value="Create your Invoice" type="submit" /><br /><br />

					<?php 
					if(isset($_POST["submit"]))
					{
						echo'<a href="invoice.pdf">'?><div style="color: blue;"><b>Download your Invoice</b></div><?php '</a>';
					}
					?>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
