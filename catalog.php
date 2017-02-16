<!-- Always add the var for the page title before the include file
# Full Catalog Is The Default Page Title If No Var Is Set
# isset conditional set in place incase there is no catalog selected, forcing it back to    FULL Catolog
# $_GET queries the catalog looking for (BOOKS, MOVIES, MUSIC) if/else if determines whats selected and produces the correct page title
-->

<?php
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Full Catalog";
$section = null;


if(isset($_GET["cat"])) {
  if($_GET["cat"] == "books") {
    $pageTitle = "Books";
    $section = "books";
  } else if($_GET["cat"] == "movies") {
    $pageTitle = "Movies";
    $section = "movies";
  } else if($_GET["cat"] == "music") {
    $pageTitle = "Music";
    $section = "music";
  }
}

include("inc/header.php"); ?>
  <div class="section catalog page">

    <div class="wrapper">

      <h1><?php
      if($section != null) {
        echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
      }
      echo $pageTitle; ?></h1>
      <ul class="items">
        <?php
          $categories = array_category($catalog, $section);
          foreach($categories as $id) {
            echo get_item_html($id, $catalog[$id]);
        }
        ?>
      </ul>

    </div>

  </div>

<?php include("inc/footer.php"); ?>
