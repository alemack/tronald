
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="GET">
        <button type="submit">ref</button>
    </form>
<?php
$curl = curl_init();

curl_setopt_array($curl, [ 
	CURLOPT_URL => "https://api.tronalddump.io/random/quote",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"Accept: application/json"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $a = $response;
   // var_dump($a);
    $b = strlen($response);
   // var_dump($b);
    $pos1 = strpos($response, 'value');
    $posA = $pos1+7;
    $pos = strpos($response, "_embedded", $pos1);
    $posB = $pos-2;
    $posB = $posB - $posA;
    $res = substr($response, $posA, $posB);
    echo $res;

    for ($i=0; $i < $b; $i++) { 
        
    }
}

?>

</body>
</html>



