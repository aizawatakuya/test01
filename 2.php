<p>front 2</p>

<?php include "count.php"; ?>
<?php
echo "<hr>";
$myPath = __FILE__;                            //  /home/php/basic/test.php
$request_filename = pathinfo($myPath, PATHINFO_FILENAME );   // $basename => 'test.php'
$url = 'localhost/api/api.php';

$data = 'test1=aaa&test2=bbb';

$ch = curl_init();
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
echo 'RETURN:'.$result;
curl_close($ch);

var_dump($result);