<h1>Formulario de atualização da atividade codigo = {{$atividades->id}}</h1>
<hr>
<form action="/atividades/{{$atividades->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    Título:             <input type="text" name="title" value="{{$atividades->title}}"> <br>
    Descrição:          <input type="text" name="description" value="{{$atividades->description}}"> <br>
    Agendado para:      <input type="datetime-local" name="scheduledto" value="{{$atividades->scheduledto}}" > <br>
    <input type="submit" value="Atualizar">
    </form>
    @if ($errors->any())
        <div class="container">
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
        </div>
        </div>
    @endif


    @if (\Session::has('success'))
        <div class="container">
        <div class="alert alert-success">
         {{\Session::get('success')}}
        </div>
        </div>
    @endif
