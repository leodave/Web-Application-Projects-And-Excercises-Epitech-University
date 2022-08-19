class myUser{
    name;
    age;
        constructor(name=Bernand,age=42){
            this.name=name
            this.age=age
        }

    printMe(){
        console.log('Hello my name is ' + this.name + 'and i am ' + this.age + ' years old.' )
    }
}
module.exports =myUser;