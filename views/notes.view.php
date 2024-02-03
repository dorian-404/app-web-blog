<?php require("partials/head.php"); ?>

   <?php require("partials/nav.php"); ?>

   <?php require("partials/banner.php"); ?>
   
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>All Notes</p>
        <?php foreach ($notes as $note): ?>
            <li> 
                <a href="/note?id=<?=$note['noteId'] ?>" class="text-blue-500 hover:underline">
                <?= $note['body'] ?> 
                </a>
            </li>
        <?php endforeach; ?>    

    </div>
  </main>

  <?php require("partials/footer.php"); ?>