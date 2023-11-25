@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Product') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('product.update',$product->id) }}">
                            @method('PUT')
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class=" col-form-label ">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" required autocomplete="name" autofocus>
                                </div>
                                <div class="col-md-6">
                                    <label for="quantity" class=" col-form-label ">{{ __('Quantity') }}</label>
                                    <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ $product->quantity }}" required autocomplete="quantity">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="price" class=" col-form-label">{{ __('Price') }}</label>
                                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price"  value="{{ $product->price  }}" required autocomplete="price">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update Product') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
