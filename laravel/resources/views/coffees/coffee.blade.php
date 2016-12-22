@extends('layout')
@section('content')
    @if(Session::has('message'))
        <div class="">
            {{ Session::get('message')}}
        </div>

    @else
        <p></p>
    @endif
    @if ($coffees -> count())
<table class="table">
    <tr>
        <th>Name</th>
        <th>Origin</th>
        <th>Roaster</th>
        <th>Producer</th>
        <th>Roastdate</th>
        <th>Brewdate</th>
        <th>Price</th>
        <th>Store</th>
        <th>Brewmethod</th>
        <th>Notes</th>
        <th>Rating</th>
        <th>Created At</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($coffees as $coffee)


<tr>
    <td>{{$coffee->name}}</td>
    <td>{{$coffee->origin}}</td>
    <td>{{$coffee->roaster}}</td>
    <td>{{$coffee->producer}}</td>
    <td>{{$coffee->roast_date}}</td>
    <td>{{$coffee->brew_date}}</td>
    <td>{{$coffee->price}}</td>
    <td>{{$coffee->store}}</td>
    <td>{{$coffee->brewmethod}}</td>
    <td>{{$coffee->notes}}</td>
    <td>{{$coffee->rating}}</td>
    <td>{{$coffee->created_at}}</td>
    <td><a href="{{URL::route('coffee.show', ['id' => $coffee->id])}}" class="button scrolly">Visa kaffe</a>
    <td><a href="{{URL::route('coffee.edit', ['id' => $coffee->id])}}" class="button scrolly">Edit kaffe</a>
    <td>
        {!! Form::open(array('method' => 'DELETE', 'route' => array('coffee.destroy', $coffee->id))) !!}

            {!! Form::submit('Delete', array('class' => 'button scrolly', 'onclick' => 'return confirm("Säker på att du vill ta bort?");')) !!}

        {!! Form::close() !!}
    </td>



</tr>
    @endforeach
</table>
    @endif

    @stop