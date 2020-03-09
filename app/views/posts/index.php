<?php require_once APPROOT.'/views/inc/header.php';
session_start();
include_once("db.php");
?>
<body>
<h3>all posts of my blo</h3>
<?php
    $sql = "SELECT * FROM posts ORDER BY id DESC";

    $res = mysqli_query($db, $sql) or die(mysqli_error());

    $posts ='';

    if(mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_assoc($res)) {
            $id = $row['id'];
            $title = $row['title'];
            $content = $row['content'];
            $created_at = $row['created_at'];

            $output = $content;

            $posts .= "<div><h2><a href='view_post.php?pid=$id' </h2><h3>$created_at</h3><p>$output</p></div> ";
        }
        echo $posts;
    } else {
            echo "There are no posts";
    }
?>
</body>


<?php require_once APPROOT.'/views/inc/footer.php';?>

