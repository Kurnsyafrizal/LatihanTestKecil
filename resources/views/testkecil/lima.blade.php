@extends('layout.layouts')
@section('title', 'Halaman Lima')


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
                            <label for="iterasi" class="ml-4 font-weight-bold text-md h4">{{ __("iterasi") }}</label>
                            @if(isset($iterasi))
                                <div class="col-md-12">
                                    <input type="text" class="form-control ml-1" id="iterasi" name="iterasi" value="{{ old('Iterasi') ?? ($iterasi ?? '') }}" placeholder="Masukan iterasi">
                                </div>
                            @else
                                <div class="col-md-12">
                                    <input type="text" class="form-control ml-1" id="iterasi" name="iterasi" placeholder="Masukan iterasi">
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group mt-4 ">
                            <button type="submit" class="btn btn-primary btn-lg ml-4" name="fibonacci">{{ __("Deret Fibonacci") }}</button>
                        </div>


                        <div class="form-group mt-2">
                            <label for="name" class="ml-4 font-weight-bold text-md h4">{{ __("Hasil Deret Fibonacci") }}</label>
                            @if(isset($hasil))
                                <div class="col-md-12">
                                    <input type="text" class="form-control " id="hasil" name="hasil" disabled value="{{ old('hasil') ?? ($hasil ?? '') }}"> 
                                </div>
                            @else
                                <div class="col-md-12">
                                    <input type="text" class="form-control " id="hasil" name="hasil" disabled> 
                                </div>
                            @endif
                        </div>   
                </form>     
            </div>
        </div>
    </div>
@endsection