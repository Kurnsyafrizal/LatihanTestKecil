@extends('layout.layouts')
@section('title', 'Halaman Enam')


@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body ">
                <form action=" " method="POST">
                    @csrf
                    @method('POST')
                        <div class="form-group">    
                            <label for="add" class="h1 font-weight-bold">{{ __('Halaman Enam') }}</label>
                        </div>
                        
                        <div class="form-group mt-2">
                            <label for="deretangka" class="ml-4 font-weight-bold text-md h4">{{ __("Angka") }}</label>
                            @if(isset($deretangka))
                                <div class="col-md-12">
                                    <input type="text" class="form-control ml-1" id="deretangka" name="deretangka" value="{{ old('deretangka') ?? ($deretangka ?? '') }}" placeholder="Masukan angka">
                                </div>
                            @else
                                <div class="col-md-12">
                                    <input type="text" class="form-control ml-1" id="deretangka" name="deretangka" placeholder="Masukan deretangka">
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group mt-4 ">
                            <button type="submit" class="btn btn-primary btn-lg ml-4" name="deret">{{ __("Deret Angka") }}</button>
                        </div>


                        <div class="form-group mt-2">
                            <label for="hasil" class="ml-4 font-weight-bold text-md h4">{{ __("Hasil Deret Angka") }}</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" id="hasil" name="hasil" rows="8" disabled> {{ old('hasil') ?? ($hasil ?? '') }}</textarea>
                                </div>
                        </div>   
                </form>     
            </div>
        </div>
    </div>
@endsection