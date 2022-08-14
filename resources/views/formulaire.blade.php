<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="
    /css/bootstrap.min.css">
   
    <title>Ajouter Un EVENEMENT</title>
</head>
<body>
    
    @if(session("success"))
        <div class="alert alert-success" role="alert">{{session('success')}}</div>
    @endif
    
    <form method="post" action="#" class="group-form contaner col-lg-5 " style="position: relative; left: 30%;">
        <h1 style="position: relative; left: 25%;">mon formulaire</h1>
        @csrf
        @if($errors->has('nom'))
            <p class="text-danger">{{$errors->first('nom')}}</p>
        @endif
        <label for="nom">nom de l'évènement</label>
      <input class="form-control <?php echo $errors->has('nom')?'is-invalid':''; ?> " type="text" name="nom" placeholder="NOM" style="margin: 5px 0 5px 0;" value="{{old('nom')}} "> 
      @if($errors->has('date_demarrage'))
            <p class="text-danger">{{$errors->first('date_demarrage')}}</p>
        @endif 
        <label for="date_demarrage">date de démarage l'évènement</label>
      <input class="form-control <?php echo $errors->has('date_demarrage')?'is-invalid':''; ?> " type="text" name="date_demarrage" placeholder="Date de démarrage " style="margin: 5px 0 5px 0;" value="{{old('date_demarrage')}} ">
      @if($errors->has('date_fin'))
            <p class="text-danger">{{$errors->first('date_fin')}}</p>
        @endif 
        <label for="date_fin">date de fin de l'évènement</label>
      <input class="form-control  <?php echo $errors->has('date_fin')?'is-invalid':''; ?>  " type="text" name="date_fin" placeholder="Date de fin " style="margin: 5px 0 5px 0;" value="{{old('date_fin')}} ">
      @if($errors->has('description'))
            <p class="text-danger">{{$errors->first('description')}}</p>
        @endif
        <label for="description">descritption de l'évènement</label>
      <input class="form-control  <?php echo $errors->has('description')?'is-invalid':''; ?>  " type="text" name="description" style="margin: 5px 0 5px 0;" value="{{old('description')}} " placeholder="description" >
      <input class="btn btn-primary  " type="submit" value="ENREGISTRER" style="margin: 5px 0 5px 0; position: relative; left: 37%">
    </form>
    <a  href="{{route('vue') }} " style="margin: 5px 0 5px 0; position: relative; left:30%; top: 10px;"><button class="btn btn-primary">Liste des évenements</button></a>

</body>
</html>