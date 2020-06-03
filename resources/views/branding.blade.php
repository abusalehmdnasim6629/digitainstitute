@extends('nav')
@section('content')
<link href='https://fonts.googleapis.com/css?family=Chicle' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Chewy' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Carter One' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;700&display=swap" rel="stylesheet">

    @foreach($conBan as $cb)
    <title>{{$cb->meta_title}}</title>
    @endforeach
    
<style>
 
</style>

<div class="container-fluid">
       <div class="row" style="background: linear-gradient(-110deg, #0000 50%, #F5CBA7  50%);" >
                <div class="col-sm-6">
                    <div class="ml-3" style="">
                    <p class="animated bounce text-capitalize" style="margin-top:15%;color:Red;border-radius:5px;font-size:60px;padding:5px;animation:bounce;animation-duration:2s;font-family: 'Chicle';" data-aos="zoom-in">Learn 
                @if(Session::get('page') == 'digital')
                   Digital Marketing
                @endif  
                @if(Session::get('page') == 'content')
                   Content Marketing
                @endif
                @if(Session::get('page') == 'seo')
                   SEO
                @endif 
                @if(Session::get('page') == 'social')
                   Social Media Marketing
                @endif
                @if(Session::get('page') == 'facebook')
                   Fcebook Marketing
                @endif  

                @if(Session::get('page') == 'brand')
                   Branding
                @endif 

                @if(Session::get('page') == 'employee')
                   Employer Branding
                @endif
                @if(Session::get('page') == 'personal')
                   Personal Branding
                @endif    
                @if(Session::get('page') == 'word')
                   Wordpress
                @endif
                @if(Session::get('page') == 'design')
                   Web design
                @endif
                     With
                     </p>
                    <p class="animated bounce text-capitalize" id="greeting"style="margin-top:20px;color:#2242a5;border-radius:5px;font-size:60px;padding:5px;animation:bounce;animation-duration:2s;font-family: 'Chicle';">Digita Institute</p>
                           <br>
                    <!-- <p id='greeting' class="mt-3 animated bounce" style="color:#016dc7;border-radius:5px;padding:5px;animation:bounce;animation-duration:2s;font-family: 'Chewy';font-size:68px;">Career?</p> -->
                    <a href="" class="btn btn-lg text-white" style="font-family: 'Nunito', sans-serif;border-radius:30px;height:60px;font-size:30px;background-color:#0039a1;"><i class="fas fa-phone-alt" ></i> Contact Us Now</a>
                    </div>
                </div>
                    
                <div class="col-sm-4">
                   
                    <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;margin-top:100px;left:50px;">
                   
                </div>
        
    </div>
</div>

<div class="container-fluid">
       @foreach($couDes as $cod)
       <div class="row p-5" style="background:#FBFCFC;" >
            <h1 class="mx-auto text-center mb-5">{{$cod->title}}</h1>
                <div class="col-sm-10 mx-auto text-center">
                   <p class="mx-auto" style="font-size:25px;font-family: 'Nunito', sans-serif;" >
                    {{ $cod->description }}
                    </p>
           
                    <p class="mx-auto"style="font-size:25px;font-family: 'Nunito', sans-serif;"  >
                    {{ $cod->description2 }}
                    </p>
              
                    <p class="mx-auto" style="font-size:25px;font-family: 'Nunito', sans-serif;"  >
                    {{ $cod->description3 }}
                    </p>
               
                    <p class="mx-auto" style="font-size:25px;font-family: 'Nunito', sans-serif;"  >
                    {{ $cod->description4 }}
                    </p>
                    
                    
                    <a href="" class="btn btn-lg text-white" style="font-family: 'Nunito', sans-serif;border-radius:30px;height:60px;font-size:30px;background-color:#0039a1;"><i class="fas fa-phone-alt" ></i> Contact Us Now</a>
                
                </div>
            @endforeach       
                
        
    </div>
</div>

@if(Session::get('page')!='brand')
<div class="container-fluid">
       <div class="row p-5" style="background:#0000;" >
       @foreach($abCou as $ac)
                <div class="col-sm-8 ">
                <h2 class="mx-auto mb-5">{{$ac->title}}</h2>
                   <p class="mx-auto text-justify" style="font-size:25px;font-family: 'Nunito', sans-serif;" >
                    {{$ac->description}}

                    </p>
           
                    <p class="mx-auto text-justify"style="font-size:25px;font-family: 'Nunito', sans-serif;"  >
                    {{$ac->description2}}
                    </p>
                   
                </div>
         @endforeach    
              
                <div class="col-sm-4 text-center">
                <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>
  
                    
                
        
    </div>
</div>
@endif

@if(Session::get('page')=='digital')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#FBFCFC;" >
                <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>
                <div class="col-sm-8 mx-auto">
                @if(Session::get('page') == 'digital')
                <h2 class="mx-auto mb-5">The Course Structure</h2>
                <p style="font-family: 'Nunito', sans-serif;font-size:20px;">
                Digital marketing is a vast field with many different sectors.
                Our digital marketing course will  help you to have a better understanding about the basics.
                And the practical projects are also included to develop your marketing skill.  
                </p>
                @endif
                  <!-- <ul class="">
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">The A to Z of brand marketing and brand managing</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">How to connect with the target audience</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Creating a graphical identity of a brand</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Developing your skill for a broader level</li>
                      

                  </ul> -->
                  @foreach( $struct as $st)
                     <p style="font-family: 'Nunito', sans-serif;font-size:25px;"><b>{{ $st->title }}</b></p>
                     <p style="font-family: 'Nunito', sans-serif;font-size:20px;">{{ $st->des }}</p>


                  @endforeach
                  
                </div>                
        
    </div>
</div>
@endif





@if(Session::get('page') == 'content')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
               <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>  
                <div class="col-sm-6 mx-auto">
                <h2 class="mx-auto mb-5">Learning Methodology </h2>
                  <ul class="">
                      <li style="font-size:25px;">Multimedia tools like PPT, video and audio recordings, etc.</li>
                      <li style="font-size:25px;">Live lectures by experienced trainers. </li>
                      <li style="font-size:25px;">Practical projects to refine your skills</li>
                      <li style="font-size:25px;">Frequent group discussions with your training mates.</li>
                      <li style="font-size:25px;">Tracking of progress</li>
                      

                  </ul>
                  
                </div>
    
    </div>
</div>
@endif

@if(Session::get('page') == 'social')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
               <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>  
                <div class="col-sm-6 mx-auto">
                <h2 class="mx-auto mb-5">Learning Methodology </h2>
                  <ul class="">
                      <li style="font-size:25px;">Presentation by the Instructor</li>
                      <li style="font-size:25px;">Work on real projects </li>
                      <li style="font-size:25px;">Group discussion</li>
                      
                  </ul>
                  
                </div>

                              
        
    </div>
</div>
@endif

 




@if(Session::get('page') == 'seo')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
               <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>  
                <div class="col-sm-6 mx-auto">
                <h2 class="mx-auto mb-5">Learning Methodology </h2>
                  <ul class="">
                      <li style="font-size:25px;">Presentation by the Trainer</li>
                      <li style="font-size:25px;">You will work on real projects </li>
                      <li style="font-size:25px;">Group discussion</li>
                      
                      

                  </ul>
                  
                </div>

                              
        
    </div>
</div>
@endif

@if(Session::get('page') == 'brand')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
               <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>  
                <div class="col-sm-6 mx-auto">
                <h2 class="mx-auto mb-5">Learning Methodology </h2>
                  <ul class="">
                      <li style="font-size:25px;">Various multimedia tools like powerpoint presentation, video and audio recordings etc</li>
                      <li style="font-size:25px;">Live lectures by experienced instructors.</li>
                      <li style="font-size:25px;">Practical assignments to refine your skills.</li>
                      <li style="font-size:25px;">Frequent group discussions with your training mates.</li>
                      
                      

                  </ul>
                  
                </div>

                              
        
    </div>
</div>
@endif

@if(Session::get('page') == 'employee')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
               <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>  
                <div class="col-sm-6 mx-auto">
                <h2 class="mx-auto mb-5">Learning Methodology </h2>
                  <ul class="">
                      <li style="font-size:25px;">PowerPoint presentation </li>
                      <li style="font-size:25px;">Video recordings, research  reports, etc</li>
                      <li style="font-size:25px;">Case studies and real-life assignments to refine your skills</li>
                      <li style="font-size:25px;">Online lectures by experienced instructors</li>
                      <li style="font-size:25px;">Frequent group discussions among trainees</li>          
                  </ul>
                  
                </div>

                              
        
    </div>
</div>
@endif

@if(Session::get('page') == 'facebook')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
               <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>  
                <div class="col-sm-6 mx-auto">
                <h2 class="mx-auto mb-5">Learning Methodology </h2>
                  <ul class="">
                      <li style="font-size:25px;">The basics of Facebook marketing</li>
                      <li style="font-size:25px;">How to interact with the target audience</li>
                      <li style="font-size:25px;">How to use Facebook tools</li>
                      <li style="font-size:25px;">Developing your skill for a broader level</li>
                      
                      

                  </ul>
                  
                </div>

                              
        
    </div>
</div>
@endif
 
@if(Session::get('page') == 'personal')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
               <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>  
                <div class="col-sm-6 mx-auto">
                <h2 class="mx-auto mb-5">Learning Methodology </h2>
                  <ul class="">
                      <li style="font-size:25px;">Lectures with multimedia tools like MS PowerPoint, video, etc</li>
                      <li style="font-size:25px;">Live lectures by qualified instructors</li>
                      <li style="font-size:25px;">Assignments to apply your knowledge in practical life.</li>
                      <li style="font-size:25px;">Frequent discussions in training forums with your classmates.</li>
                      
                      

                  </ul>
                  
                </div>

                              
        
    </div>
</div>
@endif
 

@if(Session::get('page') == 'design')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
               <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>  
                <div class="col-sm-6 mx-auto">
                <h2 class="mx-auto mb-5">Learning Methodology </h2>
                  <ul class="">
                      <li style="font-size:25px;">Different multimedia tool presentations </li>
                      <li style="font-size:25px;">Practical projects for skill development</li>
                      <li style="font-size:25px;">Virtual lectures by trained instructors</li>
                      <li style="font-size:25px;">Group discussions among learners</li>
                      
                      

                  </ul>
                  
                </div>

                              
        
    </div>
</div>
@endif



@if(Session::get('page') == 'word')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
               <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>  
                <div class="col-sm-6 mx-auto">
                <h2 class="mx-auto mb-5">Learning Methodology </h2>
                  <ul class="">
                      <li style="font-size:25px;">Various multimedia tools like PowerPoint presentation, video and audio recordings etc.</li>
                      <li style="font-size:25px;">Live lectures by experienced instructors. </li>
                      <li style="font-size:25px;">Practical assignments to refine your skills</li>
                      <li style="font-size:25px;">Frequent group discussions with your training mates</li>
                      
                      

                  </ul>
                  
                </div>

                              
        
    </div>
</div>
@endif
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
                
                <div class="col-sm-6 mx-auto">
                <h2 class="mx-auto mb-5">Course Features at a Glance</h2>
                  <ul class="">
                      <li style="font-size:25px;">Total Duration: 3 months</li>
                      <li style="font-size:25px;">Number of classes: 30</li>
                      <li style="font-size:25px;">Duration of each class: 2 hours</li>
                      <li style="font-size:25px;">Class days: Saturday and Sunday</li>
                      

                  </ul>
                  
                </div>

                <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>                
        
    </div>
</div>
@if(Session::get('page')=='social')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#FBFCFC;" >
                <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>
                <div class="col-sm-8 mx-auto">
               
                <h2 class="mx-auto mb-5">What You Will Learn From the Course</h2>
               
              
                  <ul class="">
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">The basics of Facebook marketing</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">How to interact with the target audience</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">How to use Facebook tools</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Developing your skill for a broader level</li>
                 
                      

                  </ul>
                  
                </div>                
        
    </div>
</div>
@endif


@if(Session::get('page')=='employee')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#FBFCFC;" >
                <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>
                <div class="col-sm-8 mx-auto">
               
                <h2 class="mx-auto mb-5">What You Will Learn From the Course</h2>
               
              
                  <ul class="">
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">How to create an employer branding strategy</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">How to connect with the employee</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Creating a positive brand image</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Developing workplace ethics</li>
                 
                      

                  </ul>
                  
                </div>                
        
    </div>
</div>
@endif


@if(Session::get('page')=='brand')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#FBFCFC;" >
                <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>
                <div class="col-sm-8 mx-auto">
               
                <h2 class="mx-auto mb-5">What You Will Learn From the Course</h2>
               
              
                  <ul class="">
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">The A to Z of brand marketing and brand management</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">How to connect with the target audience</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Creating a corporate graphical identity of a brand</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Developing your skill for a broader level</li>
                 
                      

                  </ul>
                  
                </div>                
        
    </div>
</div>
@endif

@if(Session::get('page')=='facebook')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#FBFCFC;" >
                <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>
                <div class="col-sm-8 mx-auto">
               
                <h2 class="mx-auto mb-5">What You Will Learn From the Course</h2>
               
              
                  <ul class="">
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Learn To Create New Ad Sets on Facebook and Page Campaign</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">LinkedIn profile development and business page setup</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Youtube marketing to increase reach and view of contents</li>
                 
                      

                  </ul>
                  
                </div>                
        
    </div>
</div>
@endif

	
@if(Session::get('page')=='personal')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#FBFCFC;" >
                <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>
                <div class="col-sm-8 mx-auto">
               
                <h2 class="mx-auto mb-5">What You Will Learn From the Course</h2>
               
              
                  <ul class="">
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Understand the key components of personal branding.</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Identify the personal views, skills, competencies </li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Craft your message and define it to the audience</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Identify general career desires</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Understand the self-marketing/ self-branding process.</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Create your personal brand content calendar</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Effectively build and grow your own personal brand.</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Establish the core principles of online credibility.</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Social network interactions</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Understanding what's relevant </li>
                  </ul>
                  
                </div>                
        
    </div>
</div>
@endif

@if(Session::get('page')=='word')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#FBFCFC;" >
                <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>
                <div class="col-sm-8 mx-auto">
               
                <h2 class="mx-auto mb-5">What You Will Learn From the Course</h2>
               
              
                  <ul class="">
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">To use PHP, Bootstrap & Gutenberg for WordPress.</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">To create your first WordPress theme.</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">To customize your designs according to your needs, or sell them online.</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">To create and utilize plugins in WordPress.</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">To create apps that tap WordPress's strength.</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">To build eCommerce themes with Woocommerce</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">To create blogs and use CMS features</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">To make SEO-friendly WordPress themes</li>
                  </ul>
                  
                </div>                
        
    </div>
</div>
@endif


@if(Session::get('page')=='design')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#FBFCFC;" >
                <div class="col-sm-4 text-center">
                  <img src="siler3.png" class="mx-auto" alt="Snow" style="width:100%;">
                </div>
                <div class="col-sm-8 mx-auto">
               
                <h2 class="mx-auto mb-5">What You Will Learn From the Course</h2>
               
              
                  <ul class="">
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">The basics of Web Design</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">How to design a powerful website</li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">How to use your creativity </li>
                      <li style="font-size:25px;font-family: 'Nunito', sans-serif;">Developing your skill for a broader level</li>
                  </ul>
                  
                </div>                
        
    </div>
</div>
@endif
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
                
              <div class="col-sm-8 mx-auto">
                <h1 class="display-2 mx-auto mb-5" style="color:#ff5733;">Who Should Enroll</h1>
                  <ul class="">
                   @foreach( $enroll as $en)
                      <li style="font-size:25px;color:#ff5733;">{{$en->point}} </li>
                    @endforeach  
                  </ul>
                  
                </div>

                              
        
    </div>
</div>

<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
                
              <div class="col-sm-10 mx-auto text-center">
                <h1 class="display-3 mx-auto mb-5" style="font-family: 'Carter One';color:black;">Why Take Our Branding Course</h1>
                
                <img src="d4.jpg" class="mx-auto" alt="Snow" style="height:300px;width:300px;">

                  
                </div>

                              
        
    </div>
</div>

<div class="container-fluid">
       <div class="row p-5" style="background: linear-gradient(-110deg, #b39880 50%, #705943  50%);" >
                
              <div class="col-sm-12 mx-auto bg-white">
                 
                 <div class="row">
                    @foreach( $why as $w )
                     <div class="col-sm p-5">
                      
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="d1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4>{{$w->title}}</h4>
                                <p class="card-text"style="font-family: 'Nunito', sans-serif;">{{$w->des}}</p>
                            </div>
                        </div>
                     
                     </div>

                     @endforeach
                     <!-- <div class="col-sm p-5">
                      
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="d2.jpg" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4>Professional Mentors</h4>
                                <p class="card-text"style="font-family: 'Nunito', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                     
                     </div>
                     <div class="col-sm p-5">
                      
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="d3.jpg" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4>Interactive LearningMethod</h4>
                                <p class="card-text"style="font-family: 'Nunito', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                     
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-sm p-5">
                      
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="d1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4>Exclusive Course Material</h4>
                                <p class="card-text"style="font-family: 'Nunito', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                     
                     </div>
                     <div class="col-sm p-5">
                      
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="d2.jpg" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4>Professional Mentors</h4>
                                <p class="card-text"style="font-family: 'Nunito', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                     
                     </div>
                     <div class="col-sm p-5">
                      
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="d3.jpg" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4>Interactive LearningMethod</h4>
                                <p class="card-text"style="font-family: 'Nunito', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                     
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-sm p-5">
                      
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="d1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4>Exclusive Course Material</h4>
                                <p class="card-text"style="font-family: 'Nunito', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                     
                     </div>
                     <div class="col-sm p-5">
                      
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="d2.jpg" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4>Professional Mentors</h4>
                                <p class="card-text"style="font-family: 'Nunito', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                     
                     </div>
                     <div class="col-sm p-5">
                      
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="d3.jpg" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4>Interactive LearningMethod</h4>
                                <p class="card-text"style="font-family: 'Nunito', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                     
                     </div>
                 </div> -->
                  
              </div>
              </div>


                              
        
    </div>
</div>

@if(Session::get('page') == 'digital')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
                
              <div class="col-sm-10 mx-auto">
                <h4 class="mx-auto mb-5" style="font-family: 'Carter One';color:black;">Frequently Asked Questions</h4>
                
                <p>1. How can I contact you to get admission? </p>
                <p><span><b>Ans :</b></span>Simply call us at our given number, or leave a message stating your query.</p>
                <br>
                <p>2. How long is the course duration? </p>
                <p><span><b>Ans :</b></span>Our courses range from 3 months to 6 months.</p>
                <br>
                <p>3. How would I attend the class?</p>
                <p><span><b>Ans :</b></span>All of the classes will be held online through Skype session.</p>
                <br>
                <p>4. Do I need any experience to learn it?</p>
                <p><span><b>Ans :</b></span>Not at all. No previous experience is necessary for enrollment.</p>
                <br>
                <p>5. I am a student. Can I get admitted for the digital marketing training courses?</p>
                <p><span><b>Ans :</b></span>Yes. Our course is available for anyone who wants to learn online marketing</p>
                <br>
                <a href="" class="btn btn-sm text-white" style="font-family: 'Nunito', sans-serif;border-radius:30px;background-color:#0039a1;"><i class="fas fa-sign" ></i> Register For This Course Now</a>
                  
                </div>

                              
        
    </div>
</div>

@endif

@if(Session::get('page') == 'seo')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
                
              <div class="col-sm-10 mx-auto">
                <h4 class="mx-auto mb-5" style="font-family: 'Carter One';color:black;">Frequently Asked Questions</h4>
                
                <p>1. Who can join this SEO training course?</p>
                <p><span><b>Ans :</b></span>Anyone with secured internet connection can join us.</p>
                <br>
                <p>2. What is the fee for this course?</p>
                <p><span><b>Ans :</b></span>10,000 BDT only.</p>
                <br>
                <p>3. Can you provide me with job assistance after I complete the SEO course?</p>
                <p><span><b>Ans :</b></span>We provide you with 100% job assistance.</p>
                <br>
                <p>4. How can I pay my fees for the course?</p>
                <p><span><b>Ans :</b></span>You can pay fees through bKash, Rocket or Nagad</p>
                <br>
                <p>5. Can I get freelance SEO jobs after I complete the SEO course?</p>
                <p><span><b>Ans :</b></span>Yes, there are a lot of opportunities available on the Internet for SEO professionals who wish to work as freelancers. After the completion of your course we will provide you with information about these kinds of jobs.</p>
                <br>
                <a href="" class="btn btn-sm text-white" style="font-family: 'Nunito', sans-serif;border-radius:30px;background-color:#0039a1;"><i class="fas fa-sign" ></i> Register For This Course Now</a>
                  
                </div>

                              
        
    </div>
</div>

@endif

@if(Session::get('page') == 'social')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
                
              <div class="col-sm-10 mx-auto">
                <h4 class="mx-auto mb-5" style="font-family: 'Carter One';color:black;">Frequently Asked Questions</h4>
                
                <p>1. Who can join this social media marketing training course? </p>
                <p><span><b>Ans :</b></span>Anyone with secured internet connection can join us.</p>
                <br>
                <p>2. What is the fee for this course? </p>
                <p><span><b>Ans :</b></span>8,000 BDT only.</p>
                <br>
                <p>3. Can you provide me with job assistance after I complete the SMM course?</p>
                <p><span><b>Ans :</b></span>We provide you with 100% job assistance.</p>
                <br>
                <p>4. How can I pay my fees for the course?</p>
                <p><span><b>Ans :</b></span>You can pay fees through bKash, Rocket or Nagad.</p>
                <br>
                <p>5. I am a student. Can I get admitted for the digital marketing training courses?</p>
                <p><span><b>Ans :</b></span>Yes. Our course is available for anyone who wants to learn online marketing</p>
                <br>
                <a href="" class="btn btn-sm text-white" style="font-family: 'Nunito', sans-serif;border-radius:30px;background-color:#0039a1;"><i class="fas fa-sign" ></i> Register For This Course Now</a>
                  
                </div>

                              
        
    </div>
</div>

@endif

@if(Session::get('page') == 'facebook')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
                
              <div class="col-sm-10 mx-auto">
                <h4 class="mx-auto mb-5" style="font-family: 'Carter One';color:black;">Frequently Asked Questions</h4>
                
                <p>1.How many classes will be in this course?</p>
                <p><span><b>Ans :</b></span>There are a total of 12 classes in this course. Two classes per week.</p>
                <br>
                <p>2. How long is the course duration?</p>
                <p><span><b>Ans :</b></span>Our courses range from 3 months to 6 months.</p>
                <br>
                <p>3. My house is far away. How can I attend the class?</p>
                <p><span><b>Ans :</b></span>All our classes will be held online. You can attend the session from anywhere with your electronic device and internet connection. .</p>
                <br>
                <p>4. Do I need any prior experience for attending this course?</p>
                <p><span><b>Ans :</b></span>No experience is required. Anyone with a keen interest in learning facebook marketing can enroll in this program. </p>
                <br>
                <p>5. How should I contact you?</p>
                <p><span><b>Ans :</b></span>Ans. Give us a call at our number or leave a message with your query. We will contact you back.</p>
                <br>
                <a href="" class="btn btn-sm text-white" style="font-family: 'Nunito', sans-serif;border-radius:30px;background-color:#0039a1;"><i class="fas fa-sign" ></i> Register For This Course Now</a>
                  
                </div>

                              
        
    </div>
</div>

@endif

@if(Session::get('page') == 'design')
<div class="container-fluid">
       <div class="row p-5 h-100 justify-content-center align-items-center" style="background:#0000;" >
                
              <div class="col-sm-10 mx-auto">
                <h4 class="mx-auto mb-5" style="font-family: 'Carter One';color:black;">Frequently Asked Questions</h4>
                
                <p>1. How many classes will be in this course?</p>
                <p><span><b>Ans :</b></span>There are 12 classes in this course. Two classes each week. </p>
                <br>
                <p>2. How long is the course duration?</p>
                <p><span><b>Ans :</b></span>Our course time ranges from 3 months to 6 months.</p>
                <br>
                <p>3. I am a housewife. Can I do the web design course?</p>
                <p><span><b>Ans :</b></span>Yes, you can. You can pick your suitable schedule and immediately start the training.</p>
                <br>
                <p>4. Do I need any experience for attending this course?</p>
                <p><span><b>Ans :</b></span>No experience is required. Anyone with a keen interest in learning facebook marketing can enroll in this program. </p>
                <br>
                <p>5. Where can I reach you?</p>
                <p><span><b>Ans :</b></span>Give us a call at our number or leave a message with your query. We will call you back.</p>
                <br>
                <a href="" class="btn btn-sm text-white" style="font-family: 'Nunito', sans-serif;border-radius:30px;background-color:#0039a1;"><i class="fas fa-sign" ></i> Register For This Course Now</a>
                  
                </div>

                              
        
    </div>
</div>

@endif
<div class="container-fluid">
       <div class="row mt-2 mb-2 ml-5" style="margin-left:15px;background: linear-gradient(-110deg, #0000 50%, #F5CBA7  50%);" >
           
                <div class="col-sm ">
                    <div class="ml-5 h-100 justify-content-center align-items-center">
                    <p class="display-4 animated bounce text-capitalize" style="margin-top:15%;color:Red;border-radius:5px;padding:5px;animation:bounce;animation-duration:2s;font-family: 'Chicle';" data-aos="zoom-in">
                    Registration Going On
                    </p>
                        
                    
                    <a href="" class="btn btn-lg text-white" style="font-family: 'Nunito', sans-serif;border-radius:30px;height:60px;font-size:30px;background-color:#0039a1;"><i class="fas fa-sign" ></i> Register Now</a>
                    <br>
                    <a href="" class="btn btn-lg text-white mt-3 mb-5" style="font-family: 'Nunito', sans-serif;border-radius:30px;height:60px;font-size:30px;background-color:#0039a1;"><i class="fas fa-phone-alt" ></i> Contact Our Admission Team</a>
                    
                    </div>
                </div>
                    
                <div class="col-sm  ml-5 text-center h-100 justify-content-center align-items-center">
                <div class="col-sm-6 mx-auto">
                <h1 class="display-4  mb-5" style="margin-top:15%;color:#ff5733;font-family: 'Chicle';">Upcoming Batch</h1>
                
                <table class="table table-bordered table-striped  mx-auto" style="width:200px;">
                        <thead>
                            <tr>
                            <th scope="col">Batch No</th>
                            <th scope="col">Class Days</th>
                            <th scope="col">Time</th>
                            <th scope="col">Reg. Close</th>
                            <th scope="col">Class Start</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Sun, Thu</td>
                            <td>10:00 pm</td>
                            <td>June 11, 2020</td>
                            <td>June 20, 2020</td>
                            </tr>
                            
                        </tbody>
                        </table>
                     
                    <a href="" class="btn text-white" style="background-color:#30d8a4;width:325px;">LOG IN TO ENROLL</a>    
                    <!-- <h3 class="display-5" style="margin-top:15px;color:#ff5733;">Enrollment Start : </h3>
                    <h2 class="" style="margin-top:15px;color:#ff5733;">Class Start : </h2> -->
                    <div class=" mx-auto mt-2 border mb-5" style="border-color:transparent;width:325px;height:325px;">
                    <table class="table  mx-auto" >
                        
                        <tbody>
                            <tr>
                            <td>FEE</td>
                            <td>5,00</td>
                            </tr>

                            <tr>
                            <td>TYPE</td>
                            <td>ONLINE</td>
                            </tr>

                            <tr>
                            <td>LESSON</td>
                            <td>15</td>
                            </tr>

                            <tr>
                            <td>TARGET</td>
                            <td>GENERAL</td>
                            </tr>

                            <tr>
                            <td>LEVEL</td>
                            <td>BEGINER</td>
                            </tr>

                            <tr>
                            <td>DURATION</td>
                            <td>02.00H</td>
                            </tr>

                            <tr>
                            <td>CLASSES</td>
                            <td>24</td>
                            </tr>
                            
                        </tbody>
                        </table>
                        </div>
                        </div> 
                </div>
              
        
    </div>
</div>
    
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
var text = ["Digita Institute"];
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
</script>
@endsection