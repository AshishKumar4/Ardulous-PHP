{% extends "internal/layout.html" %}
{% block body %}
<div id="main">
    <div id="left-sidebar" style="width:15vw;">

    </div>
    <div id="right-sidebar" style="width:15vw">

    </div>
    <link href="css/profileMiniCards.css" rel="stylesheet">
    <link href="css/cards.css" rel="stylesheet">
    <div id="wall" style="width:69vw">
    </div>
</div>
<script>
    loadMiniProfileCards('{{ byid | safe }}', "id");
    loadMiniProfileCards('{{ byname | safe }}', "Name");
    loadMiniProfileCards('{{ byemail | safe }}', "Email");
</script> 
{% endblock %}