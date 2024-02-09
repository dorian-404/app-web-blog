<?php require("views/partials/head.php"); ?>

   <?php require("views/partials/nav.php"); ?>

   <?php require("views/partials/banner.php"); ?>
   
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>
            <?= $note['body'] ?>
        </p> 
        <p>
            <a href="./notes" class="text-blue-500 hover:underline"> return </a>
        </p>  

    </div>
  </main>

  <?php require("views/partials/footer.php"); ?>