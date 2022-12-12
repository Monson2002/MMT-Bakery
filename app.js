// Auto Typing
var typed = new Typed(".autotype", {
  strings: ["Cakes", "Chocolates", "Pastries", "Bakery"],
  typeSpeed: 50,
  backSpeed: 50,
  loop: true,
})


// Menu Dropdown
window.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.querySelector("#menu-btn-cakes");
  const dropdown = document.querySelector("#dropdown-cakes");

  menuBtn.addEventListener("click", () => {
    dropdown.classList.toggle("hidden");
    dropdown.classList.toggle("flex");
  });
});

window.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.querySelector("#menu-btn-chocolates");
  const dropdown = document.querySelector("#dropdown-chocolates");

  menuBtn.addEventListener("click", () => {
    dropdown.classList.toggle("hidden");
    dropdown.classList.toggle("flex");
  });
});

window.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.querySelector("#menu-btn-pastry");
  const dropdown = document.querySelector("#dropdown-pastry");

  menuBtn.addEventListener("click", () => {
    dropdown.classList.toggle("hidden");
    dropdown.classList.toggle("flex");
  });
});

window.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.querySelector("#menu-btn-cookie");
  const dropdown = document.querySelector("#dropdown-cookie");

  menuBtn.addEventListener("click", () => {
    dropdown.classList.toggle("hidden");
    dropdown.classList.toggle("flex");
  });
});


// Toggle  Cart
function showmenu() {
  let x = document.getElementById('cart-toggle');
  if (x.style.display == 'none') {
    x.style.display = 'block';
  } else {
    x.style.display = 'none';
  }
}


// Rendering Product Items
const cakesEl = document.querySelector(".menu-items-cakes");
let renderCakes = () => {
  return (cakesEl.innerHTML = cakes
    .map((x) => {
      return `    
      <div
      class="menu-items flex flex-col justify-center items-center m-4 p-4 shadow w-auto h-auto border-solid rounded-lg bg-slate-100 transition hover:scale-105 sm:m-10 sm:p-10 sm:shadow-md md:m-12 md:p-12 md:shadow-lg lg:m-4 lg:p-4 lg:shadow-xl" id="${x.id}">
      <img src="${x.itemImage}" class=" " alt="" srcset="">
      <h1 class=" flex flex-col justify-cente items-center pt-2 font-david font-semibold sm:text-xl">${x.itemName}</h1>
      <p class=" font-bold font-mono pb-1 sm:pb-2 sm:text-lg md:pb-3 md:text-xl lg:text-xl">
          Rs ${x.price}
      </p>
      <button
          class="cart btn p-2 border-solid rounded-sm transition-colors bg-white text-blue-600 active:bg-blue-700 active:text-white sm:text-xl md:rounded-md lg:rounded-lg lg:hover:shadow-lg lg:hover:bg-slate-50 lg:active:bg-blue-700 "
          type="submit" onclick="buyNow()">Buy Now</button>
      <button
          class="cart btn mt-2 p-2 border-solid rounded-sm transition-colors bg-white text-blue-600 active:bg-blue-700 active:text-white sm:text-xl md:rounded-md lg:rounded-lg lg:hover:shadow-lg lg:hover:bg-slate-50 lg:active:bg-blue-700 "
          type="submit" onclick="addCakesToCart(${x.id})">Add to Cart</button>
      </div>
    `;
    })
    .join("\n"));
};
renderCakes();

const chocolatesEl = document.querySelector(".menu-items-chocolates");
let renderChocolates = () => {
  return (chocolatesEl.innerHTML = chocolates
    .map((x) => {
      return `    
      <div
      class="menu-items flex flex-col justify-center items-center m-4 p-4 shadow w-auto h-auto border-solid rounded-lg bg-slate-100 transition hover:scale-105 sm:m-10 sm:p-10 sm:shadow-md md:m-12 md:p-12 md:shadow-lg lg:m-4 lg:p-4 lg:shadow-xl" id="${x.id}">
      <img src="${x.itemImage}" class=" " alt="" srcset="">
      <h1 class=" flex flex-col justify-cente items-center pt-2 font-david font-semibold sm:text-xl">${x.itemName}</h1>
      <p class=" font-bold font-mono pb-1 sm:pb-2 sm:text-lg md:pb-3 md:text-xl lg:text-xl">
          Rs ${x.price}
      </p>
      <button
          class="cart btn p-2 border-solid rounded-sm transition-colors bg-white text-blue-600 active:bg-blue-700 active:text-white sm:text-xl md:rounded-md lg:rounded-lg lg:hover:shadow-lg lg:hover:bg-slate-50 lg:active:bg-blue-700 "
          type="submit" onclick="buyNow()">Buy Now</button>
      <button
          class="cart btn mt-2 p-2 border-solid rounded-sm transition-colors bg-white text-blue-600 active:bg-blue-700 active:text-white sm:text-xl md:rounded-md lg:rounded-lg lg:hover:shadow-lg lg:hover:bg-slate-50 lg:active:bg-blue-700 "
          type="submit" onclick="addChocolatesToCart(${x.id})">Add to Cart</button>
      </div>
    `;
    })
    .join("\n"));
};
renderChocolates();

const pastriesEl = document.querySelector(".menu-items-pastries");
let renderPastries = () => {
  return (pastriesEl.innerHTML = pastries
    .map((x) => {
      return `    
      <div
      class="menu-items flex flex-col justify-center items-center m-4 p-4 shadow w-auto h-auto border-solid rounded-lg bg-slate-100 transition hover:scale-105 sm:m-10 sm:p-10 sm:shadow-md md:m-12 md:p-12 md:shadow-lg lg:m-4 lg:p-4 lg:shadow-xl" id="${x.id}">
      <img src="${x.itemImage}" class=" " alt="" srcset="">
      <h1 class=" flex flex-col justify-cente items-center pt-2 font-david font-semibold sm:text-xl">${x.itemName}</h1>
      <p class=" font-bold font-mono pb-1 sm:pb-2 sm:text-lg md:pb-3 md:text-xl lg:text-xl">
          Rs ${x.price}
      </p>
      <button
          class="cart btn p-2 border-solid rounded-sm transition-colors bg-white text-blue-600 active:bg-blue-700 active:text-white sm:text-xl md:rounded-md lg:rounded-lg lg:hover:shadow-lg lg:hover:bg-slate-50 lg:active:bg-blue-700 "
          type="submit" onclick="buyNow()">Buy Now</button>
      <button
          class="cart btn mt-2 p-2 border-solid rounded-sm transition-colors bg-white text-blue-600 active:bg-blue-700 active:text-white sm:text-xl md:rounded-md lg:rounded-lg lg:hover:shadow-lg lg:hover:bg-slate-50 lg:active:bg-blue-700 "
          type="submit" onclick="addPastriesToCart(${x.id})">Add to Cart</button>
      </div>
    `;
    })
    .join("\n"));
};
renderPastries();

const cookiesEl = document.querySelector(".menu-items-cookies");
let renderCookies = () => {
  return (cookiesEl.innerHTML = cookies
    .map((x) => {
      return `    
      <div
      class="menu-items flex flex-col justify-center items-center m-4 p-4 shadow w-auto h-auto border-solid rounded-lg bg-slate-100 transition hover:scale-105 sm:m-10 sm:p-10 sm:shadow-md md:m-12 md:p-12 md:shadow-lg lg:m-4 lg:p-4 lg:shadow-xl" id="${x.id}">
      <img src="${x.itemImage}" class=" " alt="" srcset="">
      <h1 class=" flex flex-col justify-cente items-center pt-2 font-david font-semibold sm:text-xl">${x.itemName}</h1>
      <p class=" font-bold font-mono pb-1 sm:pb-2 sm:text-lg md:pb-3 md:text-xl lg:text-xl">
          Rs ${x.price}
      </p>
      <button
          class="cart btn p-2 border-solid rounded-sm transition-colors bg-white text-blue-600 active:bg-blue-700 active:text-white sm:text-xl md:rounded-md lg:rounded-lg lg:hover:shadow-lg lg:hover:bg-slate-50 lg:active:bg-blue-700 "
          type="submit" onclick="buyNow()">Buy Now</button>
      <button
          class="cart btn mt-2 p-2 border-solid rounded-sm transition-colors bg-white text-blue-600 active:bg-blue-700 active:text-white sm:text-xl md:rounded-md lg:rounded-lg lg:hover:shadow-lg lg:hover:bg-slate-50 lg:active:bg-blue-700 "
          type="submit" onclick="addCookiesToCart(${x.id})">Add to Cart</button>
      </div>
    `;
    })
    .join("\n"));
};
renderCookies();


// Buy Now
function buyNow() {
  window.open("https://rzp.io/l/s5LXXERAE");
}


// Add to Cart
let cart = [];

function addCakesToCart(id) {
  if (cart.some((item) => item.id === id)) {
    alert("Product already in cart");
  } else {
    const item = cakes.find((cakes) => cakes.id === id);
    cart.push({
      ...item,
      numberOfUnits: 1,
    });
    console.log(cart);
  }
  updateCart();
}
function addChocolatesToCart(id) {
  if (cart.some((item) => item.id === id)) {
    alert("Product already in cart");
  } else {
    const item = chocolates.find((chocolates) => chocolates.id === id);
    cart.push({
      ...item,
      numberOfUnits: 1,
    });
    console.log(cart);
  }
  updateCart();
}
function addPastriesToCart(id) {
  if (cart.some((item) => item.id === id)) {
    alert("Product already in cart");
  } else {
    const item = pastries.find((pastries) => pastries.id === id);
    cart.push({
      ...item,
      numberOfUnits: 1,
    });
    console.log(cart);
  }
  updateCart();
}
function addCookiesToCart(id) {
  if (cart.some((item) => item.id === id)) {
    alert("Product already in cart");
  } else {
    const item = cookies.find((cookies) => cookies.id === id);
    cart.push({
      ...item,
      numberOfUnits: 1,
    });
    console.log(cart);
  }
  updateCart();
}


// Render Cart Items
const cartItemsEl = document.querySelector(".cart-items");
let renderCartItems = () => {
  return (cartItemsEl.innerHTML = cart
    .map((x) => {
      return `    
      <div class="flex flex-col m-2 p-2 bg-slate-100 sm:flex-row items-center gap-4 ">
        <img src="${x.itemImage}" class="w-36" alt="" />
        <div class="flex flex-col justify-between m-4 w-full">
          <div class="flex justify-between mb-3">
            <h3 class="font-semibold">
              ${x.itemName}
            </h3>
            <span class="text-lg font-semibold"> Rs.${x.price} </span>
          </div>
          <div class="flex justify-between items-center">
            <div class="flex items-center">
              Qty:
              <div class="units flex justify-center items-center px-2">
                <div class="btn-minus px-2 cursor-pointer bg-red-300 rounded-md" onclick="changeNoOfUnits('minus', ${x.id})">-</div>
                <div class="numberOfUnits px-2 border-2 rounded-md">${x.noOfUnits}</div>
                <div class="btn-plus px-2 cursor-pointer bg-green-300 rounded-md" onclick="changeNoOfUnits('plus', ${x.id})">+</div>
              </div>
            </div>
            <a href="#" class="text-purple-600 hover:text-purple-500" onclick="removeItems(${x.id})">Remove</a>
          </div>
        </div>
      </div>
    `;
    })
    .join("\n"));
};
renderCartItems();


// Calculate total Price
const subtotalEl = document.querySelector(".subtotal");
function renderSubtotal() {
  let totalPrice = 0, totalItems = 0;

  cart.forEach((item) => {
    totalPrice += item.price * item.noOfUnits;
    totalItems += item.noOfUnits;
  });

  subtotalEl.innerHTML = `
  Rs. ${totalPrice}
  `
}

function updateCart() {
  renderCartItems();
  renderSubtotal();

}


// Change No of Units
function changeNoOfUnits(action, id) {
  cart = cart.map((x) => {
    let oldUnits = x.noOfUnits;
    if (x.id === id) {
      if (action === 'minus' && oldUnits > 0) {
        oldUnits--;
      } else if (action === 'plus') {
        oldUnits++;
      }
    }
    return {
      ...x,
      noOfUnits: oldUnits,
    };
  });
  updateCart()
}


// Removing Items
function removeItems(id) {
  cart = cart.filter((item) => item.id !== id);
  updateCart();
}


// ChatBot
// Collapsible
var coll = document.getElementsByClassName("collapsible");

for (let i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");

        var content = this.nextElementSibling;

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}

function getTime() {
    let today = new Date();
    hours = today.getHours();
    minutes = today.getMinutes();

    if (hours < 10) {
        hours = "0" + hours;
    }

    if (minutes < 10) {
        minutes = "0" + minutes;
    }

    let time = hours + ":" + minutes;
    return time;
}

// Gets the first message
function firstBotMessage() {
    let firstMessage = "Welcome to MMT Bakery!"
    let secondMessage = "Type in the chatbox the code for your query:"
    let thirdMessage = "1 :- Menu Enquiry"
    let fourthMessage = "2 :- Order Enquiry"
    let fifthMessage = "3 :- Offers"

    document.getElementById("botStarterMessage").innerHTML = '<p class="botText"><span>' + firstMessage + '</span></p><p class="botText"><span>' + secondMessage + '</span></p><p class="botText"><span>' + thirdMessage + '</span></p><p class="botText"><span>' + fourthMessage + '</span></p><p class="botText"><span>' + fifthMessage + '</span></p>';

    let time = getTime();

    $("#chat-timestamp").append(time);
    document.getElementById("userInput").scrollIntoView(false);
}

firstBotMessage();

// Retrieves the response
function getHardResponse(userText) {
    let botResponse = getBotResponse(userText);
    let botHtml = '<p class="botText"><span>' + botResponse + '</span></p>';
    $("#chatbox").append(botHtml);

    document.getElementById("chat-bar-bottom").scrollIntoView(true);
}

//Gets the text text from the input box and processes it
function getResponse() {
    let userText = $("#textInput").val();

    // if (userText == "") {
    //     userText = "Please enter a valid input !";
    // }

    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("chat-bar-bottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText);
    }, 1000)

}

// Handles sending text via button clicks
function buttonSendText(sampleText) {
    let userHtml = '<p class="userText"><span>' + sampleText + '</span></p>';

    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("chat-bar-bottom").scrollIntoView(true);

    // Uncomment this if you want the bot to respond to this buttonSendText event
    setTimeout(() => {
        getHardResponse(sampleText);
    }, 1000)
}

function sendButton() {
    getResponse();
}

// Press enter to send a message
$("#textInput").keypress(function (e) {
    if (e.which == 13) {
        getResponse();
    }
});