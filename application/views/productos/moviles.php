<div class="container">
	<div class="row">
		<?php if(isset($moviles) && is_array($moviles) && sizeof($moviles)): ?>
			<?php foreach ($moviles as $index => $movil): ?>
				<div class="form-group col-xl-3 col-md-6 col-sm-12">
					<div class="card card_movil">
						<img src="<?=$movil['imagen']?>" class="card-img-top" alt="<?=$movil['nombre']?>">
						<div class="card-body">
							<h5 class="card-title"><?=$movil['nombre']?></h5>
							<h6 class="card-title">$<?=$movil['precio']?> MXN</h6>
							<p class="card-text"><?=$movil['descripcion']?></p>
							<button class="btn btn-outline-primary agregarCarrito" data-id="<?=$movil['id']?>">Comprar</button>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>
