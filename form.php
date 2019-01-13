

<?php include('form_process.php'); ?>
<link rel="stylesheet" type="text/css" href="form.css">



<div class="container">  

 
 <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
   <center> <h3>CLIENT-PORTFOLIO</h3>
    
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name="name" value="<?= $name ?>" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="text" name="url" value="<?= $url ?>" tabindex="4">
      <span class="error"><?= $url_error ?></span>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." type="text" name="message" value="<?= $message ?>" tabindex="5"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success; ?></div>
  </form>
 
  
</div>