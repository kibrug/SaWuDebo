function generatPDF(){
    const element=document.getElementById("changepdf");
    html2pdf()
    .from(element)
    .save();
    
    
    }