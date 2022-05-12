				<aside class="app-sidebar">
					<div class="app-sidebar__logo">
						<a class="header-brand" href="{{ url('/home') }}">
							<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="ELTE CREDIT logo">
							<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="ELTE CREDIT logo">
							<img src="{{URL::asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="ELTE CREDIT logo">
							<img src="{{URL::asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="ELTE CREDIT logo">
						</a>
					</div>
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="user-pic">
								<img src="{{URL::asset('assets/images/users/2.jpg')}}" alt="user-img" class="avatar-xl rounded-circle mb-1">
							</div>
							<div class="user-info">
								<h5 class=" mb-1">{{ Auth::user()->name }} @can('manage-users')<i class="ion-checkmark-circled  text-success fs-12"></i>@endcan</h5>
								<span class="text-muted app-sidebar__user-name text-sm">{{ Auth::user()->email }}</span>
							</div>
						</div>
						<div class="sidebar-navs">
							<ul class="nav nav-pills-circle">
								<li class="nav-item" data-placement="top" data-toggle="tooltip" title="Deconnexion">
									<a class="icon" href="{{ route('logout') }}" >
										<div class="" href=""
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
																				<i class="las la-sign-out-alt header-icons"></i>
									</div>
								 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
									</form>
									</a>
								</li>
								<li class="nav-item" data-placement="top" data-toggle="tooltip" title="Elite Credit Site Officiel">
									<a class="icon" href="https://finance.elitesalliance.com">
										<i class="las  la-file-alt header-icons"></i>
									</a>
								</li>
								@can('manage-users')
								<li class="nav-item" data-placement="top" data-toggle="tooltip" title="Parrainage">
									<a href="{{route('parrains.index')}}" class="icon">
										<i class="las la-project-diagram header-icons"></i>
									</a>
								</li>
								<li class="nav-item" data-placement="top" data-toggle="tooltip" title="Valeur rachat">
									<a class="icon" href="{{route('valeurs.index')}}">
										<i class="las la-cog header-icons"></i>
									</a>
								</li>
								@endcan
							</ul>
						</div>
					</div>
					<ul class="side-menu app-sidebar3">
						<li class="side-item side-item-category mt-4">MENU PRINCIPAL</li>
						<li class="slide">
							<a class="side-menu__item"  href="{{ url('/home') }}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24">
									<path d="M0 0h24v24H0V0z" fill="none"/>	<path d="M3 10v11h6v-7h6v7h6v-11L12,3z"/>
								  </svg>
							<span class="side-menu__label">Tableau de bord</span></a>
						</li>
						@can('manage-users')
						<li class="side-item side-item-category">Administration</li>
						<li class="slide">
							<a class="side-menu__item"  href="{{ route('admin.users.index') }}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M15.573,11.624c0.568-0.478,0.947-1.219,0.947-2.019c0-1.37-1.108-2.569-2.371-2.569s-2.371,1.2-2.371,2.569c0,0.8,0.379,1.542,0.946,2.019c-0.253,0.089-0.496,0.2-0.728,0.332c-0.743-0.898-1.745-1.573-2.891-1.911c0.877-0.61,1.486-1.666,1.486-2.812c0-1.79-1.479-3.359-3.162-3.359S4.269,5.443,4.269,7.233c0,1.146,0.608,2.202,1.486,2.812c-2.454,0.725-4.252,2.998-4.252,5.685c0,0.218,0.178,0.396,0.395,0.396h16.203c0.218,0,0.396-0.178,0.396-0.396C18.497,13.831,17.273,12.216,15.573,11.624 M12.568,9.605c0-0.822,0.689-1.779,1.581-1.779s1.58,0.957,1.58,1.779s-0.688,1.779-1.58,1.779S12.568,10.427,12.568,9.605 M5.06,7.233c0-1.213,1.014-2.569,2.371-2.569c1.358,0,2.371,1.355,2.371,2.569S8.789,9.802,7.431,9.802C6.073,9.802,5.06,8.447,5.06,7.233 M2.309,15.335c0.202-2.649,2.423-4.742,5.122-4.742s4.921,2.093,5.122,4.742H2.309z M13.346,15.335c-0.067-0.997-0.382-1.928-0.882-2.732c0.502-0.271,1.075-0.429,1.686-0.429c1.828,0,3.338,1.385,3.535,3.161H13.346z"></path>
								</svg>
							<span class="side-menu__label">Sous utilisateurs</span></a>
						</li>

						<li class="slide">
							<a class="side-menu__item"  href="{{ route('admin.forfaits.index') }}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z"/></svg>
							<span class="side-menu__label">Forfaits</span></a>
						</li>
		 
						{{-- <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
							<span class="side-menu__label">Traçabilité Epargne</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{route('solde.soldes.index') }}" class="slide-item"> Particulier</a></li>
								<li><a href="{{route('sold.solds.index') }}" class="slide-item">Entreprise</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
							<span class="side-menu__label">Traçabilité Courant</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{route('sode.sodes.index') }}" class="slide-item"> Particulier</a></li>
								<li><a href="{{route('sod.sods.index') }}" class="slide-item">Entreprise</a></li>
							</ul>
						</li> --}}
						{{-- <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
							<span class="side-menu__label">Traçabilité Invest</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{route('somme.sommes.index') }}" class="slide-item"> Investissement</a></li>
							</ul>
						</li> --}}
						@endcan
						@can('manage-particuliers')
						<li class="side-item side-item-category">Commercial</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 22C6.49 22 2 17.51 2 12S6.49 2 12 2s10 4.04 10 9c0 3.31-2.69 6-6 6h-1.77c-.28 0-.5.22-.5.5 0 .12.05.23.13.33.41.47.64 1.06.64 1.67 0 1.38-1.12 2.5-2.5 2.5zm0-18c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg>
							<span class="side-menu__label">Epargnes</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{ route('particuliers.index') }}" class="slide-item">Particuliers</a></li>
								<li><a href="{{route('entreprises.index')}}" class="slide-item">Entreprises</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 22C6.49 22 2 17.51 2 12S6.49 2 12 2s10 4.04 10 9c0 3.31-2.69 6-6 6h-1.77c-.28 0-.5.22-.5.5 0 .12.05.23.13.33.41.47.64 1.06.64 1.67 0 1.38-1.12 2.5-2.5 2.5zm0-18c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg>
							<span class="side-menu__label">Courants</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{ route('clients.index') }}" class="slide-item">Particuliers</a></li>
								<li><a href="{{route('societies.index')}}" class="slide-item">Entreprises</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 22C6.49 22 2 17.51 2 12S6.49 2 12 2s10 4.04 10 9c0 3.31-2.69 6-6 6h-1.77c-.28 0-.5.22-.5.5 0 .12.05.23.13.33.41.47.64 1.06.64 1.67 0 1.38-1.12 2.5-2.5 2.5zm0-18c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg>
							<span class="side-menu__label">Investissements</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{ route('customers.index') }}" class="slide-item">Clients</a></li>
								{{-- <li><a href="{{route('societies.index')}}" class="slide-item">Entreprises</a></li> --}}
							</ul>
						</li>						
						@endcan

					
						@can('manage-soldes')
						<li class="side-item side-item-category">Comptable</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/><circle cx="12" cy="9" r="2.5"/></svg>
							<span class="side-menu__label">Epargnes</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="sub-slide-item" href="{{route('depot.depots.index') }}">Particulier</a></li>
								<li><a class="sub-slide-item" href="{{route('deposit.deposits.index') }}">Entreprise</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/><circle cx="12" cy="9" r="2.5"/></svg>
							<span class="side-menu__label">Courants</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="sub-slide-item" href="{{route('depositary.depositarys.index') }}">Particulier</a></li>
								<li><a class="sub-slide-item" href="{{route('depose.deposes.index') }}">Entreprise</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/><circle cx="12" cy="9" r="2.5"/></svg>
							<span class="side-menu__label">Investissements</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="sub-slide-item" href="{{route('investir.investis.index') }}">Investissements</a></li>
								<li><a class="sub-slide-item" href="{{route('investir.bonus.initial') }}">Retraits Bonus</a></li>
							</ul>
		 				</li>
						@endcan


						

					
						<li class="side-item side-item-category">Elites Deal Group</li>

						<li class="slide">
							<a class="side-menu__item"  href="{{ route('elite.elites.deal') }}">
								<svg class="side-menu__icon"  xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 6h-2.18c.11-.31.18-.65.18-1 0-1.66-1.34-3-3-3-1.05 0-1.96.54-2.5 1.35l-.5.67-.5-.68C10.96 2.54 10.05 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-5-2c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM9 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm11 15H4v-2h16v2zm0-5H4V8h5.08L7 10.83 8.62 12 11 8.76l1-1.36 1 1.36L15.38 12 17 10.83 14.92 8H20v6z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
							<span class="side-menu__label">Elite Deal</span></a>
						</li>

						

						{{-- <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{URL('#')}}">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/><circle cx="12" cy="9" r="2.5"/></svg>
							<span class="side-menu__label">Entreprise</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="sub-slide-item" href="{{route('deposit.deposits.index') }}">Depot</a></li>
								<li><a class="sub-slide-item" href="{{route('withadral.withadrals.index') }}">Retrait</a></li>
							</ul>
						</li>  --}}
						{{-- <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
								
							<span class="side-menu__label"></span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{ route('epargne_particulier.epargne_particuliers.create') }}" class="slide-item"> Enregistrer</a></li>
								<li><a href="{{ route('epargne_particulier.epargne_particuliers.index') }}" class="slide-item">Liste</a></li>
							</ul>
						</li> --}}
						{{-- <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><circle cx="11" cy="8" opacity=".3" r="2"></circle><path d="M5 18h4.99L9 17l.93-.94C7.55 16.33 5.2 17.37 5 18z" opacity=".3"></path><path d="M11 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm-1 12H5c.2-.63 2.55-1.67 4.93-1.94h.03l.46-.45L12 14.06c-.39-.04-.68-.06-1-.06-2.67 0-8 1.34-8 4v2h9l-2-2zm10.6-5.5l-5.13 5.17-2.07-2.08L12 17l3.47 3.5L22 13.91z"></path></svg>
							<span class="side-menu__label">Particulier</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu ">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="{{ url('#')}}"><span class="sub-side-menu__label">Depot</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{route('depot.depots.create') }}">Nouveau</a></li>
										<li><a class="sub-slide-item" href="{{route('depot.depots.index') }}">Liste</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="{{ url('#')}}"><span class="sub-side-menu__label">Retrait</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{route('retrait.retraits.create') }}">Nouveau</a></li>
										<li><a class="sub-slide-item" href="{{route('retrait.retraits.index') }}">Liste</a></li>
									</ul>
								</li>
							</ul>
						</li> --}}
						{{-- <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11 9h2V6h3V4h-3V1h-2v3H8v2h3v3zm-4 9c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zm-8.9-5h7.45c.75 0 1.41-.41 1.75-1.03l3.86-7.01L19.42 4l-3.87 7H8.53L4.27 2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2z"></path></svg>
							<span class="side-menu__label">Entreprise</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu ">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="{{ url('#')}}"><span class="sub-side-menu__label">Depot</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{route('deposit.deposits.create') }}">Nouveau</a></li>
										<li><a class="sub-slide-item" href="{{route('deposit.deposits.index') }}">Liste</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="{{ url('#')}}"><span class="sub-side-menu__label">Retrait</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{route('withadral.withadrals.create') }}">Nouveau</a></li>
										<li><a class="sub-slide-item" href="{{route('withadral.withadrals.index') }}">Liste</a></li>
									</ul>
								</li>
							</ul>
						</li> --}}
						{{-- <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
								
							<span class="side-menu__label"></span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('/' . $page='chart-apex')}}" class="slide-item"> Enregistrer</a></li>
								<li><a href="{{url('/' . $page='chart-chartist')}}" class="slide-item">Liste</a></li>
							</ul>
						</li> --}}
						{{-- <li class="side-item side-item-category">Compte Investissements</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><circle cx="11" cy="8" opacity=".3" r="2"></circle><path d="M5 18h4.99L9 17l.93-.94C7.55 16.33 5.2 17.37 5 18z" opacity=".3"></path><path d="M11 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm-1 12H5c.2-.63 2.55-1.67 4.93-1.94h.03l.46-.45L12 14.06c-.39-.04-.68-.06-1-.06-2.67 0-8 1.34-8 4v2h9l-2-2zm10.6-5.5l-5.13 5.17-2.07-2.08L12 17l3.47 3.5L22 13.91z"></path></svg>
							<span class="side-menu__label">Particulier</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('/' . $page='chart-apex')}}" class="slide-item"> Enregistrer</a></li>
								<li><a href="{{url('/' . $page='chart-chartist')}}" class="slide-item">Liste</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11 9h2V6h3V4h-3V1h-2v3H8v2h3v3zm-4 9c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zm-8.9-5h7.45c.75 0 1.41-.41 1.75-1.03l3.86-7.01L19.42 4l-3.87 7H8.53L4.27 2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2z"></path></svg>
							<span class="side-menu__label">Entreprise</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('/' . $page='chart-apex')}}" class="slide-item"> Enregistrer</a></li>
								<li><a href="{{url('/' . $page='chart-chartist')}}" class="slide-item">Liste</a></li>
							</ul>
						</li> --}}					
						{{-- <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"/></svg>
							<span class="side-menu__label">Elements</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('/' . $page='accordion')}}" class="slide-item"> Accordion</a></li>
								<li><a href="{{url('/' . $page='alerts')}}" class="slide-item"> Alerts</a></li>
								<li><a href="{{url('/' . $page='avatars')}}" class="slide-item"> Avatars</a></li>
								<li><a href="{{url('/' . $page='badge')}}" class="slide-item"> Badges</a></li>
								<li><a href="{{url('/' . $page='breadcrumbs')}}" class="slide-item"> Breadcrumb</a></li>
								<li><a href="{{url('/' . $page='buttons')}}" class="slide-item"> Buttons</a></li>
								<li><a href="{{url('/' . $page='cards')}}" class="slide-item"> Cards</a></li>
								<li><a href="{{url('/' . $page='cards-image')}}" class="slide-item"> Card Images</a></li>
								<li><a href="{{url('/' . $page='carousel')}}" class="slide-item"> Carousel</a></li>
								<li><a href="{{url('/' . $page='dropdown')}}" class="slide-item"> Dropdown</a></li>
								<li><a href="{{url('/' . $page='footers')}}" class="slide-item"> Footers</a></li>
								<li><a href="{{url('/' . $page='headers')}}" class="slide-item"> Headers</a></li>
								<li><a href="{{url('/' . $page='jumbotron')}}" class="slide-item"> Jumbotron</a></li>
								<li><a href="{{url('/' . $page='list')}}" class="slide-item"> List Group</a></li>
								<li><a href="{{url('/' . $page='media-object')}}" class="slide-item"> Media Obejct</a></li>
								<li><a href="{{url('/' . $page='modal')}}" class="slide-item"> Modal</a></li>
								<li><a href="{{url('/' . $page='navigation')}}" class="slide-item"> Navigation</a></li>
								<li><a href="{{url('/' . $page='pagination')}}" class="slide-item"> Pagination</a></li>
								<li><a href="{{url('/' . $page='panels')}}" class="slide-item"> Panel</a></li>
								<li><a href="{{url('/' . $page='popover')}}" class="slide-item"> Popover</a></li>
								<li><a href="{{url('/' . $page='progress')}}" class="slide-item"> Progress</a></li>
								<li><a href="{{url('/' . $page='tabs')}}" class="slide-item"> Tabs</a></li>
								<li><a href="{{url('/' . $page='tags')}}" class="slide-item"> Tags</a></li>
								<li><a href="{{url('/' . $page='tooltip')}}" class="slide-item"> Tooltips</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17.73 12.02l3.98-3.98c.39-.39.39-1.02 0-1.41l-4.34-4.34c-.39-.39-1.02-.39-1.41 0l-3.98 3.98L8 2.29C7.8 2.1 7.55 2 7.29 2c-.25 0-.51.1-.7.29L2.25 6.63c-.39.39-.39 1.02 0 1.41l3.98 3.98L2.25 16c-.39.39-.39 1.02 0 1.41l4.34 4.34c.39.39 1.02.39 1.41 0l3.98-3.98 3.98 3.98c.2.2.45.29.71.29.26 0 .51-.1.71-.29l4.34-4.34c.39-.39.39-1.02 0-1.41l-3.99-3.98zM12 9c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-4.71 1.96L3.66 7.34l3.63-3.63 3.62 3.62-3.62 3.63zM10 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm2 2c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm2-4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2.66 9.34l-3.63-3.62 3.63-3.63 3.62 3.62-3.62 3.63z"/></svg>
							<span class="side-menu__label">Utilities</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('/' . $page='elements-border')}}" class="slide-item"> Border</a></li>
								<li><a href="{{url('/' . $page='element-colors')}}" class="slide-item"> Colors</a></li>
								<li><a href="{{url('/' . $page='elements-display')}}" class="slide-item"> Display</a></li>
								<li><a href="{{url('/' . $page='element-flex')}}" class="slide-item"> Flex Items</a></li>
								<li><a href="{{url('/' . $page='element-height')}}" class="slide-item"> Height</a></li>
								<li><a href="{{url('/' . $page='elements-margin')}}" class="slide-item"> Margin</a></li>
								<li><a href="{{url('/' . $page='elements-paddning')}}" class="slide-item"> Padding</a></li>
								<li><a href="{{url('/' . $page='element-typography')}}" class="slide-item"> Typhography</a></li>
								<li><a href="{{url('/' . $page='element-width')}}" class="slide-item"> Width</a></li>
							</ul>
						</li> --}}
						{{-- <li class="side-item side-item-category">Depots & Retraits </li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg>
							<span class="side-menu__label">Forms</span><span class="badge badge-success side-badge">6</span></a>
							<ul class="slide-menu">
								<li><a href="{{url('/' . $page='form-elements')}}" class="slide-item"> Form Elements</a></li>
								<li><a href="{{url('/' . $page='advanced-forms')}}" class="slide-item"> Advanced Forms</a></li>
								<li><a href="{{url('/' . $page='form-wizard')}}" class="slide-item"> Form Wizard</a></li>
								<li><a href="{{url('/' . $page='form-editor')}}" class="slide-item"> Form Editor</a></li>
								<li><a href="{{url('/' . $page='form-sizes')}}" class="slide-item"> Form Element Sizes</a></li>
								<li><a href="{{url('/' . $page='form-treeview')}}" class="slide-item"> Form Treeview</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg>
							<span class="side-menu__label">Charts</span><span class="badge badge-info side-badge">7</span></a>
							<ul class="slide-menu">
								<li><a href="{{url('/' . $page='chart-apex')}}" class="slide-item"> Apex Charts</a></li>
								<li><a href="{{url('/' . $page='chart-chartist')}}" class="slide-item">Chartjs Charts</a></li>
								<li><a href="{{url('/' . $page='chart-echart')}}" class="slide-item"> Echart Charts</a></li>
								<li><a href="{{url('/' . $page='chart-flot')}}" class="slide-item"> Flot Charts</a></li>
								<li><a href="{{url('/' . $page='chart-morris')}}" class="slide-item"> Morris Charts</a></li>
								<li><a href="{{url('/' . $page='chart-peity')}}" class="slide-item"> Pie Charts</a></li>
								<li><a href="{{url('/' . $page='chart-c3')}}" class="slide-item">C3 Charts</a></li>
							</ul>
						</li> --}}
						{{-- <li class="side-item side-item-category">Depots & Retraits  </li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{URL('#')}}">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H5V5h15zm-5 14h-5v-9h5v9zM5 10h3v9H5v-9zm12 9v-9h3v9h-3z"/></svg>
							<span class="side-menu__label">Depots</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu ">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="{{url('#')}}"><span class="sub-side-menu__label">Investissements</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('/' . $page='contact-list')}}">Effectuer un retrait</a></li>
										<li><a class="sub-slide-item" href="{{url('/' . $page='contact-list2')}}">Retirer bonus parrainage</a></li>
										<li><a class="sub-slide-item" href="{{url('/' . $page='contact-list')}}">Retrait effectués </a></li>
										<li><a class="sub-slide-item" href="{{url('/' . $page='contact-list2')}}">Calendrier</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{URL('#')}}">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M20 18c1.1 0 1.99-.9 1.99-2L22 6c0-1.11-.9-2-2-2H4c-1.11 0-2 .89-2 2v10c0 1.1.89 2 2 2H0v2h24v-2h-4zM4 16V6h16v10.01L4 16zm9-6.87c-3.89.54-5.44 3.2-6 5.87 1.39-1.87 3.22-2.72 6-2.72v2.19l4-3.74L13 7v2.13z"></path></svg>
							<span class="side-menu__label">Retraits</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu ">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="{{url('#')}}"><span class="sub-side-menu__label">Investissements</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('/' . $page='contact-list')}}">Effectuer un retrait</a></li>
										<li><a class="sub-slide-item" href="{{url('/' . $page='contact-list2')}}">Retirer bonus parrainage</a></li>
										<li><a class="sub-slide-item" href="{{url('/' . $page='contact-list')}}">Retrait effectués </a></li>
										<li><a class="sub-slide-item" href="{{url('/' . $page='contact-list2')}}">Calendrier</a></li>
									</ul>
								</li>
							</ul>
						</li> --}}
					</ul>
				</aside>
				<!--aside closed-->