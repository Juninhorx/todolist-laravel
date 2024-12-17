<div class="container-md d-flex flex-column align-items-center">
    <form action="{{ route('newNoteSubmit') }}" method="post" class="input-group input-group-lg w-75 ">
        @csrf
        <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-solid fa-pen-to-square p-2"
                style="color: #fa1228;"></i></span>
        <input type="text" class="form-control sm" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-lg" placeholder="Digite sua nova tarefa..." name="text_task" required>
        <button type="submit" class="btn btn-danger border border-2 border-danger-subtle">Adicionar Tarefa</button>
    </form>
    @error('text_task')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
