@extends('layouts.app')

@section('content')
    @empty ($products)
        <div class="alert alert-warning">
            There are no products currently
        </div>
    @else
        <div class="row">
            {{-- @dump($products) --}}
            @foreach ($products as $product)
                <div class="col-3">
                    @include('components.product-card')
                </div>
            @endforeach
            {{-- @dump($products) --}}
            {{-- @dd(\DB::getQueryLog()) --}}
        </div>
    @endif
@endsection
