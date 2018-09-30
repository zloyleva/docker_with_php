<?php 
    $db = new PDO("mysql:host=mysql;dbname=forge", "root", "123456");
    if(isset($_POST['article_name']) && isset($_POST['article_description'])){
        $query = $db->prepare("INSERT INTO `forge`.`articles` (`title`, `description`) VALUES (:title, :description)");
        $query->execute([
            'title' => $_POST['article_name'],
            'description' => $_POST['article_description'],
        ]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row" style="border-bottom: 1px solid;">
            <h1>Articles</h1>
        </div>
        <div class="row">

            <?php
                $html = '';
                
                foreach ($db->query('SELECT * FROM forge.articles') as $row){
                    $html .= "<div class='col-12'>";
                    $html .= "  <h2 class=''>";
                    $html .=        $row['title'];
                    $html .= "  </h2>";
                    $html .= "  <p class=''>";
                    $html .=        $row['description'];
                    $html .= "  </p>";
                    $html .= "</div>";
                }
                
                echo $html;
            ?>

        </div>
        <div class="row">
        <div class="col-12">
            <h2>New article</h2>
        </div>
        <form class="col-12" action="index.php" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Article name</label>
                <input type="text" name="article_name" class="form-control" id="exampleFormControlInput1" placeholder="Enter article's name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="article_description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Create article</button>
        </form>

        </div>
    </div>
</body>
</html>

