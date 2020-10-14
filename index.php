
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <?php include('submit_controller.php'); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/72d0d6bced.js" crossorigin="anonymous" defer></script>
    <title>BCD Test Site</title>
</head>
<body>

<div class="navcontainer">
    <nav class="nav">
        <div class="navlogo">
            <img src="./assets/logo.png" alt="Company X">
        </div>
    
        <ul class="navlinks">
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">Run Information</a>
            </li>
            <li>
                <a href="">Registration</a>
            </li>
            <li>
                <a href="">Contact Us</a>
            </li>
        </ul>
    </nav>

    
</div>

<div class="hero">
        <div class="hero-image">
            <img src="./assets/header.png" alt="Run For Earth" class="header-image">
            <p class="desc">A 3k run alongside the candidates of Miss Philippines Earth 2015</p>
            <p class="desc">to aid the Calumpang River Rehabilitation</p>
        </div>
        <div class="hero-text">
            <p class="event-details">APRIL 25, 2015 | Assembly time: 5:00AM | SM City Batangas Parking Grounds</p>
            <p class="registration-fee">Registration fee: Php500 inclusive of race kit with shirt</p>
            <button class="register">Register Now!</button>
        </div>
    </div>
        

    
   

    <main>
        <section id="sign-up">
            <div class="form-container">
                <div class="register-head">
                    <h1 class="section-title">SIGN UP</h1>
                    <img src="./assets/section-divider.png" alt="Section divider">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel cumque magni perferendis architecto, atque quaerat cupiditate odit qui repellat nostrum illum consectetur asperiores debitis ducimus? Quam sequi magni laborum maiores!</p>
                </div>
    
                <div>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="row my-2">
                            <div class="col">
                                <input type="text" placeholder="First Name" class="input" name="first_name" value="<?= $firstName ?>">
                                <span class="error"><?= $firstName_error ?></span>
                            </div>
                    
                            <div class="col">
                                <input type="text" placeholder="Last Name" class="input" name="last_name" value="<?= $lastName ?>">
                                <span class="error"><?= $lastName_error ?></span>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="text" placeholder="Complete Address" class="input" name="address" value="<?= $x ?>">
                                <span class="error"><?= $userAddress_error ?></span>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="text" class="input" name="address_2" value="<?= $y ?>">
                                <span class="error"></span>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="text" placeholder="Birthday DD/MM/YYYY" class="input" name="birthday" onfocus="(this.type = 'date')" onblur="(this.type='text')" value="<?= $birthday ?>">
                                <span class="error"><?= $birthday_error ?></span>
                            </div>
                            <div class="col">
                                <input type="tel" placeholder="Contact Number" class="input" name="contact" value="<?= $contact ?>">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="text" placeholder="Email Address" class="input" name="email" value="<?= $email ?>">
                                <span class="error"><?= $email_error ?></span>
                            </div>
                            <div class="col">
                                <select name="gender" value="<?= $gender; ?>">
                                    <option selected hidden value="">Gender</option>
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select>
                                <span class="error"><?= $gender_error; ?></span>
                            </div>
                            <div class="col">
                                <select name="shirt_size" value="<?= $shirtSize ?>">
                                    <option selected hidden value="">Shirt size</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                                <span class="error"><?= $shirtSize_error; ?></span>
                            </div>
                        </div>
                        <div class="row justify-content-between my-2">
                            <div class="col-4 add"><span class="add-icon"><i class="fas fa-plus"></i></span>Add more participants</div>
                            <div class="col-8">
                                <input type="checkbox" name="checkbox">
                                <a href="" class="terms-link" data-toggle="modal" data-target="#termsAndConditions">I have read and understand the Terms and Conditions</a>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <button type="submit" class="submit-btn btn-disabled" disabled>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <div class="modal fade" id="termsAndConditions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Terms and Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium recusandae iusto numquam odio ad velit iste vitae ipsum labore sequi eum eaque deserunt tempora, magnam sint excepturi molestias veniam! Quibusdam saepe doloremque iste dicta hic repudiandae, rerum quasi facilis eveniet. Dicta minima nam saepe consequatur optio consequuntur cupiditate quo, corporis libero doloremque. Excepturi eius in praesentium, culpa fugiat iure modi blanditiis iusto amet, asperiores nobis exercitationem quia perspiciatis voluptate aliquam pariatur expedita explicabo maxime ipsa, repellat eos. Delectus, similique amet. Odio quisquam architecto consectetur aliquam harum placeat velit. Temporibus eos eveniet tenetur tempora quaerat blanditiis ab iure et incidunt nostrum?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="agree" data-dismiss="modal">Agree</button>
      </div>
    </div>
  </div>
</div>
    </main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>