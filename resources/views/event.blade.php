<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" type="text/css" href="
    /css/bootstrap.min.css">
	<title>EVENEMENTS</title>
</head>
<body>
	<h1>LES EVENEMENTS</h1>
	<ul class="list-group">
		@foreach($events as  $event)
			<li class="list-group-item list-group-item-success" >{{$event->nom}} : {{$event->date_demarrage}} : {{$event->date_fin}} : {{$event->description}}</li>
		@endforeach

		<a href="{{route('home') }} " style="width: 50px; margin-top: 10px;"><button class="btn btn-primary">ENREGISTRER UN EVENMENT</button></a>
	</ul>
</body>
</html>