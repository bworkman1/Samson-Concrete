$(function() {

	$('.phone').mask('999-999-9999');
	
	document.getElementById('first_name').addEventListener("focusout",  
		function() { ContactForm.inputLettersOnly(document.getElementById('first_name'),  2)
	});

	document.getElementById('last_name').addEventListener("focusout",  
		function() { ContactForm.inputLettersOnly(document.getElementById('last_name'),  2)
	});

	document.getElementById('budget').addEventListener("change",  
		function() { ContactForm.hasValue(document.getElementById('budget')) 
	});

	document.getElementById('email').addEventListener("focusout", ContactForm.isValidEmail);

	document.getElementById('project').addEventListener("focusout",  
		function() { ContactForm.minLengthRequired(document.getElementById('project'),  50)
	});

	document.getElementById('submit-form').addEventListener("click", 
		function() { ContactForm.processForm(event) 
	});
	
});



var ContactForm = {

	FormInputIds: ['project', 'project_date', 'budget', 'phone', 'email', 'last_name', 'first_name', 'g-recaptcha-response'],

	processForm(event) {
		event.preventDefault();
		let form = [];
		var elements = document.forms['contact-form'].elements;
		const inputs = ContactForm.FormInputIds;

		for(var i in inputs) {
			
		}

		console.log(form);
	},

	minLengthRequired(elem, length = 0) {
		elem.value.length > length ? ContactForm.markInputValid(elem) : ContactForm.markInputInvalid(elem);
	},

	hasValue(elem) {
		console.log(elem.length);
		elem.value.length === 0 ? ContactForm.markInputInvalid(elem) : ContactForm.markInputValid(elem);
	},

	isErrors(elements) {
		var isErrors = false;
		FormInputNames
		return isErrors;
	},

	inputLettersOnly(elem, minLength = 0) { // LETTERS AND SPACES ONLY
		const regex = /^[a-zA-Z]*$/;  

		var isValid = regex.test(String(elem.value).toLowerCase());
	
		if(minLength > 0 && isValid) {
			isValid = elem.value.length < minLength ? false : true;
		}

		!isValid ? ContactForm.markInputInvalid(elem) : ContactForm.markInputValid(elem);
	},

	isValidEmail() {
		const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		const emailElem = document.getElementById('email');

		const isValid = regex.test(String(emailElem.value).toLowerCase());

		!isValid ? ContactForm.markInputInvalid(emailElem) : ContactForm.markInputValid(emailElem);
	},

	resetInput(elem) {
		elem.classList.remove("is-valid");
		elem.classList.remove("is-invalid");
	},

	markInputInvalid(elem) {
		ContactForm.resetInput(elem);
		elem.classList.add('is-invalid');
	},

	markInputValid(elem) {
		ContactForm.resetInput(elem);
		elem.classList.add('is-valid');
	},
}

