@extends('layouts.admin.beforeloginapp')

@section('content')
<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url({{ asset('assets/app/media/img//bg/bg-2.jpg')}});">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="javascript:;">
								<img src="{{ asset('assets/demo/default/media/img/logo/fiststep_logo.png') }}">
							</a>
						</div>

						<div class="m-login__forget-password" style="display:block;">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Forgotten Password ?
								</h3>
								<div class="m-login__desc">
									Enter your email to reset your password:
                                </div>
                                
                                <div class="alert alert-danger alert-dismissible" style="display:none;" id="message-danger">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                </div>

                                <div class="alert alert-success alert-dismissible" style="display:none;"  id="message-success">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                </div>

							</div>
							<form class="m-login__form m-form" method="POST">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
										Request
									</button>
									&nbsp;&nbsp;
									<button onClick="window.location.href='/admin'" id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">
										Cancel
									</button>
								</div>
							</form>
						</div> 
						<!-- <div class="m-login__account">
							<span class="m-login__account-msg">
								Don't have an account yet ?
							</span>
							&nbsp;&nbsp;
							<a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">
								Sign Up
							</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
@endsection
