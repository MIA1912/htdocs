<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time</title>
    <style>
        tr {
            vertical-align: top;
        }

        tr #judul {
            column-span: 3;
            background-color: silver;
        }
    </style>
</head>

<body>
    <!-- 
     sintaks :
     date(format, timestamp)

     Parameter	Description

     format	    Required. Specifies the format of the timestamp
     timestamp	Optional. Specifies a timestamp. Default is the current date and time


         Berikut adalah beberapa karakter yang biasa digunakan untuk tanggal:

     d - Mewakili hari dalam sebulan (01 hingga 31)
     m - Mewakili satu bulan (01 hingga 12)
     Y - Mewakili satu tahun (dalam empat digit)
     l (huruf kecil 'L') - Mewakili hari dalam seminggu
     Karakter lain, seperti "/", ".", atau "-" juga dapat disisipkan di antara karakter untuk menambahkan pemformatan tambahan. -->

    <?php
    $message = "Hari ini";
    echo "$message " . date("d/m/Y") . "<br>";
    echo "$message " . date("d.m.Y") . "<br>";
    echo "$message " . date("d-m-Y") . "<br>";
    echo "$message " . date("l") . "<br>";

    ?>
    <!-- Gunakan date()fungsi untuk secara otomatis memperbarui tahun hak cipta di situs web Anda: -->
    <div>
        &copy; 2002-<?php echo date("Y") ?>
    </div>

    <!-- 
    H - 24-hour format of an hour (00 to 23)
    h - 12-hour format of an hour with leading zeros (01 to 12)
    i - Minutes with leading zeros (00 to 59)
    s - Seconds with leading zeros (00 to 59)
    a - Lowercase Ante meridiem and Post meridiem (am or pm) -->

    <?php
    echo "Date and Time now is " . date("D") . "<br>";
    ?>

    <p>
        The format of the outputted date string. See the formatting
        options below. There are also several
        predefined date constants
        that may be used instead, so for example DATE_RSS
        contains the format string 'D, d M Y H:i:s'.
    </p>
    <p>
        <br>
        The following characters are recognized in the
        format parameter string:
        <br><br>
    <table>
        <caption>Function Date and Time</caption>
        <tr id="judul">
            <th>format character</th>
            <th>Description</th>
            <th>Example returned values</th>
        </tr>
        <tr>
            <td><strong>Day</strong></td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>d</td>
            <td>Day of the month, 2 digits with leading zeros</td>
            <td>01 to 31</td>
        </tr>
        <tr>
            <td>D</td>
            <td>A textual representation of a day, three letters</td>
            <td>Mon through Sun</td>
        </tr>
        <tr>
            <td>j</td>
            <td>Day of the month without leading zeros</td>
            <td>1 to 31</td>
        </tr>
        <tr>
            <td>l (lowercase 'L')</td>
            <td>A full textual representation of the day of the week</td>
            <td>Sunday through Saturday</td>
        </tr>
        <tr>
            <td>N</td>
            <td>ISO-8601 numeric representation of the day of the week (added in
                PHP 5.1.0)</td>
            <td>1 (for Monday) through 7 (for Sunday)</td>
        </tr>
        <tr>
            <td>S</td>
            <td>English ordinal suffix for the day of the month, 2 characters</td>
            <td>
                st, nd, rd or
                th. Works well with j
            </td>
        </tr>
        <tr>
            <td>w</td>
            <td>Numeric representation of the day of the week</td>
            <td>0 (for Sunday) through 6 (for Saturday)</td>
        </tr>
        <tr>
            <td>z</td>
            <td>The day of the year (starting from 0)</td>
            <td>0 through 365</td>
        </tr>
        <tr>
            <td><b>Week</b></td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>W</td>
            <td>ISO-8601 week number of year, weeks starting on Monday (added in PHP 4.1.0)</td>
            <td>Example: 42 (the 42nd week in the year)</td>
        </tr>
        <tr>
            <td><b>Month</b></td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>F</td>
            <td>A full textual representation of a month, such as January or March</td>
            <td>January through December</td>
        </tr>
        <tr>
            <td>m</td>
            <td>Numeric representation of a month, with leading zeros</td>
            <td>01 through 12</td>
        </tr>
        <tr>
            <td>M</td>
            <td>A short textual representation of a month, three letters</td>
            <td>Jan through Dec</td>
        </tr>
        <tr>
            <td>n</td>
            <td>Numeric representation of a month, without leading zeros</td>
            <td>1 through 12</td>
        </tr>
        <tr>
            <td>t</td>
            <td>Number of days in the given month</td>
            <td>28 through 31</td>
        </tr>
        <tr>
            <td><b>Year</b></td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>L</td>
            <td>Whether it's a leap year</td>
            <td>1 if it is a leap year, 0 otherwise.</td>
        </tr>
        <tr>
            <td>o</td>
            <td>ISO-8601 year number. This has the same value as
                Y, except that if the ISO week number
                (W) belongs to the previous or next year, that year
                is used instead. (added in PHP 5.1.0)</td>
            <td>Examples: 1999 or 2003</td>
        </tr>
        <tr>
            <td>Y</td>
            <td>A full numeric representation of a year, 4 digits</td>
            <td>Examples: 1999 or 2003</td>
        </tr>
        <tr>
            <td>y</td>
            <td>A two digit representation of a year</td>
            <td>Examples: 99 or 03</td>
        </tr>
        <tr>
            <td><strong>Time</strong></td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>a</td>
            <td>Lowercase Ante meridiem and Post meridiem</td>
            <td>am or pm</td>
        </tr>
        <tr>
            <td>A</td>
            <td>Uppercase Ante meridiem and Post meridiem</td>
            <td>AM or PM</td>
        </tr>
        <tr>
            <td>B</td>
            <td>Swatch Internet time</td>
            <td>000 through 999</td>
        </tr>
        <tr>
            <td>g</td>
            <td>12-hour format of an hour without leading zeros</td>
            <td>1 through 12</td>
        </tr>
        <tr>
            <td>G</td>
            <td>24-hour format of an hour without leading zeros</td>
            <td>0 through 23</td>
        </tr>
        <tr>
            <td>h</td>
            <td>12-hour format of an hour with leading zeros</td>
            <td>01 through 12</td>
        </tr>
        <tr>
            <td>H</td>
            <td>24-hour format of an hour with leading zeros</td>
            <td>00 through 23</td>
        </tr>
        <tr>
            <td>i</td>
            <td>Minutes with leading zeros</td>
            <td>00 to 59</td>
        </tr>
        <tr>
            <td>s</td>
            <td>Seconds, with leading zeros</td>
            <td>00 through 59</td>
        </tr>
        <tr>
            <td>u</td>
            <td>Microseconds (added in PHP 5.2.2)</td>
            <td>Example: 654321</td>
        </tr>
        <tr>
            <td><strong>Timezone</strong></td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>e</td>
            <td>Timezone identifier (added in PHP 5.1.0)</td>
            <td>Examples: UTC, GMT, Atlantic/Azores</td>
        </tr>
        <tr>
            <td>I (capital i)</td>
            <td>Whether or not the date is in daylight saving time</td>
            <td>1 if Daylight Saving Time, 0 otherwise.</td>
        </tr>
        <tr>
            <td>O</td>
            <td>Difference to Greenwich time (GMT) in hours</td>
            <td>Example: +0200</td>
        </tr>
        <tr>
            <td>P</td>
            <td>Difference to Greenwich time (GMT) with colon between hours and minutes (added in PHP 5.1.3)</td>
            <td>Example: +02:00</td>
        </tr>
        <tr>
            <td>T</td>
            <td>Timezone abbreviation</td>
            <td>Examples: EST, MDT ...</td>
        </tr>
        <tr>
            <td>Z</td>
            <td>Timezone offset in seconds. The offset for timezones west of UTC is always
                negative, and for those east of UTC is always positive.</td>
            <td>-43200 through 50400</td>
        </tr>
        <tr>
            <td><strong>Full Date/Time</strong></td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>c</td>
            <td>ISO 8601 date (added in PHP 5)</td>
            <td>2004-02-12T15:19:21+00:00</td>
        </tr>
        <tr>
            <td>r</td>
            <td>RFC 2822 formatted date</td>
            <td>Example: Thu, 21 Dec 2000 16:01:07 +0200</td>
        </tr>
        <tr>
            <td>U</td>
            <td>Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)</td>
            <td>See also time</td>
        </tr>
    </table>
    </p>
    <p>
        Unrecognized characters in the format string will be printed
        as-is. The Z format will always return
        0 when using gmdate.
    </p>
    <p>
        Since this function only accepts integer timestamps the
        u format character is only useful when using the
        date_format function with user based timestamps
        created with date_create.
    </p>
    <br>
    <hr>
    <br>
    <!-- 
    Create a date with mktime() 
    Sintaks :
    mktime(hour, minute, second, month, day, year)
    -->
    <?php
    $d = mktime(9, 28, 10, 10, 29, 2022);
    $formatdate = "Y-m-d h:i:sa";
    echo "Created date is " . date($formatdate, $d);
    echo "<hr>";
    $d = strtotime("10:30pm April 15 2014");
    echo "Created date is " . date($formatdate, $d);
    echo "<br>";
    $d = strtotime("tomorrow");
    echo date($formatdate, $d) . "<br>";
    $d = strtotime("next Saturday");
    echo date($formatdate, $d) . "<br>";
    $d = strtotime("+3 Months");
    echo date($formatdate, $d) . "<br><br>";
    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
        echo date("M d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
    }

    // function date and time
    // https://www.w3schools.com/php/php_ref_date.asp
    ?>

</body>

</html>