@extends('component.layout')

@section('title')
Home Page
@endsection

@section('navbar')
    @include('component.navbar')
@endsection

@section('footer')
    @include('component.footer')
@endsection
@section('content')

<div class="overlay-container">
    <!-- Background Image -->
    <div class="background-image"></div>
    <!-- Text Overlay -->
    <div class="text-overlay">
        <h1>Nearest Event</h1>
        <div class="d-flex justify-content-center">
              <!-- Hours Section -->
              <div class="col-md-2 me-2">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Hours</h5>
                  </div>
                    <div class="card-body">
                      
                        <p id="hours" class="card-text font-time fs-3">00</p>
                    </div>
                </div>
                
            </div>
              <!-- Minutes Section -->
              <div class="col-md-2 me-2">
                <div class="card">
                    <div class="card-header">
                      <h5 class="card-title">Minutes</h5>
                    </div>
                    <div class="card-body">
                      
                        <p id="minutes" class="card-text font-time fs-3">00</p>
                    </div>
                </div>
            </div>
    
            <!-- Seconds Section -->
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Seconds</h5>
                    </div>
                    <div class="card-body">
                      
                        <p id="seconds" class="card-text font-time fs-3">00</p>
                    </div>
                </div>
            </div>
        </div>
        <!--More Info Button-->
        <a class="btn btn-danger mt-2" href="#">More Info</a>
    </div>
    <div class="position-relative d-none d-lg-block" style="height:  150px; z-index:2000;">
        <!--Front White Wave-->
      <div class="wavy" style="left: -400px; top: 390px;">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 396 900 205" width="1500px" height="195px" style="">
              <path d="M0 396L21.5 405.7C43 415.3 86 434.7 128.8 441.5C171.7 448.3 214.3 442.7 257.2 433.7C300 424.7 343 412.3 385.8 404.8C428.7 397.3 471.3 394.7 514.2 406.5C557 418.3 600 444.7 642.8 457C685.7 469.3 728.3 467.7 771.2 472C814 476.3 857 486.7 878.5 491.8L900 497L900 601L878.5 601C857 601 814 601 771.2 601C728.3 601 685.7 601 642.8 601C600 601 557 601 514.2 601C471.3 601 428.7 601 385.8 601C343 601 300 601 257.2 601C214.3 601 171.7 601 128.8 601C86 601 43 601 21.5 601L0 601Z" fill="#fff"></path>
          </svg>
      </div>
      <div class="wavy" style="right: -340px; top: 390px; transform: scaleX(-1);">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 396 900 205" width="1500px" height="205px" style="">
              <path d="M0 396L21.5 405.7C43 415.3 86 434.7 128.8 441.5C171.7 448.3 214.3 442.7 257.2 433.7C300 424.7 343 412.3 385.8 404.8C428.7 397.3 471.3 394.7 514.2 406.5C557 418.3 600 444.7 642.8 457C685.7 469.3 728.3 467.7 771.2 472C814 476.3 857 486.7 878.5 491.8L900 497L900 601L878.5 601C857 601 814 601 771.2 601C728.3 601 685.7 601 642.8 601C600 601 557 601 514.2 601C471.3 601 428.7 601 385.8 601C343 601 300 601 257.2 601C214.3 601 171.7 601 128.8 601C86 601 43 601 21.5 601L0 601Z" fill="#fff"></path>
          </svg>
      </div>
  </div>
</div>

<div id="carouselExampleControls " class="carousel carousel-dark slide overflow-hidden pb-4 my-4-sm" data-bs-ride="carousel">
<div class="carousel-inner position-relative">
            <div class="container-fluid position-relative">
          <h1 class="p-3 fw-bold text-center" style="color:#942454">Registration Open</h1>
          <div class="carousel-item active text-center">
              <div class="card-wrapper container-sm d-flex justify-content-around">
                  <div class="card m-1 shadow" style="width: 18rem;">
                      <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title mb-3">Makan Pagi</h5>
                          <a class="btn btn-primary mb-4" href="#">Register</a>
                          <div class="accordion d-none d-lg-block" id="accordionMakanPagi">
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingMakanPagi">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMakanPagi" aria-expanded="false" aria-controls="collapseMakanPagi">
                                          Description
                                      </button>
                                  </h2>
                                  <div id="collapseMakanPagi" class="accordion-collapse collapse" aria-labelledby="headingMakanPagi" data-bs-parent="#accordionMakanPagi">
                                      <div class="accordion-body justify-text">
                                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque corporis maiores perferendis inventore! Alias rerum at excepturi vitae numquam, tempore labore aliquam nihil impedit non error eius! Corrupti, nesciunt vero!
                                      </div>
                                  </div>
                              </div>
                          </div>
                        
                      </div>
                  </div>
                  <div class="card m-1 shadow" style="width: 18rem;">
                      <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title mb-3">Malam Gala</h5>
                          <a class="btn btn-primary mb-4" href="#">Register</a>
                          <div class="accordion d-none d-lg-block" id="accordionMalamGala">
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingMalamGala">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMalamGala" aria-expanded="false" aria-controls="collapseMalamGala">
                                          Description
                                      </button>
                                  </h2>
                                  <div id="collapseMalamGala" class="accordion-collapse collapse" aria-labelledby="headingMalamGala" data-bs-parent="#accordionMalamGala">
                                      <div class="accordion-body justify-text">
                                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque corporis maiores perferendis inventore! Alias rerum at excepturi vitae numquam, tempore labore aliquam nihil impedit non error eius! Corrupti, nesciunt vero!
                                      </div>
                                  </div>
                              </div>
                          </div>
                        
                      </div>
                  </div>
                  <div class="card m-1 shadow" style="width: 18rem;">
                      <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title mb-3">Boe Apetite</h5>
                          <a class="btn btn-primary mb-4" href="#">Register</a>
                          <div class="accordion d-none d-lg-block" id="accordionBoeApetite">
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingBoeApetite">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBoeApetite" aria-expanded="false" aria-controls="collapseBoeApetite">
                                          Description
                                      </button>
                                  </h2>
                                  <div id="collapseBoeApetite" class="accordion-collapse collapse" aria-labelledby="headingBoeApetite" data-bs-parent="#accordionBoeApetite">
                                      <div class="accordion-body justify-text">
                                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque corporis maiores perferendis inventore! Alias rerum at excepturi vitae numquam, tempore labore aliquam nihil impedit non error eius! Corrupti, nesciunt vero!
                                      </div>
                                  </div>
                              </div>
                          </div>
                        
                      </div>
                  </div>
              </div>
          </div>
          
      </div>
      
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
      
    </div>
  
    <div class="position-relative m-0 d-none d-lg-block" style="height:  150px;">
       
          <!--Front White Wave-->
        <div class="wavy" style="left: -400px; top: 80px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 396 900 205" width="1500px" height="195px" style="">
                <path d="M0 396L21.5 405.7C43 415.3 86 434.7 128.8 441.5C171.7 448.3 214.3 442.7 257.2 433.7C300 424.7 343 412.3 385.8 404.8C428.7 397.3 471.3 394.7 514.2 406.5C557 418.3 600 444.7 642.8 457C685.7 469.3 728.3 467.7 771.2 472C814 476.3 857 486.7 878.5 491.8L900 497L900 601L878.5 601C857 601 814 601 771.2 601C728.3 601 685.7 601 642.8 601C600 601 557 601 514.2 601C471.3 601 428.7 601 385.8 601C343 601 300 601 257.2 601C214.3 601 171.7 601 128.8 601C86 601 43 601 21.5 601L0 601Z" fill="#6454a4"></path>
            </svg>
        </div>
        <div class="wavy" style="right: -300px; top: 80px; transform: scaleX(-1);">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 396 900 205" width="1500px" height="205px" style="">
                <path d="M0 396L21.5 405.7C43 415.3 86 434.7 128.8 441.5C171.7 448.3 214.3 442.7 257.2 433.7C300 424.7 343 412.3 385.8 404.8C428.7 397.3 471.3 394.7 514.2 406.5C557 418.3 600 444.7 642.8 457C685.7 469.3 728.3 467.7 771.2 472C814 476.3 857 486.7 878.5 491.8L900 497L900 601L878.5 601C857 601 814 601 771.2 601C728.3 601 685.7 601 642.8 601C600 601 557 601 514.2 601C471.3 601 428.7 601 385.8 601C343 601 300 601 257.2 601C214.3 601 171.7 601 128.8 601C86 601 43 601 21.5 601L0 601Z" fill="#6454a4"></path>
            </svg>
        </div>
    </div>
    
  </div>
  
 
  
  <div class="container-fluid py-4" style="background-color: #6454a4;">
   
    <div class="row">
         
      <div class="col-lg-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15950.841223502393!2d103.0824356!3d1.8625888!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d05eac3fffffff%3A0x643c3c58e5280384!2sFaculty%20of%20Technical%20and%20Vocational%20Education%20(FPTV)%20-%20Universiti%20Tun%20Hussein%20Onn%20Malaysia!5e0!3m2!1sen!2smy!4v1715492655884!5m2!1sen!2smy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-6">
            <h1 class="text-white fw-bold">Send A Message To Us</h1>
            <form action="" method="POST">
                <div class="mb-3 form-floating">
                    <input class="form-control" type="text" id="fullname" name="fullname" placeholder=" ">
                    <label for="fullname" class="form-label">Full Name</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder=" ">
                    <label for="email" class="form-label">Email address</label>
                </div>
                <div class="mb-3 form-floating">
                    <textarea class="form-control" id="message" name="message" placeholder=" " style="height: 100px"></textarea>
                    <label for="message" class="form-label" >Message</label>
                </div>
                
            </form> 
            <!-- Add your form here -->
      </div>
      
    </div>
   
  </div>
  <div style="background-color:#6454a4;">
    <div class="position-relative m-0 overflow-hidden  d-none d-lg-block" style="height: 150px; z-index:2000;">
       
          <!--Front White Wave-->
        <div class="wavy" style="left: -400px; top: 30px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 396 900 205" width="1500px" height="195px" style="">
                <path d="M0 396L21.5 405.7C43 415.3 86 434.7 128.8 441.5C171.7 448.3 214.3 442.7 257.2 433.7C300 424.7 343 412.3 385.8 404.8C428.7 397.3 471.3 394.7 514.2 406.5C557 418.3 600 444.7 642.8 457C685.7 469.3 728.3 467.7 771.2 472C814 476.3 857 486.7 878.5 491.8L900 497L900 601L878.5 601C857 601 814 601 771.2 601C728.3 601 685.7 601 642.8 601C600 601 557 601 514.2 601C471.3 601 428.7 601 385.8 601C343 601 300 601 257.2 601C214.3 601 171.7 601 128.8 601C86 601 43 601 21.5 601L0 601Z" fill="#312783"></path>
            </svg>
        </div>
        <div class="wavy" style="right: -300px; top: 30px; transform: scaleX(-1);">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 396 900 205" width="1500px" height="205px" style="">
                <path d="M0 396L21.5 405.7C43 415.3 86 434.7 128.8 441.5C171.7 448.3 214.3 442.7 257.2 433.7C300 424.7 343 412.3 385.8 404.8C428.7 397.3 471.3 394.7 514.2 406.5C557 418.3 600 444.7 642.8 457C685.7 469.3 728.3 467.7 771.2 472C814 476.3 857 486.7 878.5 491.8L900 497L900 601L878.5 601C857 601 814 601 771.2 601C728.3 601 685.7 601 642.8 601C600 601 557 601 514.2 601C471.3 601 428.7 601 385.8 601C343 601 300 601 257.2 601C214.3 601 171.7 601 128.8 601C86 601 43 601 21.5 601L0 601Z" fill="#312783"></path>
            </svg>
        </div>
      </div>
  </div>
@endsection
