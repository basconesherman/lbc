<!DOCTYPE html>
<?php
require('auth.php');
?>
<?php
	include '../connect.php';
	$sql = "SELECT id FROM tblpreorder ORDER BY id DESC LIMIT 1";
	$resulta = mysql_query($sql);
	while($row = mysql_fetch_array($resulta)){
		$id = $row['id'];
	}
	echo "<script>alert('".$id."')</script>";
	$result = mysql_query("SELECT * FROM tblpreorder WHERE id='$id'");
	while($row = mysql_fetch_array($result)){
		$pfront = $row['paperfront'];
		$pback = $row['paperback'];
		$size = $row['size'];
		$quantity = $row['quantity'];
		$fcolor1 = $row['frontcolor1'];
		$fcolor2 = $row['frontcolor2'];
		$fcolor3 = $row['frontcolor3'];
		$bcolor1 = $row['backcolor1'];
		$bcolor2 = $row['backcolor2'];
		$bcolor3 = $row['backcolor3'];
		$rounding = $row['rounding'];
		$diecutting = $row['diecutting'];
		$cutout = $row['cutout'];
		$painting = $row['edgepainting'];
		$gliding = $row['edgegliding'];
		
		/*LOGIC FOR SIZE*/
		if($size == "standard"){$size = "3.5 inches x 2 inches";}
		else if($size == "square"){$size = "2.5 inches x 2.5 inches";}
		else{$size = "1.5 inches x 3.5 inches";}
		
	}
?>
<html>
	<div id="top-page"></div>
	<head>
		<title>Pricing & Ordering | Letterpress Business Cards</title>
		<?php include 'library/imports1.php';?>
		<link type="text/css" rel="stylesheet" href="css/pricing.css"/>
		<link type="text/css" rel="stylesheet" href="css/2cols.css"/>
		
		<script>
			function CheckForSession() {
					var str="chksession=true";
					jQuery.ajax({
							type: "POST",
							url: "check_session.php",
							data: str,
							cache: false,
							success: function(res){
								if(res == "1") {
									alert("Please sign in to finish ordering process.");
								}
							}
					});
			}
		</script>
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
						<li><img src="images/pricing-4.png"></li>
						<li><img src="images/pricing-5.png"></li>
						<li><img src="images/pricing-6-active.png" height="64px"></li>
						<li id="total"></li>
					</ul>
				</div>
			</div>
			
				<div class="content-grid">
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
					<br/><br/>
					<input type="radio" id="single" class="options" name="paper" value="single-stock" checked>
					<label class="paper" for="single">
						<div>
							<h2 class="text-option">BUSINESS CARD ORDER SUMMARY</h2>
						</div>
					</label>
					
					<div class="section group">
						<div id="upload-left" class="col span_1_of_2">
							<h2 class="color-paper3" style="margin-left:30px;">
								PAPER SELECTION
								<br/>
								<br/>
								<img class="arrow size-arrow2" src="images/arrow.png" />
								
								<input type="text" style="display:none;" name="radios">
								<label for="radio1" id="paper-title2">
									<div id="paper1-color" class="items items2" >
										<h2 class="item-text-box"><?php echo $pfront;?></h2>
									</div>
								</label>
								
								<input type="text" style="display:none;" name="radios">
								<label for="radio1" id="paper-title3">
									<div id="paper1-color" class="items items2" >
										<h2 class="item-text-box"><?php echo $pback;?></h2>
									</div>
								</label>
							</h2>
							<br/>
							<h2 class="color-paper3" style="margin-left:30px;">
								CARD SIZE: <?php echo $size;?>
							</h2>
							
							<h2 class="color-paper3" style="margin-left:30px;">
								QUANTITY: <?php echo $quantity;?>
							</h2>
							
							<h2 class="color-paper3" style="margin-left:30px;">
								COLOR 1 (FRONT | BACK): <?php echo $fcolor1." | ".$bcolor1;?><br/><br/>
								COLOR 2 (FRONT | BACK): <?php echo $fcolor2." | ".$bcolor2;?><br/><br/>
								COLOR 3 (FRONT | BACK): <?php echo $fcolor3." | ".$bcolor3;?>
							</h2>
							
							<h2 class="color-paper3" style="margin-left:30px;">
								FRILLS: Corner Rounding (<?php echo $rounding;?>)
							</h2>
							
							<h2 class="color-paper3" style="margin-left:96px;">
								Die Cutting (<?php echo $diecutting;?>)
							</h2>
							
							<h2 class="color-paper3" style="margin-left:96px;">
								Cut Out (<?php echo $cutout;?>)
							</h2>
							
							<h2 class="color-paper3" style="margin-left:96px;">
								Edge Painting (<?php echo $painting;?>)
							</h2>
							
							<h2 class="color-paper3" style="margin-left:96px;">
								Edge Gliding (<?php echo $gliding;?>)
							</h2>
							
							<a id="edit" href="index.php"><img src="images/edit-button.png"></a>
						</div>
						
						<div id="upload-right" class="col span_1_of_2">
							<img id="preview-image" src="images/preview.png" alt="Preview"/>
							<div id="upload-file-container" class="upload">
							  <strong>Upload Design:</strong> <input id="attach" type="file" name="photo" />
							</div>
						</div>
					</div>
					<div class="section group"><div id="line3"></div></div>
					
					<div class="section group">
						<div style="margin-top:-50px;" class="col span_1_of_2">
							<p class="upload-text" style="margin-left:40px;">NEED OTHER STATIONERY / LETTERHEAD?</p>
							<select class="upload-drop" name="letterheads/cards">
								<option value="None">SELECT ONE</option>
								<option value="gold">NOTECARDS(folded)</option>
							</select>
						</div>
						
						<div style="margin-top:-50px;" class="col span_1_of_2">
							<p class="upload-text">READY TO PLACE YOUR ORDER?</p>
							<p style="font-family:'MrEavesSanOTBook';font-size:12pt;margin-top:-30px;">TO PLACE YOUR ORDER, EITHER LOG IN OR CREATE A NEW ACCOUNT</p>
							<a id="login-up" class="fr current upload-btns" href="#top-page" onclick="return beebole.scrollTo(this)"></a>
							<a id="create-up" href="#login-form-page" class="fancybox upload-btns" ></a>
						</div>
					</div>
					
					<br/><br/><br/><br/><br/>
					<a style="display:absolute;margin-top:20px;" href="extras.php"><img src="images/prev-btn.png"></a>
					<!--<input id="size-submit" type="submit" value="" />--><br/>
				</div>
			<?php include 'library/footer.php';?>
		</div>
		
		<script>
		(function(){
			window.beebole = {
				getPos: function( elm ){
					var x = 0, y = 0;
					while( elm != null ) {
						x += elm.offsetLeft;
						y += elm.offsetTop;
						elm = elm.offsetParent ;
					}
					return {x:x, y:y};
				},
				damper:function(rfnAction, rfnDone, duration){
					var interval,
						startTime = new Date().getTime();

					interval = setInterval( function(){
						var pos, 
							t,
							now = new Date().getTime();

						t = now - startTime;
						if(t >= duration){
							clearInterval(interval);
							rfnDone.call(beebole);
						}else{
							t = 2 * t / duration;
							if (t < 1) {
								pos = 0.5*t*t*t*t;
							}else{
								t -= 2;
								pos = -0.5 * (t*t*t*t - 2);
							}                       
							rfnAction.call(beebole, pos);
						}
					}, 15 );
				},
				scrollTo: function( a ){
					try{
						var endName = a.href.split('#')[1],
							endElm = document.getElementById(endName),
							start = isNaN(window.pageYOffset) ? 
								document.documentElement.scrollTop :
								window.pageYOffset,
							end = beebole.getPos(endElm).y,
							length = beebole.getPos(endElm).y - start;

						this.damper(function(pos){
							//when moving
							window.scrollTo(0, start + length * pos);
						}, function(){
							//when done
							window.location.hash = endName;
						},
						//duration
						Math.max( Math.abs( Math.round(length / 3) ), 1200));
						$("#login").slideToggle("fast");
				$("#hidden-login").slideToggle("fast");
						return false;
					}catch(e){
						return true;
					}
				}
			};
		})();

		</script>
	</body>
</html>