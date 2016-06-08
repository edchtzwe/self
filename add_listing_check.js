/**
*Chong Tze Wei @ Edmund; 7440820@gmail.com; https://github.com/edchtzwe; https://au.linkedin.com/in/chong-tze-*wei-7b7564103;
**/

$(document).ready(function(){    
    $("#listing").submit(function(e){
        var pass = [false, false, false, false];
        pass[0] = checkKitchen();
//        alert('one ' + pass[0]);
        pass[1] = checkLocation();
//        alert('two ' + pass[1]);
        pass[2] = checkPrice();
//        alert('three ' + pass[2]);
        pass[3] = checkTime();           
//        alert('four ' + pass[3]);z
        
        if(pass[0] && pass[1] && pass[2] && pass[3]){
            return true;
        }
        else{
            return false;
        }
        return false;
    })
    
    //check if the price is an integer or double
    function checkPrice()
    {
        //check if integer
        var reg1 = new RegExp(/^[0-9]+$/);
        //check if double
        //accepts 1.10 or 1.1
        var reg2 = new RegExp(/^[0-9]+\.[0-9]{1,2}$/);
        
        if($("#price").val()){                 
            if(reg1.test($("#price").val())){            
            return true;
            }
            else if(reg2.test($("#price").val())){            
                return true;
            }    
            else{
                alert("Invalid price input.");            
                return false;
            }
        }
        else if($("#price").val() == ""){            
            alert("Please input the rental price.");            
            $("#price").focus();
            return false;
        }
        else{
            alert("Please input the rental price.");            
            $("#price").focus();
            return false;
        }
    }
    
    //make sure at least 1 time slot is filled.
    function checkTime()
    {       
        var pass = false;
        var ids = ["#time_mon", "#time_tue", "#time_wed", "#time_thu", "#time_fri", "#time_sat", "#time_sun"]; 
        for(i in ids){
            if($(ids[i]).val()){ //the user input something here
                pass = true; //set true for now. To flag that at least a day is available
                //check if the entered format is correct
                var reg = new RegExp(/^\d{4}$/);
                var arr = $(ids[i]).val().split(' '); //split into time frame chunks                
                for(j in arr){  
                    var temp = arr[j].split('-'); //get a specific time
                    if(reg.test(temp[0]) && reg.test(temp[1])){ //if the tokens are true
                        //check if the timeslots are within 24 hours                
                        if(temp[0] <= 2400 && temp[1] <= 2400){
                            pass = true;                            
//                            alert(temp[0]);
//                            alert(temp[1]);
                        }
                        else{
                            pass = false;
                        }
                    }
                    else{
                        var day = ids[i].split('_')[1];
//                        alert(day);                        
                        if(day == "wed"){
                            day += "nesday";
                        }
                        else if(day == "thu"){
                            day += "rsday";
                        }
                        else if(day == "tue"){
                            day += "sday";
                        }
                        else if(day == "sat"){
                            day += "urday";
                        }
                        else{
                            day += "day";
                        }                
                        day = "Please fix your availability on " + day;
                        alert(day); //alert user as to what is wrong                        
                        $(ids[i]).focus();
                        pass = false;
                        return pass;
                    }
                }
            }            
        }        
        if(pass == false){
            alert("Something went wrong with your availability.");
            $("#time_mon").focus();            
        }
        return pass;
    }
    
    //validation for state selection. User must select a state to proceed        
    function checkLocation()
    {        
        if($("#loc_state").val() == 0){
            alert("Please choose a state.");
            $("#loc_state").focus();            
            return false;
        }
        else{
            return true;
        }
    }
    
    //check if the user actually chose a kitchen type
    function checkKitchen()
    {    
        if($("#kitchen_type").val() == 0){ //no selection
            alert("Please choose a kitchen type");
            $("#kitchen_type").focus();            
            return false;
        }
        else{
            return true;
        }
        
        //kitchen type input validation
        if($("#kitchen_type").val() == 4){ //user's kitchen is not covered in the drop down list                   
            if($("#kitchen_other").val() == ""){ //but no type is supplied in the other box 
                alert("Please fill in the other kitchen type box.")
                $("#kitchen_other").focus();
                return false;
            }
            else{
                return true;
            }
        }        
    }
    
    /*checks for time slot input. Consider storing results somewhere in a hidden span for php processing.*/
    $(".time").change(function(){        
        var text = $(this).val();//get the text of the element
        var arr = text.split(' '); //split the text by space into tokens like [0]0800-1300 [1]1500-1700...        
        for(i in arr){
            var temp = arr[i].split('-'); //split the timeslot into individual time tokens
            var reg = new RegExp(/^\d{4}$/); //you have no business with this code if you don't understand this                
            if(reg.test(temp[0]) && reg.test(temp[1])){ //if the tokens are true
                //check if the timeslots are within 24 hours                
                if(temp[0] <= 2400 && temp[1] <= 2400){
                    return true;
                }
            }
            else{
                var text = $(this).attr("name");
                text = text.split('_')[1];
                if(text == "wed"){
                    text += "nesday";
                }
                else if(text == "thu"){
                    text += "rsday";
                }
                else if(text == "tue"){
                    text += "sday";
                }
                else if(text == "sat"){
                    text += "urday";
                }
                else{
                    text += "day";
                }                
                text = "Please fix your availability on " + text;
                alert(text); //alert user as to what is wrong
                $(this).focus();
                return false;
            }
        }          
    })
})
