@extends('templates.template')

@section('content')
    <h1 class="text-center mt-[60px] bg-dark text-red-800">Visualizar Dados</h1>

  

    <div class="text-center text-white mt-[40px]">
    <p>Tarefa: <label for="text-area">{{$taskData->title}}</label></p>
    <p>Descrição: <label> {{$taskData->description}} </label></p>
    <p>Status: <label>{{$taskData->status}}</p></label>
    <p>Data de início: <label>{{$taskData->createdDate}}</label></p>
</div>

<div class="text-center">
        <a href="{{url('tasks/')}}">
        <button class="btn btn-success mt-5 mb-5"> Voltar</button>
        </a>
    </div>

@endsection
