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
  color: blue;
}

  </style>

  <style>
.frame {
  position: absolute;
  top: 19rem;
  left: 50%;
  width: 400px;
  height: 400px;
  margin-top: -200px;
  margin-left: -200px;
  border-radius: 2px;
	box-shadow: 4px 8px 16px 0 rgba(0,0,0,0.1);
	overflow: hidden;
  background: #2C2E2E;
  color: #333;
	font-family: 'Open Sans', Helvetica, sans-serif;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.center {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}

.frame .circle, .frame .circle1 {
	width: 30px;
	height: 30px;
	background-color: #000;
	position: absolute;
	top: 5rem;
	left: 6rem;
	border-radius: 50%;
	z-index: 1;
	animation: eye 1s ease-in-out infinite;
	z-index: 11;
}

.frame .circle1 {
	background-color: #fff;
	width: 17px;
	height: 17px;
	left: 6.45rem;
	top: 5.4rem;
}

.three {
	top: 4rem;
	left: 3rem;
	width: 0px;
  height: 0px;
  border-radius: 100px;
  border: 60px solid aqua;
  border-top-color: transparent;
  -webkit-transform: rotate(135deg);
	position: absolute;
	animation: mouth1 1s ease-in-out infinite;
	z-index: 10;
}

.four {
	top: 4rem;
	left: 3rem;
	width: 0px;
  height: 0px;
  border-radius: 100px;
  border: 60px solid aqua;
  border-top-color: transparent;
  -webkit-transform: rotate(45deg);
	position: absolute;
	animation: mouth2 1s ease-in-out infinite;
	z-index: 10;
}

.dots {
	width: 320px;
	height: 40px;
	position: absolute;
	right: 0rem;
	top: 6.5rem;
	z-index: 1;
}

.point {
	width: 20px;
	height: 20px;
	background-color: yellow;
	position: absolute;
	//right: -2rem;
	border-radius: 50%;
	top: 10px;
	z-index: -1;
	//animation: dot 2.5s linear infinite;
}

.dot1 {
	//left: 6rem;
	right: -1rem;
	animation: dot1 2s linear infinite;
}

.dot2 {
	right: -5rem;
	animation: dot1 2s linear 1s infinite;
}

.dot3 {
	right: -9rem;
	animation: dot1 2s linear 2s infinite;
}

.dot4 {
	right: -13rem;
}

@keyframes dot1 {
	0% {
		right: -1rem;
	}
	100% {
		right: 18rem;
	}
}

@keyframes dot2 {
	0% {
		right: -5rem;
	}
	100% {
		right: 20rem;
	}
}

@keyframes dot3 {
	0% {
		right: -9rem;
	}
	100% {
		right: 20rem;
	}
}

@keyframes dot4 {
	0% {
		right: -13rem;
	}
	100% {
		right: 20rem;
	}
}

@keyframes mouth1 {
	0%, 100% {
		transform: rotate(135deg);
	}

	50% {
		transform: rotate(110deg);
	}
}

@keyframes mouth2 {
	0%, 100% {
		transform: rotate(45deg);
	}

	50% {
		transform: rotate(80deg);
	}
}

@keyframes eye {
	0%, 100% {
		transform: translate3d(0,0,0);
	}
	50% {
		transform: translate3d(-6px, -3px, 0);
	}
}
    </style>
  </head>
  <div class="frame">
    <div class="circle"></div>
    <div class="circle1"></div>
    <div class="three"></div>
    <div class="four"></div>

    <div class="dots">
      <div class="point dot1"></div>
      <div class="point dot2"></div>
      <div class="point dot3"></div>
      <div class="point dot4"></div>
    </div>
  </div>

  <div class="container">
    <div class="box"> <div class="circle circle1"></div> </div>
      <div class="box1"> <div class="circle "></div> </div>
      <div class="box2"> <div class="circle "></div> </div>
      <div class="box3"> <div class="circle "></div> </div>
  </div>
