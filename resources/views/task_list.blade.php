<div class="containder-md w-50 mt-3">

    <ul class="list-group list-group-flush w-100 mt-3 p-3">

        @if (!$tasks)
        <div>Você não possui tarefas ainda...</div>
        @else
        @foreach ($tasks as $task)
        <li class="list-group-item mb-2 p-3 d-flex justify-content-between align-items-center">

            <div>
                <i class="fa-solid fa-circle pe-3" style="color: #fa1228;"></i>
                {{ $task['text'] }}
            </div>


            <div>
                <a href="#" class="btn btn-outline-secondary me-1">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a href="#" class="btn btn-outline-danger">
                    <i class="fa-solid fa-trash-can" style="color: #fa1228;"></i>
                </a>
            </div>

        </li>
        @endforeach
        @endif


    </ul>

</div>
