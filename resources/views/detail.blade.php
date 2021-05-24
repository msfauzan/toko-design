@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <br>
                <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Back</a>
                <h2>{{ $product['name'] }}</h2>
                <h4>Designed by : {{ $product['artist'] }}</h4>
                <h4>Category: {{ $product['category'] }}</h4>
                <h4>{{ $product['description'] }}</h4>
                <h3>Estimated Cost : Rp. {{ $product['price'] }},-</h3>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value={{ $product['id'] }}>
                    <button class="btn btn-danger"><i class="far fa-heart"></i></button>
                </form>
                {{-- <h4>Contact : {{ $product['designercontact'] }}</h4> --}}
                <h4>Please Contact Designer here</h4>
                <a href="mailto:{{ $product['designercontact'] }}?subject=Design from TokoDesign&body=I just saw your design on TokoDesign Webpage, and that is awesome! I would like to order design from you, Please get in touch."
                    class="btn btn-success fa fa-envelope"></a>
                {{-- <button class="btn btn-success"></button> --}}
            </div>
        </div>

    </div>
@endsection
