var socket = io.connect( 'http://localhost:8090' );

$( '#messageForm' ).submit( function() {
    
    //Emit a blank message to all connected clients
    socket.emit( 'message', { } );

    return false;
});

socket.on( 'message', function( data ) {
    var actualContent = $( "#messages" ).html();
    var newMsgContent = '<li> <strong>' + data.name + '</strong> : ' + data.message + '</li>';
    var content = newMsgContent + actualContent;

    $( "#messages" ).html( content );
});