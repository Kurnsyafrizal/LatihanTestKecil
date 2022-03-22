@extends('layout.layouts')
@section('title', 'Halaman Sepuluh')


@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    @method('POST')
                        <div class="form-group">    
                            <label for="add" class="h1 font-weight-bold">{{ __('Halaman Sepuluh') }}</label>
                        </div>
                        
                        <div class="form-group ">
                            <label for="hari" class="ml-4 font-weight-bold text-md h4">{{ __("Hari") }}</label>
                            <div class="col-md-12">
                                <select name="hari" class="form-control" id="hari" >
                                    <option @isset($hari) @if ($hari == "0") selected  @endif @endisset value="0" >Senin</option>
                                    <option @isset($hari) @if ($hari == "1") selected  @endif @endisset value="1" >Selasa</option>
                                    <option @isset($hari) @if ($hari == "2") selected  @endif @endisset value="2" >Rabu</option>
                                    <option @isset($hari) @if ($hari == "3") selected  @endif @endisset value="3" >Kamis</option>
                                    <option @isset($hari) @if ($hari == "4") selected  @endif @endisset value="4" >Jumat</option>
                                    <option @isset($hari) @if ($hari == "5") selected  @endif @endisset value="5" >Sabtu</option>
                                    <option @isset($hari) @if ($hari == "6") selected  @endif @endisset value="6" >Minggu</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label for="jamawal" class="ml-4 font-weight-bold text-md h4">{{ __("Jam Awal") }}</label>
                            @if(isset($jamawal))    
                                <div class="col-md-12">
                                    <input type="text" class="form-control ml-1" id="jamawal" name="jamawal" value="{{ $jamawal }}" placeholder="Masukan Jam Awal">
                                </div>
                            @else
                                <div class="col-md-12">
                                    <input type="text" class="form-control ml-1" id="jamawal" name="jamawal" placeholder="Masukan Jam Awal">
                                </div>
                            @endif    
                        </div>

                        <div class="form-group mt-2">
                            <label for="tambah" class="ml-4 font-weight-bold text-md h4">{{ __("Ditambah (Jam)") }}</label>
                            @if(isset($tambahjam))    
                                <div class="col-md-12">
                                    <input type="text" class="form-control ml-1" id="tambahjam" name="tambahjam" value="{{ $tambahjam }}" placeholder="Masukan tahun">
                                </div>  
                            @else
                            <div class="col-md-12">
                                <input type="text" class="form-control ml-1" id="tambahjam" name="tambahjam"  placeholder="Masukan Jam">
                            </div>
                            @endif
                                
                        </div>


                        <div class="form-group mt-4 ">
                            <button type="submit" class="btn btn-primary btn-lg ml-4">{{ __("Menjadi") }}</button>
                        </div>

                        <div class="form-group mt-4">
                            <label for="hasil" class="ml-4 font-weight-bold text-md h4">{{ __("Hasil") }}</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control ml-1" id="hasil" name="hasil" value=" {{ old('hasil') ?? $hasil ?? '' }}" disabled>
                            </div>
                           
                        </div>
                </form>     
            </div>
        </div>
    </div>
@endsection