<body>
    <section class="container mx-auto d-flex flex-column border border-bottom-0 border-top-0 h-100 py-4">
        <?php
            if(isset($_SESSION['pass'])){
                echo '<strong class="text-center text-danger">Admin</strong>';
            }
            else{
                echo '<strong class="text-center text-info">User</strong>';
            }
        ?>
        <span id="logo">Fudo<span class="text-info">FQ</span></span>
        <h1 class="text-center mb-3">Voting Results</h1>
        <?php
            require 'pages/buttons.php';
        ?>
        <p class="text-center mb-2">Здесь показаны результаты голосований. 
        </br>
        <strong class="text-danger">Изменить результаты голосования можно только повторным голосованием!</strong></p>
        <div class="voteList container border h-100 d-flex flex-column align-items-center justify-content-center mt-4">
             
        </div>
    </section>
    <script src="scripts/getVotes.js"></script>
    <script src="scripts/openAdmin.js"></script>
</body>