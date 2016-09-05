<?php
var_dump($_SERVER["REQUEST_METHOD"]);
//var_dump($_GET["pageid"]);
//var_dump($_REQUEST);
//exit;
try
{
    //nullで初期化
    $users = null;
    // データ取得
    $ViewCount=10;
    $users[] = array(
    		'method'=> $_SERVER["REQUEST_METHOD"],
    	    'pageid'=> $_REQUEST["pageid"]
            ,'name' => $ViewCount
            );
    
	switch ($_SERVER["REQUEST_METHOD"]) {
		case 'GET':
			//echo 'GET';
		    //JSON形式で出力する
    		header('Content-Type: application/json');
    		echo json_encode( $users );
   			break;
		case 'POST':
			//echo 'PUT';
			echo "update";
			break;
		case 'PUT':
			//echo 'PUT';
			echo "update";
			break;

	}
	exit;
}
catch (PDOException $e)
{
    //例外処理
    die('Error:' . $e->getMessage());
}


?>