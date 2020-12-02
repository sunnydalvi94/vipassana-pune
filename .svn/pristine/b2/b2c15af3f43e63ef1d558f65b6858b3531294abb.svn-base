   // - .............used for active menu in header.............................. -->
        function makeActiveElement (index){
          if(index){
            window.localStorage.setItem("index",index);  // on click index id
           } 

          else{
            let storeIndex = window.localStorage.getItem('index');
               if(document.getElementById('home_slider')){
                storeIndex ='index1';
            }
             console.log(window.location);
            if(storeIndex){
              const element= document.getElementById(storeIndex);
          element.className += " c-active";
            }
          }
        }
        document.addEventListener('DOMContentLoaded', function(){ 
           makeActiveElement(); // on page refersh
        }, false);


     