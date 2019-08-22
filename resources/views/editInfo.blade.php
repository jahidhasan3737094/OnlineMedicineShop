<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>updatePatientInfo</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
   <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>


</head>
<body>

    <div class="container col-sm-12" id="mainform">
            <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Edit User Info</div>

                        </div>

          <div class="flash-message">
             @foreach (['danger', 'warning', 'success', 'info'] as $msg)
              @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
             <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            </p>
              @endif
             @endforeach
        </div>
                         <div class="panel-body" >
                            <form action="{{url('/updateUser')}}" class="form-horizontal" role="form" method="post" >

                                @csrf
                                <div class="form-group">
                                    <label for="name" class="col-md-3 control-label">User Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="{{$userdata['name']}}" placeholder="User Name" required>
                                    </div>
                                </div>
                                <div>
                                  <input type="hidden" class="form-control" name="id" value="{{$userdata['id']}}">
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">User Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="{{$userdata['email']}}" placeholder="something@gmail.com" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="contact" class="col-md-3 control-label">User Contact</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="contact" value="{{$userdata['contact']}}" placeholder="Mobile Number" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp submit</button>

                                    </div>
                                </div>

                            </form>
                         </div>
                    </div>
     </div>
    </div>

</body>
</html>
