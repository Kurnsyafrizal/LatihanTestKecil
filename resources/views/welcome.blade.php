@extends('layout.layouts')
@section('title', 'Hitung')


@section('content')
    
    <div class="containter">
        <form action="/perhitungan" method="POST">
            @csrf
            @method('POST')
            {{-- Masukan Angka --}}
            <div class="form-group mt-5">
                <label for="bil1" class="text-dark ml-4">{{ __("Bilangan 1") }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control ml-1" id="bilangan1" name="bilangan1" placeholder="Masukan Angka">
                </div>
            </div>

            {{-- Selected Operator --}}
            <div class="form-group mt-5">
                <label for="operator" class="text-dark ml-4">{{ __("Operator (+ , - , / , *)") }}</label>
                <div class="col-md-4">
                    <select name="operator" id="operator" class="form-control">
                        <option value="penjumlahan"> {{ __("+") }}</option>
                        <option value="pengurangan"> {{ __("-") }}</option>
                        <option value="pembagian"> {{ __("/") }}</option>
                        <option value="perkalian"> {{ __("*") }}</option>
                    </select>
                </div>
            </div>

            {{-- Masukan Angka --}}
            <div class="form-group mt-5">
                <label for="bil2" class="text-dark ml-4">{{ __("Bilangan 2") }}</label>
                <div class="col-md-4">
                    <input type="text" class="form-control ml-1" id="bilangan2" name="bilangan2" placeholder="Masukan Angka">
                </div>
            </div>

            {{-- Button --}}
            <div class="form-group mt-4 ">
                <button type="submit" class="btn btn-primary btn-lg ml-4">{{ __("Hitung") }}</button>
                <a href="/"><button type="reset" class="btn btn-danger btn-lg ml-4">{{ __("Reset") }}</button></a>
            </div>

            
            <div class="form-group mt-4 ">
                <label for="bil3" class="text-dark ml-4">{{ __("Hasil = ") }}</label>
                @if (isset($hasil))
                    <div class="col-md-4">
                        <input type="text" class="form-control " id="hasil" name="hasil" value="{{ $hasil }}">
                    </div>
                @else
                    <div class="col-md-4">
                        <input type="text" class="form-control ml-1" id="hasil" name="hasil" placeholder="Hasil Perhitungan">
                    </div>
                @endif
            </div>        
        </form>
    </div>

@endsection