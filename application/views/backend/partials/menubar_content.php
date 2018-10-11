<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="<?= base_url('Dashboard')?>" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Admin</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								
								<li class="nav-item">
									<a href="<?= base_url('auth')?>" class="nav-link">Author's</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('auth/create_user')?>" class="nav-link">Create Author</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('auth/create_group')?>" class="nav-link">Create Group</a>
								</li>
							</ul>
						</li>

					</ul>
				</div>