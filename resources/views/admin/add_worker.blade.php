
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
      label{
        display: inline-block;
        width:200px;
      }
    </style>
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
     @include('admin.side')
      <!-- partial -->
     @include('admin.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          
        
        <div class="container"  style="padding-top:120px;  ">
        @if(session()-> has('message'))
        <div class="alert alert-sucess">
          <button type="button" class="close" data-dismiss="alert"></button>
       {{session()->get('message')}}
        </div>
        @endif       
        <form action="{{url('worker_upload')}}" method="POST" enctype="multipart/form-data"> <!-- This value is necessary if the user will upload a file through the form -->
                  @csrf

             
                    <div style="padding: 20px;">
                        <label>Clinician Name: </label>
                        <input type="text" style="color:green;"name="name" placeholder="Please Enter the name" required="">
                    </div>

                    <div style="padding: 20px;">
                        <label>Phone number: </label>
                        <input type="number" style="color:green;"name="number" placeholder="Please Enter Phone No" required="">
                    </div>

                    <div style="padding: 20px;">
                        <label>Specialist: </label>
                       <select name ="specialist" style= "color: grey" required="">
                       <option >-Select The Option-</option>
                        <option value ="Cardiology">Cardiology</option>
                        <option value ="Neuro">Neuro</option>
                        <option value ="Ent">ENT</option>
                        <option value ="Dental">Dental</option>
                        <option value ="GeneralHealth">General Health</option>
                       </select>
                    </div>

                    <div style="padding: 20px;">
                        <label>Doctor Photo: </label>
                        <input type="file" name="file" required="" >
                    </div>

                    <div style="padding: 20px;">
                    <input type="submit" class="btn btn-success" >
                  </div>

                </form>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>