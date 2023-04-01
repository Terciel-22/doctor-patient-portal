import './bootstrap';

import 'https://code.jquery.com/jquery-3.6.4.slim.min.js';

$(document).ready(()=>{

    // SIDEBAR
    $(".open-btn").on("click", ()=>{
        $(".sidebar").addClass("active");
    });
    $(".close-btn").on("click", ()=>{
        $(".sidebar").removeClass("active");
    });
    
    // FORM
    $("#marital_status").on("change", ()=>{
        if($("#marital_status").val() === "Married")
        {
            $("#spouse_name").removeAttr("disabled");
        }else {
            $("#spouse_name").val("");
            $("#spouse_name").attr("disabled", true);
        }
    });
})
