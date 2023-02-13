<!DOCTYPE html>
<html lang="en">
<head>
  <title>Enregistrement paiements</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-weight: bold;font-size:30px"  href="{{url('/')}}">GestionPaie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="btn btn-danger btn-lg" href="{{url('/')}}">Retour</a>
        </div>
</nav>
<div class="container mt-3">
  <h2>Fiche paiement</h2>
  <form id="frm" action="add" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-3">
        <label>Selectionnez Un contrat</label>
        <select class="form-control" name="contrat" id="contrat">
            @foreach($contrat as $contrats)
            <option value="{{ $contrats->contrat_id}}">Contrat de {{ $contrats->nom }} au prix de {{$contrats->cout_total}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
      <label for="montant">Définissez un montant final</label>
      <input type="number" class="form-control" step=".01" id="montant"  name="mont">
    </div>
    <div class="mb-3">
      <label for="datte">Donner la date</label>
      <input type="date" class="form-control"  id="datte"  name="dates">
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer sans Ajax</button>
    <button type="submit" class="btn btn-primary" name="submit" onclick="clique()">Enregistrer Avec Ajax</button>
  </form>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
    function clique(){
      jQuery('#frm').submit(function(e){
      e.preventDefault();
      jQuery.ajax({
        url:"{{url('add')}}",
        data:jQuery('#frm').serialize(),
        type:'post',
        success:function(result){
          console.log(result);
          alert("Donnée enregistrer avec succès")
        }
      })
    });
    }
  </script>
</div>

</body>
</html>
