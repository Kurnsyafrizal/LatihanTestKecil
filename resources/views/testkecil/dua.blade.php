@extends('layout.layouts')
@section('title', 'Halaman Dua')


@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <form action="{{ route('HalDua') }}" method="POST">
                    @csrf
                    @method('POST')
                        <div class="form-group">    
                            <label for="add" class="h1 font-weight-bold">{{ __('Halaman Dua') }}</label>
                        </div>
                        
                        <div class="form-group mt-2">
                            <label for="tanggal" class="ml-4 font-weight-bold text-md h4">{{ __("Tanggal") }}</label>
                            @if(isset($tanggal))    
                                <div class="col-md-12">
                                    <input type="text" class="form-control ml-1" id="tanggal" name="tanggal" value="{{ $tanggal }}"  placeholder="Masukan tanggal">
                                </div>
                            @else
                                <div class="col-md-12">
                                    <input type="text" class="form-control ml-1" id="tanggal" name="tanggal" placeholder="Masukan tanggal">
                                </div>
                            @endif
                        </div>

                        <div class="form-group mt-2">
                            <label for="bulan" class="ml-4 font-weight-bold text-md h4">{{ __("Bulan") }}</label>
                            @if(isset($bulan))    
                                <div class="col-md-12">
                                    <input type="text" class="form-control ml-1" id="bulan" name="bulan" value="{{ $bulan }}" placeholder="Masukan bulan">
                                </div>
                            @else
                                <div class="col-md-12">
                                    <input type="text" class="form-control ml-1" id="bulan" name="bulan" placeholder="Masukan bulan">
                                </div>
                            @endif

                                
                        </div>

                        <div class="form-group mt-2">
                            <label for="tahun" class="ml-4 font-weight-bold text-md h4">{{ __("Tahun") }}</label>
                            @if(isset($tahun))    
                                <div class="col-md-12">
                                    <input type="text" class="form-control ml-1" id="tahun" name="tahun" value="{{ $tahun }}" placeholder="Masukan tahun">
                                </div>  
                            @else
                            <div class="col-md-12">
                                <input type="text" class="form-control ml-1" id="tahun" name="tahun"  placeholder="Masukan tahun">
                            </div>
                            @endif
                                
                        </div>


                        <div class="form-group mt-4 ">
                            <button type="submit" class="btn btn-primary btn-lg ml-4">{{ __("Validasi") }}</button>
                        </div>

                        <div class="form-group mt-4">
                            <label for="validasi" class="ml-4 font-weight-bold text-md h4">{{ __("Validasi") }}</label>
                            <textarea class="form-control" id="validasi" name="validasi" rows="8">{{ old('validasi') ?? $validasi ?? '' }}</textarea>
                        </div>
                </form>     
            </div>
        </div>
    </div>

@endsection