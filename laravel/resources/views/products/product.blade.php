@extends('layout')
@section('content')

    @if ($products -> count())
<table class="table">
    <tr>
        <th>Name</th><th>Rating</th>
    </tr>
    @foreach($products as $product)
    </tr>

<tr>
    <td>{{$product->name}}</td>
    <td>{{$product->rating}}</td>

</tr>
    @endforeach
</table>
    @endif

    @stop