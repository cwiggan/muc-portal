@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ String::title($post->title) }}} ::
@parent
@stop

{{-- Update the Meta Title --}}
@section('meta_title')
@parent

@stop

{{-- Update the Meta Description --}}
@section('meta_description')
@parent

@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')
@parent

@stop

{{-- Content --}}
@section('content')
	<div class="col-lg-12">


<p>{{ $post->content() }}</p>

<div>
	<span class="badge badge-info">Posted {{{ $post->date() }}}</span>
</div>

<hr />
</div>

@stop
