<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Page Test</title>
    </head>
    <body >
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-weight: bold;font-size:30px"  href="{{url('/')}}">GestionPaie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        </nav>
        <div>
            <h1 style="text-align: center;margin-top: 20px;font-weight:bold">Gestion de Location d'imprimantes</h1>
            <img src="{{asset('img/back.jpg')}}" style="background-size:cover;background-attachment:fixed;width:100%" alt="Rien ne sort">
        </div>
        <div style="display:flex;justify-content:center;align-items:center">
            <!--button class="btn btn-primary  " href="{{url('/paiement')}}">Faire un paiement</button-->
            <a class="btn btn-primary btn-lg" href="{{url('/paiement')}}">Faire un paiement</a>
        </div>
    </body>
</html>

