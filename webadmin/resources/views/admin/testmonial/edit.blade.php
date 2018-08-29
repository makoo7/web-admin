@extends('./layouts.admin.app')

@section('content')

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
            <!-- Header Content Begins -->
                <header class="m-grid__item    m-header " id="header-content" data-minimize-offset="200" data-minimize-mobile-offset="200" >
                @include('./layouts.admin.header')
                </header>
            <!-- Header Content Ends -->
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
					<!-- BEGIN: Aside Menu -->
					<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " data-menu-vertical="true"data-menu-scrollable="false" data-menu-dropdown-timeout="500">
                     @include('./layouts.admin.sidebar')
                    </div>
					<!-- END: Aside Menu -->
				</div>
				<!-- END: Left Aside -->
                
                <div class="m-grid__item m-grid__item--fluid m-wrapper">
					<div>&nbsp;</div>
					<div class="col-lg-10">
						@if(session()->has('response'))
						<div class="alert alert-success">
							<a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
							<strong>Success!</strong> Data Updated successful.
						</div>
						@endif
					</div>
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
								    Edit Testmonials
								</h3>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">

                        <div class="row">
							<div class="col-xl-12 col-lg-12">

							<form class="m-login__form m-form" method="POST" action="{{ route('testmonials.edit', $id) }}">
                                {{ csrf_field() }}
								<div class="form-group m-form__group{{ $errors->has('name') ? ' has-error' : '' }}">
									<label>Name</label>
									<input class="form-control m-input"  id="name" type="text" name="name" value="{{ $data['name'] }}" required>
                                    
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
								<div class="form-group m-form__group{{ $errors->has('description') ? ' has-error' : '' }}">
									<label>Description</label>
									<textarea class="form-control m-input" id="description" require name="description">{{ $data['description'] }}</textarea>		
                                    @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
								<div class="row m-login__form-sub">
									<!-- <div class="col m--align-left m-login__form-left">
										<label class="m-checkbox  m-checkbox--light">
											<input type="checkbox" name="remember">
											Remember me
											<span></span>
										</label>
									</div> --> <!-- id="m_login_signin_submit" -->
								</div>
								<div class="m-login__form-action">
									<button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">
										Edit Testmonial
									</button>
								</div>
							</form>
								
							</div>
						</div>
					</div>
					
				</div>
                
			</div>
            
            
			<footer class="m-grid__item		m-footer " id="footer-content">
                    @include('./layouts.admin.footer')
            </footer>
		</div>
<!-- end:: Page -->

@endsection
