<?php require_once(realpath(__DIR__ . '/../partials/head.php')); ?>

   <?php require_once(realpath(__DIR__ . '/../partials/nav.php')); ?>

   <?php require_once(realpath(__DIR__ . '/../partials/banner.php')); ?>
   
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
       <ul>
       <?php foreach ($notes as $note): ?>
            <li> 
                <a href="./note?id=<?=$note['noteId'] ?>" class="text-blue-500 hover:underline">
                <?= htmlspecialchars($note['body']) ?> 
                </a>
            </li>
        <?php endforeach; ?>    
       </ul>

       <p class="mt-6">
        <a href="./notes/create-note" class="text-blue-500 hover:underline" >Create a Note</a>
       </p>

    </div>
  </main>

  <?php require_once(realpath(__DIR__ . '/../partials/footer.php')); ?>