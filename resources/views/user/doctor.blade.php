<section class="teams" id="teams">
      <div class="max-width">
        <h1 class="heading">Our Doctor</h1>

      

          <div class="carousel owl-carousel">
          @foreach($doctor as $doctors)   
              <div class="cardds">
                  <div class="boxs">
                        <img src="doctorimage/{{$doctors->image}}" alt="">
                      <div class="text">{{$doctors->name}}</div>
                      <div class="text">Speciality <br>{{$doctors->speciality}}</div>
                     
                  </div>
                 
              </div>
              @endforeach        
            </div>
          </div>
      </div>
  </section>