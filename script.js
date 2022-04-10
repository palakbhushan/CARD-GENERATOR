function chan()
{
    let ch = document.body;
    ch.style.cssText = "background-image: url(./images/nignt.png); color:rgb(243, 194, 34)";

    let headi = document.getElementById("heading");
    // headi.style.cssText += "background-color: rgba(255,255,255,0.2);"
    let formEdit = document.getElementById("formHead");
    formEdit.style.cssText += "color: rgb(243, 194, 34);"

    let btn = document.getElementById("submit")
    btn.style.cssText += "color: black; background-color: rgb(243, 194, 34);"

    let save = document.getElementById("saveHead")
    save.style.cssText += "color:rgb(243, 194, 34);"

    let save1 = document.getElementsByClassName("card")
    console.log(save1)
    for(let i=0;i<save1.length;i++)
    {
        save1[i].style.cssText += "color:rgb(243, 194, 34);"
    }
    
}

function chan2()
{
    let ch = document.body;
    ch.style.cssText += "background-image: url(./images/day.png); color: black";

    let formEdit = document.getElementById("formHead");
    formEdit.style.cssText += "color: black;"

    let btn = document.getElementById("submit")
    btn.style.cssText += "color: rgb(34, 107, 243); background-color: black;"

    let save = document.getElementById("saveHead")
    save.style.cssText += "color:black;"
    
}

function createCard()
{


    let addpos = document.getElementById("1");
    let newc = addpos.cloneNode(true);
    document.getElementById("addcards").appendChild(newc);
    console.log(newc);



// fetching data of user input
    let sname = document.getElementById("name").value;
    let sroll = document.getElementById("reg").value;
    let sclass = document.getElementById("sect").value;
    let smobile = document.getElementById("mobile").value;
    let umail = document.getElementById("email").value;
    
// FECTHING position where to paste data.
   let namechng =  document.getElementsByClassName("name");
   let rollchng =  document.getElementsByClassName("reg");
   let classchng =  document.getElementsByClassName("sect");
   let mobilechng =  document.getElementsByClassName("mobile");
   let imgchng =  document.getElementsByClassName("email");

   console.log (umail)
   
   let j=1;
   for(let i=0;i<namechng.length;i++)
   {
       namechng[i+j].innerHTML = sname;
       mobilechng[i+j].innerHTML = smobile;
       classchng[i+j].innerHTML = sclass;
       rollchng[i+j].innerHTML = sroll;    
       j++;
   }

  
}

function generate()
{  

    let addimg = document.getElementById("iimg");
    let img = addimg.cloneNode(true);
    
    let sname = document.getElementById("name").value;
    let sroll = document.getElementById("reg").value;
    let sclass = document.getElementById("sect").value;
    let smobile = document.getElementById("mobile").value;
    let umail = document.getElementById("email").value;
    
 
    let addpos = document.getElementById("addcards");
    
    let div = document.createElement('div');
    div.className = 'card';

    // newc.id = sroll;

    let li1 = document.createElement('li');
    li1.textContent = sroll;

    let li2 = document.createElement('li');
    li2.textContent = smobile;

    let li3 = document.createElement('li');
    li3.textContent = sclass;

    // let img = document.createElement('img');
    // // img.textContent = umail
    // img.src = umail;
    // img.className = 'iimg'

    let h5 = document.createElement('h5');
    h5.textContent = sname;
    
    div.appendChild(img)
    div.appendChild(h5);
    div.appendChild(li3);
    div.appendChild(li1);
    div.appendChild(li2);

    addpos.appendChild(div)
    




}