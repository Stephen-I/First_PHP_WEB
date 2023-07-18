<?php require("views/partials/head.php") ?> 

<?php require("views/partials/nav.php") ?>

<?php require("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p><?= $parts["synopsis"] ?></p>
      <h2 class="font-bold py-3">Characters introduced</h2>
      <?php foreach ($part2Characters as $character) : ?>
        <li>
          <a href="/character?id=<?= $character["id"] ?>" class="text-blue-700 hover:underline">
            <?= $character["full_name"] ?>
          </a>
        </li>
      <?php endforeach; ?>  
    </div>
</main>

<?php require("views/partials/footer.php") ?>
