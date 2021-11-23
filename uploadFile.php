<?php
header("Content-type: text/html; charset=utf-8");
if (($_FILES["file"]["size"] < 40*1024*1024))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    $name= $_FILES["file"]["name"];
    $size= $_FILES["file"]["size"] / 1024;
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
 
      
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "<br />";
      echo "<script>alert('提交成功');
      location='upload.html';
</script>";
      }
    
  }
else
  {
  echo "Invalid file";
  }
?>