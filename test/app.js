function addElement() {
    document.getElementByID("body").append(" Document added! ")
}

function submitForm() {

    var http = new XMLHttpRequest();
    http.open("POST", '/test/submit.php', true);
    http.setRequestHeader("Content-Type", "application/json");
    var payload = { name: document.getElementById('name').value, mail: document.getElementById('mail').value };
    var body = JSON.stringify(payload);
    http.onreadystatechange = (oEvnet) => {
        if (http.readyState === 4) {
            if (http.status >= 200 && http.status < 300) {
                console.log(http.responseText);
            } else {
                console.error("Error", http.statusText);
            }
        }
    };
    http.send(body);
    // http.onload = () => {
    //     console.log(http.response);
    // }

}
