<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div>
        <div class="row">
            <div class="col-6 form-group">
                <input type="text" class="form-control" id="name">
            </div>
            <div class="col-6 form-group">
                <input type="text" class="form-control" id="price">
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-group">
                <input type="text" class="form-control" id="avt">
            </div>
        </div>
        <button id="btn" class="btn btn-primary">Send</button>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function (){
        $('#btn').click(function (){
            $.ajax({
                url:'',
                method:'',
                dataType:'',
                data:{
                    name:$('#name').val(),
                    price:$('#price').val(),
                    avt:$('#avt').val()
                },
                success: function (data){
                    alert('Thêm mới thành công')
                    window.location.href = 'http://localhost:8000/'
                }
            })
        })
    })
</script>
</body>
</html>
