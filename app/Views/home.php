
<div>
    <img src="https://i.imgur.com/hhGpmFr.jpg" width="100%" class="img-fluid" alt="Responsive image">
</div>
<div class="container d-flex aling-items-center justify-content-center">
  <div class="row">
    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
          <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 py-3">
              <h2 class="display-5">Glamping la Fortuna</h2>
              <p class="lead">tranquility, privacy and romance in one place.</p>
            </div>
          
            <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
              <img src="https://i.imgur.com/MPQmgNR.jpg" class="img-fluid" >
            </div>
          </div>
        <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
          <div class="my-3 py-3">
              <h2 class="display-5">Termales San Vicente</h2>
              <p class="lead">The most natural hot springs in Colombia.</p>
          </div>
          <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="https://i.imgur.com/KtYIIno.jpg" class="img-fluid" >
          
          </div></div>
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3">
            <h2 class="display-5">San Luis Nativos</h2>
            <p class="lead">tranquility and privacy.</p>        
          </div>
            <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                <img src="https://i.imgur.com/ltwo5ZG.jpg"  class="img-fluid">
            </div>
        </div>
    </div>
  </div>   
</div>

<div class="class" id="fondoHome">
  <div class="card text-white bg-dark mb-3">
  
    <div class="card-body">
      <h5 class="card-title text-center">Recommendation</h5>
      <p class="card-text text-center">Remember the biosecurity rules for a better stay.</p>
      <p class="card-text text-center"><small class="text-muted">The commitment is from us all</small></p>
    </div>
  </div>

  </br></br>
  <div class="container d-flex aling-items-center justify-content-center alto-100" >
      <div class="row">


          <?php 
          
          foreach($property as $item){

                  $template="
                  <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
                      <div class='card text-white bg-secondary mb-3' style='width: 18rem;'>
                          <img src='{$item->photos}' class='card-img-top' alt='...'>
                          <div class='card-body'>
                              <h5 class='card-title'>{$item->Dwelling}</h5>
                              <p class='card-text'>
                              Pa??s: {$item->Country}
                              City: {$item->City}</br>
                              Location: {$item->Location}</br>
                              Value: {$item->Location}
                          
                              </p>
                              <a href='#' class='btn btn-outline-warning'>Reserve</a>
                          </div>
                      </div>
                      </br>
                  </div>";
      
                  echo $template;     

          }

          ?>

      </div>

  </div>
  <div class="card text-white bg-dark mb-3"> 
    <div class="card-body">
      <h5 class="card-title text-center">Contact us</h5>
      <p class="card-text text-center"><i class="fas fa-phone-volume"></i> - 322 90 00 &nbsp &nbsp &nbsp <i class="fas fa-envelope-open-text"></i> - uroom@gmail.com &nbsp &nbsp &nbsp <i class="fab fa-whatsapp"></i> - 300 002 2323</i></p>
      <p class="card-text text-center"><small class="text-muted">24 hour service</small></p>
    </div>
  </div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://i.imgur.com/eL4jujY.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="https://i.imgur.com/C9d3251.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://i.imgur.com/WH91FXt.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>    
    
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>

