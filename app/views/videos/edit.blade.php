@extends('site.layouts.default')

{{-- Content --}}
@section('content')

        <h1>Add Video</h1>
            {{ Form::model($video, array('route' => array('videos.update', $video->id),'method' => 'PUT','class' => 'form-horizontal')) }}
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Video Title</label>
                <div class="col-sm-10">
                  {{ Form::text('title') }}
                  {{ $errors->first('title') }}
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Video Link</label>
                <div class="col-sm-10">
                  {{ Form::text('name') }}
                  {{ $errors->first('name') }}
                </div>
              </div>
            <div class="form-group">
                <label for="desc" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                  {{ Form::textarea('desc') }}
                  {{ $errors->first('desc') }}
                </div>
              </div>
 
                {{ Form::submit('Submit'); }}
            {{ Form::close() }}


@stop