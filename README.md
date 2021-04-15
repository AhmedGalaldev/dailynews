# How to run this app

```bash
git clone https://github.com/AhmedGalaldev/dailynews.git
```
## create .env file in root directory and copy the content of .env.example in .env

## create database and add the configration of database to .env file
## DB_DATABASE=database name
## DB_USERNAME=username
## DB_PASSWORD=password


```bash
php artisan key:generate
```
```bash
php artisan migrate:fresh --seed
```
```bash
php artisan serve
```
## then add url and add agency_id to url (1,2,3)
## without sorting 
http://127.0.0.1:8000/agencies/1/dailynews
## sort asc datetime
http://127.0.0.1:8000/agencies/1/dailynews?datetime=asc 
## sort desc datetime
http://127.0.0.1:8000/agencies/1/dailynews?datetime=desc
## sort asc rating
http://127.0.0.1:8000/agencies/1/dailynews?rating=asc 
## sort desc rating
http://127.0.0.1:8000/agencies/1/dailynews?rating=desc
