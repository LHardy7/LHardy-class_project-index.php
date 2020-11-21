var prices = [1.95, 2.95, 3.45, 1.75, 1.95, 2.95];
var names = ["espresso", "latte", "cappuccino", "coffee", "biscotti", "scone"];
var selectedItems = [];
var selectedNames = [];
 
$(document).ready(function() {
    //each is used to represent the one of the six img tag in the list
    $("ul img").each(function(){
        //rollover images preloaded
        //img_with_info is the attribute id
        var img_with_info = $(this).attr("id");
        //img_wo_info provides the attribute src for the regular img tag without info
        var img_wo_info  = $(this).attr("src");
        //the hover function will be triggered when the mouse hovers over an image, and will provide the img_with_info, and when the mouse moves off the img it will return to the regular img without the info; thats why we need two functions, because one is for an img with info and the other is for an img wo info
        $(this).hover(function() {
            $(this).attr("src",img_with_info);
        },
        function() {
            $(this).attr("src",img_wo_info);
        }); 
        $(this).click(function(){
           //name of item img using attribute alt
            var name = $(this).attr("alt");
            //indexOf to get the position of the array
            var index = names.indexOf(name);
            //position of the price 
            var price = prices[index]; 
            //adding price to the array of selectedItems
            selectedItems[selectedItems.length] = price; 
            //adding the name to array for selectedNames
            selectedNames[selectedNames.length] = name;
            var htmlString = "";
            $("#order").html("");
            var total = 0;
            for (var i=0;i<selectedNames.length;i++){
                htmlString += "<option>"+ "$" +selectedItems[i]+ " - " +selectedNames[i].charAt(0).toUpperCase() +selectedNames[i].slice(1)+ "</option>";
                //calculating the total of the items that were selected
                total += selectedItems[i];
            }
            //display order and display total
            $("#order").html(htmlString);
            $("#total").html("Total: $" +total.toFixed(2)); 
        });
        //Place order button being redirected to checkout.html on click
        $("#place_order").click(function() {
            $("#order_form").submit(); 
        });
        //Using a click event handler to clear the order of the total and items in the order list
        $("#clear_order").click(function() {
            total = 0;
            selectedItems.length = 0;
            selectedNames.length = 0;
            $("#order").text(" ");
            $("#total").text(" ");
        }); 
    });
});
            
    
    
         