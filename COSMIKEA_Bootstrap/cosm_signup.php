<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmIkea</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
       
       body {
        background-color: #8D482D;
       }

        .loginPoster {
          background-image: url("Images/CosmIkea\ Main.png") ;
          background-position-x: center;
          background-size: cover;
          background-repeat: no-repeat;
          height: 1240px;
          display: flex;
          flex-direction: column;
          row-gap: 0;
          
        }
        

        form {
          width: 300px;
          font-family: 'Poiret One', sans-serif;
          font-size: 1.18rem;
          font-weight: bolder;
          color: rgb(58, 58, 56);
          height: fit-content;
        }

        .companyLogo {
          height: 5rem;
          margin-top: 5rem;
          margin-bottom: 0;
          padding-bottom: 0;
          text-align: center;
          font-family: 'Righteous', sans-serif;
          font-size: 4.35rem;
          color: rgb(58, 58, 56);
          
        }

        .companyMoto {
          margin-bottom: 1.5rem;
          text-align: center;
          font-family: 'Poiret One', sans-serif;
          font-size: 1.2rem;
          font-weight: bolder;
          color: rgb(58, 58, 56);
          height: fit-content;
        }

        .loginButtons {
          margin-top: 2rem;
          display: flex;
          justify-content: center;
          font-weight: bolder;
        }

        #buttoSign {
          width: 145px;
        }



    </style>
</head>
<body >

<div class="container"  >

  <div class="loginPoster">

      <div class="companyLogo">Cosmikea</div>
      <div class="companyMoto">unique furniture for a unique lifestyle</div>

      <form class="mx-auto" action="dtb_signup.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control"   placeholder="Your name" name="name">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" class="form-control"  placeholder="Your surname" name="surname">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control"  placeholder="Your email" name="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Your new password" name="password">
        </div>
        <div class="loginButtons">
        <button type="submit" class="btn btn-light" id="buttoSign" >Sign Up</button>
        </div>
      </form>

      

    </div>  

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>