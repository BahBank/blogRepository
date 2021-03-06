
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
            <form action="{{ url('add-categorie') }}" method="post">

                @csrf()
                <div class="form-group">
                    <label for="">Categorie</label>
                    <input type="text" name="titre" class="form-control">
                    <span class="text-danger">{{ ($errors->has('titre')) ? $errors->first('titre') : '' }}</span>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    <span class="text-danger">{{ ($errors->has('description'))? $errors->first('description') : '' }}</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>