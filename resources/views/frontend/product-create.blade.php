
<x-app-web-layout>


    <x-slot:title>
        Product Create
    </x-slot>

   <div class="container">
    <form action="{{url('products/create')}}" method="POST">
        @csrf

        <div class="row justify-content-center" >
            <div class="col-md-6">

                @if(session('status'))
                <div class="alert alert-success ">
                    {{session('status')}}
                </div>
                @endif

                {{-- @if($errors->any())
                <div>
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error )
                            <li>
                                {{$error}}

                            </li>
                        @endforeach

                    </ul>
                </div>
                @endif --}}

                <div class="mb-3">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}"/>
                    @error('name') <span class="text-danger"> {{$message}}  @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{old('description')}}"/>
                    @error('description') <span class="text-danger">  {{$message}}  @enderror

                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{old('price')}}"/>
                    @error('price') <span class="text-danger">  {{$message}}  @enderror

                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="stock">Product Stock</label>
                    <input type="text" name="stock" id="stock" class="form-control" value="{{old('stock')}}"/>
                    @error('stock') <span class="text-danger">  {{$message}}  @enderror

                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
   </form>
   </div>

</x-app-web-layout>

