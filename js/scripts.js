let pusher = new Pusher('b32674861d96dba51b59', {
    cluster: 'eu'
});

let channel = pusher.subscribe('chatApp');
channel.bind('chatApp-event', function(data) {
    const d = new Date();
    let time = d.toLocaleTimeString();
    let nombreE = document.getElementById('usuario').value;
    let nombre=(data["usuario"]);
    let mensaje=(data["mensaje"]);
    if (nombreE !== nombre){
        $('.card-body').append('<li style="color: #e75e35">'+nombre+'</li>');
        $('.card-body').append('<small style="color: #e75e35">'+mensaje+'</small><small style="float: right; color: #639ae7">'+time+'</small>');
        $('.card-body').scrollTop($('.card-body').prop('scrollHeight'));
    }else {
        $('.card-body').append('<li style="color: #8648c7">'+nombre+'</li>');
        $('.card-body').append('<small style="color: #8648c7">'+mensaje+'</small><small style="float: right; color: #639ae7">'+time+'</small>');
        $('.card-body').scrollTop($('.card-body').prop('scrollHeight'));
    }
    document.getElementById('mensaje').value='';
});
function enviarDatos()
{
    $.ajax({
        type:'POST',
        url:'post.php',
        data:$('#formulario').serialize(),
        success: function (s) {
            console.log();
        }
    });
}