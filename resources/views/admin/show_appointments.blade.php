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
    <div class="container" style="background-color: white; border-radius: 15px">

        @if(session('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
            {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
        <table class="table table-bordered mt-5   ">
            <thead class="thead-dark">
                <tr>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Approve</th>
                    <th>Cancel</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($data as $appoint)
                    <tr>
                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->message}}</td>
                        <td>{{$appoint->status}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('cancel',$appoint->id)}}">Cancel</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>


    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>