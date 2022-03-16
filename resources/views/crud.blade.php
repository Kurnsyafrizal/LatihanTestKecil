@extends('layout.layouts')
@section('title', 'CRUD')


@section('content')


    <div class="container">
        <div class="card card-info mt-3 border-0">
            <div class="card-body">
                <form action="{{ route('searchPart') }}">
                    <div class="form-group">
                        <label for="filter" class=" font-weight-bold ml-4 h4">{{ __("Filter") }}</label>
                    </div>
        
                    <div class="form-group mt-2">
                        <label for="partnumber" class="ml-4 font-weight-bold text-md h3">{{ __("Part Number") }}</label>
                        <div class="col-md-12">
                            <input type="search" class="form-control ml-1" id="query" name="query"  value="{{ old('query') }}" placeholder="Isi dengan part number">
                        </div>
                    </div>
        
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg float-right">{{ __("Cari") }}</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card card-info card-outline mt-3">
            <div class="card-header">
                <a href="{{ route('adminexport') }}" class="btn btn-success">{{  __('Export Data')  }}</a>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#importExcel">{{ __('Import Data') }}</a>
            </div>

            <div class="card-body">
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
                        @foreach ($parts as $part)
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
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <form action="/importAdmin" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Import Data') }}</h5>
                        </div>
                                <div class="modal-body">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="file" name="file" required>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Selesai') }}</button>
                                    <button type="button" class="btn btn-primary">{{ __('Simpan') }}</button>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>  
@endsection