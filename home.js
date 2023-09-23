const search = () =>{
    const searchbox = document.getElementById("searching").value.toUpperCase();
    const categ=document.getElementById("card_container");
    const item = document.querySelectorAll(".content");
    const itemname=categ.getElementsByTagName("h2");

    for(var i=0; i<itemname.length; i++){
        let match=categ[i].getElementsByTagName('h2')(0);

        if(match){
            let textvalue = match.textContent || match.innerHTML
            
            if(textvalue.toUpperCase().indexOf(searchbox)>-1){
                item[i].style.display = "";
            }else{
                item[i].style.display = "none";
            }
        }
    }
}