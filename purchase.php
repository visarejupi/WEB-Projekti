<?php
    include 'header.php';
?>

<main>
    <script>
        var i = 0;
        var images = [];
        var time = 2000;

        images[0] = 'slide1.jpg';
        images[1] = 'slide2.jpg';
        images[2] = 'slide3.jpg';
        images[3] = 'slide4.jpg';
        images[4] = 'slide5.jpg';

        function changeImg(){
            document.slide.src = images[i];

            if(i<images.length -1 ){
                i++;
            }
            else{
        
              i=0;

            }
            setTimeout("changeImg()", time);
        }

        window.onload = changeImg;

    </script> 

    <div class="purchase">

    <div class="slider">

    <img name="slide"  width="450"  height="450" alt="">
    </div>

   <div class="buysection">

     <b> <p>3 IN 1 TREE LAMP™</b> <br>
          <b style="color: red;">$199.99</b> <b style="text-decoration: line-through;"> $299.99</b></p>

   <div class="emitting">
          <form action="" class="plug">
          <label for="plugtype"> Emitting color:</label>
          <select name="plugtype" id="plugt">
              <option value>AU plug</option>
              <option value>EU plug</option>
              <option value>UK plug</option>
              <option value>US plug</option>
  </select>
      </form>
  </div>

  <div class="quantity">
      <form action autocomplete="off">
          <label for="vlera">Quantity:  </label>
          <input type="number" name="vlera" id="vlera" min="1" max="20"
          step="1" placeholder="1">
      </form>
  </div>

  <div class="buypurchase">
       <a href="www.google.com">BUY</a>
  </div>

  <div class="trustbadge">
      <img src="trust-badge.png" width="54%" height="150px" alt="">
  </div>

  <div class="txtproduct">
     <p>
  <b> 3 IN 1 TREE LAMP&#8482 </b>- a single, uniquely shaped and astounding art piece <br>
   that functions more than just a mere lamp. It's sleek and exhibits a thin, <br>
  cherry wood shade, and brightness that can be smoothly adjusted via <br>
  touch controls on the base. 
</p>
  </div>
  
  </div> 

  </div>
  <br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</main>
<?php
 include 'footer.php';
 ?>