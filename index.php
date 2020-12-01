<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPS ....</title>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.click').click(function() {
                var human = $(this).attr('id');
                // alert(id);
                $.get("mind.php?human=" + human, function(output) {
                    var computer = output['computer'];
                    var message = output['message'];

                    $("#human").attr("src", "img/" + human + ".png");
                    $("#computer").attr("src", "img/" + computer + ".png");
                    $('#result').html("<h3>" + message + "</h3>");
                }, 'json');
            });

        });
    </script>
</head>

<body>
    <div class="content">
        <table>
            <tr>
                <td>
                    <img id="rock" class="rock img rotateimg180" src="img/rock.png">
                </td>
                <td>
                    <img id="paper" class="paper img rotateimg180" src="img/paper.png">
                </td>
                <td>
                    <img id="scissor" class="scissor img rotateimg180" src="img/scissor.png">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <br><img id="vs" class="vs img" src="img/vs.png"><br><br>
                    <!-- <marquee></marquee> -->
                </td>
            </tr>
            <tr>
                <td>
                    <img id="scissor" class="scissor img click" data-toggle="modal" data-target="#myModal" src="img/scissor.png">
                </td>
                <td>
                    <img id="paper" class="paper img click" data-toggle="modal" data-target="#myModal" src="img/paper.png">
                </td>
                <td>
                    <img id="rock" class="rock img click" data-toggle="modal" data-target="#myModal" src="img/rock.png">
                </td>
            </tr>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>

                <!-- اللعب هنا  -->
                <div class="modal-body">
                    <div class="content">
                        <table border="1">
                            <tr>
                                <th>Human</th>
                                <th>VS</th>
                                <th>Computer</th>
                            </tr>
                            <tr>
                                <td>
                                    <img id="human" src="">
                                </td>
                                <td>
                                    <img id="vs" class="vs img" src="img/vs.png">
                                </td>
                                <td>
                                    <img id="computer" class="rotateimg180" src="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div id="result">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- اللعب ينتهي هنا  -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</body>

</html>