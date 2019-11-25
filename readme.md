# Sistem Informasi Pengiriman Barang (SIPengiBar)

## ERD
![ERD Relationship] (erd-Relationship.png)

## User
- Admin
- Customer


## Web
Admin :
- Login
- Admin membuka halaman transaksi disaat ada permintaan pengiriman
- Menginput data pengirim :
    - Nama Pengirim
    - Alamat Pengirim
    - Nomor Telf Pengirim
- Menginput data dari barang yang Customer berikan untuk dikirim :
    - Nama Barang
    - Jenis Barang: Barang Pecah Belah/Tidak
    - Berat Beban
    - Tujuan Pengiriman
    - Harga Pengiriman: Harga dihitung berdasarkan berat beban (per 1 Kg)
- Menginput data penerima :
    - Nama Penerima
    - Alamat Penerima
    - Nomor Telf Penerima
- Konfirmasi Data
- Verifikasi pengiriman (memberikan kode resi)

## Mobile
Customer :
- Login 
- Buat Akun
- Cek Tarif Pengiriman Barang:
    - Origin (Asal)
    - Destination (Tujuan)
    - Beban Barang
- Cek Status Pengiriman
    - Masukan Kode Resi
        - Apabila pengiriman tertunda akan ada status "Pending"