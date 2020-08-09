# Sistem Management Barang Nutech-Integrasi
## Build with Codeigniter 4 

1. Clone project pada lokal desktop menggunakan perintah 
`git clone https://github.com/adtyadev/nutech-integrasi`

2. Masuk kedalam folder nutech-integrasi 
`cd nutech-integrasi`

3. Selanjutnya jalankan composer update 
`composer update`

4. Create Database dengan nama " nutech-integrasi " 

5. environment Database => `hostname = localhost ; database = nutech-integrasi ; username = root ; password =  ; DBDriver = MySQLi`

6. jalankan migrate dan seed 
`php spark migrate` atau `php spark migrate:refresh` dan `php spark db:seed`

7. run serve
`php spark serve`

8. Buka sistem pada url
`http://localhost:8080/product`
