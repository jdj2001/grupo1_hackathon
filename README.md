# Sistema de Telemedicina Rural

Plataforma web que permite el registro, monitoreo y atención médica remota en zonas rurales con acceso limitado a infraestructura.

## Funcionalidades Principales

- Registro de pacientes.
- Fichas preclínicas (signos vitales, peso, presión, etc.).
- Almacenamiento de archivos multimedia (fotos médicas, exámenes).
- Video consultas médicas (registro de consultas).
- Gestión de alertas médicas por signos vitales.

## Roles Soportados

- **Promotor de Salud**: registra pacientes, fichas y alertas.
- **Médico**: analiza fichas, evalúa multimedia, agenda consultas.
- **Administrador**: gestiona usuarios y reportes del sistema.

## Requisitos Técnicos

- PHP 8.2+
- Laravel 12.x
- MySQL 8+
- Node.js + Vite (frontend build)
- Apache/Nginx (local o servidor)

## Instalación

```bash
git clone https://github.com/usuario/repo.git
cd proyecto
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
npm install && npm run dev
php artisan serve
