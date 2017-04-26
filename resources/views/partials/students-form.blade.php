{!! csrf_field() !!}
<div class ="form-group">
	<label for="first_name">First name</label>
	<input
	type="text" 
	id="first_name" 
	name="first_name" 
	class="form-control" 
	value="{{ old('first_name') }}">
</div>
<div class ="form-group">
	<label for="description">Description</label>
	<input 
	type="text" 
	id="description" 
	name="description" 
	class="form-control"
	value="{{ old('description') }}">
</div>
<div class ="form-group">
	<label for="subscribed">Subscribe to news letter</label>
	<input 
	type="checkbox" 
	id="subscribed" 
	name="subscribed" 
	value="{{ old('subscribed') }}">
</div>
<div class ="form-group">
	<label for="school_name">School name</label>
	<input 
	type="text" 
	id="school_name" 
	name="school_name" 
	class="form-control"
	value="{{ old('school_name') }}">
</div>