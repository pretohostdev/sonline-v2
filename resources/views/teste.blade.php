<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        input:focus{
            outline: none;
            border: 1px solid red;
        }
        #spinnerInputKwanza{
            display: block;
        }

    </style>
</head>
<body>
    
    <div class="container-fluid">

        {{-- <h2>Sou um teste</h2> --}}
        {{-- <input type="text" class="teste"> --}}

        <div class="d-flex justify-content-center">
            <div class="spinner-border" role="status" id="spinnerInputKwanza">
                <span class="sr-only"></span>
            </div>
        </div>

    </div>



</body>
</html>