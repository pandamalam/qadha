    @extends('layouts.nav')

@section('content')
<style type="text/css">
            html, body {
    background-image: url("https://wallpapercave.com/wp/YtsNDL8.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center bottom; 
background-size: cover; 
color: #333;
            }
</style>

<div class="uk-container  uk-container-xsmall">
    @if(! Auth::user()->sholat)
<p class=" uk-text-center uk-position-center"> Hai <span class="uk-text-bold "> {{ Auth::user()->name }}</span>, Anda belum ada data untuk mengqadha solat <br><a href="{{ route('solat.create') }}">Klik Disini</a> untuk memulai qadha sholat</p>
    @else
                    <form method="POST" action="{{ route('solat.update', $sholat) }}" enctype="multipart/form-data" >
                        @csrf
                                                {{method_field('PATCH')}}    
                                                <fieldset class="uk-margin-xsmall-top uk-fieldset">
<h2 class="uk-heading-line uk-text-center" style="color: #333;"><span>QADA SOLAT</span></h2>


        <div class="uk-margin">
            <p>Tanggal Tinggal {{date('d-M-Y', strtotime($sholat->tanggal_tinggal))}}</p>
        </div>
         <div class="uk-margin">
            <p>Status {{$sholat->status}} Qadha</p>
        </div>
        <p >Waktu {{$sholat->sholat}}</p>
        <div class="uk-margin">
            <p class="uk-text-bold">Tanggal Qadha</p>
    <input class="uk-input" type="date" name="t_qadha">
        </div>

            <div class="uk-margin">
<p class="uk-text-bold"> Qabliyah</p>
 <select class="uk-select" name="qa">
                <option value="{{$sholat->qabliyah}}">{{$sholat->qabliyah}}</option>
                <option value="Ada">Ada</option>
            </select>
        </div>
                        <div class="uk-margin">

<p class="uk-text-bold"> Badiyah</p>
 <select class="uk-select" name="ba">
                <option value="{{$sholat->badiyah}}">{{$sholat->badiyah}}</option>
                <option value="Ada">Ada</option>
            </select>
        </div>
        <div class="uk-margin">
<button class="uk-button uk-button-secondary uk-width-1-1">Alhamdulillah</button>
</div>
    </fieldset>
</form>
    @endif
</div>
@if(session()->has('message'))
                    <script>UIkit.notification({message: 'Berhasil Di Qadha', pos: 'bottom-center'})</script>
@endif
@endsection
