@extends('layouts.app')

@section('content')
<div class="container-fluid" >
    <div class="row pt-4">
        <div class="col-md-12 text-center">
			<h1>Laravel Form</h1>

            @if (!isset($data['number']))
                <p>No number was stored in the session<p>
            @else
                <p>The number {{$data['number']}} is stored<p>
            @endif
	  </div>
	</div>
	<div class="row pt-5">
	    <div class="col-md-4 offset-md-4">
             <x-demo-form id='form-number' />
		</div>
	  </div>
	</div>
</div>
@endsection