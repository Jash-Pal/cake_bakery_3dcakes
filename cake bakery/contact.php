<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake Bakery</title>`
    <link rel="shortcut icon" type="image" href="./image/logo.png">
    <link rel="stylesheet" href="gallery.css">
    <!-- bootstrap links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Uchen&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <!-- icons links -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- icons links -->
    <!-- animation links -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- animation links -->

    <style>
      .contact {
  width: 100%;
  height: 90vh;
  display: flex;
}

.contact .leftSide {
  height: 100%;
  flex: 50%;
  background-image: url('image/box2.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.contact .rightSide {
  height: 100%;
  flex: 50%;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.contact .rightSide h1 {
  font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
    "Lucida Sans", Arial, sans-serif;
  font-weight: 10;
  font-size: 50px;
  margin-left: 30px;
}

.myh{
  color: white;
}

form {
  display: flex;
  flex-direction: column;
  width: auto;
  height: auto;
  padding: 30px;
}

form input {
  height: 40px;
  width: 80%;
  border: none;
  border-bottom: 1px solid #121619;
  color: black;
}

form textarea {
  margin-top: 15px;
  height: 70px;
  width: 80%;
  border: none;
  border-bottom: 1px solid #121619;
  color: black;
}
input::placeholder,
textarea::placeholder {
  font-weight: bold;
  color: black;
  font-family: Arial, Helvetica, sans-serif;
}
form input:focus,
textarea:focus {
  outline: none;
}

form label {
  margin-top: 15px;
  color: grey;
}

form button {
  margin-top: 40px;
  width: 140px;
  height: 40px;
  border: none;
  background-color: #121619;
  color: whitesmoke;
  font-size: 15px;
  cursor: pointer;
}

    </style>
</head>
<body>
<?php include 'header.php' ?>


    <div class="contact">
        <div
          class="leftSide"
        ></div>
        <div class="rightSide">
          <h1 class='myh'> Contact Us</h1>
  
          <form id="contact-form" method="POST">
            <label htmlFor="name">Full Name</label>
            <input name="name" placeholder="Enter full name..." type="text" />
            <label htmlFor="email">Email</label>
            <input name="email" placeholder="Enter email..." type="email" />
            <label htmlFor="message">Message</label>
            <textarea
              rows="6"
              placeholder="Enter message..."
              name="message"
              required
            ></textarea>
            <button type="submit"> Send Message</button>
          </form>
        </div>
      </div>
</body>
</html>