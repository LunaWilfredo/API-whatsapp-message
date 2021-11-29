<?php 

// error_reporting(0);

if(isset($_POST['txt-enviar']) && !empty($_POST['txt-numero'])){
    
$numero=$_POST['txt-numero'];
$ip =$_POST['txt-ip'];

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

echo '<div class="alert alert-success" role="alert">
        Mensaje enviado con Exito
      </div>';
}
// else{
//     echo '<div class="alert alert-danger" role="alert">
//             Mensaje no Enviado
//         </div>';
// }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Mensajes Automaticos</title>
    <!-- Bootdtrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<form action="" method="Post">
    <div class="container-fluid bg-warning vh-100">
        <section>
            <div class="row p-5">
                <h1 class="text-center text-light py-3">Mensaje de WhatsApp</h1>
                <div class="col p-5 bg-light">
                    <div class="mb-2">
                        <label for="txt-numero" class="">Mensaje</label>
                        <textarea name="txt-ip" cols="20" rows="5" class="form-control" placeholder="Ingresar Mensaje"></textarea>
                        <label for="txt-numero" class="">Movil</label>
                        <input type="text" name="txt-numero" value="" placeholder="Añadir el 51" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success" name="txt-enviar">
                        Enviar Mensaje
                    </button>
                </div>
                <div class="col">
                    <img src="https://i.pinimg.com/originals/49/fe/c8/49fec86beb14058b401afddf41d12877.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </section>
    </div>
</form>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>