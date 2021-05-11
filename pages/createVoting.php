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
        <h1 class="text-center mb-3">Create Voting</h1>
        <?php
            require 'pages/buttons.php';
        ?>
        <p class="text-center mb-2">Здесь создаются голосования.
            </br>
            <strong class="text-danger">Пишите аккуратно и без ошибок, переделать уже будет нельзя.</strong></p>
        <div class="d-flex flex-column align-items-center">
            <form action="php/voting/makeNewVote.php" method = "POST" class="mt-5 d-flex flex-column" style="width: 100%">
                <label for="head">Заголовак голосования:</label>
                <input type="text" name="head" id="head" class="border border-muted rounded">
                <label for="content">Вопрос поднимаемый на голосовании:</label>
                <textarea name="votingQuest" id="content" cols="30" rows="10"
                    class="border border-muted rounded"></textarea>
                <span class="d-flex flex-row align-items-center justify-content-around pt-2">
                    <span>
                        <label for="v1">Первый вариант ответа:</label>
                        <input type="text" id="v1" name="v1" class="border border-muted rounded">
                    </span>
                    <span>
                        <label for="v2">Второй вариант ответа:</label>
                        <input type="text" id="v2" name="v2" class="border border-muted rounded">
                    </span>
                </span>
                <label class="d-flex flex-row align-items-center my-4"><input type="checkbox" name="check" id="check">&nbspЯ все проверил и хочу опубликовать голосование.</label>
                <input type="submit" value="Отправить" class="btn btn-info p-2 rounded mt-1">
            </form>
        </div>
    </section>
    <script src="scripts/openAdmin.js"></script>
</body>