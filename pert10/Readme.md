# Langkah-Langkah Setup SampleApp

## 1. Ekstrak File Aplikasi

```sh
unzip sampleapp.zip
cd sampleapp
```

## 2. Menjalankan Docker

```sh
docker compose up -d  # Jalankan Docker
docker exec -it sample bash  # Masuk ke dalam container
```

## 3. Menginstall Laravel Project

```sh
composer create-project --prefer-dist raugadh/fila-starter .
```

## 4. Menyesuaikan File `.env`

* Edit file `.env` sesuai kebutuhan aplikasi.

## 5. Menjalankan Perintah Laravel Artisan

```sh
php artisan key:generate
php artisan storage:link
php artisan migrate
```

## 6. Mengatur Izin Folder

```sh
chown -R www-data:www-data storage/*
chown -R www-data:www-data bootstrap/*
```

## 7. Inisialisasi Proyek

```sh
php artisan project:init
```

## 8. Membuat Model Baru

```sh
php artisan make:model Classroom -ms
```

## 9. Menyesuaikan File Berikut:

* **Migration** (struktur database)
* **Seeder** (data awal)
* **Model** (logika model)

## 10. Membuat Filament Resource

```sh
php artisan make:filament-resource Classroom --generate
```

## 11. Migrasi Ulang Database dan Inisialisasi Ulang Proyek

```sh
php artisan migrate
php artisan project:init
```
