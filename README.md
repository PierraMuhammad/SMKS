#Sistem Manajemen Kendaraan Sekawan

design figma: https://www.figma.com/file/FKC8DrN8criaHC8TX3BwrC/Sekawan-Media?type=design&node-id=2%3A16&mode=design&t=NdkqR6YOqeD7IZwp-1

fitur:
+ autentikasi
+ menambahkan driver baru
+ menghapus driver
+ menambahkan kendaraan baru
+ menghapus kendaraan
+ membuat order baru
+ melakukan verifikasi dari pihak 1
+ melakukan verifikasi dari pihak 2
+ mengubah status driver setelah verifikasi pihak 2
+ mengubah status kendaraan setelah verifikasi pihak 2

database: myphpadmin (versi: 5.2.1)
php versi: 8.2.4
framework: laravel 10

akun yang tersedia:
1. username: adminSMKS@gmail.com<br>password: 12345
2. username: pusat.SMKS@gmail.com<br>password: 12345
3. username: cabang1.SMKS@gmail.com<br>password: 12345
4. username: kolaka.SMKS@gmail.com<br>password: 12345
5. username: vale.SMKS@gmail.com<br>password: 12345
6. username: morowali.SMKS@gmail.com<br>password: 12345
7. username: maba.SMKS@gmail.com<br>password: 12345
8. username: papua.SMKS@gmail.com<br>password: 12345
9. username: gag.SMKS@gmail.com<br>password: 12345

##panduan penggunaan website
1. Clone repo ini
2. composer Install
3. php artisan key:generate
4. buat database baru di phpmyadmin dengan nama smks
5. php artisan migrate atau gunakan sql di public 
6. gunakan username dan password yang tersedia
7. usahakan tambahkan kendaraan dan driver terlebih dahulu
8. buat order baru
9. gunakan akun tipe user (semua selain admin) untuk memverifikasi order


