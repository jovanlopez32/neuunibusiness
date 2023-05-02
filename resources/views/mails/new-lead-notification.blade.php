<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Lead</title>
</head>
<body>

    <h2>Tienes un nuevo lead.</h2>
    <p>{{ $business->name }} contesto el formulario de neuuni business, sus datos son los siguientes:</p>
    <ul>
        <li>Nombre: {{$business->name}}</li>
        <li>Cargo/Puesto: {{$business->ocupation}}</li>
        <li>Correo Electronico: {{$business->email}}</li>
        <li>Celular: {{$business->cel}}</li>
        <li>Telefono: {{$business->tel}}</li>
        <li>Empresa: {{$business->business}}</li>
        <li>Interes: {{$business->interes}}</li>
    </ul>

</body>
</html>
