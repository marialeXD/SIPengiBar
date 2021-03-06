@extends('main')

@section('title','Form Jenis Barang')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Tambah Jenis Barang</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("barang.index") }}">List Jenis Barang</a></li>
                        <li class="breadcrumb-item active">Form Jenis Barang</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form Jenis Barang</h3>
            </div>
            <div class="card-body">
                <form action='{{ isset($data)
                                 ?route("barang.update",[$data->id])
                                 :route("barang.store") }}'
                    method="POST" autocomplete="off">
                    @csrf
                    @if (isset($data))
                        @method("PUT")
                    @endif
                    <div class="form-group">
                        <label for="jenis">Jenis Barang</label>
                        <input type="text"
                            class="form-control"
                            name="jenis" value=''}>
                         @error("jenis")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror  
                    </div>
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                    <a href="{{ route("barang.index") }}" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection