<?php

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easy Date Picker Leveraging the Power of The JQUERY Datepicker Widget </title>
    <meta name="author" content="Jason Nobles">
    <meta name="description" content="Easy To Use JQuery Date Picker Created By Jason Nobles Updated October 2022">
    <meta name="keywords" content="date picker, datepicker, date selector widget, jquery date picker widget">
    
    <!--jQuery UI CSS-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <!--10/22 Updated code to use PICO CSS a classless CSS framework that simplies code-->
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    


</head>
    <body>
        
        <!--styles for project-->
        <style>
        /*to center on the screen*/
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }


        body{
            padding: 10;
            margin: 15;
        }


        /*tablet laptap and desktop*/
        @media screen and (min-width : 600px) {

            /* for larger screens the form is wider, the date button
            is smaller and the date picker is larger*/

            #form
            {
                max-width: 500px;
                width: 100%;
                padding: 10px;
                margin: auto;
                background-color: whitesmoke;
                text-align: center;
                border-radius: 7px;
                box-shadow: 0px 0px 10px #000000;
                outline: none;
                transition: 0.5s linear;

            }


            #datepicker
            {
                display: none;
                max-width: 300px;
            }

            /*---datepicker styling changes---*/

            /*--rounding the edges of the date picker table--*/

            .ui-datepicker
            {
                border-radius: 6px;
                max-width: 300px;
            }
        }

        /*### Smartphones (portrait and landscape)(small)### */
        @media screen and (min-width : 0px) and (max-width : 600px){

            /* for smaller screens the form is narrow, the date button
            is larger and the date picker is smaller*/

            #form
            {
                max-width: 300px;
                width: 100%;
                padding: 10px;
                margin: auto;
                background-color: whitesmoke;
                text-align: center;
                border-radius: 7px;
                box-shadow: 0px 0px 10px #000000;
                outline: none;
                transition: 0.5s linear;

            }

            #datepicker
            {
                display: none;
                max-width: 200px;
            }

            /*---datepicker styling changes---*/

            /*--rounding the edges of the date picker table--*/

            .ui-datepicker
            {
                border-radius: 5px;
                max-width: 200px;
            }

        }


        /* styling for misc parts of form*/
        #instructions
        {
            padding-bottom: 15px;
            font-size: 22px;
        }
        #details
        {
            color: grey;
            padding-bottom: 15px;
        }

        #border
        {
            border-top:1px dashed lightgray;
            padding-bottom: 10px;
        }
        i
        {
            width: 25px;
            font-size: 30px;
            padding-bottom: 15px;
            text-align: center;
        }
        #ierror
        {
            width: 25px;
            font-size: 30px;
            color: red;
            transition: 0.5s linear;
        }
        #iaffirmation
        {
            width: 25px;
            font-size: 30px;
            transition: 0.5s linear;
        }
        #ichecking
        {
            width: 25px;
            font-size: 30px;
            color: orange;
            transition: 0.5s linear;
        }

        /*two input fields in this form*/

        /*****#standardDate -- receives standard date upon selection of widget --hidden on form****/

        #standardDate
        {
            display: none;
        }

        /*****#prettyDate -- receives standard date upon selection of widget --hidden on form****/

        #prettyDate
        {
            display: none;
        }


        /*#dateButton -- hover*/


        #dateButton:hover
        {
            box-shadow: 0px 0px 8px #000000;
            outline: none;
            transition: 0.5s linear;
        }

        /*----DATE PICKER -------*/



        /* Centering the date picker ---requires two divs ---*/

        #datepicker-container{

            text-align:center;

        }
        #datepicker-center{
            display:inline-block;
            margin:0 auto;
        }

        /*--changing the color of the header and rounding the header--*/

        .ui-datepicker-header
        {

            border-radius: 10px;

        }

        /*--changing the color of the wording in the header section of the calendar table--*/

        .ui-datepicker-month
        {
    /*        using default PICO CSS*/
        }
        .ui-datepicker-year
        {
    /*        using default PICO CSS*/
        }

        /*---great feature in the widget to allow the weekends to be removed seemlessly via CSS---*/

        .ui-datepicker-week-end
        {
            display: none;
        }

        /*---The span below though generic, it is the days of the week at the top of calendar table ---*/

        span
        {
    /*        using default PICO CSS*/
        }

        /*---------------THE CSS MAGIC SHOW BEGINS-----------*/
        /*---This below three style changes are where the magic happens. The order matters. All the wordiness matters too.
        The effect I was going for with these changes is displayed in the form. I like greens and grays with off whites
         for a smoother color scheme in the unselected default.
         1.
         I opted for dimgray over the black for the date numbers.That is the first change.
         2.
         I opted for a nice light green for the selected color along with a gray border over the harsh blue in the default
         I also added a border-radius to round the little date box that was selected.
         3.
         The final change was to center all the numbers and add a border-radius for rounding all the little date boxes too.

         While the above may seem easy it took a full day to figure out by fooling around with the code. The order matters.
         */

        .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active  {
            color: dimgray;
        }
        .ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
            border: 1px solid darkgray;
            font-weight: normal;
            color: #ffffff;
            border-radius: 5px ;
        }

        .ui-datepicker td span, .ui-datepicker td a {
            display: block;
            padding: .2em;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        /*---MORE MAGIC----*/

        /* altering the little next triangle slightly for appeal*/


        /*-- on the right top and left top of the calendar- the next button for another month selection or previous month---*/

        .ui-icon-circle-triangle-e

        {

            border-radius: 10px;

        }

        .ui-icon-circle-triangle-w
        {

            border-radius: 10px;

        }

        /*--- hover effect on little next buttons------*/

        .ui-state-hover, .ui-widget-content  .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-widget-header .ui-state-focus, .ui-button:hover, .ui-button-focus    {

            background-color: lightgray;
            border-radius: 20px;
        }

</style>

        <p>Jason Nobles Web Development Presents This Easy JQuery Date Picker Widget For Any Form</p>
        
        <!--DATE SELECTION WIDGET-->
        <article style="max-width: 600px">
            <div>
                <header style="text-align: center">
                    <i class="fal fa-calendar-check"></i>
                    <h1>Pick Your Date</h1>
                    <h4>Click Below To Choose Your Date</h4>
                </header>

                <!-------CENTERING CONTAINERS ---------->


                <div id="datepicker-container">
                    <div id="datepicker-center">

                        <!--DATE SELECTION BUTTON TRIGGERS JQUERY CALENDAR TO LOAD VIA JQUERY EVENT-->
                        <div><button id="dateButton"  type="button"></button></div>

                        <!--DIV FOR JQUERY DATEPICKER WIDGET TO LOAD DYNAMICALLY--->

                        <div id="datepicker"></div>

                        <!---------------HIDDEN INPUT FIELDS----------->

                        <!--STANDARD DATE "mm/dd/yy" FOR DB OPS-->

                        <input type="text" id="standardDate" name="date" disabled>

                        <!--PRETTY DATE "DD MM DD, yy" FOR DISPLAY AND PRESENTATION PASSED IN DYNAMICALLY AS THE ALTFIELD AND ALTFORMAT-->

                        <input type="text" id="prettyDate" type="hidden" disabled>
                    </div>
                </div>

                <!-- DIV FOR SUCCESS AND ERROR MESSAGES DYNAMICALLY PROVIDED-->

                <div id="calmsg"></div>

            </div>
        </article>
        <p>This is a fully functioning Date Selector Widget leveraging the power of jQuery to allow users to easily select a date. It has a hidden form and two fields for extracting the date and a modified version of the date. In this example, we make the date to display pretty. Jason Nobles is the developer of this widget contact him at everydayjason@gmail.com for a copy of the well documented one page source code. This custom developed date widget can be added to any HTML form.</p>

        <!--font awesome for the icon-->
        <script src="https://kit.fontawesome.com/ae7b53cfc7.js" crossorigin="anonymous"></script>
        
        <!--JQuery Scripts Needed For Project-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        <!--custom script to control functionality of date widget-->
        <script>
        $(document).ready(function () {

            var date="";
            $('#calmsg').hide();
            $('#dateButton').html("Select Date");

            $("#dateButton").click(function () {
                date="";
                $('#calmsg').html("");
                $('#dateButton').hide();
                $("#datepicker").show();
                $('html, body').animate({
                    scrollTop: $("#datepicker").offset().top
                }, 500)
                $("#datepicker").datepicker({

                    beforeShowDay: $.datepicker.noWeekends,
                    dateFormat: "mm/dd/yy",
                    minDate: 1,
                    maxDate: 21,
                    altFormat: "DD MM dd, yy",
                    altField: "#prettyDate",
                    onSelect: function () {
                        date = $(this).val();
                        $("#standardDate").val(date);
                        console.log(date);
                        var prettyDate = $('#prettyDate').val();
                        console.log(prettyDate);
                        $("#datepicker").hide();
                        $('#dateButton').show();
                        $('#dateButton').html("Make Changes");
                        $('#calmsg').show();
                        $('#calmsg').html("<div style='text-align: center'><i id='affirmation' class='far fa-check'></i> &nbsp;&nbsp;"+prettyDate+"</div>")

                    }
                })
            })
        });

</script>

    </body>
</html>
