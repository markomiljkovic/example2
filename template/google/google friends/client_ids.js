//
// Client IDS
// Defines the CLIENT_ID (AppID's) of the OAuth2 providers
// relative to the domain host where this code is presented.

var location_https = window.location.href.indexOf('https://') === 0;


// Register your domain with Facebook at  and add here
var FACEBOOK_CLIENT_ID = {
	'dev.asys.b' : '1469360673372624',
}[window.location.hostname] ;

// Google Register --  https://console.developers.google.com
var GOOGLE_CLIENT_ID = '276566624751-uq4dgt76411r0d8emc6aq1hd7839quc0.apps.googleusercontent.com';

// To make it a little easier
var CLIENT_IDS = {

	google : GOOGLE_CLIENT_ID,
	facebook : FACEBOOK_CLIENT_ID
};
// To make it a little easier
var CLIENT_IDS_ALL = {
	
	google : GOOGLE_CLIENT_ID,
	facebook : FACEBOOK_CLIENT_ID
	
};
console.log('irta');


//
// OAUTH PROXY
//



//
// Redirect URI
//
var REDIRECT_URI = 'redirect.html';

if (typeof chrome === 'object' && typeof chrome.identity === 'object' && chrome.identity.launchWebAuthFlow) {
	console.log('je dame');
	REDIRECT_URI = 'https://'+window.location.hostname+'.chromiumapp.org/redirect.html';
}
