<?php require base_path("views/partials/head.php") ?> 

<?php require base_path("views/partials/nav.php") ?>

<?php require base_path("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p><?= $parts["synopsis"] ?></p>
      <h2 class="font-bold py-3">Characters introduced</h2>
      <?php foreach ($part1Characters as $character) : ?>
        <li>
          <a href="/character?id=<?= $character["id"] ?>" class="text-blue-700 hover:underline">
            <?= $character["full_name"] ?>
          </a>
        </li>
      <?php endforeach; ?>  
    </div>

    <img src="" class="img-fluid" alt="...">
</main>

<?php require base_path("views/partials/footer.php") ?>
