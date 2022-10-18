document.write("<h1>Hello World</h1>") 

var firstName = "Jane";                     // String type variable
var lastName = "Doe";                       // String type variable
var age = 35;                               // Number type variable
var married = true;                         // Boolean type variable
var childrenNames = ["Alice", "Bob"];       // Array type variable
var husband = { firstName: "John", lastName: "Doe", age: 35 }    
            
childrenNames.forEach(function(childName) {
    document.write("<li>" + childName + " 
   li>");
});