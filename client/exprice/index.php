<!DOCTYPE html>
<?php
//include('../../auth.php');
?>
<html>
	<head>
		<title>Pricing & Ordering | Letterpress Business Cards</title>
		<?php include 'library/imports1.php';?>
		<link type="text/css" rel="stylesheet" href="css/pricing.css"/>
	</head>
	<body>
		<div class="container">
			<?php include 'library/header.php';?>
			<?php include 'library/navigation.php';?>
			<?php include 'library/navi.php';?>
			<div class="content-grid">
				<div class="title">
					<p id="title">PRICING <span> & </span> ORDERING</p>
					<p id="sub-title">LET'S GET YOUR DESIGN ON</p>
				</div>
				<div id="tabs">
					<ul>
						<li><img src="images/pricing-1-active.png"></li>
						<li><img src="images/pricing-2.png"></li>
						<li><img src="images/pricing-3.png"></li>
						<li><img src="images/pricing-4.png"></li>
						<li><img src="images/pricing-5.png"></li>
						<li><img src="images/pricing-6.png"></li>
						<li id="total"></li>
					</ul>
				</div>
			</div>
			<form id="pricing-tab-" action="paper-process.php" method="post">
				<div class="content-grid">
					<div class="title">
						<p id="title" style="text-align:left;font-size:28pt;">WHAT WOULD YO LIKE TO ORDER?</p>
						<select id="drop1">
							<option value="Business Cards">Business Cards</option>
						</select>
					</div>
					<div id="paper-options">
						<input type="radio" id="single" class="options" name="paper" value="single-stock" checked>
						<label class="paper" for="single">
							<div>
								<h2 class="text-option">SINGLE STOCK</h2>
							</div>
						</label>
						
						<input type="radio" id="duplex" class="options" name="paper" value="duplex-stock">
						<label class="paper" for="duplex" style="float:right;">
							<div>
								<h2 class="text-option">DUPLEX (2 STOCKS)</h2>
							</div>
						</label>
					</div>
					
					<!-- Remember value after form submission -->
					<script type="text/javascript">
						document.getElementById('paper').value = "<?php echo $_POST['paper'];?>";
					</script>

					<div id="single-stock">
						<input type="radio" id="radio1" name="radios" value="1ply-01" checked>
						<label for="radio1">
							<div class="items" >
								<h2 class="item-text">Lettra 1 ply white</h2>
							</div>
						</label>
						
						<input type="radio" id="radio2" name="radios" value="2ply-02">
						<label for="radio2">
							<div class="items" >
								<h2 class="item-text">Lettra 2 ply white</h2>
							</div>
						</label>
						
						<input type="radio" id="radio3" name="radios" value="1ply-03">
						<label for="radio3">
							<div class="items pearl" >
								<h2 class="item-text">Lettra 1 ply pearl</h2>
							</div>
						</label>
						
						<input type="radio" id="radio4" name="radios" value="2ply-04">
						<label for="radio4">
							<div class="items pearl" >
								<h2 class="item-text">Lettra 2 ply pearl</h2>
							</div>
						</label>
						
						<input type="radio" id="radio5" name="radios" value="1ply-05">
						<label for="radio5">
							<div class="items crest" >
								<h2 class="item-text">Crest 1 ply pearl</h2>
							</div>
						</label>
						
						<input type="radio" id="radio6" name="radios" value="2ply-06">
						<label for="radio6">
							<div class="items crest" >
								<h2 class="item-text">Crest 2 ply pearl</h2>
							</div>
						</label>
						
						<input type="radio" id="radio7" name="radios" value="1ply-07">
						<label for="radio7">
							<div class="items d-gray" >
								<h2 class="item-text">CP 1 ply dark grey</h2>
							</div>
						</label>
						
						<input type="radio" id="radio8" name="radios" value="1ply-08">
						<label for="radio8">
							<div class="items r-gray" >
								<h2 class="item-text">CP 1 ply real grey</h2>
							</div>
						</label>
						
						<input type="radio" id="radio9" name="radios" value="1ply-09">
						<label for="radio9">
							<div class="items stone" >
								<h2 class="item-text">Arturo 1 ply stone</h2>
							</div>
						</label>
						
						<input type="radio" id="radio10" name="radios" value="1ply-10">
						<label for="radio10">
							<div class="items kraft" >
								<h2 class="item-text">Kraft 1 ply</h2>
							</div>
						</label>

						<input type="radio" id="radio11" name="radios" value="1ply-11">
						<label for="radio11">
							<div class="items scarlet" >
								<h2 class="item-text">CP 1 ply scarlet</h2>
							</div>
						</label>
						
						<input type="radio" id="radio12" name="radios" value="1ply-12">
						<label for="radio12">
							<div class="items rosa" >
								<h2 class="item-text">Arturo 1 ply rosa</h2>
							</div>
						</label>
						
						<input type="radio" id="radio13" name="radios" value="1ply-13">
						<label for="radio13">
							<div class="items navy" >
								<h2 class="item-text">CP 1 ply navy</h2>
							</div>
						</label>
						
						<input type="radio" id="radio14" name="radios" value="1ply-14">
						<label for="radio14">
							<div class="items mint" >
								<h2 class="item-text">CP 1 ply mint</h2>
							</div>
						</label>
					</div>
					
					<!-- Remember value after form submission -->
					<script type="text/javascript">
						document.getElementById('radios').value = "<?php echo $_POST['radios'];?>";
					</script>
					
					<div id="duplex-stock" class="deactivated">
						<input type="radio" id="radio15" name="radios2" value="1ply-01" checked>
						<label for="radio15">
							<div class="items" >
								<h2 class="item-text">Lettra 1 ply white</h2>
							</div>
						</label>
						
						<input type="radio" id="radio16" name="radios2" value="2ply-02">
						<label for="radio16">
							<div class="items" >
								<h2 class="item-text">Lettra 2 ply white</h2>
							</div>
						</label>
						
						<input type="radio" id="radio17" name="radios2" value="1ply-03">
						<label for="radio17">
							<div class="items pearl" >
								<h2 class="item-text">Lettra 1 ply pearl</h2>
							</div>
						</label>
						
						<input type="radio" id="radio18" name="radios2" value="2ply-04">
						<label for="radio18">
							<div class="items pearl" >
								<h2 class="item-text">Lettra 2 ply pearl</h2>
							</div>
						</label>
						
						<input type="radio" id="radio19" name="radios2" value="1ply-05">
						<label for="radio19">
							<div class="items crest" >
								<h2 class="item-text">Crest 1 ply pearl</h2>
							</div>
						</label>
						
						<input type="radio" id="radio20" name="radios2" value="2ply-06">
						<label for="radio20">
							<div class="items crest" >
								<h2 class="item-text">Crest 2 ply pearl</h2>
							</div>
						</label>
						
						<input type="radio" id="radio21" name="radios2" value="1ply-07">
						<label for="radio21">
							<div class="items d-gray" >
								<h2 class="item-text">CP 1 ply dark grey</h2>
							</div>
						</label>
						
						<input type="radio" id="radio22" name="radios2" value="1ply-08">
						<label for="radio22">
							<div class="items r-gray" >
								<h2 class="item-text">CP 1 ply real grey</h2>
							</div>
						</label>
						
						<input type="radio" id="radio23" name="radios2" value="1ply-09">
						<label for="radio23">
							<div class="items stone" >
								<h2 class="item-text">Arturo 1 ply stone</h2>
							</div>
						</label>
						
						<input type="radio" id="radio24" name="radios2" value="1ply-10">
						<label for="radio24">
							<div class="items kraft" >
								<h2 class="item-text">Kraft 1 ply</h2>
							</div>
						</label>

						<input type="radio" id="radio25" name="radios2" value="1ply-11">
						<label for="radio25">
							<div class="items scarlet" >
								<h2 class="item-text">CP 1 ply scarlet</h2>
							</div>
						</label>
						
						<input type="radio" id="radio26" name="radios2" value="1ply-12">
						<label for="radio26">
							<div class="items rosa" >
								<h2 class="item-text">Arturo 1 ply rosa</h2>
							</div>
						</label>
						
						<input type="radio" id="radio27" name="radios2" value="1ply-13">
						<label for="radio27">
							<div class="items navy" >
								<h2 class="item-text">CP 1 ply navy</h2>
							</div>
						</label>
						
						<input type="radio" id="radio28" name="radios2" value="1ply-14">
						<label for="radio28">
							<div class="items mint" >
								<h2 class="item-text">CP 1 ply mint</h2>
							</div>
						</label>
					</div>
					
					<!-- Remember value after form submission -->
					<script type="text/javascript">
						document.getElementById('radios2').value = "<?php echo $_POST['radios2'];?>";
					</script>
				</div>
				<br/><br/>
				<div class="content-grid">
					<p class="article left">
						Dark papers dont print well with letterpress, these stocks are only available for foil printing.
					</p>
					<input id="paper-submit" type="submit" value="" />
				</div>
			</form>
			<?php include 'library/footer.php';?>
		</div>
	</body>
</html>