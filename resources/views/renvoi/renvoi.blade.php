{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('motif_renvoi', 'Motif_renvoi:') !!}
			{!! Form::text('motif_renvoi') !!}
		</li>
		<li>
			{!! Form::label('date_renvoi', 'Date_renvoi:') !!}
			{!! Form::text('date_renvoi') !!}
		</li>
		<li>
			{!! Form::label('dossier_id', 'Dossier_id:') !!}
			{!! Form::text('dossier_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}