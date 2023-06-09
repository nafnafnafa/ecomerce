<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Test Teknikal - Nafa</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php $this->load->view('layout/top_layout') ?>
        
        <!-- Tampilkan semua produk -->
        <div class="row">
        <!-- looping products -->
          <?php foreach($products as $product) : ?>
          <div class="col-sm-3 col-md-3" style="padding-left: 40px; width: 450px;">
            <div class="thumbnail" style=" background-color:#B8860B;">
              <div class="caption" style="width: 400px;">
                <h3 style="min-height:60px;"><?=$product->product_name?></h3>
                <p>Rp. <?=number_format($product->price)?></p>
                <p>
                    <?=anchor('welcome/add_to_cart/' . $product->pcode, 'Buy' , [
                        'class'    => 'btn btn-primary',
                        'role'    => 'button'
                    ])?>
                </p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        <!-- end looping -->
        </div>
        
    </body>
</html>