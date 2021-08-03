<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="padding-bottom:40px;">
                <input type="hidden" id="id" name="id" value="{{$id ?? ''}}">
                <div class="card-header">Detail Rincian</div>
                <h5 style="margin-left:10px;margin-top:10px;">Rincian</h5>
                <p style="margin-left:10px;margin-top:10px;">Layanan : {{$ServiceMitra->title}} {{$ServiceMitra->name_service}}</p>
                @if($duration == 1)
                <p style="margin-left:10px;margin-top:10px;">Duration : 60 Menit</p>
                @elseif($duration == 2)
                <p style="margin-left:10px;margin-top:10px;">Duration : 90 Menit</p>
                @else
                <p style="margin-left:10px;margin-top:10px;">Duration : 120 Menit</p>
                @endif
                <p style="margin-left:10px;margin-top:10px;">Pembayaran : Cash </p>
            </div>
            <div class="padding-bottom:40px;">
                <div class="form-group">
                <button onclick="myFunction()" style="margin-top:10px;" type="button" class="btn btn-success btn-block">Pesan Sekarang</button>
                <a href="{{url('home/detail/'."$id")}}" style="margin-top:10px;" type="button" class="btn btn-danger btn-block">Batalkan</a>

           </div>
         </div>

        </div>
    </div>
</div>
@endsection

<script>
function myFunction() {
   
    var linkURL = '/home/mitrafind'; 
    window.location.href=linkURL;
};
</script>