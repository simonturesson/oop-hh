@section('contect')
{{ Form:: open(array('action' => 'ContactController@getContactUsForm')) }}

@foreach($errors->all('
:message
') as $message)
@endforeach
{{ Form:: textarea ('message', '', array('placeholder' => 'Message', 'class' => 'form-control', 'id' => 'message', 'rows' => '4' )) }} {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }} {{ Form:: close() }}


Route::post('contact_request','ContactController@getContactUsForm');

    @stop