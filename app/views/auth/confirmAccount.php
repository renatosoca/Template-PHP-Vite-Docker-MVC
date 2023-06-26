<h1 class="text-center text-4xl font-bold font-Jakarta pb-10">Confirmación de cuenta</h1>

<?php include_once __DIR__.'/../templates/alerts.php'; ?>

<?php if ($isVerified): ?>
  <a href="/" class="mt-10 w-full bg-blue-600 py-2 px-5 text-center font-bold font-Jakarta rounded cursor-pointer hover:bg-blue-500 transition-colors duration-300 ease-in-out">
    Iniciar Sesión
  </a>
<?php endif; ?>