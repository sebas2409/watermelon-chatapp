let pusher = new Pusher('b32674861d96dba51b59', {
    cluster: 'eu'
});

let channel = pusher.subscribe('chatApp');
channel.bind('chatApp-event', function(data) {
    let nombre = document.getElementById('usuario').value;
    const d = new Date();
    let time = d.toLocaleTimeString();
    $('.card-body').append('<li>'+nombre+'</li>');
    $('.card-body').append('<small>'+data+'</small><small style="float: right; color: #639ae7">'+time+'</small>');
});
function enviarDatos()
{
    $.ajax({
        type:'POST',
        url:'post.php',
        data:$('#formulario').serialize(),
        success: function (s) {
            console.log(s);
        }
    });
}