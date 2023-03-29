import './bootstrap';

import 'https://code.jquery.com/jquery-3.6.4.slim.min.js';

$(".open-btn").on("click", ()=>{
    $(".sidebar").addClass("active");
});
$(".close-btn").on("click", ()=>{
    $(".sidebar").removeClass("active");
});