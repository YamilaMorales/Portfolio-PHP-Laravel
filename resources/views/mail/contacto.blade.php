@component('mail::message')
#Hola Yamila,
<br>
<p>Has recibido un nuevo mensaje desde el formulario de contacto en {{ config('app.name') }}</p> <br>
<p>De: {{ $textName }}</p> <br>
<p>Motivo del mensaje : {{ $textSubject }}</p> <br>
<p>Mensaje: {{ $textMessege }}</p>

@endcomponent