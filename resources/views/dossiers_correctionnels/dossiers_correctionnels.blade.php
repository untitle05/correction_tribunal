{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('numero_ordre', 'Numero_ordre:') !!}
			{!! Form::text('numero_ordre') !!}
		</li>
		<li>
			{!! Form::label('date_premiere_audience', 'Date_premiere_audience:') !!}
			{!! Form::text('date_premiere_audience') !!}
		</li>
		<li>
			{!! Form::label('partie_civile', 'Partie_civile:') !!}
			{!! Form::text('partie_civile') !!}
		</li>
		<li>
			{!! Form::label('prevenu', 'Prevenu:') !!}
			{!! Form::text('prevenu') !!}
		</li>
		<li>
			{!! Form::label('situation_penale', 'Situation_penale:') !!}
			{!! Form::text('situation_penale') !!}
		</li>
		<li>
			{!! Form::label('jugment_ADD', 'Jugment_ADD:') !!}
			{!! Form::text('jugment_ADD') !!}
		</li>
		<li>
			{!! Form::label('jugement_au_fond', 'Jugement_au_fond:') !!}
			{!! Form::text('jugement_au_fond') !!}
		</li>
		<li>
			{!! Form::label('jury_id', 'Jury_id:') !!}
			{!! Form::text('jury_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}