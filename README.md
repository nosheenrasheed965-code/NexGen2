# Laravel Git Learning Project

This is a small learning module for understanding Laravel folders and Git Commit, Push, and Pull.

## Add it to your existing Laravel project
1. Extract this ZIP.
2. Copy `app/Http/Controllers/GitTaskController.php` into the same path in your Laravel project.
3. Copy `resources/views/git-task.blade.php` into `resources/views/`.
4. Add these lines to your existing `routes/web.php` (do not replace the whole file):

```php
use App\\Http\\Controllers\\GitTaskController;

Route::get('/git-task', [GitTaskController::class, 'index']);
```

Do not add the `use` line twice if it already exists.
5. Run `php artisan serve` from your Laravel project directory.
6. Open the URL shown by Artisan and add `/git-task`, e.g. `http://127.0.0.1:8000/git-task`.

No database is required for this demo.

## Git practice
Run these in your actual project folder:
```bash
git status
git branch --show-current
git remote -v
git diff
```
Stage only intended files, then:
```bash
git add app/Http/Controllers/GitTaskController.php resources/views/git-task.blade.php README.md routes/web.php
git status
git commit -m "Add Laravel Git learning demo"
git push
```
Only stage files that exist and that you intend to upload. Follow your team's branch rules.

To practice pull, first ensure your working tree is safe, then have a teammate or GitHub add a harmless change and run `git pull` on the correct branch.

## Security
- Never commit `.env` if it contains passwords or secret keys.
- Check `git status` before staging.
- Do not blindly run `git add .`.
- `vendor/` and `node_modules/` are normally installed/generated dependencies, not manually edited source code.

## Meeting summary
Routes map URLs to actions, controllers handle requests and coordinate application logic, models work with data, and Blade views display the interface. Commit records staged changes locally, push sends commits to the remote repository, and pull fetches and integrates remote changes into the current branch.
