$(document).ready(function(){
    
    setTimeout(changeSecondPic, 3000);
     var imagePath = "http://localhost/wordpress/wordpress/wp-content/themes/MySite/images";
     function changeFirstPic() {
         $("#fader").slideDown(2000,"swing")
        $("#fader").slideDown(2000,"swing").attr("src",imagePath +"/pond.jpg");
       

        setTimeout(changeSecondPic, 4000);
         
     }

    
        
    
    function changeSecondPic() {
        
       
           $("#fader").slideDown(2000,"swing");
        $("#fader").slideDown(2000,"swing").attr("src",imagePath +"/resevoir_cafe.jpg");
    


        setTimeout(changeThirdPic, 4000);
        

    }
    
    function changeThirdPic() {
        
        $("#fader").slideDown(2000,"swing");
        $("#fader").slideDown(2000,"swing").attr("src",imagePath + "/roll.jpg");
        

        setTimeout(changeFourthPic, 4000);

    }
    
    function changeFourthPic() {
        
        $("#fader").slideDown(2000,"swing");
        $("#fader").slideDown(2000,"swing").attr("src",imagePath + "/building.jpg");
        

        setTimeout(changeFirstPic, 4000);

    }
    
    
});