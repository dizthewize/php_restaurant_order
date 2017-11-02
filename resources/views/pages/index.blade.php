@extends('layouts.app')

@section('content')
  <section id="video-banner">
    <div class="video-section embed-responsive embed-responsive-16by9 ">
      <video
      id="video-el" autoplay loop muted poster="videoGIF.gif"
      ><source src="{{ asset('img/vids/cookingvid-bg.mp4') }}" type="video/mp4">
        Video Not Supported</video>
    </div>
  </section>

  <section id="specialties" class="text-center">
    <div class="parallax">

    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h2 class="huge">Our Specialties</h2>
      </div>
    </div>
  </section>

  <section id="food-gallery">
    <div class="container-fluid">

      <div class="row">
        @foreach ($foodGallery as $food)

         <div class="col-lg-3 col-md-4 col-xs-6 thumb">
             <a class="thumbnail" href="{{ route('foods.show', $food->id) }}">

                 <img class="img-responsive" src="/img/{{$food->image}}" alt="food-image">
             </a>
         </div>

        @endforeach
     </div>
    </div>
  </section>

  <section id="section-bg">
  </section>

  <section id="menu" class="animated fadeIn">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div id="menu-heading">
            <h1 class="gigantic">Menu</h1>
            <h4>Please register and login to place an order for pickup!</h4>
            <h5>Remember to pick up order 20 min before closing</h5>
            <h6>We DO NOT Deliver!</h6>
          </div>
        </div>

        <div class="col-lg-11 col-sm-10">
          <div class="row">
            @foreach ($foods as $food)

              <div class="col-md-6 col-sm-6">
                <div class="media">
                  <div class="media-heading">{{$food->name}}</div>
                    <div class="media-body"><p>{{$food->description}}.....${{$food->price}}</p> <a href="{{ route('foods.show', $food->id) }}" class="btn btn-primary btn-sm">View Item</a>
                    <a href="{{route('cart.edit', $food->id)}}" class="btn btn-success btn-md">Add to Order</a>
                    </div>
                </div>
              </div>

            @endforeach


          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="open-btn">
    <i class="fa fa-angle-up animated infinite bounce" aria-hidden="true"></i>
    <h5>About</h5>
  </div>

  <div class="overlay">


    <div class="about-modal">
        <div class="close-btn">
          <i class="ion-close" aria-hidden="true"></i>
        </div>
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-12 col-sm-12">
                <h2 class="chef-heading">Our Most Renowned Chefs</h2>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                <img class="img-responsive" src="{{ asset('img/faces/face3.jpg') }}" alt="">
                </div>
                <div class="col-sm-6">
                <h4>Adrian Toomes
                    <small>Cuisine</small>
                </h4>
                <p class="chef-description">Hell of gluten-free live-edge, DIY helvetica migas</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                <img class="img-responsive" src="{{ asset('img/faces/face2.jpg') }}" alt="">
                </div>
                <div class="col-sm-6">
                <h4>Peter Parker
                    <small>Pastry Chef</small>
                </h4>
                <p class="chef-description">Wolf moon cliche crucifix man braid. Brooklyn mumblecore </p>
              </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                <img class="img-responsive" src="{{ asset('img/faces/face1.jpg') }}" alt="">
                </div>
                <div class="col-sm-6">
                <h4>Seymour Butts
                    <small>Master Chef</small>
                </h4>
                <p class="chef-description">Poutine flannel thundercats succulents, man bun gentrify</p>
                </div>
              </div>
            </div>
        </div>
      </div>
  </div>
@endsection
