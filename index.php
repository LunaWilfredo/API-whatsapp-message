<?php 

$numero=$_POST['txt-numero'];
$ip =$_POST['txt-ip'];

if (isset($_POST['txt-numero'])){
$data = [
    'phone' => $numero, // Receivers phone
    'body' => "Un apoyo para encender pc $ip", // Message
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
$token = 'rimfy6bro2o65gqi';
$instanceId = '257534';
$url = 'https://api.chat-api.com/instance'.$instanceId.'/message?token='.$token;
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request
$result = file_get_contents($url, false, $options);

echo 'envio exitoso';
}else{
    echo 'mensaje no enviado';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Mensajes Automaticos</title>
</head>
<body>

<form action="" method="Post">
<label for="txt-numero">IP</label>
    <input type="text"  name="txt-ip" value="10.20">
    <label for="txt-numero">Movil</label>
    <input type="text"  name="txt-numero" value="51">
    <input type="submit" name="txt-enviar" value="Enviar mensaje">
</form>
    
</body>
</html>