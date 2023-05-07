   var probCell = document.getElementsByClassName("probCell");
    for (let index = 0; index < probCell.length; index++) {
      let probText = probCell[index].innerHTML;
      if (Number(probText.trim()) >= 80 && Number(probText) <= 100) {
        probCell[index].style.backgroundColor = "rgb("+ 116 +","+ 216 +","+ 96 +")";
      } 
      else if(Number(probText) >= 60 && Number(probText) <= 79) {
        probCell[index].style.backgroundColor = "rgb("+ 152 +","+ 255 +","+ 174 +")";
      }
      else if(Number(probText) >= 50 && Number(probText) <= 59) {
        // light yellow color for probability cell
        probCell[index].style.backgroundColor = "rgb("+ 253 +","+ 255 +","+ 142 +")";
      }
      else if(Number(probText) >= 20 && Number(probText) <= 49) {
        // Red color for probability cell
        probCell[index].style.backgroundColor = "rgb("+ [225, 131 , 131].join(",") +")";
      }
      else if(probText.trim().length === 0) {
        // white color for empty probability cell
        probCell[index].style.backgroundColor = "white";
      }
      else if(probText.trim().toLowerCase() == "won") {
        // Green color for probability text with Won
        probCell[index].style.fontWeight = "500";
        probCell[index].style.color = "rgb("+ [37, 203 , 3].join(",") +")";
      } 
      else if(probText.trim().toLowerCase() == "loss") {
        /* the trim method removes white spaces 
        and the toLowerCase, converts the text to lowercase 
        but the original text remains unchanged */
        /* Red color for probability text with Loss */
        probCell[index].style.fontWeight = "500";
        probCell[index].style.color = "rgb("+ [225, 131 , 131].join(",") +")";
      }
      else{}
    }
  // }
  // );