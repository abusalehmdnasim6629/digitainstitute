@extends('nav')
@section('content')
<link href='https://fonts.googleapis.com/css?family=Chicle' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Chewy' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600;700&display=swap" rel="stylesheet">

<title>Smart Training Institute in Bangladesh | Digita Institute</title>
<style>
 #hr {
  border-top: 1px dotted ;
 }
  #button {
  border-radius: 4px;
  background-color: #0039a1;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 23px;
  padding: 20px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  border-radius:35px;
}
#button:hover{
background-color:#016dc7;
}
#bt {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

#bt:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

#button:hover #bt {
  padding-right: 25px;
  
}

#button:hover #bt:after {
  opacity: 1;
  right: 0;
}
}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}
</style>

<div class="container-fluid">
       <div class="row" style="background-color:#cadae1" >
         <div class="col-sm-8 containerr">
           <div style="margin-top:15%;margin-left:10%;">
             
             <p class="display-2 d-inline animated bounce text-capitalize" style="font-family: 'Nunito', sans-serif;font-weight:bold;color:#003fa6;border-radius:5px;padding:5px;animation:bounce;animation-duration:2s;" data-aos="zoom-in">{{ $bn->text1 }}</p>
       
             
             <div class="mt-3" style="height:100px;">
              
              
              <!-- <p id='greeting' class="d-inline animated bounce" style="color:#016dc7;border-radius:5px;padding:5px;animation:bounce;animation-duration:2s;font-family: 'Chewy';font-size:68px;">Career?</p> -->

              <p style="font-family: 'Nunito', sans-serif;color:#016dc7;border-radius:5px;padding:5px;font-weight:bold;font-size:68px;">
                <a href="" class="typewrite" data-period="2000" data-type='[ "Career?", "Freelancing?", "Bussiness?"]'>
                  <span class="wrap"></span>
                </a>
             </p>
             </div>

             <div class="text-center mt-5">
             <!-- <button class="btn btn-lg font-weight-bold mt-5 text-white text-center" id="containerr" style="width:200px;background-color:#0039a1;border-radius:30px;font-size:25px;">
             
             Contact Us 
             <i class='fas fa-angle-right'></i> -->
             <a href="" id="button" ><span id="bt"><b>Contact Us </b></span></a>
             </div>
            </div>
        </div>
        <div class="col-sm-4">
             <img src="{{ $bn->banner_image }}"  alt="Snow" style="width:100%;margin-top:100px;">
        </div>
        
        </div>
    </div>

    
    
    <div class="container-fluid">
        <div class="row" style="background-color:#0000;" >
          <div class="col-sm-10 mx-auto" id="about">
           <h1 class="text-center text-primary mt-5">{{ $st->title }}</h1>
          
           <div class="col-sm-10 mx-auto">
           <p class="mx-auto text-justify" >
           {{ $st->description1 }}
           </p>

           <p class="mx-auto text-justify">
           {{ $st->description2 }}
           </p>
           </div>
           <div class="col-sm-10 mx-auto text-center">
           <button class="btn btn-lg text-white mb-5" style="background-color:#0039a1;">
           <i class="far fa-arrow-alt-circle-right"></i>
           Learn More About Us</button>
           </div>
          </div>
        </div>
    </div>
   

    
    <div class="container-fluid">
        <div class="row p-5" style="background-color:#f2f4f9;"   >
            <h1 style="" class="mx-auto text-center text-primary">Training Categories We Offer</h1>
            <?php
                 $i = 1
            ?>
          @foreach($tc as $tc)
            
            <div class="col-sm-8 mx-auto">
              <div class="col-sm-12">
               <div class="row mt-3">
                  
                    @if($i == 1)
                       
                          <div class="col-sm-6" data-aos="fade-right" >
                            <div style="margin-top:20%;">
                              <h4>{{ $tc->title }}</h4>
                              <hr id="hr">
                              <p class="text-justify">{{ $tc->description }}</p>
                            </div>
                          </div>
                          <div class="col-sm-6" data-aos="fade-left">
                              <img class="img responsive w-100 border" style="height:300px;border-color:transparent;border-radius:10px;"src="{{URL::to($tc->image)}}"alt="">
                          </div>
                              <?php
                                  $i = 0
                              ?>   
                      @else  
                                     
                              <div class="col-sm-6" data-aos="fade-right">
                                  <img class="img responsive w-100 border"style="height:300px;border-color:transparent;border-radius:10px;"src="{{URL::to($tc->image)}}"alt="">
                              </div>
                              <div class="col-sm-6" data-aos="fade-left" >
                                <div style="margin-top:20%;">
                                  <h4>{{ $tc->title }}</h4>
                                  <hr id="hr">
                                  <p class="text-justify">{{ $tc->description }}</p>
                                </div>
                              </div>
                                  <?php
                                      $i = 1
                                  ?>
                              
                      @endif
                    
                </div>
              </div>
            </div>
          @endforeach



        </div>
    </div>



    <div class="container-fluid">
        <div class="row mt-5  p-5" style="background: -webkit-linear-gradient(#0039a1,#0bbafa);
    background: -o- linear -gradient(#0039a1,#0bbafa);
    background: -moz- linear -gradient(#0039a1,#0bbafa);
    background: linear -gradient(#0039a1,#0bbafa); " >
        <ul class="mx-auto text-center">
            <oi><h1 class="mx-auto text-white">Practical Content Marketing & Writing</h1></oi>
            <oi><h2 class="mx-auto text-white">Course Outline</h2>
            <hr style="width:220px;border-top: 2px dotted white">
            </oi>
        </ul>

        <div class="col-sm-10 mx-auto">
            <div class="row">
               <div class="col-sm" data-aos="fade-right">
                   <ul class="text-white">
                       @foreach($oTpC1 as $pc)

                        <oi><h6 class=""><i class="far fa-check-circle"></i>  {{$pc->Content}}</h6></oi>

                       @endforeach
                       
                   </ul>
               </div>

               <div class="col-sm" data-aos="fade-up">
                    <ul class="text-white">

                          @foreach($oTpC2 as $pc)

                              <oi><h6><i class="far fa-check-circle"></i>  {{$pc->Content}}</h6></oi>

                          @endforeach
                       
                    </ul>
               </div>


               <div class="col-sm" data-aos="fade-left">
                    <ul class="text-white">
                        
                            @foreach($oTpC3 as $pc)

                                 <oi><h6><i class="far fa-check-circle"></i>  {{$pc->Content}}</h6></oi>

                            @endforeach
                        
                    </ul>
               </div>
            </div>
        </div>
        

   
        <div class="row text-white" >
          <div class="col-sm-10 mx-auto"> 
        
           <h2 class="text-center">Course Details</h2>
           <hr style="width:220px;border-top: 2px dotted white">
            
            <div class="col-sm-12 mx-auto">
              <div class="col-sm-10 mx-auto">
               <div class="row">
                <div class="col-sm-6" >
                   <div style="margin-top:10%;">
                   <ul class="">
                        
                        <li><h6>Three months’ course 48 hours of live class on Skype</h6></li>
                        <li><h6>Classes will be held on Saturday & Sunday</h6></li>
                        <li><h6>Course Fee: Tk. 30,000</h6></li>
                        <li><h6>Ramadan Discount: 70%</h6></li>
                        <li><h6>Discounted Fee is not applicable after Ramadan</h6></li>
                   </div>
                </div>
                <div class="col-sm-5 mx-auto">
                    <img class="img responsive w-100 mb-3 border" style="border-color:transparent;border-radius:10px;"src="{{'placeholder.png'}}"alt="">
                </div>
                </div>
              </div>
            </div>
            </div> 
          </div>
        </div> 

    <div class="container-fluid">
        <div class="row mt-5 mb-5 " style="background-color:#0000;">
          <div class="col-sm-10 mx-auto text-center p-5"> 
            
            
            
            <div class="col-sm-12">
              
               <div class="row">
               <div class="col-sm-8 mx-auto mb-5">
                <h1 class="mx-auto text-center text-primary" style="">Why Choose Digita Institute
                       For Skills Development</h1>
                
                </div>
              </div>
            </div>

            <div class="col-sm-8 mx-auto">
              
                <div class="row mx-auto" >
                
                    
                        <div class="col-sm bg-white text-center mr-4 p-2" style="height:150px;box-shadow:0 2px 5px rgb(0,0,153);">
                          <i class='fas fa-edit text-primary' style='font-size:48px;'></i>
                          <h6 style="margin-top:20px;">Quality Course Material</h6>
                  
                        </div>
                    

                  

                    
                    <div class="col-sm text-center bg-white mr-4 p-2" style="height:150px;box-shadow:0 2px 5px rgb(0,0,153);">
                    
                      <i class='fas fa-user-tie text-primary' style='font-size:48px;'></i>
                      <h6 style="margin-top:20px;">Expert Trainers</h6>
                    
                    </div>
                    


                   
                        <div class="col-sm text-center bg-white mr-4 p-2" style="height:150px;box-shadow:0 2px 5px rgb(0,0,153);">
                          <i class="fa fa-home  text-primary" style="font-size:48px;"></i>
                            <h6 style="margin-top:20px;">Learn From Home</h6>
                          
                          </div>
                    
                 

                   
                        <div class="col-sm bg-white mr-4 text-center p-2" style="height:150px;box-shadow:0 2px 5px rgb(0,0,153);">
                          <i class="fas fa-business-time  text-primary" style="font-size:48px;"></i>
                          <h6 style="margin-top:20px;">Job Placement</h6>
                        
                        </div>
                   
                  
                
                </div>


                <div class="row mx-auto mt-4">
                     
                          <div class="col-sm bg-white mr-4 text-center p-2" style="height:150px;box-shadow:0 2px 5px rgb(0,0,153);">
                              
                              <i class="fas fa-users-cog  text-primary" style="font-size:48px;"></i>
                              <h6 style="margin-top:20px;">Interactive Learning Method</h6>
                            
                            </div>
                   
               

                
                    
                          <div class="col-sm mr-4 bg-white text-center p-2" style="height:150px;box-shadow:0 2px 5px rgb(0,0,153);">
                    
                          <i class="fas fa-tv  text-primary" style="font-size:48px;"></i>
                            <h6 style="margin-top:20px;">Practical Sessions</h6>
                          
                          </div>
                    

                  
                  
                          <div class="col-sm bg-white mr-4 text-center p-2" style="height:150px;box-shadow:0 2px 5px rgb(0,0,153);">
                          <i class="fas fa-graduation-cap  text-primary" style="font-size:48px;"></i>
                  
                            <h6 class=""style="margin-top:20px;">Internship Opportunity</h6>
                          
                          </div>
              
                    
                 
                          <div class="col-sm mr-4 bg-white text-center p-2" style="height:150px;box-shadow:0 2px 5px rgb(0,0,153);">
                          <i class="fas fa-users  text-primary" style="font-size:48px;"></i>
                          <h6 style="margin-top:20px;">Digita Club Membership</h6>
                    
                           </div>
                 
                  

                   
                
                </div>

              </div>    
            </div>



            </div> 
          </div>
        </div> 
      

        <div class="container-fluid">
        <div class="row mb-5 p-5" style="background: -webkit-linear-gradient(#0bbafa,#0000);
              background: -o- linear -gradient(#0bbafa,#0000);
              background: -moz- linear -gradient(#0bbafa,#0000);
              background: linear -gradient(#0bbafa,#0000); " >
      <div class="col-sm-10 mx-auto"> 
           <ul class="mx-auto">
               <oi><h1 class="text-center text-white" style="">Our Upcoming Events</h1></oi>
           </ul>
            
            <div class="col-sm-10 mx-auto mt-5">
              <div class="col-sm-12">
               <div class="row">

               <div class="col-sm-6">
                    <img class="img responsive w-100" style="border-color:transparent;border-radius:10px;"src="{{$ue->image}}"alt="">
                </div>
                <div class="col-sm-5 mx-auto" >
                   <div class="row">
                   <div class="col-sm mx-auto" >
                   <h3 class="col-sm" >The Power & Process Of <br><b>Content Marketing</b></h3>
                   <hr id="hr">
                   <div class="col-sm bg-white mr-4 mb-2 p-2 "  style="height:150px;box-shadow:0 2px 5px rgb(0,0,153);">
                      <h4 class="col-sm mt-3" style="color:#003190;font-family: 'Nunito', sans-serif;font-weight:bold;"><i class="far fa-calendar-alt" aria-hidden="true"></i>  May 16, 2020</h4>
                      <h4 class="col-sm" style="color:#003190;font-family: 'Nunito', sans-serif;font-weight:bold;"><i class="far fa-clock" aria-hidden="true"></i>  {{$ue->time}}</h4>
                      <h4 class="col-sm" style="color:#003190;font-family: 'Nunito', sans-serif;font-weight:bold;"><i class="fa fa-try" aria-hidden="true"></i>  {{$ue->cost}} Taka</h4>
                            
                   </div>
                   
                   <br>
          

                   <a id="button" href="#registerModal2" data-toggle="modal" ><span id="bt">Register Now </span></a>


                   </div>
                  
                   </div>
                </div>
                
                </div>
              </div>
            </div>
            </div> 
          </div>
       </div> 


       <div class="container-fluid">
        <div class="row p-2" style="background-color:#0039a1;">
        <div class="col-sm-12 mx-auto">
            <div class="row">
            <ul class="mx-auto text-center">
                <oi><h1 class="mx-auto text-white">All courses</h1></oi>
              
            </ul>
          </div>
        </div>
        <div class="col-sm-10 text-center mx-auto">
            <div class="row ml-5">
              
              @foreach($courses as $cr)
               <div class="col-sm-4">
                   
                   <ul class="text-white  text-left">
                        
                        <oi><h4>{{$cr->name}}</h4></oi>
                       
                        <?php 
                           $cd = DB::table('coursedetail')
                               ->join('courses','coursedetail.course_id','=','courses.id')
                               ->select('coursedetail.*')
                               ->where('course_id',$cr->id)
                               ->get()
                        ?>
                      @foreach($cd as $cd)
                        <li class="text-left ml-5"style=""><p>{{$cd->name}}</p></li>
                      @endforeach  
                   </ul>
               </div>
               @endforeach
               

            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
var text = ["Freelancing?", "Bussiness?", "Career?"];
var counter = 0;
var elem = $("#greeting");
setInterval(change, 3000);
function change() {
    elem.fadeOut(function(){
        elem.html(text[counter]);
        counter++;
        if(counter >= text.length) { counter = 0; }
        elem.fadeIn();
    });
}


var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.00em solid #fff}";
        document.body.appendChild(css);
    };
</script>
@endsection