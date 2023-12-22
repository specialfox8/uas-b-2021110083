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
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Tags</th>
                    <th scope="col">Body</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        {{-- <th scope="row">
                            <a href="{{ route('items.show', $item) }}">
                                {{ $item->Nama }}
                            </a>
                        </th>
                        <td>{{ $item->Nama?->name ?? 'No Category' }}</td>
                        <td>{{ $item->Nama?->name ?? 'No Category' }}</td>
                         <td>
                            @foreach ($item->tags as $tag)
                                <span class="badge bg-primary">{{ $tag->name }}</span>
                            @endforeach
                        </td>
                         <td></td>
                        <td>{{ $article->created_at }}</td>
                        <td>{{ $article->updated_at }}</td>
                        <td>
                            <a href="{{ route('items.edit', $item) }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>
                            <form action="{{ route('items.destroy', $item) }}" method="POST" class="d-inline-block">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete
                                </button>
                            </form>
                         </td> --}}
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
