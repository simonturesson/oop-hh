@extends('layout')
@section('content')
    <section id="one">
        <div class="inner">
            <header class="major">
                <h1>Add Coffee</h1>
            </header>

            <!-- Content -->
            <p>Add Coffee</p>


    {!! Form::open(
    array(
    'route' => 'coffee.store',
    'files' => true)) !!}
    {!! Form::label('name', 'Namn', ['class' => 'form']) !!}
    {!! Form::text('name', 'Namn') !!}
    {!! Form::label('origin', 'Origin', ['class' => 'form']) !!}
    {!! Form::text('origin', 'Origin') !!}
    {!! Form::label('roaster', 'Rosteri', ['class' => 'form']) !!}
    {!! Form::text('roaster', 'Rosteri') !!}
    {!! Form::label('producer', 'Producent', ['class' => 'form']) !!}
    {!! Form::text('producer', 'Producent') !!}
    {!! Form::label('roast_date', 'Rostdatum', ['class' => 'form']) !!}
    {!! Form::date('roast_date', \Carbon\Carbon::now()) !!}
    {!! Form::label('brew_date', 'Bryggdatum', ['class' => 'form']) !!}
    {!! Form::date('brew_date', \Carbon\Carbon::now()) !!}
    {!! Form::label('brewmethod', 'Bryggmetod', ['class' => 'form']) !!}
    {!! Form::select('brewmethod', ['Aeropress','Chemex','V60','Kalita','General Pour Over','Espresso Machine','Vitameese brewer'])!!}
    {!! Form::label('price', 'Pris', ['class' => 'form']) !!}
    {!! Form::text('price', 'Pris') !!}
    {!! Form::label('store', 'Butik', ['class' => 'form']) !!}
    {!! Form::text('store', 'Butik') !!}
    {!! Form::label('notes', 'Anteckningar', ['class' => 'form']) !!}
    {!! Form::text('notes', 'Anteckningar') !!}
    {!! Form::label('rating', 'Betyg', ['class' => 'form']) !!}
    {!! Form::text('rating', 'Betyg') !!}
    {!! Form::submit('Submit!')!!}
    {!! csrf_field() !!}
    {!! Form::close() !!}


        </div>
    </section>
    @stop

