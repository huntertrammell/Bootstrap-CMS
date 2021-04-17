<?php 
$query = 'SELECT * FROM posts';
$posts = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($posts)) :
    $title = $row['title'];
    $body = $row['body'];
?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $title; ?></h5>
            <p class="card-text"><?php echo $body; ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div> 
<?php
endwhile;
?>