@extends('layout.layouts')
@section('title', 'Search')


@section('content')
    <div class="container">
        <div class="card card-info mt-3 border-0">
            <div class="card-body">
                <form action="{{ route('searchPart') }} ">
                    <div class="form-group">
                        <label for="filter" class=" font-weight-bold ml-4 h4">{{ __("Filter") }}</label>
                    </div>

                    <div class="form-group mt-2">
                        <label for="partnumber" class="ml-4 font-weight-bold text-md h3">{{ __("Part Number") }}</label>
                        <div class="col-md-12">
                            <input type="search" class="form-control ml-1" id="query" name="query" value="{{ old('partnumber') }}" placeholder="Isi dengan part number">
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary btn-lg float-right mb-3">{{ __("Cari") }}</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Table --}}
        <div class="card card-info card-outline mt-3  border-0">
            {{-- <div class="card-header"><a href="{{ route('adminexport') }}" class="btn btn-success">Export Data</a></div> --}}
            <div class="card-body ">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Action</th>
                        <th scope="col">Part Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">UM</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($parts as $part)
                            <tr>
                                <td>
                                    <div class="flex">
                                        <a href="{{ route('edit', ['parts' => $part->id]) }}"><button class="btn btn-primary" id="edit" name="edit">{{ __('Edit') }}</button></a>
                                        <form action="{{ route('delete', ['parts' => $part->id ]) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value="{{ $part->id }}">
                                            <button class="btn btn-danger" id="hapus" name="hapus">{{ __('hapus') }}</button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $part->partnumber }}</td>
                                <td>{{ $part->name }}</td>
                                <td>{{ $part->UM }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td>{{ __('Data Tidak Ditemukan') }}</td>
                            </tr>
                        @endforelse 
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
@endsection