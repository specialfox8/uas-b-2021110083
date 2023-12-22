@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded ">
        <h1 style="text-align: center;">Toko abc</h1>
        <div class="mb-3  bg-black text-white rounded d-flex justify-content-center ">
            <a href="{{ route('order-add.index') }}" class="btn btn-primary btn-sm"> Order</a>

            <a href="{{ route('items.index') }}" class="btn btn-primary btn-sm">Items</a>
        </div>
    </div>



    {{-- Articles Card --}}
    {{-- <div class="row mb-2">
        @forelse ($articles as $article)
            <x-article-card :article="$article" />
        @empty
            <div class="col-md-12">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h2 class="card-text mb-auto">No articles found.</h2>
                    </div>
                </div>
            </div>
        @endforelse

        {{ $articles->links() }}
    </div> --}}
@endsection
