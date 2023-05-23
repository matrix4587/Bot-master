/*const dsp = document.getElementById("dsptext");
const g = document.getElementById("gy");
dsp.addEventListener( "click",function play(){
    if(g.style.display == "block"){
        g.style.display = "none";
    }
    else{
        g.style.display = "block";
    }
})*/

// Over view code
const overview_link = document.getElementById("o");
const overview_text = document.getElementById("overview");
overview_link.addEventListener("click", function overview(){
    if(overview_text.style.display == "block"){
        overview_text.style.display = "none";
        header.style.display="block";
    }else{
        overview_text.style.display = "block";
        vission_text.style.display = "none";
        mission_text.style.display = "none";
        history_text.style.display = "none";
        header.style.display="none";
       
    }
})

//Mision code
const mission_link = document.getElementById("m");
const mission_text = document.getElementById("mission");
mission_link.addEventListener("click", function mission(){
    if(mission_text.style.display == "block"){
        mission_text.style.display = "none";
        header.style.display="block";
    }else{
        mission_text.style.display = "block";
        vission_text.style.display = "none";
        overview_text.style.display = "none";
        history_text.style.display = "none";
        header.style.display="none";
    }
})

//vision code
const vission_link = document.getElementById("v");
const vission_text = document.getElementById("vission");
vission_link.addEventListener("click", function vission(){
    if(vission_text.style.display == "block"){
        vission_text.style.display = "none";
        header.style.display="block";
    }else{
        vission_text.style.display = "block";
        mission_text.style.display = "none";
        overview_text.style.display = "none";
        history_text.style.display = "none";
        header.style.display="none";

    }
})

// history
const history_link = document.getElementById("h");
const history_text = document.getElementById("history");
history_link.addEventListener("click", function history(){
    if(history_text.style.display == "block"){
        history_text.style.display = "none";
        header.style.display="block";
    }else{
        history_text.style.display = "block";
        vission_text.style.display = "none";
        mission_text.style.display = "none";
        overview_text.style.display = "none";
        header.style.display="none";

    }
})
const header = document.getElementById("jk");