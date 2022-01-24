@extends('layout.master')
@section('content')

<div class="card">
<div class="card-header">

    <div class="card-title">Slider List</div>
    <a href="{{('sliders.create')}}" class="btn btn-sm btn btn-info"></a>
</div>
<div class="card-body">

    <table class="table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>price</th>
            <th>image</th>
            <th>Action</th>
        </tr>
            
        </thead>
        <tbody>
            <tr>
                
            </tr>

        </tbody>
    </table>
</div>




</div>
@endsection