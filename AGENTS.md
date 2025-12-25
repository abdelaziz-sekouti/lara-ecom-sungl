# AGENTS.md

## Build/Lint/Test Commands
- `composer test` - Run all tests
- `php artisan test --filter TestName` - Run single test
- `php artisan test --testsuite Feature` - Run only feature tests
- `php artisan test --testsuite Unit` - Run only unit tests
- `composer dev` - Start development server with hot reload (includes queue, logs, vite)
- `npm run build` - Build production assets
- `npm run dev` - Start Vite dev server
- `./vendor/bin/pint` - Run Laravel Pint formatter
- `php artisan migrate:fresh --seed` - Reset database with fresh seeders
- `php artisan serve` - Start Laravel development server only
- `php artisan queue:work` - Start queue worker
- `php artisan pail` - Show real-time logs

## Project Structure
This is a Laravel 12 e-commerce application for sunglasses with Filament admin panel.

## Code Style Guidelines

### PHP
- **Standard**: Follow PSR-12 coding standards
- **Formatter**: Use Laravel Pint (`./vendor/bin/pint`)
- **Indentation**: 4 spaces, LF line endings, trim trailing whitespace
- **Namespaces**: PSR-4 autoloading (App\, Database\, Tests\)
- **Class Names**: PascalCase (e.g., `SunglassController`, `OrderService`)
- **Method Names**: camelCase (e.g., `getActiveProducts`, `calculateTotal`)
- **Variable Names**: camelCase (e.g., `$userEmail`, `$orderItems`)
- **Database Columns**: snake_case (e.g., `created_at`, `order_id`)
- **Constants**: UPPER_SNAKE_CASE (e.g., `DEFAULT_PRICE`, `MAX_STOCK`)

### Laravel-Specific Patterns
- **Controllers**: Extend `App\Http\Controllers\Controller`, use `ValidatesRequests` and `AuthorizesRequests` traits
- **Models**: Use `$fillable` for mass assignment, `$casts` for type conversion, define relationships with proper return types
- **Migrations**: Use descriptive table/column names, include proper indexes and foreign keys
- **Validation**: Use Laravel's built-in validation rules in form requests or controller methods
- **Error Handling**: Use Laravel's exception handling, return appropriate HTTP status codes
- **Middleware**: Register in `app/Http/Kernel.php`, use for authentication, CORS, etc.

### Database
- **Connection**: SQLite for development/testing (.env shows `DB_CONNECTION=sqlite`)
- **Testing**: Uses SQLite in-memory database
- **Migrations**: Use descriptive names with timestamps
- **Seeders**: Use for development data, keep production data separate

### Frontend
- **CSS Framework**: Tailwind CSS v4 utility classes
- **JavaScript**: ES modules, use Alpine.js for interactivity
- **Build Tool**: Vite with Laravel Vite plugin
- **Asset Pipeline**: Resources in `resources/`, built to `public/build/`

### Testing
- **Framework**: PHPUnit with Feature/Unit test suites
- **Database**: SQLite in-memory for testing
- **Test Naming**: PascalCase with "Test" suffix (e.g., `SunglassTest`, `OrderControllerTest`)
- **Test Methods**: camelCase with descriptive names (e.g., `testCanCreateOrder`, `testUserCanViewProfile`)
- **Assertions**: Use Laravel's provided assertions (`assertDatabaseHas`, `assertAuthenticated`, etc.)

### Imports & Dependencies
- **PHP**: Order imports alphabetically, group class imports separately from function imports
- **JavaScript**: Use ES6 import/export syntax
- **Composer**: Use `composer require` for new packages
- **NPM**: Use `npm install` for frontend dependencies

### Security
- **Authentication**: Use Laravel's built-in auth system
- **Authorization**: Implement policies and gates for access control
- **Input Validation**: Always validate user input
- **SQL Injection**: Use Eloquent ORM or parameterized queries
- **XSS Protection**: Use Laravel's built-in XSS protection in Blade templates

### Environment
- **Config**: Use `.env` for environment-specific settings
- **Debug**: Set `APP_DEBUG=false` in production
- **Logging**: Use Laravel's logging system, configured in `config/logging.php`
- **Cache**: Use database cache store for development

### Development Workflow
1. Run `composer dev` to start all services (server, queue, logs, vite)
2. Use `./vendor/bin/pint` to format code before committing
3. Run `composer test` to ensure all tests pass
4. Check real-time logs with `php artisan pail`
5. Use migrations for database changes, never modify production database directly

### Package Management
- **PHP Packages**: Add to `composer.json`, run `composer install`
- **JS Packages**: Add to `package.json`, run `npm install`
- **Service Providers**: Register in `config/app.php` if needed
- **Publishing**: Use `php artisan vendor:publish` for package assets

### Error Handling & Exceptions
- **HTTP Responses**: Use appropriate status codes (200, 201, 400, 401, 403, 404, 422, 500)
- **Validation Errors**: Return 422 with detailed error messages
- **Exception Handling**: Create custom exception classes when needed
- **Logging**: Use Laravel's Log facade with appropriate levels (debug, info, warning, error)
- **API Errors**: Consistent JSON error format with `message` and optional `errors` fields

### Type Safety & Documentation
- **PHP 8.2+**: Use strict types declaration (`declare(strict_types=1)`)
- **Return Types**: Always declare return types for methods
- **Property Types**: Use typed properties for class members
- **DocBlocks**: Use PHPDoc for complex logic, API endpoints, and public methods
- **Enums**: Use PHP enums for fixed sets of values (status, types, etc.)

### Performance & Optimization
- **Eager Loading**: Use `with()` to prevent N+1 queries
- **Query Optimization**: Use indexes, limit results, and avoid complex subqueries
- **Caching**: Implement caching for expensive operations and frequently accessed data
- **Asset Optimization**: Minify CSS/JS, use Vite's production builds
- **Database**: Use proper indexing and optimize migrations

### Authentication & Authorization
- **Gates**: Define authorization gates in `AuthServiceProvider`
- **Policies**: Create policy classes for model-specific permissions
- **Middleware**: Use Laravel's auth middleware (`auth`, `guest`, `verified`)
- **Role Management**: Implement role-based access control for admin features

## Common Patterns
- **Form Requests**: Create dedicated request classes for validation
- **Resource Controllers**: Follow RESTful conventions (index, create, store, show, edit, update, destroy)
- **API Responses**: Use consistent JSON response format
- **Blade Templates**: Use layouts and components for reusability
- **Events & Listeners**: Use for decoupling application logic
- **Jobs**: Use for background processing and queue operations
- **Repositories**: Implement repository pattern for complex data access logic
- **Services**: Create service classes for business logic separation