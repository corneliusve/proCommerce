@extends('layout')

@section('content')
    <div class="flexy mb-3">
    	<h1 class="fill"><strong>Pro Commerce - products</strong></h1>
		<a href="/cp/collections/entries/pro_commerce/create" class="btn btn-primary">Create a product</a>
    </div>

	<div class="card">

		<div class="dossier-table-wrapper">
			<table class="dossier">
				<thead>
					<tr>
						<th>Title</th>
						<th>price</th>
						<th>categorie</th>
						<th>online</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($products as $item)
						<tr>
							<td>{{ $item->get('title') }}</td>
							<td>€ 650,99</td>
							<td></td>
							<td>online</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>



	</div>
@endsection
