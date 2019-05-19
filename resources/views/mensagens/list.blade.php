<h1>Lista de Mensagens cadastradas</h1>
<hr>
@foreach($mensagens as $mensagens)
	<p><a href="/mensagens/{{$mensagens->id}}">{{$mensagens->titulo}}</a></p>
	<p>{{$mensagens->texto}}</p>
	<p>{{$mensagens->autor}}</p>
	<p>{{$mensagens->created_at}}</p>
	<p>{{$mensagens->updated_at}}</p>
	<br>
@endforeach
<a href="/mensagens/create">CRIAR NOVA MENSAGEM</a>