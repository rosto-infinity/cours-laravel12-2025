@extends('layouts.website.layout-website')
 
@section('content')
     
        <div class="container mx-auto shadow py-4 px-10  w-5xl rounded-md">
             @if (session()->has('error'))
        <div class="bg-red-500 text-black px-4 py-2">
            {{session('error')}}
        </div>
        @endif
            
            <a href="{{ route('products.index') }}" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Go Back</a>
            <div class="my-3">
                <h1 class="text-center text-3xl font-bold">Create Product</h1>
                <form action="{{ route('products.store') }}" method="POST">
                   @csrf
   <div class="my-2">
    <label for="title" class="text-md font-bold">Product Name</label>
    <input type="text" value="{{ old('title') }}" 
        name="title" id="title"
        class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2"
    >
    @foreach($errors->get('title') as $message)
        <span class="text-red-500 text-sm">
            {{ $message }}
        </span>
    @endforeach
</div>
                    <div class="my-2 ">
    <label for="category" class="text-md font-bold">Category</label>
    <input type="text" 
        value="{{ old('category') }}" 
        name="category"
        class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2"
        id="category">
    @foreach($errors->get('category') as $message)
        <span class="text-red-500 text-sm">
            {{ $message }}
        </span>
    @endforeach
</div>
<div class="my-2 ">
    <label for="price" class="text-md font-bold">Enter your Price</label>
    <input type="text" value="{{ old('price') }}"
        name="price"
        class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2"
        id="price">
    @foreach($errors->get('price') as $message)
        <span class="text-red-500 text-sm">
            {{ $message }}
        </span>
    @endforeach
</div>

                    <button class="px-5 py-1 bg-emerald-500 rounded-md text-black text-lg shadow-md">Create</button>
                </form>
            </div>
        </div>

@endsection
</body>

</html>
