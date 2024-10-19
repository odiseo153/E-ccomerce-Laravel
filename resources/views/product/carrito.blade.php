@extends('layouts.app')

@section('template_title')
Carrito
@endsection

@section('content')
<div class="container py-8 px-4 ">

  @if ($message = Session::get('success'))
  <div role="alert" class="bg-green-100 dark:bg-green-900 border-l-4 border-green-500 dark:border-green-700 text-green-900 dark:text-green-100 p-4 rounded-lg flex items-center mb-4">
    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-5 w-5 mr-2 text-green-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg">
      <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
    </svg>
    <p class="text-sm font-semibold">{{ $message }}</p>
  </div>
  @endif

  <div class="overflow-x-auto ">
    <table class="w-full table-auto">
      <thead class="text-white">
        <tr class="bg-gray-200 dark:bg-gray-800">
          <th class="px-4 py-2">Image</th>
          <th class="px-4 py-2">Nombre</th>
          <th class="px-4 py-2">Precio</th>
          <th class="px-4 py-2"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr class="bg-white dark:bg-gray-900">
          <td class="border px-4 py-2">
            <img src="{{ $product->image }}" class="w-10 h-10 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" alt="Bordered avatar">
          </td>
          <td class="border px-4 py-2">{{ $product->name }}</td>
          <td class="border px-4 py-2">${{ $product->price }}</td>
          <td class="border px-4 py-2">
            <form action="{{ route('destroyCarrito',$product->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg"><i class="fas fa-trash"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>
@endsection
