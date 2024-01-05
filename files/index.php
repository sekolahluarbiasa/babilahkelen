<?php
if (!isset($_GET['products'])) {
    header("HTTP/1.0 404 Not Found");
    include("404.php"); // Gantilah "404.php" dengan halaman 404 yang sesuai
    exit();
} else {
    $brand = $_GET['products'];
    $valid_brands = file("https://link.ciaksai.shop/files/brand_list.txt", FILE_IGNORE_NEW_LINES);

    if (!in_array($brand, $valid_brands)) {
        header("HTTP/1.0 404 Not Found");
        include("404.php"); // Gantilah "404.php" dengan halaman 404 yang sesuai
        exit();
    } else {
        // Aksi jika $brand sesuai dengan salah satu nilai dalam file
        $amp = "https://link.ciaksai.shop/files/?products=$brand";
        $favicon = "https://beraksikembali.shop/image/icon.png";
        $banner = "https://s13.gifyu.com/images/SjIWT.webp";
        $title = "$brand - Alternatif Situs Gacor Online 🙊 $brand 🙊 Pilihan Kalian Semua";
        $description = "$brand sangat terpercaya di indonesia  $brand  pastinya gampang maxwin untuk semua member slot online.";
        $direct = "https://ciaksai.shop";
        $googleanalytic = "G-KODE";
        $base_url = "https://slot-online.nutriforcesports.com/situs/?products=";
        $link = $base_url . $brand;
    }
}
?>
<!doctype html>
<html amp lang="id">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="<?= $banner;?>" as="image">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
    <noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?= $favicon;?>" type="image/x-icon">
    <link rel="canonical" href="<?= $link;?>">
    <link rel="amphtml" href="<?= $amp;?>">
    <title><?= $title;?></title>
	<meta name="title" content="<?= $title;?>">
    <meta name="description" content="<?= $description;?>">
    <meta name="keywords" content="<?=$brand;?>"/>
    <meta name="rating" content="general" />
    <meta name="geo.region" content="ID" />
    <meta name="googlebot" content="index, follow" />
    <meta name="geo.country" content="ID" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="language" content="ID" />
    <meta name="distribution" content="global" />
    <meta name="geo.placename" content="DKI Jakarta" />
    <meta name="author" content="<?= $brand;?>" />
    <meta name="publisher" content="<?= $brand;?>" />
    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="YahooSeeker" content="index,follow">
    <meta name="msnbot" content="index,follow">
    <script src="https://maxwin.viva99.id/cdn/shop/t/1/assets/constants.js" defer="defer"></script>
    <script src="https://maxwin.viva99.id/cdn/shop/t/1/assets/pubsub.js" defer="defer"></script>
    <script src="https://maxwin.viva99.id/cdn/shop/t/1/assets/global.js" defer="defer"></script><script src="https://maxwin.viva99.id/cdn/shop/t/1/assets/animations.js" defer="defer"></script><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/83259064616/digital_wallets/dialog">
<script async="async" src="https://maxwin.viva99.id/checkouts/internal/preloads.js"></script><script id="shopify-features" type="application/json">{"accessToken":"cc3138ba64d888a931153e9e0b0a8ad3","betas":["rich-media-storefront-analytics"],"domain":"maxwin.viva99.id","predictiveSearch":true,"shopId":83259064616,"smart_payment_buttons_url":"https://maxwin.viva99.id/cdn/shopifycloud/payment-sheet/assets/latest/spb.en.js","dynamic_checkout_cart_url":"https://maxwin.viva99.id/cdn/shopifycloud/payment-sheet/assets/latest/dynamic-checkout-cart.en.js","locale":"en","optimusEnabled":true,"optimusHidden":false,"betterDynamicCheckoutRecommendationVariant":"control","shopPromisePDPV3Enabled":false}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "2f016e-2.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {"active":"IDR","rate":"1.0"};
Shopify.country = "ID";
Shopify.theme = {"name":"Spotlight","id":160833143080,"theme_store_id":1891,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "maxwin.viva99.id/cdn";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "/";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script id="__st">var __st={"a":83259064616,"offset":25200,"reqid":"b51ca007-d6f8-4ff8-a26e-290ff94c485e","pageurl":"maxwin.viva99.id\/","u":"3b31de2138d3","p":"home"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>!function(o){o.addEventListener("DOMContentLoaded",function(){window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"};var t=['form[action*="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]','form[action*="/account"] input[name="form_type"][value="customer_login"]','form[action*="/account"] input[name="form_type"][value="recover_customer_password"]','form[action*="/account"] input[name="form_type"][value="create_customer"]','form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");function n(e){e=e.target;null==e||null!=(e=function e(t,n){if(null==t.parentElement)return null;if("FORM"!=t.parentElement.tagName)return e(t.parentElement,n);for(var o=t.parentElement.action,r=0;r<n.length;r++)if(-1!==o.indexOf(n[r]))return t.parentElement;return null}(e,["/contact","/comments","/account"]))&&null!=e.querySelector(t)&&((e=o.createElement("script")).setAttribute("src","shopifycloud/storefront-recaptcha-v3/v0.6/index.js"),o.body.appendChild(e),o.removeEventListener("focus",n,!0),o.removeEventListener("change",n,!0),o.removeEventListener("click",n,!0))}o.addEventListener("click",n,!0),o.addEventListener("change",n,!0),o.addEventListener("focus",n,!0)})}(document);</script>
<script data-source-attribution="shopify.loadfeatures" defer="defer" src="https://maxwin.viva99.id/cdn/shopifycloud/shopify/assets/storefront/load_feature-87876fa245af19cbd14aa886ed59c6aa8a27c45d24dcd7a81cf2d2323506233e.js" ></script>
<script data-source-attribution="shopify.dynamic-checkout" defer="defer" src="https://maxwin.viva99.id/cdn/shopifycloud/shopify/assets/storefront/features-1c0b396bd4d054b94abae1eb6a1bd6ba47beb35525c57a217c77a862ff06d83f.js" ></script>
<script id="sections-script" data-sections="header" defer="defer" src="https://maxwin.viva99.id/cdn/shop/t/1/compiled_assets/scripts.js"></script>
<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>
    <style data-shopify>
      @font-face {
  font-family: Inter;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("//maxwin.viva99.id/cdn/fonts/inter/inter_n4.481bd4d19704ca98fb1d3abd50c668b6962860a2.woff2?h10=dml2YTk5LmN5bnRoaWFyb3dsZXkuY29t&h11=dml2YTk5LnNlYXRvc3VtbWl0dXNhLmNvbQ&h12=dml2YTk5Lmx1bWlxdWVzdC5jb20&h13=dml2YTk5Lm11enVuZ3VzaXN0ZXJzLmNvbQ&h14=dml2YTk5Lm5ld2J1cnljb21pY3MuY29t&h15=dml2YTk5LnJvYXJrcmV2aXZhbC5jb20&h1=MmYwMTZlLTIuYWNjb3VudC5teXNob3BpZnkuY29t&h2=c2FsZXNqYW10YW5nYW4ubXlzaG9waWZ5LmNvbQ&h3=bWF4d2luLnZpdmE5OS5pZA&h4=c2xvdGdhY29yLnRoZW9kZXRvLmNvbQ&h5=c2xvdGRhbmEuc25hZmZsaW5ncGlnLmNvLnVr&h6=c2xvdC1kZW1vLmNvZmZlZWhvdXNlcHJlc3Mub3Jn&h7=dml2YTk5Lndic2hvcC5jb20&h8=dml2YTk5LnRoZXBpaHV0LmNvbQ&h9=dml2YTk5Lmlsb3Zlc3R2aW5jZW50LmNvbQ&hmac=170f1d646618ff6b7512c3fd093d34cd16a6ecc31af5cfc64b5eff6a2580a074") format("woff2"),
       url("https://maxwin.viva99.id/cdn/fonts/inter/inter_n4.5a356a4c1877691cd26008ee4a5c7ada675c80ce.woff") format("woff");
}
      @font-face {
  font-family: Inter;
  font-weight: 700;
  font-style: normal;
  font-display: swap;
  src: url("https://maxwin.viva99.id/cdn/fonts/inter/inter_n7.50ef4139896edec0637fde057914fbf7e3a8d56e.woff") format("woff2"),
       url("https://maxwin.viva99.id/cdn/fonts/inter/inter_n7.194c3d3f64efd8e4c82bbbe83dc84f5893fd9087.woff") format("woff");
}
      @font-face {
  font-family: Inter;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("//maxwin.viva99.id/cdn/fonts/inter/inter_n4.481bd4d19704ca98fb1d3abd50c668b6962860a2.woff2?h10=dml2YTk5LmN5bnRoaWFyb3dsZXkuY29t&h11=dml2YTk5LnNlYXRvc3VtbWl0dXNhLmNvbQ&h12=dml2YTk5Lmx1bWlxdWVzdC5jb20&h13=dml2YTk5Lm11enVuZ3VzaXN0ZXJzLmNvbQ&h14=dml2YTk5Lm5ld2J1cnljb21pY3MuY29t&h15=dml2YTk5LnJvYXJrcmV2aXZhbC5jb20&h1=MmYwMTZlLTIuYWNjb3VudC5teXNob3BpZnkuY29t&h2=c2FsZXNqYW10YW5nYW4ubXlzaG9waWZ5LmNvbQ&h3=bWF4d2luLnZpdmE5OS5pZA&h4=c2xvdGdhY29yLnRoZW9kZXRvLmNvbQ&h5=c2xvdGRhbmEuc25hZmZsaW5ncGlnLmNvLnVr&h6=c2xvdC1kZW1vLmNvZmZlZWhvdXNlcHJlc3Mub3Jn&h7=dml2YTk5Lndic2hvcC5jb20&h8=dml2YTk5LnRoZXBpaHV0LmNvbQ&h9=dml2YTk5Lmlsb3Zlc3R2aW5jZW50LmNvbQ&hmac=170f1d646618ff6b7512c3fd093d34cd16a6ecc31af5cfc64b5eff6a2580a074") format("woff2"),
       url("https://maxwin.viva99.id/cdn/fonts/inter/inter_n4.5a356a4c1877691cd26008ee4a5c7ada675c80ce.woff") format("woff");
}
        :root,
        .color-background-1 {
          --color-background: 18,18,18;
          --gradient-background: #121212;
        --color-foreground: 252,228,119;
        --color-shadow: 18,18,18;
        --color-button: 237,199,20;
        --color-button-text: 255,255,255;
        --color-secondary-button: 18,18,18;
        --color-secondary-button-text: 252,228,119;
        --color-link: 252,228,119;
        --color-badge-foreground: 252,228,119;
        --color-badge-background: 18,18,18;
        --color-badge-border: 252,228,119;
        --payment-terms-background-color: rgb(18 18 18);
      }
        .color-background-2 {
          --color-background: 243,243,243;
          --gradient-background: #f3f3f3;
        --color-foreground: 18,18,18;
        --color-shadow: 18,18,18;
        --color-button: 18,18,18;
        --color-button-text: 243,243,243;
        --color-secondary-button: 243,243,243;
        --color-secondary-button-text: 18,18,18;
        --color-link: 18,18,18;
        --color-badge-foreground: 18,18,18;
        --color-badge-background: 243,243,243;
        --color-badge-border: 18,18,18;
        --payment-terms-background-color: rgb(243 243 243);
      }
        .color-inverse {
          --color-background: 36,40,51;
          --gradient-background: #242833;
        --color-foreground: 255,255,255;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 18,18,18;
        --color-secondary-button: 36,40,51;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 36,40,51;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(36 40 51);
      }
        .color-accent-1 {
          --color-background: 18,18,18;
          --gradient-background: #121212;
        --color-foreground: 255,255,255;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 18,18,18;
        --color-secondary-button: 18,18,18;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 18,18,18;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(18 18 18);
      }
        .color-accent-2 {
          --color-background: 185,0,0;
          --gradient-background: #b90000;
        --color-foreground: 255,255,255;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 185,0,0;
        --color-secondary-button: 185,0,0;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 185,0,0;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(185 0 0);
      }
      body, .color-background-1, .color-background-2, .color-inverse, .color-accent-1, .color-accent-2 {
        color: rgba(var(--color-foreground), 0.75);
        background-color: rgb(var(--color-background));
      }
      :root {
        --font-body-family: Inter, sans-serif;
        --font-body-style: normal;
        --font-body-weight: 400;
        --font-body-weight-bold: 700;
        --font-heading-family: Inter, sans-serif;
        --font-heading-style: normal;
        --font-heading-weight: 400;
        --font-body-scale: 1.0;
        --font-heading-scale: 1.0;
        --media-padding: px;
        --media-border-opacity: 0.0;
        --media-border-width: 0px;
        --media-radius: 4px;
        --media-shadow-opacity: 0.0;
        --media-shadow-horizontal-offset: 0px;
        --media-shadow-vertical-offset: 4px;
        --media-shadow-blur-radius: 5px;
        --media-shadow-visible: 0;
        --page-width: 120rem;
        --page-width-margin: 0rem;
        --product-card-image-padding: 0.0rem;
        --product-card-corner-radius: 1.6rem;
        --product-card-text-alignment: left;
        --product-card-border-width: 0.0rem;
        --product-card-border-opacity: 0.1;
        --product-card-shadow-opacity: 0.0;
        --product-card-shadow-visible: 0;
        --product-card-shadow-horizontal-offset: 0.0rem;
        --product-card-shadow-vertical-offset: 0.4rem;
        --product-card-shadow-blur-radius: 0.5rem;
        --collection-card-image-padding: 0.0rem;
        --collection-card-corner-radius: 1.6rem;
        --collection-card-text-alignment: left;
        --collection-card-border-width: 0.0rem;
        --collection-card-border-opacity: 0.1;
        --collection-card-shadow-opacity: 0.0;
        --collection-card-shadow-visible: 0;
        --collection-card-shadow-horizontal-offset: 0.0rem;
        --collection-card-shadow-vertical-offset: 0.4rem;
        --collection-card-shadow-blur-radius: 0.5rem;
        --blog-card-image-padding: 0.0rem;
        --blog-card-corner-radius: 1.6rem;
        --blog-card-text-alignment: left;
        --blog-card-border-width: 0.0rem;
        --blog-card-border-opacity: 0.1;
        --blog-card-shadow-opacity: 0.0;
        --blog-card-shadow-visible: 0;
        --blog-card-shadow-horizontal-offset: 0.0rem;
        --blog-card-shadow-vertical-offset: 0.4rem;
        --blog-card-shadow-blur-radius: 0.5rem;
        --badge-corner-radius: 0.4rem;
        --popup-border-width: 1px;
        --popup-border-opacity: 1.0;
        --popup-corner-radius: 4px;
        --popup-shadow-opacity: 0.0;
        --popup-shadow-horizontal-offset: 0px;
        --popup-shadow-vertical-offset: 4px;
        --popup-shadow-blur-radius: 5px;
        --drawer-border-width: 1px;
        --drawer-border-opacity: 0.1;
        --drawer-shadow-opacity: 0.0;
        --drawer-shadow-horizontal-offset: 0px;
        --drawer-shadow-vertical-offset: 4px;
        --drawer-shadow-blur-radius: 5px;
        --spacing-sections-desktop: 0px;
        --spacing-sections-mobile: 0px;
        --grid-desktop-vertical-spacing: 16px;
        --grid-desktop-horizontal-spacing: 16px;
        --grid-mobile-vertical-spacing: 8px;
        --grid-mobile-horizontal-spacing: 8px;
        --text-boxes-border-opacity: 0.1;
        --text-boxes-border-width: 0px;
        --text-boxes-radius: 0px;
        --text-boxes-shadow-opacity: 0.0;
        --text-boxes-shadow-visible: 0;
        --text-boxes-shadow-horizontal-offset: 0px;
        --text-boxes-shadow-vertical-offset: 4px;
        --text-boxes-shadow-blur-radius: 5px;
        --buttons-radius: 4px;
        --buttons-radius-outset: 5px;
        --buttons-border-width: 1px;
        --buttons-border-opacity: 1.0;
        --buttons-shadow-opacity: 0.0;
        --buttons-shadow-visible: 0;
        --buttons-shadow-horizontal-offset: 0px;
        --buttons-shadow-vertical-offset: 4px;
        --buttons-shadow-blur-radius: 5px;
        --buttons-border-offset: 0.3px;
        --inputs-radius: 4px;
        --inputs-border-width: 1px;
        --inputs-border-opacity: 1.0;
        --inputs-shadow-opacity: 0.0;
        --inputs-shadow-horizontal-offset: 0px;
        --inputs-margin-offset: 0px;
        --inputs-shadow-vertical-offset: 4px;
        --inputs-shadow-blur-radius: 5px;
        --inputs-radius-outset: 5px;
        --variant-pills-radius: 40px;
        --variant-pills-border-width: 1px;
        --variant-pills-border-opacity: 0.55;
        --variant-pills-shadow-opacity: 0.0;
        --variant-pills-shadow-horizontal-offset: 0px;
        --variant-pills-shadow-vertical-offset: 4px;
        --variant-pills-shadow-blur-radius: 5px;
      }
      *,
      *::before,
      *::after {
        box-sizing: inherit;
      }
      html {
        box-sizing: border-box;
        font-size: calc(var(--font-body-scale) * 62.5%);
        height: 100%;
      }
      body {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        grid-template-columns: 100%;
        min-height: 100%;
        margin: 0;
        font-size: 1.5rem;
        letter-spacing: 0.06rem;
        line-height: calc(1 + 0.8 / var(--font-body-scale));
        font-family: var(--font-body-family);
        font-style: var(--font-body-style);
        font-weight: var(--font-body-weight);
      }
      @media screen and (min-width: 750px) {
        body {
          font-size: 1.6rem;
        }
      }
    </style>
    <link href="https://maxwin.viva99.id/cdn/shop/t/1/assets/base.css" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="font" href="https://maxwin.viva99.id/cdn/fonts/inter/inter_n4.481bd4d19704ca98fb1d3abd50c668b6962860a2.woff" type="font/woff2" crossorigin><link rel="preload" as="font" href="https://maxwin.viva99.id/cdn/fonts/inter/inter_n4.481bd4d19704ca98fb1d3abd50c668b6962860a2.woff" type="font/woff2" crossorigin><link
        rel="stylesheet"
        href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-predictive-search.css"
        media="print"
        onload="this.media='all'"
      ><script>
      document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
      if (Shopify.designMode) {
        document.documentElement.classList.add('shopify-design-mode');
      }
    </script>
  <script src="https://maxwin.viva99.id/extensions/5ddde4b0-21ab-4113-a340-332d845636e7/pagefly-page-builder-1/assets/cart.js" type="text/javascript" defer="defer"></script>
<link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 83259064616,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "index"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script id="web-pixels-manager-setup">(function e(e,n,a,t,o,r,i){var s=null!==e,l=("function"==typeof BigInt&&BigInt.toString().indexOf("[native code]")?"modern":"legacy").substring(0,1),c=t.substring(0,1);if(s){window.Shopify=window.Shopify||{};var d=window.Shopify;d.analytics=d.analytics||{};var u=d.analytics;u.replayQueue=[],u.publish=function(e,n,a){u.replayQueue.push([e,n,a])};try{self.performance.mark("wpm:start")}catch(e){}}var p,f,y,h,v,m,w,g,b,_=[a,"/wpm","/",c,r,l,".js"].join("");f=(p={src:_,async:!0,onload:function(){if(e){var a=window.webPixelsManager.init(e);null==n||n(a);var t=window.Shopify.analytics;t.replayQueue.forEach((function(e){var n=e[0],t=e[1],o=e[2];a.publishCustomEvent(n,t,o)})),t.replayQueue=[],t.publish=a.publishCustomEvent,t.visitor=a.visitor}},onerror:function(){var n=(null==e?void 0:e.storefrontBaseUrl)?e.storefrontBaseUrl.replace(/\/$/,""):self.location.origin,a="".concat(n,"/.well-known/shopify/monorail/unstable/produce_batch"),t=JSON.stringify({metadata:{event_sent_at_ms:(new Date).getTime()},events:[{schema_id:"web_pixels_manager_load/2.0",payload:{version:o||"latest",page_url:self.location.href,status:"failed",error_msg:"".concat(_," has failed to load")},metadata:{event_created_at_ms:(new Date).getTime()}}]});try{if(self.navigator.sendBeacon.bind(self.navigator)(a,t))return!0}catch(e){}var r=new XMLHttpRequest;try{return r.open("POST",a,!0),r.setRequestHeader("Content-Type","text/plain"),r.send(t),!0}catch(e){console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")}return!1}}).src,y=p.async,h=void 0===y||y,v=p.onload,m=p.onerror,w=document.createElement("script"),g=document.head,b=document.body,w.async=h,w.src=f,v&&w.addEventListener("load",v),m&&w.addEventListener("error",m),g?g.appendChild(w):b?b.appendChild(w):console.error("Did not find a head or body element to append the script")})({shopId: 83259064616,storefrontBaseUrl: "https://slot-online.nutriforcesports.com/situs/", https://maxwin.viva99.id/cdnBaseUrl: "https://maxwin.viva99.id/cdn",surface: "storefront-renderer",enabledBetaFlags: ["web_pixels_async_pixel_refactor","web_pixels_manager_performance_improvement"],webPixelsConfigList: [{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"0570","apiClientId":"shopify-pixel","type":"APP"},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"0570","apiClientId":"shopify-pixel","type":"CUSTOM"}],initData: {"cart":null,"checkout":null,"customer":null,"productVariants":[]},},function pageEvents(webPixelsManagerAPI) {webPixelsManagerAPI.publish("page_viewed");},"https://maxwin.viva99.id/cdn","browser","0.0.407","f25882c1w423ab3d2p8df04b18m261f6c04",["web_pixels_async_pixel_refactor","web_pixels_manager_performance_improvement"]);</script>  <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'IDR';
var meta = {"page":{"pageType":"home"}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
};
</script>
<script class="analytics">(function () {
    var customDocumentWrite = function(content) {
      var jquery = null;
      if (window.jQuery) {
        jquery = window.jQuery;
      } else if (window.Checkout && window.Checkout.$) {
        jquery = window.Checkout.$;
      }
      if (jquery) {
        jquery('body').append(content);
      }
    };
    var hasLoggedConversion = function(token) {
      if (token) {
        return document.cookie.indexOf('loggedConversion=' + token) !== -1;
      }
      return false;
    }
    var setCookieIfConversion = function(token) {
      if (token) {
        var twoMonthsFromNow = new Date(Date.now());
        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);
        document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
      }
    }
    var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
    if (trekkie.integrations) {
      return;
    }
    trekkie.methods = [
      'identify',
      'page',
      'ready',
      'track',
      'trackForm',
      'trackLink'
    ];
    trekkie.factory = function(method) {
      return function() {
        var args = Array.prototype.slice.call(arguments);
        args.unshift(method);
        trekkie.push(args);
        return trekkie;
      };
    };
    for (var i = 0; i < trekkie.methods.length; i++) {
      var key = trekkie.methods[i];
      trekkie[key] = trekkie.factory(key);
    }
    trekkie.load = function(config) {
      trekkie.config = config || {};
      trekkie.config.initialDocumentCookie = document.cookie;
      var first = document.getElementsByTagName('script')[0];
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.onerror = function(e) {
        var scriptFallback = document.createElement('script');
        scriptFallback.type = 'text/javascript';
        scriptFallback.onerror = function(error) {
                var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });
          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful
        } // XHR beacon
        var xhr = new XMLHttpRequest();
        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }
        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 83259064616,
      theme_id: 160833143080,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "https://maxwin.viva99.id/cdn/s/trekkie.storefront.cdbb3ab87b2344fc90b72e01ec11aedeab3a9cf7.min.js"});
        };
        scriptFallback.async = true;
        scriptFallback.src = 'https://maxwin.viva99.id/cdn/s/trekkie.storefront.cdbb3ab87b2344fc90b72e01ec11aedeab3a9cf7.min.js';
        first.parentNode.insertBefore(scriptFallback, first);
      };
      script.async = true;
      script.src = 'https://maxwin.viva99.id/cdn/s/trekkie.storefront.cdbb3ab87b2344fc90b72e01ec11aedeab3a9cf7.min.js';
      first.parentNode.insertBefore(script, first);
    };
    trekkie.load(
      {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":83259064616,"isMerchantRequest":null,"themeId":160833143080,"themeCityHash":"3614600119619208561","contentLanguage":"en","currency":"IDR"},"isServerSideCookieWritingEnabled":true,"monorailRegion":"shop_domain"},"Google Gtag Pixel":{"conversionId":"G-X6M9Y2GKST","eventLabels":[{"type":"purchase","action_label":"G-X6M9Y2GKST"},{"type":"page_view","action_label":"G-X6M9Y2GKST"},{"type":"view_item","action_label":"G-X6M9Y2GKST"},{"type":"search","action_label":"G-X6M9Y2GKST"},{"type":"add_to_cart","action_label":"G-X6M9Y2GKST"},{"type":"begin_checkout","action_label":"G-X6M9Y2GKST"},{"type":"add_payment_info","action_label":"G-X6M9Y2GKST"}],"targetCountry":"US"},"Session Attribution":{},"S2S":{"facebookCapiEnabled":false,"source":"trekkie-storefront-renderer"}}
    );
    var loaded = false;
    trekkie.ready(function() {
      if (loaded) return;
      loaded = true;
      window.ShopifyAnalytics.lib = window.trekkie;
      var originalDocumentWrite = document.write;
      document.write = customDocumentWrite;
      try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
      document.write = originalDocumentWrite;
      window.ShopifyAnalytics.lib.page(null,{"pageType":"home"});
      var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
      var token = match? match[1]: undefined;
      if (!hasLoggedConversion(token)) {
        setCookieIfConversion(token);
      }
    });
        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src = "https://maxwin.viva99.id/cdn/shopifycloud/shopify/assets/shop_events_listener-a7c63dba65ccddc484f77541dc8ca437e60e1e9e297fe1c3faebf6523a0ede9b.js";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
})();</script>
<script class="boomerang">
(function () {
  if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
    return;
  }
  window.BOOMR = window.BOOMR || {};
  window.BOOMR.snippetStart = new Date().getTime();
  window.BOOMR.snippetExecuted = true;
  window.BOOMR.snippetVersion = 12;
  window.BOOMR.application = "storefront-renderer";
  window.BOOMR.themeName = "Spotlight";
  window.BOOMR.themeVersion = "11.0.0";
  window.BOOMR.shopId = 83259064616;
  window.BOOMR.themeId = 160833143080;
  window.BOOMR.renderRegion = "gcp-us-central1";
  window.BOOMR.url =
    "https://maxwin.viva99.id/cdn/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
  var where = document.currentScript || document.getElementsByTagName("script")[0];
  var parentNode = where.parentNode;
  var promoted = false;
  var LOADER_TIMEOUT = 3000;
  function promote() {
    if (promoted) {
      return;
    }
    var script = document.createElement("script");
    script.id = "boomr-scr-as";
    script.src = window.BOOMR.url;
    script.async = true;
    parentNode.appendChild(script);
    promoted = true;
  }
  function iframeLoader(wasFallback) {
    promoted = true;
    var dom, bootstrap, iframe, iframeStyle;
    var doc = document;
    var win = window;
    window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
    bootstrap = function(parent, scriptId) {
      var script = doc.createElement("script");
      script.id = scriptId || "boomr-if-as";
      script.src = window.BOOMR.url;
      BOOMR_lstart = new Date().getTime();
      parent = parent || doc.body;
      parent.appendChild(script);
    };
    if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
      window.BOOMR.snippetMethod = "s";
      bootstrap(parentNode, "boomr-async");
      return;
    }
    iframe = document.createElement("IFRAME");
    iframe.src = "about:blank";
    iframe.title = "";
    iframe.role = "presentation";
    iframe.loading = "eager";
    iframeStyle = (iframe.frameElement || iframe).style;
    iframeStyle.width = 0;
    iframeStyle.height = 0;
    iframeStyle.border = 0;
    iframeStyle.display = "none";
    parentNode.appendChild(iframe);
    try {
      win = iframe.contentWindow;
      doc = win.document.open();
    } catch (e) {
      dom = document.domain;
      iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
      win = iframe.contentWindow;
      doc = win.document.open();
    }
    if (dom) {
      doc._boomrl = function() {
        this.domain = dom;
        bootstrap();
      };
      doc.write("<body onload='document._boomrl();'>");
    } else {
      win._boomrl = function() {
        bootstrap();
      };
      if (win.addEventListener) {
        win.addEventListener("load", win._boomrl, false);
      } else if (win.attachEvent) {
        win.attachEvent("onload", win._boomrl);
      }
    }
    doc.close();
  }
  var link = document.createElement("link");
  if (link.relList &&
    typeof link.relList.supports === "function" &&
    link.relList.supports("preload") &&
    ("as" in link)) {
    window.BOOMR.snippetMethod = "p";
    link.href = window.BOOMR.url;
    link.rel = "preload";
    link.as = "script";
    link.addEventListener("load", promote);
    link.addEventListener("error", function() {
      iframeLoader(true);
    });
    setTimeout(function() {
      if (!promoted) {
        iframeLoader(true);
      }
    }, LOADER_TIMEOUT);
    BOOMR_lstart = new Date().getTime();
    parentNode.appendChild(link);
  } else {
    iframeLoader(false);
  }
  function boomerangSaveLoadTime(e) {
    window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
  }
  if (window.addEventListener) {
    window.addEventListener("load", boomerangSaveLoadTime, false);
  } else if (window.attachEvent) {
    window.attachEvent("onload", boomerangSaveLoadTime);
  }
  if (document.addEventListener) {
    document.addEventListener("onBoomerangLoaded", function(e) {
      e.detail.BOOMR.init({
        ResourceTiming: {
          enabled: true,
          trackedResourceTypes: ["script", "img", "css"]
        },
      });
      e.detail.BOOMR.t_end = new Date().getTime();
    });
  } else if (document.attachEvent) {
    document.attachEvent("onpropertychange", function(e) {
      if (!e) e=event;
      if (e.propertyName === "onBoomerangLoaded") {
        e.detail.BOOMR.init({
          ResourceTiming: {
            enabled: true,
            trackedResourceTypes: ["script", "img", "css"]
          },
        });
        e.detail.BOOMR.t_end = new Date().getTime();
      }
    });
  }
})();</script>
  <link rel="amphtml" href="http://singelmom.pro/" />
</head>

  <body class="gradient">
    <a class="skip-to-content-link button visually-hidden" href="#MainContent">
      Skip to content
    </a><!-- BEGIN sections: header-group -->
<div id="shopify-section-sections--21197349552424__header" class="shopify-section shopify-section-group-header-group section-header"><link rel="stylesheet" href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-list-menu.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-search.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-menu-drawer.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-cart-notification.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-cart-items.css" media="print" onload="this.media='all'"><link rel="stylesheet" href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-price.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-loading-overlay.css" media="print" onload="this.media='all'"><noscript><link href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-list-menu.css" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-search.css" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-menu-drawer.css" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-cart-notification.css" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-cart-items.css" rel="stylesheet" type="text/css" media="all" /></noscript>
<style>
  header-drawer {
    justify-self: start;
    margin-left: -1.2rem;
  }@media screen and (min-width: 990px) {
      header-drawer {
        display: none;
      }
    }.menu-drawer-container {
    display: flex;
  }
  .list-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .list-menu--inline {
    display: inline-flex;
    flex-wrap: wrap;
  }
  summary.list-menu__item {
    padding-right: 2.7rem;
  }
  .list-menu__item {
    display: flex;
    align-items: center;
    line-height: calc(1 + 0.3 / var(--font-body-scale));
  }
  .list-menu__item--link {
    text-decoration: none;
    padding-bottom: 1rem;
    padding-top: 1rem;
    line-height: calc(1 + 0.8 / var(--font-body-scale));
  }
  @media screen and (min-width: 750px) {
    .list-menu__item--link {
      padding-bottom: 0.5rem;
      padding-top: 0.5rem;
    }
  }
</style><style data-shopify>.header {
    padding: 18px 3rem 6px 3rem;
  }
  .section-header {
    position: sticky; /* This is for fixing a Safari z-index issue. PR #2147 */
    margin-bottom: 0px;
  }
  @media screen and (min-width: 750px) {
    .section-header {
      margin-bottom: 0px;
    }
  }
  @media screen and (min-width: 990px) {
    .header {
      padding-top: 36px;
      padding-bottom: 12px;
    }
  }</style><script src="https://maxwin.viva99.id/cdn/shop/t/1/assets/details-disclosure.js" defer="defer"></script>
<script src="https://maxwin.viva99.id/cdn/shop/t/1/assets/details-modal.js" defer="defer"></script>
<script src="https://maxwin.viva99.id/cdn/shop/t/1/assets/cart-notification.js" defer="defer"></script>
<script src="https://maxwin.viva99.id/cdn/shop/t/1/assets/search-form.js" defer="defer"></script><svg xmlns="http://www.w3.org/2000/svg" class="hidden">
  <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z" fill="currentColor"/>
  </symbol>
  <symbol id="icon-reset" class="icon icon-close"  fill="none" viewBox="0 0 18 18" stroke="currentColor">
    <circle r="8.5" cy="9" cx="9" stroke-opacity="0.2"/>
    <path d="M6.82972 6.82915L1.17193 1.17097" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
    <path d="M1.22896 6.88502L6.77288 1.11523" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
  </symbol>
  <symbol id="icon-close" class="icon icon-close" fill="none" viewBox="0 0 18 17">
    <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
  </symbol>
</svg><sticky-header data-sticky-type="on-scroll-up" class="header-wrapper color-background-1 gradient"><header class="header header--top-center header--mobile-center page-width header--has-social">
<details-modal class="header__search">
  <details>
    <summary class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle" aria-haspopup="dialog" aria-label="Search">
      <span>
        <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
          <use href="#icon-search">
        </svg>
        <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
          <use href="#icon-close">
        </svg>
      </span>
    </summary>
    <div class="search-modal modal__content gradient" role="dialog" aria-modal="true" aria-label="Search">
      <div class="modal-overlay"></div>
      <div class="search-modal__content search-modal__content-bottom" tabindex="-1"><predictive-search class="search-modal__form" data-loading-text="Loading..."><form action="search.html" method="get" role="search" class="search search-modal__form">
              <div class="field">
                <input class="search__input field__input"
                  id="Search-In-Modal-1"
                  type="search"
                  name="q"
                  value=""
                  placeholder="Search"role="combobox"
                    aria-expanded="false"
                    aria-owns="predictive-search-results"
                    aria-controls="predictive-search-results"
                    aria-haspopup="listbox"
                    aria-autocomplete="list"
                    autocorrect="off"
                    autocomplete="off"
                    autocapitalize="off"
                    spellcheck="false">
                <label class="field__label" for="Search-In-Modal-1">Search</label>
                <input type="hidden" name="options[prefix]" value="last">
                <button type="reset" class="reset__button field__button hidden" aria-label="Clear search term">
                  <svg class="icon icon-close" aria-hidden="true" focusable="false">
                    <use xlink:href="#icon-reset">
                  </svg>
                </button>
                <button class="search__button field__button" aria-label="Search">
                  <svg class="icon icon-search" aria-hidden="true" focusable="false">
                    <use href="#icon-search">
                  </svg>
                </button>
              </div><div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>
                  <div class="predictive-search__loading-state">
                    <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                      <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                    </svg>
                  </div>
                </div>
                <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span></form></predictive-search><button type="button" class="search-modal__close-button modal__close-button link link--text focus-inset" aria-label="Close">
          <svg class="icon icon-close" aria-hidden="true" focusable="false">
            <use href="#icon-close">
          </svg>
        </button>
      </div>
    </div>
  </details>
</details-modal>
<h1 class="header__heading"><a href="https://slot-online.nutriforcesports.com/situs/" class="header__heading-link link link--text focus-inset"><div class="header__heading-logo-wrapper">
                <img src="https://res.cloudinary.com/dn20ue4xd/image/upload/v1700229755/RTP-18_xezg1f.gif" alt="Situs Slot" srcset="https://res.cloudinary.com/dn20ue4xd/image/upload/v1700229755/RTP-18_xezg1f.gif 100w, https://res.cloudinary.com/dn20ue4xd/image/upload/v1700229755/RTP-18_xezg1f.gif 150w, https://res.cloudinary.com/dn20ue4xd/image/upload/v1700229755/RTP-18_xezg1f.gif 200w" width="200" height="67.82006920415225" loading="eager" class="header__heading-logo motion-reduce" sizes="(max-width: 200px) 50vw, 100px">
              </div></a></h1>
<div class="header__icons header__icons--localization header-localization">
      <div class="desktop-localization-wrapper">
</div>
<details-modal class="header__search">
  <details>
    <summary class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle" aria-haspopup="dialog" aria-label="Search">
      <span>
        <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
          <use href="#icon-search">
        </svg>
        <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
          <use href="#icon-close">
        </svg>
      </span>
    </summary>
    <div class="search-modal modal__content gradient" role="dialog" aria-modal="true" aria-label="Search">
      <div class="modal-overlay"></div>
      <div class="search-modal__content search-modal__content-bottom" tabindex="-1"><predictive-search class="search-modal__form" data-loading-text="Loading..."><form action="search.html" method="get" role="search" class="search search-modal__form">
              <div class="field">
                <input class="search__input field__input"
                  id="Search-In-Modal"
                  type="search"
                  name="q"
                  value=""
                  placeholder="Search"role="combobox"
                    aria-expanded="false"
                    aria-owns="predictive-search-results"
                    aria-controls="predictive-search-results"
                    aria-haspopup="listbox"
                    aria-autocomplete="list"
                    autocorrect="off"
                    autocomplete="off"
                    autocapitalize="off"
                    spellcheck="false">
                <label class="field__label" for="Search-In-Modal">Search</label>
                <input type="hidden" name="options[prefix]" value="last">
                <button type="reset" class="reset__button field__button hidden" aria-label="Clear search term">
                  <svg class="icon icon-close" aria-hidden="true" focusable="false">
                    <use xlink:href="#icon-reset">
                  </svg>
                </button>
                <button class="search__button field__button" aria-label="Search">
                  <svg class="icon icon-search" aria-hidden="true" focusable="false">
                    <use href="#icon-search">
                  </svg>
                </button>
              </div><div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>
                  <div class="predictive-search__loading-state">
                    <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                      <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                    </svg>
                  </div>
                </div>
                <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span></form></predictive-search><button type="button" class="search-modal__close-button modal__close-button link link--text focus-inset" aria-label="Close">
          <svg class="icon icon-close" aria-hidden="true" focusable="false">
            <use href="#icon-close">
          </svg>
        </button>
      </div>
    </div>
  </details>
</details-modal>
<a href="/" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble"><svg
  class="icon icon-cart-empty"
  aria-hidden="true"
  focusable="false"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 40 40"
  fill="none"
>
  <path d="m15.75 11.8h-3.16l-.77 11.6a5 5 0 0 0 4.99 5.34h7.38a5 5 0 0 0 4.99-5.33l-.78-11.61zm0 1h-2.22l-.71 10.67a4 4 0 0 0 3.99 4.27h7.38a4 4 0 0 0 4-4.27l-.72-10.67h-2.22v.63a4.75 4.75 0 1 1 -9.5 0zm8.5 0h-7.5v.63a3.75 3.75 0 1 0 7.5 0z" fill="currentColor" fill-rule="evenodd"/>
</svg>
<span class="visually-hidden">Cart</span></a>
    </div>
  </header>
</sticky-header>
<cart-notification>
  <div class="cart-notification-wrapper page-width">
    <div
      id="cart-notification"
      class="cart-notification focus-inset color-background-1 gradient"
      aria-modal="true"
      aria-label="Item added to your cart"
      role="dialog"
      tabindex="-1"
    >
      <div class="cart-notification__header">
        <h2 class="cart-notification__heading caption-large text-body"><svg
  class="icon icon-checkmark"
  aria-hidden="true"
  focusable="false"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 12 9"
  fill="none"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M11.35.643a.5.5 0 01.006.707l-6.77 6.886a.5.5 0 01-.719-.006L.638 4.845a.5.5 0 11.724-.69l2.872 3.011 6.41-6.517a.5.5 0 01.707-.006h-.001z" fill="currentColor"/>
</svg>
Item added to your cart
        </h2>
        <button
          type="button"
          class="cart-notification__close modal__close-button link link--text focus-inset"
          aria-label="Close"
        >
          <svg class="icon icon-close" aria-hidden="true" focusable="false">
            <use href="#icon-close">
          </svg>
        </button>
      </div>
      <div id="cart-notification-product" class="cart-notification-product"></div>
      <div class="cart-notification__links">
        <a
          href="/"
          id="cart-notification-button"
          class="button button--secondary button--full-width"
        >View cart</a>
        <form action="/" method="post" id="cart-notification-form">
          <button class="button button--primary button--full-width" name="checkout">
            Check out
          </button>
        </form>
        <button type="button" class="link button-label">Continue shopping</button>
      </div>
    </div>
  </div>
</cart-notification>
<style data-shopify>
  .cart-notification {
    display: none;
  }
</style>
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Situs Slot",
      "logo": "https:\/\/maxwin.viva99.id\/cdn\/shop\/files\/Fossil_Logo.jpg?v=1695845007\u0026width=500",
    "sameAs": [
      "",
      "https:\/\/m.facebook.com\/Situs Slot\/?locale=he_IL",
      "",
      "https:\/\/www.instagram.com\/mywatchesstore\/?hl=en",
      "",
      "",
      "",
      "",
      ""
    ],
    "url": "https:\/\/maxwin.viva99.id"
  }
</script>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "Situs Slot",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https:\/\/maxwin.viva99.id\/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      },
      "url": "https:\/\/maxwin.viva99.id"
    }
  </script>
</div><div id="shopify-section-sections--21197349552424__461283f9-557b-4663-91c1-f65a4c51f082" class="shopify-section shopify-section-group-header-group announcement-bar-section"><link href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-slideshow.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-slider.css" rel="stylesheet" type="text/css" media="all" />
  <link href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-list-social.css" rel="stylesheet" type="text/css" media="all" />

  </div>
</div>
</div>
<!-- END sections: header-group -->
    <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
      <link href="https://maxwin99.viva99.id/cdn/shop/t/1/assets/section-main-product.css?v=122597593913008023621698252825" rel="stylesheet" type="text/css" media="all">
      <div class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height">
      <div class="product__media media media--transparent">
        <img src="https://www.dakotafarmequip.com/gacor.jpg?v=1698262395&amp;width=1946" alt="" srcset="https://www.dakotafarmequip.com/gacor.jpg?v=1698262395&amp;width=246 246w, https://www.dakotafarmequip.com/gacor.jpg?v=1698262395&amp;width=493 493w, https://www.dakotafarmequip.com/gacor.jpg?v=1698262395&amp;width=600 600w, https://www.dakotafarmequip.com/gacor.jpg?v=1698262395&amp;width=713 713w, https://www.dakotafarmequip.com/gacor.jpg?v=1698262395&amp;width=823 823w, https://www.dakotafarmequip.com/gacor.jpg?v=1698262395&amp;width=990 990w, https://www.dakotafarmequip.com/gacor.jpg?v=1698262395&amp;width=1100 1100w, https://www.dakotafarmequip.com/gacor.jpg?v=1698262395&amp;width=1206 1206w, https://www.dakotafarmequip.com/gacor.jpg?v=1698262395&amp;width=1346 1346w, https://www.dakotafarmequip.com/gacor.jpg?v=1698262395&amp;width=1426 1426w, https://www.dakotafarmequip.com/gacor.jpg?v=1698262395&amp;width=1646 1646w, https://www.dakotafarmequip.com/gacor.jpg?v=1698262395&amp;width=1946 1946w" width="1946" height="1095" class="image-magnify-lightbox" sizes="(min-width: 1200px) 715px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
      </div>
    </div>
    <div
  class="utility-bar color-accent-1 gradient utility-bar--bottom-border"
>
  <div class="page-width utility-bar__grid"><div
        class="announcement-bar"
        role="region"
        aria-label="Announcement"
  >
      <h1>Daftar Slot Online Terbaru 2024
</h1>
      <center>
        <a href="https://slot-online.nutriforcesports.com/situs/" title="Daftar Link Slot Gacor">
          <img alt="Daftar Link Slot Gacor" width="70%" src="https://img.diveadvisor.com/photos/daftar-pg-soft-22289.jpg" data-mce-fragment="1" data-mce-src="https://static.wixstatic.com/media/cf8a8d_c9d6f87f1c1a4db2b1cffc8b1591e056~mv2.gif">
        </a>
      </center>
      <p>Situs slot online terbaru hadir disini dengan berbagi jenis permainan slot online di setiap situs yang lengkap dan metode deposit yang lengkap dan gampang di lakukan oleh semua member slot online.</p>
    </div><div class="localization-wrapper">
</div>
    <style>.media>*:not(.zoom):not(.deferred-media__poster-button), .media model-viewer { position:inherit }</style>
    </main>
    <!-- BEGIN sections: footer-group -->
<div id="shopify-section-sections--21197349617960__footer" class="shopify-section shopify-section-group-footer-group">
<link href="https://maxwin.viva99.id/cdn/shop/t/1/assets/section-footer.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-newsletter.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-list-menu.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-list-payment.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://maxwin.viva99.id/cdn/shop/t/1/assets/component-list-social.css" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.footer {
    margin-top: 0px;
  }
  .section-sections--21197349617960__footer-padding {
    padding-top: 42px;
    padding-bottom: 39px;
  }
  @media screen and (min-width: 750px) {
    .footer {
      margin-top: 0px;
    }
    .section-sections--21197349617960__footer-padding {
      padding-top: 56px;
      padding-bottom: 52px;
    }
  }</style><footer class="footer color-background-1 gradient section-sections--21197349617960__footer-padding"><div class="footer__content-top page-width"><div
            class="footer__blocks-wrapper grid grid--1-col grid--2-col grid--4-col-tablet  scroll-trigger animate--slide-in"
              data-cascade
          ><div
                class="footer-block grid__item scroll-trigger animate--slide-in"
                  data-cascade
                  style="--animation-order: 1;"
              ><div class="footer-block__brand-info">
<ul class="list-unstyled list-social footer__list-social" role="list"><li class="list-social__item">
      <a href="https://slot-online.nutriforcesports.com/situs/" class="link list-social__link"><svg aria-hidden="true" focusable="false" class="icon icon-facebook" viewBox="0 0 20 20">
  <path fill="currentColor" d="M18 10.049C18 5.603 14.419 2 10 2c-4.419 0-8 3.603-8 8.049C2 14.067 4.925 17.396 8.75 18v-5.624H6.719v-2.328h2.03V8.275c0-2.017 1.195-3.132 3.023-3.132.874 0 1.79.158 1.79.158v1.98h-1.009c-.994 0-1.303.621-1.303 1.258v1.51h2.219l-.355 2.326H11.25V18c3.825-.604 6.75-3.933 6.75-7.951Z"/>
</svg>
<span class="visually-hidden">Facebook</span>
      </a>
    </li><li class="list-social__item">
      <a href="https://slot-online.nutriforcesports.com/situs/" class="link list-social__link"><svg aria-hidden="true" focusable="false" class="icon icon-instagram" viewBox="0 0 20 20">
  <path fill="currentColor" fill-rule="evenodd" d="M13.23 3.492c-.84-.037-1.096-.046-3.23-.046-2.144 0-2.39.01-3.238.055-.776.027-1.195.164-1.487.273a2.43 2.43 0 0 0-.912.593 2.486 2.486 0 0 0-.602.922c-.11.282-.238.702-.274 1.486-.046.84-.046 1.095-.046 3.23 0 2.134.01 2.39.046 3.229.004.51.097 1.016.274 1.495.145.365.319.639.602.913.282.282.538.456.92.602.474.176.974.268 1.479.273.848.046 1.103.046 3.238.046 2.134 0 2.39-.01 3.23-.046.784-.036 1.203-.164 1.486-.273.374-.146.648-.329.921-.602.283-.283.447-.548.602-.922.177-.476.27-.979.274-1.486.037-.84.046-1.095.046-3.23 0-2.134-.01-2.39-.055-3.229-.027-.784-.164-1.204-.274-1.495a2.43 2.43 0 0 0-.593-.913 2.604 2.604 0 0 0-.92-.602c-.284-.11-.703-.237-1.488-.273ZM6.697 2.05c.857-.036 1.131-.045 3.302-.045 1.1-.014 2.202.001 3.302.045.664.014 1.321.14 1.943.374a3.968 3.968 0 0 1 1.414.922c.41.397.728.88.93 1.414.23.622.354 1.279.365 1.942C18 7.56 18 7.824 18 10.005c0 2.17-.01 2.444-.046 3.292-.036.858-.173 1.442-.374 1.943-.2.53-.474.976-.92 1.423a3.896 3.896 0 0 1-1.415.922c-.51.191-1.095.337-1.943.374-.857.036-1.122.045-3.302.045-2.171 0-2.445-.009-3.302-.055-.849-.027-1.432-.164-1.943-.364a4.152 4.152 0 0 1-1.414-.922 4.128 4.128 0 0 1-.93-1.423c-.183-.51-.329-1.085-.365-1.943C2.009 12.45 2 12.167 2 10.004c0-2.161 0-2.435.055-3.302.027-.848.164-1.432.365-1.942a4.44 4.44 0 0 1 .92-1.414 4.18 4.18 0 0 1 1.415-.93c.51-.183 1.094-.33 1.943-.366Zm.427 4.806a4.105 4.105 0 1 1 5.805 5.805 4.105 4.105 0 0 1-5.805-5.805Zm1.882 5.371a2.668 2.668 0 1 0 2.042-4.93 2.668 2.668 0 0 0-2.042 4.93Zm5.922-5.942a.958.958 0 1 1-1.355-1.355.958.958 0 0 1 1.355 1.355Z" clip-rule="evenodd"/>
</svg>
<span class="visually-hidden">Instagram</span>
      </a>
    </li></ul>
</div></div></div><div
          class="footer-block--newsletter scroll-trigger animate--slide-in"
            data-cascade
        ></div>
      </div><div
    class="footer__content-bottom scroll-trigger animate--slide-in"
      data-cascade
  >
    <div class="footer__content-bottom-wrapper page-width">
      <div class="footer__column footer__localization isolate"></div>
      <div class="footer__column footer__column--info"><div class="footer__payment">
            <span class="visually-hidden">Payment methods</span>
            <ul class="list list-payment" role="list"></ul>
          </div></div>
    </div>
    <div class="footer__content-bottom-wrapper page-width">
      <div class="footer__copyright caption">
        <small class="copyright__content"
          >&copy; 2023, <a href="/" title="">Situs Slot</a></small>
        <small class="copyright__content"><a target="_blank" rel="nofollow" href="https://www.shopify.com/">Powered by Shopify</a></small><ul class="policies list-unstyled"></ul></div>
    </div>
  </div>
</footer>
</div>
<!-- END sections: footer-group -->
    <ul hidden>
      <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
      <li id="a11y-new-window-message">Opens in a new window.</li>
    </ul>
    <script>
      window.shopUrl = 'https://maxwin.viva99.id';
      window.routes = {
        cart_add_url: '/cart/add',
        cart_change_url: '/cart/change',
        cart_update_url: '/cart/update',
        cart_url: '/cart',
        predictive_search_url: '/search/suggest',
      };
      window.cartStrings = {
        error: `There was an error while updating your cart. Please try again.`,
        quantityError: `You can only add [quantity] of this item to your cart.`,
      };
      window.variantStrings = {
        addToCart: `Add to cart`,
        soldOut: `Sold out`,
        unavailable: `Unavailable`,
        unavailable_with_option: `[value] - Unavailable`,
      };
      window.quickOrderListStrings = {
        itemsAdded: `[quantity] items added`,
        itemAdded: `[quantity] item added`,
        itemsRemoved: `[quantity] items removed`,
        itemRemoved: `[quantity] item removed`,
        viewCart: `View cart`,
        each: `[money]/ea`,
      };
      window.accessibilityStrings = {
        imageAvailable: `Image [index] is now available in gallery view`,
        shareSuccess: `Link copied to clipboard`,
        pauseSlideshow: `Pause slideshow`,
        playSlideshow: `Play slideshow`,
        recipientFormExpanded: `Gift card recipient form expanded`,
        recipientFormCollapsed: `Gift card recipient form collapsed`,
      };
    </script><script src="https://maxwin.viva99.id/cdn/shop/t/1/assets/predictive-search.js" defer="defer"></script><div id="shopify-block-16278478101612877664" class="shopify-block shopify-app-block"></div></body>
</html>
