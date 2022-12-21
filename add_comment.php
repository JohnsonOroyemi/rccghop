 <?php
session_start();
$connect = new PDO('mysql:host=localhost;dbname=citizuzs_admin', 'root', '');

$error = '';
$comment_content = '';
$post_id = '';
$session = '';

if(!isset($_SESSION["user_id"]))
{
 $error .= '<p class="text-danger">You need to login first OR register if you are not a user</p>';
}
else
{
 $session = $_SESSION["user_id"];
}


if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

 $post_id =  $_POST["post_id"];
 
    if($error == '')
    {
     $query = "
     INSERT INTO comment_tbl
     (parent_comment_id, comment, commentator, post_id) 
     VALUES (:parent_comment_id, :comment, :commentator, :post_id)
     ";
     $statement = $connect->prepare($query);
     $statement->execute(
      array(
       ':parent_comment_id' => $_POST["comment_id"],
       ':comment'        => $comment_content,
       ':commentator'    => $_SESSION["user_id"],
       ':post_id'         => $post_id
      )
      
     );
     $error = '<label class="text-success">Comment Added</label>';
    }
     

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>


