@extends('layouts.website.layout-website')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="my-5">
                    <div class="container mx-auto">
                        @if(session()->has('error'))
                            <div class="bg-red-400 text-red-800 px-4 py-2">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if(session()->has('success'))
                            <div class="text-4xl bg-green-300 text-green-700 px-4 py-2 mb-5">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="flex justify-between items-center bg-gray-200 p-5 rounded-md">
                            <div>
                                <h1 class="text-xl text-semibold">
                                    Products ({{ $totalProducts }})</h1>
                                    Products ({{ $products->count()}})</h1>
                                <p class="text-gray-600">Manage your products here</p>    
                            </div>
                            <div>
                                <a href="{{ route('products.create') }}"
                                    class="px-5 py-2 bg-blue-500 rounded-md text-white text-lg shadow-md">Add
                                    New</a>
                            </div>
                        </div>
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table
                    class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                #
                            </th>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Name
                            </th>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Category
                            </th>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Price
                            </th>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Edit
                            </th>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Delete
                            </th>
                        </tr>
                    </thead>
    <tbody
        class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

        @foreach ($products as  $product)
        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
            <td
                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{ $product->id }}
            </td>
            <td
                class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ $product->title }}
            </td>
            <td
                class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
               {{ $product->category}}
            </td>
            <td
                class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ $product->price }}
            </td>
            <td
                class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
 <a href="{{ route('products.edit',
  ['id' => $product->id]) }}"

                    class="px-5 py-2 bg-blue-500 rounded-md text-white text-lg shadow-md">Edit</a>
            </td>
            <td
                class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
               <form action="{{ route('products.destroy',['id' => $product->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md"
                    onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
               </form>
            </td>
        </tr>
       @endforeach
       
    </tbody>

</table>
<div class="mt-5 mb-9">

    {{ $products->links() }}
</div>


            </div>
        </div>
    </div>
</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection