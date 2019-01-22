const url		= 'http://localhost:3000/';

function ajax(type, urlAPI ,data, successCallback, errorCallback ) {
	$.ajax({
		type ,
		url : url + urlAPI,
		data ,
		success: successCallback,
		error : errorCallback,
		dataType: 'json'
	});
}

// Register
function register(){
	const username          = $('#reg_username')[0].value;
	const name              = $('#reg_name')[0].value;
	const surname           = $('#reg_surname')[0].value;
	const email             = $('#reg_email')[0].value;
	const password          = $('#reg_password')[0].value;
	const confirm_password  = $('#reg_confirm_password')[0].value;
	const data = {
		username ,
		// name ,
		// surname ,
		// email ,
		password
	}
	console.log(username);

	ajax('POST', 'login' ,data, registerSuccess, registerError);
}

function registerSuccess(post) {
	console.log(post)
}

function registerError (error) {
	console.log(error)
}

// Login 
function login(){
	const username          = $('#log_username')[0].value;
	const email             = $('#log_email')[0].value;
	const password          = $('#log_password')[0].value;
	const duata = {
		username ,
		email ,
		password
	}
	console.log(username);

	ajax('POST', 'login' ,data, loginSuccess, loginError);
}

function loginSuccess(post) {
	console.log(post)
}

function loginError (error) {
	console.log(error)
}

// Update
function update(){
	var username          = $('#upd_username')[0].value;
	var name              = $('#upd_name')[0].value;
	var surname           = $('#upd_surname')[0].value;
	var email             = $('#upd_email')[0].value;
	var gps_location			= $('#age')[0].value;
	var age			= $('#age')[0].value;
	var gender		= $('#gender')[0].value;
	var oruentation	= $('#oruentation')[0].value;
	var bio			= $('#bio')[0].value;
	var hobbies		= $('#hobbies')[0].value;
	var password          = $('#upd_password')[0].value;
	var confirm_password  = $('#upd_confirm_password')[0].value;
	var data = {
		username ,
		name ,
		surname ,
		email ,
		password ,
		confirm_password
	}
	console.log(username);

	ajax('POST', 'update' ,data, updateSuccess, updateError);
}

function updateSuccess(post) {
	console.log(post)
}

function registerError (error) {
	console.log(error.responseText);
}

// 
// 
// 
