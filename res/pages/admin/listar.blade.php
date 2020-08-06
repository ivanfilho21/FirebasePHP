@extends('_templates/main')
@section('page-title', 'Listar Produtos | Painel de Controle')

@push('head-styles')
    <link rel="stylesheet" href="{{ URL }}res/css/admin/style.css">
@endpush

@section('main-content')
	<?php require ROOT.'App/scripts/listar-produtos.php' ?>
    <div class="actionBar">
		<h1>MyApp</h1>
	</div>

	<a href="{{ URL }}home">Lista de Produtos</a>
	
	<table class="listaDeProdutos">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Preço</th>
				<th>Categoria</th>
				<th>Condição</th>
				<th></th>
			</tr>
		</thead>

		<tbody>
			@foreach($produtos as $p)
			<tr>
				<td>{{ $p['nome'] }}</td>
				<td class="preco">{{ $p['preco'] }}</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div class="fab">
		+
	</div>
@endsection