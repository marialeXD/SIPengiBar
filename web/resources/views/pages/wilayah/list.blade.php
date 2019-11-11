@extends('main')

@section('title','List Wilayah')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Wilayah</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Wilayah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        @if ($message = session("info"))
            <div class="alert alert-success">
                <i class="fa fa-info-circle"></i> {{ $message }}
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">List Wilayah</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                    <a href="{{ route("kurir.create") }}" class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah Destinasi</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Origin</th>
                            <th>Destination</th>
                            <th>Ongkos</th>
                            <th colspan=2>Action</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration + ($data->count()*($data->currentPage()-1)) }}</td>
                            <td>{{ $item->origin }}</td>
                            <td>{{ $item->destination}}</td>
                            <td>{{ $item->ongkos}}</td>
                            <td><a href="" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i> Rubah</a></td>
                            <td>
                                <form action="" method="POST">
                                    @method("delete")
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-block">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                            </td>
                                </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="float-right mt-2">
                    {{ $data->links() }}
                </div>
            </div>
        </div>

    </section>
</div>
@endsection