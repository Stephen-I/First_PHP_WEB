<?php require("partials/head.php") ?> 
  
<?php require("partials/nav.php") ?>

<?php require("partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <ul>
      <?php foreach ($reviews as $review) : ?>
        <li>
          <a href="/review?id=<?= $review["id"] ?>" class="text-blue-700 hover:underline">
            <?= htmlspecialchars($review["body"]) ?>
          </a>
        </li>
      <?php endforeach; ?> 
      </ul> 
      <p class="mt-6">
        <a href="/review/create" class="text-blue-700 hover:underline">Create Review</a>
      </p>
    </div>
</main>

<?php require("partials/footer.php") ?>
