<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FGRS</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine&display=swap">
  <link rel="shortcut icon" href="image/african.jpg" type="image/x-icon">
  <link rel="stylesheet" href="style/all.css">
  <link rel="stylesheet" href="style/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .text-gold {
      color: #FFD700;
    }
    .bg-gold {
      background-color: #FFD700;
    }
    body {
      font-family: 'Inter', sans-serif;
    }
    .side,a{
      display: flex;
      justify-content:center;
      padding: 10px;
      color:yellow;
    }
    a:hover{
      color:white;
    }
    
  </style>
</head>
<body class="bg-black text-white">

<!-- Navbar -->
<nav class="bg-black text-white fixed w-full z-50 shadow-2xl  backdrop-blur-md bg-opacity-90">
    <div class="container mx-auto flex justify-between items-center p-4">
      <div class="text-3xl font-bold text-gold">FGRS</div>
      <div class="hidden md:flex space-x-8 font-medium">
        <a href="#home" class="hover:text-gold transition duration-300">Home</a>
        <a href="#about" class="hover:text-gold transition duration-300">About</a>
        <a href="#keyfeatures" class="hover:text-gold transition duration-300">Key Features</a>
        <a href="#faqs" class="hover:text-gold transition duration-300">FAQs</a>
        <a href="#contact" class="hover:text-gold transition duration-300">Contact</a>
      </div>
      <div class="md:hidden ming">
        <button id="menu-btn" class="ming">
          <svg class="h-8 w-8 ming" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path class="ming" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  
    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-black text-white space-y-2 p-4 mnb">
      <a href="#home" class="block hover:text-gold transition duration-300">Home</a>
      <a href="#about" class="block hover:text-gold transition duration-300">About</a>
      <a href="#keyfeatures" class="block hover:text-gold transition duration-300">Key Features</a>
      <a href="#faqs" class="block hover:text-gold transition duration-300">FAQs</a>
      <a href="#contact" class="block hover:text-gold transition duration-300">Contact</a>
    </div>
  </nav>
  
<!-- Hero Section -->
<section id="home" class="pt-28 pb-16 bg-black">
  <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6">
    <div class="max-w-xl space-y-6">
      <h1 class="text-4xl md:text-5xl font-bold leading-tight text-gold">Unlocking Potential Through FGRS Support One Member At A Time      </h1>
      <p class="text-lg text-gray-300">FGRS is a platform that provides support for research and development in the field of knowledge management.</p>
    </div>
    <div class="mt-8 md:mt-0">
      <img src="image/fgrs.jpg" alt="Hero" class="w-full max-w-md">
    </div>
  </div>
</section>

<!-- WAITLIST Section -->
<section id="waitlist" class="bg-gray-900 py-16">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-4xl font-bold text-gold mb-4">Join the Waitlist</h2>
    <p class="text-gray-300 mb-8 text-lg">Be the first to access FGRS when we launch. Join <span id="waitlist-count" class="text-gold font-bold"></span> others!</p>
    <div id="waitlist-form" class="flex flex-col md:flex-row justify-center gap-4">
      <input type="email" placeholder="Enter your email"  id="email"
        class="px-4 py-3 rounded-lg w-full md:w-96 text-black focus:outline-none focus:ring-2 focus:ring-gold">
        <input type="text" placeholder="Enter Your Phone Number"  id="phone"
        class="px-4 py-3 rounded-lg w-full md:w-96 text-black focus:outline-none focus:ring-2 focus:ring-gold">
      <p type="submit"
        class="bg-gold text-black font-bold px-8 py-3 rounded-lg hover:bg-yellow-400 transition" id="submit">Join Waitlist</p>
        <div class="flex items-center justify-center  bg-black">
           
          </div>
          
  </div>
   <div id="join-error" class="flex flex-col md:flex-row justify-center gap-4"></div> 
    <p id="join-success" class="mt-4 hidden text-green-400 font-semibold">You've been added to the waitlist!</p>
  </div>
</section>

<!-- About -->
<section id="about" class="container mx-auto py-16 px-6">
  <h2 class="text-4xl font-bold text-gold mb-8">About FGRS</h2>
  <p class="text-gray-300 text-lg leading-relaxed">
    FGRS (Four Golden Rings Syndicate) empowers individuals and organizations by providing innovative tools and resources for sustainable growth.
    Our mission is to support research, development, and knowledge management to help you achieve success efficiently.
  </p>
</section>

<!-- Key Features -->
<section id="keyfeatures" class="bg-gray-900 py-16">
  <div class="container mx-auto px-6">
    <h2 class="text-4xl font-bold text-center text-gold mb-12">Key Features</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Feature Card -->
      <div class="bg-black p-6 rounded-lg shadow-lg text-center">
        <img src="image/hand.jpg" alt="Innovative Tools" class="mx-auto mb-6 w-24 h-24 rounded-full">
        <h3 class="text-2xl font-bold text-gold mb-4">Innovative Tools</h3>
        <p class="text-gray-300">Cutting-edge tools to streamline research and development processes.</p>
      </div>
      <div class="bg-black p-6 rounded-lg shadow-lg text-center">
        <img src="image/close-up.jpg" alt="Collaboration" class="mx-auto mb-6 w-24 h-24 rounded-full">
        <h3 class="text-2xl font-bold text-gold mb-4">Collaboration</h3>
        <p class="text-gray-300">Connect with researchers and innovators to achieve shared goals.</p>
      </div>
      <div class="bg-black p-6 rounded-lg shadow-lg text-center">
        <img src="image/sustainable.jpg" alt="Sustainable Growth" class="mx-auto mb-6 w-24 h-24 rounded-full">
        <h3 class="text-2xl font-bold text-gold mb-4">Sustainable Growth</h3>
        <p class="text-gray-300">Long-term success through powerful resources and solutions.</p>
      </div>
      <div class="bg-black p-6 rounded-lg shadow-lg text-center">
        <img src="image/people.jpg" alt="Data Security" class="mx-auto mb-6 w-24 h-24 rounded-full">
        <h3 class="text-2xl font-bold text-gold mb-4">Data Security</h3>
        <p class="text-gray-300">Your information is safe with advanced encryption and protection.</p>
      </div>
      <div class="bg-black p-6 rounded-lg shadow-lg text-center">
        <img src="image/medium.jpg" alt="User-Friendly" class="mx-auto mb-6 w-24 h-24 rounded-full">
        <h3 class="text-2xl font-bold text-gold mb-4">User-Friendly Interface</h3>
        <p class="text-gray-300">Smooth navigation with an intuitive, clean design.</p>
      </div>
      <div class="bg-black p-6 rounded-lg shadow-lg text-center">
        <img src="image/industrial.jpg" alt="Customizable" class="mx-auto mb-6 w-24 h-24 rounded-full">
        <h3 class="text-2xl font-bold text-gold mb-4">Customizable Solutions</h3>
        <p class="text-gray-300">Adapt FGRS to your specific needs with flexible features.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQs -->
<section id="faqs" class="container mx-auto py-16 px-6">
  <h2 class="text-4xl font-bold text-gold text-center mb-12">Frequently Asked Questions</h2>
  <div class="space-y-8">
    <div class="bg-black p-6 rounded-lg shadow-md">
      <h3 class="text-2xl font-bold text-gold mb-2">What is FGRS?</h3>
      <p class="text-gray-300">FGRS provides innovative tools and support for sustainable research and development.</p>
    </div>
    <div class="bg-black p-6 rounded-lg shadow-md">
      <h3 class="text-2xl font-bold text-gold mb-2">Who can use FGRS?</h3>
      <p class="text-gray-300">Researchers, professionals, and organizations aiming for growth and efficiency.</p>
    </div>
    <div class="bg-black p-6 rounded-lg shadow-md">
      <h3 class="text-2xl font-bold text-gold mb-2">How secure is my data?</h3>
      <p class="text-gray-300">FGRS employs robust security protocols and encryption for your data.</p>
    </div>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="bg-orange-400 text-black py-16">
  <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between">
    <form class="w-full md:w-1/2 space-y-6">
      <input type="text" placeholder="Your Name" required class="w-full p-3 rounded border border-black focus:outline-none">
      <input type="email" placeholder="Your Email" required class="w-full p-3 rounded border border-black focus:outline-none">
      <textarea placeholder="Your Message" rows="4" required class="w-full p-3 rounded border border-black focus:outline-none"></textarea>
      <button type="submit" class="bg-black text-white font-bold py-3 px-6 rounded hover:bg-gray-800">Send Message</button>
    </form>
    <div class="mt-10 md:mt-0 md:ml-12">
      <h3 class="text-3xl font-bold mb-4">Get in Touch</h3>
      <p class="leading-relaxed">Email: support@fgrs.com<br>Phone: +123-7010282697<br>Address: 123 FGRS Lane, Innovation City, USA</p>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-black py-8 text-center">
  <p class="text-gold font-bold">FGRS - Future Growth and Resource Solutions</p>
  <p class="text-gray-500 text-sm mt-2">© 2025 FGRS. All Rights Reserved.</p>
  <div class="side">
   <a href="https://www.facebook.com/clickcashgroup"><i class="fab fa-facebook-messenger"></i></a> 
   <a href=""><i class="fab fa-whatsapp"></i></a>
  <a href="https://x.com/FourGoldenRings?t=m1UL10pnHfwuMxeul7QODg&s=09"><i class="fab fa-twitter"></i></a>
  <a href="https://youtube.com/@fourgoldenrings?si=QNfRn_8-nU2Fs1JX "><i class="fab fa-youtube"></i></a>
  <a href="https://www.instagram.com/fourgoldenrings?igsh=aGJhbHR1MTNiZzA3"> <i class="fab fa-instagram"></i></a>
  </div>
</footer>

<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

 window.onload=function(){
    const waitlist_count = document.getElementById('waitlist-count');
    let count=0
  let inf=  setInterval(() => {
        waitlist_count.innerHTML = count + 1;
        count++;
        if (count == 623) {
            console.log("Waitlist count reached 623!");
            clearInterval(inf);
        }
    }, 10);
    console.log("Page loaded successfully!");
 }




 const submit=document.getElementById('submit');

 submit.addEventListener('click', async function (params) { 
    submit.setAttribute('disabled',true);
 submit.innerHTML= `<div class="animate-spin rounded-full h-6 w-6 border-t-4 border-black border-solid"></div>`
    const data={
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value
    }
    const resp =await fetch('addWait.php',{
        method:'POST',
        headers:{
            'Content-Type':'application/json'
        },
        body:JSON.stringify(data)
    }).then((res)=>res.json())
    .then((data)=>{
        if (data.status==='error') {

          Object.entries(data.error).map(([ky,val]) => {
              const p= `<p class="text-red-500">${val}</p>`
              document.getElementById('join-error').innerHTML +=p
          });

         
          document.getElementById('join-error').classList.remove('hidden');
            submit.removeAttribute('disabled');
            submit.innerHTML='Join Waitlist'; 
            
        }else{
            document.getElementById('join-success').classList.remove('hidden');
            document.getElementById('join-error').classList.add('hidden');
            document.getElementById('email').value='';
            submit.innerHTML='You Are Now On Our Waitlist';
            document.getElementById('waitlist-count').innerHTML++;
            setTimeout(() => {
                document.getElementById('join-success').classList.add('hidden');
            }, 3000);
            submit.removeAttribute('disabled');
        
        }
        console.log(data);
    })
 })

 window.onclick=function(e){
  
  if (!e.target.classList.contains("ming")) {
    if (document.querySelector(".mnb").classList.contains('hidden')) {
      //document.querySelector(".mnb").classList.remove('hidden')
    }else{
      document.querySelector(".mnb").classList.add("hidden");
    }
    
  }
 }
</script>

</body>
</html>
