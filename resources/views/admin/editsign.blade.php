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
            <h2 class="fw-bold mb-5">Sign up</h2>
            <form action="{{route('admin.updates',$data->id)}}" method="post">
                @csrf
                @method('put')
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example1" name="firstname" value="{{$data->firstname}}" class="form-control" placeholder="First name"/>
                    @error('firstname')
                    <span class="text-danger">
                    {{ $message }}
                  </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control" value="{{$data->lastname}}" name="lastname" placeholder="Last name"/>

                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" name="email" value="{{$data->email}}" placeholder="Email address"/>

              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="password" value="{{$data->password}}" placeholder="Password"/>

              </div>
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="repeatpass" value="{{$data->repeatpass}}" placeholder=" Repeat Password"/>

              </div>


              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-secondary btn-block mb-4">
                sign up
              </button>



            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  <!-- Section: Design Block -->

@endsection
