<div class="h-screen items-center w-full">
  <div class="py-10">
    <h1 class="text-center text-4xl font-bold font-Jakarta pb-4">Crear Cuenta</h1>
    <p class="text-center font-medium pb-4">Llena el siguiente formulario para crear una cuenta</p>

    <div class="flex flex-col gap-2 max-w-lg w-full mx-auto">
      <?php include_once __DIR__.'/../templates/alerts.php'; ?>
    </div>

    <form 
      class="max-w-lg w-full mx-auto rounded-md flex flex-col gap-3 py-10" 
      action="/register" 
      method="POST"
    >
      <div class="campo">
        <label for="name" class="text-base">Nombre</label>
        <input
          class="w-full py-2 px-3 rounded-md text-black font-medium outline-none"
          type="text"
          id="name"
          name="register[name]"
          placeholder="Ingresa tu nombre"
          value="<?php echo sanitize($user->name); ?>"
        />
      </div>

      <div class="campo">
        <label for="lastname" class="text-base">Apellido</label>
        <input
          class="w-full py-2 px-3 rounded-md text-black font-medium outline-none"
          type="text"
          id="lastname"
          name="register[lastname]"
          placeholder="Ingresa tu apellido"
          value="<?php echo sanitize($user->lastname); ?>"
        />
      </div>

      <div class="campo">
        <label for="phone" class="text-base">Telefono</label>
        <input
          class="w-full py-2 px-3 rounded-md text-black font-medium outline-none"
          type="tel"
          id="phone"
          name="register[phone]"
          placeholder="Ingresa tu celular"
          value="<?php echo sanitize($user->phone); ?>"
        />
      </div>

      <div class="campo">
        <label for="email" class="text-base">Email</label>
        <input
          class="w-full py-2 px-3 rounded-md text-black font-medium outline-none"
          type="text"
          id="email"
          name="register[email]"
          placeholder="Ingresa tu correo electrónico"
          value="<?php echo sanitize($user->email); ?>"
        />
      </div>

      <div class="campo">
        <label for="password" class="text-base">Contraseña</label>
        <input
          class="w-full py-2 px-3 rounded-md text-black font-medium outline-none"
          type="password"
          id="password"
          name="register[password]"
          placeholder="Ingresa tu celular"
          value="<?php echo sanitize($user->password); ?>"
        />
      </div>

      <button 
        type="submit" 
        class="py-2 px-10 rounded-md w-full bg-blue-800 mt-5 hover:bg-blue-700 transition-colors duration-300 ease-in-out text-white font-medium" 
        value="Iniciar Sesión"
      >
        Registrarse
      </button>
    </form>

    <div class="max-w-lg w-full mx-auto flex gap-2 justify-between">
      <p>¿Ya tienes una cuenta? <a href="/" class="hover:underline">Inicia Sesión</a></p>
  <a href="/forgot-password" class="hover:underline">Olvite mi contraseña</a>
    </div>

  </div>
</div>