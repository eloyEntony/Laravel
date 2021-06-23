@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Car</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('cars.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>


<form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="InputName">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputDesc">Description</label>
            <textarea type="text" style="height:37px" class="form-control" id="description" placeholder="Description" name="description"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="inputAddress">Photo</label>
        <input type="file" class="form-control" name="images[]" multiple>
    </div>



    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">ADD</button>
    </div>

{{--    <img src="{{asset('storage/files/profile-60d096c9dbb98.jpg')}}" alt=""/>--}}

</form>
@endsection
