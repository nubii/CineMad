<script src="http://yui.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.17.2/build/tabview/assets/skins/night/tabview.css">
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.17.2/build/datatable/assets/skins/night/datatable.css">
<link rel="stylesheet" href="CSS/style.css" type="text/css">

<?php define( "TITLE", "Time | CineMad"); include( 'includes/header.php'); ?>
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
<!-- Add an additional blue button style -->
<div id="demo" class="yui3-skin-sam yui3-g"> <!-- You need this skin class -->

    <div id="leftcolumn" class="yui3-u">
        <!-- Container for the calendar -->
        <div id="mycalendar"></div>
    </div>
    <div id="rightcolumn" class="yui3-u">
        <div id="links" style="padding-left:20px;">
            <!-- The buttons are created simply by assigning the correct CSS class -->

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

        // Create a new instance of calendar, placing it in
        // #mycalendar container, setting its width to 340px,
        // the flags for showing previous and next month's
        // dates in available empty cells to true, and setting
        // the date to today's date.
        var calendar = new Y.Calendar({
            contentBox: "#mycalendar",
            width:'340px',
            showPrevMonth: true,
            showNextMonth: true,
            date: new Date()}).render();


        // Get a reference to Y.DataType.Date
        var dtdate = Y.DataType.Date;

        // Listen to calendar's selectionChange event.
        calendar.on("selectionChange", function (ev) {
            var newDate = ev.newSelection[0];
            //Created a newerdate with the format to later include in the inputfeild
            var newerDate = dtdate.format(newDate);

            YUI().use('node', function(Y) {
                var input = Y.one('#dateEntry');
                input.set('value', newerDate );
            });
            // Get the date from the list of selected
            // dates returned with the event (since only
            // single selection is enabled by default,
            // we expect there to be only one date)

            // Format the date and output it to a DOM
            // element.


        });
        // When the 'Show Previous Month' link is clicked,
        // modify the showPrevMonth property to show or hide
        // previous month's dates
        Y.one("#togglePrevMonth").on('click', function (ev) {
            ev.preventDefault();
            calendar.set('showPrevMonth', !(calendar.get("showPrevMonth")));
        });

        // When the 'Show Next Month' link is clicked,
        // modify the showNextMonth property to show or hide
        // next month's dates
        Y.one("#toggleNextMonth").on('click', function (ev) {
            ev.preventDefault();
            calendar.set('showNextMonth', !(calendar.get("showNextMonth")));
        });
    });

</script>
</section>
</main>
<?php include( 'includes/footer.php'); ?>