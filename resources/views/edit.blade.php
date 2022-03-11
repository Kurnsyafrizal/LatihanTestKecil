@extends('layout.layouts')
@section('title', 'CRUD')


@section('content')
    <div class="container">

        @foreach ($parts as $part) 

            <form action="{{ route('update',['parts' => $part->id]) }}" method="POST">
                @csrf
                @method('POST')
                    <div class="form-group mt-5">    
                        <label for="Edit" class="h1 font-weight-bold">{{ __('Edit Parts') }}</label>
                    </div>
                    
                    <div class="form-group mt-2">
                        <label for="partnumber" class="ml-4 font-weight-bold text-md h4">{{ __("Part Number") }}</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control ml-1" id="partnumber" name="partnumber" value="{{ old('partnumber', $part->partnumber) }}" placeholder="Isi dengan part number">
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <label for="name" class="ml-4 font-weight-bold text-md h4">{{ __("Name") }}</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control ml-1" id="name" name="name"  value="{{ old('name', $part->name) }}" placeholder="Masukan Nama Anda">
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <label for="UM" class="ml-4 font-weight-bold text-md h4">{{ __("UM") }}</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control ml-1" id="UM" name="UM"  value="{{ old('UM', $part->UM) }}" placeholder="Isi UM">
                        </div>
                    </div>

                    <div class="form-group mt-4 ">
                        <button type="submit" class="btn btn-primary btn-lg ml-4 float-right">{{ __("Update Data") }}</button>
                    </div>
            </form>     

        @endforeach
    </div>

@endsection