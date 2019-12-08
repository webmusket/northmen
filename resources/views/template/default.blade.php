@extends('layouts.master')
@section('content')


@foreach($pages as $page)
	
	<?php print_r($page->page); ?>
@endforeach


@endsection