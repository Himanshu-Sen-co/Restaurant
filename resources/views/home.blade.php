<!doctype html>
<html lang="en">
  <head>
    <title>home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @livewireStyles
  </head>
  <body>
    
    
    <div class="mainDiv">
      <x-header/>
      <livewire:your-component-name />

    <h1 class="heading"><b>Welcome to my restorant</b></h1>
    <marquee  direction="up" behaviour="scroll">
  <p id=paraDashboard style="zoomIn visibility:visible ">
    
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsa nisi consequatur 
    sint delectus,<br> voluptas eaque explicabo quae commodi dignissimos! 
    Et natus libero porro, sapiente, cupiditate,<br> pariatur sequi ipsam beatae magni 
    aliquid quos autem at ullam <br>explicabo aliquam dicta! Officiis deleniti velit 
    debitis<br> aperiam ad excepturi, natus ullam mollitia alias.
  </p>
    </marquee>
</div>
<x-footer/>
@livewireScripts
  </body>
</html>