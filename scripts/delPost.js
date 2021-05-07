class delElement{
    constructor(_id){
        this.id = _id;
    }
    del(){
        let conf = confirm('Вы уверены что хотите удалить данный пост?');
        alert(conf);
        if(conf == true){
            $.ajax({
                type: "post",
                url: "php/comments/delPost.php",
                data: {id : this.id},
                success: function (data) {
                    console.log(data);
                }
            });
        }
    }
}
