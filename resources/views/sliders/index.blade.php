@extends('layout.master')
@section('content')

<div class="card">
<div class="card-header">

    <div class="card-title">Slider List</div>
    <a href="{{route('sliders.create')}}" class="btn btn-sm btn btn-info">Create</a>
</div>
<div class="card-body">

    <table class=" table table-striped">
        <thead>
        <tr>
            <th>ID</th>

            <th>Title</th>

            <th>Subtitle</th>
            <th>price</th>
            <th>Link</th>
            <th>image</th>
            <th>Action</th>
        </tr>
            
        </thead>
        <tbody>
            @foreach ($sliders as $slider)
                
            
            <tr>
              <th scope ="row">{{$loop->iteration}}</th>
              <th>{{$slider->title}}</th>
              <th>{{$slider->subtitle}}</th>
              <th>{{$slider->price}}</th>  
              <th>{{$slider->link}}</th>
              <th>{{$slider->image}}</th>
              <td>
                  <a href="{{route('sliders.edit',$slider->id)}}" class="btn btn-info">Edit</a>
                  <a href="{{route('sliders.show',$slider->id)}}" class="btn btn-info">Show</a>
                  <form action="{{route('sliders.destroy',$slider->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
              </td>

              
            </tr>
@endforeach
        </tbody>
    </table>
</div>




</div>
@endsection