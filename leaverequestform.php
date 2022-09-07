<html>

<head>
    <title>
        DivItup
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="myFunction.js"></script>
    <script src="http://www.w3schools.com/lib/w3data.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



</head>

<body>
    <br>
    <br>
    <h1 style="padding-left: 25px;">Leave</h1>
    <h1 style="padding-left: 25px;">Request</h1>
    <label style="padding-left: 120px;" for="">description</label>
    <br>

    <!-- <h5 style="padding-left: 120px;">description</h5> -->
    <textarea placeholder="text" name=""
        style="height: 300px; width: 900px; position:absolute; left:120px; border:2px solid #00aaff;">

    </textarea>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="row" style="padding-left: 20px;">
        <div class=" col-6">
            <form action="">
                <label for="">Days of leave</label>
                <label for="" style="padding-left: 140px;"> Attachment</label>

                <br>
                <input type="date" name="" id="">
                <input type="file" style="padding-left: 90px;" name="" id="">

                <br>

                <label for="">Requester</label>
                <label for="" style="padding-left: 160px;"> Receiver</label>
                <br>
                <div class="row justify-content-between" style="padding-right: 500px;">
                    <div class="col-4">
                        <input type="email" name="" id="">
                    </div>
                    <div class="col-4">
                        <input type="email" name="" id="">
                        <br>
                        <br>
                        <div style="text-align:right; height:50px; width:80px; padding-left:700px;">
                            <button type="submit" class="btn btn-primary">
                                Send
                            </button>
                        </div>
                    </div>
                </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- <div style="text-align:right; height:50px; width:80px">
            <button type="submit">
                Send
            </button>
        </div> -->

        </form>
    </div>

    </div>

    </div>



    <!-- <div>
        <h1>Leave Request</h1>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #076A96;">Reason</h5>
                     <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="">description</label><label style="color: red;">*</label><br>
                    <input type="text" id="projectName" name="projectName" size="48"><br>
                    <label for="">Summary</label><label style="color: red;">*</label><br>
                    <textarea id="summary" name="summary" rows="2" cols="50" placeholder="Enter summary">
                    </textarea>

                    <br>
                    <div class="container2">
                        <div class="row">
                            <div class="column2">
                                <div class="card">
                                    <label for="">Deadline</label><br>
                                    <input type="datetime-local" id="deadline" name="deadline">
                                </div>

                            </div>
                            <div class="column2">
                                <div class="card">
                                    <label for="">Attachments</label><br>
                                    <input type="file" id="myfile" name="myfile">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row justify-content-between" style="padding-left: 20px;">
                        <div class="col-5" style="border:3px solid #FFA500;">
                            <label for="">Deadline</label><br>
                            <input type="datetime-local" id="deadline" name="deadline">
                        </div>
                        <div class="col-5" style="border:3px solid #FFA500;">
                            <label for="">Attachments</label><br>
                            <input type="file" id="myfile" name="myfile">
                        </div>
                    </div>
                </div>


                    <br>
                    <div class="cotainer">
            <div class="row">
                <div class="column2">
                    <div class="card">
                    <label for="">Requester</label><br>
                    <form autocomplete="off" action="/action_page.php">
                      <div class="autocomplete" style="width:300px;">
                      <input id="myInput" type="text" name="myCountry" placeholder="Assign member"> <input type="submit" >
                      </div>
                    
                    </form>
                    </div>
                </div> 
            </div>


            <div class="row">
                <div class="column2">
                    <div class="card">

                       <label for="">Reciever</label><br>
                       <form autocomplete="off" action="/action_page.php">
                          <div class="autocomplete" style="width:300px;">
                          <input id="myInput" type="text" name="myCountry" placeholder="Assign member"> <input type="submit" >
                          </div>
                    
                        </form>
                
                    </div>
                </div>
            </div>
        </div>

                    
                <div class="row justify-content-between" style="padding-left: 20px;">
                    <div class="col-5" style="border:3px solid #FFA500;">
                        <label for="">Requester</label><br>
                        <form autocomplete="off" action="/action_page.php">
                            <div class="autocomplete" style="width:300px;">
                                <input id="myInput" type="text" name="myCountry" placeholder="Assign member"> <input
                                    type="submit">
                            </div>

                        </form>
                    </div>
                    <div class="col-5" style="border:3px solid #FFA500;">
                        <label for="">Reciever</label><br>
                        <form autocomplete="off" action="/action_page.php">
                            <div class="autocomplete" style="width:300px;">
                                <input id="myInput" type="text" name="myCountry" placeholder="Assign member"> <input
                                    type="submit">
                            </div>

                        </form>
                    </div>
                </div>
            </div>


                    <div class="row">
                        <div class="col-6">
                            <div class="row justify-content-between">
                                <div class="col-4">
                                    <label for="">Requester</label><br>
                                    <form autocomplete="off" action="/action_page.php">
                                        <div class="autocomplete" style="width:250px;">
                                            <input id="myInput" type="text" name="myCountry"
                                                placeholder="Assign member">
                                        </div>

                                    </form>
                                </div>

                                <div class="col-4">
                                    <label for="">Reciever</label><br>
                                    <form autocomplete="off" action="/action_page.php">
                                        <div class="autocomplete" style="width:250px;">
                                            <input id="myInput" type="text" name="myCountry"
                                                placeholder="Assign member">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" style="text-align:right">Send</button>
        </div>
    </div>
    </div>
    </div>  -->
</body>


</html>