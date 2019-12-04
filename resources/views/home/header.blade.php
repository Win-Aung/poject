<header class="top_panel_wrap top_panel_style_6 scheme_original">
				<div class="top_panel_wrap_inner top_panel_inner_style_6 top_panel_position_over">
					<div class="top_panel_middle">
						<div class="content_wrap">
						@foreach ($settings as $settings)
                  <tr>
                  
                  <!-- <td>{{ $settings->name}}</td> -->
					<td><img src="{{url('/images/'.$settings->image)}}" alt="Cinque Terre" width="50" height="50"></td>
                </tr>

                  @endforeach	
                    <!-- <a href="/" class="navbar-brand"><span><i class="fa fa-home">MY</i></span>HOTEL</a> -->
					<div class="menu_main_wrap">
								<nav class="menu_main_nav_area">
									<ul id="menu_main" class="menu_main_nav">
										<li class="menu-item menu-item-has-children"><a href="admin-login">Admin</a></li>
										<li class="menu-item menu-item-has-children"><a href="home">student_login</a></li>
										<li class="menu-item"><a href="contact">Contact</a></li>
										<li class="bordered menu-item"><a href="form">Online-Register</a></li>
									</ul-->
								</nav>
							</div>
						</div>
					</div>
				</div>
</header>