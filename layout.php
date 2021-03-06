<!DOCTYPE html>
<html>

<head>
    <title>Ardulous</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/posts.js"></script>
    <style>
        #holder {
            margin: 10vh 50vw 40vh 37vw;
        }
    </style>

</head>

<body>
    <div id="particles-js" style="position:fixed"></div>
    <nav id="navbar">
        <p id="logo">
            <b>Ardulous</b>
        </p>
        <div id="searchbarwrapper">
            <form action="/search" method="POST" id="searchform">
                <input name="search" type="text" id="searchbar" />
            </form>
        </div>
        <div class="navitems" id="search" onclick="document.getElementById('searchform').submit();">
            <span class="glyphicon glyphicon-search"></span> Search
        </div>
        <div class="navitems" id="home" onclick="window.location='/dashboard'">
            <span class="glyphicon glyphicon-home"></span> Home
        </div>
        <div class="navitems">
            <span class="glyphicon glyphicon-envelope"></span> Messages
        </div>
        <div class="navitems">
            <span class="glyphicon glyphicon-globe"></span> Notifs
        </div>
        <div class="navitems">
            <span class="glyphicon glyphicon-cog"></span> Settings
        </div>
        <div class="navitems" onclick="window.location='/logout'">
            <span class="glyphicon glyphicon-log-out"></span> Logout
        </div>
    </nav>

    <main role="main">
        {% block body %}{% endblock %}
    </main>

    <div id="footer">
        <footer class="container">
            <hr />
            <p>&copy; Ardulous 2018</p>
        </footer>
    </div>

</body>
<script type="text/javascript">
    particlesJS.load("particles-js", "js/particlesjs-config.json");
</script>

</html>