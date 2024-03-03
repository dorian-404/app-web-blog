<?php require_once(realpath(__DIR__ . '/../partials/head.php')); ?>

   <?php require_once(realpath(__DIR__ . '/../partials/nav.php')); ?>

   <?php require_once(realpath(__DIR__ . '/../partials/banner.php')); ?>
   
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>
            <?= htmlspecialchars( $note['body']) ?>
        </p> 

        <footer class="mt-6">
        <a href="/tuto-php/note/edit?id=<?= $note['noteId'] ?>" class="text-gray-500 border border-current px-4 py-2 rounded">Edit</a>
        </footer>

        <p>
            <a href="./notes" class="text-blue-500 hover:underline"> return </a>
        </p>  

    </div>
  </main>

  <?php require_once(realpath(__DIR__ . '/../partials/footer.php')); ?>