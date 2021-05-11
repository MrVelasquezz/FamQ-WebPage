<body>
    <section class="container mx-auto d-flex flex-column border border-dark border-bottom-0 border-top-0 h-100 py-4">
        <?php
            if(isset($_SESSION['pass'])){
                echo '<strong class="text-center text-danger">Admin</strong>';
            }
            else{
                echo '<strong class="text-center text-info">User</strong>';
            }
        ?>
        <span id="logo">Fudo<span class="text-info">FQ</span></span>
        <h1 class="text-center mb-3">Anonymous comments</h1>
        <?php
            require 'pages/buttons.php';
        ?>
        <p class="text-center mb-2">Напишите жалобу, предложение или замечание в поле ниже. У нас все полностью анонимно.
        </br>
        <strong class="text-danger">Никому не говорите о том, что вы написали.</strong></p>
        <form action="php/comments/send.php" method="post" class="text-center mb-3">
            <textarea name="comm" class="p-2 w-100 rounded" maxlength="5000" autofocus></textarea>
            <input type="submit" value="Отправить" class="rounded border-0 btn btn-info px-4">
        </form>
        <p class="text-center mb-2">Ниже будут посты других пользователей:</p>
        <div id="content-box" class="border border-dark rounded h-100 p-2"></div>
    </section>
    <script src="scripts/createMessage.js"></script>
    <script src="scripts/openAdmin.js"></script>
</body>