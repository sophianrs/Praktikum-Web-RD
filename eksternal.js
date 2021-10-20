function theme(){
    var anyColors=document.getElementById("color");

    if (anyColors.value == "white")
    {
        document.body.style.background = "white";
        document.getElementById("body").style.color = "black";
    }
    else if (anyColors.value == "black")
    {
        document.body.style.background = "black";
        document.getElementById("body").style.color = "white";
    }

    else if (anyColors.value == "pink")
    {
        document.body.style.background = "pink";
        document.getElementById("body").style.color = "black";
    }

    else {
        document.body.style.background = "lightskyblue";
        document.getElementById("body").style.color = "black";
    }
}

function weather(){
    var anyWeather=document.getElementById("weather");

    if(anyWeather.value == "Autumn")
    {
        var words = document.getElementById("word");
        words.innerText = "Every leaf speaks bliss to me, fluttering from the autumn tree.";
    }

    else if (anyWeather.value == "Dry")
    {
        var words = document.getElementById("word");
        words.innerText = "It is dry weather. We are more of the earth, farther from heaven these days."
    }

    else if (anyWeather.value == "Rainy")
    {
        var words = document.getElementById("word");
        words.innerText = "Let the rain kiss you. Let the rain beat upon your head with silver liquid drops. Let the rain sing you a lullaby."
    }

    else if (anyWeather.value == "Spring")
    {
        var words = document.getElementById("word");
        words.innerText = "You can cut all the flowers but you cannot keep Spring from coming."
    }

    else if (anyWeather.value == "Summer")
    {
        var words = document.getElementById("word");
        words.innerText = "I love how summer just wraps its arms around you like a warm blanket."
    }

    else
    {
        var words = document.getElementById("word");
        words.innerText = "In the depth of winter, I finally learned that there was in me an invincible summer."
    }
}

function factorial (){
    var getFactorial = document.getElementById("factorial");

    let result =  1;
    if (getFactorial.value == 0)
    {
        result = 0;
    }
    else if (getFactorial.value == 1)
    {
        result = 1;
    }
    else 
    {
        for(var i = getFactorial.value; i >=1; i--)
        {
            result = result * i;
        }
    }

    var getResult = document.getElementById("result");
        getResult.innerText = "The Factorial of " + getFactorial.value + " is " + result;
}