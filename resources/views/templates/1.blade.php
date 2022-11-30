<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<title>CFD</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="{{url('template/1')}}/css2" rel="stylesheet">
		<link rel="stylesheet" href="{{url('template/1')}}/landing.css">
		<script src="{{url('template/1')}}/jquery.min.js.download"></script>
		<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="{{url('template/1')}}/jquery.uniform.min.js.download"></script>
		<script src="{{url('template/1')}}/dialingCodeStaticPage.js.download"></script>
		<script src="{{url('template/1')}}/emptyLandingValidation.js.download"></script>
		<script src="{{url('template/1')}}/jquery.alphanumeric.pack.js.download"></script>
	<style type="text/css">#_copy{align-items:center;background:#4494d5;border-radius:3px;color:#fff;cursor:pointer;display:flex;font-size:13px;height:30px;justify-content:center;position:absolute;width:60px;z-index:1000}#select-tooltip,#sfModal,.modal-backdrop,div[id^=reader-helper]{display:none!important}.modal-open{overflow:auto!important}._sf_adjust_body{padding-right:0!important}.super_copy_btns_div{position:fixed;width:154px;left:10px;top:45%;background:#e7f1ff;border:2px solid #4595d5;font-weight:600;border-radius:2px;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;z-index:5000}.super_copy_btns_logo{width:100%;background:#4595d5;text-align:center;font-size:12px;color:#e7f1ff;line-height:30px;height:30px}.super_copy_btns_btn{display:block;width:128px;height:28px;background:#7f5711;border-radius:4px;color:#fff;font-size:12px;border:0;outline:0;margin:8px auto;font-weight:700;cursor:pointer;opacity:.9}.super_copy_btns_btn:hover{opacity:.8}.super_copy_btns_btn:active{opacity:1}</style><link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin="true"><link rel="preconnect" href="https://fonts.gstatic.com/"><link rel="stylesheet" href="{{url('template/1')}}/css2(1)"></head>
	<body class="rtl-page" _c_t_common="1" cz-shortcut-listen="true">
		<div id="wrapper">
			<header>
				<div class="main-holder">
					<h1 class="logo"><a href="#">CFD</a></h1>
				</div>
			</header>
			<main>
				<div class="intro">
					<div class="main-holder">
						<div class="d-flex-md">
							<div class="text">
								<h2>دﻋﻮه ﻟﺤﻀﻮر دورة ﻣﺠﺎﻧﺎ واﻟﺤﺼﻮل 
								 ﻋﻠﻰ ﻣﺒﻠﻎ ﺣﻘﻴﻘﻲ ﻟﻠﺘﺪرﻳﺐ</h2>
								<p>دورة اﻟﺘﺪاول ﺑﺎﺣﺘﺮاﻓﻴﻪ ﻓﻲ ﺳﻮق اﻟﻌﻤﻠﺎت, اﻟﺴﻠﻊ واﻟﺎﺳﻬﻢ اﻟﻤﺤﻠﻴﻪ ﻣﻦ ﻗﺒﻞ اﻟﻤﺤﻠﻞ <br class="visible-xl visible-lg">
								اﻟﻔﻨﻲ ﻓﺮﻳﺪ اﻟﻬﺎﺷﻤﻲ, ذو ﺧﺒﺮه اﻛﺜﺮ ﻣﻦ 13 ﺳﻨﻪ ﻓﻲ اﺳﻮاق اﻟﻤﺎل<br class="visible-xl visible-lg">
								وﺣﺎﺻﻞ ﻋﻠﻰ ﺷﻬﺎداه ﻋﺎﻟﻤﻴﻪ ﻓﻲ ﻫﺬا اﻟﺎﺧﺘﺼﺎص.</p>
							</div>
							<div class="form-hold">
								<div class="ta-center">
									<h2>ﺳﺠﻞ ﻫﻨﺎ اﻟﺎن</h2>
									@if (session('success'))
									    <div class="col-sm-12">
									        <div class="alert  alert-success alert-dismissible fade show" role="alert">
									            {{ session('success') }}
									        </div>
									    </div>
									@endif									
								</div>
								<form class="form" id="actionForm" method="post" action="{{url('lead/create')}}">
									@csrf
									<input type="hidden" name="campaign" value="{{$campaign->id}}">
									<fieldset>
										<div class="row">
											<input type="text" required placeholder="اﻟﺎﺳﻢ اﻟﺎول" id="FirstName" name="FirstName">
										</div>
										<div class="row">
											<input type="text" required placeholder="اﺳﻢ اﻟﻌﺎﺋﻠﻪ" id="LastName" name="LastName">
										</div>
										 
										<div class="row">
											<input type="text" required placeholder="اﻟﺒﺮﻳﺪ اﻟﺎﻟﻜﺘﺮوﻧﻲ" id="Email" name="Email">
										</div>
										<div class="row">
											<input type="text" required placeholder="رﻗﻢ اﻟﻬﺎﺗﻒ" id="phone" name="PhoneNumber">
										</div>
										<!-- <div class="row">
											<div class="radio-check">
												<input type="checkbox" checked="checked" name="IsTermsAccepted" id="IsTermsAccepted" >
												<label for="">I agree with <a href="#">Terms and Conditions</a></label>
											</div>
										</div> -->
										<button type="submit" class="button btn-block" >سجل الأن</button>
										<span class="error" id="Error" style="display:none">Error</span>
										<input type="hidden" name="Country" id="Country" value="EG">
										<input type="hidden" checked="checked" name="IsTermsAccepted" id="IsTermsAccepted">										
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="target">
					<div class="main-holder">
						<div class="d-flex-lg flex-row-reverse align-items-cente">
							<div class="text">
								<h2>اﻟﻔﺌﺔ اﻟﻤﺴﺘﻬﺪﻓﺔ</h2>
								<ul class="list">
									<li>اﻟﻤﺘﺪاوﻟﻴﻦ اﻟﺠﺪد.</li>
									<li>ﻣﺘﺪاوﻟﻲ اﻟﺄﺳﻮاق اﻟﻤﺎﻟﻴﺔ ﺑﺸﻜﻞ ﻋﺎم</li>
									<li>اﻟﺮاﻏﺒﻴﻦ ﻓﻲ اﻛﺘﺸﺎف اﺳﺘﺮاﺗﻴﺠﻴﺎت ﺗﺪاول ﺟﺪﻳﺪة وﻧﺎﺟﺤﺔ.</li>
									<li>اﻟﻤﺘﺪاوﻟﻴﻦ اﻟﺮاﻏﺒﻴﻦ ﻓﻲ ﺗﻄﻮﻳﺮ ﻣﻬﺎراﺗﻬﻢ ﻓﻲ اﻟﺄﺳﻮاق اﻟﻤﺎﻟﻴﺔ</li>
								</ul>
								<a href="#">ﺳﺠﻞ اﻟﺎن ﻣﺠﺎﻧﺎ</a>
							</div>
							<div class="image ta-center">
								<div>
									<img src="{{url('template/1')}}/img01.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="course">
					<div class="main-holder">
						<div class="ta-center-xl ta-center-lg ta-center-md">
							<h2>ﻣﺎذا ﺳﺘﺤﺼﻞ<br> ﻋﻠﻴﻪ ﺑﻌﺪ اﻟﺪورة؟</h2>
						</div>
						<div class="items d-flex-sm">
							<div class="item">
								<i class="icon-analytics"><span>&nbsp;</span></i>
								<p>اﻟﺘﺪرﻳﺐ ﻋﻠﻰ ﻣﻨﺼﺔ ﺗﺪاول<br> ﻣﺮﺧﺼﻪ اوروﺑﻴﻪ</p>
							</div>
							<div class="item">
								<i class="icon-handshake"><span>&nbsp;</span></i>
								<p>ﻣﻌﺮﻓﺔ ﻧﻘﻄﺔ اﻟﺪﺧﻮل واﻟﺨﺮوج<br> ﻣﻦ اﻟﺼﻔﻘﻪ</p>
							</div>
							<div class="item">
								<i class="icon-profit"><span>&nbsp;</span></i>
								<p>ﻓﻬﻢ ﺣﻜﺮة اﻟﺴﻮق اﻟﻤﺎﻟﻲ</p>
							</div>
							<div class="item">
								<i class="icon-trade"><span>&nbsp;</span></i>
								<p>ﻗﺮاﺋﻪ ﺻﺤﻴﺤﻪ ﻟﻠﺮﺳﻢ اﻟﺒﻴﺎﻧﻲ</p>
							</div>
							<div class="item">
								<i class="icon-money"><span>&nbsp;</span></i>
								<p>اﻟﺤﺼﻮل ﻋﻠﻰ 100 دوﻟﺎر ﻓﻲ ﺣﺴﺎب<br class="visible-xs"> ﺗﺪاول ﺣﻘﻴﻘﻲ ﻟﺘﻄﺒﻖ اﻟﺎﺳﺘﺮاﺗﻴﺠﻴﻪ<br class="visible-xs"> اﻟﺘﻲ ﺳﻮف ﺗﺘﻌﻠﻤﻬﺎ.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="lectures">
					<div class="main-holder ta-center">
						<p>ﻫﺬه اﻟﻤﺤﺎﺿﺮات ﻣﺠﺎﻧﻴﺔ ﻟﺘﺜﻘﻴﻒ اﻟﻤﺠﺘﻤﻊ اﻟﻌﺮﺑﻲ، وﻧﺤﻦ ﻧﺸﺠﻌﻚ ﺑﺸﺪة ﻟﺤﻀﻮر ﻫﺬه </p>
						<p>اﻟﻤﺤﺎﺿﺮات واﻟﺎﻃﻠﺎع ﻋﻠﻰ أﻫﻢ ﻣﺴﺘﺠﺪات ﻫﺬا اﻟﻨﻮع ﻣﻦ اﻟﺘﺠﺎرة.</p>
					</div>
				</div>
			</main>
			<footer>
				<div class="footer-holder">
					<div class="footer-frame">
						<div class="footer-main">
							<div class="main-holder ta-center">
								<strong class="logo"><a href="#">CFD</a></strong>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	
	<script src="{{url('template/1')}}/jquery.min.js.download"></script>
	<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="{{url('template/1')}}/jquery.uniform.min.js.download"></script>
	<script src="{{url('template/1')}}/dialingCodeStaticPage.js.download"></script>
	<script src="{{url('template/1')}}/emptyLandingValidation.js.download"></script>
	<script src="{{url('template/1')}}/jquery.alphanumeric.pack.js.download"></script>
</body></html>