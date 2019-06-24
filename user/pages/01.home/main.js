var config = {
  apiKey: "AIzaSyDzp-Xh5y6lFkuVtUv857lpu9bDaS060oY",
  authDomain: "graficacion-ad2a6.firebaseapp.com",
  databaseURL: "https://graficacion-ad2a6.firebaseio.com",
  projectId: "graficacion-ad2a6",
  storageBucket: "graficacion-ad2a6.appspot.com",
  messagingSenderId: "283462417090",
  appId: "1:283462417090:web:d175456716ae787d"
};

// Reference messages collection
var messagesRef = firebase.database().ref('messages');

// Listen for form submit
document.getElementById('contactForm').addEventListener('submit', submitForm);

// Submit form
function submitForm(e){
  e.preventDefault();

  // Get values
  var name = getInputVal('name');
  var company = getInputVal('company');
  var email = getInputVal('email');
  var phone = getInputVal('phone');
  var message = getInputVal('message');

  // Save message
  saveMessage(name, company, email, phone, message);

  // Show alert
  document.querySelector('.alert').style.display = 'block';

  // Hide alert after 3 seconds
  setTimeout(function(){
    document.querySelector('.alert').style.display = 'none';
  },3000);

  // Clear form
  document.getElementById('contactForm').reset();
}

// Function to get get form values
function getInputVal(id){
  return document.getElementById(id).value;
}

// Save message to firebase
function saveMessage(name, company, email, phone, message){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    name: name,
    company:company,
    email:email,
    phone:phone,
    message:message
  });
}
