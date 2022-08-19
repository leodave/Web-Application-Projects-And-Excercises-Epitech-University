function arrayIsEqual(a,b){
    if(Array.isArray(a) && Array.isArray(b)){
        for(i=0; i<a.length; i++){
            if(a[i]==b[i]){
                return true
            } 
            else {
                return false
            }
        }
    }
}

var a = [2, 3];
var b = [2, 3];
console.log(arrayIsEqual(a,b));