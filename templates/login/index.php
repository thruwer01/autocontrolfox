<div class="page page-center">
    <div class="container-tight py-4">
    <div class="text-center mb-4">
        <img src="/static/logo.svg" height="36" alt="">
    </div>
    <form class="card card-md" action="/functions/login.php" method="POST" autocomplete="off">
        <div class="card-body">
        <h2 class="card-title text-center mb-4">Войдите в аккаунт</h2>
        <div class="mb-3">
            <label class="form-label">Логин</label>
            <input type="text" class="form-control" name="login" placeholder="Login">
        </div>
        <div class="mb-2">
            <label class="form-label">
                Пароль
            </label>
            <div class="input-group input-group-flat">
                <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
            </div>
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">Войти</button>
        </div>
        </div>
    </form>
    </div>
</div>