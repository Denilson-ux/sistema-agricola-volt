# 🌾 Sistema Agrícola con Volt Dashboard

## 🚀 Instalación (5 minutos)

### 📝 Requisitos
- PHP 8.1+
- Composer
- MySQL
- Node.js & NPM

### 📦 Paso 1: Clonar el repositorio

```bash
cd C:\xampp\htdocs
git clone https://github.com/Denilson-ux/sistema-agricola-volt.git
cd sistema-agricola-volt
```

### ⚙️ Paso 2: Instalar dependencias PHP

```bash
composer install
```

### 🔑 Paso 3: Configurar entorno

```bash
# Copiar archivo de configuración
cp .env.example .env

# Generar clave de aplicación
php artisan key:generate
```

### 📦 Paso 4: Configurar base de datos

1. **Crear base de datos** en phpMyAdmin o MySQL:

```sql
CREATE DATABASE sistema_agricola_volt CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

2. **Editar `.env`** con tus credenciales:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sistema_agricola_volt
DB_USERNAME=root
DB_PASSWORD=tu_password
```

### 🔨 Paso 5: Configurar autenticación

```bash
# Instalar Laravel UI
composer require laravel/ui

# Generar scaffolding de autenticación (responde 'yes' si pregunta sobrescribir)
php artisan ui bootstrap --auth
```

### 💾 Paso 6: Migrar base de datos

```bash
php artisan migrate
```

### 🎨 Paso 7: Compilar assets

```bash
# Instalar dependencias NPM
npm install

# Compilar assets para producción
npm run build
```

### 🚀 Paso 8: Iniciar servidor

```bash
php artisan serve
```

### 🎉 Paso 9: Acceder al sistema

Abre tu navegador en:

- **URL**: http://127.0.0.1:8000
- **Registro**: http://127.0.0.1:8000/register
- **Login**: http://127.0.0.1:8000/login

---

## ✨ Características

### 🔐 Autenticación Completa
- ✅ Login profesional con diseño Volt
- ✅ Registro de usuarios
- ✅ Recuperación de contraseña
- ✅ Sesión segura
- ✅ Logout funcional

### 📊 Dashboard
- ✅ Sidebar verde agrícola responsive
- ✅ 4 Cards de estadísticas (Empleados, Parcelas, Trabajos, Anticipos)
- ✅ Tabla de trabajos recientes
- ✅ Panel de acciones rápidas
- ✅ Topbar con menú de usuario
- ✅ Menús desplegables en sidebar

### 🎨 Diseño
- ✅ Tema Volt Bootstrap 5
- ✅ Color verde agrícola (#28a745)
- ✅ Iconos SVG modernos
- ✅ Responsive (móvil, tablet, desktop)
- ✅ Animaciones suaves

---

## 📝 Módulos del Sistema

### 1. 👥 Empleados
- Lista de empleados
- Registro de nuevo empleado

### 2. 🏗️ Parcelas
- Lista de parcelas
- Registro de nueva parcela

### 3. 📅 Trabajos
- Lista de trabajos
- Registro de trabajo realizado

### 4. 💵 Anticipos
- Gestión de anticipos
- Control de pagos

---

## 🛠️ Comandos Útiles

### Durante desarrollo (Hot Reload)
```bash
npm run dev
```

### Limpiar cachés
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### Para producción
```bash
npm run build
php artisan optimize
```

---

## 🐛 Solución de Problemas

### Error: "Target class [HomeController] does not exist"
```bash
composer dump-autoload
php artisan cache:clear
```

### Error: "Vite manifest not found"
```bash
npm install
npm run build
```

### CSS no se aplica
```bash
php artisan view:clear
ctrl + shift + R  # Refrescar navegador sin caché
```

---

## 📁 Estructura del Proyecto

```
sistema-agricola-volt/
├── app/
│   └── Http/Controllers/
│       └── HomeController.php
├── resources/
│   └── views/
│       ├── auth/
│       │   ├── login.blade.php
│       │   └── register.blade.php
│       ├── layouts/
│       │   └── volt.blade.php
│       └── home.blade.php
├── routes/
│   └── web.php
└── .env.example
```

---

## 🚀 Próximos Pasos

1. **Crear modelos y migraciones**
   ```bash
   php artisan make:model Empleado -m
   php artisan make:model Parcela -m
   php artisan make:model Trabajo -m
   php artisan make:model Anticipo -m
   ```

2. **Crear controladores CRUD**
   ```bash
   php artisan make:controller EmpleadoController --resource
   php artisan make:controller ParcelaController --resource
   php artisan make:controller TrabajoController --resource
   php artisan make:controller AnticipoController --resource
   ```

3. **Implementar vistas CRUD** para cada módulo

---

## 📚 Recursos

- **Volt Dashboard**: https://demo.themesberg.com/volt/
- **Laravel Docs**: https://laravel.com/docs
- **Bootstrap 5**: https://getbootstrap.com/docs/5.3/

---

¡Disfruta tu nuevo Sistema Agrícola con Volt Dashboard! 🌾✨