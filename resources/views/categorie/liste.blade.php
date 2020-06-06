
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(Session::has('succes'))
                <p class="alert alert-success">{{ Session::get('succes') }}</p>                
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @foreach($categories as $categorie)
                <div>
                    <h1><a href="{{ url('categorie', $categorie->id) }}">{{ $categorie->titre }}</a></h1>
                    <p>
                        {{ Str::limit($categorie->description, 300) }}
                    </p>
                    <p>
                        <a href="{{url('edit-categorie', $categorie->id) }}">Modifier</a>
                        <a href="{{url('delete-categorie', $categorie->id) }}">Supprimer</a>
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</div>
