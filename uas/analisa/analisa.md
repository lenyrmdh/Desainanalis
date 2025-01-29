# Dokumen Persyaratan Bisnis (BRD)

**Bidang Usaha**: Pembibitan Atlet Biliar Dengan Sistem Manajemen Pelatihan yang Terarah.

**Tanggal**: 31 Januari 2025  

---

### Apa Itu Biliar?

*Biliar* adalah olahraga presisi di mana pemain menggunakan stik (cue stick) 
untuk memukul bola (cue ball) ke bola target lain di atas meja khusus. Terdapat 
beberapa jenis permainan biliar, di antaranya:

1. **8-Ball**: Pemain harus memasukkan bola "solid" (nomor 1-7) atau "striped" (nomor 9-15) dan akhirnya memasukkan bola 8 untuk menang.  
2. **9-Ball**: Permainan lebih cepat dengan tujuan memasukkan bola bernomor 1 hingga 9 secara berurutan.  
3. **Snooker**: Menggunakan bola merah dan warna tertentu, dengan aturan yang lebih kompleks.  
4. **Carom**: Permainan tanpa lubang, di mana poin diperoleh melalui pantulan bola.  

Biliar diakui sebagai olahraga mental yang memadukan strategi, konsentrasi, 
dan keahlian teknis. Dalam kompetisi, ini juga menjadi cabang olahraga resmi
di beberapa turnamen tingkat dunia seperti *SEA Games* dan *Asian Games*.

---

## Tujuan Proyek
Proyek ini dirancang untuk mengembangkan dan membina generasi muda menjadi atlet profesional di cabang olahraga biliar. 
Dengan menyediakan Pelatih dan Sistem Manajemen yang dapat diakses secara digital Program ini bertujuan untuk 
menciptakan ekosistem pelatihan yang terstruktur, modern, dan sesuai standar internasional. 

## Latar Belakang
Olahraga biliar semakin populer, terutama di kalangan generasi muda. Namun, masih sedikit
program pembibitan atlet yang dirancang khusus untuk mengembangkan talenta lokal dengan 
pendekatan profesional. Dengan membangun program ini, kita bisa:

- Membina bibit muda untuk mencapai potensi maksimal mereka.
- Menyediakan akses fasilitas dan pelatih berkualitas.
- Mendukung Sistem manajemen digital yang dapat mempermudah atlit mengakses data.
- Menyumbang atlet biliar kompetitif di tingkat nasional dan internasional.

---

## 1. Langkah-Langkah Analisis untuk Memulai Program Pembibitan Atlet Biliar
---

## **a.  Analisis Situasi dan Potensi Lokal**:

- **Pemetaan Potensi**:
  - Identifikasi jumlah tempat biliar dan potensinya sebagai tempat latihan.
  - Survei minat generasi muda (usia 8-18 tahun) terhadap olahraga ini, misalnya melalui sekolah, komunitas olahraga, atau media sosial.
  - Cari tahu apakah ada tokoh lokal yang sudah dikenal sebagai pemain biliar dan bisa menjadi inspirasi.

- **Kolaborasi Lokal**:
  - Libatkan pengelola tempat biliar lokal sebagai mitra awal untuk menghemat biaya penyediaan fasilitas.
  - Libatkan komunitas atau organisasi olahraga untuk mendukung kampanye dan program.

## **b.  Analisis Sistem Manajemen Digital untuk Program Atlet Biliar**

## **1. Sistem ini membutuhkan mekanisme login yang membedakan dua peran utama**:

- **untuk Admin:**
  - Admin dapat menambahkan data diri atlet, termasuk nama, usia, tingkat keterampilan, dan  riwayat pelatihan.
  - Admin dapat menambahkan data diri pelatih, termasuk nama, kualifikasi, dan pengalaman kerja.
  - Admin dapat mengatur jadwal latihan, termasuk sesi latihan harian dan fasilitas yang digunakan.

- **untuk Atlet:**
  - Atlet hanya bisa melihat jadwal latihan yang telah ditentukan oleh admin.
  - Atlet dapat melihat data diri mereka sendiri, seperti nama, usia, dan tingkat keterampilan.
  - Tidak memiliki akses ke pengelolaan sistem.


## **2.  Model, Migrasi, Resource, dan Data Awal yang Dibutuhkan untuk Sistem Manajemen Atlet Biliar**

## **Model Data**:
- **Athletes**
   - Menyimpan informasi tentang atlet, seperti nama, usia, jenis kelamin, tingkat keterampilan, riwayat pelatihan, dan hasil evaluasi kompetisi.

- **Coaches**
   - Menyimpan data pelatih, termasuk nama, kualifikasi, dan pengalaman kerja.

- **Schedules**
   - Menyimpan data jadwal latihan atlet, termasuk sesi latihan, fasilitas yang digunakan, dan durasi latihan.

## **3.  Struktur Tabel**:

## **Tabel Atlet (Athletes Table)**
- `id`: bigint UNSIGNED (Primary Key)
- `name`: varchar(255) - Nama lengkap atlet
- `age`: int(11) - Usia atlet
- `gender`: enum('male', 'female') - Jenis kelamin atlet
- `skill_level`: enum('beginner', 'intermediate', 'advanced') - Tingkat keterampilan
- `training_history`: text - Riwayat pelatihan
- `competition_evaluation`: text - Hasil evaluasi kompetisi
- `created_at`: timestamp
- `updated_at`: timestamp

## Tabel Pelatih (Coaches Table)
- `id`: bigint UNSIGNED (Primary Key)
- `name`: varchar(255) - Nama lengkap pelatih
- `qualification`: text - Kualifikasi pelatih
- `experience`: text - Pengalaman kerja
- `created_at`: timestamp
- `updated_at`: timestamp

## Tabel Jadwal Latihan (Schedules Table)
- `id`: bigint UNSIGNED (Primary Key)
- `athlete_id`: bigint UNSIGNED - ID atlet
- `coach_id`: bigint UNSIGNED - ID pelatih
- `session_date`: timestamp - Waktu sesi latihan
- `facility`: varchar(255) - Fasilitas yang digunakan
- `training_type`: enum('routine', 'competition_preparation', 'recovery') - Jenis latihan
- `match_duration`: int(11) - Durasi pertandingan dalam menit
- `break_time`: int(11) - Waktu istirahat dalam menit
- `created_at`: timestamp
- `updated_at`: timestamp


## **c.  Manajemen Jadwal Latihan**
- **Admin memiliki kontrol penuh terhadap jadwal latihan, termasuk**:
  - Menjadwalkan sesi latihan harian.
  - Menentukan fasilitas yang digunakan untuk latihan.
  - Mengelola persiapan kompetisi dan memastikan jeda istirahat sesuai kebutuhan atlet.


## **2.  5W1H**
---
- **WHAT**
- **Apa yang menjadi fokus utama dalam cabor biliar?**
  - Peningkatan teknik dasar biliar, strategi permainan, dan optimalisasi daya tahan serta konsentrasi atlet.
---

- **WHY**
- **Mengapa cabor biliar membutuhkan perhatian khusus?**
  - Regenerasi atlet berbakat diperlukan untuk menjaga prestasi di turnamen nasional dan internasional. Manajemen latihan yang buruk dapat menyebabkan penurunan performa atlet.
---

- **WHERE**
- **Di mana implementasi solusi dapat dilakukan?**
  - Dalam sistem manajemen pelatihan berbasis digital yang dapat diakses oleh atlet.
---

- **WHO**
- **Siapa yang terlibat dalam solusi ini?**
  - Pelatih, atlet, pengelola program(admin)
---

- **WHEN**
- **Kapan solusi ini harus diterapkan?**
  - Segera, untuk mendukung program pembibitan atlet biliar muda yang lebih terstruktur dan efisien dalam waktu dekat.
--- 

- **HOW**
- **Bagaimana solusi ini diterapkan?**
  - Melalui implementasi sistem digital yang memudahkan pelatih dalam memberikan latihan yang terstruktur dan memonitor kemajuan atlet secara lebih personal.
---


## **3.  Analisis Peluang dan Tantangan (SWOT)** 


| **Faktor**               | **Penjelasan**                                                                                   |
|--------------------------|-------------------------------------------------------------------------------------------------|
| **Strength**             | Passion dan dukungan lokal, ketersediaan tempat biliar, serta minat masyarakat yang mulai tumbuh.|
| **Weakness**             | Keterbatasan anggaran, belum ada pelatih tetap, atau minim pengalaman dalam mengelola program.  |
| **Opportunity**          | Minat generasi muda yang besar, peluang sponsor lokal, dan dukungan dari pemerintah daerah.     |
| **Threat**               | Kompetitor lebih besar, anggapan negatif tentang biliar sebagai hiburan dewasa, atau regulasi.  |

---

## **4.  Langkah Persiapan Program**

## **Fasilitas dan Infrastruktur**

- **Fasilitas Utama**:
  - Minimal 2-3 meja biliar ukuran standar (9 kaki).
  - Stik biliar berkualitas untuk latihan, termasuk stik khusus untuk pemula.
  - Bola biliar standar kompetisi.
  - Lampu khusus di atas meja untuk pencahayaan optimal.

- **Data Personal untuk Atlet**
**Atribut Data**: 
   - Nama lengkap.
   - Usia.
   - Jenis kelamin.
   - Tingkat keterampilan (pemula/menengah/lanjutan).
   - Riwayat pelatihan.
   - Hasil evaluasi kompetisi.


## **5.  Manajemen Waktu Terkait Pertandingan**
- **Langkah-Langkah Perencanaan**:  
Pembagian Waktu:
  - Latihan rutin: 4 hari/minggu.
  - Persiapan kompetisi: 2 minggu sebelum pertandingan.
  - Istirahat dan pemulihan: 1-2 hari/minggu.
  - Waktu pertandingan dihitung berdasarkan jumlah peserta dan format pertandingan.
  - Beri jeda minimal 15 menit antar pertandingan.

- **Klasemen Atlet Klasemen**:
  - Latihan: Atlet yang telah menyelesaikan 90% dari porsi latihan wajib.


- **Lokasi**
  - Jika tidak memiliki tempat sendiri, sewa tempat biliar dengan kesepakatan khusus untuk waktu latihan.

---

## **6.  Kurikulum Latihan dan Penilaian atlet**
                                                                                                  
- **Teknik Dasar**: Cara memegang stik, postur tubuh, teknik pukulan (stroke).
- **Strategi Permainan**: Penempatan bola (position play), membaca situasi meja, bertahan, dan menyerang.
- **Latihan Fisik**: Fokus pada koordinasi tangan-mata, refleks, dan stabilitas.
- **Mental dan Konsentrasi**: Simulasi tekanan kompetisi, pengendalian emosi, dan fokus.


## **7.  Pelatih dan Mentor**                          


- Cari pelatih berpengalaman di bidang biliar, baik secara lokal maupun dari luar wilayah.
- Jika anggaran terbatas, latih pelatih lokal dengan mengikuti seminar atau pelatihan biliar profesional.

---

## **8.  Rekrutmen dan Promosi**


- **Segmentasi Target**:
  - Fokus pada anak usia 8-15 tahun, dengan potensi fisik dan mental yang lebih mudah dibentuk.

- **Metode Rekrutmen**:
  - Adakan program perkenalan gratis di sekolah atau komunitas olahraga.
  - Gunakan media sosial untuk menyebarkan informasi dan mendorong minat masyarakat.

- **Promosi**:
  - Buat video pendek tentang program dan fasilitas yang ditawarkan.
  - Libatkan tokoh lokal untuk membantu menarik perhatian.

---

### **9.  Pendanaan dan Sponsor**

- Cari sponsor lokal, seperti pemilik usaha atau merek yang relevan, misalnya minuman energi atau alat olahraga.
- Jelaskan manfaat yang mereka dapatkan, seperti branding di acara kompetisi atau pelatihan.
- Ajukan proposal ke pemerintah daerah atau organisasi olahraga nasional untuk mendapatkan dana tambahan.

---

## **10. Strategi untuk Kesuksesan Atlet**

- **a. Identifikasi dan Pengembangan Bakat**

  - Gunakan tes awal untuk menilai bakat pemain, seperti akurasi pukulan, pemahaman strategi, dan fokus.
  - Buat jalur pengembangan khusus untuk pemain berbakat dengan intensitas latihan lebih tinggi.

- **b. Dukungan Psikologis**

  - Sediakan sesi pelatihan mental untuk membantu pemain menghadapi tekanan kompetisi.
  - Libatkan psikolog olahraga jika memungkinkan.

- **c. Pembinaan Karakter**

  - Latih disiplin, etika, dan kerja tim sebagai bagian dari program pembinaan.
  - Libatkan orang tua dalam proses pembinaan agar dukungan lebih maksimal.

- **d. Program Eksposur dan Kompetisi Eksternal**

  - Kirim atlet muda ke turnamen lokal dan nasional untuk mendapatkan pengalaman nyata.
  - Jalin kerja sama dengan klub biliar di daerah lain untuk pertandingan persahabatan.

---

## **Kesimpulan**

Membangun bibit atlet biliar memerlukan strategi menyeluruh yang mencakup
fasilitas, pelatihan, dukungan mental, dan eksposur kompetisi. Dengan 
mengikuti langkah-langkah ini, program ini tidak hanya dapat mencetak atlet 
yang kompetitif tetapi juga berkontribusi pada perkembangan olahraga biliar di tingkat 
nasional.

