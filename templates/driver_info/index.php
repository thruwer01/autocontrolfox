<?php 

include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/db.php';

$number = $_GET['number'];

$get_driver = $db->query("SELECT * FROM `drivers` WHERE `number` = '$number'");

//create log
$today = date("Y-m-d H:i:s");
$db->query("INSERT INTO `log` SET `number` = '$number', `datetime` = '$today'");

if ($get_driver->num_rows == 0) {
    echo $msg = "Водитель не найден!";
} else {
    $driver_info = $get_driver->fetch_assoc();
}
$resolution = $driver_info['resolution'] == 1 ? true : false;

if ($resolution) {
    $resolution_title = 'Имеется';
    $resolution_color = 'text-green';
} else {
    $resolution_title = 'Отсутствует';
    $resolution_color = 'text-red';

}

?>

<div class="page page-center">
    <div class="container-xl py-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <p>Фамилия: <b><?=$driver_info['surname']?></b></p>
                        <p>Имя: <b><?=$driver_info['name']?></b></p>
                        <p>Отчество: <b><?=$driver_info['thirdname']?></b></p>
                    </div>
                    <div class="col-sm-4">
                        <p>Номер телефона: <b><?=$driver_info['phone_number']?></b></p>
                        <p>Номер автомобиля: <b><?=$driver_info['number']?></b></p>
                    </div>
                    <div class="col-sm-4">
                        <p>Разрешение на въезд: <b class="<?=$resolution_color?>"><?=$resolution_title?></b></p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="form-footer">
                    <a href="/check_qr" class="btn btn-primary w-100">Ок</a>
                </div>
            </div>
        </div>
    </div>
</div>


