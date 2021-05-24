@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-4">
        <div class="trending-wrapper">
            <h2>Searching Results</h2><br>
            @foreach($products as $item)
            <div class="searched-item">
              <a href="detail/{{$item['id']}}">
              <img class="trending-image" src="{{$item['gallery']}}">
              <div class="">
                <h3>{{$item['name']}}</h2>
                <h5>{{$item['category']}}</h5><br>
                <p>{{$item['description']}}</p><br>
              </div>
            </a>
            </div>
            @endforeach
          </div>
     </div>
</div>
@endsection