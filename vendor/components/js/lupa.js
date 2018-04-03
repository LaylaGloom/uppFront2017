$(document).ready(function()
{
    $("#lupa").mlens(
    {
        imgSrc: $("#lupa").attr("data-big"),   // path of the hi-res version of the image
        lensShape: "circle",                // shape of the lens (circle/square)
        lensSize: 180,                  // size of the lens (in px)
        borderSize: 0.5,                  // size of the lens border (in px)
        borderColor: "#524054",                // color of the lens border (#hex)
        imgOverlay: $("#lupa").attr("data-overlay"), // path of the overlay image (optional)
        overlayAdapt: true // true if the overlay image has to adapt to the lens size (true/false)
    });
});
