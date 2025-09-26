@extends('layouts.app')


@section('title','Laravel 12')

@push('css')
<style>
   body{
    background-color: #f3f3f3
   }

   

</style>
    
@endpush

@push('css')
<style>
    body{
        color: red
    }
</style>
    
@endpush


    


@section('content')


    
    <div class= "max-w-4xl mx-auto px-4 ">
       <!-- <h1>Bienvenida a la pagina de inicio</h1> -->
        <x-alert2 type="info" class="mb-4">
            <x-slot name="title">
                Título de la alerta
            </x-slot>
            contenido de la  alerta
        </x-alert2>

        <p>hola mundo</p>

    </div>
  
@endsection


