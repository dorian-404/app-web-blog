<?php require_once(realpath(__DIR__ . '/../partials/head.php')); ?>

   <?php require_once(realpath(__DIR__ . '/../partials/nav.php')); ?>

   <?php require_once(realpath(__DIR__ . '/../partials/banner.php')); ?>
   
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>
            <?= htmlspecialchars( $note['body']) ?>
        </p> 

        <form method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['noteId'] ?>"><br/>
            <button class="text-sm text-red-500">Delete a note</button>
        </form>

        <p>
            <a href="./notes" class="text-blue-500 hover:underline"> return </a>
        </p>  

    </div>
  </main>

  <?php require_once(realpath(__DIR__ . '/../partials/footer.php')); ?>