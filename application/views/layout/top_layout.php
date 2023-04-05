<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?=anchor(base_url(), 'Nafa Belajar CI', ['class'=>'navbar-brand'])?>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
      <ul class="nav navbar-nav navbar-right">
        <li><?php echo anchor(base_url(), 'Home');?></li>
        <li>
            <?php
                $text_cart_url  = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
                $text_cart_url .= ''. $this->cart->total_items() .' items';
            ?>
            <?=anchor('welcome/cart', $text_cart_url)?>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>