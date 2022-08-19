function fizzBuzz(){
    for (i=1; i<=20; i++) {
        
       
        console.log(i%5==0 && i%3==0 ? "FizzBuzz," : ( i%3==0 ? "Fizz," : ( i%5==0 ? "Buzz," : i +",")));
        
    }
    
}
console.log(fizzBuzz());

