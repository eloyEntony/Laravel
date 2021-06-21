@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Cars</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-dark" href="{{ route('cars.create') }}" title="Add new"> <i class="fas fa-plus-circle"></i>
            </a>
        </div>
    </div>
</div>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <!-- <th scope="col">#</th> -->
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
            <tr>

                <td>{{ $car->name }}</td>
                <td>{{ $car->description }}</td>
                <td>
                    @foreach($car->CarImages as $img)
                    {{$img->name}}
                    @endforeach
                </td>



            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection