<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>medicine</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
   <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style>
   .fa, .fas {
     font-family: 'Font Awesome 5 Free';
     font-weight: 900;
     font-size: 19px;
     padding: 3px;
  }
   </style>
   <style>
   .container {
     position: relative;
     width: 100%;
   }
   .body{
       background-color: #34b091;
   }
   .image {

     display: block;
     margin-left: auto;
     margin-right: auto;
     height:100%;
     width: 100%;
   }

   .topnav {
     overflow: hidden;
     background-color: #e9e9e9;

   }

   .topnav a {
     float: left;
     display: block;
     color: black;
     text-align: center;
     padding: 14px 16px;
     text-decoration: none;
     font-size: 17px;
   }

   .topnav a:hover {
     background-color: #ddd;
     color: black;
   }

   .topnav a.active {
     background-color: #2196F3;
     color: white;
   }

   .topnav input[type=text] {
     float: right;
     padding: 6px;
     margin-top: 8px;
     margin-right: 16px;
     border: none;
     font-size: 17px;
   }

   @media screen and (max-width: 600px) {
     .topnav a, .topnav input[type=text] {
       float: none;
       display: block;
       text-align: left;
       width: 100%;
       margin: 0;
       padding: 14px;
     }

     .topnav input[type=text] {
       border: 1px solid #ccc;
     }
   }


   .sidenav {
     height: 100%; /* Full-height: remove this if you want "auto" height */
     width: 160px; /* Set the width of the sidebar */
     position: fixed; /* Fixed Sidebar (stay in place on scroll) */
     z-index: 1; /* Stay on top */
     top: 1; /* Stay at the top */
     left: 1;
     background-color: #111; /* Black */
     overflow-x: hidden; /* Disable horizontal scroll */
     padding-top: 20px;
   }

   /* The navigation menu links */
   .sidenav a {
     padding: 6px 8px 6px 16px;
     text-decoration: none;
     font-size: 20px;
     color: #818181;
     display: block;
   }

   /* When you mouse over the navigation links, change their color */
   .sidenav a:hover {
     color: #f1f1f1;
   }

   /* Style page content */


   /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
   @media screen and (max-height: 450px) {
     .sidenav {padding-top: 15px;}
     .sidenav a {font-size: 18px;}
   }
   </style>

</head>
<body>

  <div class="topnav">

    <a href="{{url('/admin')}}">home</a>

  </div>
    <div class="container col-sm-12" id="mainform">
            <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">



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
                            <form action="{{url('/medicineSubmit')}}" class="form-horizontal" role="form" method="post" >

                                @csrf
                                <div class="form-group">
                                    <label for="mname" class="col-md-3 control-label">Medicine Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="mname" placeholder="Medicine Name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="mcompany" class="col-md-3 control-label">Medicine Company</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="mcompany" placeholder="medicine company" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="mprice" class="col-md-3 control-label">Medicine Price</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mprice" placeholder="Medicine price" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="mquantity" class="col-md-3 control-label">Medicine Quantity</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mquantity" placeholder="Medicine Quantity"required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="mtype" class="col-md-3 control-label">Medicine Type</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="mtype" placeholder="Medicine Type" required>
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

                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Medicine Name</th>
                          <th>Medicine Company</th>
                          <th>Medicine Price</th>
                          <th>Medicine Quantity</th>
                          <th>Medicine Type</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($medicines as $medicine)
                        <tr>
                          <td>{{$medicine['mname']}}</td>
                          <td>{{$medicine['mcompany']}}</td>
                          <td>{{$medicine['mprice']}}</td>
                          <td>{{$medicine['mquantity']}}</td>
                          <td>{{$medicine['mtype']}}</td>
                          <td><a href="{{url('/editPatient',$medicine['mid'])}}"><i class="fa fa-edit"></i></a></td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
     </div>
    </div>

</body>
</html>
