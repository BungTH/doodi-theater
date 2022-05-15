<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <style>
        .seat1 {
            width : 50px;
            height : 50px;
            background-color : #00FFFF;
        }
        .seat0 {
            width : 50px;
            height : 50px;
            background-color : #D3D3D3;
        }
        .seat2 {
            width : 50px;
            height : 50px;
            background-color : #7CFC00;
        }
        .seat3 {
            width : 50px;
            height : 50px;
            background-color : #FFD700;
        }
    </style>

    <h class="mt-4">Booking<br></h>
    <form action = "booking_db.php" method = "post">
    <label for="theaterNo">TheaterNo = </label><br>
    <?php 
        $i = 1;
        if (isset($_POST['seatBooking'])) {
            $theaterNo = $_POST['theaterNo'];
            $time = $_POST['time'];
        }
    echo "<input type='text' id='theaterNo' name='theaterNo' value='", $theaterNo, "' readonly ><br>";
    echo "<label for='time'>Time = </label><br>:";
    echo "<input type='text' id='time' name='time' value='", $time, "' ><br>";
        /*$time = "A"; //THIS IS TIME VAR - CHANGE IT TO TIME SLOT VAR
        $theaterSeatID = "___".$A."%"; */
        $findRoom = $conn->prepare("SELECT * FROM theaterRoom WHERE theaterNo = :theaterNo AND movieID = :movieID ");
        $findRoom->bindParam(":theaterNo", $theaterNo);
        $findRoom->bindParam(":movieID", $_SESSION['movie']);
        $findRoom->execute();
        $rrow = $findRoom->fetch(PDO::FETCH_ASSOC); 
        $theaterRoomID = $rrow['theaterRoomID'];
        $seat = "%".$time;
        $theaterSeatID = $theaterRoomID.$seat;
        //ROOM CHAR NEED TO BE DYNAMIC
        $findSeat = $conn->prepare("SELECT * FROM theaterSeat WHERE theaterSeatID LIKE :theaterSeatID AND theaterRoomID = :theaterRoomID ");
        $findSeat->bindParam(":theaterSeatID", $theaterSeatID);
        $findSeat->bindParam(":theaterRoomID", $theaterRoomID);
        $findSeat->execute();
        $data = $findSeat->fetchAll();
        foreach ($data as $row) {
            if ($i == 7) {
                echo "<br><br>";
                $i = 1;
            }
            if ($row['available'] == 0) { 
                echo "<button type='submit' class = 'seat0' disabled> </button>", " "," ";
            }
            else {
                if ($row['seatClass'] == 1) {
                    echo "<button type='submit' value='", $row['theaterSeatID'] ,"' class = 'seat1' name ='booking'> </button>", " "," "," ";
                }
                else if ($row['seatClass'] == 2) {
                    echo "<button type='submit' value='", $row['theaterSeatID'] ,"' class = 'seat2' name ='booking'> </button>", " "," "," ";
                }
                else if ($row['seatClass'] == 3) {
                    echo "<button type='submit' value='", $row['theaterSeatID'] ,"' class = 'seat3' name ='booking'> </button>", " "," "," ";
                }
            } 
            $i = $i + 1;

        }

    ?> 
    </form>


</body>

</html>

