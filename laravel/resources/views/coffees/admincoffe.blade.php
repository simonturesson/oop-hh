@extends('layout')


@section('content')
    <section id="one">
        <div class="inner">
            <header class="major">
                <h1>Edit Coffee's</h1>
            </header>

            <!-- Content -->

            <a href="{{URL::route('coffee.create')}}" class="button scrolly">Lägg till kaffe</a>
            <a href="{{URL::route('coffee.create')}}" class="button scrolly">Ta bort kaffe</a>


        </div>
    </section>

@stop
