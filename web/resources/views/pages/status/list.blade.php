@extends('main')

@section('title','Status Pengiriman')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Status Pengiriman</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">Status Pengiriman</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">List Status Pengiriman</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                    <a href="" class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Barang</th>
                            <th>Nama Penerima</th>
                            <th>Alamat Penerima</th>
                            <th>Kota</th>
                            <th>Status</th>
                            <th colspan=2>Action</th>
                        </tr>
                    </thead>
                    <tbody> 
        
                        <tr>
                            <td>1.</td>
                            <td>Softcase Handphone</td>
                            <td>Feni</td>
                            <td>Jl. Pisang no.8A</td>
                            <td>Medan</td>
                            <td>Pending...</td>
                            <td><a href="" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i> Update</a></td>
                                </form>
                        </tr>
                    </tbody>
                </table>
                <div class="float-right mt-2">
                </div>
            </div>
        </div>

    </section>
</div>
@endsection