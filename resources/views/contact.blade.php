@extends('layout')

@section('content')

      <h1>Contenido de contactos</h1>
<body>
    <form action="">
        <input type="text" name="nombre" class="nombre" placeholder="Nombres">
        <input type="text" name="apellido" class="apellido" placeholder="Apellidos">

        <input type="email" name="correo" class="correo" placeholder="Correo">
        <input type="tel" name="telefono" class="telefono" placeholder="Telefono">
        <textarea name="mensaje" id="" class="mensaje" placeholder="Mensaje:"></textarea>

        <button name="enviar" id="boton" class="boton_envio">Enviar</button>
    </form>
</body>
@endsection
