<!DOCTYPE html>
<html lang="en">
<head>
<style>
table, th, td {
  border:1px solid black;
}
</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>laravel project</title>

 @include('user.css')
</head>
@if(session()-> has('message'))
        <div class="alert alert-sucess">
          <button type="button" class="close" data-dismiss="alert"></button>
       {{session()->get('message')}}
        </div>
        @endif   
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('user.navbar')

  <div align="center" style ="padding:120px;">
    <table  style="width: 100%;">
        <tr style="background-color:antiquewhite">
            <th style="padding:10px">Specialist</th>
            <th style="padding:10px">Date</th>
            <th style="padding:10px">Message</th>
            <th style="padding:10px">Status</th>
        </tr>
         @foreach($appoint as $consults) <!--consults ko data haru appoint ma haley -->
        <tr>
            <td>{{$consults->specialist}}</td>
            <td>{{$consults->date}}</td>
            <td>{{$consults->message}}</td>
            <td>{{$consults->status}}</td>
        </tr>
        @endforeach
    </table>
</div>


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>