<h1 class="text-center text-4xl font-bold font-Jakarta pb-4">Reestablecer contraseña</h1>
<p class="text-center font-medium">Coloca tu nueva contraseña a continuación</p>

<div class="flex flex-col gap-2 max-w-lg w-full mx-auto pt-6">
  <?php 
    include_once __DIR__.'/../templates/alerts.php';
    if ($error) return;
  ?>
</div>

<form   
  class="max-w-lg w-full mx-auto rounded-md flex flex-col gap-3 py-10"
  method="POST"
>
  <div class="campo">
    <label for="password" class="text-base">Contraseña</label>
    <input
      class="w-full py-2 px-3 rounded-md text-black font-medium outline-none"
      type="password"
      id="password"
      name="reset[password]"
      placeholder="Ingresa tu nueva contraseña"
    />
  </div>

  <button 
    type="submit" 
    class="py-2 px-10 rounded-md w-full bg-blue-800 mt-5 hover:bg-blue-700 transition-colors duration-300 ease-in-out text-white font-medium"
  >
    Reestablecer contraseña
  </button>
</form>

<div class="max-w-lg w-full flex flex-col gap-3 items-center justify-between">
  <p>¿Ya tienes una cuenta? <a href="/">Inicia Sesión</a></p>
  <p>¿Aún no tienes una cuenta? <a href="/register">Crear una</a></p>
</div>