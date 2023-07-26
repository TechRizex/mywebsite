<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>
 
     
 
    


<!DOCTYPE html>
<html>
   <head>
       <meta name="viewport" content="with-device-width,initial-scale=1.0">
       <title> My New Tech website</title>
       <!-- <link rel="stylesheet" href="Style.css"> -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
   </head>
   <style>
*{
    margin: 0;
    padding:  0;
    
 }
 .header{
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(  https://images.pexels.com/photos/3379934/pexels-photo-3379934.jpeg?auto=compress&cs=tinysrgb&w=600);
    background-position: center;
    background-size: cover;
    position: relative;
 }
 nav{
    display: flex;
    padding: 0% 0.4%;
    justify-content: space-between;
    align-items: center;
 }
 nav img{
    width: 100px;
    position: left;
    align-items: left;
 }
 .nav-links{
    flex: 1;
    text-align: right;
    
 }
 .nav-links ul li{
    list-style: none;
    display:inline-block;
    padding: 10px 12px;
    position: relative;
 }
 .nav-links ul li a{
    color :#fff;
    text-decoration: none;
    font-size: 18px;
 }
 .nav-links ul li::after{
    content: '';
    width: 0%;
    height:2px;
    background: #f44336;
    display: block;
    margin: auto;
    transition: 0.5s;
 }
 .nav-links ul li:hover::after
 {

    width: 100%;
 }
.text-box{
    width: 90%;
    color:#fff;
    position: absolute;
    top:50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}
.text-box h1{
    font-size: 50px;
    
}
.text-box p{
  margin: 58px 0 51px;
    font-size: 22px;
    color: #fff;
    
}
.hero-btn{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border: 1px solid #ffff;
    padding: 12px 34px;
    font-size: 18px;
    background: transparent;
    position: relative;
    cursor: pointer;
}
.hero-btn:hover{

    border: 1px solid #f44336;
    background: #f44336;
    transition: 1s;
    
}
nav .fa{

     display: none;
}
@media(max-width: 700px) {
    
  .header{
    min-height: 150vh;
    width: 100%;
  }

    .text-box h1{
        font-size: 20px;
        
    }
    .nav-links ul li{
        display: block;
    }
  .Technique h1{
    font-size: 10px;
    
  }
  .Technique h3{
    font-size: 20px;
    text-align: left;
  }
  .Technique p  {
    font-size: 10px;
    text-align: left;
  }
  .Technique img{
    text-align: left;
    width: 200px;
  }
    }
section{
        background-color: plum;
    
    }

.Technique{
    width: 80%;
    
    margin: auto;
    text-align: center;
    padding-top: 100px;
    

}
h1{
 
    font-size: 57px;
    font-weight: 600;
    text-align: center;
}
p{
    color: #080606;
    font-size: 25px;
    font-weight: 1oo;
    line-height: 22px;
    padding: 10px;
    text-align: center;
}
.row{
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
}
.Technique-col{
   
     
    text-align: center;
  
}
.Technique h3{
  
    text-align: center;
    font-weight: 600;
    margin: 10px 0;
    font-size: 45px;
    color:#b40c30

    
}
 .border-btn{
    display: inline-block;
    text-decoration: none;
    color: rgb(3, 4, 15);
    border: 1px solid rgb(33, 24, 209);
    padding: 12px 34px;
    font-size: 23px;
    background: transparent;
    position: relative;
    cursor: pointer;
 }
.border-btn:hover{
    border: 1px solid #d2c2c0;
    background: #ebc7c5;
    transition: 1s;
    
}
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

   </style>
   <body>
      
   
    <section class="header">
<nav>
           <a href="index.html"><img src="  https://logoisus.com/wp-content/uploads/2021/06/tech-logo2__2522.jpg"></a>
   <div class="nav-links" >
       
           <ul>
               <li><a href="home.php">HOME</a></li>
               <li><a href="Technique">TECHNIQUE</a></li>
               <li><a href="Testimonials">TESTIMONIAL</a></li>
               <li><a href="cta">CANTACT US</a></li>
               <li><a href="logout.php">LOGOUT</a></li>
          </ul>
   </div>    
   
</nav>

<div class="text-box">
   <h1 style="color: #fff">  Top 11 New Technology  of Computer industry </h1>
   <p style="color:rgb(184, 224, 23)"> Making Website is now one of the  easiest thing in the World. 
       You  need to learn <br> about What comes New Techonology in this World

   </p>
   <a href=""class="hero-btn" style="color:rgb(32, 212, 149)">Visit Us to Know More</a>
   
   
       
       <marquee behavior="scroll" direction="left" scrollamount="12">  <h2 style="color:darkorchid">The use of technology is widely prevalent in medicine, science,</h2> </marquee><br>

           <marquee behavior="scroll" direction="left" scrollamount="10">  <h2 style="color:rgb(40, 11, 204)">    industry, communication, transportation, and daily life.</h2> </marquee> <br>
               <marquee behavior="scroll" direction="left" scrollamount="8">   <h2 style="color:rgb(211, 110, 33)">Technologies include physical objects like utensils or </h2></marquee> <br>
                   <marquee behavior="scroll" direction="left" scrollamount="6">   <h2 style="color:rgb(36, 186, 216)">machines and intangible tools such as software.</h2></marquee>
        
</div>
    </section>
     
    <!-- Technique -->
    <section class="Technique">
       <h1 style="color:blue"> New Computer Technology of The World</h1>
       <p> The 21st century has been a century of technological change. <br>
        Several highly commercial and trending technologies during the early 2000s have entirely <br>
        vanished, and new ones have taken their place. Many completely  new technologies have also
    <br> come up in 2022, especially in the arena of computer science and engineering. These new technologies
       <br> in 2022 are only likely to grow and perhaps even reach the common person’s hands. </p>
       <p>If you want to learn about trending technologies in 2022-23 and stay updated, <br>
           let’s dive in. Here are the new trending technologies in 2022 you  <br>
            should check out and learn to master if you want to get an edge in the market.</p>
    <div class="row">
       <div class="Technique-col">
           <h3> 1. Artificial Intelligence and Machine Learning</h3>
           <p>Artificial intelligence and machine learning once represented the cutting edge of computer science. <br>
               When these technologies were created in the last 20th century, they hardly had any applications and were,<br>
                in fact,  mostly academic. However, these technologies have gained applications over the years and reached ordinary <br>
                people’s hands through their mobile phones and is currently one of the latest technologies in computer. <br>
                <br>
                <br>
                Machine learning represents a computer science field in which an algorithm can predict future data based on <br>
                 previously generated data.Artificial intelligence represents the next step in machine learning, in which an  <br>
                 algorithm develops data-based intelligence and can even carry out essential tasks on its own.</p>
             <img src=" https://miro.medium.com/max/850/1*UUxaCY5zOcSbYVvw8Ync-A.jpeg">
                <p>Both artificial intelligence and machine learning requires advanced knowledge of statistics. Statistics help you <br>
                   determine the results that your algorithm might throw up for a particular dataset, thus evolving it further. <br>
                   The proliferation of machine learning applications has meant that the number of jobs in this field has also grown. <br>
                   Machine learning is among the leading technologies of this century. A career in this domain can expose you to <br> 
                   advanced computational infrastructure and novel research in the field. <br>
                   making this a fine new technology in 2022 you should consider getting into. Having a job in machine learning <br> 
                   and artificial intelligence domain(s) places you at the forefront of technological development in the field of computer science.</p>
               <img  height="500" width="1000"src="https://misti.mit.edu/sites/default/files/styles/hero_home_desktop/public/2022-03/human-like-robot-and-artificial-intelligence-2022-01-06-00-25-53-utc.jpg?h=67494091&itok=C7js1A7t">
               </div>
    </div>    
    <div class="row">
       <div class="Technique-col">
           <h3> 2.  Data science</h3>
           <p>Recent technology in computer science is Data Science. For much of the initial part of the 21st century, 
               data science was the next big thing. 
               Data science,
                has been around for much longer than just the past twenty months. For centuries, data analysis 
                has been an essential task for companies, government, institutions, and departments.
                 Analysing data helps understand the efficiency of processes, conduct surveys of the 
                 workforce, and gauge people’s general However, as of today, much of data analysis has turned digital.
                Data analysis is among the first jobs that computers are turned to for In the early 2000s, data analysis was so prevalent that students
                were being taught introductory courses on the subject in school.</p> 
               <img height="500px" width=" 900px" src="https://s3.ap-south-1.amazonaws.com/upgrad.prod.blog/blog/wp-content/uploads/2021/03/31114703/shutterstock_746652745-1024x683.jpg" alt="">
           <P>In the 2022s, data analysis is likely to blow up more than ever. With computational technology growing at a more 
               excellent pace than ever, the data analysis capabilities in people’s hands are likely to increase. Newer, 
               faster data analysis algorithms and methods are likely to come up and be put into practice.
               The benefit of having a career in data science, regardless of the domain your company works in, is 
               that you are an essential part of the firm’s overall business. The data that you produce and the
                interpretations that you provide are likely to be a necessary part of the business strategy of any 
                company that you serve. In retail and e-commerce, data science is widely used to determine campaigns’ success and the
                general trend of various products’ growth. This, in turn, helps develop strategies for the 
                promotion of particular products or types of products. In health care, data informatics can be 
                essential in recommending low-cost options and packages to patients and allowing doctors to choose
                 the safest yet most effective treatments for them.</P>    
                 <img src="https://d1m75rqqgidzqn.cloudfront.net/wp-data/2019/09/11134058/What-is-data-science-2.jpg" alt="">
           </div>
    </div>     
    <div class="row">
       <div class="Technique-col">
           <h3> 3.  Robotic Process Automation</h3>
          <P>Robotic Process Automation isn’t just about robots. It is a lot more about the automation of processes than anything else. 
           Before computers, most processes involved some human intervention. Humans ran even manufacturing machines, 
           and large-scale manufacturing employs thousands of people.However, since computers have taken over most processes, manufacturing hasn’t been left untouched 
           either. All domains, be it manufacturing or information technology, now involve some automation in 
           their processes. The amount of human intervention in these processes is only reducing, and this
            trend is likely to continue for the foreseeable future.Jobs in robotic process automation typically involve a significant amount of coding knowledge.
            You would typically need to write code that would enable computerised or non-computerised processes
             to be done automatically without human intervention. These processes could mean anything from automatic email replies to automated data analysis and
            automatic processing and financial transactions approval. Robotic process automation makes tasks 
            considerably faster for the common consumer by making such approvals automatic based on certain 
            conditions entered by the programmer.  In sectors such as financial services, robotic process 
            automation can reduce the lean time to approve financial transactions online. It improves the
             productivity of the company as a whole, as well as that of its clients.</P>
             <img src=" https://www.intelrealsense.com/wp-content/uploads/2020/04/header_robotic_automation-1024x576.jpg">
                <p>Both artificial intelligence and machine learning requires advanced knowledge of statistics. Statistics help you <br>
                   determine the results that your algorithm might throw up for a particular dataset, thus evolving it further. <br>
                   The proliferation of machine learning applications has meant that the number of jobs in this field has also grown. <br>
                   Machine learning is among the leading technologies of this century. A career in this domain can expose you to <br> 
                   advanced computational infrastructure and novel research in the field. <br>
                   making this a fine new technology in 2022 you should consider getting into. Having a job in machine learning <br> 
                   and artificial intelligence domain(s) places you at the forefront of technological development in the field of computer science.</p>
               <img src=" https://www.devteam.space/wp-content/uploads/2022/04/Build-Robots-for-a-Robotic-Process-Automation.jpg">
               </div>
    </div> 
    <div class="row">
       <div class="Technique-col">
           <h3> 4. Full Stack Development </h3>
           <p>Artificial intelligence and machine learning once represented the cutting edge of computer science. <br>
               When these technologies were created in the last 20th century, they hardly had any applications and were,<br>
                in fact,  mostly academic. However, these technologies have gained applications over the years and reached ordinary <br>
                people’s hands through their mobile phones and is currently one of the latest technologies in computer. <br>
                <br>
                <br>
                Machine learning represents a computer science field in which an algorithm can predict future data based on <br>
                 previously generated data.Artificial intelligence represents the next step in machine learning, in which an  <br>
                 algorithm develops data-based intelligence and can even carry out essential tasks on its own.</p>
             <img src=" https://media.bitdegree.org/storage/media/images/2018/11/What-Is-A-Full-Stack-Developer-and-Everything-You-Need-to-Know-to-Start.jpg">
                <p>Both artificial intelligence and machine learning requires advanced knowledge of statistics. Statistics help you <br>
                   determine the results that your algorithm might throw up for a particular dataset, thus evolving it further. <br>
                   The proliferation of machine learning applications has meant that the number of jobs in this field has also grown. <br>
                   Machine learning is among the leading technologies of this century. A career in this domain can expose you to <br> 
                   advanced computational infrastructure and novel research in the field. <br>
                   making this a fine new technology in 2022 you should consider getting into. Having a job in machine learning <br> 
                   and artificial intelligence domain(s) places you at the forefront of technological development in the field of computer science.</p>
               <img src=" https://dvokhk8ohqhd8.cloudfront.net/assets/engineering_types/full_stack/hero_image-6d2af04d8ff26b2334e0f866b3e3671b8c5e32fca0f4883c2e6a35248e36d77d.svg" >
               </div>
    </div> 
    <div class="row">
       <div class="Technique-col">
           <h3>  5. Edge Computing</h3>
           <P>During the early part of the 21st century, cloud computing was considered the next big thing. In cloud computing,
                data is uploaded to a centralised repository that may access it regardless of location. 
                Cloud Computing began to be used in commercial devices only close to 2010. 
                By the time it was 2022, cloud computing had become a prevalent technology. In just about a decade, cloud computing had turned from being an esoteric term to being a part of a few 
               devices in almost everybody’s house. In 2022, 
               cloud computing is no longer among the top technology trends but rather a thing of the past.
               The next step after cloud computing is edge computing. It is another rising new technology in 2022 which is 
               very similar to cloud computing, except that data is not stored in a centralised repository. In areas where 
               network access might be difficult or impossible, cloud computing is challenging since you can no longer access
                the repository where your data is stored. What edge computing does is transfer data closer to the location
                where it needs to be used.
                Edge computing has excellent applications in the Internet of Things devices. As far as IoT is concerned, a
                physical device you need to control with your smartphone should not need to access data from a centralised
                 repository that might be thousands of kilometres away. Instead, data should stay as close to the device as
                  possible.
                Edge computing allows the data to remain at the edge of the cloud and the device for processing so that 
               commands can be followed through in a smaller amount of time.
               Edge computing jobs have only begun to grow with IoT devices proliferation over the past few years. As the number of these devices increases, edge computing roles are likely to become more prevalent and lucrative, placing it firmly among the trending technologies in 2021-22.</P>
               <img src=" https://innovationatwork.ieee.org/wp-content/uploads/2019/06/Real-Life-Use-Cases-for-Edge-Computing_1024X684.png">
               </div>
    </div>    
    <div class="row">
       <div class="Technique-col">
           <h3> 6. Blockchain</h3>
            <p>You have probably heard of Blockchain in the past few years, mostly in the context of cryptocurrency. <br>
               However, Blockchain has grown to have several different applications. The significant part about  <br>
               Blockchain is that it is never under the complete control of a single entity due to being entirely <br>
               consensus-driven. It can never change the data you store in the Blockchain used widely in sharing   <br>
                medical data in the healthcare industry. Due to the security that Blockchain provides, this data <br>
                can be shared among parties pretty much <br>
               seamlessly. Another application of Blockchain is in maintaining the integrity of payment systems. <br>
                Blockchain-based payment systems are currently highly immune to external attacks and theft. <br>
                Blockchain can also be used in tracking the status of products in a supply chain in real-time.
              <img src="https://s3.ap-south-1.amazonaws.com/upgrad.prod.blog/blog/wp-content/uploads/2021/03/31115004/shutterstock_659241235-Converted-01-768x543-1.jpg" alt=""> 
               </p>
              <img  src=" https://www.i-scoop.eu/wp-content/uploads/2019/12/Edge-computing.jpg"> 
               </div>
    </div>  
    <div class="row">
       <div class="Technique-col">
           <h3> 7.Cyber Security</h3>
           <p>The number of devices and coverage about digital technologies has been rising, hence the threat by
                cyber-attacks on such devices. Cyber attacks can take many forms, from phishing to identity 
                theft, and the need to guard the greater user coverage of the internet is greater than ever.
                  Simple antivirus software is no longer sufficient if you want to save yourself from cyber
                attacks. The development of better, more sophisticated technologies to guard against cyber
                 threats is the subject of multiple academia and industry projects worldwide.
                Companies are involved not just in making new commercial technologies to protect individual 
               domestic consumers against cyber attacks. Some of the most frequent cyber-attacks are government 
               data repositories or the storage facilities of large companies. Nearly all large companies need a
                way to protect their data and their employees’ data and associated firms.
               Jobs in cybersecurity have been growing at thrice the pace as other tech jobs, primarily due to
                the reasons mentioned above. Not only are these jobs incredibly well-paying, but they are also 
                some of the most critical positions in any firm. The 5G market in India is estimated to reach
                 INR 19 Billion by 2025 so this new technology in 2022 can be a game-changer. 
                 <img height="400" width="1200" src=" https://www.analog.com/-/media/analog/en/technologies/cyber-security/cyber-security-hero-mobile.jpg?la=en&imgver=1">
               Especially in domains such as e-commerce and retail, the importance of cybersecurity cannot be 
               underscored. Thousands of customers store their personal and financial data on retail companies’ 
               websites to allow for easy payments. They also have accounts and passwords, which need to be
                protected. Similarly, in the healthcare industry, patient data needs to be protected against
                 cyber threats.</p>
                 <h2>How to become a cyber security analyst?</h2>
                 <p>If you want to pursue this profession, upGrad and IIIT-B can help you with a PG Diploma in Software
                    Development Specialization in Cyber Security. The course offers specialization in application security, 
                    cryptography, data secrecy, and network security.
                      Apart from the above, we give you BONUS top 9 latest trending technologies that are a big hit this 2022.</p>
           
              <img src=" https://www.simplilearn.com/ice9/free_resources_article_thumb/What_Is_A_Cyber_Security_Analyst.jpg">
               </div>
    </div>      
    <div class="row">
       <div class="Technique-col">
           <h3>  8. Cloud-Native Platforms</h3>
           <p>Recent technology in computer science is Cloud-Native Platforms. Building durable, dynamic, and adaptable
                new application architectures using cloud-native platforms enables you to adapt to quick changes in 
                the digital landscape.
               Cloud-native platforms are an improvement over the old lift-and-shift method of using the cloud, which
                misses out on its benefits and makes maintenance more difficult.</p>
           
             <img src=" https://imageio.forbes.com/specials-images/imageserve/5f9fa9e815da35da1356a28b/The-5-Biggest-Cloud-Computing-Trends-In-2021/960x0.jpg?format=jpg&width=960">
               
               </div>
    </div> 
    <div class="row">
       <div class="Technique-col">
           <h3> 9. Composable Apps  </h3>
           <p>One of the new technologies popular this 2021-22 is composable applications
                that are created using modular, business-focused building blocks.  Composable applications speed up the time to market for innovative software
                solutions and unleash enterprise value by making it simpler to use and reuse code</p>
           
             
                <img src=" https://10xds.com/wp-content/uploads/2022/05/Composable-applications_Blog.jpg">     
               </div>
    </div> 
    <div class="row">
       <div class="Technique-col">
           <h3>  10.  Decision Intelligence  </h3>
           <p>One of the many trending technologies in 2021-22 is Decision Intelligence. 
               An effective strategy to enhance corporate decision-making is called decision intelligence. 
               It uses intelligence and analytics to guide, learn from, and improve decisions by modelling 
               each choice as a collection of processes.
              Through the use of augmented analytics, simulations, and AI, decision intelligence may support
                and improve human decision-making as well as possibly automate it.</p>
           
                <img src=" https://miro.medium.com/max/1200/1*X77-km9TmcWqjvP-uUbKhg.jpeg">
               
               </div>
    </div>
     <div class="row">
       <div class="Technique-col">
           <h3> 11.  Distributed Enterprises  </h3>
           <p>To enhance staff experiences, digitalize customer and partner touchpoints,
                and expand product experiences, distributed enterprises represent a digital-first, remote-first company
                 strategy.The needs of remote workers and customers, who are driving demand for virtual
                  services and hybrid workspaces,   are better met by distributed enterprises.</p>
           
             <img src=" https://www.bairesdev.com/wp-content/uploads/2022/04/distributed-entreprise-1-1024x683.jpg">
             <h2>These are all Computer Skillls</h2>  
<img   height="500" width="1200" src= "  https://www.bairesdev.com/wp-content/uploads/2022/04/distributed-enterprise-1-1024x683.jpg"  >
              </div>
    </div> 
    
    <section  class="Testimonials"> 
       <h1>What Our This site People Things</h1>
       <p>Making Website is now one of the  easiest thing in the World. 
           You  need to learn <br> about What comes New Techonology in this World</p>
           <div class="Testimonial-col">
               <img src=" https://saraswati-seva-foundation.org/wp-content/uploads/2021/08/rahul_singh.jpg" >
               <div>
                   <p>The 21st century has been a century of technological change. <br>
                       Several highly commercial and trending technologies during the early 2000s have entirely <br>
                       vanished, and new ones have taken their place. Many completely  new technologies have also
                   <br> come up in 2022, especially in the arena of computer science and engineering.</p>
                 <h3>Soft.Engg Rahul Singh</h3>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-o"></i>
               </div>
           </div>
           <div class="Testimonial-col">
               <img src= " https://mma.prnewswire.com/media/1176651/Jupiter_Medical_Center___Dr_Charles_Murphy.jpg" >
               <div>
                   <p>The 21st century has been a century of technological change. <br>
                       Several highly commercial and trending technologies during the early 2000s have entirely <br>
                       vanished, and new ones have taken their place. Many completely  new technologies have also
                   <br> come up in 2022, especially in the arena of computer science and engineering.</p>
                   <h3>Dr. Charles Rastogi</h3>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half-o"></i>
               </div>
           </div>

    </section>
   <!-- Call To Aciton -->
    <section class="cta">
           <h1>If you want to ask upcoming new  Technology about  of The World
           </h1>
           <a href="home.php"class="border-btn">CANTACT US</a>
           
    </section>
                                                                                                                                                                                                                                                                                                                                         
   </section>
   
    </body>
</html>
   
    
 