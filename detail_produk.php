<link rel="stylesheet" href="./style.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 
<?php
    include './koneksi.php';
    
    $id_produk = $_GET['id_produk'];

    $sql = ("SELECT * FROM produk WHERE id_produk = '$id_produk'");
    $result = $conn->query($sql);

    $result= $result->fetch_assoc();

?>
    <div class="container">
        
        <a href="user.php"><img src="https://img.icons8.com/material-outlined/50/000000/back--v1.png"/></a>
    </div>
 <div class="container mt-5">
     
<div class="container-fluid">

      <div class="row row-sm">
         <div class="col-md-6 _boxzoom">
            <div class="_product-images">
                <img class="img-fluid" src="./images/<?php echo $result['gambar_produk']?>" width="500" height="500">
            </div>
         </div>
         <div class="col-md-6">
            <div class="_product-detail-content">
               <h3 class="_p-name"><?php echo $result['nama_produk']?></h3>
               <div class="_p-price-box">
                  <div class="p-list">
                     <span class="price"> Rp. <?php echo $result['harga_produk']?> </span>
                  </div>
                  <br>
                  <div class="_p-add-cart">
                     <div class="_p-qty">
                         
                        <div class="input-group spinner col-auto">
        
    <button class="btn btn-primary btn-1" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
</svg></button>
    <input type="text" class="form-control" value="0" id="a" width="">
    
      
      <button class="btn btn-primary btn-2" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></button>
    
  </div>    
                     </div>
                  </div>
                  <br>
                  <div class="_p-features">
                     <span> Description About this product:- </span>
                     Solid color polyester/linen full blackout thick sunscreen floor curtain
                     Type: General Pleat
                     Applicable Window Type: Flat Window
                     Format: Rope
                     Opening and Closing Method: Left and Right Biparting Open
                     Processing Accessories Cost: Included
                     Installation Type: Built-in
                     Function: High Shading(70%-90%)
                     Material: Polyester / Cotton
                     Style: Classic
                     Pattern: Embroidered
                     Location: Window
                     Technics: Woven
                     Use: Home, Hotel, Hospital, Cafe, Office
                     Feature: Blackout, Insulated, Flame Retardant
                     Place of Origin: India
                     Name: Curtain
                     Usage: Window Decoration
                     Keywords: Ready Made Blackout Curtain                        
                  </div>
                     <br>
                     <div class="_p-qty-and-cart">
                        <div class="_p-add-cart">
                           <button class="btn btn-primary" tabindex="0">
                           <i class="fa fa-shopping-cart"></i> Buy Now
                           </button>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   