@extends('site.layouts.default')

{{-- Content --}}
@section('content')
<div class="col-lg-12">
	<div class="page-header">
		<h3>
                        Mcir Log
			<div class="pull-right">
				<a href="{{{ URL::to('mcir/create') }}}" class="btn btn-small btn-info iframe"><span class="glyphicon glyphicon-plus-sign"></span> Create</a>
			</div>
		</h3>
	</div>

	<table id="blogs" class="table table-striped table-hover">

		<tbody>
                
                    <tr>
                        <td>{{ $mcirlog->first_name }}</td>
                    </tr><tr>
                        <td>{{ $mcirlog->last_name }}</td>
                    </tr><tr>
                        <td>{{ $mcirlog->dob }}</td>
                    </tr><tr>
                        <td>{{ $mcirlog->address }}</td>
                     </tr><tr>
                     <td>{{ $mcirlog->date }}</td>
                        </tr><tr>
                        <td>{{ $mcirlog->vaccine }}</td>
                        </tr><tr>
                        <td>{{ $mcirlog->mfg_id }}</td>
                        </tr><tr>
                        <td>{{ $mcirlog->site }}</td>

                    </tr>
                
                
		</tbody>
	</table>
</div>
@stop