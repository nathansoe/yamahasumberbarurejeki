<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="TllC_as_5qtEOns3OYBYvZzRICNuXm0Ldis8Tot9ZFA" />
  <meta name="description" content="@yield('meta_description', 'Dealer Yamaha Sumber Baru Rejeki Solo - Harga Yamaha Gear 125, Fazzio, Filano, NMax and service terbaik di Solo dan Jawa Tengah.')">
  <meta name="author" content="yamaha sumber baru rejeki">
  <meta name="keywords" content="@yield('meta_keywords', 'yamaha solo, yamaha di solo, dealer yamaha solo, dealer yamaha di solo, yamaha sumber baru rejeki, kredit motor yamaha, yamaha gear 125, yamaha nmax, yamaha fazzio')">
  <link rel="icon" href="{{ asset('assets/images/LOGOYAMAHA.png') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="canonical" href="@yield('canonical', rtrim(config('app.url'), '/') . request()->getRequestUri())" />
  @php
    $defaultDescription = 'Dealer Yamaha Sumber Baru Rejeki Solo - Harga Yamaha Gear 125, Fazzio, Filano, NMax and service terbaik di Solo dan Jawa Tengah.';
    $ogDescription = trim($__env->yieldContent('og_description')) ?: trim($__env->yieldContent('meta_description', $defaultDescription));
  @endphp
  <meta property="og:title" content="@yield('og_title', 'Dealer Motor Yamaha Sumber Baru Rejeki Solo')">
  <meta property="og:description" content="{{ $ogDescription }}">
  <meta property="og:image" content="@yield('og_image', asset('assets/images/LOGOYAMAHA.png'))">
  <meta property="og:url" content="@yield('og_url', rtrim(config('app.url'), '/') . request()->getRequestUri())">
  <meta property="og:type" content="@yield('og_type', 'website')">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="@yield('og_title', 'Dealer Motor Yamaha Sumber Baru Rejeki Solo')">
  <meta name="twitter:description" content="{{ $ogDescription }}">
  <meta name="twitter:image" content="@yield('og_image', asset('assets/images/LOGOYAMAHA.png'))">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:100,200,300,400,500,700,800,900" rel="stylesheet">
  
  <!--<script src="https://kit.fontawesome.com/e7ee126aa0.js" crossorigin="anonymous"></script>-->

  <title>@yield('title', 'Dealer Motor Yamaha Sumber Baru Rejeki Solo')</title>

  @php
    $jsonLdDescription = trim($__env->yieldContent('meta_description', 'Dealer Yamaha Sumber Baru Rejeki Solo - Harga Yamaha Gear 125, Fazzio, Filano, NMax and service terbaik di Solo dan Jawa Tengah.'));
    $jsonLdImage = trim($__env->yieldContent('og_image', asset('assets/images/LOGOYAMAHA.png')));
  @endphp

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "AutoDealer",
    "name": "Yamaha Sumber Baru Rejeki",
    "url": {{ json_encode(rtrim(config('app.url'), '/')) }},
    "logo": {{ json_encode(asset('assets/images/LOGOYAMAHA.png')) }},
    "description": {{ json_encode(
        Illuminate\Support\Str::limit(strip_tags($jsonLdDescription), 200, '...'),
        JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
    ) }},
    "image": {{ json_encode($jsonLdImage, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) }},
    "telephone": "+6281329296789",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Jl. Gatot Subroto No.150, Jayengan, Kec. Serengan",
      "addressLocality": "Kota Surakarta",
      "addressRegion": "Jawa Tengah",
      "postalCode": "57152",
      "addressCountry": "ID"
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
        "opens": "08:00",
        "closes": "18:00"
      },
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "Sunday",
        "opens": "09:00",
        "closes": "14:00"
      }
    ],
    "sameAs": [
      "https://www.facebook.com/yamahasumberbarurejeki",
      "https://www.instagram.com/yamahasumberbarurejeki"
    ]
  }
  </script>

  @stack('jsonld')

  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-233484146-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-233484146-1');
</script>

</head>
<body>
  @include('admin.layouts.components.header')
  <!-- Page Content -->
  @yield('content')

  @include('admin.layouts.components.footer')

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script src="{{ asset('assets/js/owl.js') }}"></script>
  <script>   $().ready(function () {
      $('[rel="tooltip"]').tooltip();

    });

    function rotateCard(btn) {
      var $card = $(btn).closest('.card-container');
      console.log($card);
      if ($card.hasClass('hover')) {
        $card.removeClass('hover');
      } else {
        $card.addClass('hover');
      }
    }
  </script>
  <script>
    function getValue(id_warna, id_motor){
      $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:"{{ url('/switch-warna') }}",
        method:'post',
        data:{id_warna:id_warna, id_motor: id_motor},
        success:function(response)
        {
          $('#show').html(response);
        }
      })
    }
  </script>
    <script>
    function getCategoryMotor(tipe, plat){
      $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:"{{ url('kategori-motor') }}",
        method:'post',
        data:{tipe:tipe, plat: plat},
        success:function(response)
        {
          console.log(response);
          $('#result').html(response);
        }
      })
    }
  </script>
</body>

</html>
