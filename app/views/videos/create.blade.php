@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
Add Video ::
@parent
@stop
{{-- Content --}}
@section('content')

        <div class="col-lg-12'>
            {{ Form::open(array('route' => 'videos.store','files'=> true,'class' => 'form-horizontal')) }}
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
            <div class="form-group">
                <label for="image" class="col-sm-2 control-label">Video Image</label>
                <div class="col-sm-10">
                  {{ Form::file('image') }}
                  {{ $errors->first('image') }}
                </div>
              </div>

             {{ Form::submit('Submit'); }}
            {{ Form::close() }}

</div>
@stop