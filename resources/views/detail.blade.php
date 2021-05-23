@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Back</a>
            <h2>{{$product['name']}}</h2>
            <h4>Designed by : {{$product['artist']}}</h4>
            <h4>Category: {{$product['category']}}</h4>
            <h4>{{$product['description']}}</h4>
            <h3>Estimated Cost : {{$product['price']}}</h3>
            <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary">Add to Wishlist</button>
            </form>
            <br>
            <h4>Contact : {{$product['designercontact']}}</h4>
            {{-- <button class="btn btn-success"></button> --}}
        </div>
    </div>
    
</div>
@endsection