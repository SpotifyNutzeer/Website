$(document).ready(function() {
    $('#urlshortener').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '/urlshortener.php',
            data: $(this).serialize(),
            success: async function (response) {
                var jsonData = JSON.parse(response);
                console.log(jsonData);

                if (jsonData.success === "1") {
                    document.getElementById("urlshortener-success").innerHTML = "Der Link wurde erstellt: <br><a href='" + jsonData.shortUrl + "'>" + jsonData.shortUrl + "</a>";
                    document.getElementById("urlshortener-success").style.visibility = "visible";
                } else {
                    document.getElementById("urlshortener-Error").innerText = jsonData.error;
                }
            }
        });
    });
});
