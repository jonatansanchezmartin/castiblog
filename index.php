<?php require_once "includes/header.php"; ?>

 <?php require_once "includes/sidebar.php"; ?>
   
    <!-- CAJA PRINCIPAL -->

<div id="main">
    <h1>
        Últimas entradas
    </h1>
    <?php
    // All the PHP code

    // 1) Get the posts from the database

    $sql = "SELECT title, content, category FROM posts;";
    $posts = mysqli_query($db, $sql);

    // 2) Iterate over the posts to show in the page
    while ($post = mysqli_fetch_assoc($posts))
    { 
        ?>
        <article class="entrada">
            <h2><?php echo $post['title']; ?></h2>
            <span><?php echo $post['category']; ?></span>
            <p><?php echo $post['content']; ?></p>
        </article>
        <?php 
    }
    ?>
</div>



<?php require_once "includes/footer.php"; ?>

<script src="script.js"></script>

</body>

</html>