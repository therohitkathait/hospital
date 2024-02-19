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

    th, td {
        text-align: center;
        padding: 65px;
    }

    img {
            max-width: 200px; /* Set a maximum width for images */
            max-height: 200px; /* Set a maximum height for images */
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
    <div class="container-fluid page-body-wrapper">
    <div class="container" style="padding: 10px; background-color: white; border-radius: 15px">

    @if(session('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
            {{ session('success') }}
            </div>
    @endif
    
        <table class="table table-bordered mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>Doctor Name</th>
                    <th>Phone</th>
                    <th>Speciality</th>
                    <th>Room no.</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $doctor)
                    <tr>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room}}</td>
                        <td><img style="width:100px; height:100px" src="doctor_image/{{$doctor->image}}"></td>
                        <td>
                            <a href="{{url('delete_doctor',$doctor->id)}}" onclick="return confirm('are you sure you, want to delete this!!')" class="btn btn-danger">Delete</a>
                        </td>
                        <td>
                            <a href="{{url('update_doctor',$doctor->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>