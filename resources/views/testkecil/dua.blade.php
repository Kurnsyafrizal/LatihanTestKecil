@extends('layout.layouts')
@section('title', 'Halaman Satu')


@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body ">
                <form action=" " method="POST">
                    @csrf
                    @method('POST')
                        <div class="form-group">    
                            <label for="add" class="h1 font-weight-bold">{{ __('Halaman Satu') }}</label>
                        </div>
                        
                        <div class="form-group mt-2">
                            <label for="partnumber" class="ml-4 font-weight-bold text-md h4">{{ __("Kalimat") }}</label>
                            @if(isset($kalimat))
                                <div class="col-md-12">
                                    <input type="text" class="form-control ml-1" id="kalimat" name="kalimat" value="{{ $kalimat }} "placeholder="Masukan Kalimat">
                                </div>
                            @else
                                <div class="col-md-12">
                                    <input type="text" class="form-control ml-1" id="kalimat" name="kalimat" placeholder="Masukan Kalimat">
                                </div>
                            @endif
                        </div>

                        <div class="dropdown mt-2">
                            <label for="name" class="ml-4 font-weight-bold text-md h4">{{ __("Hitung Abjad Dalam Kalimat") }}</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control ml-1" id="abjad" name="abjad" placeholder="Masukan abjad">
                            </div>
                        </div>


                        <div class="form-group mt-2">
                            <label for="name" class="ml-4 font-weight-bold text-md h4">{{ __("Hasil Hitung Abjad") }}</label>
                            @if (isset($hasil))
                                <div class="col-md-12">
                                    <input type="text" class="form-control " id="hasil" name="hasil" value="{{ $hasil }}">
                                </div>
                            @else
                                <div class="col-md-12">
                                    <input type="text" class="form-control ml-1" id="hasil" name="hasil" placeholder="Hasil Perhitungan">
                                </div>
                            @endif
                        </div>   

                        <div class="form-group mt-4 ">
                            <button type="submit" class="btn btn-primary btn-lg ml-4">{{ __("Validasi") }}</button>
                        </div>
                </form>     
            </div>
        </div>
    </div>

@endsection