<div class="page page-center">
    <div class="container-tight py-4">
        <form class="card card-md" autocomplete="off" method="POST" action="/api/driver/add/">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Добавить водителя</h2>
                <?php 
                    if ($_SESSION['msg']) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-title">Успешно!</h4>
                        <div class="text-muted"><?=$_SESSION['msg']?></div>
                    </div>
                <?php 
                    unset($_SESSION['msg']);
                    }
                ?>
                <div class="mb-3">
                    <label class="form-label">Имя</label>
                    <input type="text" class="form-control" name="name" placeholder="Имя" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Фамилия</label>
                    <input type="text" class="form-control" name="surname" placeholder="Фамилия" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Отчество</label>
                    <input type="text" class="form-control" name="thirdname" placeholder="Отчество" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Номер авто</label>
                    <input type="text" class="form-control" name="number" placeholder="A000AA" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Номер телефона</label>
                    <input type="text" class="form-control" name="phone_number" placeholder="+7 999 999 99 99" required>
                </div>
                <div class="mb-3">
                    <label class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" checked="true" name="resolution">
                        <span class="form-check-label form-label">Разрешение на въезд</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Добавить</button>
                </div>
            </div>
        </form>
    </div>
</div>