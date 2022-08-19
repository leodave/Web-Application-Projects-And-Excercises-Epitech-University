function objectsDeeplyEqual(v1, v2){
    if (v1===v2){
        return true
    }
    if (v1 == null || v2 == null || typeof v1 != "object" || typeof v2 != "object"){
        return false
    }
    let v1keys = Object.keys(v1)
    let v2keys = Object.keys(v2)
    if (v1keys.length != v2keys.length){
        return false
    }
    for (let key of v1keys){
        if (!v2keys.includes(key) || !objectsDeeplyEqual(v1[key],v2[key])) {
            return false
        }
        return true
    }
}
var obj = {here: {is: "an"}, object: 2};
console.log(objectsDeeplyEqual(obj, obj));
console.log(objectsDeeplyEqual(obj, {here: 1, object: 2}));
console.log(objectsDeeplyEqual(obj, {here: {is: "an"}, object: 2}));




