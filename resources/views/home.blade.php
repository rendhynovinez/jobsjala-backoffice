
@include('inc/header')

<!-- nav -->
<nav class="bg-blue" role="navigation">
    <div class="nav-wrapper container"><a href="#" class="" id="nav-title">HOME</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#"><b>SADULUR HOMECARE<b></a></li>
        <li><a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
      </ul>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          <!-- @csrf -->
          {{ csrf_field() }}
      </form>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <a href="#" data-target="#" class="sidenav-trigger right"><i class="material-icons">settings</i></a>
    </div>
  </nav>

  <div class="container">
      <div id="Message" class="tabcontent">
            <div class="section">
            <div class="row">
            <a href="profile-cust.php">
            <div class="col s10" id="user-info"><i class="material-icons">person_outline</i><span>{{ Auth::user()->name }}</span></div>
            </a>
            <div class="col s2">
            <a id="user-notif" href="notifikasi-order.php" class="sidenav-trigger right"><i class="material-icons">notifications_none</i></a></div>
            </div>
            <div class="row">
                <div class="col s12">
                <img class="circle logo-home" src="img/logo.png">
                </div>
                <div class="col s12 center">
              <h5 class="bold text-blue">SADULUR HOMECARE</h5>
              <h6 class="text-grey">sehat, bersih & berwawasan</h6>
              </div>
            </div>
            <div class="gap"></div>
            <!-- aktivitas -->
            <div class="row">
                <div class="col s12">
                Aktivitas
              </div>
            </div>
            <!-- list -->

            <!-- list -->
            @foreach($historyActivity as $key => $Historydata)
            <div class="row mb-5" id="activity-list">
                <div class="col s12 text-blue" id="small-dates">
                {{$Historydata->created_at}}
              </div>
              <div class="col s6" id="small-service">
              {{$Historydata->activity}}
              </div>
              <div class="col s6 duration text-right text-blue" id="small-duration">
                120 menit
              </div>
            </div>
            <div class="divider"></div>  
            @endforeach
          </div>
   </div>

<div class="gap"></div><div class="gap"></div>
</div>
<div class="bottomnavbar">
  <a href="{{url('home')}}" class="font-11 active"><img class="ic-bottomnav" src="./img/ic-home-b.png">Home</a>
  <a href="{{url('massage')}}" class="font-11"><img class="ic-bottomnav" src="./img/ic-mas.png">Massage</a>
  <a href="{{url('cleaning')}}" class="font-11"><img class="ic-bottomnav" src="./img/ic-cle.png">Cleaning</a>
  <a href="{{url('education')}}" class="font-11"><img class="ic-bottomnav" src="./img/ic-edu.png">Education</a>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>


@include('inc/footer')


