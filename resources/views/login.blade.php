@extends('layouts.main_layout')
@section('content')



    <main class="form-signin w-25 m-auto">
        <form>
            <img class="mb-4 mx-auto" src="{{asset( "assets/imgs/checklist.png")}} " alt="" width="64"
                height="57">
            <h1 class="h3 mb-3 fw-normal">Faça o Login</h1>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Senha</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
            <p class="mt-2">Não tem conta ? <a href="{{route('singin')}}">Criar conta</a>.</p>
            <p class="mt-5 mb-3 text-body-secondary">&copy; Ricardo Xavier</p>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</body>

</html>
@endsection
