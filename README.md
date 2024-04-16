
# Galería de Imágenes CRUD

Este proyecto es un pequeño CRUD (Crear, Leer, Actualizar, Eliminar) para una galería de imágenes. Permite a los usuarios realizar las siguientes acciones:

- Crear nuevas imágenes.
- Ver detalles de las imágenes existentes.
- Actualizar la información de las imágenes.
- Eliminar imágenes.

## Tecnologías Utilizadas

- Laravel: Framework de desarrollo web utilizado para el backend del proyecto.
- PHP: Lenguaje de programación utilizado en el desarrollo del backend.
- SQLite: Sistema de gestión de bases de datos utilizado para almacenar la información de las imágenes.
- HTML/CSS: Lenguajes de marcado y estilos utilizados en las vistas.
- Bootstrap: Framework de CSS utilizado para el diseño y la interfaz de usuario.

## Instalación

1. Clona este repositorio en tu máquina local:

   ```bash
   git clone <URL_del_repositorio>
   ```

2. Accede al directorio del proyecto:

   ```bash
   cd galeria-de-imagenes-crud
   ```

3. Instala las dependencias del proyecto utilizando Composer:

   ```bash
   composer install
   ```

4. Copia el archivo de entorno de ejemplo y configura tus variables de entorno:

   ```bash
   cp .env.example .env
   ```

   Asegúrate de configurar la conexión a tu base de datos en el archivo `.env`.

5. Genera una nueva clave de aplicación:

   ```bash
   php artisan key:generate
   ```

6. Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

   ```bash
   php artisan migrate
   ```

7. Inicia el servidor de desarrollo:

   ```bash
   php artisan serve
   ```

   Ahora puedes acceder a la aplicación en tu navegador en la dirección [http://localhost:8000](http://localhost:8000).


## Contribución

Si encuentras algún problema o tienes alguna sugerencia de mejora, no dudes en abrir un issue en este repositorio. También puedes contribuir al proyecto creando pull requests.

## Licencia

Este proyecto está bajo la [Licencia MIT](LICENSE).

---

Asegúrate de ajustar la información y los pasos de instalación según las necesidades específicas de tu proyecto. Además, incluye cualquier otra información relevante que creas que los usuarios necesitarán para comprender y utilizar tu aplicación.