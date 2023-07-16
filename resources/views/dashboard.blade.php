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
        <div class="mx-1 row text-white pt-2 pb-2 border border-secondary-subtle border-start-0 border-end-0">
            <div class="col-1">
                #
            </div>
            <div class="col-8 text-left">
                Nome
            </div>
            <div class="col-1">
                Lido
            </div>
            <div class="col-1">
                Editar
            </div>
            <div class="col-1">
                Excluir
            </div>
        </div>

        <ul class="list-group mt-3">
            @foreach ($tasks as $index => $task)
            <div class="list-group-item">
                <div class="row">
                    <div class="col-1">
                        {{$index + 1}}
                    </div>
                    <div class="col-8 text-left">
                        {{ $task->name }}
                    </div>
                    <div class="col-1">
                        <input class="checkbox" type="checkbox" id="{{$task->id}}"
                        @if ($task->task_done)
                            checked
                        @endif>

                    </div>
                    <div class="col-1">
                        <form action="{{route('task.update', $task->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <a href="{{route('task.edit', $task->id)}}" type="submit" class="btn p-0">
                                <img width="20" height="20" src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/external-edit-interface-kiranshastry-lineal-kiranshastry-1.png" alt="external-edit-interface-kiranshastry-lineal-kiranshastry-1"/>
                            </a>
                        </form>
                    </div>
                    <div class="col-1">
                        <form action="{{route('task.destroy', $task->id)}}" method="post">
                            @csrf
                            @method('DELETE')
        
                            <button type="submit" class="btn-close" aria-label="close"></button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </ul>
    </div>

    <script>
        let checkboxes = document.getElementsByClassName('checkbox');

        for (let checkbox of checkboxes) {
            checkbox.addEventListener('click', function() {
                fetch(`/api/toggle/${this.id}`, {
                    method: 'post'
                });
            });
        }
    </script>
</x-app-layout>
