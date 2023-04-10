<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="" name="description">
		<meta content="" name="author">
		<meta name="keywords" content=""/>

		<link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

		<!-- Title -->
		<title>UAT金融 - 主页</title>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

        <!--Font Awesome-->
		<link href="assets/plugins/fontawesome-free/css/all.css" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="assets/css/style.css" rel="stylesheet" />
		<link href="assets/css/color-styles.css" rel="stylesheet" />
		<link href="assets/css/skin-modes.css" rel="stylesheet" />
        <link href="assets/css/dark-style.css" rel="stylesheet" />
		<!-- Custom scroll bar css-->
		<link href="assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- Horizontal css -->
		<link href="assets/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
		<link href="assets/plugins/horizontal-menu/horizontal-menu-dark.css" rel="stylesheet">

		<!-- P-scroll css -->
		<link href="assets/plugins/p-scroll/p-scroll.css" rel="stylesheet" type="text/css">

		<!---Font icons-->
		<link href="assets/plugins/iconfonts/plugin.css" rel="stylesheet" />

		<!-- Sidebar css -->
		<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">
		<link href="assets/css/toastr.min.css" rel="stylesheet" />
	
		
	</head>

	<body class="app dark-mode">

		<!-- Global Loader-->
		<div id="global-loader"><img src="assets/images/svgs/loader.svg" alt="loader"></div>

		<div class="page">
			<div class="page-main">

				<!-- Navbar-->
				<header class="header top-header">
					<!-- Navbar Right Menu-->
					<div class="container">
						<div class="d-flex">
							
							<a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>
							
							<a class="header-brand" href="javascript:;">
								<img alt="logo" class="header-brand-img main-logo" src="assets/images/logo1.png">
								<img alt="logo" class="header-brand-img mobile-logo" src="assets/images/logo2.png">
							</a>
							
							
							<div class="d-flex order-lg-2 ml-auto">
								
								
								
								<button class="navbar-toggler navresponsive-toggler d-sm-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
									aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									&nbsp;
								
								</button>
								<!--Navbar -->
								<!--
								<div class="dropdown">
									<a class="nav-link pr-0 leading-none d-flex" data-toggle="dropdown" href="#">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/5.jpg"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-1">Vanessa Dyer</h5>
												<small class="text-muted">Web Developer</small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-user"></i>Profile</a>									
									
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-power"></i> Log Out</a>
										<div class="dropdown-divider"></div>
										
									</div>
								</div>
								-->
								
							</div>
						</div>
					</div>
				</header>
				

				<!-- Horizontal-Menu -->
				<div class="sticky">
                <div class="horizontal-main hor-menu clearfix">
					<div class="horizontal-mainwrapper container clearfix">
						<nav class="horizontalMenu clearfix">
							<ul class="horizontalMenu-list">
								<li aria-haspopup="true"><a href="javascript:;" class="active"><i class="fe fe-home"></i> 全局 </a></li>
								
								<li aria-haspopup="true"><a href="https://bscscan.com/address/0x9b3b0c76f1f8465451722d17c18fc9f0024bf90b" class="" target="_blank"><i class="fa fa-balance-scale"></i> 合约 </a></li>
								<li aria-haspopup="true"><a href="https://t.me/UATFinance" target="_blank" class=""><i class="fe fe-phone"></i> 电报群 </a></li>
									
								<li aria-haspopup="true"><a href="faq.php" class=""><i class="fe fe-list"></i> 有问有答 </a></li>
								
								
							</ul>
						</nav>
						<!-- Nav End -->
					</div>
				</div>
                </div>
				<!-- Horizontal-Menu End -->

				<div class="container content-area">
					<div class="horizontal-content">

						<!--Page Header-->
						<div class="page-header">
							<h4 class="page-title"><i class="fe fe-home mr-1"></i> 合约统计</h4>
							
						</div>
						<!--page header-->

						<div class="row">
							
							<div class="col-xl-3 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="float-right">
											<span class="mini-stat-icon bg-secondary-transparent"><i class="si si-diamond text-secondary"></i></span>
										</div>
										<div class="dash3">
											<h5 class="text-muted">BNB存入总额</h5>
											<h4 class="num-font font-weight-extrabold" id="investments">0.00</h4>
										</div>
									</div>
								</div>
							</div>										
							
							<div class="col-xl-3 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="float-right">
											<span class="mini-stat-icon bg-secondary-transparent"><i class="si si-handbag text-danger"></i></span>
										</div>
										<div class="dash3">
											<h5 class="text-muted">BNB提现总额</h5>
											<h4 class="num-font font-weight-extrabold" id="withdrawn">0.00</h4>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-xl-3 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="float-right">
											<span class="mini-stat-icon bg-secondary-transparent"><i class="si si-loop text-primary"></i></span>
										</div>
										<div class="dash3">
											<h5 class="text-muted">BNB复投总额</h5>
											<h4 class="num-font font-weight-extrabold" id="reinvested">0.00</h4>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-xl-3 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="float-right">
											<span class="mini-stat-icon bg-secondary-transparent"><i class="si si-organization text-warning"></i></span>
										</div>
										<div class="dash3">
											<h5 class="text-muted">BNB总奖励</h5>
											<h4 class="num-font font-weight-extrabold" id="rewards">0.00</h4>
										</div>
									</div>
								</div>
							</div>
							
							
							
							
						</div>
				
						<div class="row">
							
							<div class="col-xl-3 col-md-6 ">
								<div class="card">
									<div class="card-body">
										<div class="float-right">
											<span class="mini-stat-icon bg-primary-transparent"><i class="si si-wallet text-primary"></i></span>
										</div>
										<div class="dash3">
											<h5 class="text-muted">合约BNB余额</h5>
											<h4 class="font-weight-extrabold num-font" id="contract-balance-bnb">0.00</h4>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-xl-3 col-md-6 ">
								<div class="card">
									<div class="card-body">
										<div class="float-right">
											<span class="mini-stat-icon bg-primary-transparent"><i class="si si-wallet text-primary"></i></span>
										</div>
										<div class="dash3">
											<h5 class="text-muted">合约USDT余额</h5>
											<h4 class="font-weight-extrabold num-font" id="contract-balance-usdt">0.00</h4>
										</div>
									</div>
								</div>
							</div>
							
							
							<div class="col-xl-3 col-md-6 ">
								<div class="card">
									<div class="card-body">
										<div class="float-right">
											<span class="mini-stat-icon bg-primary-transparent"><i class="si si-wallet text-primary"></i></span>
										</div>
										<div class="dash3">
											<h5 class="text-muted">合约USDC余额</h5>
											<h4 class="font-weight-extrabold num-font" id="contract-balance-usdc">0.00</h4>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-xl-3 col-md-6 ">
								<div class="card">
									<div class="card-body">
										<div class="float-right">
											<span class="mini-stat-icon bg-primary-transparent"><i class="si si-wallet text-primary"></i></span>
										</div>
										<div class="dash3">
											<h5 class="text-muted">合约BUSD余额</h5>
											<h4 class="font-weight-extrabold num-font" id="contract-balance-busd">0.00</h4>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					
						<div class="page-header">
							<h4 class="page-title"><i class="fe fe-grid mr-1"></i> 用户详情</h4>
							
						</div>
							
						
						<div class="row ">
							<div class="col-md-12  col-xl-3 features">
								<div class="card feature">
									<div class="card-body h-100 text-center">
									<h5>我的投资</h5>
										<div class="icon icon-shape bg-primary rounded-circle text-white mb-3">
											<i class="fas fa-piggy-bank text-white"></i>
										</div>
										<h2 class="num-font" id="my-deposits">0.00 BNB</h2>
									</div>
								</div>
							</div>
							<div class="col-md-12  col-xl-3 features">
								<div class="card feature">
									<div class="card-body h-100 text-center">
									   <h5>我的提现</h5>
										<div class="icon icon-shape bg-danger rounded-circle text-white mb-3">
											<i class="fas fa-share-square text-white"></i>
										</div>
										<h2 class="num-font" id="my-payouts">0.00 BNB</h2>
									</div>
								</div>
							</div>
							
							<div class="col-md-12  col-xl-3 features">
								<div class="card feature">
									<div class="card-body h-100 text-center">
									   <h5>我的复投</h5>
										<div class="icon icon-shape bg-secondary rounded-circle text-white mb-3">
											<i class="fas fa-share-square text-white"></i>
										</div>
										<h2 class="num-font" id="my-reinvestments">0.00 BNB</h2>
									</div>
								</div>
							</div>
							
							<div class="col-md-12  col-xl-3 features">
								<div class="card feature">
									<div class="card-body h-100 text-center">
									    <h5>我的推荐奖励</h5>
										<div class="icon icon-shape bg-warning rounded-circle text-white mb-3">
											<i class="fas fa-users text-white"></i>
										</div>
										<h2 class="num-font" id="my-rewards">0.00 BNB</h2>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-4 col-lg-12">
								
								<div class="row">
									<div class="col-md-12">
										
										<div class="card">
											<div class="card-header">
												<div class="card-title"><span class="text-success">现在开始！</span> （每天 10%，持续 15 天）</div>
											</div>
											<div class="card-body">
												
												<div class="table-responsive">
												<table class="" style="width:100%;margin-bottom:10px;"><tbody>
													<tr>
														<td style="padding: 2px 10px 10px 0 !important;"><label class="form-label">管理员</label> </td>
														<td style="font-size:14px; font-weight:bold;">
															<input type="text" class="form-control text-muted" id="sp-wallet" value=""/>
														</td>
													</tr>
													
													<tr>
														<td style="padding: 10px 10px 10px 0 !important;"><label class="form-label">我的钱包</label> </td>
														<td style="font-size:16px; font-weight:bold;">
															<input type="text" class="form-control text-warning" readonly id="my-wallet" value=""/>												
														</td>
													</tr>
													
													<tr>
														<td style="padding: 10px 10px 10px 0 !important;"><label class="form-label">代币余额</label> </td>
														<td style="font-size:16px; font-weight:bold;" id="my-balances" class="text-success">
															<select class="form-control select2 " id="cboTokenBalances">
																<!--
																<option value="4">0.0000 BNB</option>
																<option value="0">0.00 USDT</option>
																<option value="1">0.00 USDC</option>
																<option value="2">0.00 BUSD</option>
																-->
															</select>		
														</td>
													</tr>
													</tbody>
												</table>
												</div>
												<div class="form-group">
													<label class="form-label">入金数量</label>
													<div class="input-group">
														<input type="number" id="txtDeposit" name="txtDeposit" class="form-control text-right" placeholder="0.00">
														<span class="input-group-append" style="display:none;" id="display-approve">
															<button class="btn btn-gray" type="button" id="btn-approve">代币授权</button>
														</span>
													</div>
													<p style="margin-top:2px;font-size:11px" class="text-muted"><i>BNB 的最低存款额为 0.015，USDT/USDC/BUSD 的最低存款额为 5.0</i></p>
												</div>
											</div>
											<div class="card-footer text-center">
												<a href="javascript:;" class="btn btn-primary" id="btn-deposit">存款</a>
											</div>
										</div>
								
									</div>
									
									<div class="col-md-12">
										
										<div class="card overflow-hidden bg-gradient-primary text-white">
											<div class="card-body pb-0">
												<div class="float-left">
													<h1 class="mb-3 font-weight-extrabold"><span class="avatar brround mr-3 align-self-center avatar-md cover-image bg-dark-transparent">
														<i class="si si-rocket"></i></span><span class="num-font" id="my-dividends">0.0000</span> BNB</h1>
													<h4 class="mb-3">可用分红</h4>
													
													
													<p>为了这个项目的可持续性，你最多只能从您的分红中提取 50%，其余的将重新投资到你选择的另一个投资计划中。 </p>
													
													<!--
													<div class="row">
														<div class="col-md-12 col-sm-12">
															<select class="form-control select2 " id="cboWithdrawToken">
																<option value="4">Withdraw as BNB</option>
																<option value="0">Withdraw as USDT</option>
																<option value="1">Withdraw as USDC</option>
																<option value="2">Withdraw as BUSD</option>
															</select>													
														</div>
														&nbsp;
														<div class="col-md-12 col-sm-12">
															<a href="javascript:;" class="btn btn-warning" id="withdraw-bnb">
																 Withdraw Dividends
															</a>
														</div>
														
													</div>	

													-->	
												</div>
											</div>
											<!--
											<div class="chart-wrapper overflow-hidden">
												<canvas id="AreaChart1" class="areaChart chart-dropshadow"></canvas>
											</div>
											-->
											<div class="card-footer p-0">
												<div class="row">
													<div class="col-sm-12">
														<div class="description-block">
															<!--
															
															-->
															<a href="javascript:;" class="btn btn-warning" id="btn-withdraw" data-toggle="modal" data-target="#withdrawModal">
																 提取分红
															</a>
														</div>
													</div>
													
													<div class="modal fade" id="withdrawModal" tabindex="-1" role="dialog"  aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="example-Modal3">支付和复投选项</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<form>
																		
																		<div class="text-center">
																			<h1 class="mb-3 font-weight-extrabold">
																				<span class="num-font" id="my-dividends2">0.0000</span> BNB
																			</h1>
																			<h4 class="mb-3">可用分红</h4>
																		</div>
																		
																		
																		<div class="form-group">
																			<label for="recipient-name" class="form-control-label">Contract Source Token :</label>
																			<select class="form-control select2 " id="cboWithdrawToken">
																				
																			</select>			
																		</div>
																			
																		
																		<!--
																		<div class="form-group">
																			<label for="recipient-name" class="form-control-label">Amount : (0.00 by default to withdraw ALL available)</label>
																			<input type="text" class="form-control text-right" id="txtWithdraw" name="txtWithdraw" value="0.00">
																		</div>
																		-->
																		
																		
																		<div class="table-responsive">
																		<table class="table card-table mt-2 mb-2 text-nowrap">
																			<tr>
																				
																				<td>
																					<strong>50% 再投资</strong>
																					<small class="d-block text-muted">@ 11% Daily for 15 Days </small>
																				</td>
																				<td class="align-middle w-1" >
																					<a href="javascript:;" id="plan50" class="btn btn-outline-primary btn-sm ">
																						<span class="si si-like"></span>&nbsp; Select
																					</a>
																				</td>
																			</tr>
																			<tr>
																				
																				<td>
																					<strong>60% Reinvest</strong>
																					<small class="d-block text-muted">@ 12% Daily for 15 Days </small>
																				</td>
																				<td class="align-middle w-1">
																					<a href="javascript:;" id="plan60" class="btn btn-outline-primary btn-sm ">
																						<span class="si si-like"></span>&nbsp; Select
																					</a>
																				</td>
																			</tr>
																			<tr>
																				
																				<td>
																					<strong>70% Reinvest</strong>
																					<small class="d-block text-muted">@ 13% Daily for 15 Days </small>
																				</td>
																				<td class="align-middle w-1" >
																					<a href="javascript:;" id="plan70" class="btn btn-outline-primary btn-sm">
																						<span class="si si-like"></span>&nbsp; Select
																					</a>
																				</td>
																			</tr>
																			<tr>
																				
																				<td>
																					<strong>80% Reinvest</strong>
																					<small class="d-block text-muted">@ 14% Daily for 15 Days </small>
																				</td>
																				<td class="align-middle w-1" >
																					<a href="javascript:;" id="plan80" class="btn btn-outline-primary btn-sm">
																						<span class="si si-like"></span>&nbsp; Select
																					</a>
																				</td>
																			</tr>
																			<tr>
																				
																				<td>
																					<strong>90% Reinvest</strong>
																					<small class="d-block text-muted">@ 15% Daily for 15 Days </small>
																				</td>
																				<td class="align-middle w-1">
																					<a href="javascript:;" id="plan90" class="btn btn-outline-primary btn-sm">
																						<span class="si si-like"></span>&nbsp; Select
																					</a>
																				</td>
																			</tr>
																		
																		</table>
																		</div>
																	</form>
																</div>
																<div class="modal-footer">
																	<div class="text-center">
																		<h5 id="plan-msg"></h5>
																		<button type="button" class="btn btn-warning" id="withdraw">Submit Withdrawal</button>
																		
																		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										
										</div>
								
								
									</div>
									
									<div class="col-md-12">
							
										<div class="card welcome-image overflow-hidden">
											<div class="card-body text-white text-center">
												<!--
												<img src="assets/images/pngs/gift.png" alt="" class="h-7">
												-->
												<h3 class="mt-2 mb-3">推荐以赚取更多利润！</h3>
												<p class="text-white" id="my-referral"></p>
												<a href="javascript:;" class="btn btn-pink" id="copy-link">分享链接</a>
											</div>
										</div>
							
									</div>
								</div>
								
								
								
							
							</div>
							
							<div class="col-xl-8 col-lg-12">
								
								<div class="row">
									<div class="col-md-12">
									
										<div class="card">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">存款记录</h3>
											</div>
												
												
											<div class="table-responsive">
												<table class="table card-table table-vcenter text-nowrap table-primary" >
													<thead  class="bg-primary text-white">
														<tr>
															<th class="text-white" width="5%">#</th>
															<th class="text-white" width="20%" style="text-align:center">日期</th>
															<th class="text-white" width="25%" style="text-align:center">数量</th>
															<th class="text-white" width="15%" style="text-align:center">天数</th>
															<th class="text-white" width="25%" style="text-align:center">返还</th>
														</tr>
													</thead>
													<tbody id="deposits-body">
														<!--
														<tr><th align="center" scope="row">1</th><td align="center">April 4, 2023</td><td align="center">2.50 BNB</td><td>150% in 15 Days</td></tr>												
														-->
													</tbody>
												</table>
											</div>
														
												
										
										</div>
									</div>
									
									<div class="col-md-12">
									
										<div class="card">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">下线</h3>
											</div>
												
												
											<div class="table-responsive">
												<table class="table card-table table-vcenter text-nowrap table-primary" >
													<thead  class="bg-primary text-white">
														<tr>
															<th class="text-white" width="5%">#</th>
															<th class="text-white" width="45%" style="text-align:center">钱包地址</th>
															<th class="text-white" width="20%" style="text-align:center">级别</th>
															<th class="text-white" width="30%" style="text-align:center" >总存款</th>
														</tr>
													</thead>
													<tbody id="downlines-body">
														<!--
														<tr><th align="center" scope="row">1</th><td align="center">0x5092e5d85ec41EAfb25efCCf8Ad12AB96a70feAd</td><td align="center">1</td><td align="right">2.45 BNB</td></tr>												
														-->
													</tbody>
												</table>
											</div>
														
												
										
										</div>
										
									</div>
									
								</div>
							</div>						
							
						</div>
						
						
					</div>

					
					<!--footer-->
					<footer class="footer">
						<div class="container">
							<div class="row align-items-center flex-row-reverse">
								<div class="col-md-12 col-sm-12 text-center">
									版权 © 2023 <a href="javascript:;">UAT金融</a> 版权所有。
								</div>
							</div>
						</div>
					</footer>
					<!-- End Footer-->
				</div>
			</div>
		</div>

		<!-- Back to top -->
		<a href="index.php#top" id="back-to-top"><i class="fas fa-angle-up "></i></a>

		<!--Jquery js -->
		<script src="assets/js/vendors/jquery-3.2.1.min.js"></script>

		<!--Jquery.Sparkline js -->
		<script src="assets/js/vendors/jquery.sparkline.min.js"></script>

		<!--Circle-Progress js -->
		<script src="assets/js/vendors/circle-progress.min.js"></script>

		<!--Jquery.rating js -->
		<script src="assets/plugins/jquery.rating/jquery.rating-stars.js"></script>

		<!--Bootstrap.min js-->
		<script src="assets/plugins/bootstrap/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/side-menu/side-menu.js"></script>

		<!-- Sidemenu-responsive-tabs js-->
		<script src="assets/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js"></script>
		<script src="assets/js/left-menu.js"></script>

		<!--Horizontal js -->
		<script src="assets/plugins/horizontal-menu/horizontal-menu.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

        <!--Sticky JS -->
		<script src="assets/js/sticky.js"></script>

		<!-- Input Mask Js -->
		<script src="assets/plugins/jquery.mask/jquery.mask.min.js"></script>

		<!-- Peitychart Js-->
		<script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
		

		<!-- Chart js -->
		<script src="assets/plugins/chart/chart.bundle.js"></script>
		<script src="assets/plugins/chart/utils.js"></script>

		<!--Counters -->
		<script src="assets/plugins/counters/counterup.min.js"></script>
		<script src="assets/plugins/counters/waypoints.min.js"></script>

		<!-- Sidebar js -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>	
			
	

		<!-- Chart js -->
		<script src="assets/plugins/chart.js/chart.min.js"></script>
		<script src="assets/plugins/chart.js/chart.extension.js"></script>

		<!--Jquery.knob js-->
		<script src="assets/plugins/othercharts/jquery.knob.js"></script>
		<script src="assets/plugins/othercharts/othercharts.js"></script>

				
		
		<!-- Custom js -->
		<script src="assets/js/custom.js"></script>
		<script src="assets/js/index.js"></script>
		
		<script src="assets/js/toastr.min.js"></script>
		<script src="assets/js/web3/web3.js"></script>
		
		<script src="assets/js/web3/abi.js"></script>
		<script src="assets/js/web3/usdtabi.js"></script>
		<script src="assets/js/web3/usdcabi.js"></script>
		<script src="assets/js/web3/busdabi.js"></script>
		<script src="assets/js/web3/contract2.js"></script>	
    <script type="text/javascript">
	var tokenType = -1;
	var planType = 0;
	$(document).ready(function()
    {
   	spAccount = '0x0040473E86141EfD5009e77511d63578D7068cA3';	appPath='https://b.btc36.com/';    	
		
		if (window.ethereum) 
    	{
    		window.ethereum.on('accountsChanged', function (accounts) {
    			defaultAccount = accounts[0]
    			loadContract();
    			loadAccount();	
    		});
    	}
		
    	//$('#txtSpWallet').val(spAccount);
    });
    	
	$(function() {
		
		$('#cboTokenBalances').on('change', function() {
			tokenType = this.value;
			console.log(tokenType);
			if(tokenType=='4'){
				$('#txtDeposit').val( parseFloat(myBNB - 0.0035).toFixed(4) );	
				$('#display-approve').hide();	
			}else if(tokenType=='0'){
				$('#txtDeposit').val(myUSDT);	
				if(allowance_usdt < 100){
				    $('#btn-approve').html('授权 USDT');
					$('#display-approve').show();	
				}else{
					$('#display-approve').hide();	
				}
			}else if(tokenType=='1'){
				$('#txtDeposit').val(myUSDC);
				if(allowance_usdc < 100){
					$('#btn-approve').html('授权 USDC');
					$('#display-approve').show();	
				
				    
				}else{
					$('#display-approve').hide();	
				}
			}else if(tokenType=='2'){
			   
				$('#txtDeposit').val(myBUSD);	
				if(allowance_busd < 100){
				     $('#btn-approve').html('授权 BUSD');
					$('#display-approve').show();	
				}else{
					$('#display-approve').hide();	
				}
			}else{
				tokenType = -1;
				$('#display-approve').hide();	
			}
		});
		
		$('#cboWithdrawToken').on('change', function() {
			tokenType = this.value;
			console.log(tokenType);
			/*
			if(tokenType==4){
				$('#txtAmount').val( parseFloat(myBNB - 0.0022).toFixed(4) );	
			}else if(tokenType==0){
				$('#txtAmount').val(myUSDT);	
			}else if(tokenType==1){
				$('#txtAmount').val(myUSDC);	
			}else if(tokenType==2){
				$('#txtAmount').val(myBUSD);	
			}
			*/
		});
		
		$('#btn-withdraw').click(function(ev) {
			planType = 0;
			$('#plan-msg').html('');
		});
		
		$('#plan50').click(function(ev) {
			planType = 2;
			$('#plan-msg').html('You have selected<br/>50% Payout and 50% Reinvest for a period of 10 days at 16% daily.');
		});
				
		$('#plan60').click(function(ev) {
			planType = 3;
			$('#plan-msg').html('You have selected<br/>40% Payout and 60% Reinvest for a period of 10 days at 17% daily.');
		});
		
		$('#plan70').click(function(ev) {
			planType = 4;
			$('#plan-msg').html('You have selected<br/>30% Payout and 70% Reinvest for a period of 10 days at 18% daily.');
		});
		
		$('#plan80').click(function(ev) {
			planType = 5;
			$('#plan-msg').html('You have selected<br/>20% Payout and 80% Reinvest for a period of 10 days at 19% daily.');
		});
		
		$('#plan90').click(function(ev) {
			planType = 6;
			$('#plan-msg').html('You have selected<br/>10% Payout and 90% Reinvest for a period of 10 days at 20% daily.');
		});
		
		$('#btn-approve').click(function(ev) {
			if(tokenType == -1 || tokenType === '')
			{
				ev.preventDefault();
				return false;
			}else if(tokenType == '0'){
				approve1();
			}else if(tokenType == '1'){
				approve2();
			}else if(tokenType == '2'){
				approve3();
			}
			ev.preventDefault();
		});
		
		$('#btn-deposit').click(function(ev) {
			var amt = $("#txtDeposit");
    		/*	
    		if(spAccount === '')
    		{
				spAccount = "0x0040473E86141EfD5009e77511d63578D7068cA3";
			}			
    		*/
				
    		if(isNaN(parseFloat(amt.val().trim())))
    		{
    			$("#txtDeposit").focus();
    			toastr.warning("Invalid Amount!","",{"timeOut": "3000","positionClass": "toast-top-right"});
    			return false;
    		}	
    		
			if(amt.val() == NaN)
    		{
    			$("#txtDeposit").focus();					
    			toastr.warning("Invalid Amount!","",{"timeOut": "3000","positionClass": "toast-top-right"});
    			return false;
    		}	
    								
    		if(tokenType=='0' && parseFloat(myUSDT) < amt.val())
			{
				$("#txtDeposit").focus();				
    			toastr.warning("Not enough USDT Balance!","",{"timeOut": "3000","positionClass": "toast-top-right"});
    			return false;
			}
			
			if(tokenType=='1' && parseFloat(myUSDC) < amt.val())
			{
				$("#txtDeposit").focus();				
    			toastr.warning("Not enough USDC Balance!","",{"timeOut": "3000","positionClass": "toast-top-right"});
    			return false;
			}
			
			if(tokenType=='2' && parseFloat(myBUSD) < amt.val())
			{
				$("#txtDeposit").focus();				
    			toastr.warning("Not enough BUSD Balance!","",{"timeOut": "3000","positionClass": "toast-top-right"});
    			return false;
			}
			
			if(tokenType=='4' && amt.val() < 0.015)
			{
				$("#txtDeposit").focus();				
    			toastr.warning("Not Enough for Minimum BNB Amount!","",{"timeOut": "3000","positionClass": "toast-top-right"});
    			return false;
			}
			
			if(tokenType <= -1 || tokenType=='-1' || tokenType=='' )
			{
				$("#cboTokenBalances").focus();				
    			toastr.warning("No selected Payment Token!","",{"timeOut": "3000","positionClass": "toast-top-right"});
    			return false;
			}
			
			if(tokenType == 4) {
				investBNB('4', '0', amt.val());
			}else{				
				if(tokenType === '0' || tokenType === '1' || tokenType === '2')
				{
					investTether(tokenType, '0', amt.val());
				}
			}
			
			ev.preventDefault();
    		    		
    	});
		    
		
        $('#withdraw').click(function(ev) {
		         
			if(tokenType == ''){
				toastr.warning("No selected Source Token to get the Payout from.","",{"timeOut": "3000","positionClass": "toast-top-right"});
				$('#cboWithdrawToken').focus();
				ev.preventDefault();
				return false;
			}
			
			if(tokenType=='4' && bnb_balance < dividends){
				toastr.warning("Selected Source Token has no enough funds!","",{"timeOut": "3000","positionClass": "toast-top-right"});
				$('#cboWithdrawToken').focus();
				ev.preventDefault();
				return false;	
			}
			
			if(tokenType=='0' && usdt_balance < dividends){
				toastr.warning("Selected Source Token has no enough funds!","",{"timeOut": "3000","positionClass": "toast-top-right"});
				$('#cboWithdrawToken').focus();
				ev.preventDefault();
				return false;	
			}
			
			if(tokenType=='1' && usdc_balance < dividends){
				toastr.warning("Selected Source Token has no enough funds!","",{"timeOut": "3000","positionClass": "toast-top-right"});
				$('#cboWithdrawToken').focus();
				ev.preventDefault();
				return false;	
			}
			
			if(tokenType=='2' && busd_balance < dividends){
				toastr.warning("Selected Source Token has no enough funds!","",{"timeOut": "3000","positionClass": "toast-top-right"});
				$('#cboWithdrawToken').focus();
				ev.preventDefault();
				return false;	
			}
			
			if(planType <= 1){
				toastr.warning("No selected Reinvestment Plan!","",{"timeOut": "3000","positionClass": "toast-top-right"});
				ev.preventDefault();
				return false;
			}
			
		    if(dividends < 0.01)
			{
				toastr.warning("Not enough for minimum payout!","",{"timeOut": "3000","positionClass": "toast-top-right"});
				ev.preventDefault();
				return false;
			}
			collectDividends(tokenType, planType);	
			ev.preventDefault();
		});
	   
		    
		$('#copy-link').click(function(ev) {
			copy_text($('#my-referral').html());
			ev.preventDefault();
			return false;
		});
	    
	});
	
	 function copy_text(text){		
			// Create a dummy input to copy the string array inside it
			var dummy = document.createElement("input");
			// Add it to the document
			document.body.appendChild(dummy);
			// Set its ID
			dummy.setAttribute("id", "dummy_id");
			// Output the array into it
			document.getElementById("dummy_id").value=text;
			// Select it
			dummy.select();		
			document.execCommand("copy");
			// Remove it as its not needed anymore
			document.body.removeChild(dummy);
			toastr.success("分享链接已复制！","",{"timeOut": "3000","positionClass": "toast-top-right"});
			return false;
	}
	</script>
		
	</body>
</html>