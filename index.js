

// Variables

var inputCalculator = document.querySelector("#input");
var key = document.querySelector(".key");
var input = "";
var firstInput = "";
var secondInput = "";
var operator = [];
var result = 0;
var code ;
let host = "192.168.2.150/?fach="
let localhost = "oeffnen.php/?fach="



// Functions for the operations

const inputUpdate = (value) => {  
  input += value;
  if (firstInput === '') {
    inputCalculator.textContent = input;
  } else {
    inputCalculator.textContent = `${firstInput} ${operator[0]} ${input}`;
  };
};

const addOperator = (value) => {
  firstInput = input;
  input = '';
  operator.push(value);
  inputCalculator.textContent = `${firstInput} ${operator[0]}`;
};

const resultInput = () => {
    if (input == "1111") {
        code = "1";
        window.location = localhost + code;
    }
    else if (input == "2222") {
        code = "2";
        window.location = localhost + code;
    }
    else if (input == "3567") {
        code = "3";
        window.location = localhost + code;
    }
    else if (input == "2398") {
        code = "4";
        window.location = localhost + code;
    }
    else if (input == "7777") {
        code = "5";
        window.location = localhost + code;
    }
    else if (input == "8888") {
        code = "6";
        window.location = localhost + code;
    }
    else if (input == "3333") {
        code = "7";
        window.location = localhost + code;
    }
    else if (input == "4444") {
        code = "8";
        window.location = localhost + code;
    }
    else if (input == "5555") {
        code = "9";
        window.location = localhost + code;
    }
    else if (input == "6666") {
        code = "10";
        window.location = localhost + code;
    }
    else if (input == "9999") {
        code = "11";
        window.location = localhost + code;
    }
    else if (input == "1337") {
        code = "12";
        window.location = localhost + code;
    }
    else if (input == "9421") {
        code = "13";
        window.location = localhost + code;
    }
    else if (input == "1234") {
        code = "14";
        window.location = localhost + code;
    }
    else if (input == "4321") {
        code = "15";
        window.location = localhost + code;
    }
    else if (input == "2345") {
        code = "16";
        window.location = localhost + code;
    }
    else if (input == "3456") {
        code = "17";
        window.location = localhost + code;
    }
    else if (input == "4567") {
        code = "18";
        window.location = localhost + code;
    }
    else if (input == "5678") {
        code = "19";
        window.location = localhost + code;
    }
    else if (input == "6789") {
        code = "20";
        window.location = localhost + code;
    }
    console.log(code);
};

/*const resultInput = () => {
  if (operator[0] == "+"){
    firstInput = parseFloat(firstInput);
    input = parseFloat(input);
    result = firstInput + input;
    inputCalculator.textContent = result;
  } else if (operator[0] == "-") {
    firstInput = parseFloat(firstInput);
    input = parseFloat(input);
    result = firstInput - input;
    inputCalculator.textContent = result;
  } else if (operator[0] == 'x') {
    firstInput = parseFloat(firstInput);
    input = parseFloat(input);
    result = firstInput * input;
    inputCalculator.textContent = result;
  } else if (operator[0] == '/') {
    firstInput = parseFloat(firstInput);
    input = parseFloat(input);
    result = firstInput / input;
    inputCalculator.textContent = result;
  };
  input = '';
  firstInput = '';
  operator = [];
}; */


// functions for DEL and RESET keys

const deleteInput = () => {
  if (firstInput === '') {
    var newInput = input.substring(0, input.length-1);
    input = newInput;
    inputCalculator.textContent = input;
  } else if (input === '' && firstInput !== '') {
    input = firstInput;
    firstInput = '';
    operator = [];
    inputCalculator.textContent = input;
  } else if (input === '') {
    inputCalculator.textContent = firstInput + operator[0];
  } else if (result !== '' && input === '' && firstInput === "") {
    var newInput = result.substring(0, input.length-1);
    input = newInput;
    inputCalculator.textContent = input;
  } else {
    var newInput = input.substring(0, input.length-1);
    input = newInput;
    inputCalculator.textContent = firstInput + operator[0] + input;
  }
};

const resetInput = () => {
  input = "";
  firstInput = '';
  inputCalculator.textContent = input;
};

