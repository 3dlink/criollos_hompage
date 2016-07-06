<p>
  You have received a new message from your website contact form.
</p>
<p>
  Here are the details:
</p>
<ul>
  <li>Nombre: <strong>{{ $contact['name'] }}</strong></li>
  <li>Email: <strong>{{ $contact['email'] }}</strong></li>
  <li>Motivo: <strong>{{ $contact['motivation']}}</strong></li>
  <li>Mensaje: {{ $contact['message'] }}</li>
</ul>
<hr>