{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('tel', 'Tel:') !!}
			{!! Form::text('tel') !!}
		</li>
		<li>
			{!! Form::label('grade', 'Grade:') !!}
			{!! Form::text('grade') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}