<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title . ' | BarberWorks' ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
  <link rel="icon" href="/favicon.svg">
  
  <?= vite("main.ts") ?>
</head>
<body>
  <div class="grid grid-cols-12 h-screen animate-fadeIn overflow-hidden">
    <div class="col-span-6 h-full hidden 2md:block">
      <img
        class="h-full w-full object-cover"
        src="/images/hero-auth.jpg"
        alt="Image Hero Login"
      >
    </div>
  
    <div class="relative col-span-12 2md:col-span-6 bg-black text-white flex flex-col justify-center items-center overflow-auto" >
      <div class="h-screen items-center w-full overflow-auto">
        <div class="h-full flex flex-col justify-center items-center overflow-auto px-6">
          <?php echo $content; ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>