$(function() {
    if($('table').is('.table')){
        dataLoad();
    }
});

function dataLoad(){
    $.ajax({
        type: "POST",
        url: "mysql.php?data=all",
        dataType: "JSON"
    }).success(function(data){
        var html = '<tr><th>ID</th><th>Имя</th><th>Email</th><th>Skype</th><th>Счет</th><th>&nbsp;</th></tr>';
        for (var i = 0; i < data.length; i++) {
            html += '<tr><td>'+data[i]['partner_id']+'</td><td>'+data[i]['contactName']+'</td>' +
            '<td>'+data[i]['contactEmail']+'</td><td>'+data[i]['contactSkype']+'</td><td>'+data[i]['summ']+'</td>' +
            '<td><button class="btn btn-info" data-action="editpartner" data-id="'+data[i]['partner_id']+'">' +
            '<span class="glyphicon glyphicon-pencil" aria-hidden="true" title="Изменить данные"></span></button>' +
            '&nbsp;<button class="btn btn-success" data-action="addbonus" data-id="'+data[i]['partner_id']+
            '"><span class="glyphicon glyphicon-plus" aria-hidden="true" title="Начислить бонус"></span></button></td>'
        }
        $('.table').html(html);
        $('button[data-action=addbonus]').on('click', function(){
            var id = $(this).data('id');
            swal({
                title: "Начислить бонус",
                text: "сумма начисения:",
                type: "input",
                showCancelButton: true,
                closeOnConfirm: false,
                animation: "slide-from-top",
                inputPlaceholder: "Введите сумму начисления"
            },

            function(inputValue){
                if (inputValue){
                    var num = inputValue.replace(',','.');
                    num = inputValue * 1;
                    if (inputValue === false) return false;
                    if (!num > 0) {
                        swal.showInputError("Укажите число!");
                        return false
                    }
                    $.ajax({
                        type: "POST",
                        url: "mysql.php",
                        data: "action=addbonus&id="+id+"&summ="+num
                    })
                        .success(function(data){
                            if(data === '1') {
                                swal("Успешно!", "Добавлено бонусов: " + num, "success");
                                dataLoad();
                            } else {
                                return false;
                            }
                        });
                }
            });
        });
        $('button[data-action=editpartner]').on('click', function(){
            var row = $(this).parents('tr');
            row.children().each(function(){
                if($(this).index() > 0 && $(this).index() < 4){
                    $(this).html('<input type="text" name="data'+$(this).index()+'" value="'+$(this).text()+'">')
                }
                if($(this).index() === 5){
                    $('table button').hide();
                    $(this).append('<button data-action="submit" class="btn btn-success">' +
                    '<span class="glyphicon glyphicon-ok" aria-hidden="true" title="Отправить"></span></button>&nbsp;' +
                    '<button data-action="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true" title="Отмена"></span></button>');
                    row.find('button[data-action=submit]').on('click', function(e){
                        e.preventDefault();
                        var id = row.children().first().text();
                        var name = row.find('input[name=data1]').val();
                        var email = row.find('input[name=data2]').val();
                        var skype = row.find('input[name=data3]').val();
                        $.ajax({
                            type: "POST",
                            url: "mysql.php",
                            data: "action=editpartner&id="+id+"&name="+name+"&skype="+skype+"&email="+email
                        }).success(function(data){
                            if(data === '1') {
                                swal("Успешно!", "Данные обновлены", "success");
                                dataLoad();
                            } else {
                                swal("Что-то не так", "Не удалось записать данные", "error");
                            }
                        })
                    })
                    row.find('button[data-action=reset]').on('click', function(e){
                        e.preventDefault();
                        dataLoad();
                    })
                }
            });
        })
    })
}