<div class="container scrollBorder form-center ">
	<div class="form-group {{{ $errors->has('title') ? 'has-error' : '' }}}">		
		
			<h2>{{ Form::label('title', 'Post Title')}}</h2>
			{{ Form::text('title', Input::old('title'), array('class'=> 'form-control', 'class' => 'col-sm-4', 'class' => 'form-color'))}}<br>
			
			{{ $errors->first('title', '<p class="help-block">:message</p>') }}
	</div>

	<div class="form-group {{{ $errors->has('body') ? 'has-error' : '' }}}">	
			
			<h2>{{ Form::label('body', 'Post Body')}}</h2>
			{{ Form::textarea('body', Input::old('body'), array('class'=> 'form-control', 'rows' => '4', 'class' => 'col-sm-4', 'class' => 'form-color'))}}
			
			{{ $errors->first('body', '<p class="help-block">:message</p>') }}
	</div>

	<div class="form-group {{{ $errors->has('image') ? 'has-error' : '' }}}">	
			
			<h2>{{ Form::label('image', 'Post Image')}}</h2>
			{{ Form::file('image', Input::old('image'), array('class'=> 'form-control'))}}
			
			{{ $errors->first('image', '<p class="help-block">:message</p>') }}
	</div>

</div>

@unless(empty($post->img_url))
	<img src="{{{ $post->img_url }}}" alt="{{{ $post->title }}}">
@endunless