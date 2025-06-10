@extends('layouts.website.layout-website')
 
@section('content')
      @if (session()->has('error'))
        <div class="bg-red-500 text-black px-4 py-2">
            {{session('error')}}
        </div>
        @endif

        <div class="container mx-auto shadow py-4 px-10  w-5xl rounded-md">
            <a href="{{ route('products.index') }}" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Go Back</a>
            <div class="my-3">
                <h1 class="text-center text-3xl font-bold">Create Product</h1>
                <form action="{{ route('products.store') }}" method="POST">
                   @csrf
    <div class="my-2">
        <label for="title" class="text-md font-bold">Product Name</label>
        <input type="text" value="" name="title" id="title"
            class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2"
        >
            @error('title')
            <span class="text-red-500 text-sm">
                {{ $message }}
            </span>
            @enderror
    </div>
                    <div class="my-2 ">
                        <label for="" class="text-md font-bold">Category</label>
                        <input type="text" value="" name="category"
                            class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2"
                            id="">
                        @error('category')
                        <span class="text-red-500 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="my-2 ">
                        <label for="" class="text-md font-bold">Enter your Price</label>
                        <input type="text" value="" name="price"
                            class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2"
                            id="">
                        @error('price')
                        <span class="text-red-500 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <button class="px-5 py-1 bg-emerald-500 rounded-md text-black text-lg shadow-md">Create</button>
                </form>
            </div>
        </div>

@endsection
</body>

</html>
