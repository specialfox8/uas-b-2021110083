@extends('layouts.master')

@section('title', 'Items List')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>All Items</h1>
        <a href="{{ route('items.create') }}" class="btn btn-primary btn-sm">Add New Items</a>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success mt-4">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <th scope="row">
                            <a href="{{ route('items.show', ['item' => $item->id_items]) }}">
                                {{ $item->id_items }}
                            </a>
                        </th>

                        <td>{{ $item->name }}</td>
                        <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                        {{-- <td>{{ $item->price }}</td> --}}
                        <td>{{ $item->stock }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                            <a href="{{ route('items.edit', ['item' => $item->id_items]) }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>
                            <form action="{{ route('items.destroy', ['item' => $item->id_items]) }}" method="POST"
                                class="d-inline-block">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No item found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {!! $items->links() !!}
        </div>
    </div>
@endsection
