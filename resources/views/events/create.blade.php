@extends('layouts.main')


@section('title','Criar um evento')


@section('content')

 <div id="event-create-container" class="cok-md-6 offset-md-3">
     <h1>Crie o seu Evento</h1>
     <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" name="image" id="image" class="form-control-file" >
        </div>
       <div class="form-group">
           <label for="title">Evento:</label>
           <input type="text" name="title" id="title" class="form-control" placeholder="Nome do Evento">
       </div>
       <div class="form-group">
        <label for="date">Data do Evento:</label>
        <input type="date" name="date" id="date" class="form-control" >
    </div>
       <div class="form-group">
          <label for="city">Cidade:</label>
          <input type="text" name="city" id="city" class="form-control" placeholder="Local do Evento">
       </div>
       <div class="form-group">
          <label for="private">O evento e privado?</label>
           <select name="private" id="private" class="form-control">
               <option value="0">Nao</option>
               <option value="1">Sim</option>
           </select>
       </div>
       <div class="form-group">
          <label for="description">Descricao:</label>
          <textarea name="description" id="description" class="form-control" placeholder="A descricao "></textarea>
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
       <input type="submit" class="btn btn-primary" value="Criar Evento">

    
     </form>

 </div>

@endsection