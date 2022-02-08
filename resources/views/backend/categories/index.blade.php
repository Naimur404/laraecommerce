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
                Categories<a href="{{route('categories.create')}}">Add New</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>TITLE</th>
                            <th>Slug</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                   
                    <tbody>
                        @php $s1=0 @endphp
                        @foreach($categories as $category)
                        <tr>
                            <td>{{++$s1}}</td>
                            <td>{{$category->title}}</td>
                            <td>{{$category->slug}}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    

</x-backend.layouts.master>