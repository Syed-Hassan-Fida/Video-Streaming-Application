
<!DOCTYPE html><!-- Last Published: Tue Jan 03 2023 18:09:20 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="www.brebow.com" data-wf-page="636d31afbd19aa53e83b02d5" data-wf-site="636d31afbd19aa510b3b02cc">
    <head>
        <meta charset="utf-8"/>
        <title>Video</title>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link href="https://uploads-ssl.webflow.com/636d31afbd19aa510b3b02cc/css/ameliehaeck03.webflow.d3a04e498.css" rel="stylesheet" type="text/css"/><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
        
        <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
        
        <link href="{{ asset('images\White-Background-Icon.png') }}" rel="shortcut icon" type="image/x-icon">
        <link href="{{ asset('images\White-Background-Icon.png') }}" rel="apple-touch-icon">
        <style>

    * {
      -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: antialiased;
          -o-font-smoothing: antialiased;
      }

      .text-block-p{
        color: #F1F1F1 !important;
      }
    
    </style></head><body><div class="html-embed-2 w-embed"><style>
    
    a {
        color: inherit;
    }
    
    .black-opacity {
    pointer-events: none;
    }
    
    .controls {
    pointer-events: none;
    }
    
    .plus-container{
    pointer-events: none;
    }
    
    .plus-container.is-hovered{
    pointer-events: auto;
    }
    
    .controls.is-playing {
    pointer-events: auto;
    }
    
    .video-thumbnail-container {
    pointer-events: none;
    }
    
    .pointer-none {
    pointer-events: none;
    }
    
    .black-infos{
    pointer-events: none;
    }
    
    .section{
    
    }

    .logo_image{
        height: 55px;
        padding-top: 5px;
      }

      @media screen and (max-width: 767px) {
        .text-block-p.play-pause {
          text-align: center;
          display: none;
        }

        .logo_image{
          height: 35px;
          padding-top: 5px;
        }
      }

      @media screen and (max-width: 991px) {
        .text-block-p.play-pause {
          text-align: center;
          display: none;
        }

        .logo_image{
          height: 35px;
          padding-top: 5px;
        }
      }
    
    
    </style>
    </div>
    <div data-w-id="31e07c02-87c7-f436-eaa9-fc3e2f0df135" class="div-block-5">
        <div class="play-pause-wrapper pointer-none">
            <div class="text-block-p play-pause"> </div>
        </div>
        <div class="nav-container">
            <div class="nav-wrapper">
                <a href="{{ route('brebow-index') }}" class="div-block-6 nom page-projet w-inline-block">
                    {{-- <div class="text-block-p">Amélie Haeck</div> --}}
                    <div class="sidebar-brand-text">
                        <img src="{{asset('images\Black Background Logotype.png')}}" class="logo_image">
                    </div>
                </a>
                <div class="div-block-6 contact hide-mobile">
                    <div class="text-block-p">
                        <a href="{{ route('contact') }}">About</a>
                    </div>
                    <div class="text-block-p"><a href="{{ route('archive') }}">Archives</a></div>
                </div>
                <div class="div-block-6 hide-mobile hide">
                    <div class="text-block-p hide">Fr</div>
                </div>
            </div>
            <div class="nav-wrapper">
                <div class="div-block-6">
                    <div id="soundon" data-sound="sound-on" class="text-block-p sound">Sound Off</div>
                    <div id="unmutebutton" data-sound="sound-off" class="text-block-p sound hide">Sound On</div>
                </div>
                <a href="javascript:;" class="plus close-video w-inline-block cancel">
                    <div class="plus-line">
                    </div>
                    <div class="plus-line vertical">
                        </div>
                    </a>
                </div>
            </div>
            <div class="controls">
                <div class="infos-contain">
                    <div class="title-info">
                        <div class="div-block">
                            <div class="text-block-p">{{$archiveBio->title}}</div>
                        </div>
                        <div class="infos">
                            <div class="dot"></div>
                            <div class="text-block-p">Info</div>
                        </div>
                    </div>
                    <div data-w-id="84ef168c-a2eb-4c46-dd79-29050e1590ae" class="open-credits">
                        </div>
                        <div style="height:0px;opacity:0;-webkit-transform:translate3d(0, 8vw, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 8vw, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 8vw, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 8vw, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="credits-container">
                            <div class="text-block-p cr-dits-mobile w-richtext">
                                {{-- <p>Client<br/>{{$archiveBio->client}}</p>
                                <p>Creative Direction<br/>{{$archiveBio->creativeDir}}</p>
                                <p>Production<br/>{{$archiveBio->production}}</p>
                                <p>Music and Sound design<br/>{{$archiveBio->music}}</p>
                                <p>Design and Motion Design<br/>{{$archiveBio->design}}</p> --}}
                            </div>

                            {{-- display home video info --}}
                            @if(sizeof($homeVideoInfo) > 0)
                              @foreach ($homeVideoInfo as $item)
                              <div class="text-block-p cr-dits-desktop w-richtext">
                                <p>{{$item->col1}}<br/>
                                </p>
                              </div>
                              <div class="text-block-p cr-dits-desktop w-richtext">
                                <p>{{$item->col2}}<br/>
                                </p>
                              </div>
                              @endforeach
                            @endif

                            {{-- display archive video info --}}

                            @if (sizeof($archiveInfo) > 0)
                              @foreach ($archiveInfo as $item)
                              <div class="text-block-p cr-dits-desktop w-richtext">
                                <p>{{$item->col1}}<br/>
                                </p>
                              </div>
                              <div class="text-block-p cr-dits-desktop w-richtext">
                                <p>{{$item->col2}}<br/>
                                </p>
                              </div>
                              @endforeach
                            @endif

                            {{-- <div class="text-block-p cr-dits-desktop w-richtext">
                                <p>Client<br/>Creative Direction<br/>Production
                                    <br/>Music and Sound design<br/>Design and Motion Design
                                </p>
                            </div>
                            <div class="text-block-p cr-dits-desktop w-richtext">
                                <p>{{$archiveBio->client}}<br/>{{$archiveBio->creativeDir}}<br/>{{$archiveBio->production}}<br/>
                                    {{$archiveBio->music}}<br/>{{$archiveBio->design}}
                                </p>
                            </div> --}}
                        </div>
                    </div>
                    <div class="progress-container">
                        <div class="progressbar">
                            </div>
                        </div>
                    </div>
                    <div id="pauseboutton" data-w-id="d4573146-5d33-7076-a2a4-6dba27909098" style="opacity:0" class="embed-video-container">
                        <div class="embed-video is-playing w-embed">
                            <div  data-poster-url="" data-video-urls="@if(strpos($archiveBio->video, "http") !== false || strpos($archiveBio->video, "https") !== false) {{ $archiveBio->video }} @else {{ asset("videos/".$archiveBio->video) }} @endif"
                                data-autoplay="true" data-loop="true" data-preload="none" data-wf-ignore="true" style="width: 100%; height: 100%;" class="w-background-video w-background-video-atom">
                                <video id="video" loop="" autoplay="" muted="" style="background-image: url('');" playsinline="" data-wf-ignore="true" preload="none" data-object-fit="cover">
                                    <source src="@if(strpos($archiveBio->video, "http") !== false || strpos($archiveBio->video, "https") !== false) {{ $archiveBio->video }} @else {{ asset("videos/".$archiveBio->video) }} @endif" data-wf-ignore="true"/>
                                </video>
                            </div>
                        </div>
                    </div>
                    {{-- <div id="pauseboutton" data-w-id="d4573146-5d33-7076-a2a4-6dba27909098" style="opacity:0" class="embed-video-container">
                        <div class="embed-video is-playing w-embed">
                            <div  data-poster-url="" class="sqs-block embed-block sqs-block-embed" data-block-json="{&quot;html&quot;:&quot;<iframe src=\&quot;https://player.vimeo.com/video/795654312?background=1\&quot; style=\&quot;position:absolute;top:0;left:0;width:100%;height:100%;\&quot; frameborder=\&quot;0\&quot; allow=\&quot;autoplay; fullscreen\&quot; allowfullscreen></iframe>&quot;,&quot;resolvedBy&quot;:&quot;manual&quot;,&quot;customThumbEnabled&quot;:false}" data-block-type="22" id="block-66830911613f50451768"
                                data-autoplay="true" data-loop="true" data-preload="none" data-wf-ignore="true" style="width: 100%; height: 100%;" class="w-background-video w-background-video-atom">
                                <video id="video" loop="" autoplay="" muted="" style="background-image: url('');" playsinline="" data-wf-ignore="true" preload="none" data-object-fit="cover">
                                  <iframe allow="autoplay; fullscreen" allowfullscreen="" src="https://player.vimeo.com/video/795654312?background=1&amp;wmode=opaque" data-embed="true" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"></iframe>
                                </video>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div id="pauseboutton" data-w-id="d4573146-5d33-7076-a2a4-6dba27909098" style="opacity:0" class="embed-video-container">
                      <div class="embed-video is-playing w-embed">
                        <div data-fluid-engine="true">
                            <div class="fluid-engine fe-63e18e704ef84d715e5ffceb">
                                <div class="fe-block fe-block-66830911613f50451768">
                                    <div class="sqs-block embed-block sqs-block-embed" data-block-json="{&quot;html&quot;:&quot;<iframe src=\&quot;https://player.vimeo.com/video/795654312?background=1&mute=0\&quot; style=\&quot;position:absolute;top:0;left:0;\&quot; frameborder=\&quot;0\&quot; allow=\&quot;autoplay; fullscreen\&quot; allowfullscreen></iframe>&quot;,&quot;resolvedBy&quot;:&quot;manual&quot;,&quot;customThumbEnabled&quot;:false}" data-block-type="22" id="block-66830911613f50451768">
                                        <div class="sqs-block-content" id="yui_3_17_2_1_1675726981034_70" style="visibility: visible; opacity: 1; height: auto;">
                                            <iframe allow="autoplay; fullscreen" allowfullscreen="" src="https://player.vimeo.com/video/795654312?background=1&amp;wmode=opaque" data-embed="true" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div> --}}
                    {{-- <div style="padding:56.25% 0 0 0;position:relative;">
                      <iframe src="https://player.vimeo.com/video/795653021?h=1f739f4b7a&autoplay=1&loop=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                  </div> --}}

                    <div class="plus-container w-condition-invisible">
                        <div class="more-videos-container">
                            <a href="#" class="text-link more-videos videoc pointer-none w-inline-block w-condition-invisible">
                                <div class="video-number">c</div>
                            </a>
                            <a href="#" class="text-link more-videos videoc w-inline-block w-condition-invisible">
                                <div class="video-number">c</div>
                            </a>
                            <a href="#" class="text-link more-videos videob w-inline-block">
                                <div class="video-number">b</div>
                            </a>
                            <a href="#" class="text-link more-videos videob pointer-none w-inline-block w-condition-invisible">
                                <div class="video-number">b</div>
                            </a>
                            <a href="#" class="text-link more-videos videoa w-inline-block w-condition-invisible">
                                <div class="video-number">a</div>
                            </a>
                            <a href="#" class="text-link more-videos videoa pointer-none w-inline-block">
                                <div class="video-number">a</div>
                            </a>
                        </div>
                    </div>
                    <div class="black-infos"></div>
                </div>
                
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=636d31afbd19aa510b3b02cc" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://uploads-ssl.webflow.com/636d31afbd19aa510b3b02cc/js/webflow.849e56b93.js" type="text/javascript">
    </script><!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"></script>
    <script>
    // test for chrome
    if(navigator.vendor.match(/google/i)){
    
    // Set a cookie
    Cookies.set("activateSound", "soundValue", { expires: 365 });
    
    // Get a cookie
    Cookies.get("activateSound");
    
    // Check a cookie
    if (Cookies.get("activateSound") == "soundValue") {
       // do something
    }
    
    // Delete a cookie
    Cookies.remove('activateSound');
    
    // Loop through each item with a class
    $(".cms_item").each(function (index) {
      console.log( $(this).index() );
    });
    
    
    if (Cookies.get("soundMode") == "sound-on") {
         let myVideo = $('#video');
      $('.sound').toggleClass('hide');
      $('#soundon').toggleClass('active');
      myVideo.prop('muted', false);
    }
    
    
    $('.sound').on('click', function() {
      let soundActivation = $(this).attr('data-sound');
      Cookies.set("soundMode", soundActivation, { expires: 365 });
        let myVideo = $('#video');
      $('.sound').toggleClass('hide');
      $('#soundon').toggleClass('active');
      if ($('#soundon').hasClass('active')) {
          // First action
        myVideo.prop('muted', false);
      } else {
          // Second action
          myVideo.prop('muted', true);
      }
    });
    
    }
    
    else {
    
    
    $('.sound').on('click', function() {
        let myVideo = $('#video');
      $('.sound').toggleClass('hide');
      $('#soundon').toggleClass('active');
      if ($('#soundon').hasClass('active')) {
          // First action
        myVideo.prop('muted', false);
      } else {
          // Second action
          myVideo.prop('muted', true);
      }
    });
    
    }
    
    
    
    </script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144916431-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    gtag('config', 'UA-144916431-1');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
    
    <script>
    // declare onMobile variable
    let onMobile;
    // resizeEvent function
    const resizeEvent = function(){
      // if viewportWidth width <= 991
      if(window.innerWidth <= 991){
        // set onMobile as true
        onMobile = true;
      }
      else{
        // set onMobile as false
        onMobile = false;
      }
    }
    
    resizeEvent(); // run resizeEvent function onload
    
    $(window).on('resize', resizeEvent);
    window.onresize = function(){ location.reload(); }
    // run resizeEvent function onresize
    
    // on button click
    $('.hack-button').click(()=>{
      // if onMobile is false
      if(!onMobile){
        // run desktop function
      }
      else{ // if onMobile is true
        // run mobile function
      }	
    });
    
    
    
    //Video Loading
    video.onplaying = function() {
        $('.play-pause').text('Pause');
    };
    
    
    $('#pauseboutton').on('click', function() {
      if(video.paused) {
        video.play();
        $('.play-pause').text('Pause');
      } else {
        video.pause();
        $('.play-pause').text('Play');
      }
    });
    
    $('.controls').addClass('is-playing');
    $('.plus-container').addClass('is-playing');
    $('.embed-video').addClass('is-playing');
    
    
    
    
      $('.close-video').click(function(e){
      $('.controls').removeClass('is-playing');
        $('.plus-container').removeClass('is-playing');
        $('.embed-video').removeClass('is-playing');
        { e.preventDefault(); var linkUrl = $(this).attr('href'); setTimeout(function(url) { window.location = url; }, 400, linkUrl); }
      }); 
    
    
    
    //VIDEO 01
    var progressBar = document.querySelector('.progressbar');
    var progress = document.querySelector('.progress-container');
    //Progress bar
    video.addEventListener('timeupdate', function() {
        var juicePos = video.currentTime / video.duration;
        progressBar.style.width = juicePos * 100 + "%";
    });
    
    //Change progress bar on click
    progress.addEventListener('click', (e) =>{
      var progressTime = (e.offsetX / progress.offsetWidth) * video.duration
      video.currentTime = progressTime
    })
    
    //Open Credits
    $(".infos").on("click", function () {
      $(this).closest(".title-info").siblings(".open-credits").click();
      $(this).find(".dot").toggleClass("open");
      $(this).closest(".controls").siblings(".black-infos").toggleClass("is-open");
      $(this)
        .closest(".title-info")
        .siblings(".credits-container")
        .toggleClass("open");
    });
    
    //Hovering Controls
    $(".controls").on("mouseenter", function () {
      if(!onMobile){
        $(".more-videos-container").addClass("is-hovered");
      $(this).addClass("is-hovered");
      $(".plus-container").addClass("is-hovered");
      $(this).find(".progress-container").addClass("is-hovered");
      $(this).find(".infos-contain").addClass("is-hovered");
      if ($(this).find(".credits-container").hasClass("open")) {
        $(this).siblings(".black-infos").addClass("is-open");
      } else {
      }
      }
      else{ // if onMobile is true
        // run mobile function
      }	
    });
    
    
    $( document ).ready(function() {
      if(!onMobile){
        // run desktop function
      }
      else{ // if onMobile is true
    $(".more-videos-container").addClass("is-hovered");
      $('.controls').addClass("is-hovered");
      $(".plus-container").addClass("is-hovered");
      $(".progress-container").addClass("is-hovered");
      $(".infos-contain").addClass("is-hovered");
      }	
    });
    
    
    $(".embed-video-container").on("mouseenter", function () {
      if(!onMobile){
      $(".controls").removeClass("is-hovered");
      $(".more-videos-container").removeClass("is-hovered");
      $(".plus-container").removeClass("is-hovered");
      $(".controls").find(".progress-container").removeClass("is-hovered");
      $(".controls").find(".infos-contain").removeClass("is-hovered");
      if ($(".controls").find(".credits-container").hasClass("open")) {
        $(".controls").siblings(".black-infos").removeClass("is-open");
      } else {
      }
      }
      else{ // if onMobile is true
        // run mobile function
      }	
    });
    
    
    </script>
    <script>

        let lastPageUrl = document.referrer;
        const lastWord = lastPageUrl.split('/').pop();
        var route1 = '{{route("archive")}}'
        var route2 = '{{route("brebow-index")}}'
        $(".cancel").click(function(){
          
          if (lastWord == "archive") {
            window.location.href = "<?php echo route('archive'); ?>";
          } else {
            window.location.href = "<?php echo route('brebow-index'); ?>";
          }
        })

        if (lastWord == "archive") {
          $("#soundon").addClass("hide active")
          $("#unmutebutton").removeClass("hide")
          let myVideo = $('#video');
          myVideo.prop('muted', false);
        } else {
          $("#soundon").addClass("hide active")
          $("#unmutebutton").removeClass("hide")
          let myVideo = $('#video');
          myVideo.prop('muted', false);
        }
        
    </script>
</body>

</html>