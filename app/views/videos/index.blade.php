@extends('site.layouts.default')
@section('title')
Video ::
@parent
@stop
{{-- Content --}}
@section('content')
@foreach ($videos as $video)
		
			<div class="col-md-6">
				<h4>
                                {{ link_to_route('videos.show', $video->title, $parameters = array($video->id), $attributes = array()) }}
                                </h4>
                                <p>{{{ $video->desc }}}</p>
			</div>
		

@endforeach



@stop
