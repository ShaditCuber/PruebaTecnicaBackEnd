# 🚀 Backend Prueba Técnica

Prueba Técnica de Backend en laravel, para puesto de programador inicial.


## 📋 Requisitos

Antes de comenzar, asegúrate de tener instalado:

- PHP >= 8.1.25
- Composer
- MySQL o PostgreSQL

## 🛠️ Instalación

Sigue estos pasos para configurar el proyecto en tu entorno local.
### 1️⃣ Clonar el Repositorio

Primero, clona el repositorio a tu máquina local:

```bash
git clone https://github.com/ShaditCuber/PruebaTecnicaBackEnd
cd PruebaTecnicaBackEnd
```

### 2️⃣ Configurar el Entorno

Edita el archivo .env con tus configuraciones preferidas. Es importante cambiar los valores de *db_connection*, *db_port*,*database*, *username*, y *password*  a tus credenciales reales para asegurar una conexión exitosa con tu base de datos:

```
DB_CONNECTION=pgsql o mysql
DB_HOST=127.0.0.1  
DB_PORT=puerto_base_de_datos  
DB_DATABASE=tu_base_de_datos  
DB_USERNAME=tu_usuario  
DB_PASSWORD=tu_contraseña  
```

### 3️⃣ Instalar Dependencias

Instala todas las dependencias necesarias del proyecto ejecutando:


```bash
composer install
```


### 4️⃣ Ejecutar Migraciones y Seeders

Crea las tablas en tu base de datos y llenalas con datos de prueba:

```bash
php artisan migrate --seed
```


### 5️⃣ Ejecutar comando para iniciar server

Finalmente, inicia el servidor de desarrollo:


```bash
php artisan serve
```

Ahora, puedes visitar http://localhost:8000 en tu navegador para ver la API en acción.