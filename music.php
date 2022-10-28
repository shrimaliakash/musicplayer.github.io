<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://spotify23.p.rapidapi.com/search/?q=%3CREQUIRED%3E&type=multi&offset=0&limit=10&numberOfTopResults=5",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYPEER => false,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: spotify23.p.rapidapi.com",
		"X-RapidAPI-Key: 79665e6b5amsh1acf81918534d9ep1b485fjsnb6fc358eb42c"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$response1 = json_decode($response, true);
	echo "<pre>";print_r($response1);exit;
	// foreach($response1['albums']['items'] as $data) {
	// 	foreach($data['data'] as $key => $new_data) {
	// 		echo $key . "=>".$new_data;
	// 		echo "<br>==========<br>";
	// 	}
	// }
}