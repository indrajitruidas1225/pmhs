
function sendEmail() {
    emailjs.init("hu-VGW1DOI1J8hVsT");
    var name = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
    var message = document.getElementById("message").value;
    var params = {
        name: name,
        email: email,
        message: message,
        mobile: mobile
    };
    const ServiceID = "service_k6m3n0o"
    const templateID = "template_2dipp64"
    emailjs.send(ServiceID, templateID, params)
        .then(function (name) {
            alert("Your mail was sent successfully !")
        });
}