@extends('layout')
@section('content')


        <table class="table">
            <tr>
                <th>UserID</th>
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
            </tr>



                <tr>
                    <td>{{$coffee->user_id}}</td>
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
                    </td>



                </tr>

        </table>


@stop