<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tes VCI Nafa</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php $this->load->view('layout/top_layout') ?>
        
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th style="text-align: center;">No</th>
                    <th style="text-align: center;">Product</th>
                    <th style="text-align: center;">Qty</th>
                    <th style="text-align: center;">Price</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i=0;
                    // echo $this->cart;
                    foreach ($this->cart->contents() as $items) : 
                    $i++;
                ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $items['name'] ?></td>
                    <td align="right"><?= number_format($items['qty'],0,',','.') ?></td>
                    <td align="right"><?= number_format($items['price'],0,',','.') ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td align="right" colspan="3">Subtotal </td>
                    <td align="right"><?= number_format($this->cart->total(),0,',','.'); ?></td>
                </tr>
            </tfoot>
        </table>
        <div align="center">
            <?= anchor('welcome/clear_cart','Clear Cart',['class'=>'btn btn-danger']) ?> 
            <?= anchor(base_url(),'Continue Shopping',['class'=>'btn btn-primary']) ?> 
            <?= anchor('welcome/order','Check Out',['class'=>'btn btn-success']) ?>
        </div>
    </body>
</html>