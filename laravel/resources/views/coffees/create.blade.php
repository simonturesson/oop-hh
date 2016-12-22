@extends('layout')
@section('content')
    <section id="one">
        <div class="inner">
            <header class="major">
                <h1>Add Coffee</h1>
            </header>

            <!-- Content -->

            @if(Session::has('message'))
                <div class="">
                    {{ Session::get('message')}}
                </div>

                @else
                <p>Add Coffee</p>
            @endif

    {!! Form::open(
    array(
    'route' => 'coffee.store',
    'files' => true,
    'enctype' => 'multipart/form-data')) !!}
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
  {{--  {!! Form::label('Bild') !!}
    <div class="container">
                <h1>Resize Image Uploading Demo</h1>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <strong>Original Image:</strong>
                            <br/>
                            <img src="/images/{{ Session::get('imageName') }}" />
                        </div>
                        <div class="col-md-4">
                            <strong>Thumbnail Image:</strong>
                            <br/>
                            <img src="/thumbnail/{{ Session::get('imageName') }}" />
                        </div>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-4">
                        <br/>
                        {!! Form::text('title', null,array('class' => 'form-control','placeholder'=>'Add Title')) !!}
                    </div>
                    <div class="col-md-12">
                        <br/>
                        {!! Form::file('image', array('class' => 'image')) !!}
                    </div>
                </div>

            </div>--}}

{{--
<input type="hidden" name="{{$image = $file->getClientOriginalName()}}" id="{{$image = $file->getClientOriginalName()}}">
--}}
    {!! Form::submit('Submit!')!!}
    {!! csrf_field() !!}
    {!! Form::close() !!}

@if (count($errors) > 0)
    <div class="">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
        </ul>
    </div>
    @endif



        </div>
    </section>
    @stop

