<x-layout>
    <div class="container">
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">{{ __('title') }}</label>
                <input name="title" type="text" class="form-control" id="title" aria-describedby="title">
            </div>
            <div class="mb-3">
                <label for="fa_title" class="form-label">{{ __('fa_title') }}</label>
                <input name="fa_title" type="text" class="form-control" id="fa_title" aria-describedby="fa_title">
            </div>

            <div class="mb-3">
                <label for="garanty" class="form-label">{{ __('garanty') }}</label>
                <input name="garanty" type="text" class="form-control" id="garanty" aria-describedby="garanty">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">{{ __('category') }}</label>
                <select name="category_id" class="form-control" id="category" aria-describedby="category">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">{{ __('brand') }}</label>
                <select name="product_brand_id" class="form-control" id="brand" aria-describedby="brand">
                    @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">{{ __('price') }}</label>
                <input name="price" type="number" class="form-control" id="price" aria-describedby="price">
            </div>
            <div class="mb-3">
                <label for="count" class="form-label">{{ __('count') }}</label>
                <input name="count" type="number" class="form-control" id="count" aria-describedby="count">
            </div>
            <div class="mb-3">
                <label for="long_description" class="form-label">{{ __('long_description') }}</label>
                <textarea name="long_description" type="textare" class="form-control" id="long_description" aria-describedby="long_description"></textarea>
            </div>

            <div class="mb-3" id="descriptionDiv">
                <label for="description" class="form-label">{{ __('description') }}</label>
                <button class="btn" type="button" onclick="addDescriptionInput()">Add Description</button>
                <input name="description[]" type="text" class="form-control" id="description" aria-describedby="description">
            </div>
            <div class="mb-3" id="colorDiv">
                <label for="colors" class="form-label">{{ __('colors') }}</label>
                <button class="btn" type="button" onclick="addColorInput()">Add color</button>
                <input name="colors[]" type="text" class="form-control" id="color" aria-describedby="colors">
            </div>
            <div class="mb-3" id="sizeDiv">
                <label for="sizes" class="form-label">{{ __('sizes') }}</label>
                <button class="btn" type="button" onclick="addSizeInput()">Add size</button>
                <input name="sizes[]" type="number" class="form-control" id="sizes" aria-describedby="sizes">
            </div>
            <div class="mb-3" id="imageDiv">
                <label for="images" class="form-label">{{ __('images') }}</label>
                <button class="btn" type="button" onclick="addImageInput()">Add image</button>
                <input name="images[]" type="file" class="form-control" id="images" aria-describedby="images">
            </div>

            <button type="submit" class="btn btn-primary">ساختن</button>
        </form>
        @if($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif
    </div>
</x-layout>