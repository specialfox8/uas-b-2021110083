@extends('layouts.master')

@section('title', 'Order Add')

@section('content')
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Add Order</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success mt-4">
            {{ session()->get('success') }}
        </div>
    @endif

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
        <div class="col-6">
            <form action="" method="POST">
                @csrf
                {{-- <div class="mb-3 col-md-8 col-sm-12">
                    <label for="full_name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}">
                </div> --}}
                <div class="mb-3 col-md-12 col-sm-12">
                    <label class="form-label">Item</label>
                    <select class="form-select form-select-lg mb-3" name="items_id">
                        <option>No items</option>
                        @foreach ($items as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" min="0">
                </div>

                <select class="form-select form-select-lg mb-3" name="status">
                    <option>Pilih Status</option>
                    <option value="Selesai" {{ old('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                    <option value="Menunggu Pembayaran" {{ old('status') == 'Menunggu Pembayaran' ? 'selected' : '' }}>
                        Menunggu Pembayaran</option>

                </select>
                <button type="submit" class="btn btn-primary">Pesan</button>
            </form>
        </div>
    </div>
@endsection
