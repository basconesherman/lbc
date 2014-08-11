<!DOCTYPE html>
<?php
	include '../../connect.php';
	$id = $_COOKIE["user"];
	$result = mysql_query("SELECT * FROM tblpreorder WHERE id='$id'");
	while($row = mysql_fetch_array($result)){
		$total = $row['totalAmount'];
	}
?>
<html>
	<head>
		<title>Pricing & Ordering | Letterpress Business Cards</title>
		<?php include 'library/imports1.php';?>
		<link type="text/css" rel="stylesheet" href="css/pricing.css"/>
		<link type="text/css" rel="stylesheet" href="css/paper.css"/>
	</head>
	
	<body>
		<div class="container">
			<?php include 'library/header.php';?>
			<?php include 'library/navigation.php';?>
			<div class="content-grid">
				<div class="title">
					<p id="title">PRICING <span> & </span> ORDERING</p>
					<p id="sub-title">LET'S GET YOUR DESIGN ON</p>
				</div>
				<div id="tabs">
					<ul>
						<li><img src="images/pricing-1.png"></li>
						<li><img src="images/pricing-2-active.png"></li>
						<li><img src="images/pricing-3.png"></li>
						<li><img src="images/pricing-4.png"></li>
						<li><img src="images/pricing-5.png"></li>
						<li><img src="images/pricing-6.png"></li>
						<li id="total"><center><p id="totalValue">$<?php echo $total;?>.00</p></center></li>
					</ul>
				</div>
			</div>
			<div id="paper-box">
				<br/><br/>
				<form action="size-process.php" method="post">
					<div class="content-grid">
						<input type="radio" id="standard" name="size" value="all" checked />
						<label class="size" for="standard">
							<div>
								<h2 class="text-option">STANDARD SIZE</h2>
							</div>
						</label>
						<div class="title">
							<p id="title" style="font-size:23pt;text-align:left;margin-top:15px;margin-left:20px;">SELECT ONE OF OUR STANDARD SIZES:</p>
						</div>
						<div id="size-box">
							<div id="standard-box" class="size-boxes">
								<h2 id="size1" class="selected" data-key1="standard">
									STANDARD
									<br/>
									<span>3.5IN X 2IN</span>
								</h2>
							</div>
							<div id="square-box" class="size-boxes">
								<h2 id="size2" data-key2="square">
									SQUARE
									<br/>
									<span>2.5IN X 2.5IN</span>
								</h2>
							</div>
							<div id="skinny-box" class="size-boxes">
								<h2 id="size3" data-key3="skinny">
									SKINNY
									<br/>
									<span>1.5IN X 3.5IN</span>
								</h2>
							</div>
						</div>
					</div>
					<br/><br/>
					<div class="content-grid">
						<input type="radio" id="custom" name="size" value="all">
						<label class="size" for="custom">
							<div>
								<h2 class="text-option">CUSTOM SIZE</h2>
							</div>
						</label>
					</div>
					<br/><br/>
					<input id="sizeValue" type="text" name="size" style="display:none;"/>
			</div>
				<br/><br/>
				<div class="content-grid">
						<a type="button" style="display:absolute;margin-top:20px;cursor:pointer;" onClick="history.go(-1);return true;"><img src="images/prev-btn.png"></a>
						<input id="size-submit" type="submit" value="" />
					</div>
				</form>
				<img class="quote" src="images/size-quote.png" width="574px" height="81px">
			<?php include 'library/footer.php';?>
		</div>
	</body>
</html>