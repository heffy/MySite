$(document).ready(function(){
    
    setTimeout(changeSecondPic, 3000);

     function changeFirstPic() {
         $("#fader").slideDown(2000,"swing")
        $("#fader").slideDown(2000,"swing").attr("src","images/pond.jpg");
       

        setTimeout(changeSecondPic, 4000);
         
     }

    
        
    
    function changeSecondPic() {
        
       
           $("#fader").slideDown(2000,"swing");
        $("#fader").slideDown(2000,"swing").attr("src","images/resevoir_cafe.jpg");
    


        setTimeout(changeThirdPic, 4000);
        

    }
    
    function changeThirdPic() {
        
        $("#fader").slideDown(2000,"swing");
        $("#fader").slideDown(2000,"swing").attr("src","images/roll.jpg");
        

        setTimeout(changeFourthPic, 4000);

    }
    
    function changeFourthPic() {
        
        $("#fader").slideDown(2000,"swing");
        $("#fader").slideDown(2000,"swing").attr("src","images/building.jpg");
        

        setTimeout(changeFirstPic, 4000);

    }
    
    
});