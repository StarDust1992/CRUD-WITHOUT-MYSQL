<div class="container">
   <div class="row">
      <div class="col-len-12 text-center">
         <h1 class="mt-5">LOGIN</h1>
      </div>
   </div>
   <div class="row">
      <form action="" method="POST">
         <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="text" name="email" id="email"></input>
         </div>
         <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" type="password" name="password" id="password"></input>
         </div>
         <div class="form-group">
            <input type="submit" name="login" value="login" />
         </div>
      </form>
   </div>
   <div class="row">
      <?php if(isset($view_bag['status'])) {
         echo $view_bag['status'];
      }?>
   </div>
</div>