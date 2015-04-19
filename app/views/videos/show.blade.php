@extends('site.layouts.default')
@section('title')
Video ::
@parent
@stop
{{-- Content --}}
@section('content')
<div class="col-lg-12">
        <h1>{{ $video->title }}</h1>
<iframe src="//player.vimeo.com/video/{{ $video->name }}" width="90%" height="482" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
 <p>{{ $video->desc }}</p>
</div>   
@stop