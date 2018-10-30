@extends('admin.default')

@section('page-header')
	User <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')


		@include('admin.users.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		

	
@stop
