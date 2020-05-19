<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WebHouse.pro</title>
    <link rel="stylesheet" href="less/normalize.css">
    <link rel="stylesheet" href="less/styles.css">
    <link rel="stylesheet" href="less/jquery-confirm.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.muslider-2.0.min.js"></script>
    <script src="js/jquery-confirm.min.js"></script>
    <script>
        $(function(){
            $('input[type=submit]').on('click', function(e){
                e.preventDefault();
                loadData();
            });

            function loadData(){
                $.ajax({
                    url: 'mysql.php?act=load',
                    dataType: 'json',
                    success: function(data){
                        console.log(data);
                        var html = '<table>';
                        for(i = 0; i < data.length; i++){
                            html += '<tr>';
                                html += '<td>'+(i+1)+'</td>';
                                html += '<td>'+data[i]['contactName']+'</td>';
                                html += '<td>'+data[i]['contactEmail']+'</td>';
                                html += '<td>'+data[i]['contactPhone']+'</td>';
                            html += '</tr>';
                        }
                        html += '</table>';
                        $('.data').html(html);
                    }
                })
            }
        })
    </script>
</head>
<body>

<input type="submit" value="Загрузить">
<br/>
<div class="data">

</div>

</body>
</html>