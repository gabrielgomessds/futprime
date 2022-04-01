 /* ========================== SELECIONANDO AS CAMISAS ================================= */

 let shirts = document.querySelectorAll(".shirt_selected");
 let imgShirt = document.querySelector(".img_shirt");

 shirts.forEach((e)=>{
     e.addEventListener('click', ()=>{
         imgShirt.src = e.src;
     })
 })

 /* =========================== ABRINDO FORME PARA CUSTOMIZAR CAMISA ==================== */

 const collapse = document.querySelector('.collapse')
 let acordionButton = document.querySelector(".accordion-button");
 const symbolShirt = document.querySelector('.symbol_shirt')
 const backShirt = document.querySelector('.back_shirt');
 const custmizeShirt = document.querySelector('.customizeShirt');

 acordionButton === null ? '' : acordionButton.addEventListener('click', ()=>{
     if(collapse.classList.contains('open_customize')){
         collapse.classList.remove('open_customize')
         imgShirt.src = symbolShirt.src
         custmizeShirt.style.display = 'none'
         
         document.querySelector('.optionSymbolShirt').checked = true
         document.querySelector('.optionBackShirt').checked = false

         document.querySelector('.optionFrontShirt').disabled = false
         document.querySelector('.optionSideShirt').disabled = false
         document.querySelector('.optionSymbolShirt').disabled = false

     }else{
         collapse.classList.add('open_customize');
         imgShirt.src = backShirt.src;

         custmizeShirt.style.display = 'block'

         document.querySelector('.optionBackShirt').checked = true

         document.querySelector('.optionFrontShirt').disabled = true
         document.querySelector('.optionSideShirt').disabled = true
         document.querySelector('.optionSymbolShirt').disabled = true
     }
 })



 /* =========================== ADICIONANDO TEXTO A CAMISA ======================= */

 let textUpShirt = document.querySelector(".textUpShirt");
 let textCenterShirt = document.querySelector(".textCenterShirt");
 let textDownShirt = document.querySelector(".textDownShirt");
 let colorTextShirt = document.querySelector(".colorTextShirt");
 let quantityShirt = document.querySelector(".quantityShirt");
 let valueShirt = document.querySelector(".valueShirt").value;
 let initialPriceShirt = document.querySelector(".initialPriceShirt");
 let addValueCustomizeShirt = document.querySelector(".addValueCustomizeShirt").value;
 let valueEndShirt = document.querySelector(".valueEndShirt");
 let totalValueShirt = document.querySelector('.totalValueShirt');


 const editUp = document.querySelector(".edit_up")
 const editCenter = document.querySelector(".edit_center")
 const editDown = document.querySelector(".edit_down")

 textUpShirt.addEventListener('keyup', ()=>{
     editUp.innerHTML = textUpShirt.value;
     shirtPriceAdjustment();
 })
 textCenterShirt.addEventListener('keyup', ()=>{
     editCenter.innerHTML = textCenterShirt.value;
     shirtPriceAdjustment();
 })
 textDownShirt.addEventListener('keyup', ()=>{
     editDown.innerHTML = textDownShirt.value;
     shirtPriceAdjustment();
 })

 colorTextShirt.addEventListener('input', ()=>{
     custmizeShirt.style.color = colorTextShirt.value;
 })



 /* ========================= AJUSTANDO PREÇO DA CAMISA ==================================== */
 let inputCustomShirt = document.querySelectorAll(".inputCustomShirt");
 let checkedCustomize  = document.querySelector(".checkedCustomize");

/* ------------------------- Verificando se todos os campos da customização estão preenchidos ---------------- */
inputCustomShirt.forEach((e)=>{
    e.addEventListener('keyup', ()=>{
        if(textUpShirt.value != '' || textDownShirt.value != '' || textCenterShirt.value != ''){
            checkedCustomize.disabled = false;
        }else{
            checkedCustomize.disabled = true;
            checkedCustomize.checked = false;
        }
    });
    
});
 
/* --------------------------------- Ajustando preço se o checkbox da customização for ativo ---------------------- */
 function shirtPriceAdjustment(){
        if(checkedCustomize.checked){
            valueEndShirt.innerHTML = ((parseFloat(valueShirt) + parseFloat(addValueCustomizeShirt)) * quantityShirt.value).toFixed(2).replace('.',',')
            //totalValueShirt.value = (parseFloat(valueShirt) + parseFloat(addValueCustomizeShirt)).toFixed(2)
         }else{
             valueEndShirt.innerHTML = (parseFloat(valueShirt) * quantityShirt.value).toFixed(2).replace('.',',')
             //totalValueShirt.value = parseFloat(valueShirt).toFixed(2)
         }
   
 }


 /* ------------------------ Se o primeiro radio for marcado -------------------------------------- */

 let flexRadioDefault1 = document.querySelector("#flexRadioDefault1");
 let flexRadioDefault2 = document.querySelector("#flexRadioDefault2");
 let inputCustomizeOnly = document.querySelector(".inputCustomizeOnly");

 flexRadioDefault1.addEventListener('click', ()=>{
    if(flexRadioDefault1.checked){
        inputCustomizeOnly.disabled = true;
        inputCustomizeOnly.value = 1;
        valueEndShirt.innerHTML = parseFloat(quantityShirt.value * (parseFloat(valueShirt) + parseFloat(addValueCustomizeShirt)) ).toFixed(2).replace('.', ',');
        
    }
 });

 /* ---------------------- Ajustando preço de acordo com a quantidade ---------------------- */

 quantityShirt.addEventListener('input', ()=>{
    if(checkedCustomize.checked){
        valueEndShirt.innerHTML = parseFloat(quantityShirt.value * (parseFloat(valueShirt) + parseFloat(addValueCustomizeShirt))).toFixed(2).replace('.', ',');
    }else{
        valueEndShirt.innerHTML = parseFloat(quantityShirt.value * totalValueShirt.value).toFixed(2).replace('.', ',');
    }

});

/* --------------------- Se o segundo radio for marcado ele adiciona a customização a um número X de camisas ---------------- */

 flexRadioDefault2.addEventListener('click', ()=>{
    if(flexRadioDefault2.checked){
        inputCustomizeOnly.disabled = false;

        inputCustomizeOnly.addEventListener('input', ()=>{
            if(Number(inputCustomizeOnly.value) > quantityShirt.value){
                if(checkedCustomize.checked){
                    valueEndShirt.innerHTML = parseFloat(quantityShirt.value * (parseFloat(valueShirt) + parseFloat(addValueCustomizeShirt))).toFixed(2).replace('.', ',');
                }else{
                    valueEndShirt.innerHTML = parseFloat(quantityShirt.value * parseFloat(valueShirt)).toFixed(2).replace('.', ',');
                }
                inputCustomizeOnly.value = 1;
                flexRadioDefault1.checked = true;
                flexRadioDefault2.checked = false;
            }else{
                if(checkedCustomize.checked){
                    valueEndShirt.innerHTML = parseFloat(( (parseFloat(valueShirt) + parseFloat(addValueCustomizeShirt)) * inputCustomizeOnly.value) + (parseFloat(valueShirt) * (quantityShirt.value - inputCustomizeOnly.value))).toFixed(2).replace('.',',');
                }
    
            }
        });
        valueEndShirt.innerHTML = parseFloat(( (parseFloat(valueShirt) + parseFloat(addValueCustomizeShirt)) * inputCustomizeOnly.value) + (parseFloat(valueShirt) * (quantityShirt.value - inputCustomizeOnly.value))).toFixed(2).replace('.',',');

    }
 });



/* -------------- colocando os preços na tela ------------------------------- */
 //initialPriceShirt.innerHTML = parseFloat(valueShirt).toFixed(2).replace('.', ',')
 valueEndShirt.innerHTML = valueShirt
 totalValueShirt.value = parseFloat(valueShirt).toFixed(2).replace(',','.')



