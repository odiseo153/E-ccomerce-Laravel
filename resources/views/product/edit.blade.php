@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Product
@endsection

@section('content')
    <section class="container mx-auto my-8">
        <div class="max-w-4xl mx-auto">

            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-gray-200 px-4 py-3 flex justify-between items-center">
                    <span class="text-lg font-bold text-gray-800">{{ __('Update') }} Product</span>
                    <div>
                        <a class="btn btn-primary btn-sm bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded transition" href="{{ route('products.index') }}">
                            {{ __('Back') }}
                        </a>
                    </div>
                </div>

                <div class="p-6">
                    <form method="POST" action="{{ route('products.update', $product->id) }}" role="form" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}

                        @include('product.form')


                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
