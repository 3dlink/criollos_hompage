<p>
  Ha recibido un nuevo mensaje de su formulario de contacto.
</p>
<p>
  Aquí estan los detalles: 
</p>
<ul>
  <li>Nombre: <strong>{{ $contact['name'] }}</strong></li>
  <li>Email: <strong>{{ $contact['email'] }}</strong></li>
  <li>Motivo: <strong>{{ $contact['motivation']}}</strong></li>
  <li>Mensaje: {{ $contact['message'] }}</li>
</ul>
<hr>