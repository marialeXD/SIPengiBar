@extends('main')

@section('title','List Jenis Barang')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Jenis Barang</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Jenis Barang</li>
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
                <h3 class="card-title">List Jenis Barang</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                    <a href="{{ route("barang.create") }}" class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah Barang</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            
                            <th>Jenis Barang</th>
                            <th colspan=2>Action</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <tr>
                            <td>Kosmetik</td>
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
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection