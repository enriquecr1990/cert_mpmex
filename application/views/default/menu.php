<div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-dark bg-success">
		<img src="<?=base_url()?>assets/img/logo.jpg" width="50" height="50" class="d-inline-block align-top img-thumbnail" alt="" loading="lazy">
		<a class="navbar-brand" href="#">Tienda e-commerce</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuTiendaEcommerse" aria-controls="menuTiendaEcommerse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="menuTiendaEcommerse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item <?=isset($menu) && $menu == 'inicio' ? 'active' : ''?>">
					<a class="nav-link" href="<?=base_url()?>">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item <?=isset($menu) && $menu == 'productos' ? 'active' : ''?>">
					<a class="nav-link" href="<?=base_url()?>tienda/productos">Productos</a>
				</li>
				<li class="nav-item <?=isset($menu) && $menu == 'quienes_somos' ? 'active' : ''?>">
					<a class="nav-link" href="<?=base_url()?>tienda/quienes_somos">Quienes Somos</a>
				</li>
				<li class="nav-item <?=isset($menu) && $menu == 'contacto' ? 'active' : ''?>">
					<a class="nav-link" href="<?=base_url()?>tienda/contacto">Contacto</a>
				</li>
			</ul>
			<ul class="navbar-nav mr-5">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="menuUsuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user"></i>
					</a>
					<div class="dropdown-menu" aria-labelledby="menuUsuario">
						<a class="dropdown-item" href="#">Compras</a>
						<a class="dropdown-item" href="#">Mis datos</a>
						<a class="dropdown-item" href="#">Salir </a>
					</div>
				</li>
				<li class="nav-item">
					<span class="nav-link active">Bienvenido <i>Lalo Landa</i></span>
				</li>
				<li class="nav-item">
					<a class="nav-link cursor_pointer">
						<i class="fas fa-bell"></i>
						<span id="bdg_notificacion" class="badge badge-danger badge_notificacion"></span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link cursor_pointer <?=isset($menu) && $menu == 'carrito' ? 'active' : ''?>" id="lnkCarrito">
						<i class="fas fa-shopping-cart"></i>
						<span id="bdg_carrito" class="badge badge-danger badge_notificacion"></span>
					</a>
				</li>
			</ul>
		</div>
	</nav>
</div>
