<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Contacto</title>
</head>
<body>

<h1>Formulario de Contacto</h1>

<form method="POST" action="{{ route('contacto') }}">
    @csrf
    <div>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="subject">Asunto:</label>
        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required>
        @error('subject')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="message">Mensaje:</label>
        <textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
        @error('message')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit">Enviar</button>
</form>

</body>
</html>