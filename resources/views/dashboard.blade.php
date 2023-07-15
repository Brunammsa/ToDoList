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
            <div>
                <ol class="list-group list-group-numbered mt-5">
                    @foreach ($tasks as $task)
                    <li class="list-group-item d-flex align-items-center">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-9 text-start d-flex align-items-center">
                                    {{ $task->name }}
                                </div>
                                <div class="form-check col-1 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault"></label>
                                  </div>
                                <div class="col-1 text-end">
                                    <form action="{{route('task.update', $task->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
        
                                        <button type="submit" class="btn">
                                            <img width="20" height="21" src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/external-edit-interface-kiranshastry-lineal-kiranshastry-1.png" alt="external-edit-interface-kiranshastry-lineal-kiranshastry-1"/>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-1 text-end d-flex align-items-center">
                                    <form action="{{route('task.destroy', $task->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
        
                                        <button type="submit" class="btn-close" aria-label="close"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>

                    @endforeach
                </ol>
            </div>
        </div>
    </div>
    

</x-app-layout>
