@extends("layout.master")
@section("content")

<div id="portfolio" class="portfolio">
  <div class="text-center">
    <h1 class="display-4" data-aos="fade-right" data-aos-duration="1500">Projects</h1>
  </div>
  <div class="header-line" data-aos="fade-left" data-aos-duration="1500"></div>
  <div data-aos="fade-up" data-aos-duration="1500">
    <div class="d-flex justify-content-center flex-wrap">
      <div class="projCard mb-5">
        <img class="cardImage" src="images/springProject.jpg" alt="projectPic" />
        <div class="overlay">
          <div class="projTitle">Travel Project</div>
          <div class="projText mt-4">HTML/CSS/JS</div>
          <a type="input" class="btn btn-outline-info btn-lg gitButton" href="" target="_blank" rel="noopener noreferrer">Github</a>
          <a type="input" class="btn btn-outline-info btn-lg appButton" href="" target="_blank" rel="noopener noreferrer">App</a>
        </div>
      </div>
      <div class="projCard mb-5">
        <img class="cardImage" src="images/webpage-1.jpg" alt="projectPic" />
        <div class="overlay">
          <div class="projTitle">Features Project</div>
          <div class="projText mt-4">HTML/CSS/JS</div>
          <a type="input" class="btn btn-outline-info btn-lg gitButton" href="" target="_blank" rel="noopener noreferrer">Github</a>
          <a type="input" class="btn btn-outline-info btn-lg appButton" href="" target="_blank" rel="noopener noreferrer">App</a>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
