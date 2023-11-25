@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PRODUCT CREATE') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('product.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                            <label for="name" class=" col-form-label ">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            <div class="col-md-6">
                                <label for="quantity" class=" col-form-label ">{{ __('Quantity') }}</label>
                                <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                            <label for="price" class=" col-form-label">{{ __('Price') }}</label>
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" required autocomplete="price">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Product') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-4 container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PRODUCT LIST') }}</div>

                <div class="card-body">
                    <div class="data-tables">
                        <table id="myTable" class="text-center display">
                            <thead class="bg-light text-capitalize">
                            <tr>
                                <th>Sl. No</th>
                                <th>Product Name</th>
                                <th>Product Quantity</th>
                                <th>Product Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($product as  $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->quantity}}</td>
                                    <td>{{$row->price}}</td>
                                    <td>
                                        <ul class="d-flex justify-content-center">
                                                <li class="mr-2 h5 list-inline-item">
                                                    <a class="btn btn-info" href="{{route('product.edit',$row->id)}}" class="text-secondary">Edit</a>
                                                </li>
                                                <li class="h5 list-inline-item">
                                                    <a class="btn btn-danger" href="{{route('product.destroy',$row->id)}}" class="text-danger" onclick="show_confirm('delete-form-{{$row->id}}')">
                                                        Delete
                                                    </a>
                                                    <form id="delete-form-{{ $row->id }}" action="{{ route('product.destroy', $row->id) }}" method="POST" style="display: none;">
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>
                                                </li>

                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
