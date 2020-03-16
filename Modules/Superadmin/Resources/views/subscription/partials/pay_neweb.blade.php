<div class="col-md-12">
	<form action="{{action('\Modules\Superadmin\Http\Controllers\SubscriptionController@confirmNewebPay', [$package->id])}}" method="POST">
	 	{{ csrf_field() }}
	 	<input type="hidden" name="gateway" value="{{$k}}">

	 	<button type="submit" class="btn btn-success"> <i class="fa fa-hand-grab-o"></i> {{$v}}</button>
	</form>
</div>
