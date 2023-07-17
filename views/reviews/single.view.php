<?php require("views/partials/head.php") ?> 
  
<?php require("views/partials/nav.php") ?>

<?php require("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p>
        <a href="/reviews" class="text-blue-700 hover:underline">Go Back...</a>
      </p>
      <p class="py-3">
        <?= htmlspecialchars($review["body"]) ?>
      </p>
    </div>
</main>

<?php require("views/partials/footer.php") ?>
