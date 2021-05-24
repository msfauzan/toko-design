@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>Wish List</h4>
                @foreach ($products as $item)
                    <div class=" row searched-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class="trending-image" src="{{ $item->gallery }}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h2>{{ $item->name }}</h2>
                                <h5>Category : {{ $item->category }}</h5>
                                <form action="/removecart/{{ $item->cart_id }}"
                                    onsubmit="return confirm('Do you really want to remove this design from Wish List?');">
                                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                                {{-- <a href="/removecart/{{ $item->cart_id }}" class="btn btn-danger"><i
                                        class="fas fa-trash-alt"></i></a> --}}
                            </div>
                        </div>
                        <div class="col-sm-4">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
