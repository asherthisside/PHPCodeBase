// console.log("Hello. Good Morning")

// Functions - Part of code, that does something but only when it is called. These are of two types; User defined and Predefined
function abc() {
    console.log("I have just created a function");
}

function greeting(name) {
    console.log("Hi " + name + ". How are You");
}

function message(name = "User") {
    console.log("Good Morning", name);
    return 0
}

// Paper 
// Wood 

// let variable = message("Shibna")
// console.log(variable);

// Functional programming 
// Return Value ??


// 45 67 

// function add(a, b) {
//     // console.log(a + b);
//     return a + b
// }

// let result1 = add(45, 67)
// let result2 = result1 * 10
// console.log(result2);



function add(a, b) {
    return a + b
}

function sub(a, b) {
    return a - b
}

function mul(a, b) {
    return a * b
}

function div(a, b) {
    return a / b
}

// JS Boxes - 3 types (alert box, )

// alert("This is a warning");
// user_input = prompt("Enter a number")
// user_input = parseFloat(user_input)
// console.log(user_input, typeof user_input);

// parseInt() and parseFloat()
// console.log(45);

// confirm box 
// choice = confirm("Are you sure ?")
// console.log(choice);

// alert("Welcome to JS Calculator")
// let input1 = parseFloat(prompt("Enter a number"))
// let input2 = parseFloat(prompt("Enter another number"))
// action_choice = prompt("Please choose an operation to perform. Press: \n1 - For Addition \n2 - For Subtraction \n3 - For Division \n4 - For Multiplication \n")

// if (action_choice == "1") {
//     console.log(add(input1, input2))
// }

// else if (action_choice == "2") {
//     console.log(sub(input1, input2));
// }

// else if (action_choice == "3") {
//     console.log(div(input1, input2));
// }

// else if (action_choice == "4") {
//     console.log(mul(input1, input2));
// }

// else {
//     console.log("Invalid choice");
// }

// switch (action_choice) {
//     case "1":
//         alert(add(input1, input2))
//         break

//     case "2":
//         alert(sub(input1, input2))
//         break

//     case "3":
//         alert(div(input1, input2))
//         break

//     case "4":
//         alert(mul(input1, input2))
//         break

//     default:
//         alert("Invalid choice");
// }

// let again = confirm("Do you want to continue")
// while (again) {
//     let input1 = parseFloat(prompt("Enter a number"))
//     let input2 = parseFloat(prompt("Enter another number"))
//     action_choice = prompt("Please choose an operation to perform. Press: \n1 - For Addition \n2 - For Subtraction \n3 - For Division \n4 - For Multiplication \n")

//     switch (action_choice) {
//         case "1":
//             alert(add(input1, input2))
//             break

//         case "2":
//             alert(sub(input1, input2))
//             break

//         case "3":
//             alert(div(input1, input2))
//             break

//         case "4":
//             alert(mul(input1, input2))
//             break

//         default:
//             alert("Invalid choice");
//     }

//     again = confirm("Do you want to continue")
// }

do {
    alert("Welcome to JS Calculator")
    let input1 = parseFloat(prompt("Enter a number"))
    let input2 = parseFloat(prompt("Enter another number"))
    action_choice = prompt("Please choose an operation to perform. Press: \n1 - For Addition \n2 - For Subtraction \n3 - For Division \n4 - For Multiplication \n")

    switch (action_choice) {
        case "1":
            alert(add(input1, input2))
            break

        case "2":
            alert(sub(input1, input2))
            break

        case "3":
            alert(div(input1, input2))
            break

        case "4":
            alert(mul(input1, input2))
            break

        default:
            alert("Invalid choice");
    }
    let again;
}while(again = confirm("Do you want to continue"))