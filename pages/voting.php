<?php
    session_start();
?>
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
        <h1 class="text-center mb-3">Anonymous voting</h1>
        <?php
            require 'pages/buttons.php';
        ?>
        <p class="text-center mb-2">Здесь будут проходить голосования. 
        </br>
        <strong class="text-danger">Никому не говорите о том, за что вы проголосовали.</strong></p>
        <div class="voteContainer container h-100 d-flex flex-column align-items-center justify-content-center mt-4">
            <?php
                require 'php/config.php';

                $conn = new mysqli($server, $uname, $pass, $dbname);
            
                $sql = "SELECT * FROM voting WHERE stat = 0";
            
                $request = $conn->query($sql);
            
                if($request->num_rows > 0){
                    require 'pages/blank.php';
                }
                else{
                    echo '<strong class="text-muted empty pb-5">Нет доступных голосований</strong>';
                }
            ?>
        </div>
        <div class="container d-flex justify-content-center mt-3">
            <a href="index.php?page=results">К результатам голосования</a>
        </div>
    </section>
    <script src="scripts/openAdmin.js"></script>
</body>