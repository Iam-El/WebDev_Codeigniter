<div class="row first-row">
    <div class="column2x">

        <div class="row">

            <div class="firstName column2x">
                <?php
                echo form_label('Nombres');
                echo form_input(['name' => 'username', 'class' => 'field', 'placeholder' => 'Tu Nombre', 'value' => '']);
                ?>
















    <!--                <div class="row first-row">-->
    <!--                    <div class="column2x">-->
    <!--                        <div class="row">-->
    <!--                            <div class="firstName column2x">-->
    <!--                                <label for="firstName">Nombres</label><br>-->
    <!--                                <input id="firstName" type="text" placeholder="Tu Nombre" class="field"-->
    <!--                                       disabled-->
    <!--                                       value="--><?php //echo $user["firstName"] . ' ' . $user["lastName"]; ?><!--"/>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="row">-->
    <!--                            <div class="lastName column2x">-->
    <!--                                <label for="lastName">Appelidos</label><br>-->
    <!--                                <input id="lastName" type="text" placeholder="Tu Appelido" class="field" disabled-->
    <!--                                       value="--><?php //echo $user["lastName"]; ?><!--"/>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="column2x">-->
    <!--                        <div class="business-user-image"-->
    <!--                             style="background-image: url('--><?php //echo $user["userImage"] ? $user["userImage"] : "./image/nologo.png"; ?>/*');"></div>*/
    <!--/*                        <button class="button-primary user-profile-icon"*/-->
    <!--/*                                onclick=document.getElementById("user-image").click() type="button">Seleccionar Logo*/-->
    <!--/*                            <input type="hidden" name="MAX_FILE_SIZE"/>*/-->
    <!--/*                            <input type="file" hidden id="user-image" name="userImage">*/-->
    <!--/*                        </button>*/-->
    <!--/*                    </div>*/-->
    <!--/*                </div>*/-->
    <!--/*                <div class="row">*/-->
    <!--/*                    <div class="mail column2x">*/-->
    <!--/*                        <label for="Correo">Correo</label>*/-->
    <!--/*                        <input id="Correo" type="text" placeholder="Tu correo electronico" class="field" disabled*/-->
    <!--/*                               value="*/--><?php ////echo $user["emailId"]; ?><!--<!--"/>-->-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="row">-->
    <!--                    <div class="phone column3x">-->
    <!--                        <label for="phone">Telefono<span-->
    <!--                                    class="error-php"> --><?php //echo $phoneError; ?><!--</span><span-->
    <!--                                    class="error-label hidden">* This field is required</span><span-->
    <!--                                    class="error-label-format hidden">*This Field is Invalid</span></label>-->
    <!--                        <input id="phone" type="text" placeholder="xxx-xxx-xxxx" class="field"-->
    <!--                               value="--><?php //echo $user["phone"]; ?><!--" name="phone" required pattern="^\d{3}-\d{3}-\d{4}$"/>-->
    <!--                    </div>-->
    <!--                    <div class="user column3x">-->
    <!--                        <label for="user">Usuario</label>-->
    <!--                        <input id="user" type="text" placeholder="Nombre de Usuario" class="field"-->
    <!--                               disabled value="--><?php //echo $user["firstName"]; ?><!--"//>-->
    <!--                    </div>-->
    <!--                    <div class="password column3x">-->
    <!--                        <label for="password">Contrasena<span-->
    <!--                                    class="error-php"> --><?php //echo $passwordError; ?><!--</span><span-->
    <!--                                    class="error-label hidden">* This field is required</span><span-->
    <!--                                    class="error-label-format hidden">*This Field is Invalid</span></label>-->
    <!--                        <input id="password" type="password" placeholder="0 to 8 Non Space characters" class="field"-->
    <!--                               value="--><?php //echo $user["password"]; ?><!--" name="password" required pattern="^\S{0,8}$"/>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="row">-->
    <!--                    <span class="info-primary">Nota:</span>-->
    <!--                </div>-->
    <!--                <div class="row">-->
    <!--                    <div>Solo puede cambiar Los datos (Telefono, Contrasena y Foto)</div>-->
    <!--                </div>-->
    <!--                <div class="row">-->
    <!--                    <button type="submit" class="button-primary user-profile-button" name="update-profile">Guardar-->
    <!--                        Cambios-->
    <!--                    </button>-->
    <!--                </div>-->
    <!--            </form>-->