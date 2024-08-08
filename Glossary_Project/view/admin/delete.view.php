
<div class="container">

   <div class="row">

         <div class="col-len-12 text-center">
    <h1 class="mt-5">Delete Term</h1>
        </div>
        <div class="row">
            Are You Sure you wanna delte this term ?<?=$model->term?>
        </div>
     <div class="row">
   <form action="" method="POST">
    <input type="hidden" name="term" value="<?=$model->term?>">
           <div class="form-group">
               <input class="button" type="submit" value="Delete">
            </div>        
   </div>        
   </form>
      </div>
      </div>
      
