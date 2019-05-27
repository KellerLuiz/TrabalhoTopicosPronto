@if(Auth::check()){
        <a href="/atividades/create">
<button type="button" name="" value="" style="

font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
        color: #000000;
        padding: 50px 100px;
        background: -moz-linear-gradient(
                top,
                #ff0000 0%,
                #ff0000);
        background: -webkit-gradient(
                linear, left top, left bottom,
                from(#00ffff),
                to(#00ffff));
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 0px solid #000000;
        -moz-box-shadow:
                0px 1px 3px rgba(000,000,000,0),
                inset 0px 0px 10px rgba(087,087,087,0);
        -webkit-box-shadow:
                0px 1px 3px rgba(000,000,000,0),
                inset 0px 0px 10px rgba(087,087,087,0);
        box-shadow:
                0px 1px 3px rgba(000,000,000,0),
                inset 0px 0px 10px rgba(087,087,087,0);
        text-shadow:
                0px -1px 0px rgba(000,000,000,0.4),
                0px 1px 0px rgba(255,255,255,0.3);
">Criar Atividade</button></a>
@else
<h1>Necessario logar para criar um novo cadastro</h1>
@endif

<h1>Lista de Atividades cadastradas</h1>
<hr>
@foreach($atividades as $atividade)
	<h3>{{\Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')  }}</h3>
	<p><a href="/atividades/{{$atividade->id}}">{{$atividade->title}}</a></p>
	<p>{{$atividade->description}}</p>
	<br>
@endforeach


