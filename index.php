<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        * {
            font-family: monospace;
            font-size: 16px;
            letter-spacing: 0px;
        }

        textarea {
            height: 150px;
            font-size: 13px;
        }

        #content-box {
            overflow-x: hidden;
        }

        .date {
            width: 115px;
        }

        h1{
            font-size: 3em;
        }

        section{
            position: relative;
        }
        span#logo{
            position: absolute;
            top: 15px;
            right: 15px;
            transform: rotate(-23deg);
        }
        span#logo, span#logo span{
            font-weight: 900;
            font-size: 2rem;
        }
    </style>
    <title>Anonym Comments</title>
</head>

<body style="height: 100vh;">
    <section class="container mx-auto d-flex flex-column border border-bottom-0 border-top-0 h-100 py-4">
        <span id="logo">Fudo<span class="text-info">FQ</span></span>
        <h1 class="text-center mb-5">Anonymous comments</h1>
        <p class="text-center">Напишите жалобу, предложение или замечание в поле ниже. У нас все полностью анонимно</p>
        <form action="php/send.php" method="post" class="text-center mb-3">
            <textarea name="comm" class="p-2 w-100 rounded" maxlength="5000" autofocus></textarea>
            <input type="submit" value="Отправить" class="rounded border-0 btn btn-info px-4">
        </form>
        <p class="text-center mb-2">Ниже будут посты других пользователей:</p>
        <div id="content-box" class="border border-dark rounded h-100 p-2"></div>
    </section>
    <script>
        $(document).ready(function () {
            let data;

            class newElement {
                constructor(_date, _text) {
                    this.date = _date;
                    this.text = _text;
                }

                createElement() {
                    let parent = document.getElementById('content-box');
                    let element = document.createElement('div');
                    element.setAttribute('class', 'd-flex flex-row container-fluid');
                    let date, text;
                    date = document.createElement('div');
                    date.setAttribute('class', 'date text-success');
                    date.innerHTML = this.date + ":";
                    text = document.createElement('div');
                    text.setAttribute('class', 'container text-left d-flex');
                    text.innerHTML = this.text;
                    element.appendChild(date);
                    element.appendChild(text);
                    parent.appendChild(element);
                }
            }
            $.ajax({
                type: "POST",
                url: "php/request.php",
                dataType: "text",
                success(data) {
                    if (data.length > 0) {
                        rdata = JSON.parse(data);
                        for (i = 0; i < rdata.length; i++) {
                            let createPost = new newElement(rdata[i][1], rdata[i][0]);
                            createPost.createElement();
                        }
                    }
                    else{
                        return 0;
                    }

                }
            });
        });
    </script>
</body>

</html>