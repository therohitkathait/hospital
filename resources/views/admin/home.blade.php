<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')
      
      <!-- navbar -->
      
      @include('admin.navbar')

        <!-- navbar -->
    
        @include('admin.body')

    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>