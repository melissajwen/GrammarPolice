var comments, 
correct = true; // assumes comment has no grammatical errors
var counter = 0;
setInterval(function() {
	comments = document.getElementsByClassName("comment-renderer-text-content");
	
	for(var i = 0; i < comments.length; i++) {
		if (counter == 10) break;
		counter += 1;
		if(correct == true) {
			console.log(comments[i]);
			// for(var j = 0; j < racism.length; j++) {
			// 	if(comments[i].innerHTML.toLowerCase().indexOf(racism[j]) != -1) {
			// 		comments[i].innerHTML = "This comment was suspended because it was deemed racist.";
			// 		comments[i].style = "color: #CE0D00; font-weight: bold";
			// 	}
			// }
		}
	}
}, 250);