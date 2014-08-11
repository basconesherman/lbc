<!DOCTYPE html>
<?php
	include '../connect.php';
	$id = $_COOKIE["user2"];
	$result = mysql_query("SELECT * FROM tblpreorder WHERE id='$id'");
	while($row = mysql_fetch_array($result)){
		$paperType = $row['papertype'];
		$plyFront = $row['plyfront'];
		$pfront = $row['paperfront'];
		$pback = $row['paperback'];
		
		if(($paperType == "duplex-stock") || ($plyFront == "2")){
			echo "
				<script src='../js/jquery-1.7.2.min.js'></script>
				<script>
				$(document).ready(function(){
						$( '#duplex-color-tab-hidden' ).addClass( 'activated', -1000);
						$( '#duplex-color-tab-hidden' ).removeClass( 'deactivated')
						
						$( '#image' ).addClass( 'deactivated', -1000);
						$( '#image' ).removeClass( 'activated');
				});
				</script>
			";
		}
		else{
			echo "
				<script src='../js/jquery-1.7.2.min.js'></script>
				<script>
				$(document).ready(function(){
						$( '#duplex-color-tab-hidden' ).addClass( 'deactivated', -1000);
						$( '#duplex-color-tab-hidden' ).removeClass( 'activated')
						
						$( '#image' ).addClass( 'activated', -1000);
						$( '#image' ).removeClass( 'deactivated');
				});
				</script>
			";
		}
	}
?>
<html>
	<head>
		<title>Pricing & Ordering | Letterpress Business Cards</title>
		<?php include 'library/imports1.php';?>
		<link type="text/css" rel="stylesheet" href="css/pricing.css"/>
		<link type="text/css" rel="stylesheet" href="css/2cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/3cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/6cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/7cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/8cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/9cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/10cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/11cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/12cols.css"/>
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
						<li><img src="images/pricing-1.png"></li>
						<li><img src="images/pricing-2.png"></li>
						<li><img src="images/pricing-3.png"></li>
						<li><img src="images/pricing-4-active.png"></li>
						<li><img src="images/pricing-5.png"></li>
						<li><img src="images/pricing-6.png"></li>
						<li id="total"></li>
					</ul>
				</div>
			</div>
			<form action="color-process.php" method="post">
				<div class="content-grid">
					<br/><br/>
					<div id="color-options">
						<input type="radio" id="front" class="options" name="paper" value="all" checked>
						<label class="paper" for="front">
							<div>
								<h2 class="text-option">FRONT SIDE</h2>
							</div>
						</label>
						
						<input type="radio" id="back" class="options" name="paper" value="all">
						<label class="paper" for="back" style="float:right;">
							<div>
								<h2 class="text-option">BACK SIDE</h2>
							</div>
						</label>
					</div>
					<div id="single-color-tab">	
						<?php
							echo "<script>$(document).ready(function(){";
								if($pfront == "Crest 1 ply pearl" || $pfront == "Crest 2 ply pearl"){
									echo "$( '#paper1-color' ).addClass( 'crest', -1000);";
								}
								else if($pfront == "Lettra 1 ply pearl" || $pfront == "Lettra 2 ply pearl"){
									echo "$( '#paper1-color' ).addClass( 'pearl', -1000);";
								}
								else if($pfront == "CP 1 ply dark grey"){
									echo "$( '#paper1-color' ).addClass( 'd-gray', -1000);";
								}
								else if($pfront == "CP 1 ply real grey"){
									echo "$( '#paper1-color' ).addClass( 'r-gray', -1000);";
								}
								else if($pfront == "Arturo 1 ply stone"){
									echo "$( '#paper1-color' ).addClass( 'stone', -1000);";
								}
								else if($pfront == "Kraft 1 ply"){
									echo "$( '#paper1-color' ).addClass( 'kraft', -1000);";
								}
								else if($pfront == "CP 1 ply scarlet"){
									echo "$( '#paper1-color' ).addClass( 'scarlet', -1000);";
								}
								else if($pfront == "Arturo 1 ply rosa"){
									echo "$( '#paper1-color' ).addClass( 'rosa', -1000);";
								}
								else if($pfront == "CP 1 ply navy"){
									echo "$( '#paper1-color' ).addClass( 'navy', -1000);";
								}
								else if($pfront == "CP 1 ply mint"){
									echo "$( '#paper1-color' ).addClass( 'mint', -1000);";
								}
							echo "});</script>"
						?>
						
						<h2 class="color-paper">
							PAPER SELECTED
							<br/>IN STEP NO.1
							<img class="arrow size-arrow" src="images/arrow.png" />
							
							<input type="text" style="display:none;" name="radios">
							<label for="radio1" id="paper-title1">
								<div id="paper1-color" class="items items2" >
									<h2 class="item-text-box"><?php echo $pfront;?></h2>
								</div>
							</label>
						</h2>
						<br/>
						
						<div class="title">
							<p id="title" style="text-align:left;font-size:28pt;">NUMBER OF INK COLORS:</p>
						</div>
						
						<div style="margin-top:-50px;margin-left:30px;" class="">
							<div>
								<div  class="col span_1_of_10">
									<div  class="col span_1_of_2">
										<div id="radioSelect0" class="radioBtn">
											<div id="radio0" class="radioBtnInside deactivated">
												
											</div>
										</div>
									</div>
									<div  class="col span_1_of_2">
										<h2 class="color-text right">0</h2>
									</div>
								</div>
								<div  class="col span_1_of_10">
									
								</div>
								<div  class="col span_1_of_10">
									<div  class="col span_1_of_2">
										<div id="radioSelect1" class="radioBtn">
											<div id="radio1" class="radioBtnInside activated">
												
											</div>
										</div>
									</div>
									<div  class="col span_1_of_2">
										<h2 class="color-text right">1</h2>
									</div>
								</div>
								<div  class="col span_1_of_10">
									
								</div>
								<div  class="col span_1_of_10">
									<div  class="col span_1_of_2">
										<div id="radioSelect2" class="radioBtn">
											<div id="radio2" class="radioBtnInside deactivated">
												
											</div>
										</div>
									</div>
									<div  class="col span_1_of_2">
										<h2 class="color-text right">2</h2>
									</div>
								</div>
								<div  class="col span_1_of_10">
									
								</div>
								<div  class="col span_1_of_10">
									<div  class="col span_1_of_2">
										<div id="radioSelect3" class="radioBtn">
											<div id="radio3" class="radioBtnInside deactivated">
												
											</div>
										</div>
									</div>
									<div class="col span_1_of_2">
										<h2 class="color-text right">3</h2>
									</div>
								</div>
							</div>
						</div>
						<!-- TABS FOR COLOR NUMBER -->
						<!-- FOR 1 COLOR -->
						<div id="colors1" class="section group activated">
							<div class="section group">
								<img class="arrow" src="images/arrow.png" /><p class="color-desc">COLOR NO.1</p>
								<div class="color-grid">
									<div class="col span_4_of_12">
										<div  class="col span_1_of_5">
											<div id="typeSelect1" class="radioBtn">
												<div id="type1" class="radioBtnInside activated">
													
												</div>
											</div>
										</div>
										<div  class="col span_4_of_5">
											<h2 class="color-text2 left">Letterpress</h2>
										</div>
									</div>
									<div class="col span_4_of_12">
										<div  class="col span_1_of_5">
											<div id="typeSelect2" class="radioBtn">
												<div id="type2" class="radioBtnInside deactivated">
													
												</div>
											</div>
										</div>
										<div  class="col span_4_of_5">
											<h2 class="color-text2 left">Foil</h2>
										</div>
									</div>
									
									<div id="letterpress1" class="activated">
										<h2 style="margin:50px 0 0 -25px;position:absolute;font-size:16pt;" class="color-text2 left">Pantone(PMS)Number:</h2>
										<input class="letterpress" type="text" name="letterpress-color1" value="" />
									</div>
									
									<div id="foil1" class="section group deactivated">
										<h2 style="margin:-12px 0 0 -25px;position:absolute;font-size:16pt;" class="color-text2 left">Foil Color:</h2>
										<select class="foil" name="foil-color1">
											<option value="None">SELECT ONE</option>
											<option value="gold">GOLD</option>
											<option value="silver">SILVER</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						
						<!-- FOR 2 COLOR -->
						<div id="colors2" class="section group color-content deactivated">
							<div class="section group">
								<div class="section group"><div id="line2"></div></div>
								<img class="arrow" src="images/arrow.png" /><p class="color-desc">COLOR NO.2</p>
								<div class="color-grid">
									<div class="col span_4_of_12">
										<div  class="col span_1_of_5">
											<div id="typeSelect3" class="radioBtn">
												<div id="type3" class="radioBtnInside activated">
													
												</div>
											</div>
										</div>
										<div  class="col span_4_of_5">
											<h2 class="color-text2 left">Letterpress</h2>
										</div>
									</div>
									<div class="col span_4_of_12">
										<div  class="col span_1_of_5">
											<div id="typeSelect4" class="radioBtn">
												<div id="type4" class="radioBtnInside deactivated">
													
												</div>
											</div>
										</div>
										<div  class="col span_4_of_5">
											<h2 class="color-text2 left">Foil</h2>
										</div>
									</div>
									
									<div id="letterpress2" class="activated">
										<h2 style="margin:50px 0 0 -25px;position:absolute;font-size:16pt;" class="color-text2 left">Pantone(PMS)Number:</h2>
										<input class="letterpress" type="text" name="letterpress-color2" value="" />
									</div>
									
									<div id="foil2" class="section group deactivated">
										<h2 style="margin:-12px 0 0 -25px;position:absolute;font-size:16pt;" class="color-text2 left">Foil Color:</h2>
										<select class="foil" name="foil-color2">
											<option value="None">SELECT ONE</option>
											<option value="gold">GOLD</option>
											<option value="silver">SILVER</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						
						<!-- FOR 3 COLOR -->
						<div id="colors3" class="section group color-content deactivated">
							<div class="section group">
								<div class="section group"><div id="line2"></div></div>
								<img class="arrow" src="images/arrow.png" /><p class="color-desc">COLOR NO.3</p>
								<div class="color-grid">
									<div class="col span_4_of_12">
										<div  class="col span_1_of_5">
											<div id="typeSelect5" class="radioBtn">
												<div id="type5" class="radioBtnInside activated">
													
												</div>
											</div>
										</div>
										<div  class="col span_4_of_5">
											<h2 class="color-text2 left">Letterpress</h2>
										</div>
									</div>
									<div class="col span_4_of_12">
										<div  class="col span_1_of_5">
											<div id="typeSelect6" class="radioBtn">
												<div id="type6" class="radioBtnInside deactivated">
													
												</div>
											</div>
										</div>
										<div  class="col span_4_of_5">
											<h2 class="color-text2 left">Foil</h2>
										</div>
									</div>
									
									<div id="letterpress3" class="activated">
										<h2 style="margin:50px 0 0 -25px;position:absolute;font-size:16pt;" class="color-text2 left">Pantone(PMS)Number:</h2>
										<input class="letterpress" type="text" name="letterpress-color3" value="" />
									</div>
									
									<div id="foil3" class="section group deactivated">
										<h2 style="margin:-12px 0 0 -25px;position:absolute;font-size:16pt;" class="color-text2 left">Foil Color:</h2>
										<select class="foil" name="foil-color3">
											<option value="None">SELECT ONE</option>
											<option value="gold">GOLD</option>
											<option value="silver">SILVER</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					
					
					<div id="duplex-color-tab">
						<center><img style="margin-top:100px;" id="image" src="images/color-not-available.png" /></center>
						
						<div id="duplex-color-tab-hidden" class="deactivated">
							<?php
								echo "<script>$(document).ready(function(){";
									if($pback == "Crest 1 ply pearl" || $pback == "Crest 2 ply pearl"){
										echo "$( '#paper2-color' ).addClass( 'crest', -1000);";
									}
									else if($pback == "Lettra 1 ply pearl" || $pback == "Lettra 2 ply pearl"){
										echo "$( '#paper2-color' ).addClass( 'pearl', -1000);";
									}
									else if($pback == "CP 1 ply dark grey"){
										echo "$( '#paper2-color' ).addClass( 'd-gray', -1000);";
									}
									else if($pback == "CP 1 ply real grey"){
										echo "$( '#paper2-color' ).addClass( 'r-gray', -1000);";
									}
									else if($pback == "Arturo 1 ply stone"){
										echo "$( '#paper2-color' ).addClass( 'stone', -1000);";
									}
									else if($pback == "Kraft 1 ply"){
										echo "$( '#paper2-color' ).addClass( 'kraft', -1000);";
									}
									else if($pback == "CP 1 ply scarlet"){
										echo "$( '#paper2-color' ).addClass( 'scarlet', -1000);";
									}
									else if($pback == "Arturo 1 ply rosa"){
										echo "$( '#paper2-color' ).addClass( 'rosa', -1000);";
									}
									else if($pback == "CP 1 ply navy"){
										echo "$( '#paper2-color' ).addClass( 'navy', -1000);";
									}
									else if($pback == "CP 1 ply mint"){
										echo "$( '#paper2-color' ).addClass( 'mint', -1000);";
									}
								echo "});</script>"
							?>
						
							<h2 class="color-paper">
								PAPER SELECTED
								<br/>IN STEP NO.1
								<img class="arrow size-arrow" src="images/arrow.png" />
								
								<input type="text" style="display:none;" name="radios">
								<label for="radio1"  id="paper-title1">
									<div id="paper2-color" class="items items2" >
										<h2 class="item-text-box"><?php echo $pback;?></h2>
									</div>
								</label>
							</h2>
							<br/>
							<div class="title">
								<p id="title" style="text-align:left;font-size:28pt;">NUMBER OF INK COLORS:</p>
							</div>
							
							<div style="margin-top:-50px;margin-left:30px;" class="">
								<div>
									<div  class="col span_1_of_10">
										<div  class="col span_1_of_2">
											<div id="radioSelect4" class="radioBtn">
												<div id="radio4" class="radioBtnInside deactivated">
													
												</div>
											</div>
										</div>
										<div  class="col span_1_of_2">
											<h2 class="color-text right">0</h2>
										</div>
									</div>
									<div  class="col span_1_of_10">
										
									</div>
									<div  class="col span_1_of_10">
										<div  class="col span_1_of_2">
											<div id="radioSelect5" class="radioBtn">
												<div id="radio5" class="radioBtnInside activated">
													
												</div>
											</div>
										</div>
										<div  class="col span_1_of_2">
											<h2 class="color-text right">1</h2>
										</div>
									</div>
									<div  class="col span_1_of_10">
										
									</div>
									<div  class="col span_1_of_10">
										<div  class="col span_1_of_2">
											<div id="radioSelect6" class="radioBtn">
												<div id="radio6" class="radioBtnInside deactivated">
													
												</div>
											</div>
										</div>
										<div  class="col span_1_of_2">
											<h2 class="color-text right">2</h2>
										</div>
									</div>
									<div  class="col span_1_of_10">
										
									</div>
									<div  class="col span_1_of_10">
										<div  class="col span_1_of_2">
											<div id="radioSelect7" class="radioBtn">
												<div id="radio7" class="radioBtnInside deactivated">
													
												</div>
											</div>
										</div>
										<div class="col span_1_of_2">
											<h2 class="color-text right">3</h2>
										</div>
									</div>
								</div>
							</div>
							<!-- TABS FOR COLOR NUMBER -->
							<!-- FOR 1 COLOR -->
							<div id="colors4" class="section group activated">
								<div class="section group">
									<img class="arrow" src="images/arrow.png" /><p class="color-desc">COLOR NO.1</p>
									<div class="color-grid">
										<div class="col span_4_of_12">
											<div  class="col span_1_of_5">
												<div id="typeSelect7" class="radioBtn">
													<div id="type7" class="radioBtnInside activated">
														
													</div>
												</div>
											</div>
											<div  class="col span_4_of_5">
												<h2 class="color-text2 left">Letterpress</h2>
											</div>
										</div>
										<div class="col span_4_of_12">
											<div  class="col span_1_of_5">
												<div id="typeSelect8" class="radioBtn">
													<div id="type8" class="radioBtnInside deactivated">
														
													</div>
												</div>
											</div>
											<div  class="col span_4_of_5">
												<h2 class="color-text2 left">Foil</h2>
											</div>
										</div>
										
										<div id="letterpress4" class="activated">
											<h2 style="margin:50px 0 0 -25px;position:absolute;font-size:16pt;" class="color-text2 left">Pantone(PMS)Number:</h2>
											<input class="letterpress" type="text" name="letterpress-color4" />
										</div>
										
										<div id="foil4" class="section group deactivated">
											<h2 style="margin:-12px 0 0 -25px;position:absolute;font-size:16pt;" class="color-text2 left">Foil Color:</h2>
											<select class="foil" name="foil-color4">
												<option value="None">SELECT ONE</option>
												<option value="gold">GOLD</option>
												<option value="silver">SILVER</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							
							<!-- FOR 2 COLOR -->
							<div id="colors5" class="section group color-content deactivated">
								<div class="section group">
									<div class="section group"><div id="line2"></div></div>
									<img class="arrow" src="images/arrow.png" /><p class="color-desc">COLOR NO.2</p>
									<div class="color-grid">
										<div class="col span_4_of_12">
											<div  class="col span_1_of_5">
												<div id="typeSelect9" class="radioBtn">
													<div id="type9" class="radioBtnInside activated">
														
													</div>
												</div>
											</div>
											<div  class="col span_4_of_5">
												<h2 class="color-text2 left">Letterpress</h2>
											</div>
										</div>
										<div class="col span_4_of_12">
											<div  class="col span_1_of_5">
												<div id="typeSelect10" class="radioBtn">
													<div id="type10" class="radioBtnInside deactivated">
														
													</div>
												</div>
											</div>
											<div  class="col span_4_of_5">
												<h2 class="color-text2 left">Foil</h2>
											</div>
										</div>
										
										<div id="letterpress5" class="activated">
											<h2 style="margin:50px 0 0 -25px;position:absolute;font-size:16pt;" class="color-text2 left">Pantone(PMS)Number:</h2>
											<input class="letterpress" type="text" name="letterpress-color5" />
										</div>
										
										<div id="foil5" class="section group deactivated">
											<h2 style="margin:-12px 0 0 -25px;position:absolute;font-size:16pt;" class="color-text2 left">Foil Color:</h2>
											<select class="foil" name="foil-color5">
												<option value="None">SELECT ONE</option>
												<option value="gold">GOLD</option>
												<option value="silver">SILVER</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							
							<!-- FOR 3 COLOR -->
							<div id="colors6" class="section group color-content deactivated">
								<div class="section group">
									<div class="section group"><div id="line2"></div></div>
									<img class="arrow" src="images/arrow.png" /><p class="color-desc">COLOR NO.3</p>
									<div class="color-grid">
										<div class="col span_4_of_12">
											<div  class="col span_1_of_5">
												<div id="typeSelect11" class="radioBtn">
													<div id="type11" class="radioBtnInside activated">
														
													</div>
												</div>
											</div>
											<div  class="col span_4_of_5">
												<h2 class="color-text2 left">Letterpress</h2>
											</div>
										</div>
										<div class="col span_4_of_12">
											<div  class="col span_1_of_5">
												<div id="typeSelect12" class="radioBtn">
													<div id="type12" class="radioBtnInside deactivated">
														
													</div>
												</div>
											</div>
											<div  class="col span_4_of_5">
												<h2 class="color-text2 left">Foil</h2>
											</div>
										</div>
										
										<div id="letterpress6" class="activated">
											<h2 style="margin:50px 0 0 -25px;position:absolute;font-size:16pt;" class="color-text2 left">Pantone(PMS)Number:</h2>
											<input class="letterpress" type="text" name="letterpress-color6" />
										</div>
										
										<div id="foil6" class="section group deactivated">
											<h2 style="margin:-12px 0 0 -25px;position:absolute;font-size:16pt;" class="color-text2 left">Foil Color:</h2>
											<select class="foil" name="foil-color6">
												<option value="None">SELECT ONE</option>
												<option value="gold">GOLD</option>
												<option value="silver">SILVER</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br/><br/>
				<div class="section group">
					<br/><br/>
					<div class="content-grid">
					<a type="button" style="display:absolute;margin-top:20px;cursor:pointer;" href="quantity.php"><img src="images/prev-btn.png"></a>
					<input id="size-submit" type="submit" value="" />
					</div>
				</div>
			</form>
			<?php include 'library/footer.php';?>
		</div>
	</body>
</html>