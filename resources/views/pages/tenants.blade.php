<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Tenants</title>
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   </head>
   <body>
      <h1>Welcome to tenants list</h1>
      <div class = "content">
         <h3>
            Name - {{ $name }}
         </h3>
         <h3>
            Phone - {{ $phone }}
         </h3>
         <h3>
            Address - {{ $address }}
         </h3>
         <h3>
            Email Address - {{ $email }}
         </h3>
      </div>
   </body>
   <style>

      .content {
      width: 50%;
      display: block;
      margin-left: auto;
      margin-right: auto;
      border: 15px solid green;
      padding: 50px;
      margin: 20px;
      }
   </style>
</html>