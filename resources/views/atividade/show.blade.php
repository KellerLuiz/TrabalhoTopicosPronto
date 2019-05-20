<h1>Atividade {{$atividade->id}}</h1>
<hr>
<h3><b>ID:</b> {{$atividade->id}}</h3>
<h3><b>Data Evento:</b> {{$atividade->scheduledto}}</h3>
<h3><b>Titulo:</b> {{$atividade->title}}</h3>
<h3><b>Descrição:</b> {{$atividade->description}}</h3>
<h3><b>Criada em:</b> {{$atividade->created_at}}</h3>
<h3><b>Atualizada em:</b> {{$atividade->updated_at}}</h3>



<a href="{{$atividade->id}}/delete">
<button type="button" name="" value="" style="
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        color: #000000;
        padding: 10px 20px;
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

">Deletar atividade</button></a>
<a href="{{$atividade->id}}/edit">
<button type="button" name="" value="" style="

font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        color: #000000;
        padding: 10px 20px;
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
">Editar Atividade</button></a>
