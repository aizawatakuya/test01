<p>front</p>

<?php
$url = 'localhost/api/api.php';
$request = 'PUT';
$headers = ['Content-Type: application/json-patch'];
$data = ['pageid' => '1'];

$options = [
  CURLOPT_URL => $url, 
  CURLOPT_CUSTOMREQUEST => $request,
  CURLOPT_HTTPHEADER => $headers,
  CURLOPT_POSTFIELDS => http_build_query($data, '', '&', PHP_QUERY_RFC3986),
  CURLOPT_RETURNTRANSFER => 1
];

$ch = curl_init();
curl_setopt_array($ch, $options);
$response = curl_exec($ch);
curl_close($ch);

var_dump($response);