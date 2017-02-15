<!-- Always add the var for the page title before the include file
# Full Catalog Is The Default Page Title If No Var Is Set
# isset conditional set in place incase there is no catalog selected, forcing it back to    FULL Catolog
# $_GET queries the catalog looking for (BOOKS, MOVIES, MUSIC) if/else if determines whats selected and produces the correct page title
-->

<?php
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
  <div class="section page">
    <h1><?php echo $pageTitle; ?></h1>
  </div>
<?php include("inc/footer.php"); ?>
