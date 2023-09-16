<!DOCTYPE html>
<!-- saved from url=(0028)https:// www.brebow.com/ -->
<html data-wf-domain=" www.brebow.com" data-wf-page="636d31afbd19aa93e23b02d0" data-wf-site="636d31afbd19aa510b3b02cc" class=" w-mod-js w-mod-ix" data-lt-installed="true">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>.wf-force-outline-none[tabindex="-1"]:focus{outline:none;}</style>
    <title>Brebow</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <link href="{{asset('webstyle\brebow.css')}}" rel="stylesheet" type="text/css"><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    
    <script type="text/javascript" async="" src="{{asset('webstyle\analytics.js.download')}}">
    </script>
    
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
  
  .logo_image{
        height: 55px;
        padding-top: 5px;
      }

      @media screen and (max-width: 991px) {
        .logo_image{
          height: 35px;
          padding-top: 5px;
        }
      }

</style>
  <style data-emotion="css-global">
  </style>
</head>
<body data-new-gr-c-s-check-loaded="14.1093.0" data-gr-ext-installed="">
  <outwrite-root></outwrite-root>
  <div style="opacity: 1;" class="play-pause-wrapper pointer-none">
    <div class="text-block-p play-pause" style="will-change: opacity, transform; opacity: 0.7695; transform: translate3d(-14.54vw, 9.922vh, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
      Play Demo
    </div>
  </div>
    <div class="nav-container">
      <div class="nav-wrapper">
        <a href="{{route('brebow-index')}}" aria-current="page" class="div-block-6 nom w-inline-block w--current">
          {{-- <div class="text-block-p">
            <img src="{{ asset('images\Black Background Logotype.png') }}" alt="" width="150" height="80" >
            Brebow</div> --}}
          <div class="sidebar-brand-text">
              <img src="{{asset('images\Black Background Logotype.png')}}" class="logo_image">
          </div>
        </a>
        <div class="div-block-6 contact">
          <div class="text-block-p">
            <a href="{{route('contact')}}" id="about">About</a>
            </div>
            <div class="text-block-p">
              <a href="{{ route('archive') }}">Archives</a>
              </div></div><div class="div-block-6">
                <div class="text-block-p fr-hide">Fr</div>
            </div>
          </div>
        </div>
        <div class="section">
          <div class="html-embed-2 w-embed">
            <style>

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

              .video-thumbnail.demo-thumbnail {
              pointer-events: auto;
              }

              .white-opacity{
              pointer-events: none;
              }

              .thumbnail-list-wrapper{
              pointer-events: none;
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
            </style>
</div>
<div class="black-opacity">
  </div>
  <div class="thumbnail-list-wrapper demo w-dyn-list">
    <div role="list" class="collection-list w-dyn-items">
      <div role="listitem" class="collection-item w-dyn-item">
        @if($single)
          <div class="demoreel-container">
            <a data-w-id="4eec0963-02d5-4ae5-5bed-23fa7024cc03" href="{{ route('home-single-video-display', ['id' => $single->id ]) }}" class="video-thumbnail is-small demo-thumbnail w-inline-block">
              <div class="html-embed-3 w-embed">
                <div data-poster-url="" data-video-urls="@if(strpos($single->gif, "http") !== false || strpos($single->gif, "https") !== false) {{ $single->gif }} @else {{ asset("gifs/".$single->gif) }} @endif" data-autoplay="true" data-loop="true" data-preload="none" data-wf-ignore="true" style="width: 100%; height: 100%;" class="w-background-video w-background-video-atom">
                  <video id="" loop="" autoplay="" muted="" style="background-image: url(&#39;&#39;);" playsinline="" data-wf-ignore="true" preload="none" data-object-fit="cover">
                    <source src="@if(strpos($single->gif, "http") !== false || strpos($single->gif, "https") !== false) {{ $single->gif }} @else {{ asset("gifs/".$single->gif) }} @endif" data-wf-ignore="true">
                  </video>
                </div>
              </div>
            </a>
          </div>
        @else
          <div class="demoreel-container">
            <a data-w-id="4eec0963-02d5-4ae5-5bed-23fa7024cc03" href="https:// www.brebow.com/videos/demo" class="video-thumbnail is-small demo-thumbnail w-inline-block">
              <div class="html-embed-3 w-embed">
                <div data-poster-url="" data-video-urls="https://player.vimeo.com/progressive_redirect/playback/735638856/rendition/1080p/file.mp4?loc=external&amp;signature=930e159b1155760e489eab2adaa787dd9666351a28930d0b4475d401bc87ea07" data-autoplay="true" data-loop="true" data-preload="none" data-wf-ignore="true" style="width: 100%; height: 100%;" class="w-background-video w-background-video-atom">
                  <video id="" loop="" autoplay="" muted="" style="background-image: url(&#39;&#39;);" playsinline="" data-wf-ignore="true" preload="none" data-object-fit="cover">
                    <source src="https://player.vimeo.com/progressive_redirect/playback/735638856/rendition/1080p/file.mp4?loc=external&amp;signature=930e159b1155760e489eab2adaa787dd9666351a28930d0b4475d401bc87ea07" data-wf-ignore="true">
                  </video>
                </div>
              </div>
            </a>
          </div>
        @endif
      </div>
    </div>
  </div>

<div class="thumbnail-list-wrapper w-dyn-list">
  @if(sizeof($archives) > 0)
    @foreach ($archives as $item)
      <div role="listitem" class="collection-item project-thumbnail w-dyn-item">
        <div class="video-thumbnail-container">
          <div class="video-thumbnail is-small w-embed">
            <div data-poster-url="" data-video-urls="@if(strpos($item->gif, "http") !== false || strpos($item->gif, "https") !== false) {{ $item->gif }} @else {{ asset("gifs/".$item->gif) }} @endif" data-autoplay="true" data-loop="true" data-preload="none" data-wf-ignore="true" style="width: 100%; height: 100%;" class="w-background-video w-background-video-atom">
              <video id="" loop="" autoplay="" muted="" style="background-image: url(&#39;&#39;);" playsinline="" data-wf-ignore="true" preload="none" data-object-fit="cover">
                <source src="@if(strpos($item->gif, "http") !== false || strpos($item->gif, "https") !== false) {{ $item->gif }} @else {{ asset("gifs/".$item->gif) }} @endif" data-wf-ignore="true">
              </video>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    @if($single)
    <div role="listitem" class="collection-item project-thumbnail w-dyn-item">
      <div class="video-thumbnail-container">
        <div class="video-thumbnail is-small w-embed">
          <div data-poster-url="" data-video-urls="@if(strpos($single->video, "http") !== false || strpos($single->video, "https") !== false) {{ $single->video }} @else {{ asset("gifs/".$single->video) }} @endif" data-autoplay="true" data-loop="true" data-preload="none" data-wf-ignore="true" style="width: 100%; height: 100%;" class="w-background-video w-background-video-atom">
            <video id="" loop="" autoplay="" muted="" style="background-image: url(&#39;&#39;);" playsinline="" data-wf-ignore="true" preload="none" data-object-fit="cover">
              <source src="@if(strpos($single->video, "http") !== false || strpos($single->video, "https") !== false) {{ $single->video }} @else {{ asset("gifs/".$single->video) }} @endif" data-wf-ignore="true">
            </video>
          </div>
        </div>
      </div>
    </div>
    @endif
  @else
    <div role="listitem" class="collection-item project-thumbnail w-dyn-item">
      <div class="video-thumbnail-container">
        <div class="video-thumbnail is-small w-embed">
          <div data-poster-url="" data-video-urls="https://player.vimeo.com/progressive_redirect/playback/735605471/rendition/1080p/file.mp4?loc=external&amp;signature=f8cd73086c45706836487d07fed099ef7fcab29fe2cc29972dd418f5252e4770" data-autoplay="true" data-loop="true" data-preload="none" data-wf-ignore="true" style="width: 100%; height: 100%;" class="w-background-video w-background-video-atom">
            <video id="" loop="" autoplay="" muted="" style="background-image: url(&#39;&#39;);" playsinline="" data-wf-ignore="true" preload="none" data-object-fit="cover">
              <source src="https://player.vimeo.com/progressive_redirect/playback/735605471/rendition/1080p/file.mp4?loc=external&amp;signature=f8cd73086c45706836487d07fed099ef7fcab29fe2cc29972dd418f5252e4770" data-wf-ignore="true">
            </video>
          </div>
        </div>
      </div>
    </div>
    
    <div role="listitem" class="collection-item project-thumbnail w-dyn-item">
      <div class="video-thumbnail-container">
        <div class="video-thumbnail is-small w-embed">
          <div data-poster-url="" data-video-urls="https://player.vimeo.com/progressive_redirect/playback/776304782/rendition/1080p/file.mp4?loc=external&amp;signature=d0cf18e2b7494d062c81beb3bf0f96482da8d5f2a0c89dbd7200396940e97a2c" data-autoplay="true" data-loop="true" data-preload="none" data-wf-ignore="true" style="width: 100%; height: 100%;" class="w-background-video w-background-video-atom">
            <video id="" loop="" autoplay="" muted="" style="background-image: url(&#39;&#39;);" playsinline="" data-wf-ignore="true" preload="none" data-object-fit="cover">
              <source src="https://player.vimeo.com/progressive_redirect/playback/776304782/rendition/1080p/file.mp4?loc=external&amp;signature=d0cf18e2b7494d062c81beb3bf0f96482da8d5f2a0c89dbd7200396940e97a2c" data-wf-ignore="true">
            </video>
          </div>
        </div>
      </div>
    </div>
    
    <div role="listitem" class="collection-item project-thumbnail w-dyn-item">
      <div class="video-thumbnail-container">
        <div class="video-thumbnail is-small w-embed">
          <div data-poster-url="" data-video-urls="https://player.vimeo.com/progressive_redirect/playback/776299833/rendition/1080p/file.mp4?loc=external&amp;signature=ef621c71ada850b30f831bba85874784ab5a1e6e1a844138a9f8c9da4168fbec" data-autoplay="true" data-loop="true" data-preload="none" data-wf-ignore="true" style="width: 100%; height: 100%;" class="w-background-video w-background-video-atom">
            <video id="" loop="" autoplay="" muted="" style="background-image: url(&#39;&#39;);" playsinline="" data-wf-ignore="true" preload="none" data-object-fit="cover">
              <source src="https://player.vimeo.com/progressive_redirect/playback/776299833/rendition/1080p/file.mp4?loc=external&amp;signature=ef621c71ada850b30f831bba85874784ab5a1e6e1a844138a9f8c9da4168fbec" data-wf-ignore="true">
            </video>
          </div>
        </div>
      </div>
    </div>
    
    <div role="listitem" class="collection-item project-thumbnail w-dyn-item">
      <div class="video-thumbnail-container">
        <div class="video-thumbnail is-small w-embed">
          <div data-poster-url="" data-video-urls="https://player.vimeo.com/progressive_redirect/playback/603436154/rendition/720p/720p.mp4?loc=external&amp;signature=96011a111bb82748eb2a3d7403fc0e2e7d0bf58223a781eb7e043ce23f3dad94" data-autoplay="true" data-loop="true" data-preload="none" data-wf-ignore="true" style="width: 100%; height: 100%;" class="w-background-video w-background-video-atom">
            <video id="" loop="" autoplay="" muted="" style="background-image: url(&#39;&#39;);" playsinline="" data-wf-ignore="true" preload="none" data-object-fit="cover">
              <source src="https://player.vimeo.com/progressive_redirect/playback/603436154/rendition/720p/720p.mp4?loc=external&amp;signature=96011a111bb82748eb2a3d7403fc0e2e7d0bf58223a781eb7e043ce23f3dad94" data-wf-ignore="true">
            </video>
          </div>
        </div>
      </div>
    </div>
    
    <div role="listitem" class="collection-item project-thumbnail w-dyn-item">
      <div class="video-thumbnail-container">
        <div class="video-thumbnail is-small w-embed">
          <div data-poster-url="" data-video-urls="https://player.vimeo.com/external/662811271.hd.mp4?s=c075f1e1eefb92550600d6c6d6e903debe0f2030&amp;profile_id=174" data-autoplay="true" data-loop="true" data-preload="none" data-wf-ignore="true" style="width: 100%; height: 100%;" class="w-background-video w-background-video-atom">
            <video id="" loop="" autoplay="" muted="" style="background-image: url(&#39;&#39;);" playsinline="" data-wf-ignore="true" preload="none" data-object-fit="cover">
              <source src="https://player.vimeo.com/external/662811271.hd.mp4?s=c075f1e1eefb92550600d6c6d6e903debe0f2030&amp;profile_id=174" data-wf-ignore="true">
            </video>
          </div>
        </div>
      </div>
    </div>
    
    <div role="listitem" class="collection-item project-thumbnail w-dyn-item">
      <div class="video-thumbnail-container">
        <div class="video-thumbnail is-small w-embed">
          <div data-poster-url="" data-video-urls="https://player.vimeo.com/external/662811311.hd.mp4?s=535e5dfab4a50d0985b53544d0b6827bf78604f2&amp;profile_id=174" data-autoplay="true" data-loop="true" data-preload="none" data-wf-ignore="true" style="width: 100%; height: 100%;" class="w-background-video w-background-video-atom">
            <video id="" loop="" autoplay="" muted="" style="background-image: url(&#39;&#39;);" playsinline="" data-wf-ignore="true" preload="none" data-object-fit="cover">
              <source src="https://player.vimeo.com/external/662811311.hd.mp4?s=535e5dfab4a50d0985b53544d0b6827bf78604f2&amp;profile_id=174" data-wf-ignore="true">
            </video>
          </div>
        </div>
      </div>
    </div>
    
    <div role="listitem" class="collection-item project-thumbnail w-dyn-item is--current">
      <div class="video-thumbnail-container">
        <div class="video-thumbnail is-small w-embed">
          <div data-poster-url="" data-video-urls="https://player.vimeo.com/progressive_redirect/playback/776304489/rendition/1080p/file.mp4?loc=external&amp;signature=e7eafcd0636733ac28059ec89b031b142aaf4194df7fc3ed6b55c801e78df7d7" data-autoplay="true" data-loop="true" data-preload="none" data-wf-ignore="true" style="width: 100%; height: 100%;" class="w-background-video w-background-video-atom">
            <video id="" loop="" autoplay="" muted="" style="background-image: url(&#39;&#39;);" playsinline="" data-wf-ignore="true" preload="none" data-object-fit="cover">
              <source src="https://player.vimeo.com/progressive_redirect/playback/776304489/rendition/1080p/file.mp4?loc=external&amp;signature=e7eafcd0636733ac28059ec89b031b142aaf4194df7fc3ed6b55c801e78df7d7" data-wf-ignore="true">
            </video>
          </div>
        </div>
      </div>
    </div>
    
    <div role="listitem" class="collection-item project-thumbnail w-dyn-item">
      <div class="video-thumbnail-container">
        <div class="video-thumbnail is-small w-embed">
          <div data-poster-url="" data-video-urls="https://player.vimeo.com/external/662811215.hd.mp4?s=3f343bdde7f1b602e15baf6dd52b604476f72640&amp;profile_id=174" data-autoplay="true" data-loop="true" data-preload="none" data-wf-ignore="true" style="width: 100%; height: 100%;" class="w-background-video w-background-video-atom">
            <video id="" loop="" autoplay="" muted="" style="background-image: url(&#39;&#39;);" playsinline="" data-wf-ignore="true" preload="none" data-object-fit="cover">
              <source src="https://player.vimeo.com/external/662811215.hd.mp4?s=3f343bdde7f1b602e15baf6dd52b604476f72640&amp;profile_id=174" data-wf-ignore="true">
            </video>
          </div>
        </div>
      </div>
    </div>
  @endif

</div>


</div>
</div>

<div data-w-id="c2596d9b-11fa-d55a-8122-b5d26eaee0e3" style="opacity: 1; transform: translate3d(0px, 0vw, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="videos-numbers">
  <div class="collection-list-wrapper-3 w-dyn-list">
    <div role="list" class="video-links-container w-dyn-items">
      @if(sizeof($archives) > 0)
        @foreach ($archives as $key => $archive)
        
          <div role="listitem" class="text-link mobile-color w-dyn-item">
            <a href="{{ route('home-video-display', ['id' => $archive->id ]) }}" class="project-link w-inline-block">
              <div class="video-number">{{ $key+1 }}</div>
            </a>
          </div>      
        @endforeach
        <div role="listitem" class="text-link mobile-color w-dyn-item">
          <a href="{{ route('archive') }}" class="project-link w-inline-block">
            <div class="video-number">+</div>
          </a>
        </div>
      @else
        <div role="listitem" class="text-link mobile-color w-dyn-item">
          <a href="{{ route('video1') }}" class="project-link w-inline-block">
            <div class="video-number">1</div>
          </a>
        </div>
        
        <div role="listitem" class="text-link mobile-color w-dyn-item">
          <a href="{{ route('video2') }}" class="project-link w-inline-block">
            <div class="video-number">2</div>
          </a>
        </div>
        
        <div role="listitem" class="text-link mobile-color w-dyn-item">
          <a href="{{ route('video3') }}" class="project-link w-inline-block">
            <div class="video-number">3</div>
          </a>
        </div>
        <div role="listitem" class="text-link mobile-color w-dyn-item">
          <a href="{{ route('video4') }}" class="project-link w-inline-block">
            <div class="video-number">4</div>
          </a>
        </div>
        <div role="listitem" class="text-link mobile-color w-dyn-item">
          <a href="{{ route('video5') }}" class="project-link w-inline-block">
            <div class="video-number">5</div>
          </a>
        </div>
        <div role="listitem" class="text-link mobile-color w-dyn-item">
          <a href="{{ route('video6') }}" class="project-link w-inline-block">
            <div class="video-number">6</div>
          </a>
        </div>
        <div role="listitem" class="text-link mobile-color w-dyn-item is--current">
          <a href="{{ route('video7') }}" class="project-link w-inline-block">
            <div class="video-number">7</div>
          </a>
        </div>
        <div role="listitem" class="text-link mobile-color w-dyn-item">
          <a href="{{ route('archive') }}" class="project-link w-inline-block">
            <div class="video-number">+</div>
          </a>
        </div>
      @endif

    </div>
  </div>
</div>
<div class="white-opacity"></div>
<script src="{{asset('webstyle\jquery-3.5.1.min.dc5e7f18c8.js.download')}}" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('webstyle\js.cookie.min.js.download') }}" type="text/javascript">
</script><!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
<script src="{{asset('webstyle\webflow.849e56b93.js.download')}}"></script>

<!-- new logic -->
<script> 
    // Disable right-click
    // document.addEventListener('contextmenu', (e) => e.preventDefault());
    
    // function ctrlShiftKey(e, keyCode) {
    //   return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
    // }
    
    // document.onkeydown = (e) => {
    //   // Disable F12, Ctrl + Shift + I, Ctrl + Shift + J, Ctrl + U
    //   if (
    //     event.keyCode === 123 ||
    //     ctrlShiftKey(e, 'I') ||
    //     ctrlShiftKey(e, 'J') ||
    //     ctrlShiftKey(e, 'C') ||
    //     (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
    //   )
    //     return false;
    // };
</script>

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
<script async="" src="./Amélie Haeck_files/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
gtag('config', 'UA-144916431-1');
</script>
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



$('.project-thumbnail').eq(0).addClass('is--current');
$('.text-link').eq(0).addClass('is--current');


let myTimer;
$(".text-link").on('click', function () {
  $(".is--current").removeClass("is--current");
  $(this).addClass("is--current");
  let myIndex = $(this).index();
  $(".project-thumbnail").eq(myIndex).addClass("is--current");
  clearInterval(myTimer);
  runInterval();
});

function runInterval() {
  myTimer = setInterval(function () {
    let currentItems = $(".is--current");
    if (currentItems.next().length > 0) {
      currentItems.next().addClass("is--current");
    } else {
      $(".project-thumbnail").eq(0).addClass("is--current");
      $(".text-link").eq(0).addClass("is--current");
    }
    currentItems.removeClass("is--current");
  }, 2000);
}
runInterval();




$(".text-link").on('mouseenter mouseleave', function () {
var myIndex = $(this).index();
console.log(myIndex);
if ($(this).hasClass("demo")) {
  }
else {
  $(".video-thumbnail-container").eq(myIndex).toggleClass("is-hovering");
  $(".demoreel-container").toggleClass("hide");
}
});


$(".text-link").on('mouseenter mouseleave', function () {
  $(".video-thumbnail").toggleClass("is-small");
  });

const mediaQuery = window.matchMedia('(min-width: 768px)')
// Check if the media query is true
if (mediaQuery.matches) {
  // Then trigger an alert
  $('.project-link, .demo-thumbnail').click(function(e){
    $(".video-thumbnail").addClass("is-playing");
    $(".video-links-container").addClass("is-playing");
    { e.preventDefault(); var linkUrl = $(this).attr('href'); setTimeout(function(url) { window.location = url; }, 500, linkUrl); }}); 
}


$('.demo-thumbnail').on('click', function() {
  $(this).addClass('clicked');
});



</script>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true">

</grammarly-desktop-integration>
</html>