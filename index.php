<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action = "<?php $_PHP_SELF ?>" method = "POST" name = "YT" onsubmit = "return(validate());">
      Twitter handle:<br>
      <input type="text" name="author"><br>
      Name/Message:<br>
      <input type="text" name="name"><br>
      YouTube video id (example: Z_PVB9fYNz8):<br>
      <input type="text" name="link">
      <input type="submit">
    </form>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "nodejs";

      if (isset($_POST["author"]) && isset($_POST["name"]) && isset($_POST["link"]))
      {
      $author = $_POST['author'];
      $name = $_POST['name'];
      $link = $_POST['link'];

      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error)
      {
          die("Connection failed: " . $conn->connect_error);
      }

      if($author!='' && $name!='' && $link!='')
      {
      $sql = "INSERT INTO music (name, link, author) VALUES ('$name', '$link', '$author')";
      if ($conn->query($sql) === TRUE)
        {
          echo "New record created successfully";
        }
      else
        {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
  }
$conn->close();
}
?>
    </form>
    <script>
    function validate()
    {
      let name = document.YT.name.value;
      let link = document.YT.link.value;
      let author = document.YT.author.value;
      if(name == '' || link == '' || author == '')
      {
          alert("Please fill in everything" );
          return false;
      }
      if(link.length!=11)
      {
        alert("Invalid link (Only enter the video id [string after v=])");
        return false;
      }
        
    }
    </script>
  </body>
</html>
