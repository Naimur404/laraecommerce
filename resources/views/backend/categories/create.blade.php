<x-backend.layouts.master>

    <x-slot name="pageTitle"></x-slot>
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Categories<a href="{{route('categories.index')}}">List</a>
            </div>
            
        <div class="card-mb-4">
            <div class="card-header">
                
                <form action="{{route('categories.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-10 control-lebel">Title</label>
                        <div class="col-md-8">
                            <input type="text" name="title" value="" placeholder="Title" class="from-control-lg" />
        
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-10 control-lebel">Subtitle</label>
                        <div class="col-md-8">
                            <input type="text" name="slug" value="" placeholder="Subtitle" class="from-control-lg" />
        
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
        <div class="card-header">

    

</x-backend.layouts.master>