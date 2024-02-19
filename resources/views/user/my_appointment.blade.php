@include('user.nav')
  <!-- message after deletion -->
  @if(session('success'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {{ session('success') }}
      </div>
  @endif

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center" style="padding: 70px;">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Doctor Name</th>
                            <th>Date</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Cancel Appointment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($appointment as $appointments)
                        <tr>
                            <td>{{$appointments->doctor}}</td>
                            <td>{{$appointments->date}}</td>
                            <td>{{$appointments->message}}</td>
                            <td>{{$appointments->status}}</td>
                            <td><a href="{{url('cancel_appoint',$appointments->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure that you want to delete this!')">Cancel</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>