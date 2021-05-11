$(document).ready(function () {
    let rdata, elem, id, head, f, a, stat;
    let voteList = document.getElementsByClassName('voteList')[0];

    class createPosts{
        constructor(_id, _head, _v1, _v2, _stat){
            this.id = _id;
            this.head = _head;
            this.v1 = _v1;
            this.v2 = _v2;
            this.stat = _stat;
        }

        checkStatus(){
            if(this.stat == 2){
                return '<strong class="text-success">Одобрено!</strong>'
            }
            else if(this.stat == 3){
                return '<strong class="text-danger">Отклонено!</strong>';
            }
        }

        createPost(){
            elem = document.createElement('div');
            elem.setAttribute('class', 'votePost w-100 d-flex flex-row');
            id = document.createElement('strong');
            id.innerHTML ='Голосование № ' + this.id;
            head = document.createElement('div');
            head.innerHTML = this.head;
            f = document.createElement('div');
            f.innerHTML = `<strong class="text-success">За ${this.v1}</strong>`;
            a = document.createElement('div');
            a.innerHTML = `<strong class="text-danger">Против ${this.v2}</strong>`;
            stat = document.createElement('div');
            stat.innerHTML = this.checkStatus();
            elem.appendChild(id);
            elem.appendChild(head);
            elem.appendChild(f);
            elem.appendChild(a);
            elem.appendChild(stat);
            voteList.appendChild(elem);
        }
    }

    $.ajax({
        type: "post",
        url: "php/voting/request.php",
        data: "data",
        success: function (data) {
            if (data.length > 3) {
                rdata = JSON.parse(data);
                for (let i = 0; i < rdata.length; i++) {
                    let cp = new createPosts(rdata[i][4], rdata[i][0], rdata[i][1], rdata[i][2], rdata[i][3]);
                    cp.createPost();
                }
            }
            else{
                voteList.innerHTML =  '<strong class="text-muted empty pb-5">Нет доступных голосований</strong>';
            }
        }
    });
});