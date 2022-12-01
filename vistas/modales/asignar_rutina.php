<div class="modal__container">
    <div class="user__top">
        <h2 class="user__title">Asignar Rutina</h2>
        <i id="close__modal" class="fa-solid fa-circle-xmark close_modal"></i>
    </div>

    <form action="" class="edit__form">
        <div class="routines__inputs">
            <label for="rutinas">Rutinas:</label>
            <select name="rutina" id="rutinas" class="select_rutina">
                <option value="">---Selecciona tu rutina---</option>
                <option value="1">Mes 1</option>
            </select>
        </div>

        <div class="routines__inputs">
            <label for="dni">DNI</label>
            <input type="text" name="" id="dni" placeholder="Ingrese su DNI" required>
        </div>

        <div class="edit__input">
            <button type="submit" class="btn btn__full">Asignar Rutina</button>
        </div>
    </form>
</div>