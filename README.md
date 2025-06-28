🎮 NEXUS - Gaming Platform
Una plataforma completa de videojuegos desarrollada con Laravel que incluye tienda, foro, sistema de reseñas y gestión de usuarios.
🚀 Características

🛒 Tienda de videojuegos con carrito de compras
👥 Sistema de usuarios (Admin/Usuario)
💬 Foro comunitario por juegos
⭐ Sistema de reseñas y valoraciones
📚 Biblioteca personal de juegos
🎯 Panel de administración completo
💳 Múltiples métodos de pago (Tarjeta/Yape)

📋 Requisitos Previos
Antes de instalar, asegúrate de tener:

PHP >= 8.1
Composer
Node.js & npm
Base de datos (MySQL/SQLite)
Git

🛠️ Instalación
1. Clonar el repositorio
bashgit clone https://github.com/tu-usuario/nexus.git
cd nexus
2. Instalar dependencias de PHP
bashcomposer install
3. Instalar dependencias de Node.js
bashnpm install
4. Configurar el archivo de entorno
bash# Copiar el archivo de ejemplo
cp .env.example .env

# Generar la clave de aplicación
php artisan key:generate
5. Configurar la base de datos

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nexus
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

6. Ejecutar migraciones y seeders
bash# Ejecutar migraciones
php artisan migrate

# Ejecutar seeders (datos de prueba)
php artisan db:seed
8. Crear enlace simbólico para archivos públicos
bashphp artisan storage:link
9. Compilar assets
bash

# Para desarrollo
npm run dev

# Para producción
npm run build
10. Iniciar el servidor de desarrollo
bashphp artisan serve
¡Listo! La aplicación estará disponible en http://localhost:8000
👤 Usuarios de Prueba
El seeder crea automáticamente estos usuarios:
Administrador

Email: admin@nexus.com
Contraseña: admin123
Rol: Admin

Usuarios Normales

Email: juan@gmail.com | Contraseña: password123
Email: maria@gmail.com | Contraseña: password123
Email: carlos@gmail.com | Contraseña: password123

🗂️ Estructura del Proyecto
nexus/
├── app/
│   ├── Http/Controllers/
│   │   ├── Auth/              # Controladores de autenticación
│   │   ├── AdminDashboardController.php
│   │   └── UserDashboardController.php
│   ├── Models/                # Modelos Eloquent
│   └── Http/Middleware/       # Middlewares personalizados
├── database/
│   ├── migrations/            # Migraciones de BD
│   └── seeders/              # Datos de prueba
├── resources/
│   ├── views/                # Vistas Blade
│   └── css/                  # Estilos personalizados
└── routes/
    ├── web.php               # Rutas web
    └── auth.php              # Rutas de autenticación
🎯 Funcionalidades Implementadas
✅ Sistema de Autenticación

 Login/Registro con Laravel Breeze
 Redirección automática por roles
 Middleware de protección de rutas

✅ Gestión de Usuarios

 Roles: Admin y Usuario
 Campos adicionales: bio, imagen de perfil
 Dashboards separados por rol

✅ Base de Datos

 Migraciones completas
 Modelos con relaciones
 Seeders con datos de prueba

🔄 En Desarrollo

 Tienda y carrito de compras
 Sistema de foro
 Gestión de reseñas
 Panel de administración completo
 Procesamiento de pagos

🎮 Datos de Prueba
El proyecto incluye seeders que crean:

5 categorías de juegos (Acción, Aventura, Supervivencia, Terror, Estrategia)
10 juegos populares con información completa
4 usuarios (1 admin + 3 usuarios normales)

🚨 Comandos Útiles
bash# Limpiar caché
php artisan cache:clear
php artisan config:clear
php artisan route:clear

# Refrescar base de datos
php artisan migrate:fresh --seed

# Ver rutas disponibles
php artisan route:list

# Generar nueva clave de aplicación
php artisan key:generate
🎨 Personalización
Cambiar imágenes de login/registro

Coloca tu imagen en public/storage/
Actualiza la ruta en public/css/login.css y public/css/register.css:

cssbackground: url('/storage/tu-imagen.jpg');
Modificar colores del tema
Los archivos CSS principales están en:

public/css/login.css - Estilos de login
public/css/register.css - Estilos de registro
public/css/welcome.css - Página de inicio

🐛 Solución de Problemas Comunes
Error: "Route [login] not defined"
bashphp artisan route:clear
php artisan config:clear
Error de permisos en storage/
bashchmod -R 775 storage/
chmod -R 775 bootstrap/cache/
Error de base de datos

Verifica la configuración en .env
Ejecuta php artisan migrate:fresh --seed

Assets no se cargan
bashnpm run dev
php artisan storage:link
🤝 Contribuir

Fork el proyecto
Crea una rama para tu feature (git checkout -b feature/nueva-funcionalidad)
Commit tus cambios (git commit -am 'Agregar nueva funcionalidad')
Push a la rama (git push origin feature/nueva-funcionalidad)
Abre un Pull Request

📞 Soporte
Si tienes problemas durante la instalación:

Revisa los logs: storage/logs/laravel.log
Verifica la configuración: .env
Limpia caché: php artisan optimize:clear

🏗️ Próximos Pasos

 Implementar carrito de compras
 Sistema de pagos con Yape
 Foro interactivo
 Subida de imágenes
 API REST
 Notificaciones en tiempo real


Desarrollado con ❤️ usando Laravel 11
¡Happy Gaming! 🎮