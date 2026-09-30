<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PT Indo Aero Semesta</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <style>
            .p1 {
                font-family: Arial, Helvetica, sans-serif;
            }
            p{
                font-size: 18px;
            }
            p.light{
                font-weight: 600;
            }
        </style>
    </head>
    <body>
        <div class="topbar">
            <div class="container topbar-content">
                <span>📍 Jl. Peta Barat No.88F, Kalideres, Jakarta Barat</span>
                <span>✉ marketing@indoaerosemesta.com</span>
                <span>🕒 09:00 AM - 18:00 PM</span>
            </div>
        </div>
        <nav>
            <div class="container navbar">
                <img src="{{ asset('images/logo.png') }}" class="logo">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#parts">Parts</a></li>
                    <li>
                        <a href="#" id="contactBtn">
                            Contact
                        </a> 
                    </li>
                    <p class="light" 
                    class="p1" > 📞  +62-21 5456557</p>
                </ul>
            </div>
        </nav>

        <div id="contactModal" class="modal">
            <div class="modal-content">
                <span class="close-contact">&times;</span>
                <img src="{{ asset('images/logo.png') }}"
                class="modal-logo">
                <h2>PT Indo Aero Semesta</h2>
                <hr>
                <p>
                    📍Jl.Peta Barat No.88F,
                    Kalideres, Jakarta Barat
                </p>
                <p>
                    ✉ 
                    <a href="mailto:marketing@indoaerosemesta.com"> 
                        marketing@indoaerosemesta.com
                    </a>
                </p>
                <p>
                    📞
                    <a href="tel:+62215456557">
                        +62 21-5456557
                    </a>
                </p>
                <p>
                   🕒 Monday - Friday
                    <br>
                    09.00 AM - 18.00 PM
                </p>
                <button class="close-contact-btn">
                    Close
                </button>
            </div>
        </div>
        @yield('content')
        <script>
            const modal=document.getElementById('modal');
            document.querySelectorAll('.part-card').forEach(btn=>{
                btn.onclick=function(){
                    document.getElementById('modalPart').innerText=this.dataset.number;
                    document.getElementById('modalDesc').innerText=this.dataset.description;
                    modal.style.display='block';
                }
            });

            document.querySelector('.close').onclick=function(){
                modal.style.display='none';
            }
            document.querySelector(".close-btn").onclick=function(){
                modal.style.display="none";
            }
            window.onclick=function(e){
                if(e.target==modal){
                    modal.style.display='none';
                }
            }
            const search=document.getElementById("searchInput");
            if(search){
                let timer;
                search.addEventListener("keyup",function(){
                clearTimeout(timer);
                timer=setTimeout(()=>{
                window.location.href='/?search='+encodeURIComponent(this.value);
                },400);
                });
            }

            const contactModal = document.getElementById("contactModal");
            document.getElementById("contactBtn").onclick = function(e){
                e.preventDefault();
                contactModal.style.display = "block";
            }
            document.querySelector(".close-contact").onclick = function(){
                contactModal.style.display = "none";
            }
            document.querySelector(".close-contact-btn").onclick = function(){
                contactModal.style.display = "none";
            }
            document.addEventListener("click",function(e){
                if(e.target == contactModal){
                    contactModal.style.display = "none";
                }
            });

            const parts = document.getElementById("parts");
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry =>{
                    if(entry.isIntersecting){
                        parts.classList.add("show");
                    }
                });
            },{
                threshold:0.15
            });
            observer.observe(parts);
        </script>
        
    </body>
</html>