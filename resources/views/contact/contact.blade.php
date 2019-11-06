@extends("layout.master")
@section("content")

<form id="contact" class="bgContact col-centered">
          <div data-aos="fade-right" data-aos-duration="2000">
            <div class="text-center py-1">
            <div data-aos="fade-left" data-aos-duration="2500">
              <h1 class="text-white">Contact</h1>
            </div>
            <div data-aos="fade-right" data-aos-duration="2000">
              <div class="contact-line"></div>
            </div>
              <h4 class="lead text-white">Have a question or want to work together?</h4>
            </div>
            <div class="form-row p-4 col-centered">
              <div class="form-group col-md-10 col-centered mt-5">
                <input type="text" class="form-control form-control-lg" id="name" aria-label="name" placeholder="Name" required />
              </div>
              <div class="form-group col-md-10 col-centered mt-5">
                <input type="email" class="form-control form-control-lg" id="email" aria-label="email" placeholder="Email" required />
              </div>
              <div class="form-group col-md-10 col-centered mt-5">
                <input type="text" class="form-control form-control-lg" id="subject" aria-label="subject" placeholder="Subject" required />
              </div>
              <div class="form-group col-md-10 col-centered mt-5">
                <textarea class="form-control form-control-lg" id="message" aria-label="message" rows="4" placeholder="Your Message" required></textarea>
              </div>
              <button type="submit" aria-label="submit" class="btn-secondary btn-outline-dark btn-lg col-centered col-md-3 mt-5 ">Submit</button>
            </div>
          </div>
        </form>
@endsection