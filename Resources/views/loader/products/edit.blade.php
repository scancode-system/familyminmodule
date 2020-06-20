<hr>
<h4>Quantidade Mínima por Referência</h4>

{{ Form::model($product->family_min, ['route' => ['familymins.update', $product->family_min], 'method' => 'put']) }}

<div class="row">
	<div class="col-md-12">
		<div class="input-group">
			{{ Form::number('min_qty',  null, ['class' => 'form-control', 'step' => '1', 'placeholder' => 'Mínimo por Família']) }}
			<span class="input-group-append">
				{{ Form::button('<i class="fa fa-save"></i> Salvar', ['class' => 'btn btn-primary', 'type' => 'submit']) }}
			</span>
		</div>
	</div>
</div>




{{ Form::close() }}


