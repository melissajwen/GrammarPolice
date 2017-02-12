var comments, 
	correct = true; // assumes comment has no grammatical errors

setInterval(function() {
	comments = document.getElementsByClassName("comment-renderer-text-content");
	for(var i = 0; i < comments.length; i++) {
		if(correct == false) {
			for(var j = 0; j < racism.length; j++) {
				if(comments[i].innerHTML.toLowerCase().indexOf(racism[j]) != -1) {
					comments[i].innerHTML = "This comment was suspended because it was deemed racist.";
					comments[i].style = "color: #CE0D00; font-weight: bold";
				}
			}
		}
	}
	if(numCensored != 0) {
		document.title = "CENSORED: " + numCensored;
	}
}, 250);