<p>front 1</p>

<?php
$myPath = __FILE__;                            //  /home/php/basic/test.php
$request_filename = pathinfo($myPath, PATHINFO_FILENAME );   // $basename => 'test.php'
$url = 'localhost/api/api.php';
$request = 'POST';
$headers = ['Content-Type: application/json'];
$data 	 = ['pageid' => $request_filename,
			'str' => "test"];
$options = [
    CURLOPT_URL => $url, 
    CURLOPT_CUSTOMREQUEST => $request,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_POSTFIELDS => http_build_query($data, '', '&', PHP_QUERY_RFC3986),
    //CURLOPT_POSTFIELDS => http_build_query($data, '&'),
    CURLOPT_RETURNTRANSFER => 1
];
$ch = curl_init();
curl_setopt_array($ch, $options);
$response = curl_exec($ch);
curl_close($ch);