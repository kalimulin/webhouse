$(function(){
    dataLoad();
})

function dataLoad(){
    $.post('mysql.php?data=all', function(data){
        console.log(data);
    }, "json")
}