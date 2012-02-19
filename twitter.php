<?php
	// initialize cURL session
	$curl_handle=curl_init();
	
	// set the URL of the page to download
	curl_setopt($curl_handle,CURLOPT_URL,'https://api.twitter.com/1/users/show.json?screen_name=blithe&include_entities=true');
	
	// set the timeout to 2 seconds
	curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
	
	// Ask cURL to return the contents in a variable instead of simply echoing them to  the browser
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	
	// execute the cURL session and set result as a string
	$result = curl_exec($curl_handle);
	
	// close the cURL session
	curl_close($curl_handle);

	// use php to break up json string into array
	$array = json_decode($result, true);

	
?>

Blithe has <?php echo $array["followers_count"]; ?> followers.