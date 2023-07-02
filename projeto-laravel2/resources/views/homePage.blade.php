@extends('templates.template')

@section('content')
    <h1 class="text-center mt-[60px] bg-dark text-red-800">Crud com PHP</h1>

    <div class="text-center">
        <a href="{{url('tasks/create')}}">
        <button class="btn btn-success mt-5"> Cadastrar</button>
        </a>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-9">
                @csrf
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">Tarefas</th>
                            <th scope="col">Título</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edição</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($taskData as $taskDatas)
                        <tr>
                            <th scope="row">{{$taskDatas->id}}</th>
                            <td>{{$taskDatas->title}}</td>
                            <td>{{$taskDatas->status}}</td>
                            <td>
                            <a href="{{ url('tasks/' . $taskDatas->id) }}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                                <a href="{{ url('tasks/' . $taskDatas->id . '/edit')}}">
                                    <button class="btn btn-primary">Editar</button>
                                </a>
                                <form action="{{ url('tasks/' . $taskDatas->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="return confirmDelete()">Excluir</button>
                                </form>
                            </td>
                            <script>
                                function confirmDelete() {
                                    return confirm('Tem certeza que deseja excluir?');
                                }
                            </script>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="mt-[40px] text-center">
                {{$taskData->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
