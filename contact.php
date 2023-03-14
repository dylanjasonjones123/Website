<?php
  include_once 'header.php';

 ?>

 <?php
   include_once 'menutoggle.php';

  ?>

<section>
  <div class="textbox">


  <p>You can fill out a form below or
alternatively you can contact me here:
Email: scaldygains@gmail.com <br>
Instagram: @scaldygains <br>
TikTok: @scaldygains <br>
Facebook: @scaldygains</p>
</div>
</section>


<form class="contactform" action="contactform.php" method="post">
  <input type="text" name="name" placeholder="Name" id="nameform">
  <input type="text" name="mail" placeholder="Email" id="mailform">
  <input type="text" name="number" placeholder="Phone Number" id="numberform">
  <textarea name="message" placeholder="Message" id="messageform"></textarea>
<button type="submit" name="submit">Send</button>
</form>




  <script src=script.js>

  </script>

  <?php
    include_once 'footer.php';

   ?>

  </body>


</html>
