<div class="main__plans">
            <h3 class="main__subtitle">Crear Plan</h3>

            <form action="" class="Plans__create" id="crearPlan">
                <div class="plans__container">
                    <div class="plans__inputs">
                        <label for="">Plan</label>
                        <input type="text" name="" id="nombrePlan" placeholder="Ingrese nombre">
                    </div>
                    <div class="plans__inputs">
                        <label for="">Costo</label>
                        <input type="text" name="" id="costoPlan" placeholder="Ingrese costo en soles" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="plans__inputs">
                        <label for="">Duración</label>
                        <input type="text" name="" id="duracionPlan" placeholder="Ingrese duración en días" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="plans__inputs">
                        <label for="">Descripción</label>
                        <input type="text" name="" id="descripcionPlan" placeholder="Ingrese breve descripción">
                    </div>
                </div>
                
                <div class="plans__btn">
                    <button id="botonPlan" class="btn btn-plan">Crear</button>
                </div>
                
            </form>

</div>