<div class="container">
	<div class="form-group {{{ $errors->has('title') ? 'has-error' : '' }}}">		
			<h2>Title</h2>
			{{ Form::label('title', 'Post Title')}}
			{{ Form::text('title', Input::old('title'), array('class'=> 'form-control'))}}
			
			{{ $errors->first('title', '<p class="help-block">:message</p>') }}
	</div>

	<div class="form-group {{{ $errors->has('body') ? 'has-error' : '' }}}">	
			<h2>Entry</h2>
			{{ Form::label('body', 'Post Body')}}
			{{ Form::textarea('body', Input::old('body'), array('class'=> 'form-control', 'rows' => '4'))}}
			
			{{ $errors->first('body', '<p class="help-block">:message</p>') }}
	</div>

</div>