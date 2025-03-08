<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Opal Palace</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 1200,
            })
            window.addEventListener("scroll", function() {
                let logo = document.getElementById("logo");

                if (window.scrollY > 50) { 
                    logo.classList.add("scrolled-logo"); // Add zoom-in-down effect
                } else {
                    logo.classList.remove("scrolled-logo"); // Restore original
                }
            });
        </script>
    </head>
    <body>
        <div id="head-1">
            <div id="sub-head">
            <div id="menu">
                <div>
                    <?php include("menu.php"); ?>
                </div>
            </div> 
            
            
            </div>    
        </div>
        </div>
    </body>