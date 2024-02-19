<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">
    <!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <style>
    label{
        display:inline-block;
        width:200px;
    }
  </style>
    <!-- Required meta tags -->
    
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')
      
      <!-- navbar -->
      
      @include('admin.navbar')

        <!-- navbar -->
        <div class="container-fluid page-body-wrapper" style="background-color: #d4d6da;">
 
            <div class="container" align="center" style="padding:30px;background-color:white;margin:80px 200px;border-radius:15px">

            @if(session('success'))
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">X</button>
              {{ session('success') }}
              </div>
            @endif
                <form action="{{url('update_doctor',$doctor->id)}}" method="POST" enctype="multipart/form-data">

                @csrf

                    <div style="padding:20px 0px;color:black;position:relative;">
                        <label for='image' style="position: absolute; right: 50%;">Doctor Image</label>
                        <input type="file" name="image" id="image" style="position: absolute; right: -11%;">
                        <img style="width:100px; height:100px; margin-top:50px" src="doctor_image/{{ $doctor->image }}">
                        <!-- field for error message -->
                        @error('image')
                            <p style="color: red;margin-top:30px">{{ $message }}</p>
                        @enderror
                    </div>
              
                    <div style="padding:15px;color:black">
                        <label for='name'>Doctor Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter the name" value="{{ $doctor->name }}">
                        <!-- field for error message -->
                        @error('name')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div style="padding:15px;color:black">
                        <label for='number'>Phone Number</label>
                        <input type="number" name="number" id="number" placeholder="Enter the number" value="{{ $doctor->phone }}">
                        <!-- field for error message -->
                        @error('number')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div style="padding:15px;color:black">
                        <label for='Speciality'>Speciality</label>
                        <select style="color:black; width:200px" name="speciality">
                            <option value="{{ $doctor->speciality }}">{{ $doctor->speciality }}</option>
                            <option value="skin">Skin</option>
                            <option value="heart">Heart</option>
                            <option value="eye">Eye</option>
                            <option value="nose">Nose</option>
                            <option value="orthopedic">Orthopedic</option>
                        </select>
                        <!-- field for error message -->
                        @error('speciality')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div style="padding:15px;color:black">
                        <label for='room'>Room no.</label>
                        <input class="text-black" type="text" name="room" id="room" placeholder="Enter the room number" value="{{ $doctor->room }}">
                    </div>

                    <div style="padding:15px;color:black;margin-top:30px;">
                        <input type="submit" class="btn btn-success text-black" value="Update">
                    </div>

                </form>

            </div>

        </div>


    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>