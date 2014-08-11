$(document).ready(function(){
	//Paper Option Script
	var loop = 0;
	var value = 0;
	var textVal;
	var linkVal;
	
	textVal = "Manage all users alongside with their acounts.";
	$("#admin-right-text").text(textVal);
	
	$('#admin-actions').click(function() {
		for(loop = 1; loop <= 6; loop++){
			if($('#radio'+loop).is(':checked')) {
				value = $('input:radio[name=radios]:checked').val();
			}
			if(value == 0){
				textVal = "Manage all users alongside with their acounts.";
				$("#admin-right-text").text(textVal);
				$("a").attr("href", "user.php")
			}
			if(value == 1){
				textVal = "Manage all pending and finalized orders of all clients.";				
				$("#admin-right-text").text(textVal);
				$("a").attr("href", "orders.php")
			}
			else if(value == 2){
				textVal = "Manage calculator and change price of each items.";
				$("#admin-right-text").text(textVal);
				$("a").attr("href", "#")
			}
			else if(value == 3){
				textVal = "Manage your account and change your personal details.";
				$("#admin-right-text").text(textVal);
				$("a").attr("href", "account.php")
			}
			else if(value == 4){
				textVal = "Manage uploading of card design in every client.";
				$("#admin-right-text").text(textVal);
				$("a").attr("href", "upload.php")
			}
			else if(value == 5){
				textVal = "Signed out of the administration page.";
				$("#admin-right-text").text(textVal);
				$("a").attr("href", "../index.php")
			}
		}
	});
});