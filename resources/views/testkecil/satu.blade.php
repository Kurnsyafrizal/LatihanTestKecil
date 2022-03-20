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

                        <div class="form-group mt-2">
                            <label for="exampleFormControlSelect1" class="ml-4 font-weight-bold text-md h4">{{ __("Hitung Abjad Dalam Kalimat") }}</label>
                            <div class="col-md-12">
                                <select name="abjad" class="form-control" id="abjad">
                                    @foreach (range('A','Z') as $i)
                                        @if ($i == $abjad)
                                            <option value="{{ $i }}" selected > {{ $i }} </option> 
                                        @else
                                            <option value="{{ $i }}" > {{ $i }} </option> 
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group mt-2">
                            <label for="name" class="ml-4 font-weight-bold text-md h4">{{ __("Hasil Hitung Abjad") }}</label>
                            @if (isset($hasil))
                                <div class="col-md-12">
                                    <input type="text" class="form-control " id="hasil" name="hasil" value="{{ $hasil }}" disabled>
                                </div>
                            @else
                                <div class="col-md-12">
                                    <input type="text" class="form-control " id="hasil" name="hasil" disabled>
                                </div>
                            @endif
                        </div>   

                        <div class="form-group mt-4 ">
                            <button type="submit" class="btn btn-primary btn-lg ml-4 float-right">{{ __("Jalankan") }}</button>
                        </div>
                </form>     
            </div>
        </div>
    </div>

@endsection