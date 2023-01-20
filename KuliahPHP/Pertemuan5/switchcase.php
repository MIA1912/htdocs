<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
    <link rel="stylesheet" href="/bootstrap-5.2.2-dist/css/bootstrap.css">
</head>

<body>
    <div class="container-sm">
        <form method="POST" action="switchcase.php" class="mb-3">
            <div class="mb-3">
                <label for="nobulan" class="form-label">Nomor Bulan</label>
                <input type="text" class="form-control" id="nobulan" name="nomor">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

        <?php
        $nomor = $_POST['nomor'];

        switch ($nomor) {
            case '01':
                $bulan = "January";
                break;
            case '02':
                $bulan = "February";
                break;
            case '03':
                $bulan = "March";
                break;
            case '04':
                $bulan = "April";
                break;
            case '05':
                $bulan = "May";
                break;
            case '06':
                $bulan = "June";
                break;
            case '07':
                $bulan = "July";
                break;
            case '08':
                $bulan = "August";
                break;
            case '09':
                $bulan = "September";
                break;
            case '10':
                $bulan = "October";
                break;
            case '11':
                $bulan = "November";
                break;
            case '12':
                $bulan = "December";
                break;
            default:
                echo "Error";
                break;
        }

        print "Nomor Urut Bulan : $_POST[nomor]<br>";
        print "Nomor Bulan Masehi : $bulan";
        ?>
    </div>
</body>

</html>