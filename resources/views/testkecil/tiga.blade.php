@extends('layout.layouts')
@section('title', 'Halaman Tiga')


@section('content')
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <form action="{{ route('HalTiga') }}" method="POST">
                @csrf
                @method('POST')
                    <div class="form-group mt-2">
                        <label for="kalimat" class="ml-4 font-weight-bold text-md h4">{{ __("Kalimat") }}</label>
                        @if(isset($kalimat))
                            <div class="col-md-12">
                                <input type="text" class="form-control ml-1" id="kalimat" name="kalimat" value="{{ $kalimat }}" placeholder="Masukan kalimat">
                            </div>  
                        @else
                            <div class="col-md-12">
                                <input type="text" class="form-control ml-1" id="kalimat" name="kalimat" placeholder="Masukan kalimat">
                            </div>  
                        @endif
                    </div>


                    <div class="form-group mt-4 ">
                        <button type="submit" class="btn btn-primary btn-lg ml-4">{{ __("Jalankan") }}</button>
                    </div>

                    <div class="form-group mt-4">
                        <label for="hasil" class="ml-4 font-weight-bold text-md h4">{{ __("Hasil Kalimat") }}</label>
                        @if(isset($Potongkalimat))
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="Potongkalimat" rows="8">
                                @foreach($Potongkalimat as $hasil)
                                    {{ $hasil }}
                                @endforeach
                            </textarea>
                        @else
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="Potongkalimat" rows="8" disabled></textarea>
                        @endif
                    </div>
            </form>     
        </div>
    </div>
</div>
@endsection