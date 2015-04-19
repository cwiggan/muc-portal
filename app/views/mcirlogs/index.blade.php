@extends('site.layouts.default')

@section('title')
Logs ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="col-lg-12">

@foreach ($locs as $loc)
    <div class="col-md-4">
        <!-- Primary tile -->
        <div class="box box-solid bg-light-blue">
            <div class="box-header">
                <h3 class="box-title">{{ link_to_action('McirLogsController@getByLocation', $loc->name, $parameters = array($loc->id), $attributes = array()) }}</h3>
            </div>
        </div><!-- /.box -->
    </div>
 @endforeach
	<div class="page-header">
		<h3>
                        
			<div class="pull-right">
				<a href="{{{ URL::to('mcir/create') }}}" class="btn btn-small btn-info iframe"><span class="glyphicon glyphicon-plus-sign"></span> Create</a>
			</div>
		</h3>
	</div>

	<table id="blogs" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-4">First Name</th>
				<th class="col-md-2">Last Name </th>
				<th class="col-md-2">Location </th>
				<th class="col-md-2">Created</th>
				<th class="col-md-2">{{{ Lang::get('table.actions') }}}</th>
			</tr>
                            
		</thead>
		<tbody>
                @foreach ($mcirlogs as $log)
                    <tr>
                        <td>{{ $log->first_name }}</td>
                        <td>{{ $log->last_name }}</td>
			<td>{{ $log->location->name }}</td>
                        <td>{{ $log->created_at }}</td>
                        <td>{{ link_to_route('mcir.show', 'view', $parameters = array($log->id), $attributes = array('class'=>'btn btn-xs btn-default cboxElement')) }} {{ link_to_route('mcir.edit', 'edit', $parameters = array($log->id), $attributes = array('class'=>'btn btn-xs btn-default cboxElement')) }}</td>
                    </tr>
                @endforeach
                
		</tbody>
	</table>
</div>
@stop

{{-- Scripts --}}
@section('scripts')
	<script type="text/javascript">
		var oTable;
		$(document).ready(function() {
			oTable = $('#blogs').dataTable( {
				"sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
				"sPaginationType": "bootstrap",
				"oLanguage": {
					"sLengthMenu": "_MENU_ records per page"
				},
				"bProcessing": true,
		        "bServerSide": true,
		        "sAjaxSource": "{{ URL::to('admin/blogs/data') }}",
		        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
			});
		});
	</script>
@stop