@extends('templates.template')

@section('content')
    <h1 class="text-center mt-[60px] bg-dark text-red-800">Cadastrar Tarefa</h1> 

    <div class="text-center">
        <a href="{{url('tasks/')}}">
        <button class="btn btn-success mt-5 mb-5"> Voltar</button>
        </a>
    </div>

    <div class="text-white text-center justify-center d-flex align-items-center justify-content-center">
    <form action="{{url('tasks')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Título da tarefa</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrição da tarefa</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status da tarefa</label>
            <select class="form-select" id="status" name="status" required>
                <option value="" selected></option>
                <option value="concluída">concluída</option>
                <option value="não concluída">não concluída</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Tarefa</button>
    </form>
</div>



@endsection
