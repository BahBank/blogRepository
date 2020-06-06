
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
            <h1><a href="#">{{ $categorie->titre }}</a></h1>
            <p>
                {{ $categorie->description }}
            </p>
        </div>
    </div>
</div>