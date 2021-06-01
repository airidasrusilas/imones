<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body>
    <?php include "view/_partials/nav.view.php";?>
    
    <h1 class="mt-5 text-center">Imones redagavimas</h1>
        <div class="container w-25">
            <form method="post">
                <div class="form-group p-2">
                    <input type="text" name="name" class="form-control" value="<?=$company['pavadinimas']?>" placeholder="Imones pavadinimas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="code" class="form-control" value="<?=$company['kodas']?>" placeholder="Imones kodas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="pvm_code" class="form-control" value="<?=$company['pvm_kodas']?>" placeholder="Imones PVM kodas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="address" class="form-control" value="<?=$company['adresas']?>" placeholder="Imones adresas">
                </div>
                <div class="form-group p-2">
                    <input type="tel" name="phone" class="form-control" value="<?=$company['telefonas']?>" placeholder="Imones tel. nr.">
                </div>
                <div class="form-group p-2">
                    <input type="email" name="email" class="form-control" value="<?=$company['elpastas']?>" placeholder="Imones el. pastas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="activity" class="form-control" value="<?=$company['veikla']?>" placeholder="Imones veikla">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="owner" class="form-control" value="<?=$company['vadovas']?>" placeholder="Imones vadovas">
                </div>
                <div class="text-center">
                    <button type="submit" name="send" class="btn btn-primary">Redaguoti</button>
                </div>
            </form>
        </div>
    </body>
</html>