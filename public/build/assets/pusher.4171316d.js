Pusher.logToConsole=!0;var n=new Pusher("81c959857176099d67b8",{cluster:"sa1"}),r=n.subscribe("my-channel");r.bind("my-event",function(e){alert(JSON.stringify(e))});
