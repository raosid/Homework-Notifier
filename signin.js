/*
	Javascript file for handling the sign in of the user. 
*/

(function() {
	
	window.onload = function() {
		$("signinButton").onclick = signinCallback;
	}


	function signinCallback(authResult) {
		if (authResult['status']['signed_in']) {
		// Update the app to reflect a signed in user
		// Hide the sign-in button now that the user is authorized, for example:
		document.getElementById('signinButton').setAttribute('style', 'display: none');
		} else {
		// Update the app to reflect a signed out user
		// Possible error values:
		//   "user_signed_out" - User is signed-out
		//   "access_denied" - User denied access to your app
		//   "immediate_failed" - Could not automatically log in the user
		console.log('Sign-in state: ' + authResult['error']);
		}
	}
	/*
		Returns the DOM object of the element passed
		in as a parameter.
	*/
	function $(id) {
		return document.getElementById(id);
	}

})();
