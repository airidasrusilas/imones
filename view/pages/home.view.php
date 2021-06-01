<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body>
    <?php include "view/_partials/nav.view.php";?>

        <div class="container w-25">
            <h2 class="mt-5 text-center">Suraskite imone</h2>
            <form method="post" class="text-center mt-3">
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" name="search" placeholder="imones paieska">
                    <button type="submit" name="send" class="btn btn-primary">Ieskoti</button>
                </div>
            </form>
        </div>
    </body>
</html>