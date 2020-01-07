@extends('main')

@section('title','Form Wilayah')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Wilayah</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("wilayah.index") }}">List Wilayah</a></li>
                        <li class="breadcrumb-item active">Form Wilayah</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form Wilayah</h3>
            </div>
            <div class="card-body">
                <form action='{{ isset($data)
                                ?route("wilayah.update",[$data->id])
                                 :route("wilayah.store") }}'
                    method="POST" autocomplete="off">
                    @csrf
                     @if (isset($data))
                        @method("PUT")
                    @endif
                    <div class="form-group">
                        <label for="origin">Origin</label>
                        <input type="text"
                            class="form-control"
                            name="origin" value=''}>
                         @error("origin")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror  
                    </div>
                    <div class="form-group">
                        <label for="destination">Destination</label>
                        <input type="text"
                            class="form-control "
                            name="destination" value=''>
                        @error("destination")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <label for="ongkos">Ongkos (Rp/Kg)</label>
                        <input type="text"
                            class="form-control "
                            name="ongkos" value="">
                        @error("ongkos")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror 
                    </div>
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <a href="" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection