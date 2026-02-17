# Todo API (Junior PHP Developer Test Task)

Простой REST API для управления задачами (To-Do List) на Laravel.

##  Технологии

- PHP 8.4+
- Laravel 12
- MySQL

---

##  Установка

1. Клонируйте репозиторий:
`bash
git clone https://github.com/shavkat-1/todo-api.git
cd todo-api

2. Установите зависимости:

composer install


3. Настройка .env:
- Скопируйте пример файла:

## Настройка окружения 
cp .env.example .env
php artisan key:generate

Отредактируйте .env под вашу БД

DB_CONNECTION=mysql
DB_HOST=127.127.126.6
DB_PORT=3306
DB_DATABASE=todo
DB_USERNAME=root
DB_PASSWORD=

4. Примените миграции 
php artisan migrate

5. Запустить сервер

php artisan serve

API будет доступно по адресу: http://127.0.0.1:8000

 ## Эндпоинты API
- Базовый URL: http://127.0.0.1:8000/api
- GET/tasksПолучить список всех задач
- POST/tasksСоздать новую задачу
- GET/tasks/{id}Получить задачу по ID
- PUT/tasks/{id}Обновить задачу по ID
- DELETE/tasks/{id}Удалить задачу по ID

