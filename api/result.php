<!DOCTYPE html>
<html>
	<head>
		<title>Practical Algorithm</title>
	</head>
	<body>
		<?php 
            //parameter
			$apikey = 'SFy1BRlIPbrRyuOqmhSgiZetUUnGIMFK';
            $city_name = $_POST['city_name'];

			// API get city data
			$curl_city = curl_init();
			curl_setopt_array($curl_city, array(
				CURLOPT_URL => "http://dataservice.accuweather.com/locations/v1/cities/search/?apikey=".$apikey."&q=".$city_name,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => array(
					// "key: 8d923ad9ac9eb0ff0349a6885122d1f3"
				),
				CURLOPT_RETURNTRANSFER => true,
			));
			$json_city = curl_exec($curl_city);
			curl_close($curl_city);

			//convert json response into php array
			$response_city = json_decode($json_city, TRUE);
			
			// display raw data
            $data_city = $response_city[0];
            $city_key = $data_city['Key'];
            //end of API city

            // API get city weather
			$curl_weather = curl_init();
			curl_setopt_array($curl_weather, array(
				CURLOPT_URL => "http://dataservice.accuweather.com/forecasts/v1/daily/1day/".$city_key."?apikey=".$apikey,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => array(),
				CURLOPT_RETURNTRANSFER => true,
			));
			$json_weather = curl_exec($curl_weather);
			curl_close($curl_weather);

			//convert json response into php array
			$response_weather = json_decode($json_weather, TRUE);
			
			// display raw data
            $data_weather = $response_weather['Headline'];
			
		?>

		<p>City Name : <?php echo $data_city['EnglishName'];?></p>
		<p>Weather Forecasting : <?php echo $data_weather['Text'];?></p>
		<a href="<?php echo $response_weather['DailyForecasts'][0]['Link'];?>" target="_blank">Weather Detail</a>
	</body>
</html>