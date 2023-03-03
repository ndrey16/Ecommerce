
  function Warning() {
    var name = document.getElementById("fname").value;
    var email = document.getElementById("femail").value;
    var subject = document.getElementById("subject").value;
              
      if (name == null || name == "" ) {
        alert ("Nama tidak boleh kosong!");
      }else if (email == null || email == ""){
        alert ("Email tidak boleh kosong!")
      }
      else if(subject == null || subject == ""){
        alert ("Subjet tidak boleh kosong!")
      }else{
        alert("Done! message Anda telah direkam"); 
      } 
      break;  

      location.reload();  
} 