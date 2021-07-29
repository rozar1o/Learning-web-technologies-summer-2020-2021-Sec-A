function ajax(){

	
	let email = document.getElementById('email').value;
	const http = new XMLHttpRequest();
	http.open('POST', `server.php`, true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send(`email=${email}`);
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
			
		}
	}
} 
function unsubscribe() {

	let email = document.getElementById('email').value;
	const http = new XMLHttpRequest();
	http.open('POST', `unsubscribe.php`, true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.send(`email=${email}`);
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
			
		}
	}
	// body...
}