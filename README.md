# Sistem Management Barang Nutech-Integrasi
## Build with Codeigniter 4 

1. Clone project pada lokal desktop menggunakan perintah 
`git clone https://github.com/adtyadev/nutech-integrasi`

2. Masuk kedalam folder nutech-integrasi 
`cd nutech-integrasi`

3. Selanjutnya jalankan composer update 
`composer update`

4. Bual file .env 
copy code berikut : 
`CI_ENVIRONMENT = development
database.default.hostname = localhost
database.default.database = nutech-integrasi
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi`

5. Create Database dengan nama " nutech-integrasi " 

6. environment Database => `hostname = localhost ; database = nutech-integrasi ; username = root ; password =  ; DBDriver = MySQLi`

7. jalankan migrate dan seed 
`php spark migrate` atau `php spark migrate:refresh` dan `php spark db:seed ProductSeeder`

8. run serve
`php spark serve`

9. Buka sistem pada url
`http://localhost:8080/product`


1. View : 
![alt text] (https://github.com/adtyadev/nutech-integrasi/blob/master/view.PNG)
2. Detail : 
![alt text] (https://github.com/adtyadev/nutech-integrasi/blob/master/detail.PNG)
3. Edit : 
![alt text] (https://github.com/adtyadev/nutech-integrasi/blob/master/edit.PNG)
4. Delete : 
![alt text] (https://github.com/adtyadev/nutech-integrasi/blob/master/delete.PNG)
