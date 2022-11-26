
  
  // initialize firebase
  firebase.initializeApp(firebaseConfig);
  
  // reference your database
  var contactFormDB = firebase.database().ref("contactForm");
  
  document.getElementById("contactForm").addEventListener("submit", submitForm);
  
  function submitForm(e) {
    e.preventDefault();
  
    var username = getElementVal("username");
    var emailid = getElementVal("e-mail");
    var password = getElementVal("pass");
  
    saveMessages(username, emailid, password);
  
    //   enable alert
    document.querySelector(".alert").style.display = "block";
  
    //   remove the alert
    setTimeout(() => {
      document.querySelector(".alert").style.display = "none";
    }, 3000);
  
    //   reset the form
    document.getElementById("contactForm").reset();
  }
  
  const saveMessages = (username, emailid, password) => {
    var newContactForm = contactFormDB.push();
  
    newContactForm.set({
      username: username,
      emailid: e-mail,
      password: pass,
    });
  };
  
  const getElementVal = (id) => {
    return document.getElementById(id).value;
  };