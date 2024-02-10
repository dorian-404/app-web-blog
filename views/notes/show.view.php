<?php require_once(realpath(__DIR__ . '/../partials/head.php')); ?>

   <?php require_once(realpath(__DIR__ . '/../partials/nav.php')); ?>

   <?php require_once(realpath(__DIR__ . '/../partials/banner.php')); ?>
   
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

  <?php require_once(realpath(__DIR__ . '/../partials/footer.php')); ?>