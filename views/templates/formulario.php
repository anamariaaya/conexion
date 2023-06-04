<form class="contacto__form <?php echo !$inicio ? 'contacto__form--shadow' : '' ?>">
    <img class="contacto__form__img" src="/build/img/logo-contacto.svg" alt="Contacto" loading="lazy">
    <?php
    if(!isset($inicio)):?>
        <legend class="contacto__form__legend">Contáctanos</legend>
    <?php endif?>
    <fieldset class="contacto__form__fieldset">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" placeholder="Tu nombre" required>

        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" placeholder="Tus apellidos" required>

        <label for="empresa">Empresa</label>
        <input type="text" id="empresa" placeholder="Tu empresa" required>

        <label for="direccion">Dirección</label>
        <input type="text" id="direccion" placeholder="Tu dirección" required>

        <label for="telefono">Teléfono</label>
        <input type="tel" id="telefono" placeholder="Tu teléfono" required>

        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tu email" required>

        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" placeholder="Escribe tu mensaje" required></textarea>

        <input class="contacto__form__btn" type="submit" value="Enviar" class="contacto__form__submit">
    </fieldset>

</form>