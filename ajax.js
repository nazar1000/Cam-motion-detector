//for database support only ignore...

function sendData() {
    // if (true) return; //remove this for database
    let FoundResults = new Promise(function (myResolve, myReject) {
        fetch("db.php", {
            method: "POST",
            headers: {
                Accept: "application/json",
            },
            body: new FormData(document.getElementById("canvas_form")),
        })

            //Displays error messages or something
            // .then((response) => response.json())
            .then((text) => {
                myResolve(text);
            });
    });

    // FoundResults.then(function (text) {
    //     // console.log(text)
    // })
}