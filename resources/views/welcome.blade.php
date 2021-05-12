@extends('layouts.app')

@section('content')
<div class="container">   
     @if(isset($errors) && count($errors)>0)
      <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
        {{$erro}}<br>
        @endforeach
      </div>
     @endif
   
    <form action="{{url('esocia')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
          </div>
          <div class="form-group col-md-6">
            <label>Nome completo</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="João maria" >
          </div>
        </div>
        <div class="form-group">
          <label >Contato</label>
          <input type="number" class="form-control" id="celular" name="celular" placeholder="apenas numeros" >
        </div>
        <div class="form-group">
          <label>Deixe sua mensagem</label>
          <textarea class="form-control"  name="mensagem" id="mensagem" placeholder="lorem impasdnfdfn" ></textarea>
        </div>
        <div class="form-group">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>

</div>
@endsection


