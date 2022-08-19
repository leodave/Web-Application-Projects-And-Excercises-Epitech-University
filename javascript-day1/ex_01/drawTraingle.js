function drawTraingle(height){
    var s = "$"
    for (i=0; i<height; i++){
            console.log(s)
            s += "$"
    } 
    var i=0
    while (i<height){
        console.log(s)
        s +='$'
        i++
    }
}
drawTraingle(6)