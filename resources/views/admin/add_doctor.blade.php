<!DOCTYPE html>
<html lang="en">
  <head>
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
    <div class="container-scroller" style="background-color: #d4d6da;">
      
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')
      
      <!-- navbar -->
      
      @include('admin.navbar')

        <!-- navbar -->
        <div class="container-fluid page-body-wrapper" style="padding:30px;background-color:white;margin:80px 200px;border-radius:15px;">
 
            <div class="container" align="center" >
            
            @if(session('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session('success') }}
                </div>
            @endif


                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

                @csrf

                    <div style="padding:15px;color:black">
                        <label for='name'>Doctor Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter the name" value="{{ old('name') }}">
                        <!-- field for error message -->
                        @error('name')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div style="padding:15px;color:black">
                        <label for='number'>Phone Number</label>
                        <input type="number" name="number" id="number" placeholder="Enter the number" value="{{ old('number') }}">
                        <!-- field for error message -->
                        @error('number')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div style="padding:15px;color:black">
                        <label for='Speciality'>Speciality</label>
                        <select style="color:black; width:200px" name="speciality" value="{{ old('speciality') }}">
                            <option>--Select--</option>
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
                        <input class="text-black" type="text" name="room" id="room" placeholder="Enter the room number" value="{{ old('room') }}">
                    </div>

                    <div style="padding:20px 0px;color:black;position:relative;">
                        <label for='image' style="position: absolute; right: 50%;">Doctor Image</label>
                        <input type="file" name="image" id="image"style="position: absolute; right: -11%;">
                        <!-- field for error message -->
                        @error('image')
                            <p style="color: red;margin-top:30px">{{ $message }}</p>
                        @enderror
                    </div>

                    <div style="padding:15px;color:black;margin-top:30px;">
                        <input type="submit" class="btn btn-success text-black">
                    </div>

                </form>

            </div>

        </div>


    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>