// ............................ one day course tabs...........................
 $('#tab_id').ready(function(){
      var allTab = document.getElementById('tab_id')
      if(allTab){
     	var getFirstTab = allTab.firstElementChild	
     	if(getFirstTab){
     	   getFirstTab.click();	
     	}
      }
    
 });

      function onTabChange(param){
        switch(param) {
          case 1:
            param ='swargate'
            break;
          case 2:
            param ='kothrud'
            break;
             case 3:
             param ='camp'
            break;
             case 4:
              param ='narhe'
            break;
          default:
              param ='swargate'
        }
        if(param){
       		 window.location=window.location.pathname + '#' +param;	
        }
        
      }

// ...........................group sitting....................................

    $('#group_id').ready(function(){
      var allGroup = document.getElementById('group_id')
      if(allGroup){
     	var getFirstTab = allGroup.firstElementChild	
     	if(getFirstTab){
     	   getFirstTab.click();	
     	}
      }
    
 });


    function onGrpTabChange(param){
        console.log(param);
        switch(param) {
          case 1:
            param ='baner'
            break;
          case 2:
            param ='bibwewadi'
            break;
             case 3:
             param ='camp'
            break;
             case 4:
              param ='deccan'
            break;
            case 5:
              param ='kalyani_nagar'
            break;
            case 6:
              param ='kothrud'
            break;
            case 7:
              param ='kothrud(females)'
            break;
            case 8:
              param ='margarpatta_city'
            break;
            case 9:
              param ='pimpri'
            break;
            case 10:
              param ='spine_road'
            break;
            case 11:
              param ='swargate'
            break;
            case 12:
              param ='wakad'
            break;
            case 13:
              param ='wakad'
            break;
            case 14:
              param ='warje'
            break;
          default:
              param ='baner'
        }
        if (param) {
        window.location=window.location.pathname + '#' +param;
        }
      }

   

 