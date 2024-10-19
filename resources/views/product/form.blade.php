<div class="w-full max-w-lg mx-auto">
    @if($product?->image)
        <div class="mb-6">
            <img 
                id="preview" 
                src="{{ old('image', $product->image) }}" 
                alt="Product Image" 
                class="w-full h-auto rounded-lg shadow-md mb-4"
            />
        </div>
    @else
        <div class="mb-6">
            <img 
                id="preview" 
                src="" 
                alt="Product Image" 
                class="w-full h-auto rounded-lg shadow-md mb-4"
            />
        </div>
    @endif

    <form class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="name">
                Name
            </label>
            <input 
                value="{{ old('name', $product?->name) }}" 
                name="name" 
                class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400" 
                id="name" 
                type="text" 
                placeholder="Enter product name" 
                required
            />
            {!! $errors->first('name', '<p class="text-red-500 text-xs italic mt-1"><strong>:message</strong></p>') !!}
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="description">
                Description
            </label>
            <textarea 
                name="description" 
                class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400" 
                id="description" 
                placeholder="Enter product description" 
                required
            >{{ old('description', $product?->description) }}</textarea>
            {!! $errors->first('description', '<p class="text-red-500 text-xs italic mt-1"><strong>:message</strong></p>') !!}
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="price">
                Price
            </label>
            <input 
                value="{{ old('price', $product?->price) }}" 
                name="price" 
                class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400" 
                id="price" 
                type="text" 
                placeholder="Enter product price" 
                required
            />
            {!! $errors->first('price', '<p class="text-red-500 text-xs italic mt-1"><strong>:message</strong></p>') !!}
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="image">
                Image URL
            </label>
            <input 
                value="{{ old('image', $product?->image) }}" 
                name="image" 
                class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-400" 
                id="image" 
                type="text" 
                placeholder="Enter image URL" 
                required
            />
            {!! $errors->first('image', '<p class="text-red-500 text-xs italic mt-1"><strong>:message</strong></p>') !!}
        </div>

        <div class="flex items-center justify-center">
            <button 
                class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-md focus:outline-none focus:shadow-outline transition duration-200" 
                type="submit"
            >
                Submit
            </button>
        </div>
    </form>
</div>

<script>
  const imageInput = document.getElementById('image');
  const previewImage = document.getElementById('preview');

  // Actualiza la imagen al cambiar la URL
  imageInput.addEventListener('input', function () {
    const imageUrl = imageInput.value;
    
    // Verifica que la URL sea válida
    if (imageUrl) {
      previewImage.src = imageUrl;
    } else {
      // Si no hay URL, puedes establecer una imagen por defecto o dejarla vacía
      previewImage.src = '';
    }
  });
</script>
