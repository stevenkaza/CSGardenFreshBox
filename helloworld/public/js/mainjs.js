$(document).ready(function() {
var counter = 0;

  // if the var they enter exists in the python, then return some bullshit
  $('#submitBand').on('click', function (event) {
    counter = counter + 1;
    if (counter > 1)
    {
      $("resultHolder").empty();
      $("#countryHolder").empty();
      $("bandBeganHolder").empty();
      $("#genresHolder").empty();
        $("#cityHolder").empty();
      $("#bandEndedHolder").empty();
      $("bandBeganHolder").empty();
      counter = 0;
    }
    bandName = $("#band").val();
    var UserAndPass = new Object();
    artistID = "6faa7ca7-0d99-4a5e-bfa6-1fd5037520c6";
    // Sending both the username and password seperated by a space delimeter (passwords and usernames would need space restriticitions)
   // sending a json string over
    $.ajax({
    type: "GET",
    async:false,
    datatype:"xml",
      url: "http://127.0.0.1:5000/users/"+bandName,
            success: function (xml) {
              // if we have a successful login, we know because the python controller returns a YES
              genres = $(xml).find("tag-list").text();
              MBID = $(xml).find("artist").text();
          
  alert("oh wow");
              // if we have a successful login, we know because the python controller returns a YES
              genreGroup = $(xml).find("tag-list").each(function(){
                alert("each one:");
             $(this).children().each(function(){
                       var tagName=this.tagName;
        var val=$(this).text();
        alert(val);

               })
              });
              newBoober= $(genres).find("sort-name").text();
              country = $(xml).find("country").text();
              startDate = $(xml).find("begin").text();
              city = $(xml).find("begin-area");
              firstCity = $(city).find("sort-name");
              // getting rid of duplicates haha
              
              
              endDate = $(xml).find("end").text();
             $("#resultHolder").append(genres);
             $("#countryHolder").append(country);
             $("#bandBeganHolder").append(startDate);
             $("#resultHolder").append(genres);
             $("#cityHolder").append(firstCity);
             
             getAlbums(MBID);
             if (endDate!="false")
               $("#bandEndedHolder").append(endDate);
             else
             {
               $("#bandEndHeader").hide();
             }
                              //do something
            },
            error: function (errormessage) {
              alert("An error occured :( in first ajax call");

                //do something else

            }
    })
  });




function getAlbums(mbid)
{
    $.ajax({
    type: "GET",
    async:false,
    datatype:"xml",
      url: "http://127.0.0.1:5000/users/getAlbum/"+mbid,
            success: function (xml) {
            
              
              genres = $(genreGroup).find("name").text();
              
              MBID = $(xml).find("artist-id");
              
              country = $(xml).find("country").text();
              startDate = $(xml).find("begin").text();
              city = $(xml).find("begin-area").text();
              
              endDate = $(xml).find("end").text();
             $("#resultHolder").append(genres);
             $("#countryHolder").append(country);
             $("#bandBeganHolder").append(startDate);
             $("#resultHolder").append(genres);
             $("#cityHolder").append(city[0]);
             
             getAlbums(MBID);
             if (endDate!="false")
               $("#bandEndedHolder").append(endDate);
             else
             {
               $("#bandEndHeader").hide();
             }
                              //do something
            },
            error: function (errormessage) {
              alert("An error occured : in second ajax call(");

                //do something else

            }
    });
  
  

}
});
 

