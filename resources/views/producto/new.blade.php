@extends('layouts.menu')

@section('contenido')
    


<div class="row">
     <h1>Nuevo producto</h1>
 </div>

 <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="nombre" name="nombre" type="text" class="validate">
          <label for="icon_prefix">First Name</label>
        </div>

        <div class="input-field col s6">
          <input  type="number" id="precio" name="precio" class="validate">
          <label for="icon_telephone">Precio</label>
        </div>

        
      </div>
      <div class="input-field col s12">
        <textarea id="textarea" name="textarea" class="materialize-textarea"></textarea>
        <label for="textarea1">Textarea</label>
      </div>
      
      </div>
      <div class="file-field input-field">
        <div class="btn">
          <span>File</span>
          <input type="file">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text">
        </div>

</div>

      <button class="btn waves-effect waves-light" type="submit" name="action">Submit

      </button>
    </form>
  </div>
        

 @endsection

