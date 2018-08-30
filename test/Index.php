<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <script src='app.js'></script>
</head>

<body id="body">

    Please input your Email address to sign up to mailing list.

<div class="row">
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">    
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class="form-control" value="" required="required" pattern="" title="">
    

    <label for="emailaddress">Email:</label>
        <input type="email" name="emailaddress" id="mail" class="form-control" value="" required="required" pattern="" title="">

    <!-- <input placeholder="my email" id="mail" type="email" name="emailaddress">
    <br />
    <input placeholder="my name" id="name" type="text" name="name">
    <br /> -->
    <button onclick="submitForm()">Submit</button>
    </div>
    
    </div>
</body>
</html>
