// JavaScript file (script.js)

// Wait for the DOM content to be loaded
document.addEventListener('DOMContentLoaded', function() {
    // Get the elements
    const bar = document.getElementById('bar');
    const nav = document.getElementById('navbar');
    const close=document.getElementById('close');
   
    // Add event listener to the bar element
    if (bar) {
        bar.addEventListener('click', function() {
            // Add 'active' class to the nav element
            nav.classList.add('active');

            // Apply CSS styles dynamically
            applyStyles();
        });
    }
    if(close){
            close.addEventListener('click',function() {
                nav.classList.remove('active');
            })
        }
    
 
    // Function to apply CSS styles dynamically
    function applyStyles() {
        const styleElement = document.createElement('style');
        styleElement.textContent = `
            @media(max-width: 799px) {
                #navbar.active {
                    right: 0px;
                  }
            }
        `
        ;
        // Append the style element to the document head
        document.head.appendChild(styleElement);
    }
});
