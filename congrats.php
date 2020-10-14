<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="congrats.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
   
    
    <title>BCD Test</title>
</head>
<body>
    <?php 
        include("data_controller.php");
    ?>
    <div class="container">
        <h1 class="greeting py-5">Congratulations!</h1>
    </div>

    <div class="congrats-text container">
        <p>You have successfully registered to the event.</p>
        <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit vitae quae odio, amet exercitationem sequi quas aliquid numquam consequatur perspiciatis beatae nulla saepe! Corrupti tempora itaque magnam officiis tempore dolor culpa voluptas error vitae sapiente quod voluptatem deleniti ratione, temporibus eum aperiam odio fugit magni ipsam aliquam libero rem reprehenderit est! Exercitationem obcaecati non quos assumenda, hic saepe ab, aut similique magnam ea eveniet eius, dolore optio a! Non, commodi.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col justify-content-start">Participant/s:</div>
            <div class="col text-right">Date Registered: <span class="registered"><?= $registered_at; ?></span></div>
        </div>
    </div>

    <div class="container">

        <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Race Category</th>
          <th scope="col">Race Segment</th>
          <th scope="col">Race Shirt Size</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th><?= $name; ?></th>
          <td><?= $category; ?></td>
          <td><?= $fullWordGender; ?></td>
          <td><?= $shirtSize; ?></td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="container text-center my-3">
        <a class="back-btn" href="/bcdtest">BACK</a>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>