<h1>Formulario cadastro de mensagens</h1>
<hr>
<form action="/mensagens" method="post">
    {{csrf_field() }}
    Título:          <input type="text" name="titulo"> <br>
    Descrição:       <input type="text" name="texto"> <br>
    Autor:           <input type="text" name="autor"> <br>
    Atividade        <select name='atividade_id'>
                        @foreach($atividades as $atividade)
                            <option value="{{$atividade->id}}">{{$atividade->title}}</option>
                        @endforeach
                     </select><br>
    <input type="submit" value="Cadastrar">
    </form>