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
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
									Testmonials
								</h3>
                                <a href="/admin/testmonials/add" class="btn btn-primary">Add Testmonial</a>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">

                        <div class="row">
							<div class="col-xl-12 col-lg-12">
								{{-- \Log::info($data) --}}
								<table id="example11"  class="table" style="width:100%">
        <thead  class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
		   @if(count($data) > 0)
		   @foreach($data as $obj)
            <tr>
                <td>{{ $obj['name'] }}</td>
                <td>{{ $obj['description'] }}</td>
                <td>
					<a href="/admin/testmonials/edit/{{ $obj['id'] }}" class="btn btn-primary">Edit</a>
					<a href="/admin/testmonials/add" class="btn btn-success">Status</a>
				</td>
            </tr>
			@endforeach
			@else
			<tr>
                <td colspan="3" class="text-center">
					<h5>No Records</h5>
				</td>
            </tr>
			@endif
            
        </tbody>
    </table>

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
