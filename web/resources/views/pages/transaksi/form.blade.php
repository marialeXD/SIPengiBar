@extends('main')

@section('title','Form Transaksi')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Transaksi</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="">List Transaksi</a></li>
                        <li class="breadcrumb-item active">Form Transaksi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form Transaksi</h3>
            </div>
            <div class="card-body">
                <form action=""
                    method="POST" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="namapengirim">Nama Pengirim</label>
                        <input type="text"
                            class="form-control"
                            name="namapengirim">
                    </div>
                    <div class="form-group">
                        <label for="alamatpengirim">Alamat Pengirim</label>
                        <input type="text"
                            class="form-control"
                            name="alamatpengirim">
                    </div>
                    <div class="form-group">
                        <label for="origin">Origin</label>
                        <input type="text"
                            class="form-control"
                            name="origin">
                    </div>
                    <div class="form-group">
                        <label for="telfpengirim">No Telf Pengirim</label>
                        <input type="telfpengirim"
                            class="form-control"
                            name="telfpengirim">
                    </div>
                    <div class="form-group">
                        <label for="barang">Nama Barang</label>
                        <input type="barang"
                            class="form-control"
                            name="barang">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Barang</label>
                        <select name="jenis" class="form-control">
                            <option value="kos">Kosmetik</option>
                            <option value="bpb">Barang Pecah Belah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="beban">Berat Beban (Kg)</label>
                        <input type="beban"
                            class="form-control"
                            name="beban">
                    </div>
                    <div class="form-group">
                        <label for="destination">Destination</label>
                        <select name="destination" class="form-control">
                            <option value="jkt">Jakarta</option>
                            <option value="bdg">Bandung</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga (Rp)</label>
                        <input type="harga"
                            class="form-control"
                            name="harga">
                    </div>

                    <div class="form-group">
                        <label for="namapenerima">Nama Penerima</label>
                        <input type="text"
                            class="form-control"
                            name="namapenerima">
                    </div>
                    <div class="form-group">
                        <label for="alamatpenerima">Alamat Penerima</label>
                        <input type="text"
                            class="form-control"
                            name="alamatpenerima">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text"
                            class="form-control"
                            name="email">
                    </div>
                    <div class="form-group">
                        <label for="total"><h2>Total (Rp)</h2></label>
                        <input type="text"
                            class="form-control"
                            name="total">
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