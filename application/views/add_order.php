<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Test Teknikal - Nafa</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <style>
            .register{
            margin-left: 17%;
            }
            body {
                        /* background-image: url("img_tree.gif"), url("paper.gif"); */
                        background-color: #F0F8FF;
                }
        </style>
    </head>
    <body>
        <?php $this->load->view('layout/top_layout') ?>
        <h1 align="center">Isi Data Diri Dulu Yuk!</h1>
        <br>
        <form style="text-align: center;" action="checkout" method="post">     
          <div style="min-hight: 10px;" class="form-group">
            <label class="col-sm-offset-2 col-sm-1 control-label" align="left">Nama</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="customer_name" placeholder="Nama" required>
            </div>
          </div>
          <br>
          <br>
          <div class="form-group">
            <label class="col-sm-offset-2 col-sm-1 control-label" align="left" require>Address</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="address" placeholder="Address" required>
            </div>
          </div>
          <br>
          <br>
          <div class="form-group">
            <label class="col-sm-offset-2 col-sm-1 control-label" align="left"></label>
            <div class="col-sm-1">
              <button type="submit" class="btn btn-success">Simpan</button>

              </div>
            </div>
          </div>
        </form>
        <br>
        <br>
        <h3 style="padding-left: 50px;">Rincian Pesanan</h3>
        <div style="padding-left: 50px; padding-right:50px;">
        <table class="table table-bordered table-striped table-hover" style="background-color: #B8860B;">
            <thead>
                <tr>
                    <th style="text-align: center; ">No</th>
                    <th style="text-align: center;">Product</th>
                    <th style="text-align: center;">Qty</th>
                    <th style="text-align: center;">Price</th>
                    <th style="text-align: center;">Discount</th>
                    <th style="text-align: center;">Net</th>
                    <th style="text-align: center;">PPN</th>
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
                    <td align="right"><?= $i ?>.</td>
                    <td><?= $items['name'] ?></td>
                    <td align="right"><?= number_format($items['qty'],0,',','.') ?></td>
                    <td align="right"><?= number_format($items['price'],0,',','.') ?></td>
                    <td align="right"><?= number_format(1000,0,',','.') ?></td>
                    <td align="right"><?= number_format($this->cart->total()-1000,0,',','.'); ?></td>
                    <td align="right"><?= number_format(($this->cart->total()-1000)*10/100,0,',','.') ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td align="right" colspan="6">Subtotal </td>
                    <td align="right"><?= number_format(($this->cart->total()-1000)+($this->cart->total()-1000)*10/100,0,',','.'); ?></td>
                </tr>
            </tfoot>
        </table>
        </div>
    </body>
</html>