@if (session('flash-message'))
<div class="alert alert-{{ session('flash-message')[1] }} alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ session('flash-message')[0] }}</strong>
</div>
@endif