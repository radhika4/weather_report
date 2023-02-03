
<?php					
	if(isset($_POST['btn_submit'])) {
		 $city = $_POST['city'];
		//$url = "https://api.openweathermap.org/data/2.5/weather?APPID=ef6cb58c7a27a57e03768fdf0377e2a6&zip=560015,IN";
		$url = "https://api.openweathermap.org/data/2.5/weather?APPID=ef6cb58c7a27a57e03768fdf0377e2a6&q=".$city."";

		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		$headers = array(
		   "Accept: application/json",
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		//for debug only!
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

		$resp = curl_exec($curl);
		curl_close($curl);
		echo "<h3>Weather Report</h3>";
		var_dump($resp);
	}
?>
										?> 
<form method="post" action="#" id="new-form" 
              enctype="multipart/form-data">
	<h6>City</h6>
                                                
    <input type="text" name="city"  value="" id="city" placeholder="city..."/>
    <input type="submit" name="btn_submit" value="Submit">                                            
</form>
