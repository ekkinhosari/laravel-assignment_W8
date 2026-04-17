@extends('base.base')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('update_product', $product->id) }}" class="row g-3" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="col-md-6">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $product->name }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $product->price }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <label for="details" class="form-label">Product Details</label>
            <input type="text" class="form-control" id="details" name="details" value="{{ $product->details }}">
        </div>

        <div class="col-md-6">
            <label for="product_category" class="form-label">Product Category</label>
            <select id="product_category" name="product_category" class="form-select @error('product_category') is-invalid @enderror">
                <option value="" disabled>Select a category</option>
                @foreach ($product_categories as $pc)
                    <option value="{{ $pc->id }}" {{ $product->category_id == $pc->id ? 'selected' : '' }}>
                        {{ $pc->name }}
                    </option>
                @endforeach
            </select>
            @error('product_category')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="stock" class="form-label">Initial Stock</label>
            <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ $product->stock }}">
            @error('stock')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        @if($product->image_path)
            <div class="col-12">
                <label class="form-label">Current Image</label><br>
                <img src="{{ asset('product_image/' . $product->image_path) }}" style="height: 150px; object-fit: cover;">
            </div>
        @endif

        <div class="col-12">
            <label for="image" class="form-label">Update Product Image (jpg, jpeg, png)</label>
            <input type="file" class="form-control" id="image" name="image" accept=".jpg,.jpeg,.png">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Edit Product</button>
            <a href="{{ route('store') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
@endsection