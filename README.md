# 🚚 Manajemen Supir & Kendaraan

![Laravel](https://img.shields.io/badge/Laravel-10.x-red?logo=laravel)
![Filament](https://img.shields.io/badge/Filament-Admin-blueviolet?logo=data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjZmZmIiB2aWV3Qm94PSIwIDAgMjQgMjQiPjwvc3ZnPg==)
![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)

> **Aplikasi modern untuk mengelola data supir & kendaraan berbasis Laravel + Filament.**

---

## ✨ Fitur Utama

- CRUD **Supir** & **Kendaraan** (tambah, edit, hapus, lihat)
- Relasi: Setiap kendaraan terhubung ke supir
- Validasi unik & wajib isi
- Tabel interaktif: search, sort, filter
- UI Admin modern & responsif (Filament)
- Tombol **Edit** & **Delete** langsung di tabel

---

## 🗂️ Struktur Data

### Supir
| Field      | Keterangan         |
|------------|-------------------|
| nama       | Nama Supir        |
| no_ktp     | Nomor KTP (unik)  |
| no_sim     | Nomor SIM (unik)  |
| alamat     | Alamat            |
| telepon    | Nomor Telepon     |
| status     | Aktif/Non-aktif   |

### Kendaraan
| Field      | Keterangan                |
|------------|--------------------------|
| supir_id   | Relasi ke Supir          |
| plat_nomor | Plat Nomor (unik)        |
| jenis      | Jenis Kendaraan          |
| merk       | Merk Kendaraan           |
| tahun      | Tahun Kendaraan          |

---

## 🚀 Instalasi Cepat

1. **Clone & Install**
   ```bash
   git clone <repo-anda>
   cd <folder-project>
   composer install
   npm install && npm run build
   ```
2. **Copy & Konfigurasi .env**
   ```bash
   cp .env.example .env
   php artisan key:generate
   # Edit DB_DATABASE, DB_USERNAME, DB_PASSWORD di .env
   ```
3. **Migrasi Database**
   ```bash
   php artisan migrate
   ```
4. **Jalankan Server**
   ```bash
   php artisan serve
   ```
5. **Akses Admin Panel**
   - Buka: [http://localhost:8000/admin](http://localhost:8000/admin)
   - Login dengan user admin

---

## 🖥️ Tampilan (Contoh)

![Contoh Tampilan Admin](https://placehold.co/900x300?text=Filament+Admin+Panel+Screenshot)

---

## 📚 Penggunaan
- Menu **Manajemen Supir**: Kelola data supir
- Menu **Manajemen Kendaraan**: Kelola data kendaraan & relasi ke supir
- Tabel: Search, sort, edit, hapus langsung

---

## ⚙️ Kebutuhan Sistem
- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL/MariaDB

---

## 📝 Lisensi
Aplikasi ini menggunakan [MIT License](https://opensource.org/licenses/MIT).

---

> Dibuat untuk kebutuhan **UTS KSI 20230801343**
