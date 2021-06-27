<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Desafio PHP - LARAVEL - VUE</title>


</head>

<body class="bg-violet">
    <div class="flex-center position-ref full-height" id="app">
        <div class="container p-2">
            <submit-value></submit-value>
            <card-account>
            </card-account>

            <div class="row mt-2 mb-2">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <ul class="list-group mb-1">
                        <li class="list-group-item bg-american-river d-flex justify-content-between align-items-center">
                            <h5 class="align-self-center">Operação</h5>
                            <h5 class="align-self-center">Valor</h5>
                            <h5 class="align-self-center">Data Operação</h5>
                            <h5 class="align-self-center">Visual</h5>
                        </li>
                    </ul>

                    <list-item-movimentation>
                    </list-item-movimentation>



                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
