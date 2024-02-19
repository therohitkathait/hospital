<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" id="appointment-form" action="{{url('appointment')}}" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name" value="{{ old('name') }}">

            @error('name')
              <p style="color: red;">{{ $message }}</p>
            @enderror

          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address.." value="{{ old('email') }}">

            @error('email')
              <p style="color: red;">{{ $message }}</p>
            @enderror

          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms" value="{{ old('date') }}">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">

            <option>--Select Doctors--</option> 

            @foreach($doctor as $doctors)

              <option value="{{$doctors->name}}">{{$doctors->name}} ---speciality---({{$doctors->speciality}})</option>      

            @endforeach
            </select>

            @error('email')
              <p style="color: red;">{{ $message }}</p>
            @enderror

          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="phone" class="form-control" placeholder="Number.." value="{{ old('phone') }}">

            @error('email')
              <p style="color: red;">{{ $message }}</p>
            @enderror

          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." value="{{ old('message') }}"></textarea>

          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn bg-primary">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->
