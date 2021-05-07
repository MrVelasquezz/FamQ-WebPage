$(document).ready(function () {

    class newElement {
        constructor(_date, _text, _id) {
            this.date = _date;
            this.text = _text;
            this.id = _id;
        }

        createElement() {
            let parent = document.getElementById('content-box');
            let element = document.createElement('div');
            element.setAttribute('class', 'd-flex flex-row container-fluid');
            let date, text, arg;
            date = document.createElement('div');
            date.setAttribute('class', 'date text-success');
            date.innerHTML = this.date + ":";
            text = document.createElement('div');
            text.setAttribute('class', 'container text-left d-flex');
            text.innerHTML = this.text;
            arg = document.createElement('div');
            arg.setAttribute('id', this.id);
            arg.setAttribute('style', 'cursor:pointer');
            arg.setAttribute('class','del');
            arg.setAttribute('onclick', `let s = new delElement(${this.id}); s.del();`);
            arg.innerHTML = '&#10060;';
            element.appendChild(date);
            element.appendChild(text);
            element.appendChild(arg);
            parent.appendChild(element);
        }
    }
    $.ajax({
        type: "POST",
        url: "php/comments/request.php",
        dataType: "text",
        success(data) {
            if (data.length > 0) {
                rdata = JSON.parse(data);
                for (i = 0; i < rdata.length; i++) {
                    let createPost = new newElement(rdata[i][1], rdata[i][0], rdata[i][2]);
                    createPost.createElement();
                }
            }
            else{
                return 0;
            }

        }
    });
});