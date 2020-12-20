<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="stolen.css">
        <title>Logkiller Quotes</title>
        <script src="https://memenoodles.us/jquery.js"></script>
        <link rel="icon" href="favicon.ico">
        <meta property="og:title" content="Logkiller Quotes" />
        <meta property="og:url" content="https://logkiller.memenoodles.us/" />
        <meta property="og:image" content="/model3.jpg" />
        <meta property="og:description" content="Quotes from a Tesla thief">
    </head>
    <body>
        <div class="container imgcont clickfornew">
            <h2>featured quote:</h2>
            <h6>click for more</h6>
            <img id="quote" src="rand_img_direct.php">

            <hr>
            <div class="footer">
                <p>originally made by alyx. code stolen and modified by icomputer7.</p>
                <a href="mailto:logkiller@memenoodles.us">suggestions or new quotes?</a>
                <br>
                <a href="/api">API documentation</a>
                <br>
                <a href="/quotes">Human readable list of all quotes</a>
            </div>
            <br>

        </div>
        <script>
            // :screaming_sun:
            var quotes = JSON.parse("[]");
            updateQuotesList();
            function newQuote() {
                console.log("getting new quote");
                var quote = quotes[Math.floor(Math.random() * quotes.length)];
                $("#quote").attr("src", quote);
            }

            setInterval(newQuote, 60000);
            setInterval(updateQuotesList, 600000)

            //Grab all of the quotes once in a while in case there are new ones
            function updateQuotesList() {
                $.get("quotes.php", function (data) {
                    console.log(data);
                    quotes = data;
                    console.log("updating quotes list");
                })
            }

            $(".clickfornew").click(function () {
                newQuote();
            });
        </script>
    </body>
</html>