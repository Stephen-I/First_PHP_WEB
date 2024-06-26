<?php require base_path("views/partials/head.php") ?> 
  
<?php require base_path("views/partials/nav.php") ?>

<?php require base_path("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="py-1">
      Full name: <?= $character["full_name"] ?>
      </p>
      <p class="py-1">
      Age: <?= $character["age"] ?>
      </p>
      <p class="py-1">
      Gender: <?= $character["gender"] ?>
      </p>
      <p class="py-1">
      Species: <?= $character["species"] ?>
      </p>
      <p class="py-1">
      Unique_skill: <?= $character["unique_skill"] ?>
      </p>
      <p class="py-1">
      Incarnate_drive: <?= $character["incarnate_drive"] ?>
      </p>
      <p class="py-1">
      Extra: <?= $character["extra"] ?>
      </p>
      <p class="py-1">
      Origin of Ability: <?= $character["Origin_of_ability"] ?>
      </p>
      <p class="py-3">
      <?= $character["backstory"] ?>
      </p>
      <p class="py-3">
        <a href="/characters" class="text-blue-700 hover:underline">Go Back...</a>
      </p>
    </div>
</main>

<?php require base_path("views/partials/footer.php") ?>
