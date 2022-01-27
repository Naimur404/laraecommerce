@extends('layout.master')
@section('content')
    

<div class="card">
    <div class="crad-header">
        <div class="card-title">Update Slider
        </div>
        <a href="{{route('sliders.index') }}" class="btn btn-sm btn btn-info">Index</a>
    </div>
    <div class="card-body">
        <form action="{{route('sliders.update',$slider->id)}}" method="post">
           
            @csrf
         @method('PUT')
            <div class="form-group">
                <label class="col-md-10 control-lebel">Title</label>
                <div class="col-md-8">
                    <input type="text" name="title" value="{{$slider->title}}" placeholder="Title" class="from-control-lg" />

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-10 control-lebel">Subtitle</label>
                <div class="col-md-8">
                    <input type="text" name="subtitle" value="{{$slider->subtitle}}" placeholder="Subtitle" class="from-control-lg" />

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-10 control-lebel">Link</label>
                <div class="col-md-8">
                    <input type="text" name="link" value="{{$slider->link}}" placeholder="Link" class="from-control-lg" />

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-10 control-lebel">Price</label>
                <div class="col-md-8">
                    <input type="number" name="price" value="{{$slider->price}}" placeholder="Price" class="from-control-lg" />

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-10 control-lebel">Image</label>
                <div class="col-md-8">
                    <input type="file" name="image" value="{{$slider->image}}" placeholder="image" class="from-control-lg" />

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-10 control-lebel">Status</label>
                <div class="col-md-8">
                    <input type="text" name="status" value="{{$slider->status}}" placeholder="Status" class="from-control" />
                </div>
            </div>
                    <div class="form-group">
                        <label class="col-md-10 control-lebel"></label>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-info">Submit</button>

                        </div>
                    </div>
                
        </form>
    </div>
</div>
@endsection
