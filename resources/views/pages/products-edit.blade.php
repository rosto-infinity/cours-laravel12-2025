@extends('layouts.website.layout-website')
@section("content")
    <div class="my-5">
        <div class="container mx-auto max-w-xl shadow py-4 px-10">
            <a href="{{ route('products.index') }}" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Go Back</a>
            <div class="my-3">
                <h1 class="text-center text-3xl font-bold">Updated Product</h1>
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                    <div class="my-2">
                        <label for="title" class="text-md font-bold">Product Name</label>
                        <input type="text" value="{{ $product->title }}" name="title"
                            class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2"
                            id="title">
                            @error('title')
                            <div class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </div>
                            @enderror

                    </div>
                    <div class="my-2 ">
                        <label for="category" class="text-md font-bold">Category</label>
                        <input type="text" 
                       value="{{ $product->category }}"
                         name="category"
                            class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2"
                            id="category">
                            @error('category')
                            <div class="text-red-500 text-sm mt-1">
                                {{ $message }}      
                            </div>
                            @enderror  

                    </div>
                    <div class="my-2 ">
                        <label for="price" class="text-md font-bold">Enter your Price</label>
                        <input type="text" 
                        value="{{ $product->price }}"
                         name="price"
                            class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2"
                            id="price">
                            @error('price')
                            <div class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>

                    <button class="px-5 py-1 bg-emerald-500 rounded-md text-black text-lg shadow-md">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection



