<x-app-layout>
    <x-slot name='header'></x-slot>
    <form action="{{route('task.update', $task->id)}}" name="name" method="POST">
        @csrf
        @method('PUT')
        <div class="container mt-5">
            <div class="row">
                <label for="name" class=" mb-4">Editando a série {{$task->name}}:</label>
                <input type="text" autofocus id="name" name="name" class="form-control">
            </div>
            <button type="submit" class="mt-4 btn btn-outline-light btn-sm">Salvar</button>
        </div>
    </form>
</x-app-layout>