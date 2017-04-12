@if(Session::has('error'))
<div class="alert bg-danger" style="text-align: center;" role="alert">
	{{Session::get('error')}} <a href="#" class="pull-right"><span class="glyphicon"></span></a>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif
@if(Session::has('succsess'))
<div class="alert bg-success" role="alert">
	<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg> {{Session::get('succsess')}} <a href="#" class="pull-right"></a>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif
@foreach($errors->all() as $error)
<div class="alert bg-danger" style="text-align: center;" role="alert">
	{{$error}} <a href="#" class="pull-right"><span class="glyphicon"></span></a>
</div>
@endforeach