function getBotResponse(input) {
  input = input.toLowerCase()

  const menuItems = [
    `<div class = "p-4 m-3 text-left text-[16px] [#000] bg-[#e0e0e0] rounded-tl-md rounded-tr-md rounded-br-md">
      Cakes : <br> 
      1. Butter Cake <br> 
      2. Angel Food Cake <br> 
      3. White Chocolate Cake <br> 
      4. Chiffon Cake <br> 
      5. Cheesecake <br> 
      6. Ice-cream Cake <br>
      Chocolates : <br> 
      1. Pop Chocolate <br>
      2. White Chocolate <br> 
      3. Gems <br> 
      4. Dark Chocolate <br> 
      5. Xtra Dark <br> 
      6. Milkybar <br>
      Pastries : <br>
      1. Cherry Pastry <br>
      2. Black n White Pastry <br> 
      3. Pineapple Pastry <br> 
      4. Cream Pastry <br> 
      5. Brownie <br> 
      6. Chiffon <br>
      Bakery : <br>
      1. Crossaint <br>
      2. Wheat Twisters <br> 
      3. Crispy Rolls <br> 
      4. Choco-chip Cookie <br> 
      5. Chocolate Cookie <br> 
      6. Rainbow Cookie <br>
    </div>
    <div class = "p-4 m-1 text-left text-[16px] [#000] bg-[#e0e0e0] rounded-tl-md rounded-tr-md rounded-br-md">
      Type in the chatbox the code for your query:
    </div>
    <div class = "p-4 m-1 text-left text-[16px] [#000] bg-[#e0e0e0] rounded-tl-md rounded-tr-md rounded-br-md">
      1 :- Menu Enquiry
    </div>
    <div class = "p-4 m-1 text-left text-[16px] [#000] bg-[#e0e0e0] rounded-tl-md rounded-tr-md rounded-br-md">
      2 :- Order Enquiry
    </div>
    <div class = "p-4 m-1 text-left text-[16px] [#000] bg-[#e0e0e0] rounded-tl-md rounded-tr-md rounded-br-md">
      3 :- Offers
    </div>
    `
  ]

  const second = [
    `
    <div>
      <p class = "p-4 m-1 text-left text-[16px] [#000] bg-[#e0e0e0] rounded-tl-md rounded-tr-md rounded-br-md">
        <span>
          Contact this number for more details : 7295246705
        </span>
      </p>
      <div class = "p-4 m-1 text-left text-[16px] [#000] bg-[#e0e0e0] rounded-tl-md rounded-tr-md rounded-br-md">
        <span>
          Type in the chatbox the code for your query:
        </span>
      </div>
      <div class = "p-4 m-1 text-left text-[16px] [#000] bg-[#e0e0e0] rounded-tl-md rounded-tr-md rounded-br-md">
        <span>
          1 :- Menu Enquiry
        </span>
      </div>
      <div class = "p-4 m-1 w-auto text-left text-[16px] [#000] bg-[#e0e0e0] rounded-tl-md rounded-tr-md rounded-br-md">
        <span>
          2 :- Order Enquiry
        </span>
      </div>
      <div class = "p-4 m-1 text-left text-[16px] [#000] bg-[#e0e0e0] rounded-tl-md rounded-tr-md rounded-br-md">
        <span>
          3 :- Offers
        </span>
      </div>
    </div>
    `
  ]


  // Simple responses
  if (input == "1" || input.toLowerCase() == "menu") {
    return menuItems;
  } else if (input == "2" || input.toLowerCase() == "enquiry") {
    return second;
  } else if (input == "3" || input.toLowerCase() == "offers") {
    return "We don't have any offers right now"
  }
  else {
    return "Please enter a valid response!";
  }
}