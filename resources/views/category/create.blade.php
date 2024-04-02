
<x-app-web-layout>

    <x-slot name="title">
        Add Category
    </x-slot>

<div class="container mt-5" >
    <div class="row">
        <div class="col-md-12">

            @if(session('status'))
              <div class="alert alert-success">{{session('status')}}</div>
            @endif

            <div class="card">
                <div class="hard-header">
                    <h4>Add Category
                        <a href="{{url('categories')}}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{url('/categories/create')}}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="textarea" name="name" class="form-control"  value="{{old('name')}}" placeholder="Enter your Name"/>
                            @error('name')
                            <span class="text-danger">
                                {{$message}}
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control"  rows="3" placeholder="Give us your Description">{{old('description')}}</textarea>
                            @error('description')
                            <span class="text-danger">
                                {{$message}}
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="is_active">Is Active</label>
                            <input type="checkbox" name="is_active" {{old('is_active')== true ? checked:''}}/>
                            @error('is_active')
                            <span class="text-danger">
                                {{$message}}
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end">Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</x-app-web-layout>

