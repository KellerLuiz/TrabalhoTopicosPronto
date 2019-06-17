<div align="center">
<h1>Mensagem - sobre:</h1><br>

<p>{{$mensagens->titulo}}</p>
        <p>Ref. Ativ.: {{$mensagens->atividade->id}}</p>
	<p>{{$mensagens->autor}}</p>
	<p>{{$mensagens->titulo}}</p>
	<p>{{$mensagens->texto}}</p>
	<p>{{$mensagens->updated_at}}</p>


	<a href="{{$mensagens->id}}/delete">
<button type="button" name="" value="" style="
        font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
        color: #000000;
        padding: 50px 100px;
        background: -moz-linear-gradient(
                top,
                #00ff00 0%,
                #ff0000);
        background: -webkit-gradient(
                linear, left top, left bottom,
                from(#00ff00),
                to(#00ff00));
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

">Deletar Mensagem</button></a>
<a href="{{$mensagens->id}}/edit">
<button type="button" name="" value="" style="

font-family: Arial, Helvetica, sans-serif;
font-size: 30px;
        color: #000000;
        padding: 50px 100px;
        background: -moz-linear-gradient(
                top,
                #00ff00 0%,
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
">Editar Mensagem</button></a></div>