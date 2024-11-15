# Dokumen Persyaratan Bisnis (BRD)

**Proyek**: Aplikasi Manajemen Data Barang Frozen Food.
**Versi**: 2.0  
**Tanggal**: 15 November 2024  

---

## 1. Tujuan Proyek

### Objektif
Aplikasi ini dirancang untuk memudahkan pemilik usaha frozen food sehat dalam mengelola produk, mencatat pesanan dari pembeli, serta memproses pembayaran dengan efisien. Aplikasi ini bertujuan untuk mendukung pengelolaan penjualan.

### Latar Belakang
Seiring meningkatnya minat terhadap makanan sehat, terutama frozen food yang praktis dan sehat, toko-toko frozen food membutuhkan sistem manajemen yang mudah dan efisien. Sistem ini memungkinkan penjual mengelola produk serta melayani pesanan dari pembeli secara lebih terorganisir.


## 2. Fitur Utama

### Untuk Penjual (Admin/Pengguna Utama)
1. **Pengelolaan Produk**
   - Menambah, mengubah, atau menghapus produk dengan informasi seperti:
     - Nama produk
     - Harga produk
     - Stok yang tersedia
     - Deskripsi produk
   - Data produk disimpan secara lokal dan dapat disinkronkan ketika ada koneksi internet.

2. **Pencatatan Pesanan**
   - Penjual dapat mencatat pesanan yang dilakukan pembeli.
   - Informasi yang dicatat meliputi:
     - Nama produk yang dipesan
     - Jumlah produk
     - Total harga pesanan

3. **Proses Pembayaran**
   - Setelah pesanan dicatat, penjual dapat memproses pembayaran menggunakan metode:
     - Tunai
     - Debit
     - E-wallet
   - Semua transaksi disimpan secara lokal dan siap disinkronkan ketika perangkat terhubung dengan internet.

### Untuk Pembeli
1. **Melihat Produk**
   - Pembeli dapat melihat daftar produk yang tersedia, termasuk:
     - Nama produk
     - Harga
     - Deskripsi singkat
     - Ketersediaan stok

2. **Memesan Produk**
   - Pembeli dapat memilih produk dari daftar dan membuat pesanan langsung ke penjual.
   - Setelah pesanan dibuat, pembeli akan menunggu konfirmasi dari penjual.

---

## 3. Persyaratan Fungsional

### Sistem Login
- **Akses Berdasarkan Peran**:
  - **Penjual (Admin)**: Dapat mengelola produk, memproses pembayaran.
  - **Pembeli**: memerlukan akun untuk melihat produk dan memesan, interaksi langsung dilakukan dengan penjual.

### Pengaturan & Tampilan Produk dan Pesanan
- **Penjual**:
  - Dapat mengatur katalog produk, mencatat pesanan dengan cepat, dan memproses pembayaran.
- **Pembeli**:
  - Dapat melihat produk yang tersedia dan melakukan pemesanan.

---

## 4. Persyaratan Non-Fungsional

1. **Kegunaan**
   - Antarmuka aplikasi harus sederhana dan intuitif, memudahkan penjual dalam mencatat pesanan dan pembayaran dengan cepat.
   - Pembeli dapat melihat produk dan memesan dengan mudah.

2. **Keamanan**
   - Penjual memiliki akses penuh untuk mengelola produk dan pesanan.
   - Semua data transaksi dilindungi dengan enkripsi untuk menjaga kerahasiaan.

3. **Kinerja**
   - Aplikasi harus dapat memproses pesanan dan pembayaran dengan cepat, terutama pada jam-jam sibuk.

---

## 5. Model, Migrasi, Resource, dan Data Awal yang Dibutuhkan

### Model Data

1. **Products**
   - Menyimpan informasi produk frozen food sehat, seperti nugget sayur, katsu ayam organik, bakso rendah lemak. Setiap produk harus memiliki informasi harga, stok, dan deskripsi.

2. **Orders**
   - Menyimpan data pesanan yang dibuat oleh pembeli, termasuk produk yang dipesan, jumlah, dan total harga.

3. **Transactions**
   - Menyimpan data transaksi, termasuk metode pembayaran dan waktu transaksi.

### Struktur Tabel

#### Tabel Produk (Products Table)
- `id`: bigint UNSIGNED (Primary Key)
- `name`: varchar(255) - Nama produk
- `price`: decimal(10,2) - Harga produk
- `stock`: int(11) - Jumlah stok yang tersedia
- `description`: text - Deskripsi produk
- `created_at`: timestamp
- `updated_at`: timestamp

#### Tabel Pesanan (Orders Table)
- `id`: bigint UNSIGNED (Primary Key)
- `product_id`: bigint UNSIGNED - ID produk yang dipesan
- `quantity`: int(11) - Jumlah produk yang dipesan
- `total_price`: decimal(10,2) - Total harga pesanan
- `order_date`: timestamp - Waktu pesanan dibuat
- `created_at`: timestamp
- `updated_at`: timestamp

#### Tabel Transaksi (Transactions Table)
- `id`: bigint UNSIGNED (Primary Key)
- `order_id`: bigint UNSIGNED - ID pesanan
- `payment_method`: enum('cash', 'debit', 'e-wallet') - Metode pembayaran
- `transaction_date`: timestamp
- `created_at`: timestamp
- `updated_at`: timestamp

---
