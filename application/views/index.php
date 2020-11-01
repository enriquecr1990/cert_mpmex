<?php $this->load->view('default/header'); ?>

<?php $this->load->view('default/menu',array('menu' => 'inicio')); ?>

<!-- carousel -->
<div class="container-fluid">
	<div id="carreteProductos" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<?php if(isset($publicidad) && is_array($publicidad) && sizeof($publicidad) != 0): ?>
				<?php foreach ($publicidad as $index => $pub): ?>
					<div class="carousel-item <?=$index == 0 ? 'active':''?>">
						<img src="<?=$pub['url']?>" class="d-block w-100" alt="<?=$pub['alt']?>">
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
		<a class="carousel-control-prev" href="#carreteProductos" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carreteProductos" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<?php $this->load->view('productos/moviles'); ?>

<?php $this->load->view('default/footer'); ?>
