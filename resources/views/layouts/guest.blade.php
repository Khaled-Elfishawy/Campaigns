<!DOCTYPE html>
<html class="no-js" lang="en-us">
   <!--<![endif]-->
   <head>
      <title>Riverx Network  | Login Here</title>
      <meta name="description" content="Log In into your NSFX Partners Program Account">
      <meta name="keywords" content="log in, login, enter">
      <meta name="viewport" content="width=device-width">
      <link rel="stylesheet" href="{{url('home')}}/css/9d7c7a490e8f.css" type="text/css" media="all">
      <link rel="shortcut icon" href="favicon.ico">
   </head>
   <body class="gradient">
      <div class="container">
         <div class="row">
            <div class="small-12 medium-10 large-9 xlarge-2 large-centered column">
               <div class="row">
                  <div class="small-12 columns right">

                  </div>
                  <hr>
               </div>
               <div class="row">
                  <div class="small-3 columns"><a href="/dashboard"><img src="{{url('home')}}/images/logo.png"></a></div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="small-12 small-centered columns">
               <div class="row mt20">
                  <div class=" small-12 medium-11 large-9 large-centered columns" style="background:#f9f9f9; border:1px solid #d7d7d7; padding:1.25em 0 0.50em 0; ">
                     <div class="row">
                        <div class="small-12 large-3 column ">
                           <span style="font-family:RobotoRegular; font-size:1.50em; color:#1256a0; ">
                           Login To Your Account
                           </span>
                           <div class="row mt30">
                              <div class="small-12 columns">
                                 <div class="patience" style="display: none"></div>
                                 <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <ul class="relative loginform text-left">
                                       <li><label for="id_username" class="required_field">Email</label></li>
                                       <li class=" relative"><input id="id_username" maxlength="255" name="email" type="text"></li>
                                    </ul>
                                    <ul class="relative loginform text-left">
                                       <li><label for="id_password" class="required_field">Password</label></li>
                                       <li class=" relative"><input id="id_password" name="password" type="password"></li>
                                    </ul>
                                    <div class="row mt30"><input type="submit" value="Login To Your Account" class="small-12  button " style="white-space:normal"></div>
                                 </form>
                              </div>
                            </div>
                        </div>
                        <div class="hide-for-small large-6 column columns">
                           <ul class="large-block-grid-2">
                              <li><img src="{{url('home')}}/images/home_page_top_left.jpg" class="lblue-border" alt="Banner"></li>
                              <li><img src="{{url('home')}}/images/home_page_top_right.jpg" class="lblue-border" alt="Banner"></li>
                              <li><img src="{{url('home')}}/images/home_page_bottom_left.jpg" class="lblue-border" alt="Banner"></li>
                              <li><img src="{{url('home')}}/images/home_page_bottom_right.jpg" class="lblue-border" alt="Banner"></li>
                           </ul>
                        </div>
                        <div class="hide-for-small large-3 column text-center">
                           <span class="slogan">
                           Take advantage  <br> of our partner specials
                           </span>
                           <hr class="width80">
                           <a href="/register/" class="small-12 button register mt30">
                           Join Now
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="small-12 large-8 large-centered columns text-center text-small">
                     <hr>
                     <ul class="inline-list">
                        <li class="bold">
                           RIVERX NETWORK Partners is registered in xxxxxxxxxx xxxxxxxxxx xxxx, xxxxxxxx xxx xxxx, xxxx
                        </li>
                        <li>
                           Company Registration Number: xxxxxxxxxxx
                        </li>
                        <li>
                           MFSA License Number: IS/56519
                        </li>
                     </ul>
                     Use of logos of any financial regulator or authority does not signify endorsement or approval by such authority of the products or services offered by RIVERX NETWORK.<br> 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>