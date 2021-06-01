<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body>
    <?php include "view/_partials/nav.view.php";?>
    <h1 class="mt-4 mb-2 text-center">Visos imones</h1>
    <div class="container w-25 mb-2">
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr class="bg-success text-white">
                    <th scope="col">Pavadinimas</th>
                    <th scope="col">Adresas</th>
                    <th scope="col">El. Pastas</th>
                </tr>
            </thead>
            <tbody>
            <?php  foreach($companies->allCompanies($page) as $company): ?>
                <tr>
                    <th scope="row"><a href="/imone/<?=$company['id']?>"><?=$company['pavadinimas']?></a></th>
                    <td><?=$company['adresas']?></td>
                    <td><?=$company['elpastas']?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
        <nav class="mt-3">
            <ul class="pagination justify-content-center">
            <?php if($page != 1): ?>
                <li class="page-item"><a class="page-link" href="/all/<?=$page-1?>">Atgal</a></li>
            <?php endif ?>
                <li class="page-item"><a type="button" class="page-link" href="/all/<?=$page+1?>">Toliau</a></li></button>
            </ul>
        </nav>
    </body>
</html>