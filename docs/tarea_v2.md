Guys, for this week's activity you have to extend the Laravel API project.

You already created the `universe` table and some API endpoints for universes. Now you must do the same for `character`.

The `character` table must include the following fields:

1. `id` - auto-increment primary key.
2. `name` - example: `Spider-Man`.
3. `real_name` - example: `Peter Benjamin Parker`.
4. `gender` - only two valid options: `male` or `female`.
5. `id_universe` - foreign key that references the universe id.
6. `new_column` - additional custom column.
7. `timestamps` - `created_at` and `updated_at`.

Everything must be written in English.

Professor's instructions:

Create an API for your Laravel project.

In this API, you must be able to complete all CRUD operations for the `universes` and `characters` tables. There are 5 operations in total:

1. Create
2. Read all records
3. Read one record
4. Update
5. Delete

Requirements:

1. Create the migration, model, controller methods, and routes for both `universes` and `characters`.
2. Make sure the `character` resource follows the same structure used for `universe`.
3. Test every endpoint in Postman.
4. Keep the API responses clear and consistent in JSON format.

