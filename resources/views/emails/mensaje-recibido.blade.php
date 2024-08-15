<!DOCTYPE html>
<html>
<head>
    <title>Nuevo mensaje de contacto</title>
</head>
<body>

<h1>Nuevo mensaje de contacto</h1>

<p><strong>Nombre:</strong> {{ $contact->nombre }}</p>
<p><strong>Email:</strong> {{ $contact->email }}</p>
<p><strong>Asunto:</strong> {{ $contact->asunto }}</p>
<p><strong>Mensaje:</strong> {{ $contact->mensaje }}</p>

</body>
</html>