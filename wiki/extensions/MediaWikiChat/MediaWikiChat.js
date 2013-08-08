var last = '0';
var users = [];
var global;
var me;
var now;

function pad(num, size) {
    var s = num+"";
    while (s.length < size) s = "0" + s;
    return s;
}

function safe(string){
	var nochars = ['/', '(', ')', '[', ']', '{', '}', '.', '*', '+', '?', '^', '=', '!', ':', '$', '|', ' '];

	nochars.forEach(function(char){
		var patt = new RegExp('\\'+char, 'g');
		string = string.replace(patt, '');
		//console.log('/\\'+char+'/g');
	})
	
	return string;
}

function unique(array) {
    var a = array.concat();
    for(var i=0; i<a.length; ++i) {
        for(var j=i+1; j<a.length; ++j) {
            if(a[i] === a[j])
                a.splice(j--, 1);
        }
    }

    return a;
};


function timestampFromDate(date){
	var y = pad(date.getUTCFullYear(), 4);
    var m = pad(date.getUTCMonth() + 1, 2);
    var d = pad(date.getUTCDate(), 2);
    var h = pad(date.getUTCHours(), 2);
    var i = pad(date.getUTCMinutes(), 2);;
    var s = pad(date.getUTCSeconds(), 2);
	return y+m+d+h+i+s;
}

function prettyTimestamp(timestamp){
/*
	var y = timestamp.substring(0, 4);
	var m = pad(timestamp.substring(4, 6) - 1, 2);
	var d = pad(timestamp.substring(6, 8) - 1, 2);
	var h = pad(timestamp.substring(8, 10) + 1, 2);
	var i = timestamp.substring(10, 12);
	var s = timestamp.substring(12, 14);
*//*
	var dN = new Date();
	var dNt = timestampFromDate(dN);
	
	var diff = dNt - timestamp
	*/
	var d = new Date();
	var now = parseInt(d.getTime() / 10);
	
	var diff = (now - timestamp) / 100;
	//console.log(timestamp);
	//console.log(dNt);
	//console.log(diff);
	
	if(diff < 30){//30
		return "just now";
	} else if(diff < 90){//130
		return "a minute ago";
	} else if(diff < 3*60){//300
		return "2 minutes ago";
	} else if(diff < 7*60){//700
		return "5 minutes ago";
	} else if(diff < 12*60){//1200
		return "10 minutes ago";
	} else if(diff < 17*60){//1700
		return "quarter of an hour ago";
	} else if(diff < 23*60){//2500
		return "20 minutes ago"
	} else if(diff < 27*60){//2500
		return "25 minutes ago"
	} else if(diff < 37*60){//3700
		return "half an hour ago";
	} else if(diff < 50*60){//5000
		return "45 minutes ago";
	} else if(diff < 90*60){//13000
		return "an hour ago";
	} else if(diff < 2.5*60*60){//30000
		return "2 hours ago";
	} else if(diff < 3.5*60*60){//80000
		return "3 hours ago";
	} else if(diff < 4.5*60*60){//80000
		return "4 hours ago";
	} else if(diff < 5.5*60*60){//80000
		return "5 hours ago";
	} else if(diff < 6.5*60*60){//80000
		return "6 hours ago";
	} else if(diff < 7.5*60*60){//80000
		return "7 hours ago";
	} else if(diff < 8.5*60*60){//80000
		return "8 hours ago";
	} else if(diff < 11*60*60){//80000
		return "10 hours ago";
	} else if(diff < 18*60*60){//180000
		return "12 hours ago";
	} else if(diff < 106*60*60){//1060000
		return "yesterday";
	} else {//if(diff < 2000000){
		return "before yesterday";
	}
}

function redoTimestamps(){
	//console.log('redoing timestamps');
	
	$.each($(".mwchat-item-timestamp"), function(index, item){
		//console.log(item);
		var timestamp = $(this).attr('data-timestamp');
		var oldpretty = $(this).html();
		var newpretty = prettyTimestamp(timestamp);
		if( oldpretty != newpretty){
			$(this).fadeOut(250, function(){
				$(this).html(newpretty);
				$(this).fadeIn(250);
			});
		}
	});
}

var obj2;
var user2;

function getNew(called){
	
	//console.log("getNew");
	
	//console.log(last)
	//var time = stamp || last;//use stamp; if none; use last
	
	sajax_do_call(
		"getNew",
		[],
		function(request){
			
			//if(!called){
			//	var called = 'null';
			//}
			
			console.log('called from ' + called + ' at ' + new Date().getTime() );
			
    		//console.log(request);

			var data = JSON.parse(request.response);
			
			console.log(data);
			global = data;
			
			if('messages' in data){
			
				data['messages'].forEach(function(obj){
				addMessage(obj['name'], obj['message'], data['users'][obj['name']][1], obj['timestamp']);
				});
			
				//$("#mwchat-content").animate({scrollTop: $(this).scrollHeight}, 1000)
				var div = $("#mwchat-content");
				//div.scrollTop = div.scrollHeight;
				//div.animate({'scrollTop': div.scrollHeight}, 1000);//{'scrollTop', div.scrollHeight}
				//var objDiv = document.getElementById("mwchat-content");
				var objDiv = $("#mwchat-content");
				//objDiv.scrollTop = objDiv.scrollHeight;
				objDiv.animate({'scrollTop': div[0].scrollHeight}, 1000);


			}
			
			if('online' in data){
				doUsers(data['online'], data);
			}
			
			if('pms' in data){
				data['pms'].forEach(function(obj){
					
					if(users.indexOf(obj['conv']) != -1){
						
						console.log("doing conv" + obj['conv']);
					
						var Ruser = obj['conv'];
						console.log(obj);
						obj2 = obj;
						//console.log(Ruser+"user1");
						//console.log(safe(Ruser)+"user2");
						addPrivateMessage(obj['from'], Ruser, obj['message'], data['users'][obj['from']][1], obj['timestamp']);
						console.log(obj);
						//console.log(Ruser+'safe(user)');
						var div = $("#" + safe(Ruser) + " .mwchat-useritem-content");
						//div.scrollTop = div.scrollHeight;
						//div.animate({'scrollTop': div.scrollHeight}, 1000);//{'scrollTop', div.scrollHeight}
						//var objDiv = document.getElementById("mwchat-content");
						var objDiv = $("#" + safe(Ruser) + " .mwchat-useritem-content");
						//objDiv.scrollTop = objDiv.scrollHeight;
						objDiv.animate({'scrollTop': div[0].scrollHeight}, 1000);
					
					}
				});
			}
			
			if('me' in data){
				me = data['me'];
			}
			
			addMe(data);
			
			now = data['now'];
		}
	);
	var date = new Date();
	last = timestampFromDate(date);
}

function addMessage(user, message, url, timestamp){
	
	$(".mwchat-message").each(function(index, value){
		if($(value).children(".mwchat-item-timestamp").attr("data-timestamp") == timestamp){
			if($(value).children(".mwchat-item-user").html() == user){
				return;
			}
		}
	});
	
	var html = "<div class='mwchat-message'>";
	html += "<span class='mwchat-item-user'>";
	html += user;
	html += "</span>";
	html += "<img src='";
	html += url;
	html += "' />";
	html += "<span class='mwchat-item-message'>";
	html += message;
	html += "</span><span class='mwchat-item-timestamp' data-timestamp='" + timestamp + "'>";
	html += prettyTimestamp(timestamp);
	html += "</span></div>";

	//console.log(html);
	
	$("#mwchat-content").append(html);
}

var selector;
var ghtml;
var guser

function addPrivateMessage(user, convwith, message, url, timestamp){
	console.log("addPM");
	var userE = safe(user);
	var convwithE = safe(convwith);
	
	var html = "<div class='mwchat-message'>";
	html += "<img src='";
	html += url;
	html += "' alt='" + user + "' name='" + user + "' title='" + user + "' />";
	html += "<span class='mwchat-item-message'>";
	html += message;
	html += "</span><span class='mwchat-item-timestamp' data-timestamp='" + timestamp + "'>";
	html += prettyTimestamp(timestamp);
	html += "</span></div>";

	//console.log(html);
	
	$("#" + convwithE + " .mwchat-useritem-content").append(html);
	console.log("appending html to:");
	console.log($("#" + convwithE + " .mwchat-useritem-content"));
	console.log(html);
	ghtml = html
	selector = $("#" + convwithE + " .mwchat-useritem-content");
	guser = convwithE;
	
	if(user != me){	
		$("#" + convwithE).attr('data-read', 'true');
	}
}

function doUsers(newusers, data){
	var allusers = users.concat(newusers);
	allusers = unique(allusers);
	//console.log(users);
	//console.log(newusers);
	
	allusers.forEach(function(user){
		//console.log(user);
		if( newusers.indexOf(user) == -1){
			removeUser(user);
			//console.log('removing'+user);
		}  else if( newusers.indexOf(user) != -1 && users.indexOf(user) == -1 ){
			var mod = false;
			if(data['mods'].indexOf(user) != -1){
				mod = true;
			}
			addUser(user, data['users'][user][1], data['users'][user][0], mod);
			//console.log('adding'+user);
		} else {
			//console.log('doing nothingA');
		}
	})
	
	users = newusers;
}

function addUser(user, url, id, mod){
	var userE = safe(user);
	
	var add = true;
	
	$.each($("#mwchat-users div"), (function(index, item){
		
			if( item.id == user ){
				add = false;
			}
		})
	);
	if( add ){
		console.log("adding " + user);
		
		var html = "<div class='mwchat-useritem noshow' data-unread='' data-name='" + user + "' data-id='" + id + "' id='" + userE + "'><img src='";
		html += url;
		html += "' /><span class='mwchat-useritem-user'>";
		html += user;
		html += "</span>";
		if(mod){
			html += "<img src='http://meta.brickimedia.org/images/c/cb/Golden-minifigure.png' height='16px' alt='moderator' title='This user is a moderator' />";
		}
		html += "<div class='mwchat-useritem-window' style='display:none;'>";
		html += "<div class='mwchat-useritem-content'></div>";
		html += "<input type='text' placeholder='Type your private message' />"
		html += "</div>";
		html += "</div>";

		$("#mwchat-users").append(html);
		$("#mwchat-users #" + userE).fadeIn();
		$("#mwchat-users #" + userE).click(clickUser);

		$("#mwchat-users #" + userE + " input").keypress(userKeypress);
	}
}

function removeUser(user){
	var userE = safe(user);
	
	$("#mwchat-users #" + userE).remove();
}

function clickUser(e){
	//console.log("click");
	$(this).attr('data-read', '');	
	
	if($(this).hasClass('noshow')){
		$(this).children('.mwchat-useritem-window').slideDown();
	
		$(".mwchat-useritem.show .mwchat-useritem-window").slideUp();
		$(".mwchat-useritem.show").toggleClass('show noshow');
	
		$(this).toggleClass('show noshow');
	}

}

$($("#mwchat-type input")[0]).keypress(function(e) {

    if(e.which == 13 && e.shiftKey) {
    	
    	//$("#mwchat-type input").val( $("#mwchat-type input").val() + '\n' );
    	return false;
    	
    } else if(e.which == 13) {
		
		console.log('sendM');
        
        sajax_do_call(
        	"sendMessage",
        	[$("#mwchat-type input")[0].value],
        	function(request){
        		//do shiz
        		//console.log('keypress request');
        		//console.log(request);
                getNew('main input keypress');
                window.clearInterval(newInterval);
                newInterval = setInterval(getNew, interval);
        	}
        );
        
        $("#mwchat-type input").val('');
    }
});

function userKeypress(e) {
	//console.log('keypress');
	$(this).parents('.mwchat-useritem').attr('data-read', '');	
	
	//console.log('keypress' + e.which);
	
    if(e.which == 13) {
    	
    	var toname = $(this).parents('.mwchat-useritem').attr('data-name');
    	var toid = $(this).parents('.mwchat-useritem').attr('data-id');
		
		//console.log("sendPM");
        
        sajax_do_call(
        	"sendPM",
        	[$(this)[0].value, toname, toid],
        	function(request){
        		console.log(request);
                getNew('user keypress');
                window.clearInterval(newInterval);
                newInterval = setInterval(getNew, interval);
        	}
        );
        
    	$(this).val('');
        
    }
}

var amI = false;

function addMe(data){
	if(!amI){
		console.log("adding me");
		/*
		var html = "<div class='mwchat-useritem-me'><img src='";
		html += data['users'][data['me']][1];
		html += "' /><span class='mwchat-useritem-user'>";
		html += data['me'];
		html += "</span>";
		html += "</div>";
		*/
		console.log(data);
		$("#mwchat-me span").html(data['me']);
		
		$("#mwchat-me img").attr('src', data['users'][data['me']][1]);
		
		if(data['mods'].indexOf(data['me']) != -1){
			$("#mwchat-me").append("<img src='http://meta.brickimedia.org/images/c/cb/Golden-minifigure.png' height='20px' alt='moderator' title='This user is a moderator' />");
		}
		
		amI = true;
	}
}

getNew('starter');

interval = 15000;

setTimeout(getNew, 1500);

var newInterval = setInterval(getNew, interval);
var redoInterval = setInterval(redoTimestamps, interval/2);

