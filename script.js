$(document).ready(function()
{
    $(window).scroll(function()
    {
        if(this.scrollY > 20)
        {
            $('.navbar').addClass("sticky");
        }else
        {
            $('.navbar').removeClass("sticky");
        }
    });
});

function msg()
{
    alert("Thank You For Your Feedback!")
}

