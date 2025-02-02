@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
    @foreach($viewData['products']  as  $product)
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{asset('/storage/'.$product->getImage()) }}" class="img-fluid rounded">
        </div>
    @endforeach

</div>
@endsection