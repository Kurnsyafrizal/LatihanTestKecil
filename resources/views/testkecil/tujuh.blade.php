@extends('layout.layouts')
@section('title', 'Halaman Tujuh')


@section('content')
<div class="container">
    <div class="card mt-3">
        <div class="card-body ">
            <form action=" " method="POST">
                @csrf
                @method('POST')
                    <div class="form-group">    
                        <label for="add" class="h1 font-weight-bold">{{ __('Halaman Lima') }}</label>
                    </div>
                    
                    <div class="form-group mt-2">
                        <label for="nilaiAwal" class="ml-4 font-weight-bold text-md h4">{{ __("nilaiAwal") }}</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control ml-1" id="nilaiAwal" name="nilaiAwal" placeholder="Masukan nilaiAwal">
                            </div>
                    </div>

                    <div class="form-group mt-2">
                        <label for="iteration" class="ml-4 font-weight-bold text-md h4">{{ __("iteration") }}</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control ml-1" id="iteration" name="iteration" placeholder="Masukan iteration">
                            </div>
                    </div>
                    
                    <div class="form-group mt-4 ">
                        <button type="submit" class="btn btn-primary btn-lg ml-4" name="counter">{{ __("Counter 4 Digit") }}</button>
                    </div>


                    <div class="form-group mt-2">
                        <label for="name" class="ml-4 font-weight-bold text-md h4">{{ __("Hasil Counter 4 Digit") }}</label>
                        @if(is_array($hasil))
                            @if(count($hasil) != 0 )
                                <div class="col-md-12">
                                    @foreach ($hasil as $hsl)
                                    <p>{{ $hsl }}</p>
                                    @endforeach
                                </div>
                            @else
                                <div class="col-md-12">
                                <p>{{ __("Tidak") }}</p>
                                </div>
                            @endif
                        @endif
                    </div>   
            </form>     
        </div>
    </div>
</div>
@endsection