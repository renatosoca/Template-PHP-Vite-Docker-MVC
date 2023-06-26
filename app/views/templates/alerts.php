<?php 
foreach ($alerts as $key => $message) {
  foreach ($message as $messages) {
?>
    <div class="text-base <?php echo $key === 'error' ? 'bg-red-500' : 'bg-emerald-600' ?> px-6 py-2 w-full font-bold rounded text-center" >
      <p class="text-md <?php echo $key === 'error' ? 'text-white' : 'text-gray-200' ?>" >
        <?php echo $messages ?>
      </p>
    </div>
<?php
  }
}
?>