# Laravel-Vue-Docker

Este proyecto combina **Laravel** y **Vue** en un entorno de contenedores con **Docker** para facilitar la configuración y despliegue en local. A continuación, encontrarás los pasos necesarios para ponerlo en marcha.

## Requisitos previos

* Docker instalado
* Docker Compose instalado
* (Opcional) Git para clonar este repositorio

## Instrucciones de instalación

1. **Clonar el repositorio :**

```bash
git clone [https://github.com/tu-usuario/laravel-vue-docker.git](https://github.com/jetezz/Laravel-vue-docker.git)
cd laravel-vue-docker
```

2. **Crear/copiar el archivo `.env`:**
   
   Copia el archivo de ejemplo `.env.example` a `.env` y ajusta las variables según tus necesidades, como la configuración de la base de datos, la clave de la aplicación, entre otros.

3. **Subir los contenedores con Docker Compose:**

```bash
docker-compose up -d
```

* Esto levantará los contenedores definidos en el archivo `docker-compose.yml` en segundo plano.
* Si quieres reconstruir los contenedores desde cero (por ejemplo, si cambiaste la configuración), utiliza:

```bash
docker-compose down && docker-compose up -d
```

4. **Ejecutar migraciones de la base de datos (dentro del contenedor `app`):**

```bash
docker-compose exec app php artisan migrate
```

* Esto creará las tablas necesarias en la base de datos definida en tu archivo `.env`.

5. **Acceder a la aplicación:**
   * Abre tu navegador en http://localhost:80
   * Si usas un puerto diferente al 80 (por ejemplo, definido en tu archivo `docker-compose.yml`), ajusta la URL en consecuencia.

## Uso y comandos útiles

### Ver logs de un contenedor en tiempo real

Para ver los logs del contenedor `app`:

```bash
docker-compose logs -f app
```

### Acceder a la consola de Laravel (Tinker)

```bash
docker-compose exec app php artisan tinker
```

### Gestión de dependencias (no debe de ser necesario)

**Laravel (Composer):**
```bash
docker-compose exec app composer install
```

