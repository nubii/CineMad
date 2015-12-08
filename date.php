<script src="http://yui.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.17.2/build/tabview/assets/skins/night/tabview.css">
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.17.2/build/datatable/assets/skins/night/datatable.css">
<link rel="stylesheet" href="CSS/style.css" type="text/css">

<?php define( "TITLE", "Date | CineMad"); include( 'includes/header.php'); ?>
<!--========================================================
                              CONTENT
    =========================================================-->

<style>
    .yui3-button {
        margin:10px 0px 10px 0px;
        color: #fff;
        background-color: #3476b7;
    }
</style>
<body class="yui3-skin-sam">

 <main>
        <section class="well well__offset-3">
            <div class="container">
<div id="demo" class="yui3-skin-sam yui3-g"> 

    <div id="leftcolumn" class="yui3-u">
        <!-- Container for the calendar -->
        <div id="mycalendar"></div>
    </div>
    <div id="rightcolumn" class="yui3-u">
        <div id="links" style="padding-left:20px;">
            <form action="time.php" method="post">

            Selected date: <input id="dateEntry" value="Please select a day" name="cdate">
                <input type="submit" value="submit">
            </form>
        </div>
    </div>
</div>


<script type="text/javascript">
    var element = document.getElementById("total");
    element.value = cakef;
    element.form.submit();
</script>
</body>
<script type="text/javascript">
    document.getElementById("button").addEventListener('click', function () {
        var text = document.getElementById('text');
        text.text = (text.text + ' after clicking');
    });
</script>
<script type="text/javascript">


    YUI().use('calendar', 'datatype-date', 'cssbutton',  function(Y) {

        var calendar = new Y.Calendar({
            contentBox: "#mycalendar",
            width:'340px',
            showPrevMonth: true,
            showNextMonth: true,
            date: new Date()}).render();


        var dtdate = Y.DataType.Date;

        calendar.on("selectionChange", function (ev) {
            var newDate = ev.newSelection[0];
            var newerDate = dtdate.format(newDate);

            YUI().use('node', function(Y) {
                var input = Y.one('#dateEntry');
                input.set('value', newerDate );
            });


        });
        Y.one("#togglePrevMonth").on('click', function (ev) {
            ev.preventDefault();
            calendar.set('showPrevMonth', !(calendar.get("showPrevMonth")));
        });

        Y.one("#toggleNextMonth").on('click', function (ev) {
            ev.preventDefault();
            calendar.set('showNextMonth', !(calendar.get("showNextMonth")));
        });
    });

</script>
</div>
</section>
</main>
<?php include( 'includes/footer.php'); ?>