<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){

            if($post['id'] == $postId){
               $currentPost = $post;
            }

        }
    }
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p id="post-description"><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost ['title'] ?>">
            </div>
           
            <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos cum rem libero ipsum iste maxime inventore eos, iusto ipsa illo consectetur id! Possimus veritatis maxime atque sapiente, accusamus ab quisquam.
            Reiciendis voluptate, magni alias facere accusamus magnam rem placeat sed obcaecati eligendi veritatis quod aspernatur. Eaque dolorum, a consequuntur repellendus, repudiandae, accusantium voluptas aliquam est iusto ipsam illum mollitia ipsum!
            Voluptate ut consequatur voluptas sed alias dolores, sapiente esse excepturi reiciendis nam quaerat, inventore est? Animi, qui cumque. Deleniti voluptatibus eius, a facilis veniam vel quae maxime incidunt doloribus ea?
            Tempore sapiente, illo velit repellat a ab ullam at iste eveniet molestias explicabo amet odit labore perferendis recusandae voluptatem. Omnis, facilis aliquam temporibus nemo consectetur rerum soluta quidem optio dolorem?
            Doloribus eveniet numquam pariatur ad labore debitis blanditiis, corrupti quia maxime fugiat sed rem dolore harum optio cumque non dolorum facere odit culpa minima. Iusto rerum consequatur ea reprehenderit explicabo!</p>
           
            <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos cum rem libero ipsum iste maxime inventore eos, iusto ipsa illo consectetur id! Possimus veritatis maxime atque sapiente, accusamus ab quisquam.
            Reiciendis voluptate, magni alias facere accusamus magnam rem placeat sed obcaecati eligendi veritatis quod aspernatur. Eaque dolorum, a consequuntur repellendus, repudiandae, accusantium voluptas aliquam est iusto ipsam illum mollitia ipsum!
            Voluptate ut consequatur voluptas sed alias dolores, sapiente esse excepturi reiciendis nam quaerat, inventore est? Animi, qui cumque. Deleniti voluptatibus eius, a facilis veniam vel quae maxime incidunt doloribus ea?
            Tempore sapiente, illo velit repellat a ab ullam at iste eveniet molestias explicabo amet odit labore perferendis recusandae voluptatem. Omnis, facilis aliquam temporibus nemo consectetur rerum soluta quidem optio dolorem?
            Doloribus eveniet numquam pariatur ad labore debitis blanditiis, corrupti quia maxime fugiat sed rem dolore harum optio cumque non dolorum facere odit culpa minima. Iusto rerum consequatur ea reprehenderit explicabo!</p>
            
        </div>
            <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag):?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>   
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category):?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?> 
            </ul>
        </aside>

    </main>
   
<?php
    include_once("templates/footer.php");
?>