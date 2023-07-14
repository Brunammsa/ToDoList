<x-app-layout>
    <x-slot name="header"></x-slot>

    <form action="{{route('task.store')}}" method="POST">
        @csrf
        <div class="container text-center">
            <div class="form-group row mt-5 justify-content-md-center align-items-center">
                <div class="col col-lg-8">
                    <input class="form-control" type="text" name="name" id="id" placeholder="Qual a sua próxima tarefa?">
                </div>
                <div class="col-md-auto">
                    <button type="submit" class="btn btn-outline-light btn-sm">Criar</button>
                </div>
            </div>
        </div>
    </form>

    <div class="container mt-5">
        <div class="row">
            <div class="d-flex align-items-center p-1 border border-secondary-subtle border-start-0 border-end-0">
                <div class="col-5 d-flex justify-content-start mt-2 ms-3" style="gap: 30px; color:white">
                    <h6>#</h6>
                    <h6>Nome</h6>
                </div>

                <div class="col-5 d-flex justify-content-end mt-2" style="gap: 30px; margin-left: 12em; color:white">
                    <h6>Marcar como lido</h6>
                    <h6>Editar</h6>
                    <h6>Excluir</h6>
                </div>
            </div>
        </div>
    </div>
    
    <ul class="list-group">
        @foreach ($tasks as $task)
            <li class="list-group-item">{{ $task->name }}</li>
        @endforeach
    </ul>
</x-app-layout>
