@extends('layout.layouts')
@section('title', 'Halaman Empat')


@section('content')
        <div class="container">
            <div class="card mt-3">
                <div class="card-body ">
                    <form action=" " method="POST">
                        @csrf
                        @method('POST')
                            <div class="form-group">    
                                <label for="add" class="h1 font-weight-bold">{{ __('Halaman Empat') }}</label>
                            </div>

                            <div class="form-group">    
                                <input type="text" class="form-control" id="input" name="input" value="{{isset($prev)?$prev:''}}">
                            </div>

                            <div class="form-group">    
                                <input type="submit" value="Jalankan" class="btn btn-primary mt-2">
                            </div>

                            <div class="form-group">    
                                <p class="mt-3">Hasil</p>
                                <span class="form-control">
                                    @if (isset($res)==true)
                                        {{$res}}
                                    @endif
                                </span>
                            </div>

                    </form>     


                </div>
            </div>
        </div>
@endsection