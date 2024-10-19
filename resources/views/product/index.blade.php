@extends('layouts.app')

@section('template_title')
Product
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <form class="w-full">
                <div class="position-relative">
                    <input class="w-full rounded-full px-3 py-2 border border-primary focus:outline-none transition-all duration-300" placeholder="Search..." required type="text" />
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                    <span id="card_title" class="mb-2 mb-md-0">
                        {{ __('Productos') }}
                    </span>
                    <div>
                        <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">{{ __('Create New') }}</a>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                <div class="space-y-2 p-4">
                    <div role="alert" class="text-white-700 bg-green-100 dark:bg-green-900 border-l-4 border-green-500 dark:border-green-700 text-green-900 dark:text-green-100 p-2 rounded-lg flex items-center transition duration-300 ease-in-out hover:bg-green-200 dark:hover:bg-green-800 transform hover:scale-105">
                        <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-5 w-5 flex-shrink-0 mr-2 text-green-600" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                        <p class="text-xs font-semibold">{{ $message }}</p>
                    </div>
                </div>
                @endif

                <div class="card-body bg-white">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-12 col-sm-6 col-md-4 mb-4">
                            <div class="card">
                                <div class="card-header bg-cover bg-center" style="background-image: url({{ $product->image }}); height: 200px;">
                                    <div class="d-flex justify-content-end">
                                        <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-uppercase fw-bold text-gray-700">{{ $product->name }}</p>
                                    <p class="text-3xl text-gray-900">{{ $product->price }}</p>
                                    <p class="text-gray-700">{{ $product->description }}</p>

                                    <input type="number" placeholder="Ingrese la cantidad" class="mt-4 h-10 bg-gray-800 border-2 border-gray-600 rounded-lg text-white px-2 text-base hover:border-white cursor-pointer transition" />
                                </div>

                                <div class="card-footer bg-gray-100 d-flex justify-content-between align-items-center flex-wrap">
                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                        <a class="btn btn-success btn-sm" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-edit"></i> {{ __('Edit') }}</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{ __('Delete') }}</button>
                                    </form>
                                    <a href="{{ route('Agregar_carrito',$product->id) }}" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-shopping-cart"></i> Agregar al carrito
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                {!! $products->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
