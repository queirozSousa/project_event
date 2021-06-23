@extends('layouts.main')


@section('title','Editar: '. $event->title)


@section('content')

 <div id="event-create-container" class="cok-md-6 offset-md-3">
     <h1>Editando : {{$event->title}}</h1>
     <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" name="image" id="image" class="form-control-file" >
            <img src="/img/events/{{$event->image}}" class="img-preview" alt="{{$event->title}}">
        </div>
       <div class="form-group">
           <label for="title">Evento:</label>
           <input type="text" name="title" id="title" class="form-control" placeholder="Nome do Evento" value="{{$event->title}}">
       </div>
       <div class="form-group">
        <label for="date">Data do Evento:</label>
        <input type="date" name="date" id="date" class="form-control" value="{{$event->date->format('Y-m-d')}}">
    </div>
       <div class="form-group">
          <label for="city">Cidade:</label>
          <input type="text" name="city" id="city" class="form-control" placeholder="Local do Evento" value="{{$event->city}}">
       </div>
       <div class="form-group">
          <label for="private">O evento e privado?</label>
           <select name="private" id="private" class="form-control">
               <option value="0">Nao</option>
               <option value="1" {{$event->private==1 ? "selected='selected'" : ""}}>Sim</option>
           </select>
       </div>
       <div class="form-group">
          <label for="description">Descricao:</label>
          <textarea name="description" id="description" class="form-control" placeholder="A descricao " >{{$event->description}}</textarea>
       </div>
       <div class="form-group">
        <label for="Items">Adicione Itens de Infraestrutura:</label>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Cadeiras" id=""> Cadeiras
        </div>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Palco" id=""> Palco
        </div>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Cerveja Gratis" id=""> Cerveja Gratis
        </div>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Open Food" id=""> Open Food
        </div>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Brindes" id=""> Brindes
        </div>
       </div>
       <input type="submit" class="btn btn-primary" value="Editar Evento">

    
     </form>

 </div>

@endsection