<!-- form partial for tasks create and edit views -->
<!-- form partial for projects create and edit views -->
<div class="form-group">
	{!! Form::label('name', 'Name:') !!}
	{!! Form::text('name') !!}
</div>

<div class="form-group">
	{!! Form::label('slug', 'Slug:') !!}
	{!! Form::text('slug') !!}
</div>

<div class="form-group">
	{!! Form::label('completed', 'Completed:') !!}
	{!! Form::text('completed') !!}
</div>

<div class="form-group">
	{!! Form::label('description', 'Description:') !!}
	{!! Form::text('description') !!}
</div>

<div class="form-group">
	{!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
