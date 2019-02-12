@extends('layouts.nav')

@section('content')
@if(Auth::user()->Sholat)

<div class="uk-margin-large-top uk-container uk-text-center uk-container-small">
    <h1 class="uk-heading-line uk-text-center"><span>SHOLAT</span></h1>
    <ul uk-accordion>
    <li>
        <a class="uk-accordion-title" href="#">Sudah Di Qadha</a>
        <div class="uk-accordion-content">
       <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Subuh</h3>
            <p>{{Auth::user()->sholat->where('status','=','sudah')->where('sholat','=','Subuh')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Dzuhur</h3>
            <p>{{Auth::user()->sholat->where('status','=','sudah')->where('sholat','=','Dzuhur')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Ashar</h3>
            <p>{{Auth::user()->sholat->where('status','=','sudah')->where('sholat','=','Ashar')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Magrib</h3>
            <p>{{Auth::user()->sholat->where('status','=','sudah')->where('sholat','=','Magrib')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Isya</h3>
            <p>{{Auth::user()->sholat->where('status','=','sudah')->where('sholat','=','Isya')->count()}}</p>
        </div>
    </div>
</div>
        </div>
    </li>
   <li>
        <a class="uk-accordion-title" href="#">Belum Di Qadha</a>
        <div class="uk-accordion-content">
       <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title"><a href="{{ route('home.subuh') }}"> Subuh</a></h3>
            <p>{{Auth::user()->sholat->where('status','=','belum')->where('sholat','=','Subuh')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title"><a href="{{ route('home.dzuhur') }}">Dzuhur</a></h3>
            <p>{{Auth::user()->sholat->where('status','=','belum')->where('sholat','=','Dzuhur')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title"><a href="{{ route('home.ashar') }}">Ashar</a></h3>
            <p>{{Auth::user()->sholat->where('status','=','belum')->where('sholat','=','Ashar')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title"><a href="{{ route('home.magrib') }}">Magrib</a></h3>
            <p>{{Auth::user()->sholat->where('status','=','belum')->where('sholat','=','Magrib')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title"><a href="{{ route('home.isya') }}">Isya</a></h3>
            <p>{{Auth::user()->sholat->where('status','=','belum')->where('sholat','=','Isya')->count()}}</p>
        </div>
    </div>
</div>
        </div>
    </li>
</ul>



    <h1 class="uk-heading-line uk-text-center"><span>PUASA</span></h1>
    <ul uk-accordion>
    <li>
        <a class="uk-accordion-title" href="#">Sudah Di Qadha</a>
        <div class="uk-accordion-content">
       <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Subuh</h3>
            <p>{{Auth::user()->sholat->where('status','=','belum')->where('sholat','=','Subuh')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Dzuhur</h3>
            <p>{{Auth::user()->sholat->where('status','=','belum')->where('sholat','=','Dzuhur')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Ashar</h3>
            <p>{{Auth::user()->sholat->where('status','=','belum')->where('sholat','=','Ashar')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Magrib</h3>
            <p>{{Auth::user()->sholat->where('status','=','belum')->where('sholat','=','Magrib')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Isya</h3>
            <p>{{Auth::user()->sholat->where('status','=','belum')->where('sholat','=','Isya')->count()}}</p>
        </div>
    </div>
</div>
        </div>
    </li>
   <li>
        <a class="uk-accordion-title" href="#">Belum Di Qadha</a>
        <div class="uk-accordion-content">
       <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Subuh</h3>
            <p>{{Auth::user()->sholat->where('status','=','belum')->where('sholat','=','Subuh')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Dzuhur</h3>
            <p>{{Auth::user()->sholat->where('status','=','belum')->where('sholat','=','Dzuhur')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Ashar</h3>
            <p>{{Auth::user()->sholat->where('status','=','belum')->where('sholat','=','Ashar')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Magrib</h3>
            <p>{{Auth::user()->sholat->where('status','=','belum')->where('sholat','=','Magrib')->count()}}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Isya</h3>
            <p>{{Auth::user()->sholat->where('status','=','belum')->where('sholat','=','Isya')->count()}}</p>
        </div>
    </div>
</div>
        </div>
    </li>
</ul>
</div>
@if(session()->has('message'))
                    <script>UIkit.notification({message: 'Berhasil Ditambah', pos: 'bottom-center'})</script>
@endif
@else
<div class="uk-container uk-margin-bottom uk-text-center uk-container-xsmall">
   <p> Hai <span class="uk-text-bold"> {{ Auth::user()->name }}</span>, Ayo mulai mengqadha solat atau puasa Anda.</p>
    <div class="uk-card uk-card-secondary uk-grid-collapse uk-child-width-1 uk-margin" uk-grid>
        <div class="uk-card-body">
                   <p>إِنَّ الصَّلاَةَ كَانَتْ عَلَى الْمُؤْمِنِينَ كِتَاباً مَّوْقُوتاً</p>

            <p>Artinya : Sesungguhnya shalat itu adalah fardhu yang ditentukan waktunya atas orang-orang yang beriman.(QS. An-Nisa : 103).</p>
        </div>
    </div>
    <div class="uk-card uk-card-secondary uk-grid-collapse uk-child-width-1 uk-margin" uk-grid>
        <div class="uk-card-body">
                   <p>فَمَنْ شَهِدَ مِنْكُمُ الشَّهْرَ فَلْيَصُمْهُ وَمَنْ كَانَ مَرِيضًا أَوْ عَلَى سَفَرٍ فَعِدَّةٌ مِنْ أَيَّامٍ أُخَرَ يُرِيدُ اللَّهُ بِكُمُ الْيُسْرَ وَلَا يُرِيدُ بِكُمُ الْعُسْرَ</p>
            <p>Artinya : “Barangsiapa di antara kalian hadir (di negeri tempat tinggalnya) di bulan itu, maka hendaklah ia berpuasa pada bulan itu, dan barangsiapa sakit atau dalam perjalanan (lalu ia berbuka), maka (wajiblah baginya berpuasa), sebanyak hari yang ditinggalkannya itu, pada hari-hari yang lain. Allah menghendaki kemudahan bagikalian, dan tidak menghendaki kesukaran bagikalian.” (QS. al-Baqarah: 185).</p>
        </div>
    </div>
        <a class="uk-button uk-button-primary" href="{{ route('solat.create') }}">Masukan Data</a>

</div>
</div>
<script type="text/javascript">

           UIkit.modal.confirm('Hai {{ Auth::user()->name }}, Anda belum memasukan data yang ingin di qadha. Jika anda ingin memasukan data yang ingin diqadha anda bisa mengklik tombol OK<br><br>Terima kasih Telah memakai Aplikasi ini.').then(function () {
               console.log('Confirmed.')
           }, function () {
               console.log('Rejected.')
           });
   </script>
@endif
@endsection
