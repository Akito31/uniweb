@extends('layouts.frontend')
@section('content')
<div class="container p-2">
    <div class="mt-5">
    <h1 class="text-center">News and Activity</h1>
    </div>
   
    <div class="container mt-5">
      <div>
        <h2 class="text-start p-3 ">Recent News</h2>
      </div>
      <div class="row row-cols-1 row-cols-lg-3 ">
        <div class="col mb-3">
            <div class="card p-3 shadow hover">
               <img src="https://www.fenews.co.uk/wp-content/uploads/2021/11/DSC0558-min-1200x675.jpg" class="img-card-top">

               <div class="card-body inline">
                <h3 class="">News Name</h3>
                 <p class="small">lorem fdkgnadkfg dafkgm dkmgf ghdfusfjg yhwhdyugfestyhj yuwadgagyuueg egesg sdy...</p>
                 <button class="btn btn-sm btn-outline-dark mt-3 float-end">Read More</button>
               </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card p-3 shadow">
               <img src="https://www.fenews.co.uk/wp-content/uploads/2021/11/DSC0510-min-1200x675.jpg" class="img-card-top">

               <div class="card-body inline">
                <h3 class="">News Name</h3>
                 <p class="small">lorem fdkgnadkfg dafkgm dkmgf hfjhgfiu iui udsh jg kghyugfjygushui ...</p>
                 <button class="btn btn-sm btn-outline-dark mt-3 float-end">Read More</button>
               </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card p-3 shadow">
               <img src="https://www.fenews.co.uk/wp-content/uploads/2021/11/DSC0521-min-1200x675.jpg" class="img-card-top">

               <div class="card-body inline">
                <h3 class="">News Name</h3>
                 <p class="small">lorem fdkgnadkfg dafkgm dkmgf hfdsf husdgfsg shddsjg feug sjhds fj sgfjd ...</p>
                 <button class="btn btn-sm btn-outline-dark mt-3 float-end">Read More</button>
               </div>
            </div>
        </div>
      </div>
      <hr>

      <div>
        <h2 class="text-start p-3 ">Campus Activities</h2>
      </div>
      <div class="row row-cols-1 row-cols-lg-3 ">
        <div class="col mb-3">
            <div class="card p-3 shadow hover">
               <img src="https://i0.wp.com/images.onwardstate.com/uploads/2022/10/Homecoming-Talent-Show-2022-34.jpg?fit=750%2C500&ssl=1" class="img-card-top">

               <div class="card-body inline">
                <h3 class="">Activity name</h3>
                 <p class="small">lorem fdkgnadkfg dafkgm dkmgf ghdfusfjg yhwhdyugfestyhj yuwadgagyuueg egesg sdy...</p>
                 <button class="btn btn-sm btn-outline-dark mt-3 float-end">Read More</button>
               </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card p-3 shadow">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-B6pr9gxR-aEQssDwRLh3-hiMkQZvnIVWPS_lC97X9LUbI1AE14NCZakhOxWwRrmxMVk&usqp=CAU" class="img-card-top">

               <div class="card-body inline">
                <h3 class="">Activity name</h3>
                 <p class="small">lorem uyrgbcuyuyvb ryettuyecyveytctyv yeuiayautsacv hsdujszhtdya vsyucvcyevdyusdtvryjgc yvds ...</p>
                 <button class="btn btn-sm btn-outline-dark mt-3 float-end">Read More</button>
               </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card p-3 shadow">
               <img src="https://niscort.com/images/facilities_slider/sports%20and%20culture-14.jpg" class="img-card-top">

               <div class="card-body inline">
                <h3 class="">Activity name</h3>
                 <p class="small">lorem fdkgnadkfg dafkgm dkmgf hfdsf husdgfsg shddsjg feug sjhds fj sgfjd ...</p>
                 <button class="btn btn-sm btn-outline-dark mt-3 float-end">Read More</button>
               </div>
            </div>
        </div>
      </div>
      <hr>
      <div>
        <h2 class="text-start p-3 ">Upcoming Events</h2>
      </div>
      <div >
        <table>
            
            <tr >
                <td class="style1">1.</td>
                <td class="style">MAR 24</td>
                <td>lorem vgfugvub h ggvbhjdugyugd gugyvuydg ygyug vdhuvcbv uyduhdujvk n hzj kzkfhfjcz hufu</td>
            </tr>
            <tr >
                <td class="style1">2.</td>
                <td class="style"> MAY 10</td>
                <td>lorem vgfugvub h ggvbhjdugyugd gugyvuydg ygyug vdhuvcbv uyduhdujvk n hzj kzkfhfjcz hufu</td>
            </tr>
            <tr >
                <td class="style1">3.</td>
                <td class="style">JUN 5</td>
                <td>lorem vgfugvub h ggvbhjdugyugd gugyvuydg ygyug vdhuvcbv uyduhdujvk n hzj kzkfhfjcz hufu</td>
            </tr>
            <tr >
                <td class="style1">4.</td>
                <td class="style">JUL 4</td>
                <td>lorem vgfugvub h ggvbhjdugyugd gugyvuydg ygyug vdhuvcbv uyduhdujvk n hzj kzkfhfjcz hufu</td>
            </tr>
            <tr >
                <td class="style1">5.</td>
                <td class="style">JUL 20</td>
                <td>lorem vgfugvub h ggvbhjdugyugd gugyvuydg ygyug vdhuvcbv uyduhdujvk n hzj kzkfhfjcz hufu</td>
            </tr>
            <tr>
                <td class="style1">6.</td>
                <td class="style">AUG 4</td>
                <td>lorem vgfugvub h ggvbhjdugyugd gugyvuydg ygyug vdhuvcbv uyduhdujvk n hzj kzkfhfjcz hufu</td>
            </tr>
            <tr>
                <td class="style1">7.</td>
                <td class="style">DEC 25</td>
                <td>lorem vgfugvub h ggvbhjdugyugd gugyvuydg ygyug vdhuvcbv uyduhdujvk n hzj kzkfhfjcz hufu</td>
            </tr>
            <tr>
                <td class="style1">8.</td>
                <td class="style">FEB 18</td>
                <td>lorem vgfugvub h ggvbhjdugyugd gugyvuydg ygyug vdhuvcbv uyduhdujvk n hzj kzkfhfjcz hufu</td>
            </tr>
        </table>
      </div>
      
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
</div>
@endsection