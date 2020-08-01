@extends('layout')

@section('content')
  <!-- partners -->
  <section class="features-icons bg-light text-center" id="partners">
    <div class="container2">
      <h2 class="text-info">Meet Our Team</h2>
      <div class="row mt-4">
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="./assets/partner1.jpg" alt="">
            <span> <img class="circle-icon" src="./assets/music.svg" alt="">
            </span>
            <h5>Bradley Hunter.</h5>
            <p class="font-weight-light mb-0">Based in Chicago. I love plaing tennis and loud music</p>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="./assets/partner2.jpg" alt="">
            <img class="circle-icon2" src="./assets/brush.svg" alt="">
            <h5>Marry Benneth.</h5>
            <p class="font-weight-light mb-0">Currently living in Colorado. Love of art, languages and travelling.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="./assets/partner3.jpg" alt="">
            <img class="circle-icon3" src="./assets/camera.svg" alt="">
            <h5>Diana Wells.</h5>
            <p class="font-weight-light mb-0">
              Living in Athens, Greece. I love black and white classics, chillout music and chill.
            </p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="./assets/partner4.jpg" alt="">
            <span> <img class="circle-icon4" src="./assets/airplane.svg" alt="">
            </span>
            <h5>Christopher Pierce.</h5>
            <p class="font-weight-light mb-0">
              Star wars fanatic, i have persistent enthusiasm to create new things.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Image Showcases -->
  <section>
    <div class="row justify-content-md-center">
<h2>Discover holiday activity</h2>
    </div>
    <div class="container mt-4">
      <div class="row justify-content-md-center">
        <div class="col-sm-3">
          <div class="container2">
            <a href="#">
              <img src="./assets/block1Sports.jpg" class="img-responsive">
              <div class="centered">
                <h2>Sports</h2>
              </div>
            </a>
          </div>
        </div>
        &nbsp;
        &nbsp;
        &nbsp;
        <div class="col-sm-3">
          <div class="container">
            <a href="#">
              <img src="./assets/block2Wellness.jpg" class="img-responsive">
              <div class="centered">
                <h2><small><strong>Wellness and Health</strong></small></h2>
              </div>
            </a>
          </div>
        </div>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        <div class="col-sm-3">
          <div class="container">
            <a href="#"> <img src="./assets/block3Expeditions.jpg" class="img-responsive">
              <div class="centered">
                <h2>Expedition</h2>
              </div>
            </a>
          </div>
        </div>

      </div>


      
      <div class="container mt-4">
        <br/>
        <div class="row justify-content-center">


          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;

          <div class="col-md-3">
            <div class="container">
              <a href="#">
                <img src="./assets/block4Games.jpg" class="img-responsive">
                <div class="centered">
                  <h2>Games</h2>
                </div>
              </a>
            </div>
          </div>
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          <div class="col-7">
            <div class="container">
              <a href="#">
                <img src="./assets/block5Culture.jpg" class="img-responsive">
                <div class="centered">
                  <h2>Culture and Education</h2>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="container mt-4">
          <div class="row justify-content-center">
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            <div class="col-6">
              <div class="container">
                <a href="#">
                  <img src="./assets/block6Beauty.jpg" width="620" class="img-responsive">
                  <div class="centered">
                    <h2>Games</h2>
                  </div>
                </a>
              </div>
            </div>
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            <div class="col-md-4">
              <div class="container">
                <a href="#">
                  <img src="./assets/block7Travelling.jpg" class="img-responsive">
                  <div class="centered">
                    <h2>Culture and Education</h2>
                  </div>
                </a>
              </div>
            </div>
          </div>
  </section>
<br/>
@endsection
