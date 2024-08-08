<div class="row">
    <div class="container">
        <h1><?=$view_bag["heading"]?></h1>
         </div>
         <a href="login.php">Login</a>

        <div class="form">
            <form  action=""  method="GET"  class="navbar-form pull-right">
                <div class="form-group">
                    <input  type="text"  name="search" id="search">
                    <button type="submit"  value="search">Search</button>
                </div>
            </form>
        </div>
        <table class="table table-striped">
              
        <?php foreach ($model as $item):?>
            <?php if(isset($item['term']) && isset($item['definition'])): ?>
            <tr>
                    <td><a href="detail.php?term=<?=$item['term']?>"><?=$item['term']?></a></td>
                    <td><a href="definition.php?definition=<?=$item['definition']?>"><?=$item['definition']?></a></td>
            </tr>
                <?php endif ?>
                <?php endforeach?>
        </table>
    </div>
</div>

