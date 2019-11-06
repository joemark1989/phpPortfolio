@extends("layout.master")
@section("content")

<div id="about" class="container-fluid bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-right" data-aos-duration="1500">
            <div class="octoIcons">
              <div class="octoIcons1">
                <i class="fa fa-fighter-jet faIcon fa-4x"></i>
              </div>
            </div>
            <div class="text-center m-auto">
              <h4 class="mt-3">Fast</h4>
              <p class="mb-5">Fast page load times is my highest priority.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-right" data-aos-duration="1500">
            <div class="octoIcons">
              <div class="octoIcons1">
                <i class="fa fa-eye faIcon fa-4x"></i>
              </div>
            </div>
            <div class="text-center m-auto">
              <h4 class="mt-3">Eye Catching</h4>
              <p>My goal is to make your website amazing!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-left" data-aos-duration="1500">
            <div class="octoIcons">
              <div class="octoIcons1">
                <i class="fa fa-laptop faIcon fa-4x"></i>
              </div>
            </div>
            <div class="text-center m-auto">
              <h4 class="mt-3">Responsive</h4>
              <p>Your web application will work on any device. Period.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-left" data-aos-duration="1500">
            <div class="octoIcons">
              <div class="octoIcons1">
                <i class="fa fa-thumbs-up faIcon fa-4x"></i>
              </div>
            </div>
            <div class="text-center m-auto">
              <h4 class="mt-3">Reliable</h4>
              <p>You can count on me to get the job done.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1500">
            <div class="octo">
              <div class="octo1">
                <img class="img-fluid" src="images/Me.jpg" alt="Me" />
              </div>
            </div>
            <div class="text-center m-auto">
              <h1 class="display-4">Joseph Markley</h1>
              <h4>Software developer</h4>
              <p>I have a passion for creating clean, responsive layouts that works on any device. <a href="{{route("contact")}}">Contact me and let’s get started.</a></p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="1500">
            <div class="octo">
              <div class="octo1">
              <i class="fa fa-book fa-5x faIcon"></i>
              </div>
            </div>
            <div class="text-center m-auto">
              <h1 class="display-4">Technologies</h1>
              <p>Technologies I love coding in include, JavaScript, React, Sass, CSS, HTML, PHP, Laravel.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection