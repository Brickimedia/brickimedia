$(document).ready(function ()
{
    /*
     * From http://www.queness.com/post/328/a-simple-ajax-driven-website-with-jqueryphp
    */

    /*//Check if url hash value exists (for bookmark)
    $.history.init(pageload);

    //highlight the selected link
    $('a[href=' + document.location.hash + ']').addClass('selected');

    //Seearch for link with REL set to ajax
    $('a[rel=ajax]').click(function ()
    {

        //grab the full url
        var hash = this.href;

        //remove the # value
        hash = hash.replace(/^.*#/, '');

        //for back button
        $.history.load(hash);

        //clear the selected class and add the class class to the selected link
        $('a[rel=ajax]').removeClass('selected');
        $(this).addClass('selected');

        //hide the content and show the progress bar
        $('#content').hide();
        $('#loading').show();

        //run the ajax
        getPage();

        //cancel the anchor tag behaviour
        return false;
    });
});
    
function pageload(hash) {
    //if hash value exists, run the ajax
    if (hash) getPage();    
}
        
function getPage() {
    
    //generate the parameter for the php script
    var data = 'view=' + document.location.hash.replace(/^.*#/, '');
    $.ajax({
        url: "$IP/skins/custard/loader.php",    
        type: "GET",        
        data: data,        
        cache: false,
        success: function (html) {    
        
            //hide the progress bar
            $('#loading').hide();    
            
            //add the content retrieved from ajax and put it in the #content div
            $('#content').html(html);
            
            //display the body with fadeIn transition
            $('#content').fadeIn('slow');        
        }        
    });*/
}