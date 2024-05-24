<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Livro</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <div class="container-sm w-4/12 mt-4">
        <form action="{{route('livro.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="inome">Nome: </label>
                <input type="text" name="nome" id="iname" placeholder="nome do livro" class=" form-control rounded-md ring-2  opacity-60" value=" {{ old('nome')}}"><br>
            </div>
            <div class="mb-3">
                <label for="iisbn" class="form-label">ISBN: </label>
                <input type="number" name="isbn" id="iisbn" class=" form-control rounded-md ring-2  opacity-60" value=" {{ old('isbn')}}"><br>
            </div>
            <div class="mb-3">
                <label for="ivalor" class="form-label">Valor: </label>
                <input type="number" name="valor" id="ivalor" placeholder="R$ 0,00" class=" form-control rounded-md ring-2  opacity-60" value=" {{ old('valor')}}"><br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
        
        <script>
            $('#ivalor').mask('00.00');
        </script>
    </div>
</body>
</html>