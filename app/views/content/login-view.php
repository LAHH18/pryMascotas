<div class="d-flex justify-content-center align-items-center vh-100 ">

    <form class="st-form" action="" method="POST" autocomplete="off" >
        <div class="d-flex justify-content-center">
                    <img src="<?php echo APP_URL; ?>app/views/photos/usuario.png" alt="ImagenInicio">
            </div>
            <div class="text-center fs-1 fw-bold text-white">Inicio de sesión</div>
            <label class="h5">Usuario:</label>
            <div class="input-group mb-2">
                <i class="input-group-text fa-solid fa-user"></i>
                <input class="form-control" type="text"  placeholder="Usuario" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" required>
            </div>
            <label class="h5">Clave:</label>
            <div class="input-group">
                <i class="input-group-text fa-solid fa-lock"></i>
                <input class="form-control" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" placeholder="Contraseña" maxlength="100" required>
            </div>
            <p class="mb-4 mt-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-warning text-white fw-bold">Iniciar sesion</button>
            </p>
            <p class="text-white">¿No te has registrado? <a href="Registro.html"><span>Registrarse Aqui</span></a></p>
    </form>
</div>
