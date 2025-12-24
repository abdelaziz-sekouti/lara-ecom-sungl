# AGENTS.md

## Build/Lint/Test Commands
- `composer test` - Run all tests
- `php artisan test --filter TestName` - Run single test
- `composer dev` - Start development server with hot reload
- `npm run build` - Build production assets
- `npm run dev` - Start Vite dev server
- `./vendor/bin/pint` - Run Laravel Pint formatter

## Code Style Guidelines
- **PHP**: Follow PSR-12 coding standards, use Laravel Pint for formatting
- **JavaScript/TypeScript**: Use ES modules, follow Vite conventions
- **CSS**: Use Tailwind CSS v4 utility classes
- **Formatting**: 4 spaces indentation, LF line endings, trim trailing whitespace
- **Imports**: PSR-4 autoloading (App\, Database\, Tests\ namespaces)
- **Naming**: Laravel conventions - PascalCase for classes, camelCase for methods, snake_case for database columns
- **Error Handling**: Use Laravel's exception handling and validation
- **Testing**: Use PHPUnit with Feature/Unit test suites, testing database uses SQLite in-memory