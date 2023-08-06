# API Profile Sederhana

## Instalasi dengan Docker

1. Clone repository ini
2. Masuk ke direktori repository
3. Buat file `.env` dengan isi:

```
DB_HOST=mysql
DB_PORT=3306
DB_NAME=profile-restful
DB_USER=root
DB_PASSWORD=root
```

4. Jalankan beberapa perintah berikut:

```
docker-compose up -d --build
docker-compose exec -it app php composer install
docker-compose exec -it app yii migrate
```

## Endpoints

```
GET /profiles
GET /profiles/{id}
POST /profiles
PATCH /profiles/{id}
DELETE /profiles/{id}
```
