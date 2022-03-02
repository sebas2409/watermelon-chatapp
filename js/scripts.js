let pusher = new Pusher('b32674861d96dba51b59', {
    cluster: 'eu'
});

let channel = pusher.subscribe('chatApp');
channel.bind('chatApp-event', function(data) {
    const d = new Date();
    let time = d.toLocaleTimeString();
    let nombre=(data["usuario"]);
    let mensaje=(data["mensaje"]);
    $('.card-body').append('<li>'+nombre+'</li>');
    $('.card-body').append('<small>'+mensaje+'</small><small style="float: right; color: #639ae7">'+time+'</small>');
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