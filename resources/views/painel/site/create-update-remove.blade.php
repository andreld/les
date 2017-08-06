@extends('templates.template-comum')

@section('conteudo-individual')
	{!! Form::text('nome_site', null, ['placeholder' => 'Nome da Instituição', 'class' => 'formulario']) !!}
        {!! Form::text('url_site', null, ['placeholder' => 'Página de divulgação dos Editais', 'class' => 'formulario']) !!}
@endsection