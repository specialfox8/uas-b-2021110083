@extends('layouts.master')

@section('title', 'Update Items')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>Uodate Items</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row my-5">
        <div class="col-12 px-5">
            <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="mb-3 col-md-12 col-sm-12">
                    <label class="form-label">Harga</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01"
                        value="{{ old('price') }}">
                </div>
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock') }}"
                        min="0">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>
@endsection
