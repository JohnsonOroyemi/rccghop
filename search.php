<?php
session_start();
include("connection.php");
$name = "citibuilda";
?>

<?php include("header.php"); ?>

<?php include("nav_bar.php"); ?>


<script>
function do_search()
{
 var search_term=$("#search_term").val();
 $.ajax
 ({
  type:'post',
  url:'get_results.php',
  data:{
   search:"search",
   search_term:search_term
  },
  success:function(response) 
  {
   document.getElementById("result_div").innerHTML=response;
  }
 });
 
 return false;
}
</script>
</head>
<body>
<div id="wrapper">

<div id="search_box">
 <form method="post"action="get_results.php" onsubmit="return do_search();">
  <input type="text" id="search_term" name="search_term" placeholder="Enter Search keyword" onkeyup="do_search();">
  <input type="submit" name="search" value="SEARCH">
 </form>
</div>

<div id="result_div"></div>

</div>
<style>
 
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;

}

  #search_box input[type="text"]
{
  margin-top: 100px;
 width:250px;
 height:45px;
 padding-left:10px;
 font-size:18px; 
 text-align:center;
 margin-bottom:75px;
 color:#424242;
 border:none;
}
#search_box input[type="submit"]
{
 width:100px;
 height:45px;
text-align:center;
 background-color:#585858;
 color:white;
 border:none;
 margin-bottom:100px;
}
</style>



<?php
  //inserting footer file
    include("footer.php");
  ?>
  
