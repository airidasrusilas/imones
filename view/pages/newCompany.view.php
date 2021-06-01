<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body>
    <?php include "view/_partials/nav.view.php";?>
    
    <h1 class="mt-5 text-center">Naujos imones pridejimas</h1>
        <div class="container w-25">
            <form method="post">
                <div class="form-group p-2">
                    <input type="text" name="name" class="form-control"  placeholder="Imonės pavadinimas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="code" class="form-control"  placeholder="Imones kodas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="pvm_code" class="form-control"  placeholder="Imones PVM kodas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="address" class="form-control"  placeholder="Imones adresas">
                </div>
                <div class="form-group p-2">
                    <input type="tel" name="phone" class="form-control"  placeholder="Imones tel. nr.">
                </div>
                <div class="form-group p-2">
                    <input type="email" name="email" class="form-control"  placeholder="Imones elpastas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="activity" class="form-control"  placeholder="Imones veikla">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="owner" class="form-control"  placeholder="Imones vadovas">
                </div>
                <div class="text-center">
                    <button type="submit" name="send" class="btn btn-secondary border border-white border border-2 mt-3">Prideti</button>
                </div>
            </form>
        </div>
    </body>
</html>