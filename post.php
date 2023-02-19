<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
      if ($post['id'] == $postId) {
        $currentPost = $post;
      }
    }
  }
?>

  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?= $currentPost['title'] ?></h1>
      <p id="post-description"><?= $currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?=$currentPost['img'] ?>" alt="<?=$currentPost['title'] ?>">
      </div>
      <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa laboriosam adipisci, beatae sint quis, totam quidem molestiae amet saepe eaque distinctio possimus cumque, reiciendis unde quisquam quasi aliquam ex sequi!
      Esse, in quam incidunt velit aspernatur ratione cupiditate suscipit consequuntur non quis, eum, eveniet voluptate corporis animi ipsam. Aperiam corrupti vero asperiores aliquid enim itaque architecto dolorum pariatur. Fugit, dolorum.
      Quae exercitationem recusandae magni! Facere provident laborum velit voluptates, doloribus distinctio earum quisquam aut officiis quo reprehenderit deleniti aperiam pariatur blanditiis minima. Dolores itaque odio reprehenderit recusandae cupiditate? Error, incidunt.
      Reiciendis laudantium iste cupiditate, sint reprehenderit, ex asperiores voluptatum ratione tempora accusamus accusantium nihil et esse. Aperiam, reiciendis facilis tempora numquam voluptatibus unde alias nulla nihil provident distinctio totam non.
      Optio cumque cupiditate odio culpa accusamus molestias adipisci praesentium iste, itaque, fugiat id doloremque sint esse ullam ab nobis quisquam, earum vero modi saepe totam corporis! Explicabo molestias nemo delectus?</p>
      <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa laboriosam adipisci, beatae sint quis, totam quidem molestiae amet saepe eaque distinctio possimus cumque, reiciendis unde quisquam quasi aliquam ex sequi!
      Esse, in quam incidunt velit aspernatur ratione cupiditate suscipit consequuntur non quis, eum, eveniet voluptate corporis animi ipsam. Aperiam corrupti vero asperiores aliquid enim itaque architecto dolorum pariatur. Fugit, dolorum.
      Quae exercitationem recusandae magni! Facere provident laborum velit voluptates, doloribus distinctio earum quisquam aut officiis quo reprehenderit deleniti aperiam pariatur blanditiis minima. Dolores itaque odio reprehenderit recusandae cupiditate? Error, incidunt.
      Reiciendis laudantium iste cupiditate, sint reprehenderit, ex asperiores voluptatum ratione tempora accusamus accusantium nihil et esse. Aperiam, reiciendis facilis tempora numquam voluptatibus unde alias nulla nihil provident distinctio totam non.
      Optio cumque cupiditate odio culpa accusamus molestias adipisci praesentium iste, itaque, fugiat id doloremque sint esse ullam ab nobis quisquam, earum vero modi saepe totam corporis! Explicabo molestias nemo delectus?</p>
    </div>
    <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach($currentPost['tags'] as $tag): ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">categorias</h3>
    <ul id="categories-list">
      <?php foreach($categories as $category): ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
  </main>

<?php
  include_once("templates/footer.php");
?>