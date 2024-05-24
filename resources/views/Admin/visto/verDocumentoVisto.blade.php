
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documentos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
{{-- <div class="container"> --}}
    <div class="row d-flex justify-content-center" style="background:#363535 ">
            <div class="col-lg-5">
                <div class="card-header rounded-0">
                    <iframe src="{{ url("storage/{$visto->documento}") }}" width="500" height="600px"></iframe>
                </div>
            </div>
        
            <div class="col-lg-5">
                <div class="card-header rounded-0">
                    <iframe src="{{ url("storage/{$visto->documento}") }}" width="500" height="600px"></iframe>
                </div>
            </div>
        {{-- </div> --}}
    </div>
{{-- </div> --}}
    
</body>
</html>


