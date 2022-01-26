@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
<style>
  .box {
  position: absolute;
  left: 5px;
  top: 5px;
  width: 50px;
  height: 50px;
  animation: rotate 3s linear 0s infinite normal;
  transform: rotate(0deg);
  }

  .box1 {
  position: absolute;
  left: 5px;
  top: 5px;
  width: 50px;
  height: 50px;
  animation: rotate 3s linear 0.3s infinite normal;
  transform: rotate(0deg);
  }

  .box2 {
  position: absolute;
  left: 5px;
  top: 5px;
  width: 50px;
  height: 50px;
  animation: rotate 3s linear 0.6s infinite normal;
  transform: rotate(0deg);
  }

  .box3 {
  position: absolute;
  left: 5px;
  top: 5px;
  width: 50px;
  height: 50px;
  animation: rotate 3s linear 0.9s infinite normal;
  transform: rotate(0deg);
  }

  .circle {
  position: absolute;
  bottom: 0px;
  left: 50%;
  background-color: #0047AB;
  border-radius: 50%;
  width: 10px;
  height: 10px;
  z-index: 1;

  }

  .container {
  position: relative;
  width: 60px;
  height: 60px;
  margin: 0 auto;
  background-color: #00FFFF;
  }


  @keyframes rotate {
    0%   { transform: rotate(0deg);}
    90% { transform: rotate(365deg);}
    100% { transform: rotate(365deg);}
  }

body {
  color: red;
}

  </style>
  </head>


  <div class="container">
    <div class="box"> <div class="circle circle1"></div> </div>
      <div class="box1"> <div class="circle "></div> </div>
      <div class="box2"> <div class="circle "></div> </div>
      <div class="box3"> <div class="circle "></div> </div>
  </div>
