<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000000">
    <!--
      manifest.json provides metadata used when your web app is added to the
      homescreen on Android. See https://developers.google.com/web/fundamentals/engage-and-retain/web-app-manifest/
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="assets/css/style.css">

    <title>Emeralda Online Contest</title>

</head>
<body>

    <div class="container-fluid register">
        <div class="brand">
            <a href="/"><img src="assets/img/logo.png" alt="company Logo" /></a>
        </div>
        <div class="register-form animate__animated animate__bounce">

            <h1 class="register-header">TheEmeraldQueenContest Information Request</h1>
            <p class="header-subtitle">
                Please complete the following with the appropriate information.
                Kindly Note, that you must be 18 years and above to take part in this contest
            </p>
            <form class="row g-3" id="registerForm" method="POST" action="mail.php">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email Address <span class="important-field">*</span></label>
                    <input type="email" class="form-control" name="email" placeholder="myemail@email.com" id="inputEmail4" />
                </div>
                <div class="col-md-6">
                    <label for="fullname" class="form-label">Full Name <span class="important-field">*</span></label>
                    <input type="text" class="form-control" name="fullName" id="fullname" placeholder="Musa Yetunde Ebuka" />
                </div>

                <div class="col-12">
                    <label for="inputAddress" class="form-label">Location <span class="important-field">*</span></label>
                    <input type="text" class="form-control" name="location" id="inputAddress" placeholder="No 18 Street, Ikoyi, Island, Nigeria" />
                </div>

                <div class="col-md-6">
                    <label for="phoneOne" class="form-label">Phone No 1 <span class="important-field">*</span></label>
                    <input type="number" class="form-control" name="phoneOne" id="phoneOne" placeholder="07037453289" />
                </div>
                <div class="col-md-6">
                    <label for="phoneTwo" class="form-label">Phone No 2 <span class="important-field">*</span></label>
                    <input type="number" class="form-control" name="phoneTwo" id="phoneTwo" placeholder="07037453234" />
                </div>

                <div class="col-md-6">
                    <label for="DOB" class="form-label">Date of Birth <span class="important-field">*</span></label>
                    <input type="date" class="form-control" name="DOB" id="DOB" />
                </div>
                <div class="col-md-6">
                    <label for="occupation" class="form-label">Occupation <span class="important-field">*</span></label>
                    <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Software Engineer" />
                </div>

                <div class="col-md-6">
                    <p>Are you 18years Old</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="No" checked ={age === 'no'} name="age" id="inlineRadio1" />
                        <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="Yes" checked ={age === 'yes'} name="age" id="inlineRadio2" />
                        <label class="form-check-label" for="inlineRadio2">Yes</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" />
                        <label class="form-check-label" for="flexSwitchCheckChecked">You have read and accept over terms &amp; conditions</label>
                    </div>
                </div>
                <br />
                <input type="submit" value="Register" name="submit" class="btn btn-dark submit-btn col-12" id="register-btn" disabled />
                <!-- <input type="submit" value="Register" class= "btn btn-dark col-12" disabled/> -->
            </form>
                
        </div>
    </div>
   
        
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>