<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body>
        <?php include "view/_partials/nav.view.php";?>
        <div class="container w-100 text-justify">
        <h1 class="text-center"><?=$company['pavadinimas']?></h1>
            <div class="text-center">   
                <p>Kodas: <b><?=$company['kodas']?></b></p>
                <p>PVM kodas: <b><?=$company['pvm_kodas']?></b></p>
                <p>Adresas: <b><?=$company['adresas']?></b> </p>
                <p>Telefono nr.: <b><?=$company['telefonas']?></b> </p>
                <p>El. paštas: <b><?=$company['elpastas']?></b> </p>
                <p>Veikla: <b><?=$company['veikla']?></b> </p>
                <p>Vadovas: <b><?=$company['vadovas']?></b> </p>
            </div>
            <div class="text-center">
                <a href="/edit-company/<?=$company['id']?>" type="button" class="btn btn-success">Redaguoti</a>
                <a href="/delete-company/<?=$company['id']?>" type="button" class="btn btn-danger">Ištrinti</a>
            </div>
        </div>
    </body>
</html>