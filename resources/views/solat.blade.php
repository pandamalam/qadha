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
    <form class="" action="{{ route('solat.store') }}" enctype="multipart/form-data" method="post" >
    @csrf
    <fieldset class="uk-margin-xsmall-top uk-fieldset">
<h2 class="uk-heading-line uk-text-center" style="color: #333;"><span>QADA SOLAT</span></h2>


        <div class="uk-margin">
            <p class="uk-text-bold">Tanggal</p>
            <input class="uk-input" type="date" name="tanggal_awal">
        </div>
        <div class="uk-margin">
            <p class="uk-text-bold">Tanggal</p>
            <input class="uk-input" type="date" name="tanggal_akhir">
        </div>
<p class="uk-text-bold">Waktu</p>
            <select class="uk-select" name="sholat">
                <option value="Subuh">Subuh</option>
                <option value="Dzuhur">Dzuhur</option>
                <option value="Ashar">Ashar</option>
                <option value="Magrib">Magrib</option>
                <option value="Isya">Isya</option>
            </select>
        <div class="uk-margin">
<button class="uk-button uk-button-secondary uk-width-1-1">Tambah</button>
</div>

    </fieldset>
</form>
    
</div>
</div>

@endsection
