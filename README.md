# Sistem Management Barang Nutech-Integrasi
## Build with Codeigniter 4 

1. Clone project pada lokal desktop menggunakan perintah 
`git clone https://github.com/adtyadev/nutech-integrasi`

2. Selanjutnya jalankan composer update 
`composer update`

3. Create Database dengan nama " nutech-integrasi " 
database.default.hostname = localhost
database.default.database = nutech-integrasi
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi

4. jalankan migrate dan seed 
`php spark migrate` atau `php spark migrate:refresh` dan `php spark db:seed`

5. run serve
`php spark serve`
