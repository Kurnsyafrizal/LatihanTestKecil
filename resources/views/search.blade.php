@extends('layout.layouts')
@section('title', 'Search')


@section('content')
    <div class="container">
        <form action="{{ route('searchPart') }} ">
            <div class="form-group mt-5">
                <label for="filter" class=" font-weight-bold ml-4 h4">{{ __("Filter") }}</label>
            </div>

            <div class="form-group mt-2">
                <label for="partnumber" class="ml-4 font-weight-bold text-md h3">{{ __("Part Number") }}</label>
                <div class="col-md-12">
                    <input type="search" class="form-control ml-1" id="query" name="query" placeholder="Isi dengan part number">
                </div>
            </div>

            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary btn-lg float-right mb-3">{{ __("Cari") }}</button>
            </div>
        </form>

        {{-- Table --}}
        <table class="table mb-10">
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
@endsection