@extends('admin.index')
@section('add')

 <!-- Section: Design Block -->

<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
          background-image: url('171.jpg');
          height: 300px; padding: 120px; background-size: 100%;
          "></div>

    <!-- Background image -->
  <div class="container">
    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
          margin-top: -100px;
          background: hsla(0, 0%, 100%, 0.8);
          backdrop-filter: blur(30px);
          ">
      <div class="card-body py-5 px-md-5">

        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Login </h2>
            <form>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" placeholder="First name"/>
                    @error('name')
                    <span class="text-danger">
                    {{ $message }}
                  </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control"  placeholder="Last name"/>

                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" placeholder="Email address"/>

              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" placeholder="Password"/>

              </div>


              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-secondary btn-block mb-4">
                Login
              </button>
              <p class="text-center text-muted mt-2 mb-0">Create account? <a href="{{route('signup')}}"
                class="fw-bold text-body"><u>Sign up</u></a></p>


            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  <!-- Section: Design Block -->

@endsection
