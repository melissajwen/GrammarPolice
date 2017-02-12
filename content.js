var comments, 
	counter = 0,
	correct = true; // assumes comment has no grammatical errors

// For Demo purposes only
var str = "Your a engineer";
var corrections = ["You're", "an"];
var indices = [0, 5];

function changes(string, fixes, locations){
	var newString = "";
	var current = string.split(" ");

	var addition = 0;
	var currentLocation = 0;
	var positions = [];

	for(i = 0; i < current.length; i++){
		positions.push(currentLocation);
		currentLocation += (1 + current[i].length);
	}

	var k = 0;
	for(j = 0; j < positions.length; j++){
		if(positions[j] == locations[k]){
			current[j] = fixes[k];
			k++;
		}
		if(k == locations.length){
			break;
		}
	}

	for(m = 0; m < current.length; m++){
		newString += current[m];
		if(m < current.length - 1){
		newString += " ";
		}
	}
	return newString;
}

console.log(changes(str, corrections, indices));

function decode(url) {
	_url = url;
	$.ajax({
	    url: _url,
	    type: 'GET',
	    dataType: "json",
	});
}

function flag(string) {
	string.style = "color: #CE0D00; font-weight: bold";
}

setInterval(function() {
	comments = document.getElementsByClassName("comment-renderer-text-content");
	
	for(var i = 0; i < comments.length; i++) {
		if (counter == 10) break;
		
		var string = comments[i].innerHTML;
		var url1 = "https://api.textgears.com/check.php?text=";
		var url2 = "&key=YSTGsMmcfV1gFj4c";
		var _url = url1.concat(string, url2);
		_url = _url.split(/ /g).join('+');
		// REMEMBER TO HANDLE EDGE CASES: </B> AND PARAGRAPH BREAK

		// Decode JSON file
		var json = decode(_url);
		var obj = JSON.parse(json);
		if (obj.scores != 100) {
			correct = false;
		}
		var new_string = changes(string, obj.errors.better, obj.errors.offset);

		if (correct == false) {
			flag(comments[i].innerHTML);
			comments[i].innerHTML = new_string;
		}
		counter += 1;
	}
}, 250);