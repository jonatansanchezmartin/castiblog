 <?php require_once "includes/helpers.php"; ?>
 
 <!-- BARRA LATERAL -->
 <aside id="sidebar">

            <?php if(isset($_SESSION["user"])): ?>

                <div id="loggedUser" class="block">
                    <h3>
                        BIenvenido, <?=$_SESSION["user"]["name"]." ".$_SESSION["user"]["lastName"]; ?>
                    </h3>

                    <!-- Botones -->

                    <a href="cerrar.php">Cerrar sesión</a>

                </div>
            <?php endif; ?>



            <div id="login" class="blockAside">
                <h3>
                    Ingresar
                </h3>


                <form action="login.php" method="POST">
                
                    <label for="email">
                        Email
                    </label>
                    <input type="text" name="email" id="emailLogin"/>

                    <div id="emailLoginError">
                        <p id="emailLoginEmptyError" style="display:none;">Falta el email</p>
                        <p id="emailLoginInvalidError" style="display:none;">El email no es correcto</p>
                    </div>

                    <label for="password">
                        Contraseña
                    </label>

                    <input type="password" name="password" id="passwordLogin"/>

                    <p id="passwordEmailError" style="display:none;">Falta la contraseña</p>

                </form>

                <button type="submit" class="button" onclick="checkLogin()">Entrar</button>


            </div>

            <div id="register" class="blockAside">

                <h3>
                    Crear tu cuenta
                </h3>


                <form action="register.php" method="POST" id="registerForm">

                    <?php 
                        $errors = $_SESSION['registerFormErrors'] ?? []; 
                        unset($_SESSION['registerFormErrors']);
                    
                        $nameErrors = $errors['name'] ?? [];
                        
                        $lastNameErrors = $errors['lastName'] ?? [];

                        $emailErrors = $errors['email'] ?? [];

                        $passwordErrors = $errors['password'] ?? [];
                    ?>

                    <label for="name">
                        Nombre
                    </label>
                    <input type="text" name="name" id="nameRegister"/>
                    <div id="nameErrors">
                        <?php foreach($nameErrors as $key => $nameError){ ?>
                            <span id="<?php echo "name-$key"; ?>" style="color:red;"><?php echo $nameError; ?></span>
                        <?php } ?>
                    </div>

                    <label for="lastName">
                        Apellidos
                    </label>
                    <input type="text" name="lastName" id="lastNameRegister"/>
                    <div id="lastNameErrors">
                        <?php foreach($lastNameErrors as $key => $lastNameError){ ?>
                            <span id="<?php echo "lastName-$key"; ?>" style="color:red;"><?php echo $lastNameError; ?></span>
                        <?php } ?>
                    </div>

                    <label for="email">
                        Email
                    </label>
                    <input type="text" name="email" id="emailRegister"/>
                    <div id="emailErrors">
                        <?php foreach($emailErrors as $key => $emailError){ ?>
                            <span id="<?php echo "email-$key"; ?>" style="color:red;"><?php echo $emailError; ?></span>
                        <?php } ?>
                    </div>
                    
                    <label for="password">
                        Contraseña
                    </label>
                    <input type="password" name="password" id="passwordRegister"/>
                    <div id="passwordErrors">
                        <?php foreach($passwordErrors as $key => $passwordError){ ?>
                            <span id="<?php echo "password-$key"; ?>" style="color:red;"><?php echo $passwordError; ?></span>
                        <?php } ?>
                    </div>
                    

                </form>

                <button type="submit" class="button" onclick="checkRegister()">Entrar</button>




            </div>

</aside>