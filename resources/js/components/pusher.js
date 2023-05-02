
// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('81c959857176099d67b8', {
    cluster: 'sa1'
});

var channel = pusher.subscribe('my-channel');
channel.bind('my-event', function(data) {
    alert(JSON.stringify(data));
});

