<h1>Formulario cadastro de mensagens</h1>
<hr>
<form action="/mensagens" method="post">
    {{csrf_field()}}
    Título:          <input type="text" name="titulo"> <br>
    Descrição:       <input type="text" name="texto"> <br>
    Autor:           <input type="text" name="autor"> <br>
    <input type="submit" value="Cadastrar">
    </form>