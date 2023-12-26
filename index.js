/* here write the js code for that when select the admin option then show for a admin code input*/
const toggleAdminCode =()=> {
    var userTypeSelect = document.getElementById("userType");
    var adminCodeContainer = document.getElementById("adminCodeContainer");

    if (userTypeSelect.value === 'admin') {
        adminCodeContainer.style.display = 'block';
    } else {
        adminCodeContainer.style.display = 'none';
    }
}



/*confirm the passworn match */
const matchpass = () => {
    pass = document.getElementById('password').value
    conpass = document.getElementById('conpass').value;

    if (pass != conpass) {
        document.getElementById('match').style.display = 'block';
    } else {
        document.getElementById('match').style.display = 'none';
    }
}


/*check the admin code here*/
const codeCheck = () => {
    admincode = document.getElementById('secureKey').value;

    if (admincode !== 'dhaka54367') {
        document.getElementById('codetext').style.display = 'block';
    } else {
        document.getElementById('codetext').style.display = 'none';
    }
}


function validateForm() {
    return document.getElementById('match').style.display !== 'block' && document.getElementById('codetext').style.display !== 'block';
}



