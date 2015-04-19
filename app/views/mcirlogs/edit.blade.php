@extends('site.layouts.default')
@section('title')
Edit Logs ::
@parent
@stop
{{-- Content --}}
@section('content')

            {{ Form::model($mcirlog, array('route' => array('mcir.update', $mcirlog->id),'method' => 'PUT','class' => 'form-horizontal')) }}
<div class="col-lg-6">
           
            <div class="form-group">
                <label for="first_name" class="col-sm-4 control-label">First Name</label>
                <div class="col-sm-8">
                  {{ Form::text('first_name') }}
                  {{ $errors->first('first_name') }}
                </div>
              </div>
              <div class="form-group">
                <label for="last_name" class="col-sm-4 control-label">Last Name</label>
                <div class="col-sm-8">
                  {{ Form::text('last_name') }}
                  {{ $errors->first('last_name') }}
                </div>
              </div>
            <div class="form-group">
                <label for="address" class="col-sm-4 control-label">Address</label>
                <div class="col-sm-8">
                  {{ Form::text('address') }}
                  {{ $errors->first('address') }}
                </div>
              </div>
            <div class="form-group">
                <label for="address" class="col-sm-4 control-label">State</label>
                <div class="col-sm-8">
                  {{ Form::text('state') }}
                  {{ $errors->first('state') }}
                </div>
              </div>
            <div class="form-group">
                <label for="address" class="col-sm-4 control-label">City</label>
                <div class="col-sm-8">
                  {{ Form::text('city') }}
                  {{ $errors->first('city') }}
                </div>
              </div>
            <div class="form-group">
                <label for="address" class="col-sm-4 control-label">Zip Code</label>
                <div class="col-sm-8">
                  {{ Form::text('zip') }}
                  {{ $errors->first('zip') }}
                </div>
              </div>
              <div class="form-group">
                <label for="phone" class="col-sm-4 control-label">Phone Number</label>
                <div class="col-sm-8">
                  {{ Form::text('phone') }}
                  {{ $errors->first('phone') }}
                </div>
              </div>
            <div class="form-group">
                <label for="dob" class="col-sm-4 control-label">Date of Birth</label>
                <div class="col-sm-8">
                  {{ Form::text('dob') }}
                  {{ $errors->first('dob') }}
                </div>
              </div>
                <hr/>
              <div class="form-group">
                <label for="date" class="col-sm-4 control-label">Date Given</label>
                <div class="col-sm-8">
                  {{ Form::text('date') }}
                  {{ $errors->first('date') }}
                </div>
              </div>

                {{ Form::submit('Submit'); }}
            

</div>
<div class="col-lg-6">
              <div class="form-group">
                <label for="location_id" class="col-sm-4 control-label">Location</label>
                <div class="col-sm-8">
                  {{ Form::select('location_id', $locs) }}
                  {{ $errors->first('location_id') }}
                </div>
              </div>
              <div class="form-group">
                <label for="vaccine" class="col-sm-4 control-label">Vaccine</label>
                <div class="col-sm-8">
                  {{ Form::text('other') }}
                  {{  Form::select('vaccine', array('' => 'Select','Flu' => 'Flu', 'Hepatitis B' => 'Hepatitis B', 'Td' => 'Td', 'Tdap' => 'Tdap', 'Other' => 'Other')) }}
                  {{ $errors->first('vaccine') }}
                </div>
              </div>
              <div class="form-group">
                <label for="site" class="col-sm-4 control-label">Route</label>
                <div class="col-sm-8">
                  {{ Form::text('site') }}
                  {{ $errors->first('site') }}
                </div>
              </div>
              <div class="form-group">
                <label for="mfg_id" class="col-sm-4 control-label">Manufacturer Lot Number</label>
                <div class="col-sm-8">
                  {{ Form::text('mfg_id') }}
                  {{ $errors->first('mfg_id') }}
                </div>
              </div>
              <div class="form-group">
                <label for="init" class="col-sm-4 control-label">Init</label>
                <div class="col-sm-8">
                  {{ Form::text('init') }}
                  {{ $errors->first('init') }}
                </div>
              </div>
              <div class="form-group">
                <label for="exp_date" class="col-sm-4 control-label">Expiration Date</label>
                <div class="col-sm-8">
                  {{ Form::text('exp_date') }}
                  {{ $errors->first('exp_date') }}
                </div>
              </div>
              <div class="form-group">
                <label for="put_in_mcir" class="col-sm-4 control-label">Put in Mcir</label>
                <div class="col-sm-8">
                  {{ Form::checkbox('put_in_mcir') }}
                  {{ $errors->first('put_in_mcir') }}
                </div>
              </div>
              {{ Form::close() }}
</div>
@stop