<?php
session_start();
$connect = new PDO('mysql:host=localhost;dbname=citizuzs_admin', 'root', '');

// Below function will convert datetime to time elapsed string
function time_elapsed_string($datetime, $full = false) {
  $now = new DateTime;
  $ago = new DateTime($datetime);
  $diff = $now->diff($ago);
  $diff->w = floor($diff->d / 7);
  $diff->d -= $diff->w * 7;
  $string = array('y' => 'year', 'm' => 'month', 'w' => 'week', 'd' => 'day', 'h' => 'hour', 'i' => 'minute', 's' => 'second');
  foreach ($string as $k => &$v) {
      if ($diff->$k) {
          $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
      } else {
          unset($string[$k]);
      }
  }
  if (!$full) $string = array_slice($string, 0, 1);
  return $string ? implode(', ', $string) . ' ago' : 'just now';
}


$post_id = $_POST['post_id'];

$query = "
SELECT CONCAT(user.firstName,' ', user.lastName) AS commentator, comment_tbl.comment AS comment, comment_tbl.comment_date AS comment_date, comment_tbl.comment_id AS comment_id

FROM user

INNER JOIN comment_tbl on comment_tbl.commentator = user.userId

WHERE post_id = $post_id AND parent_comment_id = '0'
 
ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);
$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 
 <div class="panel">
  <div class="panel-heading"><b> '.$row["commentator"].' </b> <i>'. time_elapsed_string($row["comment_date"]).'</i></div>
  <div class="panel-body">'.$row["comment"].'</div>
 <div class="panel-footer" align=""><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
 </div>
 ';
 $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT CONCAT(user.firstName,' ', user.lastName) AS commentator, comment_tbl.comment AS comment, comment_tbl.comment_date AS comment_date, comment_tbl.comment_id AS comment_id

 FROM user
 
 INNER JOIN comment_tbl on comment_tbl.commentator = user.userId  WHERE parent_comment_id = '".$parent_id."'
 ";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="panel" style="margin-left:'.$marginleft.'px">
  <div class="panel-heading"><b>'.$row["commentator"].'  </b>  <i>'. time_elapsed_string($row["comment_date"]).'</i></div>
  <div class="panel-body">'.$row["comment"].'</div>
 <div class="panel-footer" align=""><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
 </div>
   ';
   $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
  }
 }
 return $output;
}

?>
