<!DOCTYPE html>
<!-- saved from url=(0036)https:// www.brebow.com/archives -->
<html data-wf-domain=" www.brebow.com" data-wf-page="636d31afbd19aa29ec3b02d2" data-wf-site="636d31afbd19aa510b3b02cc" class=" w-mod-js w-mod-ix" data-lt-installed="true"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style>.wf-force-outline-none[tabindex="-1"]:focus{outline:none;}</style>
  <title>Archives</title>
  <meta content="Archives" property="og:title"><meta content="Archives" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  
<link href="{{ asset('webstyle\Archives_files\brebow.css') }}" rel="stylesheet" type="text/css"><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
<script type="text/javascript" async="" src="{{ asset('webstyle\Archives_files\analytics.js.download') }}"></script>

<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
<link href="{{ asset('images\White-Background-Icon.png') }}" rel="shortcut icon" type="image/x-icon">
<link href="{{ asset('images\White-Background-Icon.png') }}" rel="apple-touch-icon">

<style>


* {
  -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
      -o-font-smoothing: antialiased;
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
<body class="body-2" data-new-gr-c-s-check-loaded="14.1093.0" data-gr-ext-installed="">
  <outwrite-root>

  </outwrite-root>
  <div class="nav-container">
    <div class="nav-wrapper">
      <a id="home" data-w-id="396a7d8a-d017-659d-d178-bbfaad868557" href="{{route('brebow-index')}}" class="div-block-6 nom w-inline-block">
        {{-- <div class="text-block-p">Brebow</div> --}}
        <div class="sidebar-brand-text">
          <img src="{{asset('images\White Background Logotype.png')}}" class="logo_image">
        </div>
      </a>
      <div class="div-block-6 contact"><div class="text-block-p"><a href="{{ route('contact') }}">About</a>
      </div>
      <div class="text-block-p"><a href="{{ route('archive') }}" aria-current="page" class="w--current">Archives</a>
      </div>
    </div>
    <a href="{{ route('contact') }}" class="div-block-6 hide w-inline-block">
      <div class="text-block-p">Fr</div>
    </a>
  </div>
</div>
<div class="section padding">
  <div class="div-block-7">
    <div class="grid-4 archive nav">
      <a id="Clients" sort-by=".year" href="{{route('archive')}}" class="link-block-2 sort-button w-inline-block">
        <div class="dot red">
          </div>
          <div class="text-block-p">Project</div>
        </a>
        <a id="Clients" sort-by=".client" href="{{route('archive')}}" class="link-block-2 hide-mobile-portrait sort-button w-inline-block">
          <div class="dot red"></div>
          <div class="text-block-p">Client</div>
        </a>
        <a id="Clients" sort-by=".project" href="{{route('archive')}}" class="link-block-2 hide-mobile sort-button w-inline-block">
          <div class="dot red">
            </div>
            <div class="text-block-p">Production</div>
          </a>
          <a id="Clients" sort-by=".secteur" href="{{route('archive')}}" class="link-block-2  sort-button w-inline-block">
            <div class="dot red">
              </div>
              <div class="text-block-p">Industry</div>
            </a>
          </div>
          {{-- real row --}}
          <div class="w-dyn-list"><div role="list" class="collection-list w-dyn-items">
            @if(sizeof($archives) > 0)
              @foreach ($archives as $arch)
              
                <div role="listitem" class="w-dyn-item">
                  <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="{{ route('video', ['id' => $arch->id ]) }}" class="grid-4 archive w-inline-block">
                    <div class="text-block-p year">{{ $arch->year }}</div>
                    <div class="text-block-p hide-mobile-portrait client">{{ $arch->client }}</div>
                    <div class="text-block-p hide-mobile mobile-padding project">{{ $arch->project }}</div>
                    <div class="text-block-p  secteur">{{ $arch->industry }}</div>
                    <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2"class="tgumb-img-wrap pointer-none">
                      <img src="@if(strpos($arch->gif, "http") !== false || strpos($arch->gif, "https") !== false) {{ $arch->gif }} @else {{ asset("gifs/".$arch->gif) }} @endif" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    </div>
                  </a>
                </div>
              @endforeach
            @else 

              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/kombi" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2023</div>
                  <div class="text-block-p hide-mobile-portrait client">Kombi</div>
                  <div class="text-block-p mobile-padding project">RedHEAT</div>
                  <div class="text-block-p hide-mobile secteur">Lifestyle</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2"class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/6386525aff80863a82a78654_220704_Kombi x Redheat_15s_16x9_EN_1_1_1.gif')}}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>

              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/softstart" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2023</div>
                  <div class="text-block-p hide-mobile-portrait client">Deux Huit Huit</div>
                  <div class="text-block-p mobile-padding project">Softstart</div>
                  <div class="text-block-p hide-mobile secteur">Technology</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/636d31afbd19aa0ff83b032a_Plan de travail 1.png') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
                  </a>
              </div>

              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/altitude-sports-a" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2022</div>
                  <div class="text-block-p hide-mobile-portrait client">Altitude Sports</div>
                  <div class="text-block-p mobile-padding project">Campaign SS22</div>
                  <div class="text-block-p hide-mobile secteur">Lifestyle</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/636d31afbd19aa44563b0326_Capture-d’écran,-le-2022-03-17-à-12.40.33.jpg') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" sizes="20vw" srcset="https://uploads-ssl.webflow.com/636d31afbd19aa2f573b02cf/636d31afbd19aa44563b0326_Capture-d%25E2%2580%2599e%25CC%2581cran%252C-le-2022-03-17-a%25CC%2580-12.40.33-p-500.jpeg 500w, https://uploads-ssl.webflow.com/636d31afbd19aa2f573b02cf/636d31afbd19aa44563b0326_Capture-d%E2%80%99e%CC%81cran%2C-le-2022-03-17-a%CC%80-12.40.33.jpg 600w" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
              
              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/starbucks" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2022</div>
                  <div class="text-block-p hide-mobile-portrait client">Starbucks</div>
                  <div class="text-block-p mobile-padding project">Starbucks Canada FW22</div>
                  <div class="text-block-p hide-mobile secteur">Food &amp; Beverage</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/6386606bb3528795d88840dd_220810_Starbucks_Pumpkin_16x9_15s_Launch_Website.gif') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
              
              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/equiterre" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2022</div>
                  <div class="text-block-p hide-mobile-portrait client">Équiterre</div>
                  <div class="text-block-p mobile-padding project">Équiterre</div>
                  <div class="text-block-p hide-mobile secteur">OBNL</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/638654254be4785fcbcf389d_Thumbnail.gif') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
              
              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/medable" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2021</div>
                  <div class="text-block-p hide-mobile-portrait client">Medable</div>
                  <div class="text-block-p mobile-padding project">Brand Vision</div>
                  <div class="text-block-p hide-mobile secteur">Healthcare</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/636d31afbd19aaa71a3b0324_ezgif-1-9d96fe9f1d.gif') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
              
              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/2-x-2" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2021</div>
                  <div class="text-block-p hide-mobile-portrait client">Théâtre de Quat'Sous</div>
                  <div class="text-block-p mobile-padding project">2 x 2</div>
                  <div class="text-block-p hide-mobile secteur">Arts &amp; Culture</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/636d31afbd19aa2e223b030e_ezgif-1-cc5b8d8734.gif') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
              
              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/esse" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2021</div>
                  <div class="text-block-p hide-mobile-portrait client">Esse</div>
                  <div class="text-block-p mobile-padding project">Esse</div>
                  <div class="text-block-p hide-mobile secteur">Arts &amp; Culture</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/636d31afbd19aa01943b031e_ezgif-1-396104db7b.gif') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
              
              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/projet-5-indigo" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2021</div>
                  <div class="text-block-p hide-mobile-portrait client">Indigo</div>
                  <div class="text-block-p mobile-padding project">Turn the page</div>
                  <div class="text-block-p hide-mobile secteur">Lifestyle</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/636d31afbd19aab6c23b031f_Capture-d’écran,-le-2022-03-15-à-13.31.25.jpg') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
              
              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/projet-7a-phi" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2021</div>
                  <div class="text-block-p hide-mobile-portrait client">Phi</div>
                  <div class="text-block-p mobile-padding project">Stan Douglas: Revealing Narratives</div>
                  <div class="text-block-p hide-mobile secteur">Arts &amp; Culture</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/636d31afbd19aa62753b0323_ezgif-5-b918795817.gif') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
              
              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/yoplait" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2021</div>
                  <div class="text-block-p hide-mobile-portrait client">Yoplait</div>
                  <div class="text-block-p mobile-padding project">Simply 3</div>
                  <div class="text-block-p hide-mobile secteur">Food and Beverage</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/636d31afbd19aa63d13b0327_ezgif-1-80ac313c9f.gif') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
              
              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/festival-la-noce" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2020</div>
                  <div class="text-block-p hide-mobile-portrait client">Duprince Records</div>
                  <div class="text-block-p mobile-padding project">Festival La Noce</div>
                  <div class="text-block-p hide-mobile secteur">Arts and Culture</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/636d31afbd19aa32723b0329_ezgif-1-fbb254a04d.gif') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
              
              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/rdvdesign-a" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2020</div>
                  <div class="text-block-p hide-mobile-portrait client">Infopresse</div>
                  <div class="text-block-p mobile-padding project">Rendez-vous design</div>
                  <div class="text-block-p hide-mobile secteur">Arts &amp; Culture</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/636d31afbd19aa6ce73b0321_Capture-d’écran,-le-2022-03-15-à-13.51.06.jpg') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" sizes="20vw" srcset="https://uploads-ssl.webflow.com/636d31afbd19aa2f573b02cf/636d31afbd19aa6ce73b0321_Capture-d%25E2%2580%2599e%25CC%2581cran%252C-le-2022-03-15-a%25CC%2580-13.51.06-p-500.jpeg 500w, https://uploads-ssl.webflow.com/636d31afbd19aa2f573b02cf/636d31afbd19aa6ce73b0321_Capture-d%E2%80%99e%CC%81cran%2C-le-2022-03-15-a%CC%80-13.51.06.jpg 800w" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
              
              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/spotify" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2020</div>
                  <div class="text-block-p hide-mobile-portrait client">Spotify</div>
                  <div class="text-block-p mobile-padding project">Anchor</div>
                  <div class="text-block-p hide-mobile secteur">Technology</div><div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/636d31afbd19aa2fc23b02f7_210105_Projet2-Thumbnail_V2_1-.gif') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
              
              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/projet-8-cantine" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2020</div>
                  <div class="text-block-p hide-mobile-portrait client">La Cantine pour tous</div>
                  <div class="text-block-p mobile-padding project">Explainer Video</div>
                  <div class="text-block-p hide-mobile secteur">OBNL</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/636d31afbd19aaa6c23b0322_ezgif-5-042793946a.gif') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
              
              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/aqua-hacking-fest" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2019</div>
                  <div class="text-block-p hide-mobile-portrait client">Aqua Hacking</div>
                  <div class="text-block-p mobile-padding project">Aqua Hacking Fest</div>
                  <div class="text-block-p hide-mobile secteur">OBNL</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/636d31afbd19aa4fc13b0328_AHF_01.gif') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
              
              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/otstcfq" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2019</div>
                  <div class="text-block-p hide-mobile-portrait client">OTSTCFQ</div>
                  <div class="text-block-p mobile-padding project">Manifesto</div>
                  <div class="text-block-p hide-mobile secteur">Healthcare</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/636d31afbd19aa5ef13b0325_ezgif-5-5707a2bbcd.gif') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
              
              <div role="listitem" class="w-dyn-item">
                <a id="w-node-_62197054-0d5d-e94f-7902-01516f17e2ef-ec3b02d2" href="https:// www.brebow.com/videos/cna" class="grid-4 archive w-inline-block">
                  <div class="text-block-p year">2019</div>
                  <div class="text-block-p hide-mobile-portrait client">CNA</div>
                  <div class="text-block-p mobile-padding project">Opening Title</div>
                  <div class="text-block-p hide-mobile secteur">Arts &amp; Culture</div>
                  <div id="w-node-d9334920-afcf-dc63-c8fc-0cf0f9e2e43a-ec3b02d2" class="tgumb-img-wrap pointer-none">
                    <img src="{{asset('webstyle/Archives_files/636d31afbd19aa478b3b0320_ezgif-1-a359581345.gif') }}" loading="lazy" id="w-node-_38c9284c-9b18-739d-1b3f-513d9ba38626-ec3b02d2" alt="" class="thumb-img-archive" style="will-change: transform; transform: translate3d(-18.428vw, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                  </div>
                </a>
              </div>
            @endif
            
          </div>
        </div>
      </div>
    </div>
    <div class="html-embed-2 w-embed">
    <style>
      a {
          color: inherit;
      }
  
      .collection-list:hover .grid-4{
      opacity: 30%;
      }
  
      .collection-list:hover .grid-4:hover{
      opacity: 100%;
      }
  
      .pointer-none{
      pointer-events: none;
  
      }
      .sort-active .dot {
      background-color: red;
      }
  
      .sort-active  {
      opacity:100;
      }
  
      .grid-4:hover .thumb-img-archive {
      opacity:100;
      }
    </style>
</div>

<!-- new logic -->
<script> 
    // Disable right-click
    document.addEventListener('contextmenu', (e) => e.preventDefault());
    
    function ctrlShiftKey(e, keyCode) {
      return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
    }
    
    document.onkeydown = (e) => {
      // Disable F12, Ctrl + Shift + I, Ctrl + Shift + J, Ctrl + U
      if (
        event.keyCode === 123 ||
        ctrlShiftKey(e, 'I') ||
        ctrlShiftKey(e, 'J') ||
        ctrlShiftKey(e, 'C') ||
        (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
      )
        return false;
    };
</script>
<script src="{{ asset('webstyle\Archives_files\jquery-3.5.1.min.dc5e7f18c8.js.download') }}" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
</script>
<script src="{{ asset('webstyle\Archives_files\webflow.849e56b93.js.download') }}" type="text/javascript"></script><!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
<script src="{{ asset('webstyle\Archives_files\js.cookie.min.js.download') }}"></script>
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
<script async="" src="{{ asset('webstyle\Archives_files\js') }}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
gtag('config', 'UA-144916431-1');
</script>
<script>
  $('#home').click(function(e){
    { e.preventDefault(); var linkUrl = $(this).attr('href'); setTimeout(function(url) { window.location = url; }, 500, linkUrl); }}); 


</script>

<!-- Hosted Library script file on CDN for free -->
<script src="./Archives_files/cmslibrary-v1.8.js.download"></script>
<script>
(function() {
	// create a new Library instance and store it in a variable called "projectsGrid"
	var projectsGrid = new FsLibrary('.collection-list')
  // run combine on our instance

	projectsGrid.sort({
		sortTrigger:".sort-button",
		activeClass:"sort-active",
		animation: {
			duration: 0
			}
		})
})();
</script></body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>