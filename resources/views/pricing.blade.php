@include('header')

<title>产品价格 - 高速网络,企业服务 &amp; 匿名安全 高可用性服务商 | {{$title}}</title>
<meta property="og:title" content="产品价格 - 高速网络,企业服务 &amp; 匿名安全 高可用性服务商 | {{$title}}">
<main id="content" role="main">
	<div class="overflow-hidden">

		<div class="position-relative bg-img-start" style="background-image: url(/assets/svg/components/card-11.svg);">
			<div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2 content-space-b-lg-3">

				<div class="w-md-75 w-lg-50 text-center mx-auto mb-9">
					<h1 class="fw-lighter">选择适合您的订阅</h1>
				</div>


				<div class="d-flex justify-content-center">
					<div class="form-check form-switch form-switch-between">
						<label class="form-check-label">按月</label>
						<input class="js-toggle-switch form-check-input" type="checkbox" checked=""
							data-hs-toggle-switch-options='{
							   "targetSelector": "#pricingCount1, #pricingCount2, #pricingCount3"
							 }'>
						<label class="form-check-label form-switch-promotion">
							按年
							<span class="form-switch-promotion-container">
								<span class="form-switch-promotion-body">
									<svg class="form-switch-promotion-arrow" xmlns="http://www.w3.org/2000/svg" x="0px"
										y="0px" viewbox="0 0 99.3 57" width="48">
										<path fill="none" stroke="#bdc5d1" stroke-width="4" stroke-linecap="round"
											stroke-miterlimit="10" d="M2,39.5l7.7,14.8c0.4,0.7,1.3,0.9,2,0.4L27.9,42">
										</path>
										<path fill="none" stroke="#bdc5d1" stroke-width="4" stroke-linecap="round"
											stroke-miterlimit="10" d="M11,54.3c0,0,10.3-65.2,86.3-50"></path>
									</svg>
									<span class="form-switch-promotion-text">
										<span class="badge bg-primary rounded-pill ms-1">节省 20.00%</span>
									</span>
								</span>
							</span>
						</label>
					</div>
				</div>

				<!-- <div class="d-flex justify-content-center">
					<div class="form-check form-switch form-switch-between">
						<label class="form-check-label form-switch-promotion">
							<span
								class="badge bg-soft-primary text-primary rounded-pill">年费用户享有VIP定制特权|不分等级，仅有流量多少差距</span>

							</span>
							</span>
						</label>
					</div>
				</div> -->

			</div>
		</div>


		<div class="container mt-n5 mt-lg-n10">
			<div class="position-relative zi-1 mb-10">
				<div class="row">
					<div class="col-md mb-3 mb-md-0">

						<div class="card h-100 zi-1">
							<div class="card-header text-center">
								<div class="mb-2">
									<span class="fs-5 align-top text-dark fw-semi-bold">¥</span>
									<!-- <span id="pricingCount1" class="fs-1 text-dark fw-semi-bold">6</span> -->
									<span id="pricingCount1" class="fs-1 text-dark fw-semi-bold" data-hs-toggle-switch-item-options='{
										"min": 6,
										"max": 4
									  }'>4</span>
									<span>.00/月起</span>
								</div>
								<h3 class="card-title">Starter</h3>
								<p class="card-text">小流量订阅计划</p>
							</div>
							<div class="card-body d-flex justify-content-center py-0">

								<ul class="list-checked list-checked-soft-bg-primary">
									<li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 全球Net节点</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 每日节点自动审查更新
									</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 全解锁流媒体平台</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i>
										全线Shadowsocks协议</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 45GB 流量/月</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 适用 节点可用性保证
									</li>
									<li class="mb-2"><i class="bi bi-x-circle-fill text-danger"></i> 不适用 退款保障协议</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 售后支持：客服及工单
									</li>

								</ul>

							</div>
							<div class="card-footer text-center">
								<div class="d-grid mb-2">
									<a href="/user#/register" class="btn btn-soft-primary btn-transition">注册购买</a>
								</div>
							</div>
						</div>

					</div>

					<div class="col-md mb-3 mb-md-0">

						<div class="card h-100 zi-1">
							<div class="card-header text-center">
								<div class="mb-2">
									<span class="fs-5 align-top text-dark fw-semi-bold">¥</span>
									<!-- <span id="pricingCount3" class="fs-1 text-dark fw-semi-bold">10</span> -->
									<span id="pricingCount3" class="fs-1 text-dark fw-semi-bold" data-hs-toggle-switch-item-options='{
										"min": 10,
										"max": 8
									  }'>8</span>
									<span>.00/月起</span>
								</div>
								<h3 class="card-title">Elite</h3>
								<p class="card-text">中流量订阅计划</p>
							</div>
							<div class="card-body d-flex justify-content-center py-0">

								<ul class="list-checked list-checked-soft-bg-primary">
									<li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 全球Net节点
									</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 每日节点自动审查更新
									</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 全解锁流媒体平台<i
											class="bi bi-exclamation-circle" data-bs-toggle="tooltip"
											data-bs-html="true" title="Netflix / Hulu / HBO / BBC / Spotify 等"></i></li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 全线Shadowsocks
										协议</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 150GB 流量/月
									</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 适用 节点可用性保证
									</li>
									<li class="mb-2"><i class="bi bi-x-circle-fill text-danger"></i> 不适用 退款保障协议</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 售后支持：客服及工单
									</li>
								</ul>

							</div>
							<div class="card-footer text-center">
								<div class="d-grid mb-2">
									<a href="/user#/register" class="btn btn-soft-primary btn-transition">注册购买</a>
								</div>
							</div>
						</div>

					</div>

					<div class="col-md mb-3 mb-md-0">

						<div class="card bg-primary h-100 zi-1">
							<div class="card-header text-center">
								<div class="text-white mb-2">
									<span class="fs-5 align-top fw-semi-bold">¥</span>
									<!-- <span id="pricingCount2" class="fs-1 fw-semi-bold">18</span> -->
									<span id="pricingCount2" class="fs-1 fw-semi-bold" data-hs-toggle-switch-item-options='{
										"min": 18,
										"max": 16
									  }'>16</span>
									<span>.00/月起</span>
								</div>
								<h3 class="card-title text-white">Premium</h3>
								<p class="card-text text-white-70">大流量订阅计划</p>
							</div>
							<div class="card-body d-flex justify-content-center py-0">

								<ul class="list-checked list-checked-soft-bg-light">
									<li class="mb-2 text-white"><i class="bi bi-check-circle-fill"></i> 全球Net节点</li>
									<li class="mb-2 text-white"><i class="bi bi-check-circle-fill"></i> 每日节点人工审查更新</li>
									<li class="mb-2 text-white"><i class="bi bi-check-circle-fill"></i> 全解锁流媒体平台 <i
											class="bi bi-exclamation-circle" data-bs-toggle="tooltip"
											data-bs-html="true" title="Netflix / Hulu / HBO / BBC / Spotify 等"></i></li>
									<li class="mb-2 text-white"><i class="bi bi-check-circle-fill"></i>全线Shadowsocks 协议
									</li>
									<li class="mb-2 text-white"><i class="bi bi-check-circle-fill"></i> 300GB 流量/月</li>
									<li class="mb-2 text-white"><i class="bi bi-check-circle-fill"></i> 适用 节点可用性保证</li>
									<li class="mb-2 text-white"><i class="bi bi-x-circle-fill text-danger"></i> 不适用
										退款保障协议</li>
									<li class="mb-2 text-white"><i class="bi bi-check-circle-fill"></i> 全售后支持</li>

								</ul>

							</div>
							<div class="card-footer text-center">
								<div class="d-grid mb-2">
									<a href="/user#/register" class="btn btn-light btn-transition">注册购买</a>
								</div>
							</div>
						</div>

					</div>

					<div class="col-md mb-3 mb-md-0">

						<div class="card h-100 zi-1">
							<div class="card-header text-center">
								<div class="mb-2">
									<span class="fs-5 align-top text-dark fw-semi-bold">¥</span>
									<span class="fs-1 text-dark fw-semi-bold">50</span><span>.00/用完为止</span>
								</div>
								<h3 class="card-title">Unlimited Time</h3>
								<p class="card-text">不限时流量套餐</p>
							</div>
							<div class="card-body d-flex justify-content-center py-0">

								<ul class="list-checked list-checked-soft-bg-primary">
									<li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 可付费定制全球线路</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 无限制时间
									</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 不限时400G流量</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 专属多对一售后</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 24小时客服服务</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 全球可定制任意位置IP
									</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 不限制设备和流量</li>
									<li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 特殊时期保证 <i
											class="bi bi-exclamation-circle" data-bs-toggle="tooltip"
											data-bs-html="true" title="可另外单独付费对接独享节点，每日人工检查节点，高sla保证"></i></li>
								</ul>

							</div>
							<div class="card-footer text-center">
								<div class="d-grid mb-2">
									<a href="/user#/register" class="btn btn-soft-primary btn-transition">注册购买</a>
								</div>
							</div>
						</div>

					</div>

				</div>


				<figure class="position-absolute bottom-0 start-0 mb-n7 ms-n7" style="width: 9rem;">
					<svg viewBox="0 0 522 504" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path opacity="0.5"
							d="M332 504H510.4C516.8 504 522 498.8 522 492.4V314C522 209.1 436.9 124 332 124C227.1 124 142 209.1 142 314C142 418.9 227.1 504 332 504Z"
							fill="#00C9A7" />
						<path
							d="M190 380H11.6C5.2 380 0 374.8 0 368.4V190C0 85.1 85.1 0 190 0C294.9 0 380 85.1 380 190C380 294.9 294.9 380 190 380Z"
							fill="#377dff" />
					</svg>
				</figure>
				<figure class="position-absolute top-0 end-0 mt-n8 me-n8" style="width: 10rem;">
					<img class="img-fluid" src="/assets/svg/components/dots-lg.svg" alt="Image Description">
				</figure>

			</div>

			<div class="text-center">
				<div class="card card-info-link card-sm">
					<div class="card-body">
						想要查看更多订阅？ <a class="card-link ms-2" href="/user#/plan">点击这里 <span
								class="bi-chevron-right small ms-1"></span></a>
					</div>
				</div>
			</div>

		</div>

	</div>

	<div class="container content-space-2 content-space-lg-3">

		<div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
			<h2>产品对比</h2>
		</div>


		<div class="table-responsive-lg w-lg-auto mx-lg-auto">
			<table class="table table-lg table-striped table-borderless table-nowrap table-vertical-border-striped">
				<thead class="table-text-center">
					<tr>
						<th scope="col" style="width: 40%;"></th>
						<th scope="col" style="width: 20%;">
							<span class="d-block">小流量</span>
							<span class="d-block text-muted small">¥6.00/月起</span>
						</th>
						<th scope="col" style="width: 20%;">
							<span class="d-block">中流量</span>
							<span class="d-block text-muted small">¥10.00/月起</span>
						</th>
						<th scope="col" style="width: 20%;">
							<span class="d-block">大流量 <span
									class="badge bg-warning text-dark rounded-pill ms-1">Hot</span></span>
							<span class="d-block text-muted small">¥18.00/月起</span>
						</th>
						<th scope="col" style="width: 20%;">
							<span class="d-block">不限时</span>
							<span class="d-block text-muted small">¥50.00/月起</span>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row" class="text-dark">流媒体解锁</th>
						<td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
						<td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
						<td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
						<td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
					</tr>
					<tr>
						<th scope="row" class="text-dark">用户限制</th>
						<td class="table-text-center">∞</td>
						<td class="table-text-center">∞</td>
						<td class="table-text-center">∞</td>
						<td class="table-text-center">∞</td>
					</tr>
					<tr>
						<th scope="row" class="text-dark">设备限制</th>
						<td class="table-text-center">∞</td>
						<td class="table-text-center">∞</td>
						<td class="table-text-center">∞</td>
						<td class="table-text-center">∞</td>
					</tr>
					<tr>
						<th scope="row" class="text-dark">网络节点</th>
						<td class="table-text-center">全部</td>
						<td class="table-text-center">全部</td>
						<td class="table-text-center">全部+</td>
						<td class="table-text-center">全部+</td>
					</tr>
					<tr>
						<th scope="row" class="text-dark">BGP 优化接入</th>
						<td class="table-text-center"><span
								class="badge bg-soft-danger text-danger rounded-pill">不可用</span></td>
						<td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
						<td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
						<td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
					</tr>
					<tr>
						<th scope="row" class="text-dark">多入口</th>
						<td class="table-text-center"><span
								class="badge bg-soft-danger text-danger rounded-pill">不可用</span></td>
						<td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
						<td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
						<td class="table-text-center"><i class="bi-check-circle text-success me-2"></i></td>
					</tr>
					<tr>
						<th scope="row" class="text-dark">流量限制</th>
						<td class="table-text-center">45GB/月</td>
						<td class="table-text-center">150GB/月</td>
						<td class="table-text-center">300GB/月</td>
						<td class="table-text-center">400GB永久</td>
					</tr>
					<tr>
						<th scope="row" class="text-dark">客服响应时间</th>
						<td class="table-text-center">及时响应</td>
						<td class="table-text-center">及时响应</td>
						<td class="table-text-center">及时响应</td>
						<td class="table-text-center">全天响应</td>
					</tr>
					<tr>
						<th scope="row" class="text-dark">可选服务方式</th>
						<td class="table-text-center"><span
								class="badge bg-soft-warning text-warning rounded-pill">仅限文字交流</span></td>
						<td class="table-text-center"><span
								class="badge bg-soft-primary text-primary rounded-pill">收费远程协助</span></td>
						<td class="table-text-center"><span
								class="badge bg-soft-primary text-primary rounded-pill">收费远程协助</span></td>
						<td class="table-text-center"><span
								class="badge bg-soft-primary text-primary rounded-pill">收费远程协助</span></td>
					</tr>
					<tr>
						<th scope="row" class="text-dark">Shadowrocket账户</th>
						<td class="table-text-center"><span
								class="badge bg-soft-primary text-primary rounded-pill">年付特权</span></td>
						<td class="table-text-center"><span
								class="badge bg-soft-primary text-primary rounded-pill">年付特权</span></td>
						<td class="table-text-center"><span
								class="badge bg-soft-primary text-primary rounded-pill">年付特权</span></td>
						<td class="table-text-center"><span
								class="badge bg-soft-primary text-primary rounded-pill">年付特权</span></td>
					</tr>					
					<!-- <tr>
						<th scope="row" class="text-dark">Shadowrocket</th>
						<td class="table-text-center"><i class="bi bi-hourglass-bottom text-success me-2"></i></td>
						<td class="table-text-center"><i class="bi bi-hourglass-bottom text-success me-2"></i></td>
						<td class="table-text-center"><i class="bi bi-hourglass-bottom text-success me-2"></i></td>
						<td class="table-text-center"><i class="bi bi-hourglass-bottom text-success me-2"></i></td>
					</tr> -->
					<tr>
						<th scope="row" class="text-dark"></th>
						<td class="table-text-center"><a href="/user#/plan"
								class="btn btn-soft-dark btn-sm btn-transition">立即订阅</a></td>
						<td class="table-text-center"><a href="/user#/plan"
								class="btn btn-soft-dark btn-sm btn-transition">立即订阅</a></td>
						<td class="table-text-center"><a href="/user#/plan"
								class="btn btn-primary btn-sm btn-transition">立即订阅</a></td>
						<td class="table-text-center"><a href="/user#/plan"
								class="btn btn-soft-dark btn-sm btn-transition">立即订阅</a></td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>


	<div class="container content-space-2 content-space-lg-2">

		<div class="w-md-75 w-lg-50 text-center mx-lg-auto mb-5 mb-md-9">
			<h2>常见问题</h2>
		</div>

		<div class="row justify-content-md-center">
			<div class="col-sm-6 col-lg-5 mb-3 mb-md-5">
				<h4>我该如何购买订阅？</h4>
				<p>您需要先在 {{$title}} 上注册一个账户，然后直接购买新订阅即可。您可以通过支付宝国际、虚拟货币、信用卡向我们付款。对于国际客户，您还可以联系客服，通过
					Paypal、国际信用卡（MasterCard 和 Visa）付款。收款方可能会向您收取一定的手续费用。</p>
			</div>

			<div class="col-sm-6 col-lg-5 mb-3 mb-md-5">
				<h4>每个人可以购买多少个订阅？</h4>
				<p>每个账户限制只能保有 1 个订阅。如果您需要开通多个订阅，您可以注册多个账户进行购买。</p>
			</div>

			<div class="col-sm-6 col-lg-5 mb-3 mb-md-5">
				<h4>我可以随时变更订阅吗？</h4>
				<p>是的，您可以随时变更订阅，老套餐的剩余订阅时长与流量会直接清零。很抱歉，我们不得不这样，为防止滥用。</p>
			</div>

			<div class="col-sm-6 col-lg-5 mb-3 mb-md-5">
				<h4>我该如何续费订阅？</h4>
				<p>您可在用户面板中，点击「我的订阅」->「操作」中的续费按钮，随时续订您当前已开通的订阅。注意对当前订阅续费并不能重置您的当月使用流量，如果您的使用流量超出预期，您可以选择付费重置流量，或等待订单日自动重置流量。
				</p>
			</div>

			<div class="col-sm-6 col-lg-5 mb-3 mb-md-5">
				<h4>我的账户余额可以用来干什么？</h4>
				<p>您的账户余额可以用于支付订阅续期费用、重置流量、购买新订阅，但账户余额无法用于提现，包括但不限于 Paypal、支付宝、微信等。</p>
			</div>

			<div class="col-sm-6 col-lg-5 mb-3 mb-md-5">
				<h4>我可以申请退款吗？</h4>
				<p>基于防滥用原则，我们尚不支持退款。但您可以要求我们将您当前的剩余订阅按比例退款至余额账户中。</p>
			</div>

			<div class="col-sm-6 col-lg-5 mb-3 mb-md-5">
				<h4>我可以将订阅分享给他人使用吗？</h4>
				<p>基于防滥用原则，您购买的订阅默认仅允许您自己使用，家庭版、团队版和企业版订阅请留意订阅介绍中规定的使用人数。无论哪种订阅，您都不可以将订阅合租、转借、泄露、二次销售给他人。</p>
			</div>

			<div class="col-sm-6 col-lg-5 mb-3 mb-md-5">
				<h4>我何时才能重置使用流量？</h4>
				<p>除不支持自动重置使用流量的订阅外，使用流量均会在订单日自动重置。您也可以随时在用户面板中重置您的使用流量，已使用流量将被完全清空。流量费用将按照订阅月费用的 9 折收取。不限重置次数。</p>
			</div>

			<div class="col-sm-6 col-lg-5 mb-3 mb-md-5">
				<h4>我可以在多个设备上使用吗？</h4>
				<p>您理论可以在无限台设备上使用，目前发展阶段不考虑限制用户设备数量。</p>
			</div>

			<div class="col-sm-6 col-lg-5 mb-3 mb-md-5">
				<h4>订阅该如何使用？</h4>
				<p>您可以参考我们的使用文档，配置相应的客户端使用您的订阅。这些客户端及使用文档均可在国际互联网上轻松找到，建议您在购买订阅前先阅读客户端使用文档。我们恕不对客户端提供任何免费客户支持，我们在向您提供一对一远程协助之前，可能会（按次）向您收取相应的费用。
				</p>
			</div>


			<div class="text-center">
				<div class="card card-info-link card-sm">
					<div class="card-body">
						想要查看更多问题？ <a class="card-link ms-2" href="./faq ">点击这里 <span
								class="bi-chevron-right small ms-1"></span></a>
					</div>
				</div>
			</div>

		</div>

	</div>

</main>


@include('footer')