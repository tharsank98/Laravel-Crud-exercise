
<x-app-web-layout>

    <x-slot name="title">
        categories
    </x-slot>

<div class="container mt-5" >
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
            <div class="alert alert-success">{{session('status')}} </div>
            @endif
            <div class="card">
                <div class="hard-header">
                    <h4>Categories
                        <a href="{{url('categories/create')}}" class="btn btn-primary float-end">Add Category</a>
                    </h4>
                </div>
                <div class="card-body">

                   <table class="table table-bordered table-striped">
                     <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Is Active</th>
                            <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($categories as $category)
                           <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td>
                                @if ($category->is_active)
                                   Active
                                @else
                                   In-Active
                                @endif
                            </td>

                            <td>
                                <a href="{{url('categories/'.$category->id.'/edit')}}" class="btn btn-success mx-2">Edit</a>
                                <a href="{{url('categories/'.$category->id.'/delete')}}" class="btn btn-danger mx-1"  onclick="return confirm('Are You Sure?')">Delete</a>
                            </td>

                           </tr>
                        @endforeach
                     </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-web-layout>

