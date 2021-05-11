<div class="text-center mb-2">
    <a href="index.php?page=comments" class="mx-2">Anonymous Comments</a>
    <a href="index.php?page=voting" class="mx-2">Anonymous Voting</a>
    <?php 
        if(isset($_SESSION['pass'])){
            echo '<a href="index.php?page=createVoting" class="mx-2 text-danger">Create Voting </a>';
        }
    ?>
</div>