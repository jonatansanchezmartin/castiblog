<?php require_once "includes/header.php"; ?>

 <?php require_once "includes/sidebar.php"; ?>
   
    <!-- CAJA PRINCIPAL -->

<div id="mainNewEntry">
    <h1>
        Crear entrada
    </h1>

    <div id="newEntryForm">
        <form action="createNewEntry.php" method="POST">
            <label for="title">
                Título
            </label>
            <input type="text" name="title" id="title"/>

            <label for="content">
                Contenido
            </label>
            
            <textarea name="content" id="content"></textarea>

            <div class="categorySelection">
                <label for="category">
                    Elige la categoría
                </label>

                <select class="form-control" id="category" name="category">
                    <option value="es">España</option>
                    <option value="fr">Francia</option>
                    <option value="uk">Reino Unido</option>
                    <option value="it">Italia</option>
                </select>

            </div>

            <br>


            <button type="submit" class="button">Nueva entrada</button>
        </form>
    </div>
    

</div>



<?php require_once "includes/footer.php"; ?>

<script src="script.js"></script>

</body>

</html>