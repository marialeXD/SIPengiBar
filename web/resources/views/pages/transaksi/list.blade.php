@extends('main')

@section('title','Riwayat Transaksi')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Riwayat Transaksi</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">Riwayat Transaksi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">List Riwayat Transaksi</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pengirim</th>
                            <th>Alamat Pengirim</th>
                            <th>Origin</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Berat Beban (Kg)</th>
                            <th>Destination</th>
                            <th>Harga (Rp)</th>
                            <th>Nama Penerima</th>
                            <th>Alamat Penerima</th>
                            <th>E-mail</th>
                            <th>Total (Rp)</th>
                        </tr>
                    </thead>
                    <tbody> 
        
                        <tr>
                            <td>1.</td>
                            <td>Kristin</td>
                            <td>Jl. Gelas no.50</td>
                            <td>Medan</td>
                            <td>Softcase Handphone</td>
                            <td>Aksesoris</td>
                            <td>1</td>
                            <td>Jakarta</td>
                            <td>30.000;</td>
                            <td>Feni</td>
                            <td>Jl. Pisang no.8A</td>
                            <td>feni@gmail.com</td>
                            <td>30.000;</td>
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