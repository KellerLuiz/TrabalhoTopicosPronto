<h1>Excluir registro atividade</h1>
<hr>
<form action="/atividades/{{$atividade -> id}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <p>Você realmente deseja excluir o registro= {{ $atividade -> id }}, titulo: {{ $atividade -> title }},  </p>
    <input  type="submit" value="Excluir" >
</form>