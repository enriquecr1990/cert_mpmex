<div class="container">
	<div class="row">
		<div class="form-group col-lg-12">
			<div class="card">
				<div class="card-body">
					<?php if(isset($moviles) && is_array($moviles) && sizeof($moviles)): ?>
						<?php foreach ($moviles as $index => $movil): ?>
							<div id="divMovil<?=$movil['id']?>" class="form-group col-xl-12 col-md-12 col-sm-12">
								<div class="row">
									<div class="form-group col-xl-4 col-md-6 col-sm-12">
										<img src="<?=$movil['imagen']?>" class="img-thumbnail img-fluid" alt="<?=$movil['nombre']?>">
									</div>
									<div class="form-group col-xl-8 col-md-6 col-sm-12">
										<h5 class="card-title"><?=$movil['nombre']?></h5>
										<h6 class="card-title">$<?=$movil['precio']?> MXN</h6>
										<p class="card-text"><?=$movil['descripcion']?></p>
										<button class="btn btn-outline-danger eliminarProducto" data-id="<?=$movil['id']?>">Eliminar</button>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					<?php else: ?>
						<div class="row">
							<div class="form-group col-lg-12">
								<span class="badge badge-info">
									No hay productos en el carrito
								</span><br><br>
								<a href="<?=base_url()?>" class="btn btn-light">Regresar</a>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
