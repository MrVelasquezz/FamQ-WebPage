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
    </section>
</body>