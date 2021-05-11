<form action="php/voting/sendVariant.php" method="post" id="blank-form">
        <span class="d-flex flex-row justify-content-around px-4">
            <span class="mx-4 d-flex flex-row">
                <label for="v1" class="px-2"><strong><?php echo $v1;?></strong></label>
                <div class="cont">
                    <input type="radio" id="v1" name='vars' value='y' class="v">
                    <div id="checkmark1"><img src="svgs/check.svg" alt="" id="check"></div>  
                </div>
                
            </span>
            <span class="mx-4 d-flex flex-row">
                <label for="v2" class="px-2"><strong><?php echo $v2;?></strong></label>
                <div class="cont">
                    <input type="radio" id="v2" name='vars' value='n' class="v">
                    <div id="checkmark1"><img src="svgs/cross.svg" alt="" id="cross"></div>
                </div>
            </span>
        </span>
        <input type="submit" value="Отправить голос" class="btn btn-danger rounded mt-5" id="sub">
        <script>
            let check, cross;
            check = document.getElementById('check');
            cross = document.getElementById('cross');
            let sub = document.getElementById("sub");
            sub.disabled = true;
            $(".v").click(function(){
                sub.disabled = false;
            });

            $('#v1').click(function(){
                check.src = "svgs/check-solid.svg";
                cross.src = "svgs/cross.svg";
            });

            $('#v2').click(function(){
                cross.src = "svgs/cross-solid.svg";
                check.src = "svgs/check.svg";
            });

        </script>
    </form>