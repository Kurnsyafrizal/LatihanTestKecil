@extends('layout.layouts')
@section('title', 'Add Data')


@section('content')
    <div class="container">

            <form action="{{ route('addData') }}" method="POST">
                @csrf
                @method('POST')
                    <div class="form-group mt-5">    
                        <label for="add" class="h1 font-weight-bold">{{ __('Add Parts') }}</label>
                    </div>
                    
                    <div class="form-group mt-2">
                        <label for="partnumber" class="ml-4 font-weight-bold text-md h4">{{ __("Part Number") }}</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control ml-1" id="partnumber" name="partnumber" placeholder="Isi dengan part number">
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <label for="name" class="ml-4 font-weight-bold text-md h4">{{ __("Name") }}</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control ml-1" id="name" name="name"   placeholder="Masukan Nama Anda">
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <label for="UM" class="ml-4 font-weight-bold text-md h4">{{ __("UM") }}</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control ml-1" id="UM" name="UM"  placeholder="Isi UM">
                        </div>
                    </div>

                    <div class="form-group mt-4 ">
                        <button type="submit" class="btn btn-primary btn-lg ml-4 float-right">{{ __("Add Data Parts") }}</button>
                    </div>
            </form>     
    </div>

@endsection